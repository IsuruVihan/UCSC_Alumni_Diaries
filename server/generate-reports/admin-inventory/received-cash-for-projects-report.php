<?php

require('../../../server/fpdf/fpdf.php');
include('../../../server/session.php');

$from = $_GET['from'];
$to = $_GET['to'];
$donorName = $_GET['donorName'];
$donorEmail = $_GET['donorEmail'];
$project = $_GET['project'];
$name = $_SESSION['NameWithInitials'];
$email = $_SESSION['Email'];
date_default_timezone_set('Asia/Colombo');
$date = date('m/d/Y h:i:s a', time());

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ucsc_alumni_diaries";
$port = "3306";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

$query1 = "SELECT cashdonations.Id, DonorName, DonatedFrom, DonorEmail, projects.Name, Amount, cashdonations.Timestamp
           FROM cashdonations INNER JOIN projects ON projects.Id = cashdonations.DonationFor
           WHERE DonationFor != 'Association' AND cashdonations.Status = 'Accepted'";

if (!empty($donorName)) {
    $query1 = $query1 . " AND DonorName LIKE '{$donorName}%'";
}
if (!empty($donorEmail)) {
    $query1 = $query1 . " AND DonorEmail LIKE '{$donorEmail}%'";
}
if (!empty($from)) {
    $query1 = $query1 . " AND Timestamp > '{$from}'";
}
if (!empty($to)) {
    $query1 = $query1 . " AND Timestamp < '{$to}'";
}
if (!empty($project)) {
    $query1 = $query1 . " AND DonationFor='{$project}'";
}

$results1 = mysqli_query($conn, $query1);

if (mysqli_num_rows($results1) > 0) {
    ob_end_clean();
    ob_start();
    $pdf = new FPDF();
    $pdf->AddPage();

//header
    $pdf->Image('../../../assets/images/logo.jpeg', 10, 8, 33);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(80);
    $pdf->Cell(50, 20, 'UCSC Alumni Association', 0, 0, 'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial', 'U', 15);
    $pdf->Cell(207, 30, 'Cash Received For Projects', 0, 0, 'C');
    $pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);

//Description
    $pdf->SetFont('Arial','',12);
    if(!empty($from) || !empty($to) || !empty($donorName) || !empty($donorEmail) || !empty($project)){
        $query2 = "SELECT Name FROM projects WHERE Id='{$project}'";
        $results2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($results2);
        if(mysqli_num_rows($results2) > 0){
            $pdf->Cell(20, 10, 'User Name:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10, $name);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'From:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10, $from);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'User Email:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$email);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'To:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$to);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'Time:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$date);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'Donor Name:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$donorName);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'Project:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$row2['Name']);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'Donor Email:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$donorEmail);
            $pdf->Ln();
            $pdf->Write(15, "\n", '', 0, 'C', true, 0, false, false, 0);
        }else{
            $pdf->Cell(20, 10, 'User Name:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10, $name);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'From:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10, $from);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'User Email:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$email);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'To:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$to);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'Time:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$date);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'Donor Name:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$donorName);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'Project:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,'');
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'Donor Email:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$donorEmail);
            $pdf->Ln();
            $pdf->Write(15, "\n", '', 0, 'C', true, 0, false, false, 0);
        }
    }else{
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(20, 10, 'User Name:');
        $pdf->Cell(20);
        $pdf->Cell(20, 10,$name);
        $pdf->Ln();

        $pdf->Cell(20, 10, 'User Email:');
        $pdf->Cell(20);
        $pdf->Cell(20, 10,$email);
        $pdf->Ln();

        $pdf->Cell(20, 10, 'Time:');
        $pdf->Cell(20);
        $pdf->Cell(20, 10,$date);
        $pdf->Ln();
        $pdf->Write(15, "\n", '', 0, 'C', true, 0, false, false, 0);
    }

    //table header
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(60,10, 'Donor Email',1,0,'C');
    $pdf->Cell(50,10, 'Donated For',1,0,'C');
    $pdf->Cell(35,10, 'Amount (LKR)',1, 0, 'C');
    $pdf->Cell(45,10, 'Timestamp',1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial','',11);

    while ($row1 = mysqli_fetch_assoc($results1)) {

        $DonorName = $row1['DonorName'];
        $DonorEmail = $row1['DonorEmail'];
        $Project = $row1['Name'];
        $Amount = $row1['Amount'];
        $Timestamp = $row1['Timestamp'];

        $pdf->Cell(60,10, $DonorEmail,1,0,'C');
        $pdf->Cell(50,10, $Project,1,0,'C');
        $pdf->Cell(35,10, $Amount,1,0,'C');
        $pdf->Cell(45,10, $Timestamp,1, 0, 'C');
        $pdf->Ln();
    }

    $pdf->Output();
    ob_end_flush();
} else {
    echo "No data";
}
