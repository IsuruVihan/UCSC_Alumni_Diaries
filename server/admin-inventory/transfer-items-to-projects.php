<?php

include('../../db/db-conn.php');
include('../session.php');

$ItemId = $_POST['ItemId'];
$projectId = $_POST['ProjectId'];
$quantity = (int) $_POST['quantity'];
$NewQuantity = 0;

$query1 = "SELECT ItemName, Quantity FROM associationitems WHERE Id = '{$ItemId}'";
$results1 = mysqli_query($conn, $query1);
while($row1 = mysqli_fetch_assoc($results1)){
    $ItemName = $row1['ItemName'];
    $availableQuantity = $row1['Quantity'];
    $NewQuantity = $availableQuantity - $quantity;
}

if(!empty($projectId) && !empty($quantity)){
    if ($quantity > 0) {
        if ($NewQuantity > 0) {
            $query4 = "SELECT Quantity FROM projectitems WHERE ProjectId = '{$projectId}' AND ItemName='{$ItemName}'";
            $results4 = mysqli_query($conn, $query4);

            if(mysqli_num_rows($results4) > 0){
                while($row4 = mysqli_fetch_assoc($results4)){
                    $updatedquantity = $row4['Quantity'] + $quantity;
                    $query3 = "UPDATE projectitems SET Quantity = '{$updatedquantity}' WHERE ProjectId = '{$projectId}' AND ItemName='{$ItemName}'";
                    mysqli_query($conn, $query3);
                }
            }else{
                $query5 = "INSERT INTO projectitems (ProjectId, ItemName, Quantity) VALUES ('{$projectId}', '{$ItemName}', '{$quantity}')";
                mysqli_query($conn, $query5);
            }

            $query2 = "UPDATE associationitems SET Quantity = '{$NewQuantity}' WHERE Id = '{$ItemId}'";
            mysqli_query($conn, $query2);

            $query5 = "INSERT INTO transfereditems (ItemName, Quantity, ProjectId, TransferedBy) 
                       VALUES ('{$ItemName}','{$quantity}','{$projectId}','{$_SESSION['Email']}')";
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
                       $query11 = "
                            INSERT INTO notifications (Email,Message)
                            VALUES ('{$row10['Email']}','{$_SESSION['Email']} has transfered {$quantity} of {$ItemName} to {$row12['Name']}')
                       ";
                       mysqli_query($conn, $query11);
    
                       // Activity
                       $query14 = "
                            INSERT INTO activitylog (Email, Section, Activity)
                            VALUES ('{$_SESSION['Email']}', 'Admin - Inventory', 'Transfered item: {$row1['ItemName']} Qty. {$quantity} to Project (ID): {$projectId}')
                       ";
                       mysqli_query($conn, $query14);
                   }
               }
               if (mysqli_num_rows($results13) > 0) {
                    while ($row13 = mysqli_fetch_assoc($results13)) {  
                        $query12 = "INSERT INTO notifications (Email,Message)   
                        VALUES ('{$row13['Email']}','{$_SESSION['Email']} has transfered {$quantity} of {$ItemName} to {$row12['Name']}')
                        ";
                        mysqli_query($conn, $query12);
                    
                    }
                }

            echo"Items Successfully Transferred";
        }elseif($NewQuantity == 0){
            $query4 = "SELECT Quantity FROM projectitems WHERE ProjectId = '{$projectId}' AND ItemName='{$ItemName}'";
            $results4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($results4);

            if(mysqli_num_rows($results4) > 0){
                $updatedquantity = $row4['Amount'] + $quantity;
                $query3 = "UPDATE projectitems SET Quantity = '{$updatedquantity}' WHERE ProjectId = '{$projectId}' AND ItemName='{$ItemName}'";
            }else{
                $query3 = "INSERT INTO projectitems (ProjectId, ItemName, Quantity) VALUES ('{$projectId}', '{$ItemName}', '{$quantity}')";
                mysqli_query($conn, $query3);
            }
            $query2 = "DELETE FROM associationitems WHERE Id = '{$ItemId}'";
            mysqli_query($conn, $query2);

            $query5 = "INSERT INTO transfereditems (ItemName, Quantity, ProjectId, TransferedBy) 
                       VALUES ('{$ItemName}','{$quantity}','{$projectId}','{$_SESSION['Email']}')";
            mysqli_query($conn, $query5);
            echo"Items Successfully Transferred";
        }else{
            echo"Insufficient items to proceed the transfer";
        }
    } else {
        echo "Enter a valid quantity to transfer.";
    }
}else{
    echo"Fill both fields before submitting.";
}
