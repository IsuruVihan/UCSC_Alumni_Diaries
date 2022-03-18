<?php
include('../../../db/db-conn.php');
include('../../../server/session.php');

$endDate=$_POST['toDate'];
$startDate=$_POST['fromDate'];
$coordinator=$_POST['coordinator'];
$projectStatus=$_POST['projectStatus'];


$query="
    SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
	INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
	INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email
";

if(!empty($coordinator)  ){
    $query="
    SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
	INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
	INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
";
    }

if(!empty($projectStatus)) {
    if (!empty($coordinator) && $projectStatus != 'AllProjects') {
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	             AND projects.Status = '{$projectStatus}' ";
    }
    elseif (!empty($coordinator) && $projectStatus == 'AllProjects') {
        $query = "
    SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
	INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
	INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'";
    }
    elseif ($projectStatus == 'AllProjects') {
        $query = $query;
    }
    else {
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE projects.Status = '{$projectStatus}' ";
    }
}

if(!empty($startDate)){
            if(!empty($coordinator) && !empty($projectStatus) && $projectStatus != 'AllProjects'){
                $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	             AND projects.Status = '{$projectStatus}' AND Timestamp >= '$startDate'" ;
            }
            elseif (!empty($coordinator)&& !empty($projectStatus) && $projectStatus == 'AllProjects'){
                $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                          INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                          INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	                      AND Timestamp >= '$startDate'" ;
            }
            elseif(!empty($coordinator)){
                $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                          INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                          INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	                      AND Timestamp >= '$startDate'" ;
            }
            elseif (!empty($projectStatus) && $projectStatus != 'AllProjects'){
                $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email 
                 WHERE projects.Status = '{$projectStatus}' AND Timestamp >= '$startDate'" ;
            }
            elseif (!empty($projectStatus) && $projectStatus == 'AllProjects'){
                $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                          INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                          INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE Timestamp >= '$startDate'" ;
            }
            else{
                $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                          INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                          INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE Timestamp >= '$startDate'" ;
            }
}

if(!empty($endDate)){
    if(!empty($startDate) && !empty($coordinator) && !empty($projectStatus) && $projectStatus != 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	             AND projects.Status = '{$projectStatus}' AND Timestamp >= '$startDate' AND Timestamp <= '$endDate'" ;
    }
    elseif (!empty($startDate) && !empty($coordinator)&& !empty($projectStatus) && $projectStatus == 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%' 
	              AND Timestamp >= '$startDate' AND Timestamp <= '$endDate'" ;
    }
    elseif(!empty($startDate) && !empty($coordinator)){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	              AND Timestamp >= '$startDate' AND Timestamp <= '$endDate'" ;
    }
    elseif (!empty($startDate) && !empty($projectStatus) && $projectStatus != 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email 
                 WHERE projects.Status = '{$projectStatus}' AND Timestamp >= '$startDate' AND Timestamp <= '$endDate'" ;
    }
    elseif (!empty($startDate) && !empty($projectStatus) && $projectStatus == 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE Timestamp >= '$startDate' 
                  AND Timestamp <= '$endDate'" ;
    }

    elseif(!empty($coordinator) && !empty($projectStatus) && $projectStatus != 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	             AND projects.Status = '{$projectStatus}' AND Timestamp <= '$endDate'" ;
    }
    elseif (!empty($coordinator)&& !empty($projectStatus) && $projectStatus == 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	              AND Timestamp <= '$endDate'" ;
    }
    elseif(!empty($coordinator)){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE FirstName LIKE '{$coordinator}%'
	              AND Timestamp <= '$endDate'" ;
    }
    elseif (!empty($projectStatus) && $projectStatus != 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                 INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                 INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email 
                 WHERE projects.Status = '{$projectStatus}' AND Timestamp <= '$endDate'" ;
    }
    elseif (!empty($projectStatus) && $projectStatus == 'AllProjects'){
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE Timestamp <= '$endDate'" ;
    }
    else{
        $query = "SELECT projects.Id,Name,Description,Timestamp,FirstName,NameWithInitials FROM projects 
                  INNER JOIN committeemembers ON committeemembers.ProjectId = projects.Id  AND committeemembers.Type = 'Coordinator'
                  INNER JOIN registeredmembers ON registeredmembers.Email = committeemembers.Email WHERE Timestamp <= '$endDate'" ;
    }
}


$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
$id=$row['Id'];
            echo "
				<div class='project-description' id='project-description'>
                    <div class='project-detail-box'>
                        <div class='project-detail-box-col1'>
                            <div class='p-name details-field'>{$row['Name']}</div>
                            <div class='p-s-date details-field'>{$row['Timestamp']}</div>

                            <button class='p-view btn view-btn' onclick=ViewCashItems({$row['Id']})>View</button>
                        </div>
                        <div class='p-description details-field '>{$row['Description']}</div>
                        <div class='p-cordi details-field'>{$row['NameWithInitials']} </div>
                    </div>
                </div>
			";


    }
}
else {
    echo "No data";
}

