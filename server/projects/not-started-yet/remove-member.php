<?php
    
    include('../../../db/db-conn.php');
    
    $Email = $_POST['Email'];
    $ProjectId = $_POST['ProjectId'];
    
    $query = "DELETE FROM committeemembers WHERE Email='{$Email}' AND ProjectId='{$ProjectId}'";
    if (mysqli_query($conn, $query)) {
        $query2 = "UPDATE registeredmembers SET Availability='1' WHERE Email='{$Email}'";
        if (mysqli_query($conn, $query2)) {
            echo "<div class='message-success'>Committee member removed successfully</div>";
        } else {
            echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
    }