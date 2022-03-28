<?php
include('../../db/db-conn.php');
include('../session.php');
$Id  = $_POST['Id'];
$email = $_SESSION['Email'];
$allowedExt = array('jpg', 'jpeg', 'png');

$query = "SELECT Id,PicSrc,Name FROM groupchats WHERE Id ='{$Id}'";
$result =mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){
    if(mysqli_num_rows($result) > 0){
        echo 
            "<div class='row-01' id='row-01' name='edit-group'>
                <div class='title project-name-div' id='project-name-div'>
                    {$row['Name']}
                    <i class='fas fa-edit icon-btn ' title='Edit Group' onclick='DisplayEditProjectNameDiv()'></i>
                </div>
            <div class='edit-project-name-div' id='edit-project-name-div'>
                <div class='list-items-02'>
                    <div class='pic-button'>";
                    if ($row['PicSrc'] == 'group-chat.png') {
                        echo" 
                            <img src='../../assets/images/group-chat.png' width='44%' class='user-pic-01' alt='user-pic'>
                        ";
                    }else{
                        echo" 
                            <img src='../../uploads/group-chat/{$row['PicSrc']}' width='44%' class='user-pic-01' alt='user-pic'>
                        "; 
                    }    
                        echo" 
                            <form  id='edit-form-{$row['Id']}'  enctype='multipart/form-data' > 
                                <div class='remove-cancel-button'>
                                    <input type='file' name='file'  id='file-input-{$row['Id']}' style='display:none'>
                                    <label for='file-input-{$row['Id']}' class='label'>Choose File</label> 
                                </div>
                                    <input type='text' name='Id' value='{$row['Id']}' style='display:none'>
                                    <input type='text' value='{$row['Name']}' class='group-name' name='newName' id='newName-{$row['Id']}'/>
                                <div class='new-button'>
                                    <button class='edit-btn btn' id='edit-{$row['Id']}' onclick=Edit('{$row['Id']}')>Edit</button>
                                    <input class='cancel-btn btn' type='reset' value='Cancel' onclick='HideEditProjectNameDiv()'>
                                </div>   
                            </form>
                        </div> 
                    </div>    
                </div>
            </div>
         <div class='button-class' id='button-class'>
            <button class='participants-btn btn' id='participants-button' onclick='DisplayParticipantsList()' >Participants list</button>
            <button class='available-btn btn' id='available-button' onclick='DispalyAvailableUsers()'>Available users</button>   
        </div>
        <div class='row-02' id='chat-window'>
            <div class='results3' id='message-list'>";
        //render message            
$query3 = " SELECT Id, ChatId, SenderEmail, Message, PicSrc, Timestamp FROM chatmessages 
            WHERE isGroupChat='1' 
            AND ChatId='{$Id}' ORDER BY Timestamp";
$results3 = mysqli_query($conn, $query3);
if (mysqli_num_rows($results3) > 0 ) {
    while($row3 = mysqli_fetch_assoc($results3)) {
        $data = $row3["Id"]. ',' .$row3["ChatId"];
        if ($row3["PicSrc"] == '') {
            if ($row3["SenderEmail"] == $email) {
                echo "
                    <div class='sent-message-line' id='sent-message-line'>
                        <div class='sent-message' id='sent-message'>
                            <div class='delete-msg-container' id='delete-btn'>
                                <i class='fas fa-times-circle delete-msg-icon' onclick=onClickDeleteMsg('{$data}')></i>
                            </div>
                            <div class='content'>
                                ".$row3["Message"]."
                            </div>
                            <div class='time'>
                                ".$row3["Timestamp"]."
                            </div>
                        </div>
                    </div>";
            } else {        
                $query4="SELECT FirstName FROM Registeredmembers WHERE Email='{$row3['SenderEmail']}'";
                $result4=mysqli_query($conn,$query4);
                $row4=mysqli_fetch_assoc($result4);      
            echo "
                <div class='received-message-line'>
                    <div class='received-message'>
                        <div class='sender-name'>
                            ".$row4["FirstName"]."
                        </div>
                        <div class='content'>
                            ".$row3["Message"]."
                         </div>
                        <div class='time'>
                            ".$row3["Timestamp"]."
                        </div>
                    </div>
                </div>";
            }
        }else{
            $fileExt = explode('.', $row3["PicSrc"]);
            $fileActualExt = strtolower(end($fileExt));
            if($fileActualExt == "jpg" || $fileActualExt == "png" || $fileActualExt == "jpeg"|| $fileActualExt == "gif" ){
                if ($row3["SenderEmail"] == $email) {
                echo "
                <div class='sent-message-line' id='sent-message-line'>
                    <div class='sent-message' id='sent-message'>
                        <div class='delete-msg-container'>
                            <i class='fas fa-times-circle delete-msg-icon' onclick=onClickDeleteMsg('{$data}')></i>
                        </div>
                        <img src='../../uploads/group-chat/chat-files/".$row3["PicSrc"]."' width='99%' class='chat-pic' alt='chat-pic'/>
                        <a href='../../uploads/group-chat/chat-files/".$row3["PicSrc"]."' download>Download File</a>
                        <div class='content'>
                            ".$row3["Message"]."
                        </div>
                        <div class='time'>
                            ".$row3["Timestamp"]."
                        </div>
                    </div>
                </div>";
                } else {
                echo "
                <div class='received-message-line'>
                    <div class='received-message'>
                        <div class='sender-name'>
                            ".$row4["FirstName"]."
                        </div>
                        <img src='../../uploads/group-chat/chat-files/".$row3["PicSrc"]."' width='99%' class='chat-pic' alt='chat-pic'/>
                        <a href='../../uploads/group-chat/chat-files/".$row3["PicSrc"]."' download>Download File</a>
                        <div class='content'>
                            ".$row3["Message"]."
                        </div>
                        <div class='time'>
                            ".$row3["Timestamp"]."
                        </div>
                    </div>
                </div>";
                }
            }else{
                if ($row3["SenderEmail"] == $email) {
                    echo "
                    <div class='sent-message-line' id='sent-message-line'>
                        <div class='sent-message' id='sent-message'>
                            <div class='delete-msg-container'>
                                <i class='fas fa-times-circle delete-msg-icon' onclick=onClickDeleteMsg('{$data}')></i>
                            </div>
                            <a href='../../uploads/private-chat-files/".$row3["PicSrc"]."' download>Download File</a>
                            <div class='content'>
                                ".$row3["Message"]."
                            </div>
                            <div class='time'>
                                ".$row3["Timestamp"]."
                            </div>
                        </div>
                    </div>";
                } else {
                    echo "
                    <div class='received-message-line'>
                        <div class='received-message'>
                            <div class='sender-name'>
                                ".$row4["FirstName"]."
                            </div>
                                <a href='../../uploads/private-chat-files/".$row3["PicSrc"]."' download>Download File</a>
                            <div class='content'>
                                ".$row3["Message"]."
                            </div>
                            <div class='time'>
                                ".$row3["Timestamp"]."
                            </div>
                        </div>
                    </div> ";
                }
            }
        }
    }
 }
//end of render message
             echo"
            </div>
        </div>
            <form class='create-message-div' id='chat-window-01' method='post' enctype='multipart/form-data' action='../../server/group-chat/sent-message.php'>
                <textarea class='chat-message' id='message' name='message'></textarea>
                <input type='text' id='msgId' name='msgId' value='{$row['Id']}' style='display:none'>
                <div class='button-set'>
                    <label class='messge-sent'>
                        <input type='submit' name='submit-btn' id='submit-btn' class='messge-upload-btn btn' style='display:none' onclick=chat('{$row["Id"]}')>
                        <i class='fas fa-paper-plane chat-icon send-icon'></i>
                    </label>
                    <label class='messge-sent'>
                        <input type='file' name='file-message' id='file-btn' class='messge-upload-btn btn' style='display:none'>
                        <i class='fas fa-paperclip chat-icon attach-icon'></i>
                    </label>
                    <label class='messge-sent'>
                        <input type='reset' name='submit-btn' id='cancel-message-btn' class='messge-upload-btn btn' style='display:none'>
                        <i class='fas fa-times-circle chat-icon clear-icon'></i>
                    </label>
                </div>
            </form>";        
    echo"   
        <div class= 'row-04' id='participants-list'> 
            <div class='title-02'>
                Participants
            </div>
                <form class='Participants-filter' id='participants-filter'>
                    <div class='p_box-01'>
                        <input class='participants-field' type='text' placeholder='First Name' id='participants-firstName'/>
                        <input class='participants-field' type='text' placeholder='Last Name' id='participants-lastName'/>
                    </div>
                        <div class='box-02'>
                            <input type='submit' value='Filter' class='filter-btn btn' onclick=fiterParticipants('{$row["Id"]}')></input>
                        </div>
                </form>
            <div class='available-users-container' id='group-participants'>";

$query2="SELECT registeredmembers.FirstName,registeredmembers.LastName,registeredmembers.PicSrc,participantgroups.UserEmail,participantgroups.GroupChatId FROM registeredmembers
        INNER JOIN participantgroups ON registeredmembers.Email = participantgroups.UserEmail 
        WHERE GroupChatId='{$Id}'";
$result2 =mysqli_query($conn, $query2);
if(mysqli_num_rows($result2) > 0){    
    while($row2 = mysqli_fetch_assoc($result2)){
        if($row2["PicSrc"] === 'user-default.png'){   
            echo"<div class='available-users-item'>
                    <img src='../assets/images/user-default.png' width='10%' class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                                <input type='text' id='User-Email' value='{$row2['UserEmail']}' style='display:none'>
                                <input type='text' id='GroupId2' value='{$row['Id']}' style='display:none'>
                                <button class='remove-btn btn' onClick=OnclickRemove('{$row2["GroupChatId"]}')>Remove</button>
                            </div>
                        </div>
                    </div>";
        }else{
            echo"<div class='available-users-item'>
                    <img src='../../uploads/profile-pics/".$row2["PicSrc"]."' width='10%' class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                                <input type='text' id='User-Email' value='{$row2['UserEmail']}' style='display:none'>
                                <input type='text' id='GroupId2' value='{$row['Id']}' style='display:none'>
                            <button class='remove-btn btn' onClick=OnclickRemove('{$row2["GroupChatId"]}')>Remove</button>
                        </div>
                     </div>
                </div>";
        }
    }
}               
         echo"  
               </div>   
                <div class='chat-button'>
                    <button class='chat-btn btn' onclick='DisplayChatWindow()'>View Chat</button>
                </div>   
            </div>
            <div class='available-users' id='available-users'>
                <div class='title'>Available Users</div>
                    <form class='filter' id='filter-available'>
                        <div class='box-01'>
                            <input class='input-field' type='text' placeholder='First Name' id='first-name'/>
                            <input class='input-field' type='text' placeholder='Last Name' id='last-name'/>
                            <select class='input-field' id='select-batch'>
                                <option value='' disabled selected hidden>All</option>
                                <option value='2004/2005'>2004/2005</option>
                                <option value='2011/2012'>2011/2012</option>
                                <option value='2012/2013'>2012/2013</option>
                                <option value='2013/2014'>2013/2014</option>
                                <option value='2014/2015'>2014/2015</option>
                                <option value='2015/2016'>2015/2016</option>
                                <option value='2016/2017'>2016/2017</option>
                                <option value='2017/2018'>2017/2018</option>
                                <option value='2018/2019'>2018/2019</option>
                                <option value='2019/2020'>2019/2020</option>
                                <option value='2020/2021'>2020/2021</option>
                                <option value='2021/2022'>2021/2022</option>
                                <option value='2022/2023'>2022/2023</option>
                            </select>
                        </div>
                            <div class='box-02'>
                                <input type='submit' value='Filter' class='filter-btn btn' onclick=fiterAvailableUsers('{$row["Id"]}')></input>
                            </div>
                    </form>                        
                    <div class='available-users-container' id='availableusers'>";

$query1="SELECT Email,FirstName, LastName, PicSrc, Batch FROM registeredmembers WHERE Email != '{$email}' 
        AND Email NOT IN(SELECT UserEmail FROM participantgroups 
        WHERE GroupChatId ='{$Id}')";
$result1 =mysqli_query($conn, $query1);
if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1)){
        echo"<div class='available-users-item'>";
                if($row1["PicSrc"] === 'user-default.png'){
                    echo"<img src='../../assets/images/user-default.png' width='10%' class='user-pic' alt='user-pic'>";
                }else{
                    echo"<img src='../../uploads/profile-pics/".$row1["PicSrc"]."' width='14%' height='90%' class='user-pic' alt='user-pic'>";
                }
            echo"<div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>".$row1["FirstName"]." ".$row1["LastName"]."</div>
                                <input type='text' id='GroupId' value='{$row['Id']}' style='display:none'>
                                <button class='add-btn btn' onclick=onClickAddBtn('{$row1["Email"]}')>Add</button>
                            </div>
                        </div>
                    </div>";     
    }
}
            echo"</div>
                <div class='chat-button'>
                    <button class='chat-btn btn' onclick='DisplayChat()'>View Chat</button>
                </div>                
            </div>  
        </div>";
    }
    
}

