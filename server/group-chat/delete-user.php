<?php

include('../../db/db-conn.php');
$Id = $_POST['Id2'];
$email = $_POST['UserEmail'];

$query = "DELETE FROM participantgroups WHERE GroupChatId='$Id' AND UserEmail='$email'";
$results=mysqli_query($conn, $query);

if ($results) {
    $query3 = "SELECT OwnerEmail,Name FROM groupchats WHERE Id = '{$Id}'";
    $result3=mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);

    $Group_Name=$row3['Name']; 
    $Owner_Email=$row3['OwnerEmail'];

    $query2 = "INSERT INTO notifications (Email,Message) VALUES ('$email','You Have been remove from the $Group_Name Group By $Owner_Email')";
    $result2=mysqli_query($conn, $query2);
    echo"User has been delete from your group chat list";
}