<?php
    include('../../db/db-conn.php');
    include ('../session.php');
    
    $id = $_POST['id'];
    
    $query2 = "DELETE FROM notifications WHERE Id='$id'";
    if (mysqli_query($conn, $query2)) {
        echo "Notification has been deleted successfully";
    
        // Activity
        $query3 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Notifications', 'Notification deleted')
        ";
        mysqli_query($conn, $query3);
    } else {
        echo "Server error";
    }
       