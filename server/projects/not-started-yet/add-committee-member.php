<?php
    
    include('../../../db/db-conn.php');
    
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
                    $query5 = "INSERT INTO notifications (Email,Message) VALUES ('{$row4['Email']}','your are now a member of project' ' ' '{$row3['Name']}')
                    ";
                    mysqli_query($conn, $query5);
                
                }
            }

            echo "<div class='message-success'>Member added successfully</div>";
        } else {
            echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='message-error'>Server Error: " . mysqli_error($conn) . "</div>";
    }