<?php

include('../../db/db-conn.php');
include('../../server/session.php');

$query1 = "SELECT Amount FROM subscriptiontypes WHERE TypeName='Annually'";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT Amount FROM subscriptiontypes WHERE TypeName='Monthly'";
$result2 = mysqli_query($conn, $query2);

if($_SESSION['SubscriptionType'] == 'Annually'){
    while($row = mysqli_fetch_assoc($result1)) {
        echo $row["Amount"];
    }

} else{
    while($row = mysqli_fetch_assoc($result2)) {
        echo $row["Amount"];
    }
}

