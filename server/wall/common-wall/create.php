<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = '../../../uploads/wall/common-wall/';
        $extensions = ['jpg', 'jpeg', 'png', 'gif'];

        $all_files = count($_FILES['files']['tmp_name']);

        for ($i = 0; $i < $all_files; $i++) {
            $file_name = $_FILES['files']['name'][$i];
            $file_tmp = $_FILES['files']['tmp_name'][$i];
            $file_type = $_FILES['files']['type'][$i];
            $file_size = $_FILES['files']['size'][$i];
            $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

            $fileNameNew = uniqid('', true) . "." . $file_ext;
            $file = $path . $fileNameNew;

            if (!in_array($file_ext, $extensions)) {
                $errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
            }

            if (empty($errors)) {
                move_uploaded_file($file_tmp, $file);
            }
        }
        if ($errors) print_r($errors);
    }
    
    $postContent = $_POST['post-content'];
    $ownerEmail = $_SESSION["Email"];

    if ( !empty($postContent) && empty($file_name)) {
        $query = "INSERT INTO posts (OwnerEmail, Content, isImportant) VALUES ('$ownerEmail','$postContent','0')";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query4 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Post published')
        ";
        mysqli_query($conn, $query4);
    }

    if ( !empty($postContent) && !empty($file_name)) {
        $query = "INSERT INTO posts (OwnerEmail, Content, PicSrc, isImportant) VALUES ('$ownerEmail','$postContent','$file','0')";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query4 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Post published')
        ";
        mysqli_query($conn, $query4);
    }
}