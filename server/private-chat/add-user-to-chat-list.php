<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['Id'];
$sessionemail = $_SESSION['Email'];

$query = "INSERT INTO privatechats (Person1, Person2) VALUES ('{$sessionemail}', '{$email}')";
$results=mysqli_query($conn, $query);

if ($results) {
    //notification
    $query4 = "SELECT FirstName, LastName FROM registeredmembers WHERE Email='{$sessionemail}'";
    $results4 = mysqli_query($conn, $query4);
    $row4 = mysqli_fetch_assoc($results4);

    $query2 = "INSERT INTO notifications (Email,Message) VALUES 
              ('$email','you have added to the chat list by' ' ' '{$row4['FirstName']}' ' ' '{$row4['LastName']}')
                        ";
                        mysqli_query($conn, $query2);
    echo"User has been added to your chat list";
}