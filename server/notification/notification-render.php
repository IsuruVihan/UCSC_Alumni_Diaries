<?php
include('../../db/db-conn.php');
include('../session.php');

$email = $_SESSION['Email'];

$query = "SELECT Id, Message, Timestamp, Status FROM notifications WHERE Email = '{$email}' ORDER BY Id DESC";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        if ($row['Status'] == 'NotViewed') {
            echo" 
                <div class='list'>
                    <div class='box-01'>
                        <div class='text'>
                            {$row['Message']}
                        </div>
                        <div class='text'>
                            {$row['Timestamp']}
                        </div>
                        <div class='button'>
                            <button class='delete-btn btn' onclick=DeleteNotification('{$row['Id']}')>Delete</button>
                            <input class='mark-btn btn' type='button' value='Mark As Read' id='myButton1' onclick=MarkNotification('{$row['Id']}') ></input>
                        </div>
                    </div>
                </div>
            ";
        } else {
                echo"<div class='list'>
                <div class='box-01'>
                    <div class='text'>
                        {$row['Message']}
                    </div>
                    <div class='text'>
                        {$row['Timestamp']}
                    </div>
                    <div class='button'>
                        <button class='delete-btn btn' onclick=DeleteNotification('{$row['Id']}')>Delete</button>
                        <input class='mark-btn btn' type='button' value='Read' id='myButton1') ></input>
                    </div>
                </div>
            </div>
            ";
        }
    }
}
              