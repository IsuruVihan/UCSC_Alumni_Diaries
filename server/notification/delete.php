<?php
    include('../../db/db-conn.php');
    include ('../../server/session.php');
    
    $id = $_POST['id'];
    
    $query2 = "DELETE FROM notifications WHERE Id='$id'";
        if (mysqli_query($conn, $query2)) {
             
            echo "Notification has been deleted successfully";
        } else {
            echo "Server error";
        }
       