<?php
include('../../db/db-conn.php');
include('../session.php');

$email = $_SESSION['Email'];

$query1 = "SELECT registeredmembers.FirstName, registeredmembers.LastName, registeredmembers.PicSrc, privatechats.Id 
           FROM registeredmembers 
           INNER JOIN privatechats ON privatechats.Person1 = registeredmembers.Email 
           WHERE privatechats.Person2 = '{$email}'";
$results1 = mysqli_query($conn, $query1);

$query2 = "SELECT registeredmembers.FirstName, registeredmembers.LastName, registeredmembers.PicSrc, privatechats.Id 
           FROM registeredmembers 
           INNER JOIN privatechats ON privatechats.Person2 = registeredmembers.Email 
           WHERE privatechats.Person1 = '{$email}'";
$results2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($results1) > 0 ) {
    while($row = mysqli_fetch_assoc($results1)) {
        if($row["PicSrc"] === 'user-default.png'){
            echo"<div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width='20%' height='90%' class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>".$row["FirstName"]." ".$row["LastName"]."</div>
                    </div>
                    <div class='btn-container'>
                        <button class='view-btn btn' id='view-btn' onclick=onClickViewBtn('{$row["Id"]}')>View</button>
                        <button class='delete-btn btn' onclick=onClickDeleteBtn('{$row["Id"]}')>Delete</button>
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
                        <button class='view-btn btn' id='view-btn' onclick=onClickViewBtn('{$row["Id"]}')>View</button>
                        <button class='delete-btn btn' onclick=onClickDeleteBtn('{$row["Id"]}')>Delete</button>
                    </div>
                </div>
            </div>";
        }
    }
}

if (mysqli_num_rows($results2) > 0 ) {
    while($row = mysqli_fetch_assoc($results2)) {
        if($row["PicSrc"] === 'user-default.png'){
            echo"<div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width='20%' height='90%' class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>".$row["FirstName"]." ".$row["LastName"]."</div>
                    </div>
                    <div class='btn-container'>
                        <button class='view-btn btn' id='view-btn' onclick=onClickViewBtn('{$row["Id"]}')>View</button>
                        <button class='delete-btn btn' onclick=onClickDeleteBtn('{$row["Id"]}')>Delete</button>
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
                        <button class='view-btn btn' id='view-btn' onclick=onClickViewBtn('{$row["Id"]}')>View</button>
                        <button class='delete-btn btn' onclick=onClickDeleteBtn('{$row["Id"]}')>Delete</button>
                    </div>
                </div>
            </div>";
        }
    }
}



