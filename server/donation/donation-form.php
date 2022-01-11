<?php

include('../../db/db-conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = '../../uploads/donation/';
        $extensions = ['jpg', 'jpeg', 'png', 'pdf'];

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

    $donor_name = $_POST['donor-name'];
    $donor_email = $_POST['donor-mail'];
    $donor_amount = $_POST['donor-amount'];
    
    if (($donor_amount > 0) && filter_var($donor_email, FILTER_VALIDATE_EMAIL)){
        if (!empty($donor_name) && !empty($donor_email) && !empty($donor_amount) && empty($file_name)) {
            $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, Amount) VALUES ('$donor_name','$donor_email','Association','$donor_amount')";
            $result = mysqli_query($conn, $query);
        }
        if (!empty($donor_name) && !empty($donor_email)  && !empty($donor_amount) && !empty($file_name)) {
            $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, PayslipSrc, Amount) VALUES ('$donor_name','$donor_email','Association','$file','$donor_amount')";
            $result = mysqli_query($conn, $query);
        }
        //notification
        $query2 = "SELECT DonorName, Amount FROM cashdonations WHERE DonorName= '{$donor_name}'";  
        $results2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($results2);
       
        $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        $results3 = mysqli_query($conn, $query3);
        
        if (mysqli_num_rows($results3) > 0) {
            while ($row3 = mysqli_fetch_assoc($results3)) {  
                $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$row2['DonorName']}' ' ' 'has donate' ' ' 'Rs.' '{$row2['Amount']}' ' ' 'to the association')
                ";
                mysqli_query($conn, $query4);
            
            }
        }        
    }
    
}