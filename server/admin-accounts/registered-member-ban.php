<?php
    include('../../db/db-conn.php');
    
    $member_email = $_POST['member_email'];
    $query = "INSERT INTO bannedaccounts (Email, TBEmail) VALUES ('${member_email}','test@test.com')";
    
    if (mysqli_query($conn, $query)) {
        echo "
            Member account has been banned successfully.
        ";
    } else {
        echo "
            Server error.
        ";
    }