<?php
    include('../random-password-generator.php');
    include('../../db/db-conn.php');
    
    $request_id = $_POST['request_id'];
    
    $query = "SELECT * FROM memberaccountrequests WHERE Id='$request_id'";
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $random_password = PasswordGenerator(8);
            $random_password_encrypted = md5($random_password);
            $body = "
                Dear ${row['FirstName']} ${row['LastName']},
                
                We are happy to inform you that your member account request has been approved by the
                top board of University of Colombo School of Computing Alumni Association. You can use
                this link to log-in to your account. Your default password is mentioned below.
                
                ${random_password}
                
                You can change it as your preference once you logged into your account.
                
                Feel free to contact us!
                
                Best Regards,
                UCSC Alumni Diaries
                The Alumni Association of University of Colombo School of Computing
            ";
            $to = "${row['Email']}";
            $subject = "Member account request accepted";
            $headers = "From: ucsc.alumni.diaries@gmail.com";
            if (mail($to, $subject, $body, $headers)) {
                $timestamp = date('Y-m-d H:i:s');
                $dueTimeStamp = date('Y-m-d H:i:s', strtotime( $timestamp . " +1 month"));
                $query = "
                INSERT INTO registeredmembers (
                    Email,
                    FirstName,
                    LastName,
                    NameWithInitials,
                    Gender,
                    Address,
                    NIC,
                    ContactNumber,
                    Batch,
                    IndexNumber,
                    PicSrc,
                    Password,
                    AccType,
                    SubscriptionType,
                    SubscriptionDue
                ) VALUES (
                    '${row['Email']}',
                    '${row['FirstName']}',
                    '${row['LastName']}',
                    '${row['NameWithInitials']}',
                    '${row['Gender']}',
                    '${row['Address']}',
                    '${row['NIC']}',
                    '${row['ContactNumber']}',
                    '${row['Batch']}',
                    '${row['IndexNumber']}',
                    '../assets/images/user-default.png',
                    '${random_password_encrypted}',
                    'Member',
                    'Monthly',
                    '${dueTimeStamp}'
                )";
                if (mysqli_query($conn, $query)) {
                    $query = "DELETE FROM memberaccountrequests WHERE Id='${row['Id']}'";
                    if (mysqli_query($conn, $query)) {
                        echo "<span class='message-success'>Request has been accepted successfully</span>";
                    } else {
                        echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
                    }
                } else {
                    echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
                }
            } else {
                echo "<span class='message-error'>Email not sent</span>";
            }
        }
    }