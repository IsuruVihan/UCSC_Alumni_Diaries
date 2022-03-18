<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$Id=$_POST['Id'];

$query2 = " SELECT ItemName, Timestamp, SpentQuantity, projectitemspendings.Id, Description, BillSrc FROM projectitemspendings 
          INNER JOIN projectitems ON projectitems.Id = projectitemspendings.ItemId WHERE ProjectId = '{$Id}' AND Status = 'Paid'
";
$results2 = mysqli_query($conn, $query2);

//cash
if(mysqli_num_rows($results2) > 0){
    while($row2 = mysqli_fetch_assoc($results2)){
        echo"
        <div class='item-spend-detail' >
                <div class='spend-detail'>
                    <div class='details-field item-name'>{$row2['ItemName']}</div>
                    <div class='details-field timestamp'>{$row2['Timestamp']}</div>
                    <button class='btn bill-attach'  onclick=ModalView('{$row2['Id']}')>Bill</button>
                    <div class='details-field qty'>QTY {$row2['SpentQuantity']}</div>
                </div>
                <!-- The Modal -->
                  <div id='myModal-{$row2['Id']}' class='modal' >
                          <!-- Modal content -->
                      <div class='modal-content'>
                            <span class='close' id='modal-span-{$row2['Id']}' onclick=ModalClose('{$row2['Id']}')   >&times;</span>
                            <img src='../uploads/project-item-spend-request-quotations/{$row2['BillSrc']}'  class='image-box-notice-2'  alt='' height='100%'>     
                      </div>
                      <a href='../uploads/project-item-spend-request-quotations/{$row2['BillSrc']}' download  class='bill-download'>Download</a>
                  </div>
                
                <div class='cash-spend-description details-field '>{$row2['Description']}</div>
        </div>";
    }
}
else{
    echo"
        <div style='text-align: center'>No Data</div>
    ";
}
