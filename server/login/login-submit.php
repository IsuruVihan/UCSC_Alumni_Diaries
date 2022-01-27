<?php
    include('../../db/db-conn.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rememberMe = $_POST['rememberMe'];
    
    if (empty($email) || empty($password)) {
        echo "<span class='message-error'>All fields are required</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='message-error'>Email is not valid</span>";
    } else {
        $encPassword = md5($password);
        $query = "SELECT * FROM registeredmembers WHERE Email='${email}' AND Password='${encPassword}'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["Email"] = "${row['Email']}";
                $_SESSION["FirstName"] = "${row['FirstName']}";
                $_SESSION["LastName"] = "${row['LastName']}";
                $_SESSION["NameWithInitials"] = "${row['NameWithInitials']}";
                $_SESSION["Gender"] = "${row['Gender']}";
                $_SESSION["Address"] = "${row['Address']}";
                $_SESSION["NIC"] = "${row['NIC']}";
                $_SESSION["ContactNumber"] = "${row['ContactNumber']}";
                $_SESSION["Batch"] = "${row['Batch']}";
                $_SESSION["IndexNumber"] = "${row['IndexNumber']}";
                $_SESSION["PicSrc"] = "${row['PicSrc']}";
                $_SESSION["Password"] = "${row['Password']}";
                $_SESSION["AccType"] = "${row['AccType']}";
                $_SESSION["SubscriptionType"] = "${row['SubscriptionType']}";
                $_SESSION["SubscriptionDue"] = "${row['SubscriptionDue']}";
                $_SESSION["Banned"] = false;
    
                $query2 = "SELECT * FROM bannedaccounts WHERE Email='${row['Email']}'";
                $result2 = mysqli_query($conn, $query2);
                if (mysqli_num_rows($result2) > 0) {
                    $_SESSION["Banned"] = true;
                }
    
                // Activity
                $query3 = "
                    INSERT INTO activitylog (Email, Section, Activity)
                    VALUES ('{$_SESSION['Email']}', 'Login', 'Logged in')
                ";
                mysqli_query($conn, $query3);
                
                echo "1";
            }
        } else {
            echo "<span class='message-error'>Email and Password not matching</span>";
        }
    }
    
    