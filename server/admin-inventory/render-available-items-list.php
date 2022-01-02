<?php

include('../../db/db-conn.php');
include('../session.php');

$query = "SELECT Id, ItemName, Quantity FROM associationitems";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0 ) {
    while($row = mysqli_fetch_assoc($results)) {
        echo"
        <div class='available-items-card'>
                <div class='label'>
                    Item :
                </div>
                <div class='item-details'>
                    ".$row["ItemName"]."
                </div>
                <div class='item-details'>
                    ".$row["Quantity"]."
                </div>
                <div class='label'>
                    To Transfer :
                </div>
                <select class='input-avu1'>
                       <option value='' disabled selected hidden>Transfer To</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                </select>
                <input class='input-avu1' type='number' placeholder='Quantity'/>
                <button class='submit-btn btn'>Submit</button>
            </div>
        ";
    }
}
