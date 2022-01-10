<?php
include('../../db/db-conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_donor = $_POST['item-donor'];
    $item_email = $_POST['item-email'];
    $item_name = $_POST['item-name'];
    $item_quantity = $_POST['item-quantity'];
    $project_Id = $_POST['item_ProjectId'];
    
    if(isset($_FILES['files'])){
        $errors = [];
        $path = '../../uploads/All-Projects/All-Project-Item/';
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

    if(($item_quantity > 0) && filter_var($item_email, FILTER_VALIDATE_EMAIL)){
        if (!empty($item_donor) && !empty($item_email) && !empty($item_name) && !empty($item_quantity) && empty($file_name)) {
            $query = "INSERT INTO itemdonations (DonorName, DonorEmail, DonationFor, ItemName, Quantity) VALUES ('$item_donor','$item_email','$project_Id','$item_name','$item_quantity')" ;
            $result = mysqli_query($conn, $query);

        }
        if (!empty($item_donor) && !empty($item_email) && !empty($file_name) && !empty($item_quantity) && !empty($item_name)) {
            $query = "INSERT INTO itemdonations (DonorName, DonorEmail, DonationFor, BillSrc, ItemName, Quantity) VALUES ('$item_donor','$item_email','$project_Id','$fileNameNew','$item_name','$item_quantity') ";
            $result = mysqli_query($conn, $query);
        }
    }
}