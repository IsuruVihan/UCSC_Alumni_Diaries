<?php 
include('../../db/db-conn.php');



$query = "SELECT projects.Id, projects.Name, projects.Description, projects.Timestamp, commiteemembers.Email
          FROM projects
          INNER JOIN committeemembers ON projects.Id = commiteemembers.ProjectId";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){
    echo"
    <div class='title'>
    {$row['projects.Name']}
</div>
<div class='filter-01'>
    <div class='box-01'>
        <div class='text'>
            Start Date
        </div>
        <div class='text'>
            Cordinator Name
        </div>
    </div>
    <div class=box-02>
        <div class='text'>
            Cordinator email
        </div>
    </div>
</div>
<div class='project-description'>
    Project Description Comes here....
</div>
    
    
    
    
    ";



}


?>