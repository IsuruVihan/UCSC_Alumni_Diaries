<?php
    if (isset($_POST['submit-btn'])) {
        $file = $_FILES['image-attach'];
        
        $fileName = $_FILES['image-attach']['name'];
        $fileTmpName = $_FILES['image-attach']['tmp_name'];
        $fileSize = $_FILES['image-attach']['size'];
        $fileError = $_FILES['image-attach']['error'];
        $fileType = $_FILES['image-attach']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowedExt = array('jpg', 'jpeg', 'png', 'pdf');
        $allowedMaxSize = 100000;
        
        if (in_array($fileActualExt, $allowedExt)) {
            if ($fileError === 0) {
                if ($fileSize < $allowedMaxSize) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = '../../uploads/suggestions/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "File uploaded successfully";
                } else {
                    echo "File size should be less than 10MB";
                }
            } else {
                echo "There was an error uploading your file";
            }
        } else {
            echo "File types allowed: jpg, jpeg, png, pdf";
        }
    }