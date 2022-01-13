<?php
include('../../db/db-conn.php');
include('../session.php');

$projectId = $_POST['ProjectId'];
$amount = (int) $_POST['Amount'];

$query1 = "SELECT Amount FROM associationcash WHERE Id = '0'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

$availableAmount = $row1['Amount'];
$NewAmount = $availableAmount - $amount;

if(!empty($projectId) && !empty($amount) && $amount != 0 ){
    if($amount > 0){
        if ($NewAmount >= 0) {
            $query4 = "SELECT Amount FROM projectcash WHERE ProjectId = '$projectId'";
            $results4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($results4);

            if(mysqli_num_rows($results4) > 0){
                $updatedamount = $row4['Amount'] + $amount;
                $query3 = "UPDATE projectcash SET Amount = '$updatedamount' WHERE projectId = '$projectId'";
                $results3 = mysqli_query($conn, $query3);
            }else{
                $query5 = "INSERT INTO projectcash (ProjectId, Amount) VALUES ('$projectId', '$amount')";
                $results5 = mysqli_query($conn, $query5);
            }

            $query2 = "UPDATE associationcash SET Amount = '$NewAmount' WHERE Id = '0'";
            $results2 = mysqli_query($conn, $query2);

            $query5 = "INSERT INTO transferedcash (Amount, ProjectId, TransferedBy)
                       VALUES ('{$amount}','{$projectId}','{$_SESSION['Email']}')";
            mysqli_query($conn, $query5);

               //notification
               $query12 = "SELECT Name FROM projects WHERE Id='{$projectId}'";  
               $results12 = mysqli_query($conn, $query12);
               $row12 = mysqli_fetch_assoc($results12); 
   
               $query13 = "SELECT Email FROM committeemembers WHERE ProjectId='{$projectId}'";  
               $results13 = mysqli_query($conn, $query13);
             
               $query10 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
               $results10 = mysqli_query($conn, $query10);
               
               if (mysqli_num_rows($results10) > 0) {
                   while ($row10 = mysqli_fetch_assoc($results10)) {  
                       $query11 = "INSERT INTO notifications (Email,Message)   
                       VALUES ('{$row10['Email']}','{$_SESSION['Email']} has transfered Rs.{$amount} to project {$row12['Name']}')
                       ";
                       mysqli_query($conn, $query11);
                   
                   }
               }
               if (mysqli_num_rows($results13) > 0) {
                    while ($row13 = mysqli_fetch_assoc($results13)) {  
                        $query12 = "INSERT INTO notifications (Email,Message)   
                        VALUES ('{$row13['Email']}','{$_SESSION['Email']} has transfered Rs.{$amount} to project {$row12['Name']}')
                        ";
                        mysqli_query($conn, $query12);
                    
                    }
                }
            
            echo"Cash Successfully Transferred";
        }else {
            echo "Insufficient cash to proceed the transfer";
        }
    }else{
        echo"Enter a valid amount to transfer.";
    }
}else{
    echo"Fill both fields before submitting.";
}