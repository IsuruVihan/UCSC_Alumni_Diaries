<?php

include('../../../db/db-conn.php');
include('../../session.php');

$donorName = $_POST['DonorName'];
$donorEmail = $_POST['DonorEmail'];
$from = $_POST['From'];
$to = $_POST['To'];
$project = $_POST['Project'];

$query1 = "SELECT Id, DonorName, DonorEmail, DonationFor, ItemName, Quantity, BillSrc, Timestamp 
          FROM itemdonations WHERE Status = 'Pending'";

if (!empty($donorName)) {
    $query1 = $query1 . " AND DonorName LIKE '{$donorName}%'";
}
if (!empty($donorEmail)) {
    $query1 = $query1 . " AND DonorEmail LIKE '{$donorEmail}%'";
}
if (!empty($from)) {
    $query1 = $query1 . " AND Timestamp > '{$from}'";
}
if (!empty($to)) {
    $query1 = $query1 . " AND Timestamp < '{$to}'";
}
if (!empty($project)) {
    $query1 = $query1 . " AND DonationFor='{$project}'";
}

$results1 = mysqli_query($conn, $query1);

if(mysqli_num_rows($results1) > 0){
    while($row1 = mysqli_fetch_assoc($results1)){
        $donationFor = $row1['DonationFor'];
        $query2 = "SELECT Name FROM projects WHERE Id = '{$donationFor}'";
        $results2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($results2);
        $projectName = $row2['Name'];

        echo"<div class='to-be-acc-items-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        For :
                    </div>
                    <div class='sec-2-1'>
                       {$projectName}
                    </div>
                    <div class='label'>
                        Item :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['ItemName']}
                    </div>
                    <div class='label'>
                        Quantity :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['Quantity']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['Timestamp']}
                    </div>
                    <div class='btn-container'>
                        <button class='accept-btn btn' id='accept-btn' onclick=onClickItemsAcceptBtn('{$row1['Id']}')>Accept</button>
                        <button class='delete-btn btn' id='delete-btn' onclick=ItemsDeleteBtn('{$row1['Id']}')>Delete</button>
                    </div>
                </div>";
    }
}
