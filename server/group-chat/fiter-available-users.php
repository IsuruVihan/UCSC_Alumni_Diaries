<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_SESSION['Email'];
$firstname = $_POST['First_Name'];
$lastname = $_POST['Last_Name'];
$batch = $_POST['Batch'];
$Id = $_POST['Id'];

$query="SELECT Email,FirstName, LastName, PicSrc, Batch FROM registeredmembers WHERE Email != '{$email}' 
         AND Email NOT IN(SELECT UserEmail FROM participantgroups WHERE GroupChatId ='{$Id}')";

if (!empty($firstname)) {
    $query = $query . " AND FirstName LIKE '{$firstname}%'";
}
if (!empty($lastname)) {
    $query = $query . " AND LastName LIKE '{$lastname}%'";
}
if (!empty($batch)) {
    $query = $query . " AND Batch = '{$batch}'";
}

$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0 ) {
    while($row = mysqli_fetch_assoc($results)) {
        if($row["PicSrc"] === 'user-default.png'){
            echo"<div class='available-users-item'>
                 <img src='../../assets/images/user-default.png' width='12%' class='user-pic' alt='user-pic'>
                <div class='names-btn-container01'>
                    <div class='names-container02'>
                    <div class='a-first-name'>".$row["FirstName"]." ".$row["LastName"]."</div>
                        <input type='text' id='GroupId' value='$Id' style='display:none'>
                        <button class='add-btn btn' onclick=onClickAddBtn('{$row["Email"]}')>Add</button>
                    </div>
                </div>
            </div>";
        }else{
            echo"<div class='available-users-item'>
                <img src='../../uploads/group-chat/".$row["PicSrc"]."' width='12%' class='user-pic' alt='user-pic'>
                <div class='names-btn-container01'>
                    <div class='names-container02'>
                     <div class='a-first-name'>".$row["FirstName"]." ".$row["LastName"]."</div>
                        <input type='text' id='GroupId' value='$Id' style='display:none'>
                        <button class='add-btn btn' onclick=onClickAddBtn('{$row["Email"]}')>Add</button>
                    </div>
                </div>
            </div>";
        }
    }
} else {
    echo "
        <div class='result'>
            <p class='request-id'>No data</p>
        </div>
    ";
}