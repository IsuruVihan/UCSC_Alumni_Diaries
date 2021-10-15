<?php
    include('../../db/db-conn.php');
    
    $batch = $_POST['batch'];
    $first_name = preg_replace('/\s+/', '', trim($_POST['first_name']));
    $last_name = preg_replace('/\s+/', '', trim($_POST['last_name']));
    
    $query = "SELECT * FROM memberaccountrequests WHERE isRejected='1'";
    
    if ($batch !== 'All') {
        $query .= " AND Batch='${batch}'";
    }
    if (!empty($first_name)) {
        $query .= " AND FirstName LIKE '${first_name}'";
    }
    if (!empty($last_name)) {
        $query .= " AND LastName LIKE '${last_name}'";
    }
    
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
//            <script>
//            $('.acc-req-btn').click((event) => {
//                console.log(event.target.id);
//            });
//                </script>
            echo "
                <div
                    class='result'
                    onmouseover=DisplayButtons('acc-req-${row['Id']}')
                    onmouseout=HideButtons('acc-req-${row['Id']}')
                >
                    <p class='request-id'>RequestID ${row['Id']}</p>
                    <div class='buttons' id='acc-req-${row['Id']}'>
                        <button onclick=ViewDetails('${row['Id']}') class='view-btn btn acc-req-btn' id='${row['Id']}'>
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