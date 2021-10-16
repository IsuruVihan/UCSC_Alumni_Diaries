<?php
    include('../../db/db-conn.php');
    
    $request_id = $_POST['request_id'];
    
    $query2 = "SELECT Email, FirstName, LastName FROM memberaccountrequests WHERE Id='${request_id}'";
    $results2 = mysqli_query($conn, $query2);
    if (mysqli_num_rows($results2) > 0) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            $body = "
                Dear ${row2['FirstName']} ${row2['LastName']},
                
                Your member account request has been removed by the top board of UCSC Alumni Association.
                
                Feel free to contact us!
                
                Best Regards,
                UCSC Alumni Diaries
                The Alumni Association of University of Colombo School of Computing
            ";
            $to = "${row2['Email']}";
            $subject = "Member account request removed";
            $headers = "From: ucsc.alumni.diaries@gmail.com";
            if (mail($to, $subject, $body, $headers)) {
                $query = "DELETE FROM memberaccountrequests WHERE Id='${request_id}'";
                if (mysqli_query($conn, $query)) {
                    echo "<span class='message-success'>Request has been removed successfully</span>";
                } else {
                    echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
                }
            } else {
                echo "<span class='message-error'>Email not sent</span>";
            }
        }
    }