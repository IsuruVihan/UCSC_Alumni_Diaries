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

    //notification
    $query4= "SELECT FirstName, LastName FROM registeredmembers WHERE Email='{$email}'";
    $results4 = mysqli_query($conn, $query4);
    $row4 = mysqli_fetch_assoc($results4);

    $query5= "SELECT OwnerEmail  FROM posts WHERE Id='$postId'";
    $results5 = mysqli_query($conn, $query5);
    $row5 = mysqli_fetch_assoc($results5);

    $query6 = "INSERT INTO notifications (Email,Message) VALUES 
            ('{$row5['OwnerEmail']}','{$row4['FirstName']} {$row4['LastName']} has comment to your post')
                  ";
    mysqli_query($conn, $query6);

}