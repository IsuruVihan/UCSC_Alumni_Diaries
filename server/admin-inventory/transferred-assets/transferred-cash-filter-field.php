<?php

include('../../../db/db-conn.php');
include('../../session.php');

$query1 = "SELECT Id, Name FROM projects WHERE Status IN ('Ongoing','Closed','Completed')";
$results1 = mysqli_query($conn, $query1);

echo"<div class='col3'>
                <input class='input-avu2' type='text' id='from' placeholder='From'
                       onmouseup=(this.type='date')>
                <input class='input-avu2' type='text' id='to' placeholder='To'
                       onmouseup=(this.type='date')>
            </div>
            <div class='col3'>
                <select class='input-avu3' id='transferred-to'>
                    <option value='' disabled selected hidden>Transferred To</option>";
if (mysqli_num_rows($results1) > 0 ) {
    while ($row1 = mysqli_fetch_assoc($results1)) {
        echo " 
                    <option value='{$row1['Id']}'>{$row1['Name']}</option>
                ";
    }
}
echo "         </select>
            </div>
            <div class='col2'>
                <input type='submit' class='filter-btn btn' value='Filter'/>
                <button class='generate-reports-btn btn' 
                onclick=cashGenReportBtn(document.getElementById('from').value,document.getElementById('to').value,document.getElementById('transferred-to').value)
                >Generate Reports</button>
            </div>";
