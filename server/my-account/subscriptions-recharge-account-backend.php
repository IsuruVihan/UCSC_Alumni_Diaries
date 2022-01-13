<?php
session_start();

include('../../db/db-conn.php');
$conn = mysqli_connect("localhost", "root", "", "ucsc_alumni_diaries");

$query1 = "SELECT Amount FROM subscriptiontypes WHERE TypeName='Annually'";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT Amount FROM subscriptiontypes WHERE TypeName='Monthly'";
$result2 = mysqli_query($conn, $query2);

if($_SESSION['SubscriptionType'] == 'Annually'){
    while($row = mysqli_fetch_assoc($result1)) {
        $Amount = $row["Amount"];
    }

} else{
    while($row = mysqli_fetch_assoc($result2)) {
        $Amount = $row["Amount"];
    }
}


$file = $_FILES['bank-slip'];
$fileName = $_FILES['bank-slip']['name'];
$fileTmpName = $_FILES['bank-slip']['tmp_name'];
$fileSize = $_FILES['bank-slip']['size'];
$fileError = $_FILES['bank-slip']['error'];
$fileType = $_FILES['bank-slip']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowedExt = array('jpg', 'jpeg', 'png');
$allowedMaxSize = 100000;
$fileNameNew = uniqid('', true) . "." . $fileActualExt;

$fileDestination = '../../uploads/recharge-account-bank-slips/' . $fileNameNew;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($fileDestination,PATHINFO_EXTENSION));

if ($fileName === ''){
    echo "Select an image before submitting. ";
}

// Check file size
elseif ($_FILES["bank-slip"]["size"] > 5000000) {
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
        $fileName = $_FILES['bank-slip']['tmp_name'];

//        $_SESSION['PicSrc'] = $newFileSrc;

        $query = "INSERT INTO subscriptionsdone (`Email`, `SubType`, `Amount`, `DonatedFrom`, `PayslipSrc`) 
                  VALUES ('{$_SESSION['Email']}','{$_SESSION['SubscriptionType']}','{$Amount}','Bank','{$fileNameNew}')";
        $result = mysqli_query($conn, $query);
        //notification
            $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
            $results3 = mysqli_query($conn, $query3);
                    
            if (mysqli_num_rows($results3) > 0) {
                while ($row3 = mysqli_fetch_assoc($results3)) {  
                    $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}', '{$_SESSION['Email']} has done the subscription')
                    ";
                    mysqli_query($conn, $query4);
                        
                }
            }
            $query5 = "INSERT INTO notifications (Email,Message) VALUES ('{$_SESSION['Email']}', 'you have done the subscription sucessfully')
            ";
            mysqli_query($conn, $query5);
    
        echo "The file " . htmlspecialchars(basename($_FILES["bank-slip"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. ";
    }
}

