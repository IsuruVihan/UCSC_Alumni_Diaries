<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$query = "SELECT  Content,PicSrc,OwnerEmail,Timestamp,Id FROM posts WHERE isImportant='0' ORDER by Timestamp DESC";
$results = mysqli_query($conn, $query);

//row = posts table data
//row1 = registered members table data
//row2 = post comments data


if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {

        $pic = $row['PicSrc'];
        $array = explode("common-wall/", $pic);
        $newPath = end($array);
        $ownerEmail = $row['OwnerEmail'];
        $postId = $row['Id']; // post id

        $query1 = "SELECT FirstName, LastName, PicSrc FROM registeredmembers WHERE Email='{$row['OwnerEmail']}'";
        $results1 = mysqli_query($conn, $query1);
        $row1 = mysqli_fetch_assoc($results1);

        $query2 = "SELECT  Content,PostId,OwnerEmail,Timestamp,Id FROM commentsforposts WHERE PostId='{$postId}' ORDER by Timestamp DESC";
        $results2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($results2);

        $query3 = "SELECT Content,Timestamp,OwnerEmail,FirstName,PostId, LastName,commentsforposts.Id, registeredmembers.PicSrc 
                    FROM commentsforposts
                    INNER JOIN registeredmembers 
                    ON commentsforposts.OwnerEmail = registeredmembers.Email";
        $results3 = mysqli_query($conn, $query3);
        $row3 = mysqli_fetch_assoc($results3);

        $query4 = "SELECT UserEmail,PostId,ReactType FROM reactsforposts WHERE PostId='{$row['Id']}' AND UserEmail='{$_SESSION['Email']}' AND ReactType='Like'";
        $result4 = mysqli_query($conn, $query4);
        $row4 = mysqli_fetch_assoc($result4);

        $query5 = "SELECT UserEmail,PostId,ReactType FROM reactsforposts WHERE PostId='{$row['Id']}' AND UserEmail='{$_SESSION['Email']}' AND ReactType='DisLike'";
        $result5 = mysqli_query($conn, $query5);

        $query7 = "SELECT COUNT(ReactType) AS postlike FROM reactsforposts WHERE PostId='{$row['Id']}' AND ReactType ='Like'";
        $result7 = mysqli_query($conn, $query7);
        $row7 = mysqli_fetch_assoc($result7);

        $query8 = "SELECT COUNT(ReactType) AS postdislike FROM reactsforposts WHERE PostId='{$row['Id']}' AND ReactType ='DisLike'";
        $result8 = mysqli_query($conn, $query8);
        $row8 = mysqli_fetch_assoc($result8);

        if($row['Id'] == $row4['PostId']) {
            if (!empty($pic)) {
                echo "    
            <div  class='post-content' >
                   <div id='post-content-{$row['Id']}'>     
                            ";
                if ($_SESSION["AccType"] == "TopBoard" || $_SESSION["Email"] == $row['OwnerEmail']) {
                    echo "
                    <div class='post-content-row1' >
                        <img src='../uploads/profile-pics/{$row1['PicSrc']}' alt='' class='dp-box' >
                        <div class='f-name'>{$row1['FirstName']} {$row1['LastName']}</div> 
                        <div class='post-time'>{$row['Timestamp']}</div>
                        <button class='filter-btn btn post-delete' id='post-delete-{$row['Id']}' onclick=PostDelete({$row['Id']}) >Delete</button>
            ";
                } else {
                    echo "
                    <div class='post-content-row1-1' >
                         <img src='../uploads/profile-pics/{$row1['PicSrc']}' alt='' class='dp-box' >
                         <div class='name-time-flex'> 
                             <div class='f-name-1'>{$row1['FirstName']} {$row1['LastName']}</div> 
                             <div class='post-time-1'>{$row['Timestamp']}</div>
                         </div>
                         ";
                }
                echo "
                            <div id='flash-message-{$row['Id']}' ></div>
                        </div>
                        <div class='post-title1'>
                        </div>
                        <div class='content'>
                                <div class='post-text' id='post-content-{$row['Id']}'>{$row['Content']}</div>
                        </div>
                        <div class='pic-content-container' >                         
                             <img src='../uploads/wall/common-wall/$newPath' alt='' class='pic-box'>          
                        </div>
                                       
                        <div class='post-button-set'>
                            <div class='btn-set'>
                                ";
                if ($_SESSION["Email"] != $row["OwnerEmail"]) {
                    echo "
                                <button class='filter-btn btn report-btn' onclick=DisplayPostReport({$row['Id']}) id='post-report-{$row['Id']}'>Report</button>
                           ";
                }
                if ($_SESSION["Email"] == $row["OwnerEmail"]) {
                    echo "
                       <button class='filter-btn btn report-btn' onclick=DisplayPostEdit({$row['Id']}) id='post-edit-{$row['Id']}'>Edit</button>
                  ";
                }
                echo "
                                <button class='filter-btn btn show-comment-btn' onclick=ShowComments({$row['Id']}) id='post-comment-show-{$row['Id']}'>Show Comment</button>
                                <button class='filter-btn btn comment-btn' onclick=DisplayAddComment({$row['Id']}) id='post-add-comment-{$row['Id']}'>Comment</button>
                            </div>
                        <!-- click kalama insert eka gihin  yana ekai. like nm unlike vena vidiyatai dekata kadala gahanna-->
                            
                            <div class='like-dislike-cell'>";
                if (mysqli_num_rows($result4) > 0) {
                    echo "
                            <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionRemove({$row['Id']})><i class='fas fa-fire fa-2x fire' ></i ></button >
                            <div class='post-like-count post-field' >{$row7['postlike']}</div>
                            <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionChange({$row['Id']})><i class='fas fa-frown fa-2x' aria - hidden = 'true' ></i ></button >
                            <div class='post-dislike-count post-field' >{$row8['postdislike']}</div >";
                } else if (mysqli_num_rows($result5) > 0) {
                    echo "      
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionChange({$row['Id']})><i class='fas fa-fire fa-2x ' ></i ></button >
                                <div class='post-like-count post-field' >{$row7['postlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionRemove({$row['Id']})><i class='fas fa-frown fa-2x frown' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row8['postdislike']}</div >
                            ";
                } else {
                    echo "      
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunction({$row['Id']})><i class='fas fa-fire fa-2x ' ></i ></button >
                                <div class='post-like-count post-field' >{$row7['postlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunction({$row['Id']})><i class='fas fa-frown fa-2x ' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row8['postdislike']}</div >
                            ";
                }
                echo "
                            </div>
                        </div>
                </div>

                <!-- post edit-->
                        
                <form class='post-content-row1-edit'  id='post-edit-show-{$row['Id']}'>
                    <div class='flex-row'>
                    <img src='../uploads/profile-pics/{$row1['PicSrc']}' alt='' class='dp-box' >
                    <div class='name-time-flex'> 
                        <div class='f-name-1'>{$row1['FirstName']} {$row1['LastName']}</div> 
                        <div class='post-time-1'>{$row['Timestamp']}</div>
                    </div>
                    </div>
                    <div class='content-edit'>
                        <textarea class='post-text-edit' name='post-edit-content' id='post-content-body-{$row['Id']}'>{$row['Content']}</textarea>
                    </div>
                    <input type='text' value='{$row['Id']}' name='post-id-no' hidden>  
                    <div class='post-edit-btn-box'>
                        <input type='submit' class='filter-btn btn save-changes-btn' value='Save Changes'>
                        <input type='reset' class='filter-btn btn save-changes-btn' onclick=ShowPostHideEdit({$row['Id']}) value='Cancel'>
                    </div>
                </form>
                        
                  
                        <!--Post Report -->

                        <form class='post-report' id='post-report-box-{$row['Id']}'>
                            <div class='box-title'>Report Post</div>
                            <textarea class='report-txt field-hover' id='post-report-content-{$row['Id']}' name='post-report-content' placeholder='Your content goes here'></textarea>
                            <input type='text' value='{$row['Id']}' name='post-id-no' hidden>
                            <div class='create-post-buttons'>
                                <button type='submit' class='filter-btn btn' onclick=SubmitPostReport({$row['Id']})>Submit</button>
                                <button class='filter-btn btn' onclick=HidePostReport({$row['Id']})>Cancel</button>
                            </div>
                        </form>     
                    
                            <!--add comments -->
                            <div class='add-comment' id='add-comment-{$row['Id']}'>
                                <div class='box-title '>Add Comment</div>
                                <form class='comment-content' id='add-comment-form-{$row['Id']}'   enctype='multipart/form-data'>
                                    <div class='user-info'>
                                        <img src='' alt='' class='comment-dp'>
                                        <div class='text-fname-box'>
                                            <div class='c-fname field-hover'> First Name</div>
                                            <input type='text' value='{$row['Id']}' name='post-id-no' hidden>
                                            <textarea class='c-txt field-hover' placeholder='Enter your comment here' name='comment-body' id='comment-body'></textarea> 
                                        </div>
                                    </div>   
                                    <div class='comment-buttons'>
                                        <input type='submit' class='filter-btn btn c-dlt' value='Add'>
                                        <button class='filter-btn btn c-report' onclick=HideAddComment({$row['Id']})>Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Show comments box-->
                                <div class='comment-box' id='show-comment-box-{$row['Id']}'>
                                    <div class='comments-row'>
                                        <div class='box-title'>Comments</div>
                                        <button class='filter-btn btn hide-cmnt-btn' onclick=HideComments({$row['Id']})>Hide Comments</button>
                                    </div> ";


                echo "
                                        
                                    <div class='comment-content-show' id='show-comment-{$row['Id']}'> 
                               
                                    </div>
                                    ";


                echo "                                
                                    
                                </div>

                            
                            
                    </div> 
                    ";

            } else {
                echo "
                    <div class='post-content'>
                        <div id='post-content-{$row['Id']}'>
                        
                            ";
                if ($_SESSION["AccType"] == "TopBoard" || $_SESSION["Email"] == $row['OwnerEmail']) {
                    echo "
                    <div class='post-content-row1' >
                        <img src='../uploads/profile-pics/{$row1['PicSrc']}' alt='' class='dp-box' >
                        <div class='f-name'>{$row1['FirstName']} {$row1['LastName']}</div> 
                        <div class='post-time'>{$row['Timestamp']}</div>
                        <button class='filter-btn btn post-delete' id='post-delete-{$row['Id']}' onclick=PostDelete({$row['Id']}) >Delete</button>
            ";
                } else {
                    echo "
                    <div class='post-content-row1-1' >
                         <img src='../uploads/profile-pics/{$row1['PicSrc']}' alt='' class='dp-box' >
                         <div class='name-time-flex'> 
                             <div class='f-name-1'>{$row1['FirstName']} {$row1['LastName']}</div> 
                             <div class='post-time-1'>{$row['Timestamp']}</div>
                         </div>
                         ";
                }
                echo "
                        </div>
                    
                        <div class='post-title1'>    
                        </div>
                   
                        <div class='content'>
                                <div class='post-text' id='post-content-{$row['Id']}'>{$row['Content']}</div>
                        </div>
                        <div class='pic-content-container pic-hide' >                         
                                     <!-- hid the container by makeing height as 0 otherwise report comments will show before main buttons-->
                        </div>                                     
                        <div class='post-button-set'>
                            <div class='btn-set'>
                     ";
                if ($_SESSION["Email"] != $row["OwnerEmail"]) {
                    echo "
                                <button class='filter-btn btn report-btn' onclick=DisplayPostReport({$row['Id']}) id='post-report-{$row['Id']}'>Report</button>
                           ";
                }
                if ($_SESSION["Email"] == $row["OwnerEmail"]) {
                    echo "
                               <button class='filter-btn btn report-btn' onclick=DisplayPostEdit({$row['Id']}) id='post-edit-{$row['Id']}'>Edit</button>
                          ";
                }
                echo "
                                <button class='filter-btn btn show-comment-btn' onclick=ShowComments({$row['Id']}) id='post-comment-show-{$row['Id']}'>Show Comments</button>
                                <button class='filter-btn btn comment-btn' onclick=DisplayAddComment({$row['Id']}) id='post-add-comment-{$row['Id']}'>Comment</button>
                            </div>                       
                            <div class='like-dislike-cell'>";
                if (mysqli_num_rows($result4) > 0) {
                    echo "
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionRemove({$row['Id']})><i class='fas fa-fire fa-2x fire' ></i ></button >
                                <div class='post-like-count post-field' >{$row7['postlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionChange({$row['Id']})><i class='fas fa-frown fa-2x' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row8['postdislike']}</div >";
                } else if (mysqli_num_rows($result5) > 0) {
                    echo "      
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionChange({$row['Id']})><i class='fas fa-fire fa-2x ' ></i ></button >
                                <div class='post-like-count post-field' >{$row7['postlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionRemove({$row['Id']})><i class='fas fa-frown fa-2x frown' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row8['postdislike']}</div >
                            ";
                } else {
                    echo "      
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunction({$row['Id']})><i class='fas fa-fire fa-2x ' ></i ></button >
                                <div class='post-like-count post-field' >{$row7['postlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunction({$row['Id']})><i class='fas fa-frown fa-2x ' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row8['postdislike']}</div >
                            ";
                }
                echo "
                            </div>
                        </div> 
                    </div>      

                        <!-- post edit-->
                        <form class='post-content-row1-edit'  id='post-edit-show-{$row['Id']}'>
                            <div class='flex-row'>
                                <img src='../uploads/profile-pics/{$row1['PicSrc']}' alt='' class='dp-box' >
                            <div class='name-time-flex'> 
                                <div class='f-name-1'>{$row1['FirstName']} {$row1['LastName']}</div> 
                                <div class='post-time-1'>{$row['Timestamp']}</div>
                            </div>
                            </div>
                            <div class='content-edit'>
                                <textarea class='post-text-edit' name='post-edit-content' id='post-content-body-{$row['Id']}'>{$row['Content']}</textarea>
                            </div>
                            <input type='text' value='{$row['Id']}' name='post-id-no' hidden>  
                            <div class='post-edit-btn-box'>
                                <input type='submit' class='filter-btn btn save-changes-btn' value='Save Changes'>
                                <input type='reset' class='filter-btn btn save-changes-btn' onclick=ShowPostHideEdit({$row['Id']}) value='Cancel'>
                            </div>
                        </form>

                        <!--Post Report -->
                        <form class='post-report' id='post-report-box-{$row['Id']}'>
                            <div class='box-title'>Report Post</div>
                            <textarea class='report-txt field-hover' id='post-report-content-{$row['Id']}' name='post-report-content' placeholder='Your content goes here'></textarea>
                            <input type='text' value='{$row['Id']}' name='post-id-no' hidden>
                            <div class='create-post-buttons'>
                                <button type='submit' class='filter-btn btn' onclick=SubmitPostReport({$row['Id']})>Submit</button>
                                <button class='filter-btn btn' onclick=HidePostReport({$row['Id']})>Cancel</button>
                            </div>
                        </form>    
                    
                            <!--add comments -->
                            <div class='add-comment' id='add-comment-{$row['Id']}'>
                                <div class='box-title '>Add Comment</div>
                                <form class='comment-content' id='add-comment-form-{$row['Id']}'   enctype='multipart/form-data'>
                                    <div class='user-info'>
                                        <img src='' alt='' class='comment-dp'>
                                        <div class='text-fname-box'>
                                            <div class='c-fname field-hover'> First Name</div>
                                            <input type='text' value='{$row['Id']}' name='post-id-no' hidden>
                                            <textarea class='c-txt field-hover' placeholder='Enter your comment here' name='comment-body' id='comment-body'></textarea> 
                                        </div>
                                    </div>   
                                    <div class='comment-buttons'>
                                        <input type='submit' class='filter-btn btn c-dlt' value='Add'>
                                        <button class='filter-btn btn c-report' onclick=HideAddComment({$row['Id']})>Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Show comments box-->
                            <div class='comment-box' id='show-comment-box-{$row['Id']}'>
                                <div class='comments-row'>
                                    <div class='box-title'>Comments</div>
                                    <button class='filter-btn btn hide-cmnt-btn' onclick=HideComments({$row['Id']})>Hide Comments</button>
                                </div>
                                <!--comment show-->
                                <div class='comment-content-show' id='show-comment-{$row['Id']}'>
                                       
                                </div>
                            </div>

                            
                    </div> 
                    

            ";
            }
        }
    }
}


