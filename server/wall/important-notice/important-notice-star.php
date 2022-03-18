<?php
include('../../session.php');
include('../../../db/db-conn.php');

if(isset($_SESSION['Email'])){
    $id=$_POST['id'];
    $email=$_SESSION['Email'];

    $query = "INSERT INTO starredposts (Email,PostId ) VALUES ('$email','$id')";
    $result = mysqli_query($conn, $query);
    echo 'done';
    
    // Activity
    $query7 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Wall', 'Added a star to an important notice')
    ";
    mysqli_query($conn, $query7);
}