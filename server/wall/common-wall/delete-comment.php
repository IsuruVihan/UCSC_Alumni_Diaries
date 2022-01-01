<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');
$id=$_POST['id'];

$query1 = "DELETE  FROM commentsforposts WHERE Id ='$id' ";
$result1 = mysqli_query($conn, $query1);

$query2 = "DELETE FROM reactsforcomments WHERE CommentId='$id'";
$result2 = mysqli_query($conn, $query2);


