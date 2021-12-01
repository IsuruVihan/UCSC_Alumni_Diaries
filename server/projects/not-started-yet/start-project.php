<?php
    
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    
    $query = "SELECT Email FROM committeemembers WHERE Type='Coordinator'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $query2 = "UPDATE projects SET Status='Ongoing' WHERE Id='{$Id}'";
        if (mysqli_query($conn, $query2)) {
            echo "
                <span class='message-success'>
                    Project has been started. You can track the progress under ongoing projects section.
                </span>
            ";
        } else {
            echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
        }
    } else {
        echo "<span class='message-error'>Select a coordinator for the project</span>";
    }