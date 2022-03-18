<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$comment =$_POST['comment-edit-body'];
if(!empty($comment)){
    $query1 = "UPDATE commentsforposts SET Content='{$comment}' WHERE Id='{$_POST['comment-id-no']}'";
    $result = mysqli_query($conn, $query1);
    
    // Activity
    $query7 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Wall', 'Edited a comment')
    ";
    mysqli_query($conn, $query7);
}




   