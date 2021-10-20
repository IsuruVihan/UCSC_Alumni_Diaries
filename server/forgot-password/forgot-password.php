<?php
    include('../../db/db-conn.php');
    include('../../server/random-password-generator.php');
    
    $email = $_POST['email'];
    
    if (empty($email)) {
        echo "<span class='message-error'>Email is required</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='message-error'>Email is not valid</span>";
    } else {
        $query = "SELECT Email, FirstName, LastName FROM registeredmembers WHERE Email='${email}'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $OTP = OTPGenerator(5);
                $encOTP = sha1($OTP);
                
                $body = "
                    Dear ${row['FirstName']} ${row['LastName']},
                    
                    Use the below mentioned OTP code to reset your member account password. Please note that the
                    code is valid only for two minutes.
                    
                    ${OTP}
                    
                    Feel free to contact us!
                    
                    Best Regards,
                    UCSC Alumni Diaries
                    The Alumni Association of University of Colombo School of Computing
                ";
                $to = "${row['Email']}";
                $subject = "OTP code for reset password";
                $headers = "From: ucsc.alumni.diaries@gmail.com";
                if (mail($to, $subject, $body, $headers)) {
                    setcookie("UserEmail", "${email}", time() + (86400 * 30), "/");
                    setcookie("otp", "${encOTP}", time() + 120, '/');
                    echo "1";
                } else {
                    echo "<span class='message-error'>Email not sent</span>";
                }
            }
        } else {
            echo "<span class='message-error'>User not found</span>";
        }
    }