<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

 {

    $query = "SELECT Content,PicSrc,OwnerEmail,Timestamp,Id FROM posts WHERE isImportant='0'";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($results);

    $comment =$_POST['comment-body'];
    $email =$_SESSION['Email'];

    $postId = $_POST['post-id-no'];

    $query1 ="INSERT INTO commentsforposts (PostId,OwnerEmail,Content) VALUES ('$postId','$email','$comment')";
    $result1 = mysqli_query($conn, $query1);

}