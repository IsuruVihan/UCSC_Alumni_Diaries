<?php

include('../../../db/db-conn.php');
include('../../session.php');
include('../../email/body-templates/AcceptCashDonation.php');

$id = $_POST['Id'];

$query1 = "SELECT DonationFor, DonorName, DonorEmail, Timestamp, Amount, Id, PayslipSrc FROM cashdonations WHERE Id = '{$id}'";
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
    "Cash Donation Accepted",
    AcceptCashDonation($name, $amount, $donationFor, $timestamp),
    "From: ucsc.alumni.diaries@gmail.com"
)) {
    $query3 = "SELECT Amount FROM associationcash WHERE Id = '0'";
    $results3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($results3);

    if($row1['DonationFor'] == 'Association'){
        $query2 = "UPDATE cashdonations SET Status = 'Accepted' WHERE Id = '{$id}'";
        mysqli_query($conn, $query2);

        $NewCashAmount = $row1['Amount'] + $row3['Amount'];

        $query4 = "UPDATE associationcash SET Amount = '$NewCashAmount' WHERE Id = '0'";
        mysqli_query($conn, $query4);

        //notification
        $query13 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        $results13 = mysqli_query($conn, $query13);
          
        if (mysqli_num_rows($results13) > 0) {
            while ($row13 = mysqli_fetch_assoc($results13)) {  
                $query14 = "INSERT INTO notifications (Email,Message) VALUES ('{$row13['Email']}','Rs.$amount Cash Donation made by {$email} has been accepted to the association')
                ";
                mysqli_query($conn, $query14);
              
            }
        }

        echo"Donation has been accepted.";

    }else{
        $query5 ="UPDATE cashdonations SET Status = 'Accepted' WHERE Id = '{$id}'";
        mysqli_query($conn, $query5);

        $DonationFor = $row1['DonationFor'];
        $query6 = "SELECT Name,Status FROM projects WHERE Id = '{$DonationFor}'";
        $results6 = mysqli_query($conn, $query6);
        $row6 = mysqli_fetch_assoc($results6);

        if ($row6['Status'] == 'Ongoing'){
            $query7 = "SELECT Amount FROM projectcash WHERE ProjectId = '{$DonationFor}'";
            $results7 = mysqli_query($conn, $query7);
            if(mysqli_num_rows($results7)){
                while($row7 = mysqli_fetch_assoc($results7)){
                    $NewCashAmount1 = $row1['Amount'] + $row7['Amount'];

                    $query8 = "UPDATE projectcash SET Amount = '$NewCashAmount1' WHERE ProjectId = '$DonationFor'";
                    mysqli_query($conn, $query8);
                }
            }else{
                $NewCashAmount1 = $row1['Amount'];
                $query9 = "INSERT INTO projectcash (Amount, ProjectId) VALUES ('$NewCashAmount1', '$DonationFor')";
                mysqli_query($conn, $query9);
            }
            $amount = $row1['Amount'];
            $query10 = "INSERT INTO transferedcash (ProjectId, Amount, TransferedBy) VALUES ('{$DonationFor}', '{$amount}', '{$_SESSION['Email']}')";
            mysqli_query($conn, $query10);

        }else{
            $NewCashAmount = $row1['Amount'] + $row3['Amount'];

            $query11 = "UPDATE associationcash SET Amount = '$NewCashAmount' WHERE Id = '0'";
            mysqli_query($conn, $query11);
        } 
        //notification
        $query15 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        $results15 = mysqli_query($conn, $query15);
                 
        if (mysqli_num_rows($results15) > 0) {
            while ($row15 = mysqli_fetch_assoc($results15)) {  
                $query16 = "INSERT INTO notifications (Email,Message) VALUES ('{$row15['Email']}','Rs.' '$amount' ' ' 'Cash Donation made by' ' ' '{$email}' ' ' 'has been accepted to the' ' ' '{$row6['Name']}')
                 ";
                 mysqli_query($conn, $query16);
                     
            }
        }
       
        echo"Donation has been accepted.";
    }

}else{
    echo"Email couldn't be sent.";
}



