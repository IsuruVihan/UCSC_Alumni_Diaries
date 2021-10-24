<?php
    include('../../db/db-conn.php');

    $login_email = trim($_POST['login_email']);
    $login_password = trim($_POST['login_password']);

    if (
        empty($login_email) && empty($login_password)
    ) {
        echo "<span class='message-error'> Email and Password is Required! </span>";
    } elseif (
        empty($login_password)
    ) {
        echo "<span class='message-error'> Password is Required! </span>";
    } elseif (
        empty($login_email)
    ) {
        echo "<span class='message-error'> Email is Required! </span>";
    } else {
        $query = "SELECT Email FROM registeredmembers WHERE Password='$login_password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 0 ) {
            echo "<span class='message-error'> Invalid Password! </span>";
        } else{
            $query = "SELECT Password FROM registeredmembers WHERE Email='$login_email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) === 0 ){
                echo "<span class='message-error'> Invalid Email! </span>";
            }else {
                echo "<script> window.location.assign('../../pages/home.php'); </script>";
            }
        }
    }