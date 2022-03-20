<?php

include('../../db/db-conn.php');

$FirstName = trim($_POST['FirstName']);
$LastName = trim($_POST['LastName']);
$Batch = $_POST['Batch'];
$SubType = $_POST['SubType'];
$Email = trim($_POST['Email']);
$Start_Date = $_POST['Start_Date'];
$End_Date = $_POST['End_Date'];

$query="SELECT FirstName, LastName, Batch, registeredmembers.Email, Timestamp, DonatedFrom, PayslipSrc, Amount, SubType, PicSrc 
FROM subscriptionsdone INNER JOIN registeredmembers ON registeredmembers.Email = subscriptionsdone.Email WHERE Status = 'Accepted'";

if (!empty($FirstName)) {
    $query = $query . " AND FirstName LIKE '{$FirstName}%'";
}

if (!empty($LastName)) {
        $query = $query . " AND LastName LIKE '{$LastName}%'";
}

if (!empty($Batch)) {
        $query = $query . " AND Batch='{$Batch}'";
}

if (!empty($SubType)) {
        $query = $query . " AND SubType='{$SubType}'";
}

if (!empty($Email)) {
        $query = $query . " AND registeredmembers.Email LIKE '{$Email}%'";
}

if (!empty($Start_Date)) {
    $query = $query . " AND Timestamp > '{$Start_Date}'";
}

if (!empty($End_Date)) {
    $query = $query . " AND Timestamp < '{$End_Date}'";
}

$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
        <div class='flexbox-item2'>
        <div class='co1'>
            <img class='img' src='../uploads/profile-pics/{$row['PicSrc']}' width='100%' height=''
            class='user-pic' alt='user-pic'/>
        </div> 
        <div class='co2'>
            <div class='allfullname'>
                <div class='firstname1'>
                    <label class='alllabels'> First Name </label>
                    <div class='namefirst'> {$row['FirstName']}
                    </div>
                </div>
                <div class='lastname1'>
                    <label class='alllabels'> Last Name </label>
                    <div class='namesecond'> {$row['LastName']}
                    </div>
                </div>
            </div> 
            <div class='e-address'>
                <label class='alllabels'> Email </label>
                <div class='mail'> {$row['Email']}
                </div>
            </div>
            <div class='bills'>
                <label class='alllabels'> Bill </label>
                <div class='bill-attachment'> {$row['PayslipSrc']}
                </div>
            </div>
        </div> 
        <div class='co3'>
            <div class='batch-sub'>
                <div class='baat'>
                    <label class='alllabels'> Batch </label>
                    <div class='namefirst'> {$row['Batch']}
                    </div>
                </div>
                <div class='suub'>
                    <label class='alllabels'> Subscription Type </label>
                    <div class='namesecond'> {$row['SubType']}
                    </div>
                </div>
            </div>
            <div class='method-amount'>
                <div class='me'>
                    <label class='alllabels'> Method </label>
                    <div class='namefirst'> {$row['DonatedFrom']}
                    </div>
                </div>
                <div class='ammount'>
                    <label class='alllabels'> Total Amount </label>
                    <div class='namesecond'> {$row['Amount']}
                    </div>
                </div>
            </div>
            <div class='timeeestamp'>
                <label class='alllabels'> Time </label>
                <div class='time-attachment'> {$row['Timestamp']}
                </div>
            </div>
        </div> 
    </div>
        ";
    }
} else {
    echo "
    <div class='flexbox-item2'>
            <p class='request-id'>No data</p>
        </div>
    ";
}
