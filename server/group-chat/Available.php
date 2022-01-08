<?php
include('../../db/db-conn.php');
include('../session.php');
$Id  = $_POST['Id'];
$email = $_SESSION['Email'];

$query1="SELECT Email,FirstName, LastName, PicSrc, Batch FROM registeredmembers WHERE Email != '{$email}' 
         AND Email NOT IN(SELECT UserEmail FROM participantgroups WHERE GroupChatId ='{$Id}')";
$result1 =mysqli_query($conn, $query1);
if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1)){
         echo"<div class='available-users-item'>";
                if($row1["PicSrc"] === 'user-default.png'){
                    echo"   <img src='../../assets/images/user-default.png' width='10%' class='user-pic' alt='user-pic'>";
                }else{
                    echo"   <img src='../../uploads/profile-pics/".$row1["PicSrc"]."' width='14%' height='90%' class='user-pic' alt='user-pic'>";
                }
            echo" <div class='names-btn-container01'>
                        <div class='names-container02'>
                        <div class='a-first-name'>".$row1["FirstName"]." ".$row1["LastName"]."</div>
                            <button class='add-btn btn' onclick=onClickAddBtn('{$row1["Email"]}')>Add</button>
                        </div>
                    </div>
                </div>";     
        
        }
    
    }