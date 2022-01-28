<?php
include('../../db/db-conn.php');
include('../session.php');

$id = $_POST['Id'];
$chatId = $_POST['ChatId'];
$sessionemail = $_SESSION['Email'];

$query1 = "SELECT PicSrc FROM chatmessages WHERE isGroupChat='0' AND Id='{$id}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

if(!empty($row1["PicSrc"])){
    $PicSrc = $row1["PicSrc"];
    $query2 = "DELETE FROM chatmessages WHERE Id = '{$id}' AND isGroupChat = '0'";
    $results2 = mysqli_query($conn, $query2);
    $currentFile = '../../uploads/private-chat-files/'.$PicSrc;
    unlink($currentFile);
}else{
    $query2 = "DELETE FROM chatmessages WHERE Id = '{$id}' AND isGroupChat = '0'";
    $results2 = mysqli_query($conn, $query2);
}

// Activity
$query7 = "
    INSERT INTO activitylog (Email, Section, Activity)
    VALUES ('{$_SESSION['Email']}', 'Chat', 'Delete a private chat message')
";
mysqli_query($conn, $query7);

$query = "SELECT Id, ChatId, SenderEmail, Message, PicSrc, Timestamp FROM chatmessages
          WHERE isGroupChat='0' AND ChatId='{$chatId}' ORDER BY Timestamp";
$results = mysqli_query($conn, $query);

$query2 = "SELECT Person1, Person2 FROM privatechats WHERE Id = '{$chatId}'";
$results2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($results2);

if($row2["Person1"] == $sessionemail){
    $email = $row2["Person2"];
}else{
    $email = $row2["Person1"];
}

$query3 = "SELECT FirstName FROM registeredmembers WHERE Email = '{$email}'";
$results3 = mysqli_query($conn, $query3);
$row3 = mysqli_fetch_assoc($results3);

if (mysqli_num_rows($results) > 0 ) {
    while($row = mysqli_fetch_assoc($results)) {
        $data = $row["Id"]. ',' .$row["ChatId"];
        if ($row["PicSrc"] == '') {
            if ($row["SenderEmail"] == $sessionemail) {
                echo "<div class='sent-message-line' id='sent-message-line'>
                <div class='sent-message' id='sent-message'>
                    <div class='delete-msg-container' id='delete-btn'>
                        <i class='fas fa-times-circle delete-msg-icon' onclick=onClickDeleteMsg('{$data}')></i>
                    </div>
                    <div class='content'>
                        ".$row["Message"]."
                    </div>
                    <div class='time'>
                        ".$row["Timestamp"]."
                    </div>
                </div>
            </div>";
            } else {
                echo "<div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        ".$row3["FirstName"]."
                    </div>
                    <div class='content'>
                        ".$row["Message"]."
                    </div>
                    <div class='time'>
                        ".$row["Timestamp"]."
                    </div>
                </div>
            </div>
          ";
            }
        }else{
            $fileExt = explode('.', $row["PicSrc"]);
            $fileActualExt = strtolower(end($fileExt));
            if($fileActualExt == "jpg" || $fileActualExt == "png" || $fileActualExt == "jpeg"
                || $fileActualExt == "gif" ){
                if ($row["SenderEmail"] == $sessionemail) {
                    echo "<div class='sent-message-line' id='sent-message-line'>
                <div class='sent-message' id='sent-message'>
                    <div class='delete-msg-container'>
                        <i class='fas fa-times-circle delete-msg-icon' onclick=onClickDeleteMsg('{$data}')></i>
                    </div>
                    <img src='../../uploads/private-chat-files/".$row["PicSrc"]."' width='99%' class='chat-pic' alt='chat-pic'/>
                    <a href='../../uploads/private-chat-files/".$row["PicSrc"]."' download>Download File</a>
                    <div class='content'>
                        ".$row["Message"]."
                    </div>
                    <div class='time'>
                        ".$row["Timestamp"]."
                    </div>
                </div>
            </div>";
                } else {
                    echo "<div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        ".$row3["FirstName"]."
                    </div>
                    <img src='../../uploads/private-chat-files/".$row["PicSrc"]."' width='99%' class='chat-pic' alt='chat-pic'/>
                    <a href='../../uploads/private-chat-files/".$row["PicSrc"]."' download>Download File</a>
                    <div class='content'>
                        ".$row["Message"]."
                    </div>
                    <div class='time'>
                        ".$row["Timestamp"]."
                    </div>
                </div>
            </div>
          ";
                }
            }else{
                if ($row["SenderEmail"] == $sessionemail) {
                    echo "<div class='sent-message-line' id='sent-message-line'>
                <div class='sent-message' id='sent-message'>
                    <div class='delete-msg-container'>
                        <i class='fas fa-times-circle delete-msg-icon' onclick=onClickDeleteMsg('{$data}')></i>
                    </div>
                    <a href='../../uploads/private-chat-files/".$row["PicSrc"]."' download>Download File</a>
                    <div class='content'>
                        ".$row["Message"]."
                    </div>
                    <div class='time'>
                        ".$row["Timestamp"]."
                    </div>
                </div>
            </div>";
                } else {
                    echo "<div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        ".$row3["FirstName"]."
                    </div>
                    <a href='../../uploads/private-chat-files/".$row["PicSrc"]."' download>Download File</a>
                    <div class='content'>
                        ".$row["Message"]."
                    </div>
                    <div class='time'>
                        ".$row["Timestamp"]."
                    </div>
                </div>
            </div>
          ";
                }
            }
        }
    }
}