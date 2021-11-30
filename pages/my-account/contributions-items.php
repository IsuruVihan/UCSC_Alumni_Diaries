
<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#table-body2').load("../../server/my-account/contributions-items-backend.php");
    });
</script>

<table>
    <thead>
    <tr>
        <th class='cash-h-1'>Project Name</th>
        <th class='cash-h-1'>Item Name</th>
        <th class='cash-h-1'>Quantity</th>
        <th class='cash-h-1'>Timestamp</th>
    </tr>
    </thead>
    <tbody id='table-body2'>

    </tbody>
</table>



<?php
//include('../../db/db-conn.php');
//include('../../server/session.php');
//
//$query = "SELECT DonationFor, ItemName, Quantity, Timestamp FROM itemdonations WHERE DonorEmail='{$_SESSION['Email']}' AND isAccepted='1'";
//$results = mysqli_query($conn, $query);
//
//echo "<table>
//    <tr>
//        <th class='cash-h-1'>Project Name</th>
//        <th class='cash-h-1'>Item Name</th>
//        <th class='cash-h-2'>Amount</th>
//        <th class='cash-h-3'>Timestamp</th>
//    </tr>";
//if (mysqli_num_rows($results) > 0 ) {
////     output data of each row
//    while($row = mysqli_fetch_assoc($results)) {
//        echo "<tr>
//                <td>".$row["DonationFor"]."</td>
//                <td>".$row["ItemName"]."</td>
//                <td>".$row["Quantity"]."</td>
//                <td>".$row["Timestamp"]."</td>
//            </tr>";
//    }
//} else {
//    echo "0 results";
//}
//echo "</table>";
