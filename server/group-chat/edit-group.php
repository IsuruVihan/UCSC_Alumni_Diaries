
<?php
session_start();
include('../../db/db-conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['newName'];
    $Id = $_POST['Id'];

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExt = array('jpg', 'jpeg', 'png');
    $allowedMaxSize = 100000;
    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
    
    $fileDestination = '../../uploads/group-chat/' . $fileNameNew;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($fileDestination,PATHINFO_EXTENSION));
    
    if ($fileName === ''){
        $query = "UPDATE groupchats SET  OwnerEmail='{$_SESSION['Email']}', Name='{$name}'  WHERE Id='{$Id}'";
        $result= mysqli_query($conn, $query);
    }
    // Check file size
    elseif ($_FILES["file"]["size"] > 5000000) {
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
            $fileName = $_FILES['file']['tmp_name'];
            if ($row['PicSrc'] !== 'group-chat.png') {
                unlink("../../uploads/group-chat/${row['PicSrc']}");
            }
            $row['PicSrc'] = $newFileSrc;
            $query = "UPDATE groupchats SET OwnerEmail='{$_SESSION['Email']}', Name='{$name}', PicSrc='{$fileNameNew}'  WHERE Id='{$Id}'";
            mysqli_query($conn, $query);
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file. ";
        }
    }    
}























  