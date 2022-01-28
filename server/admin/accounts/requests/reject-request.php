<?php

include('../../../../db/db-conn.php');
include('../../../email/body-templates/MemberAccountRequestRejected.php');
include('../../../session.php');

$Id = $_POST['Id'];

$query2 = "SELECT Email, FirstName, LastName FROM memberaccountrequests WHERE Id='{$Id}'";
$results2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($results2) > 0) {
    while ($row2 = mysqli_fetch_assoc($results2)) {
        if (mail(
            $row2['Email'],
            "Member account request rejected",
            MemberAccountRequestRejected($row2['FirstName'], $row2['LastName']),
            "From: ucsc.alumni.diaries@gmail.com"
        )) {
            $query = "UPDATE memberaccountrequests SET isRejected='1' WHERE Id='{$Id}'";
            if (mysqli_query($conn, $query)) {

                //notification
                $query3 = "SELECT Email, FirstName, LastName FROM memberaccountrequests WHERE Id='{$Id}'";
                $results3 = mysqli_query($conn, $query3);
                $row3 = mysqli_fetch_assoc($results3);
     
                $query4 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
                $results4 = mysqli_query($conn, $query4);
                
                if (mysqli_num_rows($results4) > 0) {
                    while ($row4 = mysqli_fetch_assoc($results4)) {  
                        $query4 = "INSERT INTO notifications (Email,Message) 
                        VALUES ('{$row4['Email']}','{$row3['FirstName']} {$row3['LastName']} member account request has been reject by {$_SESSION['Email']}')";
                        mysqli_query($conn, $query4);
    
                        // Activity
                        $query5 = "
                            INSERT INTO activitylog (Email, Section, Activity)
                            VALUES ('{$_SESSION['Email']}', 'Admin - Accounts', 'Member account request (EMAIL): {$row2['Email']} reject')
                        ";
                        mysqli_query($conn, $query5);
                    }
                }  
                echo "
                    <div class='success-message'>
                        <b>{$row2['FirstName']} {$row2['LastName']}</b> request has been rejected
                    </div>
                ";
            } else {
                echo "<div class='error-message'>Server Error: " . mysqli_error($conn) . "</div>";
            }
        } else {
            echo "<div class='error-message'>Email not sent</div>";
        }
    }
}