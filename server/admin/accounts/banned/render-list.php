<?php

include('../../../../db/db-conn.php');

$query = "
    SELECT bannedaccounts.Email, registeredmembers.FirstName, registeredmembers.LastName, registeredmembers.Batch
    FROM bannedaccounts
    INNER JOIN registeredmembers
    WHERE bannedaccounts.Email=registeredmembers.Email
";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div
                class='result'
                onmouseover=DisplayButtons('ban-{$row['Email']}')
                onmouseout=HideButtons('ban-{$row['Email']}')
            >
                <p class='request-id'>{$row['FirstName']}</p>
                <p class='request-id'>{$row['LastName']}</p>
                <p class='request-id'>{$row['Batch']}</p>
                <div class='buttons' id='ban-{$row['Email']}'>
                    <button
                        class='view-btn btn'
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