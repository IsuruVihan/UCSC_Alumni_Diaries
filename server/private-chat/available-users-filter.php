<?php

include('../../db/db-conn.php');
include('../session.php');

$email = $_SESSION['Email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$batch = $_POST['batch'];

$query = "SELECT Email, FirstName, LastName, PicSrc FROM registeredmembers 
          WHERE Email != '{$email}' 
          AND Email NOT IN (SELECT person1 FROM privatechats WHERE person2 = '$email') 
          AND Email NOT IN (SELECT person2 FROM privatechats WHERE person1 = '$email')";

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
                <img src='../../assets/images/user-default.png' width='20%' height='90%' class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>".$row["FirstName"]." ".$row["LastName"]."</div>
                    </div>
                    <div class='btn-container'>
                        <button class='add-btn btn' onclick=onClickAddBtn('{$row["Email"]}')>Add</button>
                    </div>
                </div>
            </div>";
        }else{
            echo"<div class='available-users-item'>
                <img src='../../uploads/profile-pics/".$row["PicSrc"]."' width='20%' height='90%' class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>".$row["FirstName"]." ".$row["LastName"]."</div>
                    </div>
                    <div class='btn-container'>
                        <button class='add-btn btn' onclick=onClickAddBtn('{$row["Email"]}')>Add</button>
                    </div>
                </div>
            </div>";
        }
    }
}
