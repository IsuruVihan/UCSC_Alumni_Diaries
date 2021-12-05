<?php
include('../../session.php');
include('../../../db/db-conn.php');

if(isset($_SESSION['Email'])){
    $id=$_POST['id'];
    $email=$_SESSION['Email'];

    $query = "INSERT INTO starredposts (Email,PostId ) VALUES ('$email','$id')";
    $result = mysqli_query($conn, $query);
    echo 'done';
}