<?php
    session_start();
    
    include('../../db/db-conn.php');
    
    // $merchant_id = $_POST['merchant_id'];
    $user_email = $_POST['order_id'];
    $payhere_amount = $_POST['payhere_amount'];
    // $payhere_currency = $_POST['payhere_currency'];
    // $status_code = $_POST['status_code'];
    // $md5sig = $_POST['md5sig'];
    
    $merchant_secret = '4JDSlHC5FiS4pEnDRkBauh8n1fQDNRKnI8RiHyfdW5Uw';
    
    $user_subtype = "";
    $user_subdue = "";
    $query0 = "SELECT SubscriptionType, SubscriptionDue FROM registeredmembers WHERE Email = '$user_email'";
    $results0 = mysqli_query($conn, $query0);
    while ($row0 = mysqli_fetch_assoc($results0)) {
        $user_subtype = $row0['SubscriptionType'];
        $user_subdue = $row0['SubscriptionDue'];
    }
    
    // $local_md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));
    $query = "INSERT INTO subscriptionsdone (Email, DonatedFrom, Status, SubType, Amount) VALUES ('$user_email', 'PayHere', 'Accepted', '$user_subtype', '$payhere_amount')";
    // $query = "INSERT INTO subscriptionsdone (Email, DonatedFrom, Status, SubType, Amount) VALUES ('isuruvihan@gmail.com', 'PayHere', 'Accepted', 'Monthly', '$payhere_amount')";
    mysqli_query($conn, $query);
    
    $new_amount = 0;
    $query2 = "SELECT Amount FROM associationcash WHERE Id = '0'";
    $results2 = mysqli_query($conn, $query2);
    while ($row2 = mysqli_fetch_assoc($results2)) {
        $new_amount = $row2['Amount'];
    }
    $new_amount = $new_amount + (double)$payhere_amount;
    
    $query3 = "UPDATE associationcash SET Amount = '$new_amount' WHERE Id = '0'";
    mysqli_query($conn, $query3);
    
    $NewDueDate = $user_subdue;
    if($user_subtype == 'Monthly') {
        $NewDueDate = date('Y-m-d H:i:s', strtotime($NewDueDate . " +1 month"));
    }else{
        $NewDueDate = date('Y-m-d H:i:s', strtotime($NewDueDate . " +1 year"));
    }
    $query4 = "UPDATE registeredmembers SET SubscriptionDue = '$NewDueDate' WHERE Email = '$user_email'";
    mysqli_query($conn, $query4);