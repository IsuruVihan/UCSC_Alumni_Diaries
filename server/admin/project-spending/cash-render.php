<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$Id=$_POST['Id'];

$query = "SELECT * FROM projectcashspendings WHERE ProjectId ='{$Id}' AND Status = 'Paid'";
$results = mysqli_query($conn, $query);

//cash
if(mysqli_num_rows($results) > 0){
    while($row = mysqli_fetch_assoc($results)){
        echo"
        <div class='spend-detail-flex' >
             <div class='spend-detail'>
                 <div class='details-field timestamp'>{$row['Timestamp']}</div>
                 <div class='details-field cost'>LKR {$row['SpentAmount']}</div>
                 <button class='btn bill-attach' onclick=ModalView('{$row['Id']}')>Bill</button>
             </div>
             <!-- The Modal -->
                  <div id='myModal-{$row['Id']}' class='modal' '>
                          <!-- Modal content -->
                      <div class='modal-content'>
                            <span class='close' id='modal-span-{$row['Id']}' onclick=ModalClose('{$row['Id']}')>&times;</span>
                            <img src='../uploads/projects-spend-cash-quotations/{$row['BillSrc']}'  
                                 class='image-box-notice-2' alt='' height='95%'>
                            <br/>
                            <a href='../uploads/projects-spend-cash-quotations/{$row['BillSrc']}' download class='bill-download'>Download</a>
                      </div>
                      
                  </div>
             <div class='cash-spend-description details-field '>{$row['Description']}</div>
        </div>";
    }
}
else{
    echo"
        <div style='text-align: center'>No Data</div>
    ";
}

