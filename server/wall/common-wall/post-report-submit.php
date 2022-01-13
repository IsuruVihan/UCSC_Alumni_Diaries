<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$content=$_POST['post-report-content'];
$email =$_SESSION['Email'];
$postId=$_POST['post-id-no'];

if(!empty($content)){
    $query ="INSERT INTO reportsforposts (PostId,OwnerEmail,Content) VALUES ('$postId','$email','$content')";
    $result = mysqli_query($conn, $query);

    //notification
    $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
    $results3 = mysqli_query($conn, $query3);

    if (mysqli_num_rows($results3) > 0) {
        while ($row3 = mysqli_fetch_assoc($results3)) {  
            $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$email} has submitted report on post')
            ";
            mysqli_query($conn, $query4);
        
        }
    }      
}



