<?php

include('../../db/db-conn.php');

$Start_Date = $_POST['Start_Date'];
$End_Date = $_POST['End_Date'];
$Project_Name = $_POST['Project_Name'];

$query = "SELECT Name,Id FROM projects ";


if (!empty($Project_Name))  {
  $query = $query . " WHERE Name LIKE '{$Project_Name}%'";
}

if (!empty($Start_Date)) {
  if (!empty($Project_Name)) {
    $query = $query . " AND Timestamp > '{$Start_Date}'";  
  } else {
    $query = $query . " WHERE Timestamp > '{$Start_Date}'";
  }
}

if (!empty($End_Date)) {
  if (!empty($Project_Name) || !empty($Start_Date)) {
    $query = $query . " AND Timestamp < '{$End_Date}'";  
  } else {
    $query = $query . " WHERE Timestamp < '{$End_Date}'";
  }
}


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