<?php

include('../../../../db/db-conn.php');

$query = "SELECT Email, FirstName, LastName, Batch FROM registeredmembers";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div
                class='result'
                onmouseover=DisplayButtons('reg-{$row['Email']}')
                onmouseout=HideButtons('reg-{$row['Email']}')
            >
                <p class='request-id'>{$row['FirstName']}</p>
                <p class='request-id'>{$row['LastName']}</p>
                <p class='request-id'>{$row['Batch']}</p>
                <div class='buttons' id='reg-{$row['Email']}'>
                    <button class='view-btn btn' onclick=ViewRegisteredMemberDetails('{$row['Email']}')>View</button>
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