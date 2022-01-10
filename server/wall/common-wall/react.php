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
            echo 'done';

        break;

    case '2' :

            $id = $_POST['id'];
            $email = $_SESSION['Email'];
            $react = 'Dislike';

            $query = "INSERT INTO reactsforposts (UserEmail,PostId,ReactType) VALUES ('$email','$id','$react')";
            $result = mysqli_query($conn, $query);
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