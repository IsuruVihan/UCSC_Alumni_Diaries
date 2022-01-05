<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['email'];

$query = "INSERT INTO bannedaccounts (Email, TBEmail) 
    VALUES ('{$email}', '{$_SESSION['Email']}')";

$results = mysqli_query($conn, $query);


  




     