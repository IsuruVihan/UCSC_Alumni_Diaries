<?php
    include('../../db/db-conn.php');
    
    $id = $_POST['id'];
    
    $query = "SELECT PicSrc FROM suggestions WHERE Id='$id'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $query2 = "DELETE FROM suggestions WHERE Id='$id'";
            if (mysqli_query($conn, $query2)) {
                echo "Suggestion has been deleted successfully";
            } else {
                echo "Server error";
            }
            if ($row['PicSrc'] !== NULL) {
                unlink("../../uploads/suggestions/${row['PicSrc']}");
            }
        }
    } else {
        echo "Server error";
    }