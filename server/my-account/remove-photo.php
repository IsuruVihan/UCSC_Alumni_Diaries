<?php
session_start();
include('../../db/db-conn.php');

if($_SESSION['PicSrc'] === 'user-default.png'){
    echo "Profile Picture is not available.";
}
else{
    $currentFile = '../../uploads/profile-pics/' . $_SESSION['PicSrc'];
    unlink($currentFile);
    $_SESSION['PicSrc'] = 'user-default.png';
    $query = "UPDATE registeredmembers SET PicSrc='user-default.png' WHERE Email='{$_SESSION['Email']}'";
    mysqli_query($conn, $query);
    
    // Activity
    $query7 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Wall', 'Removed the profile picture')
    ";
    mysqli_query($conn, $query7);
    
    echo "Your profile picture has been removed.";
}
