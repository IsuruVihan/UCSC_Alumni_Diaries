<?php

include('../../db/db-conn.php');
include('../session.php');

$ItemId = $_POST['ItemId'];
$projectId = $_POST['ProjectId'];
$quantity = $_POST['quantity'];

$query1 = "SELECT ItemName, Quantity FROM associationitems WHERE Id = '{$ItemId}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

$ItemName = $row1['ItemName'];
$availableQuantity = $row1['Quantity'];
$NewQuantity = $availableQuantity - $quantity;

if(!empty('$projectId') && !empty('$quantity') && $quantity !== '0' ){

    if ($NewQuantity > 0) {
        $query2 = "UPDATE associationitems SET Quantity = '$NewQuantity' WHERE Id = '{$ItemId}'";
        $results2 = mysqli_query($conn, $query2);

        $query3 = "INSERT INTO projectitems (ProjectId, ItemName, Quantity) VALUES ('$projectId', '$ItemName', '$quantity')";
        $results3 = mysqli_query($conn, $query3);

        echo"Items Successfully Transferred";
    }elseif($NewQuantity == 0){
        $query2 = "DELETE FROM associationitems WHERE Id = '{$ItemId}'";
        $results2 = mysqli_query($conn, $query2);

        $query3 = "INSERT INTO projectitems (ProjectId, ItemName, Quantity) VALUES ('$projectId', '$ItemName', '$quantity')";
        $results3 = mysqli_query($conn, $query3);

        echo"Items Successfully Transferred";
    }else{
        echo"Insufficient items to proceed the transfer";
    }
}else{
    echo"Fill both fields before submitting.";
}
