<?php
    
    session_start();
    
    include('../../db/db-conn.php');
    
    $query = "SELECT Section, Activity, Timestamp FROM activitylog WHERE Email = '{$_SESSION['Email']}'";
    
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "
                <tr>
                    <td>{$row['Timestamp']}</td>
                    <td>{$row['Section']}</td>
                    <td>{$row['Activity']}</td>
                </tr>
            ";
        }
    } else {
        echo "
            <tr>
                <td colspan='3'>No data</td>
            </tr>
        ";
    }