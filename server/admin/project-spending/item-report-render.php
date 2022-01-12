<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$Id=$_POST['Id'];

$query2 = " SELECT ItemName, Timestamp, SpentQuantity, projectitems. ProjectId, Description, BillSrc FROM projectitemspendings 
          INNER JOIN projectitems ON projectitems.Id = projectitemspendings.ItemId WHERE ProjectId = '{$Id}' AND Status = 'Accepted' 
";
$results2 = mysqli_query($conn, $query2);
$row2=mysqli_fetch_assoc($results2);

echo "
    <button class='generate-report-btn btn' onclick=GenReportItemSpend({$Id})>Generate Report</button>
";