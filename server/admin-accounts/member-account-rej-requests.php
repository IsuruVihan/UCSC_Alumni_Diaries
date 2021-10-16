<?php
    include('../../db/db-conn.php');
    
    $query = "SELECT Id FROM memberaccountrequests WHERE isRejected='1'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            echo "
                <div
                    class='result'
                    onmouseover=DisplayButtons('rej-req-${row['Id']}')
                    onmouseout=HideButtons('rej-req-${row['Id']}')
                >
                    <p class='request-id'>RequestID ${row['Id']}</p>
                    <div class='buttons' id='rej-req-${row['Id']}'>
                        <button onclick=ViewRejectedRequestDetails('${row['Id']}') class='view-btn btn'>
                            View
                        </button>
                        <button onclick=DeleteRequest('${row['Id']}') class='delete-btn btn'>
                            Delete
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