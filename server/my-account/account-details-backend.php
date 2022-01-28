<?php
session_start();

include('../../db/db-conn.php');

$address = trim($_POST['address']);
$contact = trim($_POST['contact']);

if (empty($address) || empty($contact)) {
    echo "<span class='message-error'>All fields are required</span>";
} else {
    if (isset($_SESSION)) {
        $query = "
                UPDATE registeredmembers
                SET Address='{$address}', ContactNumber='{$contact}'
                WHERE Email='{$_SESSION['Email']}'
            ";
        if (mysqli_query($conn, $query)) {
            $_SESSION['Address'] = $address;
            $_SESSION['ContactNumber'] = $contact;
    
            // Activity
            $query7 = "
                INSERT INTO activitylog (Email, Section, Activity)
                VALUES ('{$_SESSION['Email']}', 'My Account', 'Edited account details')
            ";
            mysqli_query($conn, $query7);
            
            echo "1";
        } else {
            echo "<span class='message-error'>Server error</span>";
        }
    } else {
        echo "<span class='message-error'>No session</span>";
    }
}
