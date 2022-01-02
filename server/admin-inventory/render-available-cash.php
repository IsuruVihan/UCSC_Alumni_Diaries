<?php
include('../../db/db-conn.php');
include('../session.php');

$query = "SELECT Amount FROM associationcash WHERE Id = '0'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);

if (mysqli_num_rows($results) > 0 ) {
    echo"<div class='title'>
            Available Cash
        </div>
        <div class='cash'>
            (LKR) ".$row["Amount"]."
        </div>
        <select class='input-avu1'>
            <option value='' disabled selected hidden>Transfer To</option>
            <option value='2018/2019'>2018/2019</option>
            <option value='2018/2019'>2019/2020</option>
            <option value='2018/2019'>2020/2021</option>
        </select>
        <input class='input-avu1' type='number' placeholder='Amount'/>
        <button class='submit-btn btn'>Submit</button>";
}
