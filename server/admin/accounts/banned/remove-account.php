<?php

include('../../../../db/db-conn.php');
include('../../../email/body-templates/MemberAccountRemoved.php');

$Email = $_POST['Email'];

$query = "SELECT FirstName, LastName FROM registeredmembers WHERE Email='{$Email}'";
$results = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($results)) {
    if (mail(
        $Email,
        "Member account removed",
        MemberAccountRemoved($row['FirstName'], $row['LastName']),
        "From: ucsc.alumni.diaries@gmail.com"
    )) {
        $query2 = "DELETE FROM registeredmembers WHERE Email='{$Email}'";
        if (mysqli_query($conn, $query2)) {
            $query3 = "DELETE FROM bannedaccounts WHERE Email='{$Email}'";
            if (mysqli_query($conn, $query3)) {
                echo "
                    <div class='success-message'>
                        <b>{$row['FirstName']} {$row['LastName']}</b> member account has been removed
                    </div>
                ";
            } else {
                echo "
                    <div class='error-message'>Server Error: " . mysqli_error($conn) . "</div>
                ";
            }
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