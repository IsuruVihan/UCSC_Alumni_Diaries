<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['Id'];
$Id = $_POST['GroupId'];

$query = "INSERT INTO participantgroups (GroupChatId,UserEmail) VALUES ('$Id','$email')";
$results=mysqli_query($conn, $query);

if ($results) {
    // notification
    $query3 = "SELECT OwnerEmail,Name FROM groupchats WHERE Id = '{$Id}'";
    $result3=mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);

    $Group_Name=$row3['Name']; 
    $Owner_Email=$row3['OwnerEmail'];

    $query2 = "INSERT INTO notifications (Email,Message) VALUES ('$email','You have been Added to the $Group_Name Group By $Owner_Email')";
    $result2=mysqli_query($conn, $query2);
    
    // Activity
    $query7 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Chat', 'Added a chat group participant')
    ";
    mysqli_query($conn, $query7);
    
    echo"User has been added to your group chat list";
}else{
    echo"User has been already added to your group chat list"; 
}