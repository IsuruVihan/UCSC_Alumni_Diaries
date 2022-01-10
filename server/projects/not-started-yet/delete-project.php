<?php
    
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    $haveErrors = 0;

    $query = "SELECT Email FROM committeemembers WHERE ProjectId='{$Id}'";
    $results = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($results)) {
        $query2 = "UPDATE registeredmembers SET Availability='1' WHERE Email='{$row['Email']}'";
        if (!mysqli_query($conn, $query2)) {
            $haveErrors = 1;
        }
    }
    
    $query3 = "DELETE FROM committeemembers WHERE ProjectId='{$Id}'";
    if (!mysqli_query($conn, $query3)) {
        $haveErrors = 1;
    }
    
    $query4 = "DELETE FROM projects WHERE Id='{$Id}'";
    if (!mysqli_query($conn, $query4)) {
        $haveErrors = 1;
    }
    
    if ($haveErrors == 1) {
        echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
    } else {
        echo "<span class='message-success'>Project has been deleted.</span>";
    }