<?php
include('../../db/db-conn.php');
include('../session.php');

$query = "SELECT Amount FROM associationcash WHERE Id = '0'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);

if (mysqli_num_rows($results) > 0 ) {
    $query2 = "SELECT Id, Name FROM projects WHERE Status ='Ongoing'";
    $results2 = mysqli_query($conn, $query2);
    echo"<div class='title'>
            Available Cash
        </div>
        <div class='cash'>
            (LKR) ".$row["Amount"]."
        </div>
        <select class='input-avu1' id='project1'>
            <option value='' disabled selected hidden>Transfer To</option>";
    if (mysqli_num_rows($results2) > 0 ) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            echo "<option value='{$row2['Id']}'>{$row2['Name']}</option>";
        }
    }
    echo"</select>
        <input class='input-avu1' type='number' placeholder='Amount' id='amount'/>
        <button class='submit-btn btn' onclick= onCLickCashSubmit()>Submit</button>";

}
