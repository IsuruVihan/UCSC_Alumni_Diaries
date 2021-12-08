<?php


//function MyFunction($conn, $Email) {
//    $DBSubType = '';
//    $DBTimestamp = '';
//    $DBDonatedFrom = '';
//    $DBAmount = '';

    $query = "SELECT Timestamp, SubType, Amount, DonatedFrom FROM subscriptionsdone WHERE Email = '{$Email}'";
    $results = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($results)) {
        $DBSubType = $row["SubType"];
        $DBTimestamp = $row["Timestamp"];
        $DBDonatedFrom = $row["DonatedFrom"];
        $DBAmount = $row["Amount"];
    }

//    return [$DBSubType, $DBTimestamp, $DBDonatedFrom, $DBAmount];
//}