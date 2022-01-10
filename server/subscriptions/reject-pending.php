<?php
    include('../../db/db-conn.php');
    
    $id = $_POST['id'];
    
    $query = "UPDATE subscriptionsdone SET Status = 'Rejected' WHERE Id='$id'";
    if (mysqli_query($conn, $query)) {
                echo "Rejected!";
        }else {
              echo "Server error";
           }