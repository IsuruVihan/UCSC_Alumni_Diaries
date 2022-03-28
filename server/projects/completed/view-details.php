<?php
    
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    
    $query = "SELECT Name, Description, Timestamp FROM projects WHERE Id = '{$ProjectId}'";
    $query2 = "
        SELECT FirstName, LastName, PicSrc FROM registeredmembers INNER JOIN committeemembers
        ON registeredmembers.Email = committeemembers.Email WHERE ProjectId = '{$ProjectId}' AND Type = 'Coordinator'
    ";
    
    $results = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query2);
    
    while ($row = mysqli_fetch_assoc($results)) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            echo "
                <div class='title project-name-div' id='project-name-div'>{$row['Name']}</div>
                <div class='project-status'>Started on: {$row['Timestamp']}</div>
                <div class='project-description' id='project-description'>{$row['Description']}</div>
                <div class='coord'>
                    <img src='../uploads/profile-pics/{$row2['PicSrc']}' height='100%' alt='user' class='coord-pic'/>
                    <p class='coord-fname'>{$row2['FirstName']}</p>
                    <p class='coord-lname'>{$row2['LastName']}</p>
                </div>
            ";
        }
    }