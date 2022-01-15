<?php
    
    include('../../../db/db-conn.php');
    include('../../session.php');
    
    $Email = $_POST['Email'];
    $ProjectId = $_POST['ProjectId'];

    $query5 = "SELECT Email FROM committeemembers WHERE Email='$Email' AND projectId = '{$ProjectId}'";  
    $results5 = mysqli_query($conn, $query5);
    
    $query = "DELETE FROM committeemembers WHERE Email='{$Email}' AND ProjectId='{$ProjectId}'";
    if (mysqli_query($conn, $query)) {
        $query2 = "UPDATE registeredmembers SET Availability='1' WHERE Email='{$Email}'";
        if (mysqli_query($conn, $query2)) {
            //notification
            $query4 = "SELECT Name FROM projects WHERE Id='{$ProjectId}'";
            $result4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($result4);

            if (mysqli_num_rows($results5) > 0) {
                while ($row5 = mysqli_fetch_assoc($results5)) {  
                    $query6 = "INSERT INTO notifications (Email,Message) VALUES ('{$row5['Email']}','you have been removed from the commitee member position of {$row4['Name']} by {$_SESSION['Email']}')
                    ";
                    mysqli_query($conn, $query6);
                
                }
            }

            echo "<div class='message-success'>Committee member removed successfully</div>";

        } else {
            echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
    }