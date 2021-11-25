<?php
    
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    $Name = trim($_POST['Name']);
    $Description = trim($_POST['Description']);
    
    if (empty($Name) || empty($Description)) {
        echo "<span class='message-error'>All fields are required</span>";
    } else {
        $query = "SELECT Id FROM projects WHERE Name='{$Name}'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) > 0) {
            echo "
                <span class='message-error'>This project name has been already taken. Please choose another name</span>
            ";
        } else {
            $query2 = "UPDATE projects SET Name='{$Name}', Description='{$Description}' WHERE Id='{$Id}'";
            if (mysqli_query($conn, $query2)) {
                echo "<span class='message-success'>All changes has been saved</span>";
            } else {
                echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
            }
        }
    }