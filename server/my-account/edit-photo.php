<?php
    session_start();
    
    $conn = mysqli_connect("localhost", "root", "", "ucsc_alumni_diaries");
    
    if (isset($_POST['change-pic-submit'])) {
        $file = $_FILES['new-photo'];
        
        if ($file['name'] != '') {
            $fileName = $_FILES['new-photo']['name'];
            $fileTmpName = $_FILES['new-photo']['tmp_name'];
            $fileSize = $_FILES['new-photo']['size'];
            $fileError = $_FILES['new-photo']['error'];
            $fileType = $_FILES['new-photo']['type'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowedExt = array('jpg', 'jpeg', 'png');
            $allowedMaxSize = 100000;
            
            if (in_array($fileActualExt, $allowedExt)) {
                if ($fileError === 0) {
                    if ($fileSize < $allowedMaxSize) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = '../../uploads/profile-pics/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $newFileSrc = '../uploads/profile-pics/' . $fileNameNew;
                        $_SESSION['PicSrc'] = $newFileSrc;
                        $query = "
                            UPDATE registeredmembers SET PicSrc='{$_SESSION['PicSrc']}' WHERE Email='{$_SESSION['Email']}'
                        ";
                        mysqli_query($conn, $query);
                        header("Location: ../../pages/my-account.php");
                    }
                } else {
                    header("Location: ../../pages/my-account.php");
                }
            } else {
                header("Location: ../../pages/my-account.php");
            }
        }
    }