<?php
    
    include('../../../db/db-conn.php');
    include('../../session.php');
    
    $Id = $_POST['Id'];
    
    $query = "SELECT Email FROM committeemembers WHERE Type='Coordinator' AND ProjectId='{$Id}'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $query2 = "UPDATE projects SET Status='Ongoing' WHERE Id='{$Id}'";
        if (mysqli_query($conn, $query2)) {

            //notification
            $query3 = "SELECT Name FROM projects WHERE Status='Ongoing' AND Id='{$Id}'";
            $result3 = mysqli_query($conn, $query3);
            $row3 = mysqli_fetch_assoc($result3);

            $query4 = "SELECT Email FROM committeemembers WHERE ProjectId = '{$Id}'";
            $results4 = mysqli_query($conn, $query4);
        
            if (mysqli_num_rows($results4) > 0) {
                while ($row4 = mysqli_fetch_assoc($results4)) {  
                    $query5 = "INSERT INTO notifications (Email,Message) VALUES ('{$row4['Email']}','{$row3['Name']} has been start by {$_SESSION['Email']}')";
                    mysqli_query($conn, $query5);
    
                    // Activity
                    $query8 = "
                        INSERT INTO activitylog (Email, Section, Activity)
                        VALUES ('{$_SESSION['Email']}', 'Projects - Not Started', 'Started Project (ID): {$Id}')
                    ";
                    mysqli_query($conn, $query8);
                }
            }
        
            $query6 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
            $results6 = mysqli_query($conn, $query6);
        
            if (mysqli_num_rows($results6) > 0) {
                while ($row6 = mysqli_fetch_assoc($results6)) {  
                    $query7 = "INSERT INTO notifications (Email,Message) VALUES ('{$row6['Email']}','{$row3['Name']} has been start by {$_SESSION['Email']}')
                    ";
                    mysqli_query($conn, $query7);
                
                }
            }
        
            echo "
                <span class='message-success'>
                    Project has been started. You can track the progress under ongoing projects section.
                </span>
            ";
        } else {
            echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
        }
    } else {
        echo "<span class='message-error'>Select a coordinator for the project</span>";
    }
    
        // $query1 = "SELECT Email FROM committeemembers WHERE Type='Member' AND ProjectId='{$Id}'";
        // $result1 = mysqli_query($conn, $query1);
        // $row1 = mysqli_fetch_assoc($result1);

        // $Email=$row1['Email'];

        // $query3 = "SELECT Name FROM projects WHERE Status='Ongoing' AND Id='{$Id}'";
        // $result3 = mysqli_query($conn, $query3);
        // $row3 = mysqli_fetch_assoc($result3);

        // $Name=$row3['Name'];
 
        // $query4 = "INSERT INTO notifications (Email,Message) VALUES ('$Email','$Name Project has started')";
        // $result4=mysqli_query($conn, $query4);

        // $query5 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        // $result5 = mysqli_query($conn, $query5);
        // $row5 = mysqli_fetch_assoc($result5);

        // $mail=$row5['Email']; 

        // $query6 = "INSERT INTO notifications (Email,Message) VALUES ('$mail','$Name Project has started')";
        // $result6=mysqli_query($conn, $query6);
