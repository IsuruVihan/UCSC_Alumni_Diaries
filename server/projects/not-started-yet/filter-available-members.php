<?php
    
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    $FirstName = trim($_POST['FirstName']);
    $LastName = trim($_POST['LastName']);
    $Batch = $_POST['Batch'];
    
    $query = "SELECT Email, FirstName, LastName, Batch FROM registeredmembers WHERE Availability='1'";
    
    if (!empty($FirstName)) {
        $query = $query . " AND FirstName LIKE '{$FirstName}%'";
    }
    if (!empty($LastName)) {
        $query = $query . " AND LastName LIKE '{$LastName}%'";
    }
    if ($Batch !== 'All') {
        $query = $query . " AND Batch='{$Batch}'";
    }
    
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $ArgumentString = $row['Email'] . "," . "$ProjectId";
            echo "
                <div
                    class='add-members-result'
                    onmouseover=DisplayButtons('add-{$row['Email']}')
                    onmouseout=HideButtons('add-{$row['Email']}')
                >
                    <p class='request-id'>{$row['FirstName']}</p>
                    <p class='request-id'>{$row['LastName']}</p>
                    <p class='request-id'>{$row['Batch']}</p>
                    <div class='add-members-buttons' id='add-{$row['Email']}'>
                        <button
                            class='add-members-add-btn add-members-btn'
                            onclick=AddCommitteeMember('{$ArgumentString}')
                        >Add</button>
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