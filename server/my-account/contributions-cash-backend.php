<?php
include('../../db/db-conn.php');
include('../../server/session.php');

$query = "SELECT DonationFor, Amount, Timestamp FROM cashdonations WHERE DonorEmail='{$_SESSION['Email']}' AND isAccepted='1'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0 ) {
//     output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        echo "<tr>
                <td class='cash-h-1'>".$row["DonationFor"]."</td>
                <td class='cash-h-1'>".$row["Amount"]."</td>
                <td class='cash-h-1'>".$row["Timestamp"]."</td>
               </tr>";
    }
} else {
    echo "0 results";
}


