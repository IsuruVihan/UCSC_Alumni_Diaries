<?php

include('../../../../db/db-conn.php');

$query = "SELECT Id, FirstName, LastName, Batch FROM memberaccountrequests WHERE isRejected='1'";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div
                class='result'
                onmouseover=DisplayButtons('rej-req-{$row['Id']}')
                onmouseout=HideButtons('rej-req-{$row['Id']}')
            >
                <p class='request-id'>{$row['FirstName']}</p>
                <p class='request-id'>{$row['LastName']}</p>
                <p class='request-id'>{$row['Batch']}</p>
                <div class='buttons' id='rej-req-{$row['Id']}'>
                    <button class='view-btn btn' onclick=ViewRejectedAccountRequestDetails('{$row['Id']}')>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
        ";
    }
} else {
    echo "
        <div class='result'>
            <p class='request-id'>No data</p>
        </div>
    ";
}