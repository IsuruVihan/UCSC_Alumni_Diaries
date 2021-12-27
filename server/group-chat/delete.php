<?php
    include('../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    
    $query2 = "DELETE FROM groupchats WHERE Id='$Id'";
        if (mysqli_query($conn, $query2)) {
            echo "Group has been deleted successfully";
        } else {
            echo "Server error";
        }
          
        
 