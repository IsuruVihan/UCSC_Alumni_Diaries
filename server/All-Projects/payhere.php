<?php
    
    include('../../db/db-conn.php');
    
    // $merchant_id = $_POST['merchant_id'];
    $order_id = $_POST['order_id'];
    $payhere_amount = $_POST['payhere_amount'];
    // $payhere_currency = $_POST['payhere_currency'];
    // $status_code = $_POST['status_code'];
    // $md5sig = $_POST['md5sig'];
    
    $merchant_secret = '4JDSlHC5FiS4pEnDRkBauh8n1fQDNRKnI8RiHyfdW5Uw';
    
    // $local_md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));
    
    $new_Amount = 0;
    
    $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, Amount, DonatedFrom, Status) VALUES ('PayHere', 'PayHere', '$order_id', '$payhere_amount', 'PayHere', 'Accepted')" ;
    mysqli_query($conn, $query);
    
    $query2 = "SELECT Amount FROM projectcash WHERE ProjectId = '$order_id'";
    $results2 = mysqli_query($conn, $query2);
    while ($row2 = mysqli_fetch_assoc($results2)) {
        $new_Amount = $new_Amount + $row2['Amount'];
    }
    
    $new_Amount = $new_Amount + (double)$payhere_amount;
    $query3 = "UPDATE projectcash SET Amount = '$new_Amount' WHERE ProjectId = '$order_id'";
    mysqli_query($conn, $query3);