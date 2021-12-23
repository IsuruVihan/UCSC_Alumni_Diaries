<?php
    
    include('../../../db/db-conn.php');
    
    $query = "SELECT Id, Name FROM projects WHERE Status = 'Closed'";
    
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "
                <div
                    class='result'
                    onmouseover=DisplayButtons('p-list-{$row['Id']}')
                    onmouseout=HideButtons('p-list-{$row['Id']}')
                >
                    <p class='request-id'>{$row['Name']}</p>
                    <div class='buttons' id='p-list-{$row['Id']}'>
                        <button class='view-btn btn' onclick=ViewAllProjectDetails('{$row['Id']}')>View</button>
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