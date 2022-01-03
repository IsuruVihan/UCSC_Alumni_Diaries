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