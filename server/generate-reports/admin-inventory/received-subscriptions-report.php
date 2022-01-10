<?php

require('../../../server/fpdf/fpdf.php');
include('../../../server/session.php');

$from = $_GET['from'];
$to = $_GET['to'];
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$batch = $_GET['batch'];
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

$query1 = "SELECT FirstName, LastName, Batch, subscriptionsdone.Email, subscriptionsdone.Timestamp, SubType, Amount 
           FROM subscriptionsdone INNER JOIN registeredmembers ON registeredmembers.Email = subscriptionsdone.Email 
           WHERE subscriptionsdone.Status = 'Accepted'";

if (!empty($firstName)) {
    $query1 = $query1 . " AND registeredmembers.FirstName LIKE '{$firstName}%'";
}
if (!empty($lastName)) {
    $query1 = $query1 . " AND registeredmembers.LastName LIKE '{$lastName}%'";
}
if (!empty($from)) {
    $query1 = $query1 . " AND subscriptionsdone.Timestamp > '{$from}'";
}
if (!empty($to)) {
    $query1 = $query1 . " AND subscriptionsdone.Timestamp < '{$to}'";
}
if (!empty($batch)) {
    $query1 = $query1 . " AND registeredmembers.Batch='{$batch}'";
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
    $pdf->Cell(207, 30, 'Received Subscriptions', 0, 0, 'C');
    $pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);

//Description
    $pdf->SetFont('Arial','',12);
    if(!empty($from) || !empty($to) || !empty($firstName) || !empty($lastName) || !empty($batch)){
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
            $pdf->Cell(20, 10, 'First Name:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$firstName);
            $pdf->Ln();

            $pdf->Cell(20, 10, 'Batch:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$batch);
            $pdf->Cell(60);
            $pdf->Cell(20, 10, 'Last name:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$lastName);
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
    $pdf->Cell(45,10, 'First Name',1,0,'C');
    $pdf->Cell(45,10, 'Last Name',1,0,'C');
    $pdf->Cell(40,10, 'Subscription Type',1, 0, 'C');
    $pdf->Cell(20,10, 'Amount',1, 0, 'C');
    $pdf->Cell(40,10, 'Timestamp',1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial','',11);

    while ($row1 = mysqli_fetch_assoc($results1)) {

        $FirstName = $row1['FirstName'];
        $LastName = $row1['LastName'];
        $SubType = $row1['SubType'];
        $Amount = $row1['Amount'];
        $Timestamp = $row1['Timestamp'];

        $pdf->Cell(45,10, $FirstName,1,0,'C');
        $pdf->Cell(45,10, $LastName,1,0,'C');
        $pdf->Cell(40,10, $SubType,1, 0, 'C');
        $pdf->Cell(20,10, $Amount,1,0,'C');
        $pdf->Cell(40,10, $Timestamp,1, 0, 'C');
        $pdf->Ln();
    }

    $pdf->Output();
    ob_end_flush();
} else {
    echo "No data";
}