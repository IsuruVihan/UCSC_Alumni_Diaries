<?php

include('../../../db/db-conn.php');
include('../../session.php');

$from = $_POST['From'];
$to = $_POST['To'];
$transferred_to = $_POST['TransferredTo'];

$query1 = "SELECT projects.Name, transferedcash.Amount, transferedcash.TransferedBy, transferedcash.Timestamp
           FROM transferedcash INNER JOIN projects
           ON projects.Id = transferedcash.ProjectId";

if (!empty($from)) {
    $query1 = $query1 . " AND transferedcash.Timestamp > '{$from}'";
}
if (!empty($to)) {
    $query1 = $query1 . " AND transferedcash.Timestamp < '{$to}'";
}
if (!empty($transferred_to)) {
    $query1 = $query1 . " AND transferedcash.ProjectId='{$transferred_to}'";
}

$results1 = mysqli_query($conn, $query1);

if (mysqli_num_rows($results1) > 0 ) {
    while($row1 = mysqli_fetch_assoc($results1)) {
        $transferredBy = $row1['TransferedBy'];
        $query2 = "SELECT FirstName, LastName FROM registeredmembers WHERE Email = '$transferredBy'";
        $results2 = mysqli_query($conn, $query2);

        echo"<div class='cash-transfers-item'>
                <div class='label'>
                    Transferred To :
                </div>
                <div class='sec-1'>
                    {$row1['Name']}
                </div>
                <div class='label'>
                    Timestamp :
                </div>
                <div class='sec-1'>
                    {$row1['Timestamp']}
                </div>
                <div class='label'>
                    Amount :
                </div>
                <div class='sec-1'>
                   (LKR) {$row1['Amount']}
                </div>
                <div class='label'>
                    Transferred By :
                </div>
                <div class='sec-1'>";
        while($row2 = mysqli_fetch_assoc($results2)){
            echo"".$row2["FirstName"]." ".$row2["LastName"]."
                </div>
            </div>";
        }
    }
}

