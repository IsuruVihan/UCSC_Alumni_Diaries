<?php
    session_start();
    
    include('../../db/db-conn.php');
    
    $currentPw = $_POST['currentPw'];
    $newPw = $_POST['newPw'];
    $confirmPw = $_POST['confirmPw'];
    
    $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+!@#$%&*?]).*$/";
    
    if (empty($currentPw) || empty($newPw) || empty($confirmPw)) {
        echo "<span class='message-error'>All fields are required</span>";
    } else {
        $encPw = md5($currentPw);
        $query = "SELECT Email FROM registeredmembers WHERE Password='$encPw'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['Email'] === $_SESSION['Email']) {
                    if (!preg_match($regex, $newPw)) {
                        echo "<span class='message-error'>Password doesn't meet preferred criteria</span>";
                    } elseif (strlen($newPw) < 6) {
                        echo "<span class='message-error'>Password should contain at-least 6 characters</span>";
                    } elseif ($newPw !== $confirmPw) {
                        echo "<span class='message-error'>Passwords are not matching</span>";
                    } else {
                        $encPw2 = md5($newPw);
                        $query2 = "UPDATE registeredmembers SET Password='$encPw2' WHERE Email='${_SESSION['Email']}'";
                        if (mysqli_query($conn, $query2)) {
                            echo "1";
                        } else {
                            echo "<span class='message-error'>Server error</span>";
                        }
                    }
                } else {
                    echo "<span class='message-error'>Password is incorrect</span>";
                }
            }
        } else {
            echo "<span class='message-error'>Password is incorrect</span>";
        }
    }