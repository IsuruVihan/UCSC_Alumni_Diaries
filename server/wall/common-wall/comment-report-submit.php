<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$content=$_POST['report-content'];
$email =$_SESSION['Email'];
$commentId=$_POST['comment-id-no'];

if(!empty($content)){
    $query ="INSERT INTO reportsforcomments (CommentId,OwnerEmail,Content) VALUES ('$commentId','$email','$content')";
    $result = mysqli_query($conn, $query);
}
