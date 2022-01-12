<?php

include('../../../db/db-conn.php');
include('../../../server/session.php');

$query = "SELECT Timestamp, Name, Description, FirstName, NameWithInitials, LastName, projects.Id FROM ( (committeemembers
          INNER JOIN projects  ON projects.Id = committeemembers.ProjectId AND Type = 'Coordinator')
          INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email AND Type = 'Coordinator')" ;
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "   
            <div class='project-description' id='project-description'  >
                <div class='project-detail-box' >
                    <div class='project-detail-box-col1' >
                        <div class='p-name details-field'>{$row['Name']}</div>
                        <div class='p-s-date details-field'>{$row['Timestamp']}</div>
                        
                        <button class='p-view btn view-btn' onclick=ViewCashItems({$row['Id']})>View</button>
                    </div>
                    <div class='p-description details-field '>{$row['Description']}</div>
                    <div class='p-cordi details-field'>{$row['NameWithInitials']}</div>
                </div>
            </div>
                
        ";
}




