<?php

include('../../../db/db-conn.php');
include('../../session.php');
include('../../email/body-templates/AcceptItemDonation.php');

$id = $_POST['Id'];

$query2 = "SELECT DonationFor, DonorName, DonorEmail, ItemName, Quantity, Timestamp FROM itemdonations WHERE Id = '{$id}'";
$results2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($results2);


if($row2['DonationFor'] != 'Association'){
    $query11 = "SELECT Name FROM projects WHERE Id = '{$row2['DonationFor']}'";
    $results11 = mysqli_query($conn, $query11);
    $row11 = mysqli_fetch_assoc($results11);
    $donationFor = $row11['Name'];
}else{
    $donationFor = $row2['DonationFor'];
}
$email = $row2['DonorEmail'];
$name = $row2['DonorName'];
$item = $row2['ItemName'];
$quantity = $row2['Quantity'];
$timestamp = $row2['Timestamp'];

if (mail(
    $email,
    "Item Donation Accepted",
    AcceptItemDonation($name, $item, $quantity, $donationFor, $timestamp),
    "From: ucsc.alumni.diaries@gmail.com"
)) {
    $query1 = "UPDATE itemdonations SET Status = 'Accepted' WHERE Id = '{$id}'";
    mysqli_query($conn, $query1);

    $query3 = "SELECT Name, Status FROM projects WHERE Id = '{$row2['DonationFor']}'";
    $results3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($results3);

    if ($row3['Status'] == 'Ongoing'){
        $query4 = "SELECT Quantity FROM projectitems WHERE ProjectId = '{$row2['DonationFor']}' AND ItemName = '{$row2['ItemName']}'";
        $results4 = mysqli_query($conn, $query4);
        if(mysqli_num_rows($results4)){
            while($row4 = mysqli_fetch_assoc($results4)){
                $NewQuantity = $row2['Quantity'] + $row4['Quantity'];
                $query5 = "UPDATE projectitems SET Quantity = '{$NewQuantity}' WHERE ProjectId = '{$row2['DonationFor']}' AND ItemName = '{$row2['ItemName']}'";
                mysqli_query($conn, $query5);
            }
        }else{
            $query6 = "INSERT INTO projectitems (ProjectId, ItemName, Quantity) 
        VALUES ('{$row2['DonationFor']}', '{$row2['ItemName']}', '{$row2['Quantity']}')";
            mysqli_query($conn, $query6);
            
               //notification
               $query15 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
               $results15 = mysqli_query($conn, $query15);
                           
               if (mysqli_num_rows($results15) > 0) {
                   while ($row15 = mysqli_fetch_assoc($results15)) {  
                       $query16 = "INSERT INTO notifications (Email,Message) VALUES 
                       ('{$row15['Email']}','Accepted the' ' ' '{$row2['ItemName']}' ' ' 'donated by' ' ' '{$email}' ' ' 'to the project' ' ' '{$row3['Name']}' ' ' 'by {$_SESSION['Email']}' )
                       ";
                       mysqli_query($conn, $query16);
                               
                   }
               }
        }
        $query7 = "INSERT INTO transfereditems (ItemName, Quantity, ProjectId, TransferedBy) 
               VALUES ('{$row2['ItemName']}', '{$row2['Quantity']}', '{$row2['DonationFor']}', '{$_SESSION['Email']}')";
        mysqli_query($conn, $query7);
    }else{
        $query8 = "SELECT Quantity FROM associationitems WHERE ItemName = '{$row2['ItemName']}'";
        $results8 = mysqli_query($conn, $query8);
        if(mysqli_num_rows($results8)){
            while($row8 = mysqli_fetch_assoc($results8)){
                $NewQuantity = $row2['Quantity'] + $row8['Quantity'];
                $query9 = "UPDATE associationitems SET Quantity = '{$NewQuantity}' WHERE ItemName = '{$row2['ItemName']}'";
                mysqli_query($conn, $query9);
            }
        }else{
            $query10 = "INSERT INTO associationitems (ItemName, Quantity) VALUES ('{$row2['ItemName']}', '{$row2['Quantity']}')";
            mysqli_query($conn, $query10);
        }
    }
}



