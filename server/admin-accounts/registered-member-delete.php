<?php
    include('../../db/db-conn.php');
    
    $member_email = $_POST['member_email'];
    $query = "SELECT FirstName, LastName FROM registeredmembers WHERE Email='${member_email}'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $body = "
                Dear ${row['FirstName']} ${row['LastName']},
                
                Your member account has been removed by the top board of UCSC Alumni Association.
                
                Feel free to contact us!
                
                Best Regards,
                UCSC Alumni Diaries
                The Alumni Association of University of Colombo School of Computing
            ";
            $to = "${member_email}";
            $subject = "Member account removed";
            $headers = "From: ucsc.alumni.diaries@gmail.com";
            if (mail($to, $subject, $body, $headers)) {
                $query2 = "DELETE FROM registeredmembers WHERE Email='${member_email}'";
                if (mysqli_query($conn, $query2)) {
                    echo "<span class='message-success'>Member account has been removed successfully</span>";
                } else {
                    echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
                }
            } else {
                echo "<span class='message-error'>Email not sent</span>";
            }
        }
    }