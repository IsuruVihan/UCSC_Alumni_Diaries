<?php
    session_start();
    
    include('../../db/db-conn.php');
    
    $id = $_POST['id'];
    
    $query = "UPDATE subscriptionsdone SET Status = 'Accepted'  WHERE Id='{$id}'";
    if (mysqli_query($conn, $query)) {

        //notification
        $query5 = "SELECT Email FROM subscriptionsdone WHERE Status = 'Accepted'";
        $results5 = mysqli_query($conn, $query5);
        $row5 = mysqli_fetch_assoc($results5);

        $query6 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        $results6 = mysqli_query($conn, $query6);
                
        if (mysqli_num_rows($results6) > 0) {
            while ($row6 = mysqli_fetch_assoc($results6)) {  
                $query7 = "INSERT INTO notifications (Email,Message) VALUES ('{$row6['Email']}', '{$row5['Email']}' ' ' 'subscription has been accepted by {$_SESSION['Email']}')
                ";
                mysqli_query($conn, $query7);
                    
            }
        }
        $query8 = "INSERT INTO notifications (Email,Message) VALUES ('{$row5['Email']}', 'your subscription has been accepted by {$_SESSION['Email']}')
        ";
        mysqli_query($conn, $query8);

                echo "Accepted!";
    }else {
              echo "Server error";
    }
    
    $query2 = "SELECT Email FROM subscriptionsdone WHERE Id='{$id}'";
    $results2 = mysqli_query($conn, $query2);
    while ($row2 = mysqli_fetch_assoc($results2)) {
        $query3 = "SELECT SubscriptionDue, SubscriptionType FROM registeredmembers WHERE Email='{$row2['Email']}'";
        $results3 = mysqli_query($conn, $query3);
        while ($row3 = mysqli_fetch_assoc($results3)) {
            $NewDueDate=$row3['SubscriptionDue'];
            if($row3['SubscriptionType']=='Monthly') {
                // $NewDueDate('Y-m-d', strtotime($row3['SubscriptionDue'].' + 30 days'));
                // $NewDueDate = strtotime('+30 days', $NewDueDate);
                $NewDueDate = date('Y-m-d H:i:s', strtotime($NewDueDate . " +1 month"));
            }else{
                $NewDueDate = date('Y-m-d H:i:s', strtotime($NewDueDate . " +1 year"));
            }
            $query4 = "UPDATE registeredmembers SET SubscriptionDue = '{$NewDueDate}' WHERE Email = '{$row2['Email']}'";
            mysqli_query($conn, $query4);
        }
   
    }

    


   

            
    
