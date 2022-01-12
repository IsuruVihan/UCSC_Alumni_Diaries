<?php

include('../../../../db/db-conn.php');
include('../../../email/body-templates/MemberAccountBanned.php');
include('../../../session.php');

$Email = $_POST['Email'];

$query = "SELECT FirstName, LastName FROM registeredmembers WHERE Email='{$Email}'";
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($results)) {
    if (mail(
        $Email,
        "Member account banned",
        MemberAccountBanned($row['FirstName'], $row['LastName']),
        "From: ucsc.alumni.diaries@gmail.com"
    )) {
        $query2 = "INSERT INTO bannedaccounts (Email, TBEmail) VALUES ('{$Email}', 'ucsc.alumni.diaries@gmail.com')";
        if (mysqli_query($conn, $query2)) {
            
            //notification
            $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
            $results3 = mysqli_query($conn, $query3);
            
            if (mysqli_num_rows($results3) > 0) {
                while ($row3 = mysqli_fetch_assoc($results3)) {  
                    $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$row['FirstName']} {$row['LastName']} member account has banned by {$_SESSION['Email']}')
                    ";
                    mysqli_query($conn, $query4);
                
                }
            } 
            echo "
                <div class='success-message'>
                    <b>{$row['FirstName']} {$row['LastName']}</b> member account has been banned
                </div>
            ";
        } else {
            echo "
                <div class='error-message'>Server Error: " . mysqli_error($conn) . "</div>
            ";
        }
    } else {
        echo "
            <div class='error-message'>Email not sent</div>
        ";
    }
}