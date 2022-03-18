<?php
include('../../db/db-conn.php');
include('../session.php');

$chatId = $_POST['Id'];
$sessionemail = $_SESSION['Email'];

$query = "SELECT Person1, Person2 FROM privatechats WHERE Id = '{$chatId}'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);

if($row["Person1"] == $sessionemail){
    $email = $row["Person2"];
}else{
    $email = $row["Person1"];
}

$query2 = "SELECT FirstName, LastName, PicSrc FROM registeredmembers WHERE Email='{$email}'";
$results2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($results2) > 0 ) {
    while($row2 = mysqli_fetch_assoc($results2)) {
        if($row2["PicSrc"] === 'user-default.png'){
            echo"<img src='../../assets/images/user-default.png' width='12%' height='99%' class='user-pic' alt='user-pic'>
                <div class='chat-name-container'>
                    <div class='first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                </div>
                <div class='chat-list-btn-container'>
                    <button class='chat-list-btn btn' id='chat-list-btn' onclick='onClickChatListBtn()'>Back To Chat List</button>
                </div>";
        }else{
            echo"<img src='../../uploads/profile-pics/".$row2["PicSrc"]."' width='12%' height='99%' class='user-pic' alt='user-pic'>
                <div class='chat-name-container'>
                    <div class='first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                </div>
                <div class='chat-list-btn-container'>
                    <button class='chat-list-btn btn' id='chat-list-btn' onclick='onClickChatListBtn()'>Back To Chat List</button>
                </div>";
        }
    }
}

