<?php
    
    include('../../db/db-conn.php');
    
    // $merchant_id = $_POST['merchant_id'];
    $user_email = $_POST['order_id'];
    $payhere_amount = $_POST['payhere_amount'];
    // $payhere_currency = $_POST['payhere_currency'];
    // $status_code = $_POST['status_code'];
    // $md5sig = $_POST['md5sig'];
    
    $merchant_secret = '4JDSlHC5FiS4pEnDRkBauh8n1fQDNRKnI8RiHyfdW5Uw';
    
    // $local_md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));
    
    $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, Amount, DonatedFrom, Status) VALUES ('PayHere','PayHere','Association','$payhere_amount', 'PayHere', 'Accepted')";
    mysqli_query($conn, $query);
    
    $query2 = "SELECT Amount FROM associationcash WHERE Id = '0'";
    $results2 = mysqli_query($conn, $query2);
    $new_amount = 0;
    while ($row2 = mysqli_fetch_assoc($results2)) {
        $new_amount = (double)$payhere_amount + $row2['Amount'];
    }
    
    if ($user_email != 'hidden') {
        $donated_cash = 0;
        $query6 = "SELECT CashDonated FROM registeredmembers WHERE Email = '$user_email'";
        $results6 = mysqli_query($conn, $query6);
        while ($row6 = mysqli_fetch_assoc($results6)) {
            $donated_cash = $row6['CashDonated'];
        }
        $donated_cash = $donated_cash + $payhere_amount;
    
        $query7 = "UPDATE registeredmembers SET CashDonated = '$donated_cash' WHERE Email = '$user_email'";
        mysqli_query($conn, $query7);
    }
    
    $query3 = "UPDATE associationcash SET Amount = '${new_amount}' WHERE Id = '0'";
    mysqli_query($conn, $query3);