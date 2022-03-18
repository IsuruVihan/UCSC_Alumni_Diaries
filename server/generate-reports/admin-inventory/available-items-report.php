<?php
require('../../../server/fpdf/fpdf.php');
include('../../../server/session.php');

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

$query = "SELECT Id, ItemName, Quantity FROM associationitems";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
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
    $pdf->Cell(207, 30, 'Available Items Report', 0, 0, 'C');
    $pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);

//Description
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

    //table header
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10, 'Item Id',1,0,'C');
    $pdf->Cell(90,10, 'Item Name',1,0,'C');
    $pdf->Cell(50,10, 'Available Quantity',1,0,'C');
    $pdf->Ln();

    $pdf->SetFont('Arial','',11);

    while ($row = mysqli_fetch_assoc($results)) {
        $Id = $row['Id'];
        $ItemName = $row['ItemName'];
        $Quantity = $row['Quantity'];

        $pdf->Cell(50,10, $Id,1,0,'C');
        $pdf->Cell(90,10, $ItemName,1,0,'C');
        $pdf->Cell(50,10, $Quantity,1,0,'C');
        $pdf->Ln();
    }

    $pdf->Output();
    ob_end_flush();
} else {
    echo "No data";
}
