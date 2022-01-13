<?php
    include('../../db/db-conn.php');
  
    $id = $_POST['id'];
    
    $query = "UPDATE notifications SET Status='Viewed' WHERE Id='{$id}'";
        if (mysqli_query($conn, $query)) {  
            header("Location: ../../pages/notifications.php");
        } else {
            echo "Server error";
        }
       