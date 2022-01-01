<?php
 
  include('../../db/db-conn.php');

  $Group_Name = $_POST['Group_Name'];

  $query = "SELECT * FROM groupchats ";

  if(!empty($Group_Name)){
    $query = $query . "WHERE Name LIKE '{$Group_Name}%'";
  }

  $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if ($row['PicSrc'] == 'group-chat.png') {  
                echo"
                    <div class='list-items'>
                        <img src='../../assets/images/group-chat.png' width='20%' height='90%' class='user-pic' alt='user-pic'>
                        <div class='name-buttons'>
                            <div class='name'>
                                {$row['Name']}
                            </div>
                            <div class='buttons'>
                                <button 
                                    class='view-btn btn' 
                                    id='view-btn' 
                                    onclick=ViewChat('{$row['Id']}')
                                > View</button>
                                <button 
                                    class='delete-btn btn'
                                    id='delete'
                                    onclick=DeleteChat('{$row['Id']}')
                                >Delete</button>
                            <div>
                        </div>
                    </div>
                ";
            }else{
                echo"
                    <div class='list-items'>
                            <img src='../../uploads/group-chat/{$row['PicSrc']}' width='20%' height='90%'  class='user-pic' alt='user-pic'>
                        <div class='name-buttons'>
                            <div class='name'>
                                {$row['Name']}
                            </div>
                            <div class='buttons'>
                                <button 
                                    class='view-btn btn' 
                                    id='view-btn' 
                                    onclick=ViewChat('{$row['Id']}')
                                > View</button>
                                <button 
                                    class='delete-btn btn'
                                    id='delete'
                                    onclick=DeleteChat('{$row['Id']}')
                                >Delete</button>
                            </div>
                        </div>
                    </div>
                ";
            }  
        }
    }else{
        echo"
            <div >
                <p class='request-id'>No data</p>
            </div>
        ";
    }