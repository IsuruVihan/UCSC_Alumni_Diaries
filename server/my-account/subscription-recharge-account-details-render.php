<?php
include('../../db/db-conn.php');
include('../../server/session.php');

$query = "SELECT SubType, Timestamp, Amount, DonatedFrom, PayslipSrc, Status FROM subscriptionsdone WHERE Email = '{$_SESSION['Email']}'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
    $modalId = 0;
    while ($row = mysqli_fetch_assoc($results)) {
        if($row["DonatedFrom"] == 'Bank'){
            echo "
                <div class='bank-slip-modal' id='bank-slip-modal-{$modalId}'>
                    <div class='bank-slip-modal-content'>
                        <span class='close' onclick=HideModal('{$modalId}')>&times;</span>
                        <div class='modal-image-container' id='modal-image-container'>
                            <img src='../../uploads/recharge-account-bank-slips/{$row['PayslipSrc']}' height='100%' class='user-pic' alt='user-pic'/>
                        </div>
                        <br/>
                        <a href='../../uploads/recharge-account-bank-slips/{$row['PayslipSrc']}' download>Download</a>
                    </div> 
                </div>
                <tr>
                    <td class='cash-h-1'>{$row['SubType']}</td>
                    <td class='cash-h-1'>{$row['Amount']}</td>
                    <td class='cash-h-1'>{$row['Status']}</td>
                    <td class='cash-h-1'>{$row['Timestamp']}</td>
                    <td class='cash-h-1'>
                        <button class='bank-slip-btn btn' id='bank-slip-btn' onclick=ShowModal('{$modalId}')>Bank Slip</button>
                    </td>
               </tr>
            ";
           $modalId += 1;
        }else{
            echo "<tr>
                <td class='cash-h-1'>".$row["SubType"]."</td>
                <td class='cash-h-1'>".$row["Amount"]."</td>
                <td class='cash-h-1'>{$row['Status']}</td>
                <td class='cash-h-1'>".$row["Timestamp"]."</td>
                <td class='cash-h-1'> Pay Pal </td>
               </tr>";
        }
    }
} else {
    echo " ";
}
