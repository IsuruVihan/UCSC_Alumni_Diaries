<?php

include('../../../server/session.php');
require('../../../server/fpdf/fpdf.php');

$ProjectId = $_GET['ProjectId'];
date_default_timezone_set('Asia/Colombo');
$date = date('m/d/Y h:i:s a', time());

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ucsc_alumni_diaries";
$port = "3306";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

$query = "SELECT Name FROM projects WHERE Id = '{$ProjectId}'";
$query2 = "SELECT * FROM projectcashspendings WHERE ProjectId = '{$ProjectId}'";
$query3 = "
        SELECT Description, Timestamp, Id, SpentAmount FROM projectcashspendings
        WHERE ProjectId = '{$ProjectId}' AND Status = 'Paid'
    ";
$query4="SELECT SUM(SpentAmount) AS value_sum FROM projectcashspendings WHERE Status = 'Paid' AND ProjectId = '{$ProjectId}'";

$results = mysqli_query($conn, $query);
$results2 = mysqli_query($conn, $query2);
$results3 = mysqli_query($conn, $query3);
$results4 = mysqli_query($conn, $query4);

ob_end_clean();
ob_start();
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('../../../assets/images/logo.jpeg', 10, 8, 33);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(80);
$pdf->Cell(50, 20, 'UCSC Alumni Association', 0, 0, 'C');
$pdf->Ln(20);
$pdf->SetFont('Arial', 'U', 15);
$pdf->Cell(207, 30, 'Project Cash Spendings Summary', 0, 0, 'C');
$pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);

while ($row = mysqli_fetch_assoc($results)) {

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20, 10, 'Project ID:');
    $pdf->Cell(15);
    $pdf->Cell(20, 10, $ProjectId);
    $pdf->Ln();

    $pdf->Cell(20, 10, 'Project Name:');
    $pdf->Cell(15);
    $pdf->Cell(20, 10, $row['Name']);
    $pdf->Ln();

    $pdf->Cell(20, 10, 'Generated by:');
    $pdf->Cell(15);
    $pdf->Cell(20, 10, $_SESSION['FirstName'] . " " . $_SESSION['LastName'] . " | " . $_SESSION['Email']);
    $pdf->Ln();

    $pdf->Cell(20, 10, 'Time:');
    $pdf->Cell(15);
    $pdf->Cell(20, 10, $date);
    $pdf->Ln();
    $pdf->Write(10, "\n", '', 0, 'C', true, 0, false, false, 0);

    $row4 =mysqli_fetch_assoc($results4);

        $pdf->Write(25, "\n", '', 0, 'C', true, 0, false, false, 0);

        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(20, 10, 'Cash Spendings');
        $pdf->Write(15, "\n", '', 0, 'C', true, 0, false, false, 0);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(15,10, 'Id',1,0,'C');
        $pdf->Cell(90,10, 'Description',1,0,'C');
        $pdf->Cell(50,10, 'Timestamp',1,0,'C');
        $pdf->Cell(40,10, 'Spent Amount (LKR)',1,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Arial','',10);
        $total = 0;
        if (mysqli_num_rows($results3) > 0) {
            while ($row3 = mysqli_fetch_assoc($results3)) {
                $pdf->Cell(15,10, $row3['Id'],1,0,'C');
                $pdf->Cell(90,10, $row3['Description'],1,0,'C');
                $pdf->Cell(50,10, $row3['Timestamp'],1,0,'C');
                $pdf->Cell(40,10, $row3['SpentAmount'],1,0,'C');
                $pdf->Ln();
//                $total += $row3['SpentAmount'];
            }
        } else {
            $pdf->Cell(195,10, "No data",1,0,'C');
        }

        $pdf->Write(25, "\n", '', 0, 'C', true, 0, false, false, 0);
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(140,10, 'Cash Spendings (LKR) - up to ' . $date,1,0,'L');
        $pdf->Cell(55,10, $row4['value_sum'],1,0,'C');
//    }
}

$pdf->Output();
ob_end_flush();

// Activity
$query5 = "
    INSERT INTO activitylog (Email, Section, Activity)
    VALUES ('{$_SESSION['Email']}', 'Admin - Project Spendings', 'Project cash spend report generated')
";
mysqli_query($conn, $query5);