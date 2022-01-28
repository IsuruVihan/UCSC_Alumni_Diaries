<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$content =$_POST['post-edit-content'];

if(!empty($content)){
    $query1 = "UPDATE posts SET Content='{$content}' WHERE Id='{$_POST['post-id-no']}'";
    $result = mysqli_query($conn, $query1);
    
    // Activity
    $query4 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Wall', 'Post edited')
    ";
    mysqli_query($conn, $query4);
}