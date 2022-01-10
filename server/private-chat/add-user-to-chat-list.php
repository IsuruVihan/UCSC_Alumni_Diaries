<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['Id'];
$sessionemail = $_SESSION['Email'];

$query = "INSERT INTO privatechats (Person1, Person2) VALUES ('{$sessionemail}', '{$email}')";
$results=mysqli_query($conn, $query);



if ($results) {
    echo"User has been added to your chat list";
}