<?php
include ('../../../db/db-conn.php');
$id=$_POST['id'];
$query = "DELETE FROM starredposts WHERE PostId='{$id}'";
$results = mysqli_query($conn, $query);
echo'Okay';
