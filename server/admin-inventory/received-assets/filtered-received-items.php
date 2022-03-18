<?php
include('../../../db/db-conn.php');
include('../../session.php');

$donorName = $_POST['DonorName'];
$donorEmail = $_POST['DonorEmail'];
$from = $_POST['From'];
$to = $_POST['To'];
$project = $_POST['Project'];

$query1 = "SELECT projects.Id, DonorName, DonorEmail, projects.Name, DonationFor, ItemName, Quantity, BillSrc, itemdonations.Timestamp 
           FROM itemdonations INNER JOIN projects 
           ON projects.Id = itemdonations.DonationFor WHERE itemdonations.Status = 'Accepted'";

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
        echo"<div class='received-items-item'>
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
                    Item Name :
                </div>
                <div class='sec-2-1'>
                    {$row1['ItemName']}
                </div>
                <div class='label'>
                    Item Quantity :
                </div>
                <div class='sec-2-1'>
                    {$row1['Quantity']}
                </div>
                <div class='label'>
                    Project Id :
                </div>
                <div class='sec-2-1'>
                    {$row1['Id']}
                </div>
                <div class='label'>
                    Project Name :
                </div>
                <div class='sec-2-1'>
                    {$row1['Name']}
                </div>
                <div class='label'>
                    Timestamp :
                </div>
                <div class='sec-2-1'>
                    {$row1['Timestamp']}
                </div>
            </div>";
    }
}