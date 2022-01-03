<?php
    include('../../db/db-conn.php');
    
    $id = $_POST['id'];
    
    $query = "UPDATE subscriptionsdone SET Status = 'Accepted'  WHERE Id='$id'";
    if (mysqli_query($conn, $query)) {
                echo "Accepted!";
        }else {
              echo "Server error";
           }

    // $query = "UPDATE subscriptionsdone SET Status = 'Accepted'  WHERE Id='$id'";
    // $results = mysqli_query($conn, $query);
    // if (mysqli_num_rows($results) > 0) {
    //     while ($row = mysqli_fetch_assoc($results)) {
    //         $NewDueDate = $row['SubscriptionDue'] 
    //         if ($row['SubType'] == 'Monthly') { 
    //             $NewDueDate += (31 days) 
    //         } 
    //         else { 
    //             $NewDueDate += (1 year) 
    //             }
    //         $query2 = "UPDATE registeredmembers SET SubscriptionsDue = '$NewDueDate' WHERE Email = '$row['Email']'";
    //         if (mysqli_query($conn, $query2)) {
    //             echo "Accepted!";
    //         }else {
    //             echo "Server error";
    //         }
    //     }
    // }
        

            
    
