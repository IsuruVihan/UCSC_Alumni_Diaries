<?php
    include('../../db/db-conn.php');
    
    $member_email = $_POST['member_email'];
    
    $query = "DELETE FROM bannedaccounts WHERE Email='${member_email}'";
    
    if (mysqli_query($conn, $query)) {
        echo "<span class='message-success'>Member account has been unbanned successfully</span>";
    } else {
        echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
    }