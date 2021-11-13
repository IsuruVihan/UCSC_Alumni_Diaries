<?php

include('../../../../db/db-conn.php');

$FirstName = trim($_POST['FirstName']);
$LastName = trim($_POST['LastName']);
$Batch = $_POST['Batch'];

$query = "
    SELECT bannedaccounts.Email, registeredmembers.FirstName, registeredmembers.LastName, registeredmembers.Batch
    FROM bannedaccounts
    INNER JOIN registeredmembers on bannedaccounts.Email = registeredmembers.Email
";

if (!empty($FirstName)) {
    $query = $query . " WHERE FirstName LIKE '{$FirstName}%'";
}
if (!empty($LastName)) {
    if (!empty($FirstName)) {
        $query = $query . " AND LastName LIKE '{$LastName}%'";
    } else {
        $query = $query . " WHERE LastName LIKE '{$LastName}%'";
    }
}
if ($Batch !== 'All') {
    if (!empty($FirstName) || !empty($LastName)) {
        $query = $query . " AND Batch={$Batch}";
    } else {
        $query = $query . " WHERE Batch={$Batch}";
    }
}

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