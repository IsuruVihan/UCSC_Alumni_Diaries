<?php
include('../../db/db-conn.php');
include('../../server/session.php');

$query = "SELECT DonationFor, ItemName, Quantity, Timestamp, Status FROM itemdonations WHERE DonorEmail='{$_SESSION['Email']}'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0 ) {
//     output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        echo "<tr>
                <td class='cash-h-1'>".$row["DonationFor"]."</td>
                <td class='cash-h-1'>".$row["ItemName"]."</td>
                <td class='cash-h-1'>".$row["Quantity"]."</td>
                <td class='cash-h-1'>".$row["Status"]."</td>
                <td class='cash-h-1'>".$row["Timestamp"]."</td>
            </tr>";
    }
} else {
    echo " ";
}
echo "</table>";

