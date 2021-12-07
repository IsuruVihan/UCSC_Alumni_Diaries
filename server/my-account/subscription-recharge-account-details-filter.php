<?php

include('../../db/db-conn.php');
include('../../server/session.php');

$From = $_POST['From'];
$To = $_POST['To'];
$SubType = $_POST['SubType'];

$query = "SELECT Timestamp, SubType, Amount FROM subscriptionsdone WHERE Email = '{$_SESSION['Email']}'";

if (!empty($From)) {
    $query = $query . " AND Timestamp > '{$From}'";
}
if (!empty($To)) {
    $query = $query . " AND Timestamp < '{$To}'";
}
if (!empty($SubType)) {
    $query = $query . " AND SubType='{$SubType}'";
}

$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "<tr>
                <td class='cash-h-1'>".$row["SubType"]."</td>
                <td class='cash-h-1'>".$row["Amount"]."</td>
                <td class='cash-h-1'>".$row["Timestamp"]."</td>
                <td class='cash-h-1'><button class='bank-slip-btn btn'>Bank Slip</button></td>
               </tr>";
    }
} else {
    echo " ";
}
