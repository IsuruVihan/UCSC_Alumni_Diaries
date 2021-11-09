<?php

include('../../../../db/db-conn.php');
include('../../../email/body-templates/MemberAccountRequestRejected.php');

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
                echo "
                    <div class='success-message'>
                        <b>{$row2['FirstName']} {$row2['FirstName']}</b> request has been rejected
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