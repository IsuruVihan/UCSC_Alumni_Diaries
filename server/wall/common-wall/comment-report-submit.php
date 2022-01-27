<?php
include('../../../db/db-conn.php');
include ('../../../server/session.php');

$content=$_POST['report-content'];
$email =$_SESSION['Email'];
$commentId=$_POST['comment-id-no'];

if(!empty($content)){
    $query ="INSERT INTO reportsforcomments (CommentId,OwnerEmail,Content) VALUES ('$commentId','$email','$content')";
    $result = mysqli_query($conn, $query);

    //notification
    $query3 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
    $results3 = mysqli_query($conn, $query3);

    if (mysqli_num_rows($results3) > 0) {
        while ($row3 = mysqli_fetch_assoc($results3)) {  
            $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['Email']}','{$email} has submitted a report on comment')
            ";
            mysqli_query($conn, $query4);
    
            // Activity
            $query7 = "
                INSERT INTO activitylog (Email, Section, Activity)
                VALUES ('{$_SESSION['Email']}', 'Wall', 'Reported a comment')
            ";
            mysqli_query($conn, $query7);
        }
    } 
}
