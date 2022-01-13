<?php
    session_start();
    include('../../db/db-conn.php');
    
    $id = $_POST['id'];
    
    $query = "UPDATE subscriptionsdone SET Status = 'Rejected' WHERE Id='$id'";
    if (mysqli_query($conn, $query)) {
        //notification
        $query5 = "SELECT Email FROM subscriptionsdone WHERE Status = 'Rejected' AND  Id='$id'";
        $results5 = mysqli_query($conn, $query5);
        $row5 = mysqli_fetch_assoc($results5);

        $query6 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        $results6 = mysqli_query($conn, $query6);
                
        if (mysqli_num_rows($results6) > 0) {
            while ($row6 = mysqli_fetch_assoc($results6)) {  
                $query7 = "INSERT INTO notifications (Email,Message) VALUES ('{$row6['Email']}', '{$row5['Email']} subscription has been rejected by {$_SESSION['Email']}')
                ";
                mysqli_query($conn, $query7);
                    
            }
        }
        $query8 = "INSERT INTO notifications (Email,Message) VALUES ('{$row5['Email']}', 'your subscription has been rejected by {$_SESSION['Email']}')
        ";
        mysqli_query($conn, $query8);

                echo "Rejected!";
        }else {
              echo "Server error";
           }