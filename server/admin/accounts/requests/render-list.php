<?php

include('../../../../db/db-conn.php');

$query = "SELECT Id, FirstName, LastName, Batch FROM memberaccountrequests WHERE isRejected='0'";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div
                class='result'
                onmouseover=DisplayButtons('acc-req-{$row['Id']}')
                onmouseout=HideButtons('acc-req-{$row['Id']}')
            >
                <p class='request-id'>{$row['FirstName']}</p>
                <p class='request-id'>{$row['LastName']}</p>
                <p class='request-id'>{$row['Batch']}</p>
                <div class='buttons' id='acc-req-{$row['Id']}'>
                    <button
                        class='view-btn btn'
                        id='acc-req-{$row['Id']}'
                        onclick=ViewMemberAccountRequestDetails('{$row['Id']}')
                    >View</button>
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