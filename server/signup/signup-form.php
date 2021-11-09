<?php
    include('../../db/db-conn.php');

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
        echo "<span class='message-error'>email is not valid</span>";
    } else {
        $query = "SELECT * FROM memberaccountrequests WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<span class='message-error'>You have already requested a Member account from this email</span>";
        } else {
            $query = "SELECT * FROM registeredmembers WHERE email='$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<span class='message-error'>email is already exist in the system</span>";
            } else {
                $query = "INSERT INTO memberaccountrequests (
                            email,
                            FirstName,
                            LastName,
                            NameWithInitials,
                            Gender,
                            Address,
                            NIC,
                            ContactNumber,
                            Batch,
                            IndexNumber
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
                            '$index'
                        )";
                if (mysqli_query($conn, $query)) {
                    echo "<span class='message-success'>Member account request has been submitted</span>";
                } else {
                    echo "<span class='message-error'>Server Error: " . mysqli_error($conn) . "</span>";
                }
            }
        }
    }
    