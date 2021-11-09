<?php

include('../../../../db/db-conn.php');

$Id = $_POST['Id'];

$query = "SELECT * FROM memberaccountrequests WHERE Id='{$Id}'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "
        <div class='details-title'>Details</div>
        <div class='row-1'>
            <div class='container-1'>
                <div class='section-3'>
                    <div class='sec-row-1'>
                        <button class='accept-btn btn' onclick=AcceptMemberAccountRequest('{$Id}')>Accept</button>
                        <button class='remove-btn btn'>Reject</button>
                    </div>
                </div>
            </div>
            <div class='container-2'>
                <div class='full-name details-field'>{$row['NameWithInitials']}</div>
                <div class='middle-section'>
                    <div class='mid-sec-row'>
                        <div class='first-name details-field'>{$row['FirstName']}</div>
                        <div class='last-name details-field'>{$row['LastName']}</div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='gender details-field'>{$row['Gender']}</div>
                        <div class='batch details-field'>{$row['Batch']}</div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='nic details-field'>{$row['NIC']}</div>
                        <div class='contact-number details-field'>{$row['ContactNumber']}</div>
                    </div>
                </div>
                <div class='email details-field'>{$row['email']}</div>
                <div class='address details-field'>{$row['Address']}</div>
            </div>
        </div>
    ";
}