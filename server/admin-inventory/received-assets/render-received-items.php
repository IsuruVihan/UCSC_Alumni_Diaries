<?php

include('../../../db/db-conn.php');
include('../../session.php');

$query1 = "SELECT projects.Id, DonorName, DonorEmail, projects.Name, DonationFor, ItemName, Quantity, BillSrc, itemdonations.Timestamp 
           FROM itemdonations INNER JOIN projects 
           ON projects.Id = itemdonations.DonationFor WHERE itemdonations.Status = 'Accepted'";
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
