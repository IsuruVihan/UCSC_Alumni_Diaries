<?php
    include('../../db/db-conn.php');
    
    $query = "SELECT id FROM memberaccountrequests WHERE isRejected='0'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
//            <script>
//            $('.acc-req-btn').click((event) => {
//                console.log(event.target.id);
//            });
//                </script>
            echo "
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
            ";
        }
    } else {
        echo "
            <div class='result'>
                <p class='request-id'>No data</p>
            </div>
        ";
    }