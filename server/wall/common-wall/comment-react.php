<?php
include('../../session.php');
include('../../../db/db-conn.php');

switch ($_POST['click']) {
    case '1' :
        $id = $_POST['id'];
        $email = $_SESSION['Email'];
        $react = 'Like';
        $query = "INSERT INTO reactsforcomments (UserEmail,CommentId,ReactType) VALUES ('$email','$id','$react')";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query7 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Reacted to a comment')
        ";
        mysqli_query($conn, $query7);
        
        echo 'done';
        break;
    case '2' :
        $id = $_POST['id'];
        $email = $_SESSION['Email'];
        $react = 'Dislike';

        $query = "INSERT INTO reactsforcomments (UserEmail,CommentId,ReactType) VALUES ('$email','$id','$react')";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query7 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Reacted to a comment')
        ";
        mysqli_query($conn, $query7);
        
        echo 'done';
        break;
    case '3' :
        $id = $_POST['id'];

        $query = "DELETE FROM reactsforcomments WHERE CommentId='$id' ";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query7 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Removed to a comment')
        ";
        mysqli_query($conn, $query7);
        
        echo 'done';
        break;
    case '4' :
        $id = $_POST['id'];
        $react = 'Like';
        $query = "UPDATE reactsforcomments SET ReactType='$react' WHERE CommentId='$id' ";
        $result = mysqli_query($conn, $query);
    
        // Activity
        $query7 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Reacted to a comment')
        ";
        mysqli_query($conn, $query7);
        
        echo 'done';
        break;
    case '5' :
        $id = $_POST['id'];
        $react = 'DisLike';
    
        // Activity
        $query7 = "
            INSERT INTO activitylog (Email, Section, Activity)
            VALUES ('{$_SESSION['Email']}', 'Wall', 'Reacted to a comment')
        ";
        mysqli_query($conn, $query7);
        
        $query = "UPDATE reactsforcomments SET ReactType='$react' WHERE CommentId='$id' ";
        $result = mysqli_query($conn, $query);
        echo 'done';
        break;
}