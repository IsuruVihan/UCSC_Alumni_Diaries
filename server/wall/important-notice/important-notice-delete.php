<?php
include ('../../../db/db-conn.php');
$id=$_POST['id'];

$query1 = "SELECT PicSrc FROM posts WHERE Id='{$id}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

$src =$row1['PicSrc'];
unlink($src);

$query = "DELETE FROM posts WHERE Id='{$id}'";
$results = mysqli_query($conn, $query);

// Activity
$query7 = "
    INSERT INTO activitylog (Email, Section, Activity)
    VALUES ('{$_SESSION['Email']}', 'Wall', 'Deleted an important notice')
";
mysqli_query($conn, $query7);