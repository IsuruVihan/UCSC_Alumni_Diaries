<?php
    
    include('../../../db/db-conn.php');
    
    $Email = $_POST['Email'];
    $ProjectId = $_POST['ProjectId'];
    
    $query3 = "SELECT Email FROM committeemembers WHERE ProjectId='$ProjectId' AND Type='Coordinator'";
    $results3 = mysqli_query($conn, $query3);
    if (mysqli_num_rows($results3) > 0) {
        while ($row3 = mysqli_fetch_assoc($results3)) {
            $query4 = "DELETE FROM committeemembers WHERE ProjectId='$ProjectId' AND Type='Coordinator'";
            if (mysqli_query($conn, $query4)) {
                $query5 = "UPDATE registeredmembers SET Availability='1' WHERE Email='{$row3['Email']}'";
                if (!mysqli_query($conn, $query5)) {
                    echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
                }
            } else {
                echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
            }
        }
    }
    
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