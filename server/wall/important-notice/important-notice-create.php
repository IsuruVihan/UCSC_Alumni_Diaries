<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = '../../../uploads/wall/important-notice/';
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

    $noticeTitle = $_POST['notice-title'];
    $noticeBody = $_POST['notice-body'];
    $ownerEmail = $_SESSION["Email"];

    if (!empty($noticeTitle) && !empty($noticeBody) && empty($file_name)) {
        $query = "INSERT INTO posts (OwnerEmail,Content , isImportant,Title) VALUES ('$ownerEmail','$noticeBody','1','$noticeTitle')";
        $result = mysqli_query($conn, $query);
    }

    if (!empty($noticeTitle) && !empty($noticeBody) && !empty($file_name)) {
        $query = "INSERT INTO posts (OwnerEmail,Content ,PicSrc, isImportant,Title) VALUES ('$ownerEmail','$noticeBody','$file','1','$noticeTitle')";
        $result = mysqli_query($conn, $query);
    }
    //notification
    $query1 = "SELECT Email FROM registeredmembers";
    $results1 = mysqli_query($conn, $query1);
    
    if (mysqli_num_rows($results1) > 0) {
        while ($row1 = mysqli_fetch_assoc($results1)) {  
            $query2 = "INSERT INTO notifications (Email,Message)   
            VALUES ('{$row1['Email']}','New Important Notice has been submitted by {$ownerEmail} on {$noticeTitle}')
            ";
            mysqli_query($conn, $query2);
        
        }
    }

}