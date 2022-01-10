<?php
session_start();

include('../../db/db-conn.php');
$conn = mysqli_connect("localhost", "root", "", "ucsc_alumni_diaries");

$file = $_FILES['new-photo'];
$fileName = $_FILES['new-photo']['name'];
$fileTmpName = $_FILES['new-photo']['tmp_name'];
$fileSize = $_FILES['new-photo']['size'];
$fileError = $_FILES['new-photo']['error'];
$fileType = $_FILES['new-photo']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowedExt = array('jpg', 'jpeg', 'png');
$allowedMaxSize = 100000;
$fileNameNew = uniqid('', true) . "." . $fileActualExt;

$fileDestination = '../../uploads/profile-pics/' . $fileNameNew;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($fileDestination,PATHINFO_EXTENSION));

if ($fileName === ''){
    echo "Select an image before submitting. ";
}

// Check file size
elseif ($_FILES["new-photo"]["size"] > 5000000) {
    echo "Sorry, your file is too large. ";
    $uploadOk = 0;
}

 //Allow certain file formats
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
    $uploadOk = 0;
}

 //Check if $uploadOk is set to 0 by an error
elseif ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. ";
 //if everything is ok, try to upload file
} else {
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
//        $fileDestination = '../../uploads/profile-pics/' . $fileNameNew;
        $newFileSrc = $fileNameNew;
        $fileName = $_FILES['new-photo']['tmp_name'];
        if ($_SESSION['PicSrc'] !== 'user-default.png'){
            $currentFile = '../../uploads/profile-pics/' . $_SESSION['PicSrc'];
            unlink($currentFile);
        }
        $_SESSION['PicSrc'] = $newFileSrc;
        $query = "UPDATE registeredmembers SET PicSrc='{$_SESSION['PicSrc']}' WHERE Email='{$_SESSION['Email']}'";
        mysqli_query($conn, $query);
        echo "The file ". htmlspecialchars( basename( $_FILES["new-photo"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. ";
    }
}





















