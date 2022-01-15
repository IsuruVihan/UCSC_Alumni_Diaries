<?php

include('../../../../db/db-conn.php');
include('../../../email/body-templates/MemberAccountRequestDeleted.php');
include('../../../session.php');

$Id = $_POST['Id'];
    
$query2 = "SELECT Email, FirstName, LastName FROM memberaccountrequests WHERE Id='${Id}'";
$results2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($results2) > 0) {
    while ($row2 = mysqli_fetch_assoc($results2)) {
        if (mail(
            $row2['Email'],
            "Member account request deleted",
            MemberAccountRequestDeleted($row2['FirstName'], $row2['LastName']),
            "From: ucsc.alumni.diaries@gmail.com"
        )) {
            $query = "DELETE FROM memberaccountrequests WHERE Id='${Id}'";
            if (mysqli_query($conn, $query)) {

                //notification
                $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
                $results3 = mysqli_query($conn, $query3);
                
                if (mysqli_num_rows($results3) > 0) {
                    while ($row3 = mysqli_fetch_assoc($results3)) {  
                        $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','Member account request of {$row2['FirstName']} {$row2['LastName']} has been deleted by {$_SESSION['Email']}')
                        ";
                        mysqli_query($conn, $query4);
                    
                    }
                }  
                echo "
                    <div class='success-message'>
                        <b>{$row2['FirstName']} {$row2['LastName']} </b>
                        rejected member account request has been deleted
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