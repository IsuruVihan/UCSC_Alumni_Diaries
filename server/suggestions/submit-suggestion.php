<?php
    $conn = mysqli_connect("localhost", "root", "", "ucsc_alumni_diaries");
    
    $errors = "";
    $messages = "";
    
    if (isset($_POST['submit-btn'])) {
        $user_name = $_POST['user-name'];
        $user_email = $_POST['user-email'];
        $suggestion_title = $_POST['suggestion-title'];
        $suggestion_content = $_POST['suggestion-content'];
        $file = $_FILES['image-attach'];
        
        if (empty($user_name) || empty($user_email) || empty($suggestion_title) || empty($suggestion_content)) {
            $errors = "All fields are required.";
            header("Location: ../../pages/suggestions.php");
        } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $errors = "Email is not valid.";
            header("Location: ../../pages/suggestions.php");
        } else {
            if ($file['name'] != '') {
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
                            
                            $query = "
                                INSERT INTO suggestions (Name, Email, Title, Message, PicSrc)
                                VALUES (
                                    '${user_name}',
                                    '${user_email}',
                                    '${suggestion_title}',
                                    '${suggestion_content}',
                                    '${fileNameNew}')
                            ";
                            if (mysqli_query($conn, $query)) {
                                header("Location: ../../pages/suggestions.php");
                                $messages = "Your suggestion has been submitted successfully";
                            } else {
                                unlink("../../uploads/suggestions/" . $fileNameNew);
                                $errors = "Server error";
                                header("Location: ../../pages/suggestions.php");
                            }
                        } else {
                            $errors = "File size should be less than 10MB";
                            header("Location: ../../pages/suggestions.php");
                        }
                    } else {
                        $errors = "There was an error uploading your file";
                        header("Location: ../../pages/suggestions.php");
                    }
                } else {
                    $errors = "File types allowed: jpg, jpeg, png, pdf";
                    header("Location: ../../pages/suggestions.php");
                }
            }  else {
                $query = "INSERT INTO suggestions (Name, Email, Title, Message)
                            VALUES ('${user_name}', '${user_email}', '${suggestion_title}', '${suggestion_content}')";
                if (mysqli_query($conn, $query)) {
                    $messages = "Your suggestion has been submitted successfully";
                } else {
                    $errors = "Server error";
                }
                header("Location: ../../pages/suggestions.php");
            }
        }
    }