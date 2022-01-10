<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['Id'];
$Id = $_POST['GroupId'];

$query = "INSERT INTO participantgroups (GroupChatId,UserEmail) VALUES ('$Id','$email')";
$results=mysqli_query($conn, $query);

if ($results) {
    echo"User has been added to your group chat list";
}else{
    echo"User has been already added to your group chat list"; 
}