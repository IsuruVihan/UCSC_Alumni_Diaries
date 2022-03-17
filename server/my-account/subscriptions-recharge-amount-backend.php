<?php

include('../../db/db-conn.php');
include('../../server/session.php');

$query1 = "SELECT Amount FROM subscriptiontypes WHERE TypeName='Anually'";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT Amount FROM subscriptiontypes WHERE TypeName='Monthly'";
$result2 = mysqli_query($conn, $query2);

if($_SESSION['SubscriptionType'] == 'Anually'){
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "LKR " . $row["Amount"];
    }
} else {
    while ($row = mysqli_fetch_assoc($result2)) {
        echo "LKR " . $row["Amount"];
    }
}

