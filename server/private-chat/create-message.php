<?php
include('../../db/db-conn.php');
include('../session.php');

$email = $_SESSION['Email'];

$message = $_POST['message'];
$message= str_replace("'","\'","$message");
$message= str_replace("","\"","$message");
$chatId = $_POST['Id'];

$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
//$allowedExt = array('jpg', 'jpeg', 'png');
//$allowedMaxSize = 100000;
$fileNameNew = uniqid( '', true) . "." . $fileActualExt;

if(!empty('$fileName') && !empty('$message')) {
    $fileDestination = '../../uploads/private-chat-files/' . $fileNameNew;
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
        $newFileSrc = $fileNameNew;
        $fileName = $_FILES['file']['tmp_name'];

        $query = "INSERT INTO chatmessages (isGroupChat, SenderEmail, Message, PicSrc, ChatId)
                  VALUES ('0','{$email}','{$message}','{$newFileSrc}', '{$chatId}')";
        $results = mysqli_query($conn, $query);
    } else {
        $query2 = "INSERT INTO chatmessages (isGroupChat, SenderEmail, Message, ChatId)
                  VALUES ('0','{$email}','{$message}','{$chatId}')";
        $results2 = mysqli_query($conn, $query2);
    }
}

