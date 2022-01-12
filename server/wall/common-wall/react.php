<?php
include('../../session.php');
include('../../../db/db-conn.php');

switch ($_POST['click']) {
    case '1' :

            $id = $_POST['id'];
            $email = $_SESSION['Email'];
            $react = 'Like';

            $query = "INSERT INTO reactsforposts (UserEmail,PostId,ReactType) VALUES ('$email','$id','$react')";
            $result = mysqli_query($conn, $query);

            //notification
            $query1= "SELECT FirstName, LastName FROM registeredmembers WHERE Email='{$email}'";
            $results1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($results1);

            $query2= "SELECT OwnerEmail, Title FROM posts WHERE Id='$id'";
            $results2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($results2);

            $query3 = "INSERT INTO notifications (Email,Message) VALUES 
                      ('{$row2['OwnerEmail']}','{$row1['FirstName']} {$row1['LastName']} has like to your post')
                        ";
            mysqli_query($conn, $query3);
            echo 'done';

        break;

    case '2' :

            $id = $_POST['id'];
            $email = $_SESSION['Email'];
            $react = 'Dislike';

            $query = "INSERT INTO reactsforposts (UserEmail,PostId,ReactType) VALUES ('$email','$id','$react')";
            $result = mysqli_query($conn, $query);

            //notification
            $query4= "SELECT FirstName, LastName FROM registeredmembers WHERE Email='{$email}'";
            $results4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($results4);

            $query5= "SELECT OwnerEmail, Title FROM posts WHERE Id='$id'";
            $results5 = mysqli_query($conn, $query5);
            $row5 = mysqli_fetch_assoc($results5);

            $query6 = "INSERT INTO notifications (Email,Message) VALUES 
                      ('{$row5['OwnerEmail']}','{$row4['FirstName']} {$row4['LastName']} has Dislike to your post')
                        ";
            mysqli_query($conn, $query6);
            echo 'done';

        break;

    case '3' :

            $id = $_POST['id'];

            $query = "DELETE FROM reactsforposts WHERE PostId='$id' ";
            $result = mysqli_query($conn, $query);
            echo 'done';

        break;

    case '4' :

        $id = $_POST['id'];
        $react = 'Like';

        $query = "UPDATE reactsforposts SET ReactType='$react' WHERE PostId='$id' ";
        $result = mysqli_query($conn, $query);
        echo 'done';

        break;

    case '5' :

        $id = $_POST['id'];
        $react = 'DisLike';

        $query = "UPDATE reactsforposts SET ReactType='$react' WHERE PostId='$id'";
        $result = mysqli_query($conn, $query);
        echo 'done';

        break;


}

        
    
    
