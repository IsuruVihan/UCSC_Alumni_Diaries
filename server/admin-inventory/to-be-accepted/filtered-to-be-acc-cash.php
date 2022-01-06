<?php
include('../../../db/db-conn.php');
include('../../session.php');

$donorName = $_POST['DonorName'];
$donorEmail = $_POST['DonorEmail'];
$from = $_POST['From'];
$to = $_POST['To'];
$project = $_POST['Project'];

$query1 = "SELECT Id, DonorName, DonorEmail, DonatedFrom, DonationFor, PayslipSrc, Amount, Timestamp 
          FROM cashdonations WHERE Status = 'Pending'";

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

if(mysqli_num_rows($results1) > 0){
    while($row1 = mysqli_fetch_assoc($results1)){
        if ($row1['DonationFor'] != 'Association') {
            $donationFor = $row1['DonationFor'];
            $query2 = "SELECT Name FROM projects WHERE Id = '$donationFor'";
            $results2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($results2);
            $projectName = $row2['Name'];
            if($row1['DonatedFrom'] =='Bank'){
                echo"<div class='bank-slip-modal' id='bank-slip-modal-{$row1['Id']}'>
                    <div class='bank-slip-modal-content'>
                        <span class='close' onclick=HideModal('{$row1['Id']}')>&times;</span>
                        <div class='modal-image-container' id='modal-image-container'>
                            <img src='../../uploads/donation/{$row1['PayslipSrc']}' height='100%' class='user-pic' alt='user-pic'/>
                        </div>
                        <br/>
                        <a href='../../uploads/donation/{$row1['PayslipSrc']}' download>Download</a>
                    </div> 
                </div>
                <div class='to-be-acc-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        For :
                    </div>
                    <div class='sec-1-1'>
                        {$projectName}
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1-1'>
                       (LKR) {$row1['Amount']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['Timestamp']}
                    </div>
                    <div class='btn-container'>
                        <button class='bill-btn btn' id='bank-slip-btn' onclick=ShowModal('{$row1['Id']}')>Bill</button>
                        <button class='accept-btn btn' id='accept-btn' onclick=onClickAcceptBtn('{$row1['Id']}')>Accept</button>
                        <button class='delete-btn btn' id='delete-btn' onclick=CashDeleteBtn('{$row1['Id']}')>Delete</button>
                    </div>
                </div>";
            }else{
                echo"<div class='to-be-acc-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        For :
                    </div>
                    <div class='sec-1-1'>
                        {$projectName}
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1-1'>
                       (LKR) {$row1['Amount']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['Timestamp']}
                    </div>
                    <div class='btn-container'>
                        <button class='accept-btn btn' id='accept-btn' onclick=onClickAcceptBtn('{$row1['Id']}')>Accept</button>
                        <button class='delete-btn btn' id='delete-btn' onclick=CashDeleteBtn('{$row1['Id']}')>Delete</button>
                    </div>
                </div>";
            }
        }else{
            if($row1['DonatedFrom'] =='Bank'){
                echo"<div class='bank-slip-modal' id='bank-slip-modal-{$row1['Id']}'>
                    <div class='bank-slip-modal-content'>
                        <span class='close' onclick=HideModal('{$row1['Id']}')>&times;</span>
                        <div class='modal-image-container' id='modal-image-container'>
                            <img src='../../uploads/donation/{$row1['PayslipSrc']}' height='100%' class='user-pic' alt='user-pic'/>
                        </div>
                        <br/>
                        <a href='../../uploads/donation/{$row1['PayslipSrc']}' download>Download</a>
                    </div> 
                </div>
                <div class='to-be-acc-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        For :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonationFor']}
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1-1'>
                       (LKR) {$row1['Amount']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['Timestamp']}
                    </div>
                    <div class='btn-container'>
                        <button class='bill-btn btn' id='bank-slip-btn' onclick=ShowModal('{$row1['Id']}')>Bill</button>
                        <button class='accept-btn btn' id='accept-btn' onclick=onClickAcceptBtn('{$row1['Id']}')>Accept</button>
                        <button class='delete-btn btn' id='delete-btn' onclick=CashDeleteBtn('{$row1['Id']}')>Delete</button>
                    </div>
                </div>";
            }else{
                echo"<div class='to-be-acc-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        For :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['DonationFor']}
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1-1'>
                       (LKR) {$row1['Amount']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-1-1'>
                        {$row1['Timestamp']}
                    </div>
                    <div class='btn-container'>
                        <button class='accept-btn btn' id='accept-btn' onclick=onClickAcceptBtn('{$row1['Id']}')>Accept</button>
                        <button class='delete-btn btn' id='delete-btn' onclick=CashDeleteBtn('{$row1['Id']}')>Delete</button>
                    </div>
                </div>";
            }
        }
    }
}