<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$content =$_POST['post-edit-content'];
if(!empty($content)){
    $query1 = "UPDATE posts SET Content='{$content}' WHERE Id='{$_POST['post-id-no']}'";
    $result = mysqli_query($conn, $query1);
}