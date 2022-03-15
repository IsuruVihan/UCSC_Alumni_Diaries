<?php

include('../../db/db-conn.php');
include('../../deploy/app-credentials.php');

$Id  = $_POST['Id'];

$query = "SELECT * FROM projects WHERE Id = '{$Id}'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $query2 = "SELECT * FROM committeemembers WHERE ProjectId = {$Id}";
    $results2 = mysqli_query($conn, $query2);

    echo "
    <div class='section-01'>
        <div class='title' id='title-name' name='title-name'>
            {$row['Name']}
        </div>
        <div class='filter-01'>
            <div class='box-01'>
                <div class='text'>
                    {$row['Timestamp']}
                </div> 
            </div>
            <div class=box-02>
                <div class='text'>
                    Cordinator : 
    ";
    if (mysqli_num_rows($results2) > 0) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            if ($row2['Type'] == 'Coordinator') {
                // $query3 = "SELECT FirstName, LastName FROM registeredmembers WHERE Email = {$row2['Email']}";
                $query3=" SELECT  registeredmembers.FirstName, registeredmembers.LastName, committeemembers.Type
                          FROM    committeemembers
                          INNER JOIN registeredmembers  ON registeredmembers.Email = committeemembers.Email
                          WHERE ProjectId = {$Id}
                          AND  committeemembers.Type = 'Coordinator' ";
                $results3 = mysqli_query($conn, $query3);
                
                if (mysqli_num_rows($results3) > 0) {
                    while ($row3 = mysqli_fetch_assoc($results3)) {
                        echo "{$row3['FirstName']} {$row3['LastName']}";
                    }
                }
            }
        }
    } else {
        echo "-";
    }

    echo "
                </div>
            </div>
        </div>
        <div class='project-description'>
            {$row['Description']}
        </div>";
        echo "   
        <div class='scroll-02'>
        ";
  
        $query4=" SELECT  registeredmembers.FirstName, registeredmembers.LastName, committeemembers.Type
        FROM    committeemembers
        INNER JOIN registeredmembers  ON registeredmembers.Email = committeemembers.Email
        WHERE ProjectId = {$Id}
        AND  committeemembers.Type = 'Member' ";

       $results4 = mysqli_query($conn, $query4);

    if (mysqli_num_rows($results4) > 0) {
        while ($row4 = mysqli_fetch_assoc($results4)) {
    //   echo "{$row4['FirstName']} {$row4['LastName']}";
   
    echo "  <div class='list-01'>
            <p class='project-name'>Member :{$row4['FirstName']} {$row4['LastName']}</p>
            </div>";
    }
}
echo" 
        </div>
    </div>
  ";
  echo"

    <div class=' section-02' id='section-02'>
        <form class='container-01' id='cash-donation-{$row['Id']}'  enctype='multipart/form-data' >  
            <div class='title'>
                Donate Cash
            </div>
            <div class='col-03'>
                <input id='ProjectId' name='ProjectId' type='text' style='display:none' value='{$row['Id']}'/>
                <input class='input-field text-field' id='cash-donor-{$row['Id']}' name='cash-donor' type='text' placeholder='Donor Name'/>
                <input class='input-field text-field' id='cash-email-{$row['Id']}' name='cash-email' type='text' placeholder='Donor Email'/>
                <input class='input-field text-field' id='cash-amount-{$row['Id']}' name='cash-amount' type='number' step='0.01' placeholder='Amount'/>
                <input class='attach' type='file' id='cash-file-{$row['Id']}' name='files[]' placeholder='Bank Slip Attachment'/>
            </div>
                <div class='message_display' id='donation-message-{$row['Id']}'></div>
            <div class='col-04'>       
                <button class='submit-btn btn' id='submit-cash-{$row['Id']}' onclick=cashDonation('{$row['Id']}')>Submit</button>
                <input type='reset'  class='cancel-btn btn' id='cancel-cash-{$row['Id']}' value='Cancel' />     
            </div>
        </form>
        <div id='PayHereModal-{$row['Id']}' class='payhere-modal'>
            <div class='payhere-modal-content'>
                <span class='payhere-close' id='modal-span-{$row['Id']}' onclick=PayHereModalClose('{$row['Id']}')>&times;</span>
                <img src='../assets/images/payhere.png' alt='payhere'><br><br>
                <h2>{$row['Name']}</h2>
                <form method='post' action='https://sandbox.payhere.lk/pay/checkout'>
                    <input type='hidden' name='merchant_id' value='1219524'>
                    <input type='hidden' name='return_url' value='{$URL}UCSC_Alumni_Diaries/pages/our-projects.php'>
                    <input type='hidden' name='cancel_url' value='{$URL}UCSC_Alumni_Diaries/pages/our-projects.php'>
                    <input type='hidden' name='notify_url' value='{$URL}UCSC_Alumni_Diaries/server/All-Projects/payhere.php'>
                    
                    <label for='first_name'>Name:</label><br>
                    <input type='text' class='input-field text-field' name='first_name' value='Isuru Harischandra'><br><br>
                    <label for='email'>Email:</label><br>
                    <input type='text' class='input-field text-field' name='email' value='isuruvihan@gmail.com'><br><br>
                    <label for='amount'>Cash Amount (LKR):</label><br>
                    <input type='text' class='input-field text-field' name='amount' value='1000'><br><br>
                    
                    <input type='hidden' name='order_id' value='{$row['Id']}'> <!-- Project ID -->
                    <input type='hidden' name='items' value='hidden'>
                    <input type='hidden' name='currency' value='LKR'>
                    <input type='hidden' name='last_name' value='hidden'>
                    <input type='hidden' name='phone' value='hidden'>
                    <input type='hidden' name='address' value='hidden'>
                    <input type='hidden' name='city' value='hidden'>
                    <input type='hidden' name='country' value='hidden'>
                    
                    <input type='submit' class='submit-btn btn' value='Donate Cash'>
                </form>
            </div>
        </div>
        <div class='container-02'>
            <p class='project-name'>Donate via pay here</p>
            <button class='pay-btn btn' onclick=PayHereModalOpen('{$row['Id']}')></button>
        </div>
        <form class='container-03' id='item-donation-{$row['Id']}' enctype='multipart/form-data' >
            <div class='title'>
                Donate Items
            </div>
            <div class='col-03'>
                <input id='item_ProjectId' name='item_ProjectId' type='text' style='display:none' value='{$row['Id']}'/>
                <input class='input-field text-field'  id='item-donor-{$row['Id']}' name='item-donor' type='text' placeholder='Donar Name'/>
                <input class='input-field text-field' id='item-email-{$row['Id']}' name='item-email' type='text' placeholder='Donar Email'/>  
                <input class='input-field text-field' id='item-name-{$row['Id']}' name='item-name' type='text' placeholder='Item Name'/>
                <input class='input-field text-field' id='item-quantity-{$row['Id']}' name='item-quantity' type='number' placeholder='Quantity'/>
                <input class='attach' type='file' id='item-file-{$row['Id']}' name = 'files[]'/>
            </div>
                <div class='message_display' id='item-donation-message-{$row['Id']}'></div>
            <div class='col-04'>
                <button class='submit-btn btn' id='submit-item-{$row['Id']}' onclick=submitItem('{$row['Id']}') >Submit</button>
                <input type='reset'  class='cancel-btn btn' id='item-cancel-cash-{$row['Id']}' value='Cancel' />  
            </div>
        </form> 
    </div>   
 ";     
}

   
   
   








