<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['email'];

$query = "DELETE FROM bannedaccounts WHERE Email = '{$email}'";
$results = mysqli_query($conn, $query);