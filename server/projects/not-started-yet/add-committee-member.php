<?php
    
    include('../../../db/db-conn.php');
    include('../../session.php');
    
    $Email = $_POST['Email'];
    $ProjectId = $_POST['ProjectId'];
    
    $query = "INSERT INTO committeemembers (Email, ProjectId, Type) VALUES ('{$Email}', '{$ProjectId}', 'Member')";
    if (mysqli_query($conn, $query)) {
        $query2 = "UPDATE registeredmembers SET Availability='0' WHERE Email='{$Email}'";
        if (mysqli_query($conn, $query2)) {
            
            //noification
            $query3 = "SELECT Name FROM projects WHERE Id='{$ProjectId}'";
            $result3 = mysqli_query($conn, $query3);
            $row3 = mysqli_fetch_assoc($result3);

            $query4 = "SELECT Email FROM committeemembers WHERE Email='$Email' AND projectId = '{$ProjectId}'";  
            $results4 = mysqli_query($conn, $query4);

            if (mysqli_num_rows($results4) > 0) {
                while ($row4 = mysqli_fetch_assoc($results4)) {  
                    $query5 = "INSERT INTO notifications (Email,Message) VALUES ('{$row4['Email']}','you have been added as commitee member of project {$row3['Name']} by {$_SESSION['Email']}')";
                    mysqli_query($conn, $query5);
    
                    // Activity
                    $query6 = "
                        INSERT INTO activitylog (Email, Section, Activity)
                        VALUES ('{$_SESSION['Email']}', 'Projects - Not Started', 'Added {$row4['Email']} as a committee member for Project (ID): {$ProjectId}')
                    ";
                    mysqli_query($conn, $query6);
                }
            }

            echo "<div class='message-success'>Member added successfully</div>";
        } else {
            echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
    }