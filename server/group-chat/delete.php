<?php
include('../../db/db-conn.php');
    
$Id = $_POST['Id'];
    
$query = "SELECT PicSrc FROM groupchats WHERE Id='$Id'";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $query2 = "DELETE FROM groupchats WHERE Id='$Id'";
        if (mysqli_query($conn, $query2)) {
            echo "Group has been deleted successfully";
        } else {
            echo "Server error";
        }
        if ($row['PicSrc'] !== 'group-chat.png') {
            unlink("../../uploads/group-chat/${row['PicSrc']}"); 
       }
    }
} else {
    echo "Server error";
}