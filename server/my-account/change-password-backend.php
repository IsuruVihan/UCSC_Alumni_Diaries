<?php
include('../../db/db-conn.php');
include('../session.php');

$password0 = $_POST['password0'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$encPassword0 = md5($password0);
$current_password = $_SESSION["Password"];
$regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+!@#$%&*?]).*$/";

//if (isset($_SESSION["Email"])) {
     if (empty($password1) || empty($password2) || empty($password0)){
        echo "<span class='message-error'>All fields are required</span>";
    } elseif ($encPassword0 !== $current_password){
        echo "<span class='message-error'>Current Password is incorrect</span>";
    } elseif (!preg_match($regex, $password1)) {
        echo "<span class='message-error'>Password doesn't meet preferred criteria</span>";
    } elseif (strlen($password1) < 6) {
        echo "<span class='message-error'>Password should contain at-least 6 characters</span>";
    } elseif ($password1 !== $password2) {
        echo "<span class='message-error'>Passwords are not matching</span>";
    } else {
        $encPassword = md5($password1);
        $email = $_SESSION["Email"];
        $query = "UPDATE registeredmembers SET Password='$encPassword' WHERE Email='$email'";
        setcookie("UserEmail", "$encPassword", time() - 1 , "/");
        if (mysqli_query($conn, $query)) {
            // Activity
            $query7 = "
                INSERT INTO activitylog (Email, Section, Activity)
                VALUES ('{$_SESSION['Email']}', 'My Account', 'Changed the password')
            ";
            mysqli_query($conn, $query7);
            
            echo "1";
        } else {
            echo "<span class='message-error'>Server error</span>";
        }
    }
//} else {
//    echo "<span class='message-error'>Server timeout! Try again.</span>";
//}
