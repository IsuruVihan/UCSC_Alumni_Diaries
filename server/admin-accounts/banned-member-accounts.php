<?php
    include('../../db/db-conn.php');
    
    $query = "SELECT Email FROM bannedaccounts";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $query2 = "SELECT Email, FirstName, LastName, Batch FROM registeredmembers WHERE Email='${row['Email']}'";
            $results2 = mysqli_query($conn, $query2);
            if (mysqli_num_rows($results2) > 0) {
                while ($row2 = mysqli_fetch_assoc($results2)) {
                    echo "
                        <div
                            class='result'
                            onmouseover=DisplayButtons('ban-${row2['Email']}')
                            onmouseout=HideButtons('ban-${row2['Email']}')
                        >
                            <p class='request-id'>${row2['FirstName']}</p>
                            <p class='request-id'>${row2['LastName']}</p>
                            <p class='request-id'>${row2['Batch']}</p>
                            <div onclick=ViewBannedMemberDetails('${row2['Email']}') class='buttons' id='ban-${row2['Email']}'>
                                <button class='view-btn btn'>View</button>
                            </div>
                        </div>
                    ";
                }
            }
        }
    } else {
        echo "
            <div class='result'>
                <p class='request-id'>No data</p>
            </div>
        ";
    }