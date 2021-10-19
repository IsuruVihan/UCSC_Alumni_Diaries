<?php
    include('../../db/db-conn.php');
    
    $email = $_POST['email'];
    
    if (empty($email)) {
        echo "<span class='message-error'>Email is required</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='message-error'>Email is not valid</span>";
    } else {
        $query = "SELECT Email FROM registeredmembers WHERE Email='${email}'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "1";
        } else {
            echo "<span class='message-error'>User not found</span>";
        }
    }