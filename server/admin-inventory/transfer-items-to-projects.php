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
