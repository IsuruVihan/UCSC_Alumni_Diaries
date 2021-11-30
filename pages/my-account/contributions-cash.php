
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
        $('#table-body1').load("../../server/my-account/contributions-cash-backend.php");
    });
</script>

<table>
    <thead>
        <tr>
            <th class='cash-h-1'>Project Name</th>
            <th class='cash-h-1'>Amount</th>
            <th class='cash-h-1'>Timestamp</th>
        </tr>
    </thead>
    <tbody id='table-body1'>

    </tbody>
</table>

<?php
//include('../../db/db-conn.php');
//include('../../server/session.php');
//
//$query = "SELECT DonationFor, Amount, Timestamp FROM cashdonations WHERE DonorEmail='{$_SESSION['Email']}'";
//$results = mysqli_query($conn, $query);
//
//echo "<table>
//    <tr>
//        <th class='cash-h-1'>Project Name</th>
//        <th class='cash-h-2'>Amount</th>
//        <th class='cash-h-3'>Timestamp</th>
//    </tr>";
//if (mysqli_num_rows($results) > 0 ) {
////     output data of each row
//    while($row = mysqli_fetch_assoc($results)) {
//        echo "<tr><td>".$row["DonationFor"]."</td><td>".$row["Amount"]."<td>".$row["Timestamp"]."</td></tr>";
//    }
//} else {
//    echo "0 results";
//}
//echo "</table>";
//?>




    

