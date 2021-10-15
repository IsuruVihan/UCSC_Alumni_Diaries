<?php
    include('../../db/db-conn.php');
    
    $request_id = $_POST['request_id'];
    
    $query = "DELETE FROM memberaccountrequests WHERE Id='${request_id}'";
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) > 0) {
        echo "<span class='message-success'>Request has been removed successfully</span>";
    } else {
        echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
    }