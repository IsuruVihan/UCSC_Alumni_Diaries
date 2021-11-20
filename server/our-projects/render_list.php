<?php

include('../../db/db-conn.php');

$query = "SELECT Id,Name FROM projects";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "
            <div class='list' onmouseover=DisplayButtons('p-list-1-{$row['Id']}') onmouseout=HideButtons('p-list-1-{$row['Id']}')>
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
}else{
    echo "
    <div class='result'>
       <p class='request-id'>No data</p>
    </div>
    
    ";
}

