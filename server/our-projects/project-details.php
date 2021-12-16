<?php 
include('../../db/db-conn.php');

$Id = $_POST['Id'];

$query = "SELECT * FROM projects WHERE Id = '{$Id}'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $query2 = "SELECT * FROM committeemembers WHERE ProjectId = {$Id}";
    $results2 = mysqli_query($conn, $query2);

    echo "
    <div class='section-01'>
        <div class='title' id='title-name-{$row['Id']}' name='title-name'>
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
                <input class='input-field text-field' id='cash-donor-{$row['Id']}' name='cash-donor' type='text' placeholder='Donor Name'/>
                <input class='input-field text-field' id='cash-email-{$row['Id']}' name='cash-email' type='text' placeholder='Donor Email'/>
                <input class='input-field text-field' id='cash-amount-{$row['Id']}' name='cash-amount' type='number' placeholder='Amount'/>
                <input class='attach' type='file' id='cash-file-{$row['Id']}' name='files[]' placeholder='Bank Slip Attachment'/>
            </div>
                <div class='message_display' id='donation-message-{$row['Id']}'></div>
            <div class='col-04'>       
                <button class='submit-btn btn' id='submit-cash-{$row['Id']}' onclick=cashDonation('{$row['Id']}')>Submit</button>
                <input type='reset'  class='cancel-btn btn' id='cancel-cash-{$row['Id']}' value='Cancel' />     
            </div>
        </form> 
        <div class='container-02'>
            <p class='project-name'>Donate via pay here</p>
            <button class='pay-btn btn'>Pay here</button>  
        </div>
        <form class='container-03' id='item-donation-{$row['Id']}' enctype='multipart/form-data' >
            <div class='title'>
                Donate Items
            </div>
            <div class='col-03'>
                <input class='input-field text-field'  id='item-donor-{$row['Id']}' type='text' placeholder='Donar Name'/>
                <input class='input-field text-field' id='item-email-{$row['Id']}' type='text' placeholder='Donar Email'/>
                <input class='input-field text-field' id='item-name-{$row['Id']}' type='text' placeholder='Item'/>
                <input class='attach' type='file' id='item-file-{$row['Id']}' name = 'files[]' placeholder='Quantity'/>
            </div>
                <p id='item-donation-message-{$row['Id']}'></p>
            <div class='col-04'>
                <button class='submit-btn btn' id='submit-item-{$row['Id']}' onclick=submitItem('{$row['Id']}') >Submit</button>
                <button class='cancel-btn btn' id='cancel-item-{$row['Id']}'>Cancel</button>
            </div>
        </form> 
    </div>   
 ";     
}

   
   
   








