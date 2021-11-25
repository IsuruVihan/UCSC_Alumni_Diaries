<?php
    
    include('../../../db/db-conn.php');
    include("../../../server/session.php");
    
    $Date1 = $_POST['Date1'];
    $Date2 = $_POST['Date2'];
    $Name = trim($_POST['Name']);
    $Id = trim($_POST['Id']);
    $My = $_POST['My'];
    
    $query = "SELECT Id, Name FROM projects WHERE Status='NotStartedYet'";
    
    if (!empty($Date1) || !empty($Date2)) {
        if (!empty($Date1) && empty($Date2)) {
            $query = $query . " AND Timestamp > " . $Date1;
        } elseif (!empty($Date2) && empty($Date1)) {
            $query = $query . " AND Timestamp < " . $Date2;
        } elseif (!empty($Date1) && !empty($Date2)) {
            $query = $query . " AND Timestamp < " . $Date2 . " AND Timestamp > " . $Date1;
        }
    }
    if (!empty($Name)) {
        $query = $query . " AND Name LIKE '{$Name}%'";
    }
    if (!empty($Id)) {
        $query = $query . " AND Id LIKE '{$Id}%'";
    }
    if (!$My) {
        $query = $query . " INNER JOIN committeemembers ON Email = " . $_SESSION['Email'];
    }
    
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
                        <button
                            class='details-view-btn details-btn'
                            onclick=ViewProjectDetails('{$row['Id']}')
                        >View</button>
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