<?php
    include('../../db/db-conn.php');
    
    $name_with_initials = $_POST['name_with_initials'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $index = $_POST['index'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $batch = $_POST['batch'];
    $address = $_POST['address'];
    
    if (
        empty($name_with_initials) || empty($first_name) || empty($last_name) || empty($nic) || empty($email) ||
        empty($index) || empty($contact) || empty($gender) || empty($batch) || empty($address)
    ) {
        echo "<span class='message-error'>All fields are required</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='message-error'>Email is not valid</span>";
        $email_invalid = true;
    } else {
        $query = "SELECT * FROM memberaccountrequests WHERE Email='$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<span class='message-error'>You have already requested a Member account from this Email</span>";
        } else {
            $query = "SELECT * FROM registeredmembers WHERE Email='$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<span class='message-error'>Email is already exist in the system</span>";
            } else {
                $query = "INSERT INTO memberaccountrequests (
                            Email,
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
                mysqli_query($conn, $query);
                echo "<span class='message-success'>Member account request has been submitted</span>";
            }
        }
    }