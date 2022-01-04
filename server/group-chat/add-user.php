<?php


include('../../db/db-conn.php');
include('../session.php');

$sessionemail = $_SESSION['Email'];


$query = "INSERT INTO participantgroups (UserEmail) VALUES ('$sessionemail')";
$results=mysqli_query($conn, $query);



if ($results) {
    echo"User has been added to your chat list";
}