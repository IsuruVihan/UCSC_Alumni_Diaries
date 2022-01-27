<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_POST['email'];

$query = "INSERT INTO bannedaccounts (Email, TBEmail) VALUES ('{$email}', '{$_SESSION['Email']}')";
mysqli_query($conn, $query);

// Activity
$query2 = "
    INSERT INTO activitylog (Email, Section, Activity)
    VALUES ('{$_SESSION['Email']}', 'Admin - Subscriptions', 'User account (EMAIL): {$email} Banned')
";
mysqli_query($conn, $query2);