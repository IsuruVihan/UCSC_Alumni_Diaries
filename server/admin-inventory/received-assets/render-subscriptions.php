<?php

include('../../../db/db-conn.php');
include('../../session.php');

$query1 = "SELECT FirstName, LastName, Batch, subscriptionsdone.Email, subscriptionsdone.Timestamp, SubType, Amount 
           FROM subscriptionsdone INNER JOIN registeredmembers ON registeredmembers.Email = subscriptionsdone.Email 
           WHERE subscriptionsdone.Status = 'Accepted'";
$results1 = mysqli_query($conn, $query1);

if(mysqli_num_rows($results1) > 0){
    while($row1 = mysqli_fetch_assoc($results1)){
        echo"<div class='subscription-item'>
                <div class='label-sec'>
                    <div class='label1'>
                        First Name :
                    </div>
                    <div class='label1'>
                        Last Name :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        {$row1['FirstName']}
                    </div>
                    <div class='sec-7'>
                        {$row1['LastName']}
                    </div>
                </div>
                <div class='label-sec'>
                    <div class='label1'>
                        Batch :
                    </div>
                    <div class='label1'>
                        Amount :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        {$row1['Batch']}
                    </div>
                    <div class='sec-7'>
                        {$row1['Amount']}
                    </div>
                </div>
                <div class='label'>
                    Email :
                </div>
                <div class='sec-1-1'>
                    {$row1['Email']}
                </div>
                <div class='label'>
                    Subscription Type :
                </div>
                <div class='sec-1-1'>
                    {$row1['SubType']}
                </div>
                <div class='label'>
                    Timestamp :
                </div>
                <div class='sec-1-1'>
                    {$row1['Timestamp']}
                </div>
            </div>";
    }
}
