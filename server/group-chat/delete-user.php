 <?php

include('../../db/db-conn.php');
$Id = $_POST['Id2'];
$email = $_POST['UserEmail'];

$query = "DELETE FROM participantgroups WHERE GroupChatId='$Id' AND UserEmail='$email'";
$results=mysqli_query($conn, $query);

if ($results) {
    echo"User has been delete from your group chat list";
}