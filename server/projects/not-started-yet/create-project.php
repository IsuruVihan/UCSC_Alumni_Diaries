<?php
    
    include('../../../db/db-conn.php');
    
    $Name = trim($_POST['Name']);
    $Description = trim($_POST['Description']);
    
    if (empty($Name) || empty($Description)) {
        echo "<div class='error-message'>All fields are required</div>";
    } else {
        $query = "SELECT Id FROM projects WHERE Name='{$Name}'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) > 0) {
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