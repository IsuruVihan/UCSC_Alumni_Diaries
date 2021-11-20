<?php
    
    include('../../../db/db-conn.php');
    
    $query = "SELECT Id, Name FROM projects WHERE Status = 'NotStartedYet'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "
                <div
                    class='details-result'
                    onmouseover=DisplayButtons('p-list-{$row['Id']}')
                    onmouseout=HideButtons('p-list-{$row['Id']}')
                >
                    <p class='request-id'>{$row['Name']}</p>
                    <div class='details-buttons' id='p-list-{$row['Id']}'>
                        <button class='details-view-btn details-btn'>View</button>
                    </div>
                </div>
            ";
        }
    } else {
        echo "
            <div class='details-result'>
                <p class='request-id'>No data</p>
            </div>
        ";
    }