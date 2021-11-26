<?php
    
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    $FirstName = trim($_POST['FirstName']);
    $LastName = trim($_POST['LastName']);
    $Batch = $_POST['Batch'];
    
    $query = "
        SELECT registeredmembers.Email, FirstName, LastName, Batch
        FROM registeredmembers
        INNER JOIN committeemembers
        ON registeredmembers.Email=committeemembers.Email
        WHERE committeemembers.ProjectId='{$Id}' AND committeemembers.Type='Member'
    ";
    
    if (!empty($FirstName)) {
        $query = $query . " AND registeredmembers.FirstName LIKE '{$FirstName}%'";
    }
    if (!empty($LastName)) {
        $query = $query . " AND registeredmembers.LastName LIKE '{$LastName}%'";
    }
    if ($Batch !== 'All') {
        $query = $query . " AND registeredmembers.Batch='{$Batch}'";
    }
    
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "
                <div
                    class='committee-result'
                    onmouseover=DisplayButtons('rem-{$row['Email']}')
                    onmouseout=HideButtons('rem-{$row['Email']}')
                >
                    <p class='request-id'>{$row['FirstName']}</p>
                    <p class='request-id'>{$row['LastName']}</p>
                    <p class='request-id'>{$row['Batch']}</p>
                    <div class='committee-buttons' id='rem-{$row['Email']}'>
                        <button class='committee-remove-btn committee-btn'>Remove</button>
                    </div>
                </div>
            ";
        }
    } else {
        echo "
            <div class='committee-result'>
                <p class='request-id'>No results</p>
            </div>
        ";
    }