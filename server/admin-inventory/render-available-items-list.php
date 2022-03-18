<?php

include('../../db/db-conn.php');
include('../session.php');

$query = "SELECT Id, ItemName, Quantity FROM associationitems";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0 ) {
    while($row = mysqli_fetch_assoc($results)) {
        $query2 = "SELECT Id, Name FROM projects WHERE Status ='Ongoing'";
        $results2 = mysqli_query($conn, $query2);
        echo"
        <div class='available-items-card'>
                <div class='label'>
                    Item :
                </div>
                <div class='item-details'>
                    {$row['ItemName']}
                </div>
                <div class='item-details'>
                    {$row['Quantity']}
                </div>
                <div class='label'>
                    To Transfer :
                </div>
                <select class='input-avu1' id='project-{$row['Id']}'>
                    <option value='' disabled selected hidden>Transfer To</option>";
        if (mysqli_num_rows($results2) > 0 ) {
            while ($row2 = mysqli_fetch_assoc($results2)) {
                echo " 
                    <option value='{$row2['Id']}'>{$row2['Name']}</option>
                ";
            }
        }
        echo"
                </select>
                <input class='input-avu1' type='number' min='1' placeholder='Quantity' id='quantity-{$row['Id']}'>
                <button class='submit-btn btn'  onclick=onClickSubmitBtn('{$row['Id']}')>Submit</button>
            </div>
        ";
    }
}
