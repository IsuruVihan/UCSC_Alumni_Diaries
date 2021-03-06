<?php

include('../../db/db-conn.php');
include('../../server/session.php');

$sub_type = $_POST['sub_type'];

$query = "SELECT MAX(Timestamp) FROM subscriptionsdone WHERE Email = '{$_SESSION['Email']}' AND Status = 'Accepted'";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
$largestValue = $row['MAX(Timestamp)'];

$resultExplode = explode(' ', $largestValue);
$lastPaymentDate = $resultExplode[0];

$DateBeforeAWeek = date("Y-m-d", strtotime("-7 day"));

if($lastPaymentDate < $DateBeforeAWeek){
    echo"<span class='error-msg1'>Subscription Type can be changed only within one week of payment acceptance</span>";
} elseif(empty($sub_type)) {
    echo "<span class='error-msg1'>Select a subscription type</span>";
}elseif($sub_type == "{$_SESSION['SubscriptionType']}"){
    echo "<span class='error-msg1'>It is the existing subscription type</span>";
}else{
    $_SESSION['SubscriptionType'] = $sub_type;
    $query1 = "UPDATE registeredmembers SET SubscriptionType = '$sub_type' WHERE Email = '{$_SESSION['Email']}'";
    mysqli_query($conn, $query1);
    echo "<span class='success-msg1'>Subscription type has been changed</span>";
}
