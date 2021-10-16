<?php
    include('../../db/db-conn.php');
    
    $member_email = $_POST['member_email'];
    
    $query2 = "SELECT Email, FirstName, LastName FROM registeredmembers WHERE Email='${member_email}'";
    $results2 = mysqli_query($conn, $query2);
    if (mysqli_num_rows($results2) > 0) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            $body = "
                Dear ${row2['FirstName']} ${row2['LastName']},
                    
                Your member account has been banned by the top board of UCSC Alumni Association.
                    
                Feel free to contact us!
                    
                Best Regards,
                UCSC Alumni Diaries
                The Alumni Association of University of Colombo School of Computing
            ";
            $to = "${row2['Email']}";
            $subject = "Member account banned";
            $headers = "From: ucsc.alumni.diaries@gmail.com";
            if (mail($to, $subject, $body, $headers)) {
                $query = "INSERT INTO bannedaccounts (Email, TBEmail) VALUES ('${member_email}','test@test.com')";
                if (mysqli_query($conn, $query)) {
                    echo "<span class='message-success'>Member account has been banned successfully</span>";
                } else {
                    echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
                }
            } else {
                echo "<span class='message-error'>Email not sent</span>";
            }
        }
    }