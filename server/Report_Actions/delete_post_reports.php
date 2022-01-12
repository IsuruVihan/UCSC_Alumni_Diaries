<?php
    include('../../db/db-conn.php');
    include ('../../server/session.php');
    
    $id = $_POST['id'];

            $query4 = "SELECT OwnerEmail FROM reportsforposts WHERE Id='$id'";
            $results4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($results4);
    
            $query2 = "DELETE FROM reportsforposts WHERE Id='$id'";
            if (mysqli_query($conn, $query2)) {

            //notification
            $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
            $results3 = mysqli_query($conn, $query3);

            if (mysqli_num_rows($results3) > 0) {
                while ($row3 = mysqli_fetch_assoc($results3)) {  
                    $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$_SESSION['Email']} has deleted the post report submiited by {$row4['OwnerEmail']}')
                    ";
                    mysqli_query($conn, $query4);
                
                }
            }  
                echo "Report has been deleted successfully";
            } else {
                echo "Server error";
            }
       


    