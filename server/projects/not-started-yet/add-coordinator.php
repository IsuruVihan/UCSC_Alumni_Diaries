<?php
    
    include('../../../db/db-conn.php');
    include('../../session.php');
    
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

            //notification
            $query4 = "SELECT Name FROM projects WHERE Id='{$ProjectId}'";
            $result4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($result4);

            $query5 = "SELECT Email FROM committeemembers WHERE Email='$Email' AND projectId = '{$ProjectId}'";  
            $results5 = mysqli_query($conn, $query5);

            if (mysqli_num_rows($results5) > 0) {
                while ($row5 = mysqli_fetch_assoc($results5)) {  
                    $query6 = "INSERT INTO notifications (Email,Message) VALUES ('{$row5['Email']}','you have been added as cordinator of project {$row4['Name']} by {$_SESSION['Email']}')";
                    mysqli_query($conn, $query6);
    
                    // Activity
                    $query7 = "
                        INSERT INTO activitylog (Email, Section, Activity)
                        VALUES ('{$_SESSION['Email']}', 'Projects - Not Started', 'Added {$row5['Email']} as a coordinator for Project (ID): {$ProjectId}')
                    ";
                    mysqli_query($conn, $query7);
                }
            }

            echo "<div class='message-success'>Coordinator added successfully</div>";
        } else {
            echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
    }