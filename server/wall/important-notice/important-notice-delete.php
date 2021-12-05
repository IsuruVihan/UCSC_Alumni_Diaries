<?php
include ('../../../db/db-conn.php');
$id=$_POST['id'];
$query = "DELETE FROM posts WHERE Id='{$id}'";
$results = mysqli_query($conn, $query);

