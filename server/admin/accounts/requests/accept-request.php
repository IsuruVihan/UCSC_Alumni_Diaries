<?php

include('../../../../db/db-conn.php');

$Id = $_POST['Id'];

$query = "SELECT * FROM memberaccountrequests WHERE Id='{$Id}'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $Email = $row['Email'];
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $NameWithInitials = $row['NameWithInitials'];
    $Gender = $row['Gender'];
    $Address = $row['Address'];
    $NIC = $row['NIC'];
    $ContactNumber = $row['ContactNumber'];
    $Batch = $row['Batch'];
    $IndexNumber = $row['IndexNumber'];
    $PicSrc = '';
    $Password = '';
    $AccType = 'Member';
    $SubscriptionType = 'Monthly';
    $SubscriptionDue = $row['Email'];
}