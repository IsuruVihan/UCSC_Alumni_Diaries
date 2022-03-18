<?php

include('../../../db/db-conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $noticeTitle = $_POST['edit-title'];
    $noticeBody = $_POST['edit-content'];
    $ownerEmail = $_SESSION["Email"];
    $Id = $_POST['id'];

    if(isset($_FILES['files'])){
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
    if (!empty($noticeTitle) && !empty($noticeBody) &&  empty($file_name)) {
        $query = "UPDATE posts SET Content='{$noticeBody}',isImportant='1',Title='{$noticeTitle}' WHERE Id='{$_POST['id']}'";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query7 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Updated an important notice')
        ";
        mysqli_query($conn, $query7);
    }
}