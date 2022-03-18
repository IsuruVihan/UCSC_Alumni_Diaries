<?php
    include('../../db/db-conn.php');
    include('../session.php');
  
    $id = $_POST['id'];
    
    $query = "UPDATE notifications SET Status='Viewed' WHERE Id='{$id}'";
    
    if (mysqli_query($conn, $query)) {
        // Activity
        $query3 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Notifications', 'Notification deleted')
        ";
        mysqli_query($conn, $query3);
        header("Location: ../../pages/notifications.php");
    } else {
        echo "Server error";
    }
       