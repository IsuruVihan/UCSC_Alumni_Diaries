<?php
    
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    
    $query = "
        SELECT FirstName, LastName, PicSrc FROM registeredmembers INNER JOIN committeemembers
        ON registeredmembers.Email = committeemembers.Email WHERE ProjectId = '{$ProjectId}' AND Type = 'Member'
    ";
    
    $results = mysqli_query($conn, $query);
    
    echo "
        <div class='title'>
            Committee Members
        </div>
    ";
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div class='results'>
                <div class='result'>
                    <img src='../assets/images/{$row['PicSrc']}' height='100%' alt='user' class='coord-pic'/>
                    <div class='fname'>{$row['FirstName']}</div>
                    <div class='lname'>{$row['LastName']}</div>
                </div>
            </div>
        ";
    }