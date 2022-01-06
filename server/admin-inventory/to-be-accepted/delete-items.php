<?php

include('../../../db/db-conn.php');
include('../../session.php');
include('../../email/body-templates/DeleteItemDonation.php');

$id = $_POST['Id'];

$query1 = "SELECT DonationFor, DonorName, DonorEmail, ItemName, Quantity, Timestamp, BillSrc FROM itemdonations WHERE Id = '{$id}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

if($row1['DonationFor'] != 'Association'){
    $query11 = "SELECT Name FROM projects WHERE Id = '{$row1['DonationFor']}'";
    $results11 = mysqli_query($conn, $query11);
    $row11 = mysqli_fetch_assoc($results11);
    $donationFor = $row11['Name'];
}else{
    $donationFor = $row1['DonationFor'];
}
$email = $row1['DonorEmail'];
$name = $row1['DonorName'];
$item = $row1['ItemName'];
$quantity = $row1['Quantity'];
$timestamp = $row1['Timestamp'];

if (mail(
    $email,
    "Item Donation Rejected",
    DeleteItemDonation($name, $item, $quantity, $donationFor, $timestamp),
    "From: ucsc.alumni.diaries@gmail.com"
)) {
    if(mysqli_num_rows($results1)){
        while($row1 = mysqli_fetch_assoc($results1)){
            if($row1['BillSrc'] != 'NULL'){
                $PayslipSrc = $row1["BillSrc"];
                $currentFile = '../../../uploads/donation/'.$PayslipSrc;
                unlink($currentFile);
            }
        }
    }
}

$query2 = "DELETE FROM itemdonations WHERE Id = '$id'";
mysqli_query($conn, $query2);
