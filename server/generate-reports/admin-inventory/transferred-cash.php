<?php

require('../../../server/fpdf/fpdf.php');
include('../../../server/session.php');

$from = $_GET['from'];
$to = $_GET['to'];
$transferred_to = $_GET['transferred_to'];
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

$query1 = "SELECT projects.Id, projects.Name, transferedcash.Amount, transferedcash.TransferedBy, transferedcash.Timestamp
           FROM transferedcash INNER JOIN projects
           ON projects.Id = transferedcash.ProjectId";

if (!empty($from)) {
    $query1 = $query1 . " AND transferedcash.Timestamp > '{$from}'";
}
if (!empty($to)) {
    $query1 = $query1 . " AND transferedcash.Timestamp < '{$to}'";
}
if (!empty($transferred_to)) {
    $query1 = $query1 . " AND transferedcash.ProjectId='{$transferred_to}'";
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
    $pdf->Cell(207, 30, 'Transferred Cash Details', 0, 0, 'C');
    $pdf->Write(35, "\n", '', 0, 'C', true, 0, false, false, 0);

//Description
    $pdf->SetFont('Arial','',12);
    if(!empty($from) || !empty($to) || !empty($transferred_to)){
        if(!empty($transferred_to)){
            $query3 = "SELECT Name AS ProjectName FROM projects WHERE Id = '{$transferred_to}'";
            $results3 = mysqli_query($conn, $query3);
            $row3 = mysqli_fetch_assoc($results3);
            $TransProject = $row3['ProjectName'];

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
            $pdf->Cell(20, 10, 'Transferred To:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$TransProject);
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
            $pdf->Cell(20, 10, 'Transferred To:');
            $pdf->Cell(15);
            $pdf->Cell(20, 10,$transferred_to);
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
    $pdf->Cell(25,10, 'Project Id',1,0,'C');
    $pdf->Cell(40,10, 'Project name',1,0,'C');
    $pdf->Cell(50,10, 'Transferred By',1,0,'C');
    $pdf->Cell(40,10, 'Amount (LKR)',1, 0, 'C');
    $pdf->Cell(40,10, 'Timestamp',1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial','',11);

    while ($row1 = mysqli_fetch_assoc($results1)) {
        $TransferredBy = $row1['TransferedBy'];
        $query2 = "SELECT FirstName, LastName FROM registeredmembers WHERE Email = '$TransferredBy'";
        $results2 = mysqli_query($conn, $query2);

        while($row2 = mysqli_fetch_assoc($results2)){
            $TransferredBy = $row2['FirstName']." ".$row2['LastName'];
        }

        $ProjectId = $row1['Id'];
        $ProjectName = $row1['Name'];
        $Amount = $row1['Amount'];
        $Timestamp = $row1['Timestamp'];


        $pdf->Cell(25,10, $ProjectId,1,0,'C');
        $pdf->Cell(40,10, $ProjectName,1,0,'C');
        $pdf->Cell(50,10, $TransferredBy,1, 0, 'C');
        $pdf->Cell(40,10, $Amount,1,0,'C');
        $pdf->Cell(40,10, $Timestamp,1, 0, 'C');
        $pdf->Ln();
    }

    $pdf->Output();
    ob_end_flush();
} else {
    echo "No data";
}