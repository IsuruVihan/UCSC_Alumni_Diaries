<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$content=$_POST['post-report-content'];
$email =$_SESSION['Email'];
$postId=$_POST['post-id-no'];

if(!empty($content)){
    $query ="INSERT INTO reportsforposts (PostId,OwnerEmail,Content) VALUES ('$postId','$email','$content')";
    $result = mysqli_query($conn, $query);
}



