<?php
include('../../db/db-conn.php');
include('../session.php');

$chatId = $_POST['Id'];

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
    echo"User has been removed from your chat list";
}

