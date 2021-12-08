<?php
include('../../db/db-conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_FILES['files'])){
        $errors = [];
        $path = '../../uploads/Ourproject-Cashdonation/';
        $extensions = ['jpg', 'jpeg', 'png', 'pdf'];

        $all_files = count($_FILES['files']['tmp_name']);

        for($i = 0; $i < $all_files; $i++){
            $file_name = $_FILES['files']['name'][$i];
            $file_tmp = $_FILES['files']['tmp_name'][$i];
            $file_type = $_FILES['files']['type'][$i];
            $file_size = $_FILES['files']['size'][$i];
            $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

            $fileNameNew = uniqid('', true) . "." . $file_ext;
            $file = $path . $fileNameNew;

            if(!in_array($file_ext, $extensions)){
                $errors[] = 'Extensions not allowed: ' . $file_name . '' . $file_type;
            }

            if($file_size > 2097152){
            $errors[] = 'File size exceeds limit: ' . $file_name . '' . $file_type;
            }

            if(empty($errors)){
                move_uploaded_file($file_tmp, $file);
            }
        }
        if($errors) print_r($errors);
    }

    $cash_donor = $_POST['cash-donor'];
    $cash_email = $_POST['cash-email'];
    $cash_amount = $_POST['cash-amount'];

    if (($cash_donor > 0) && filter_var($cash_email, FILTER_VALIDATE_EMAIL)){
        if (!empty($cash_donor) && !empty($cash_email) && !empty($cash_amount) && empty($file_name)) {
            $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, Amount) VALUES ('$cash_donor','$cash_email','$Id','$cash_amount')";
            $result = mysqli_query($conn, $query);
        }
        if (!empty($cash_donor) && !empty($cash_email)  && !empty($cash_amount) && !empty($file_name)) {
            $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, PayslipSrc, Amount) VALUES ('$cash_donor','$cash_email','$Id','$file','$cash_amount')";
            $result = mysqli_query($conn, $query);
        }
    }
}  







