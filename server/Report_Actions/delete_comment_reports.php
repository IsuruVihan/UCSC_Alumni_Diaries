<?php
    include('../../db/db-conn.php');
    
    $id = $_POST['id'];
    
            $query2 = "DELETE FROM reportsforcomments WHERE Id='$id'";
            if (mysqli_query($conn, $query2)) {
                echo "Report has been deleted successfully";
            } else {
                echo "Server error";
            }
       