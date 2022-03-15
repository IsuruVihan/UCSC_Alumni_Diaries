<?php

    include('../../db/db-conn.php');
    include('../session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cash_donor = $_POST['cash-donor'];
    $cash_email = $_POST['cash-email'];
    $cash_amount = $_POST['cash-amount'];
    $Project_Id = $_POST['ProjectId'];
    
    if(isset($_FILES['files'])){
        $errors = [];
        $path = '../../uploads/All-Projects/All-Project-Cash/';
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

    if (($cash_amount > 0) && filter_var($cash_email, FILTER_VALIDATE_EMAIL)){
        if (!empty($cash_donor) && !empty($cash_email) && !empty($cash_amount) && empty($file_name)) {
            $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, Amount, DonatedFrom) VALUES ('$cash_donor','$cash_email','$Project_Id','$cash_amount', 'Bank')" ;
            $result = mysqli_query($conn, $query);

        }
        if (!empty($cash_donor) && !empty($cash_email) && !empty($file_name) && !empty($cash_amount)) {
            $query = "INSERT INTO cashdonations (DonorName, DonorEmail, DonationFor, PayslipSrc, Amount, DonatedFrom) VALUES ('$cash_donor','$cash_email','$Project_Id','$fileNameNew','$cash_amount', 'Bank')";
            $result = mysqli_query($conn, $query);
        }
        
        // Activity
        $query4 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Projects - All', 'Donated LKR {$cash_amount} for Project: (ID) {$Project_Id}')
        ";
        mysqli_query($conn, $query4);
        
        //notification
        $query2 = "SELECT DonorName, Amount FROM cashdonations WHERE DonorName= '{$cash_donor}'";  
        $results2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($results2);

        $query5 = "SELECT Name FROM projects WHERE Id= '{$Project_Id}'";  
        $results5 = mysqli_query($conn, $query5);
        $row5 = mysqli_fetch_assoc($results5);
        
        $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
        $results3 = mysqli_query($conn, $query3);
         
        if (mysqli_num_rows($results3) > 0) {
            while ($row3 = mysqli_fetch_assoc($results3)) {  
                $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$row2['DonorName']} has donate Rs.{$row2['Amount']} to the {$row5['Name']}')
                ";
                mysqli_query($conn, $query4);
             
            }
        }      
    }
}