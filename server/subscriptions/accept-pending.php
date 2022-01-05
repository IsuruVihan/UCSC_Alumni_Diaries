<?php
    include('../../db/db-conn.php');

    
    $id = $_POST['id'];
    
    
    

    $query2 = "SELECT Email FROM subscriptionsdone WHERE Id='$id'";
    $results2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_assoc($results2);

    $query3 = "SELECT SubscriptionDue, SubscriptionType FROM registeredmembers WHERE Email='{$row2['Email']}'";
    $results3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($results3);

    if($row3['SubscriptionType']=='Monthly') {
        $NewDueDate('Y-m-d', strtotime($row3['SubscriptionDue'].' + 30 days'));
    }else{
        $NewDueDate('Y-m-d', strtotime($row3['SubscriptionDue'].' + 1 years'));
    }

    $query = "UPDATE subscriptionsdone SET Status = 'Accepted'  WHERE Id='$id'";
    if (mysqli_query($conn, $query)) {
                echo "Accepted!";
    }else {
              echo "Server error";
    }


    $query4 = "UPDATE registeredmembers SET SubscriptionDue = '$NewDueDate' WHERE Email = '$row2['Email']'";
    mysqli_query($conn, $query4);


    
        

            
    
