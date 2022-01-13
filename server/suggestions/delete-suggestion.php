<?php
    include('../../db/db-conn.php');
    include ('../session.php');
    
    $id = $_POST['id'];

    $query3 = "SELECT Name, Title FROM suggestions";  
    $results3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($results3);
   
    $query = "SELECT PicSrc FROM suggestions WHERE Id='$id'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $query2 = "DELETE FROM suggestions WHERE Id='$id'";
            if (mysqli_query($conn, $query2)) {

                //notification
                $query4 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
                $results4 = mysqli_query($conn, $query4);
                
                if (mysqli_num_rows($results4) > 0) {
                    while ($row4 = mysqli_fetch_assoc($results4)) {  
                        $query5 = "INSERT INTO notifications (Email,Message) VALUES ('{$row4['Email']}','suggestion submited by {$row3['Name']} on {$row3['Title']} now deleted from the sugesstion by {$_SESSION['Email']}')
                        ";
                        mysqli_query($conn, $query5);
                    
                    }
                }      

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