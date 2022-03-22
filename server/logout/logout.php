<?php
    session_start();
    
    // Activity
    $query3 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Logout', 'Logged out')
    ";
    // mysqli_query($conn, $query3);
    
    session_unset();
    session_destroy();
    header('Location: ../../pages/login.php');