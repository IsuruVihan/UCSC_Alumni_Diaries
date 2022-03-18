<?php

include('../../db/db-conn.php');

$FirstName = trim($_POST['Participants_FirstName']);
$LastName = trim($_POST['Participants_LastName']);
$Id = $_POST['Id'];

$query2="SELECT registeredmembers.FirstName,registeredmembers.LastName,registeredmembers.PicSrc,participantgroups.UserEmail,participantgroups.GroupChatId 
        FROM registeredmembers
        INNER JOIN participantgroups 
        ON registeredmembers.Email = participantgroups.UserEmail  
        WHERE GroupChatId='{$Id}'";

if (!empty($FirstName)) {
    $query2 = $query2 . " AND FirstName LIKE '{$FirstName}%'";
}
if (!empty($LastName)) {
    if (!empty($FirstName) || !empty($LastName)) {
        $query2 = $query2 . " AND LastName LIKE '{$LastName}%'";
    } else {
        $query2 = $query2 . " WHERE LastName LIKE '{$LastName}%'";
    }
}
$result2 =mysqli_query($conn, $query2);
if(mysqli_num_rows($result2) > 0){    
    while($row2 = mysqli_fetch_assoc($result2)){
        if($row2["PicSrc"] === 'user-default.png'){   
            echo"<div class='available-users-item'>
                    <img src='../../assets/images/user-default.png' width='12%' class='user-pic' alt='user-pic'>
                    <div class='names-btn-container01'>
                        <div class='names-container02'>
                            <div class='a-first-name'>".$row2["FirstName"]." ".$row2["LastName"]."</div>
                                <button class='remove-btn btn' onClick=OnclickRemove('{$row2["GroupChatId"]}')>Remove</button>
                            </div>
                        </div>
                    </div>
            ";
        }else{
            echo"<div class='available-users-item'>
                    <img src='../../assets/images/".$row2["PicSrc"]."' width='12%' class='user-pic' alt='user-pic'>
                       <div class='names-btn-container01'>
                            <div class='names-container02'>
                                <div class='a-first-name'>{$row2['FirstName']}</div>
                                <div class='a-last-name'>{$row2['LastName']}</div>
                                <button class='remove-btn btn' onClick=OnclickRemove('{$row2["GroupChatId"]}')>Remove</button>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    } else {
        echo "
            <div class='result'>
                <p class='request-id'>No data</p>
            </div>
        ";
    }               
