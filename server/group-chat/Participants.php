<?php
include('../../db/db-conn.php');
include('../session.php');
$Id  = $_POST['Id'];
$email = $_SESSION['Email'];

$query2="SELECT registeredmembers.FirstName,registeredmembers.LastName,registeredmembers.PicSrc,participantgroups.UserEmail,participantgroups.GroupChatId FROM registeredmembers
        INNER JOIN participantgroups ON registeredmembers.Email = participantgroups.UserEmail  WHERE GroupChatId='{$Id}'";
$result2 =mysqli_query($conn, $query2);
if(mysqli_num_rows($result2) > 0){    
    while($row2 = mysqli_fetch_assoc($result2)){
        if($row2["PicSrc"] === 'user-default.png'){   
            echo"<div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width='10%' class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                    <div class='names-container02'>
                        <div class='a-first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                            <input type='text' id='User-Email' value='{$row2['UserEmail']}' style='display:none'>
                            <button class='remove-btn btn' onClick=OnclickRemove('{$row2["GroupChatId"]}')>Remove</button>
                        </div>
                    </div>
                </div>";
        }else{
            echo"<div class='available-users-item'>
                    <img src='../../assets/images/".$row2["PicSrc"]."' width='10%' class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                    <div class='names-container02'>
                        <div class='a-first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                            <input type='text' id='User-Email' value='{$row2['UserEmail']}' style='display:none'>
                            <button class='remove-btn btn' onClick=OnclickRemove('{$row2["GroupChatId"]}')>Remove</button>
                        </div>
                    </div>
                </div>
            ";
        }
    }
}             