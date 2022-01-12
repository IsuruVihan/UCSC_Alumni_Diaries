<?php

include('../../../../db/db-conn.php');
include('../../../code-generator/PasswordGenerator.php');
include('../../../email/body-templates/MemberAccountCreated.php');
include('../../../session.php');

$name_with_initials = trim($_POST['name_with_initials']);
$first_name = preg_replace('/\s+/', '', trim($_POST['first_name']));
$last_name = preg_replace('/\s+/', '', trim($_POST['last_name']));
$nic = preg_replace('/\s+/', '', trim($_POST['nic']));
$email = preg_replace('/\s+/', '', trim($_POST['email']));
$index = preg_replace('/\s+/', '', trim($_POST['index']));
$contact = preg_replace('/\s+/', '', trim($_POST['contact']));
$gender = $_POST['gender'];
$batch = $_POST['batch'];
$address = trim($_POST['address']);

if (
    empty($name_with_initials) || empty($first_name) || empty($last_name) || empty($nic) || empty($email) ||
    empty($index) || empty($contact) || empty($gender) || empty($batch) || empty($address)
) {
    echo "<span class='message-error'>All fields are required</span>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='message-error'>Email is not valid</span>";
} else {
    $query = "SELECT * FROM memberaccountrequests WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<span class='message-error'>Already requested a Member account from this email</span>";
    } else {
        $query2 = "SELECT Email FROM registeredmembers WHERE email='$email'";
        $result2 = mysqli_query($conn, $query2);
        if (mysqli_num_rows($result2) > 0) {
            echo "<span class='message-error'>Email is already exist in the system</span>";
        } else {
            $random_password = PasswordGenerator();
            $random_password_encrypted = md5($random_password);
            $timestamp = date('Y-m-d H:i:s');
            $dueTimeStamp = date('Y-m-d H:i:s', strtotime($timestamp . " +1 month"));
    
            if (mail(
                $email,
                "Member account created",
                MemberAccountCreated($first_name, $last_name, $random_password),
                "From: ucsc.alumni.diaries@gmail.com"
            )) {
                $query3 = "
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
                        '$email',
                        '$first_name',
                        '$last_name',
                        '$name_with_initials',
                        '$gender',
                        '$address',
                        '$nic',
                        '$contact',
                        '$batch',
                        '$index',
                        '../assets/images/user-default.png',
                        '${random_password_encrypted}',
                        'Member',
                        'Monthly',
                        '${dueTimeStamp}'
                    )
                ";
                if (mysqli_query($conn, $query3)) {
                    //notification
                    // $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
                    // $results3 = mysqli_query($conn, $query3);

                    // if (mysqli_num_rows($results3) > 0) {
                    //     while ($row3 = mysqli_fetch_assoc($results3)) {  
                    //         $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$first_name} {$last_name} member account has been created by {$_SESSION['Email']}')
                    //         ";
                    //         mysqli_query($conn, $query4);
                        
                    //     }
                    // } 
                    echo "
                        <div class='success-message'>
                            <b>{$first_name} {$last_name}</b> member account created
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
}