<?php
    include('../../db/db-conn.php');
    
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    
    $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+!@#$%&*?]).*$/";
    
    if (isset($_COOKIE['UserEmail'])) {
        if (empty($password1) || empty($password2)) {
            echo "<span class='message-error'>All fields are required</span>";
        } elseif (!preg_match($regex, $password1)) {
            echo "<span class='message-error'>Password doesn't meet preferred criteria</span>";
        } elseif (strlen($password1) < 6) {
            echo "<span class='message-error'>Password should contain at-least 6 characters</span>";
        } elseif ($password1 !== $password2) {
            echo "<span class='message-error'>Passwords are not matching</span>";
        } else {
            $encPassword = md5($password1);
            $email = $_COOKIE['UserEmail'];
            $query = "UPDATE registeredmembers SET Password='${encPassword}' WHERE Email='${email}'";
            setcookie("UserEmail", NULL, time() - 1 , "/");
            if (mysqli_query($conn, $query)) {
                echo "1";
            } else {
                echo "<span class='message-error'>Server error</span>";
            }
        }
    } else {
        echo "<span class='message-error'>Server timeout! Try again.</span>";
    }