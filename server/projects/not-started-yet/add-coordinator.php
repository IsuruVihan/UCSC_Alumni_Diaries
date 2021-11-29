<?php
    
    include('../../../db/db-conn.php');
    
    $Email = $_POST['Email'];
    $ProjectId = $_POST['ProjectId'];
    
    $query = "INSERT INTO committeemembers (Email, ProjectId, Type) VALUES ('{$Email}', '{$ProjectId}', 'Coordinator')";
    if (mysqli_query($conn, $query)) {
        $query2 = "UPDATE registeredmembers SET Availability='0' WHERE Email='{$Email}'";
        if (mysqli_query($conn, $query2)) {
            echo "<div class='message-success'>Coordinator added successfully</div>";
        } else {
            echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
    }