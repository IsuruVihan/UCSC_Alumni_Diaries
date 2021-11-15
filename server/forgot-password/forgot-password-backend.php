<?php
include('../../db/db-conn.php');


$email = trim($_POST['email']);



if (empty($email)) {
    echo "<span class='message-error'>Email is required</span>";
} else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "<span class='message-error'>Email is not valid</span>";
} else {
    $query = "SELECT * FROM registeredmembers WHERE Email='$email' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //OTP Generator
            function generateNumericOTP()
            {
                $generator = "1357902468";
                $newString = "";

                for ($i = 1; $i <= 4; $i++) {
                    $newString .= substr($generator, (rand() % (strlen($generator))), 1);
                }
                return $newString;
            }

            $OTP = generateNumericOTP();
            $encOTP = sha1($OTP);

            //mail function
            $to = "${row['Email']}";
            $msg =  "
            Dear ${row['FirstName']} ${row['LastName']},
            
            Use the below mentioned OTP code to reset your member account password. Please note that the
            code is valid only for two minutes.
            
            ${OTP}
            
            Feel free to contact us!
            
            Best Regards,
            UCSC Alumni Diaries
            The Alumni Association of University of Colombo School of Computing";

            $subject = "OTP code for reset password";
            $header = "From: ucsc.alumni.diaries@gmail.com";

            $sentMail = mail($to, $subject, $msg, $header);

            if ($sentMail == true) {
                setcookie("UserEmail", "${email}", time() + (86400 * 30), "/");
                setcookie("otp", "${encOTP}", time() + 120, "/");
                echo "Message sent";
            } else {
                echo "<span class='message-error'>Email not sent</span>";
            }
        }
    } else {
        echo "<span class='message-error'>User not found</span>";
    }
}
?>