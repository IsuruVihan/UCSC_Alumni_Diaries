<?php

include('../../../../db/db-conn.php');

$FirstName = trim($_POST['FirstName']);
$LastName = trim($_POST['LastName']);
$Batch = $_POST['Batch'];

$query = "SELECT Id, FirstName, LastName, Batch FROM memberaccountrequests WHERE isRejected='0'";

if (!empty($FirstName)) {
    $query = $query . " AND FirstName LIKE '{$FirstName}%'";
}
if (!empty($LastName)) {
    $query = $query . " AND LastName LIKE '{$LastName}%'";
}
if ($Batch !== 'All') {
    $query = $query . " AND Batch={$Batch}";
}

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