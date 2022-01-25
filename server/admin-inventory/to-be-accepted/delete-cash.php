<?php

include('../../../db/db-conn.php');
include('../../session.php');
include('../../email/body-templates/DeleteCashDonation.php');

$id = $_POST['Id'];

$query1 = "SELECT DonationFor, DonorName, DonorEmail, Timestamp, Amount, Id,PayslipSrc FROM cashdonations WHERE Id = '{$id}'";
$results1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($results1);

if($row1['DonationFor'] != 'Association'){
    $query12 = "SELECT Name FROM projects WHERE Id = '{$row1['DonationFor']}'";
    $results12 = mysqli_query($conn, $query12);
    $row12 = mysqli_fetch_assoc($results12);
    $donationFor = $row12['Name'];
}else{
    $donationFor = $row1['DonationFor'];
}
$email = $row1['DonorEmail'];
$name = $row1['DonorName'];
$amount = $row1['Amount'];
$timestamp = $row1['Timestamp'];

if (mail(
    $email,
    "Cash Donation Rejected",
    DeleteCashDonation($name, $amount, $donationFor, $timestamp),
    "From: ucsc.alumni.diaries@gmail.com"
)) {
    if(mysqli_num_rows($results1)){
        while($row1 = mysqli_fetch_assoc($results1)){
            if($row1['PayslipSrc'] != 'NULL'){
                $PayslipSrc = $row1["PayslipSrc"];
                $currentFile = '../../../uploads/donation/'.$PayslipSrc;
                unlink($currentFile);
            }
        }
    }

    $query2 = "DELETE FROM cashdonations WHERE Id = '$id'";
    mysqli_query($conn, $query2);

    //notification
    $query13 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
    $results13 = mysqli_query($conn, $query13);
        
    if (mysqli_num_rows($results13) > 0) {
        while ($row13 = mysqli_fetch_assoc($results13)) {  
            $query14 = "INSERT INTO notifications (Email,Message) VALUES ('{$row13['Email']}','Rs.$amount Cash Donation made by {$email} to the association has been deleted by {$_SESSION['Email']}')
              ";
             mysqli_query($conn, $query14);
            
        }
    }

}


