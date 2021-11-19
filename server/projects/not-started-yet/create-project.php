<?php
    
    include('../../../db/db-conn.php');
    
    $Name = preg_replace('/\s+/', '', trim($_POST['Name']));
    $Description = preg_replace('/\s+/', '', trim($_POST['Description']));
    
    if (empty($Name) || empty($Description)) {
        echo "<div class='error-message'>All fields are required</div>";
    } else {
        $query = "SELECT id FROM projects WHERE Name={$Name}";
        $result = mysqli_query($conn, $query);
        if (($result) > 0) {
            echo "<div class='error-message'>Project already exist with this name</div>";
        } else {
            $query2 = "
                INSERT INTO projects (Name, Description, Status)
                VALUES ('{$Name}','{$Description}','NotStartedYet')
            ";
            if (mysqli_query($conn, $query2)) {
                echo "<div class='success-message'><b>{$Name}: </b>project has been created</div>";
            } else {
                echo "<div class='error-message'>Server Error: " . mysqli_error($conn) . "</div>";
            }
        }
    }