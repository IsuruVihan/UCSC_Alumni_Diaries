<?php
    include('../../db/db-conn.php');
    
    $query = "SELECT id FROM memberaccountrequests WHERE isRejected='1'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            echo "
                <!--
                <div
                    class='result'
                    onmouseover=DisplayButtons('acc-req-${row['id']}')
                    onmouseout=HideButtons('acc-req-${row['id']}')
                >
                    <p class='request-id'>RequestID ${row['id']}</p>
                    <div class='buttons' id='acc-req-${row['id']}'>
                        <button onclick=ViewDetails('${row['id']}') class='view-btn btn acc-req-btn' id='${row['id']}'>
                            View
                        </button>
                    </div>
                </div>
                -->
               
                <div
                    class='result'
                    onmouseover=DisplayButtons('rej-req-${row['id']}')
                    onmouseout=HideButtons('rej-req-${row['id']}')
                >
                    <p class='request-id'>RequestID ${row['id']}</p>
                    <div class='buttons' id='rej-req-${row['id']}'>
                        <button onclick=ViewRejectedRequestDetails('${row['id']}') class='view-btn btn'>
                            View
                        </button>
                        <button onclick=DeleteRequest('${row['id']}') class='delete-btn btn'>
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