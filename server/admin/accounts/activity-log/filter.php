<?php
    
    include('../../../../db/db-conn.php');
    
    $FirstName = trim($_POST['FirstName']);
    $LastName = trim($_POST['LastName']);
    $Batch = $_POST['Batch'];
    
    $query = "SELECT Email, FirstName, LastName, Batch FROM registeredmembers";
    
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
                onmouseover=DisplayButtons('act-{$row['Email']}')
                onmouseout=HideButtons('act-{$row['Email']}')
            >
                <p class='request-id'>{$row['FirstName']}</p>
                <p class='request-id'>{$row['LastName']}</p>
                <p class='request-id'>{$row['Batch']}</p>
                <div class='buttons' id='act-{$row['Email']}'>
                    <button class='view-btn btn' onclick=ViewMemberActivityLog('{$row['Email']}')>View</button>
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