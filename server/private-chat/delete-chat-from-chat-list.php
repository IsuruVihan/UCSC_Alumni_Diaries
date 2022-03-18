<?php
include('../../db/db-conn.php');
include('../session.php');

$chatId = $_POST['Id'];

$query4 = "SELECT Person1,  Person2 FROM privatechats WHERE Id='{$chatId}'";
$results4 = mysqli_query($conn, $query4);
$row4 = mysqli_fetch_assoc($results4);


$query1 = "SELECT PicSrc FROM chatmessages WHERE isGroupChat='0' AND ChatId='{$chatId}'";
$results1 = mysqli_query($conn, $query1);

if (mysqli_num_rows($results1) > 0 ) {
    while($row1 = mysqli_fetch_assoc($results1)) {
        if(!empty($row1["PicSrc"])){
            $PicSrc = $row1["PicSrc"];
            $currentFile = '../../uploads/private-chat-files/' . $PicSrc;
            unlink($currentFile);
        }
    }
}

$query2 = "DELETE FROM chatmessages WHERE ChatId = '{$chatId}' AND isGroupChat = '0' ";
$results2 = mysqli_query($conn, $query2);

$query = "DELETE FROM privatechats WHERE Id = '{$chatId}'";
$results = mysqli_query($conn, $query);

if ($results) {
  //notification

  $query5 = "SELECT FirstName, LastName FROM registeredmembers WHERE Email='${row4['Person1']}'";
  $results5 = mysqli_query($conn, $query5);
  $row5 = mysqli_fetch_assoc($results5);

  $query3 = "INSERT INTO notifications (Email,Message) VALUES 
            ('{$row4['Person2']}','you have been removed from the {$row5['FirstName']} {$row5['LastName']} chat list')
                      ";
                      mysqli_query($conn, $query3);
    
    // Activity
    $query7 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Chat', 'Delete a private chat contact')
    ";
    mysqli_query($conn, $query7);
    
    echo"User has been removed from your chat list";
}