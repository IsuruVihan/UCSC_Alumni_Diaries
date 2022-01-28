<?php
    
    include('../../../../db/db-conn.php');
    
    $Email = $_POST['Email'];
    $From = $_POST['From'];
    $To = $_POST['To'];
    $Section = $_POST['Section'];
    
    $query = "SELECT Timestamp, Section, Activity FROM activitylog WHERE Email = '{$Email}'";
    
    if (!empty($From)) {
        $query = $query . " AND Timestamp <= '{$From}'";
    }
    if (!empty($To)) {
        $query = $query . " AND Timestamp >= '{$To}'";
    }
    if ($Section !== 'All') {
        $query = $query . " AND Section = '{$Section}'";
    }
    
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