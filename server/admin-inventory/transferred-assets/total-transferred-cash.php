<?php

include('../../../db/db-conn.php');
include('../../session.php');

$query1 = "SELECT SUM(Amount) AS TotalTransferredCash FROM transferedcash";
$results1 = mysqli_query($conn, $query1);

if(mysqli_num_rows($results1) > 0){
    while($row1 = mysqli_fetch_assoc($results1)){
        echo"<p>Total Transferred Cash <br>";
        echo"<br>";
        echo"(LKR) {$row1['TotalTransferredCash']}</p>
        ";
    }
}
