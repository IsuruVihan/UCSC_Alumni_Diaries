<?php
    include('../../db/db-conn.php');
    
    $batch = $_POST['batch'];
    $first_name = preg_replace('/\s+/', '', trim($_POST['first_name']));
    $last_name = preg_replace('/\s+/', '', trim($_POST['last_name']));
    
    $query = "SELECT FirstName, LastName, Batch, Email FROM registeredmembers";
    
    if ($batch !== 'All') {
        $query .= " WHERE Batch='${batch}'";
    }
    if (!empty($first_name)) {
        if ($batch !== 'All') {
            $query .= " AND FirstName LIKE '${first_name}'";
        } else {
            $query .= " WHERE FirstName LIKE '${first_name}'";
        }
    }
    if (!empty($last_name)) {
        if ($batch !== 'All' || !empty($first_name)) {
            $query .= " AND LastName LIKE '${last_name}'";
        } else {
            $query .= " WHERE LastName LIKE '${last_name}'";
        }
    }
    
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "
                <div
                    class='result'
                    onmouseover=DisplayButtons('reg-${row['Email']}')
                    onmouseout=HideButtons('reg-${row['Email']}')
                >
                    <p class='request-id'>${row['FirstName']}</p>
                    <p class='request-id'>${row['LastName']}</p>
                    <p class='request-id'>${row['Batch']}</p>
                    <div class='buttons' id='reg-${row['Email']}'>
                        <button
                            onclick=ViewRegisteredMemberDetails('${row['Email']}')
                            class='view-btn btn'
                        >
                            View
                        </button>
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