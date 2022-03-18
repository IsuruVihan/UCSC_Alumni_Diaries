<?php

include('../../db/db-conn.php');

$FirstName = trim($_POST['FirstName']);
$LastName = trim($_POST['LastName']);
$Batch = $_POST['Batch'];

$query = "SELECT Email, FirstName, LastName, Batch, PicSrc FROM registeredmembers";

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
        $query = $query . " AND Batch='{$Batch}'";
    } else {
        $query = $query . " WHERE Batch='{$Batch}'";
    }
}

$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div class='alumni-box-row'>
                <div class='list-prof-pic'>
        ";
    
        if ($row['PicSrc'] == 'user-default.png') {
            echo "
                    <img src='../assets/images/{$row['PicSrc']}' width='100%' class='user-pic' alt='user-pic'/>
            ";
        } else {
            echo "
                    <img src='../uploads/profile-pics/{$row['PicSrc']}' width='100%' class='user-pic' alt='user-pic'/>
            ";
        }
        
        echo "
                </div>
                <div class='list-detail-field'>{$row['FirstName']}</div>
                <div class='list-detail-field'>{$row['LastName']}</div>
                <div class='list-detail-field'>{$row['Batch']}</div>
                <button class='btn view-btn' onclick=ViewRegisteredMemberDetails('{$row['Email']}')>View</button>
            </div>
        ";
    }
} else {
    echo "
        <div class='alumni-box-row'>
            <p class='request-id'>No data</p>
        </div>
    ";
}