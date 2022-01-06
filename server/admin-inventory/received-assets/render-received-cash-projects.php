<?php

include('../../../db/db-conn.php');
include('../../session.php');

$query1 = "SELECT cashdonations.Id, DonorName, DonatedFrom, DonorEmail, projects.Name, PayslipSrc, Amount, cashdonations.Timestamp 
           FROM cashdonations INNER JOIN projects ON projects.Id = cashdonations.DonationFor 
           WHERE DonationFor != 'Association' AND cashdonations.Status = 'Accepted'";
$results1 = mysqli_query($conn, $query1);

if(mysqli_num_rows($results1) > 0){
    while($row1 = mysqli_fetch_assoc($results1)){
        if($row1['DonatedFrom'] == 'Bank'){
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
                <div class='received-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-2-1'>
                        (LKR) {$row1['Amount']}
                    </div>
                    <div class='label'>
                        Project :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['Name']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['Timestamp']}
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class='bill-btn btn' id='bank-slip-btn' onclick=ShowModal('{$row1['Id']}')>Bill</button>
                    </div>
                </div>";
        }else{
            echo"<div class='received-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['DonorName']}
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['DonorEmail']}
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-2-1'>
                        (LKR) {$row1['Amount']}
                    </div>
                    <div class='label'>
                        Project :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['Name']}
                    </div>
                    <div class='label'>
                        Timestamp :
                    </div>
                    <div class='sec-2-1'>
                        {$row1['Timestamp']}
                    </div> 
                </div>";
        }
    }
}
