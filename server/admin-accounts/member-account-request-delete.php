<?php
    include('../../db/db-conn.php');
    
    $request_id = $_POST['request_id'];
    
    $query = "DELETE FROM memberaccountrequests WHERE Id='$request_id'";
    mysqli_query($conn, $query);
    
    echo "<span class='message-success'>Request has been deleted successfully</span>";