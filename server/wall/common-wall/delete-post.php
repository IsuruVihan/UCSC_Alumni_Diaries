<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');
$id=$_POST['id'];

$query0 = "SELECT * FROM posts WHERE Id='$id'";
$result0 =mysqli_query($conn, $query0);
$row0 = mysqli_fetch_assoc($result0);

$src=$row0['PicSrc'];
unlink($src);

$query = "DELETE FROM posts WHERE Id='$id'";
$result =mysqli_query($conn, $query);

$query1 = "DELETE commentsforposts,reactsforcomments FROM commentsforposts 
            INNER JOIN reactsforcomments ON commentsforposts.Id = reactsforcomments.CommentId 
             WHERE PostId='$id'";
$result1 =mysqli_query($conn, $query1);

//notification

    $query3 = "INSERT INTO notifications (Email,Message) VALUES 
    ('{$row0['OwnerEmail']}','{$_SESSION['Email']} delete your post')
        ";
    mysqli_query($conn, $query3);

$query2 = "DELETE FROM reactsforposts WHERE PostId='$id'";
$result2 =mysqli_query($conn, $query2);
