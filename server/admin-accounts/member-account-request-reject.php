<?php
    include('../../db/db-conn.php');
    
    $request_id = $_POST['request_id'];
    
    $query = "UPDATE memberaccountrequests SET isRejected='1' WHERE Id='${request_id}'";
    $results = mysqli_query($conn, $query);
    
    echo "<span class='message-success'>Request has been rejected successfully</span>";