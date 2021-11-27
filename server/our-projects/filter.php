<?php

include('../../db/db-conn.php');

$Start_Date = $_POST['Start_Date'];
$End_Date = $_POST['End_Date'];

$query = "SELECT Name,Id FROM projects WHERE Timestamp BETWEEN
         '$Start_Date' AND '$End_Date' ORDER BY Timestamp";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "
            <div
              class='list' 
              onmouseover=DisplayButtons('p-list-1-{$row['Id']}') 
              onmouseout=HideButtons('p-list-1-{$row['Id']}')
            >
              <p class='project-name'>{$row['Name']}</p>
            <div class='buttons' id='p-list-1-{$row['Id']}'>
                <button 
                class='view-btn btn'
                id='p-list-1-{$row['Id']}'
                onclick=ViewProjectDetails('{$row['Id']}')
                >View</button>
            </div>
          </div>
        
        ";
    }
}else {
    echo "
        <div class='result'>
            <p class='request-id'>No data</p>
        </div>
    ";
}



?>