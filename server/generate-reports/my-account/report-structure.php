<?php

require('../../../server/fpdf/fpdf.php');
include('../../../server/session.php');

$from = $_GET['from'];
$to = $_GET['to'];
$subtype = $_GET['subtype'];
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

$query = "SELECT Timestamp, SubType, Amount, DonatedFrom FROM subscriptionsdone WHERE Email = '{$_SESSION['Email']}'";

if (!empty($from)) {
    $query = $query . " AND Timestamp > '{$from}'";
}
if (!empty($to)) {
    $query = $query . " AND Timestamp < '{$to}'";
}
if (!empty($subtype)) {
    $query = $query . " AND SubType='{$subtype}'";
}

$results = mysqli_query($conn, $query);

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
$pdf->Cell(207, 30, 'Recharge Account Details', 0, 0, 'C');
$pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);

//Description
$pdf->SetFont('Arial','',12);
if(!empty($from) || !empty($to) || !empty($subtype)){
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
    $pdf->Cell(20, 10, 'Subscription:');
    $pdf->Cell(15);
    $pdf->Cell(20, 10,$subtype);
    $pdf->Ln();
    $pdf->Write(15, "\n", '', 0, 'C', true, 0, false, false, 0);
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
$pdf->Cell(50,10, 'Subscription Type',1,0,'C');
$pdf->Cell(30,10, 'Amount',1,0,'C');
$pdf->Cell(70,10, 'Timestamp',1,0,'C');
$pdf->Cell(40,10, 'Donated From',1, 0, 'C');
$pdf->Ln();

$pdf->SetFont('Arial','',11);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $SubType = $row['SubType'];
        $Amount = $row['Amount'];
        $Timestamp = $row['Timestamp'];
        $DonatedFrom = $row['DonatedFrom'];

        $pdf->Cell(50,10, $SubType,1,0,'C');
        $pdf->Cell(30,10, $Amount,1,0,'C');
        $pdf->Cell(70,10, $Timestamp,1,0,'C');
        $pdf->Cell(40,10, $DonatedFrom,1, 0, 'C');
        $pdf->Ln();
    }
} else {
    echo "No data";
}

$pdf->Output();
ob_end_flush();