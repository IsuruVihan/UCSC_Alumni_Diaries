<?php
    include('../../db/db-conn.php');
    include ('../session.php');
    
    $id = $_POST['id'];

    $query3 = "SELECT Email,Name, Title FROM suggestions";  
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
                        $query5 = "INSERT INTO notifications (Email,Message) VALUES ('{$row4['Email']}','suggestion submited by {$row3['Email']} on {$row3['Title']} now deleted by {$_SESSION['Email']}')
                        ";
                        mysqli_query($conn, $query5);
                    
                    }
                }
    
                // Activity
                $query6 = "
                    INSERT INTO activitylog (Email, Section, Activity)
                    VALUES ('{$_SESSION['Email']}', 'Suggestions', 'Suggestion (ID): {$id} deleted')
                ";
                mysqli_query($conn, $query6);
                
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