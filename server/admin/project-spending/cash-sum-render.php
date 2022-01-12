<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$Id=$_POST['Id'];

$query1="SELECT SUM(SpentAmount) AS value_sum FROM projectcashspendings WHERE Status = 'Paid' AND ProjectId = '$Id' ";
$results1=mysqli_query($conn ,$query1 );
$row1=mysqli_fetch_assoc($results1);
$sum=$row1['value_sum'];

if($sum > 0){
    echo "
    <button class='generate-report-btn btn'onclick=GenReportCashSpend({$Id})>Generate Report</button>
    <div class='details-field total' >LKR {$row1['value_sum']} </div>
";
}

else{
    echo "
    <button class='generate-report-btn btn' onclick=GenReportCashSpend({$Id}) >Generate Report</button>
    <div class='details-field total'>LKR 0 </div>
";
}
