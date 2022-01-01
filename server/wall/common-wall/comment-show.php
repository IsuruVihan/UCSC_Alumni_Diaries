<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$query = "SELECT  Content,PicSrc,OwnerEmail,Timestamp,Id FROM posts WHERE isImportant='0' ORDER by Timestamp DESC";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);

$query1 = "SELECT FirstName, LastName, PicSrc FROM registeredmembers WHERE Email='{$row['OwnerEmail']}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

$ownerEmail = $row['OwnerEmail'];

$PostId = $_POST['id']; // $postId = $row['Id'];  post id

$query2 = "SELECT  Content,PostId,OwnerEmail,Timestamp,Id FROM commentsforposts";
$results2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($results2);

$query3 = "SELECT Content,Timestamp,OwnerEmail,FirstName,PostId, LastName,commentsforposts.Id, registeredmembers.PicSrc 
                    FROM commentsforposts
                    INNER JOIN registeredmembers 
                    ON commentsforposts.OwnerEmail = registeredmembers.Email WHERE PostId ='{$PostId}' ORDER by Timestamp DESC";
$results3 = mysqli_query($conn, $query3);


    while ($row3 = mysqli_fetch_assoc($results3)){
        echo"
<div class='comment-show-outer-box'>
        <div class='comment-content-wrapper' id='comment-content-wrapper-{$row3['Id']}'>
            <div class='user-info'>
                <img src='' alt='' class='comment-dp'>
                <div class='comment-author-info'>
                    <div class='c-fname-show '>{$row3['FirstName']} {$row3['LastName']}</div>
                    <div class='c-time-show'>{$row3['Timestamp']}</div>
                </div>
            </div>

            <div class='c-txt-show'>{$row3['Content']} </div>
            <div class='comment-box-buttons'>
                <div class='comment-buttons-show'>";

                    if ($_SESSION["Email"] == $row3["OwnerEmail"]) {
                        echo"
                    <button class='filter-btn btn c-edit-show' onclick=CommentEdit({$row3['Id']})>Edit</button>
                    ";
                    }

                    if ($_SESSION["AccType"] == "TopBoard" || $_SESSION["Email"] == $row["OwnerEmail"] || $_SESSION["Email"] == $row3["OwnerEmail"] ) {
                        echo"
                    <button class='filter-btn btn c-dlt-show' onclick=DeleteComment({$row3['Id']})>Delete</button>
                    ";
                    }
                    if ( $_SESSION["Email"] != $row3["OwnerEmail"] ) {
                        echo" <button class='filter-btn btn c-report-show' onclick=DisplayCommentReport({$row3['Id']})>Report</button>
                    ";
                    }
                    echo"
                </div>
                <div class='like-box-show'>";

        $query4 = "SELECT UserEmail,CommentId,ReactType FROM reactsforcomments WHERE CommentId='{$row3['Id']}' AND UserEmail='{$_SESSION['Email']}' AND ReactType='Like'";
        $result4 = mysqli_query($conn, $query4);

        $query5 = "SELECT UserEmail,CommentId,ReactType FROM reactsforcomments WHERE CommentId='{$row3['Id']}' AND UserEmail='{$_SESSION['Email']}' AND ReactType='DisLike'";
        $result5 = mysqli_query($conn, $query5);

        $query6 = "SELECT COUNT(ReactType) AS commentlike FROM reactsforcomments WHERE CommentId ='{$row3['Id']}' AND ReactType='Like'";
        $result6 = mysqli_query($conn, $query6);
        $row6 = mysqli_fetch_assoc($result6);

        $query9 = "SELECT COUNT(ReactType) AS commentdislike FROM reactsforcomments WHERE CommentId ='{$row3['Id']}' AND ReactType='DisLike'";
        $result9 = mysqli_query($conn, $query9);
        $row9 = mysqli_fetch_assoc($result9);

        if (mysqli_num_rows($result4) > 0 ) {
            echo"
                            <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionRemoveComment({$row3['Id']})><i class='fas fa-fire fa-2x fire' ></i ></button >
                            <div class='post-like-count post-field' >{$row6['commentlike']}</div>
                            <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionChangeComment({$row3['Id']})><i class='fas fa-frown fa-2x' aria - hidden = 'true' ></i ></button >
                            <div class='post-dislike-count post-field' >{$row9['commentdislike']}</div >";}
        else if(mysqli_num_rows($result5) > 0 ) {
            echo"      
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionChangeComment({$row3['Id']})><i class='fas fa-fire fa-2x ' ></i ></button >
                                <div class='post-like-count post-field' >{$row6['commentlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionRemoveComment({$row3['Id']})><i class='fas fa-frown fa-2x frown' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row9['commentdislike']}</div >
                            ";}
        else{
            echo"      
                                <button class='thumb-icon' id = 'lit-{$row['Id']}' onclick = LitFunctionComment({$row3['Id']})><i class='fas fa-fire fa-2x ' ></i ></button >
                                <div class='post-like-count post-field' >{$row6['commentlike']}</div>
                                <button class='thumb-icon' id = 'frown-{$row['Id']}' onclick = FrownFunctionComment({$row3['Id']})><i class='fas fa-frown fa-2x ' aria - hidden = 'true' ></i ></button >
                                <div class='post-dislike-count post-field' >{$row9['commentdislike']}</div >
                            ";
        }
        echo"
                </div>
            </div>
        </div>

        <!--comment edit-->
        <form class='comment-edit-box' id='comment-edit-box-{$row3['Id']}' >     
                <div class='user-info-edit'>
                    <img src='' alt='' class='comment-dp'>
                    <div class='comment-author-info'>
                        <div class='c-fname-show '>{$row3['FirstName']} {$row3['LastName']}</div>
                        <div class='c-time-show'>{$row3['Timestamp']}</div>
                    </div>
                </div>       
                <input type='text' value='{$row3['Id']}' name='comment-id-no' hidden>  
                <textarea class='c-txt-show' id='comment-content-{$row3['Id']}' name='comment-edit-body'>{$row3['Content']} </textarea>
                <div class='comment-edit-btn-box'>
                    <input type='submit' class='filter-btn btn save-changes-btn' value='Save Changes'>
                    <input type='reset' class='filter-btn btn save-changes-btn' onclick=HideCommentEdit({$row3['Id']}) value='Cancel'>
                </div>  
        </form>";

            echo"
        
    <!--div 2k thibila remove kala watch out if there's an error-->   

        <!--comment report-->
        <div id='comment-report-outer-box-{$row3['Id']}'>
            <form class='comment-report' id='comment-report-{$row3['Id']}'>
                <div class='box-title'>Report Comment</div>
                <textarea class='report-txt field-hover' id='comment-report-content-{$row3['Id']}' placeholder='Your content goes here' name='report-content'></textarea>
                <input type='text' value='{$row3['Id']}' name='comment-id-no' hidden>
                <div class='create-post-buttons'>
                    <input type='submit' class='filter-btn btn report-submit-button' value='Submit' onclick=CommentReportSubmit({$row3['Id']})>
                    <input type='reset' class='filter-btn btn ' onclick=HideCommentReport({$row3['Id']}) value='Cancel'>
                </div>
            </form>
        </div>
                
        
</div>
";
    }
