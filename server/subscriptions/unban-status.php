<?php

    include('../../db/db-conn.php');
    include('../session.php');
    
    $email = $_POST['email'];
    
    $query = "DELETE FROM bannedaccounts WHERE Email = '{$email}'";
    $results = mysqli_query($conn, $query);

    // Activity
    $query2 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Admin - Subscriptions', 'User account (EMAIL): {$email} Unbanned')
    ";
    mysqli_query($conn, $query2);