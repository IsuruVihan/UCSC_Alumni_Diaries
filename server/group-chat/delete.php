<?php
include('../../db/db-conn.php');
    
$Id = $_POST['Id'];
    
$query = "SELECT PicSrc FROM groupchats WHERE Id='$Id'";
$results = mysqli_query($conn, $query);

$query5 = "SELECT OwnerEmail,Name FROM groupchats WHERE Id = '{$Id}'";
$result5=mysqli_query($conn, $query5);
$row5 = mysqli_fetch_assoc($result5);

$Group_Name=$row5['Name']; 
$Owner_Email=$row5['OwnerEmail'];

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
            $query2 = "DELETE FROM groupchats WHERE Id='$Id'";
            $results2=mysqli_query($conn, $query2);

        if (mysqli_query($conn, $query2)) {
            //notification
            $query3 = "SELECT UserEmail FROM participantgroups WHERE GroupChatId = '{$Id}'";
            $result3=mysqli_query($conn, $query3);

            if (mysqli_num_rows($result3) > 0) {
                while ($row3 = mysqli_fetch_assoc($result3)) {  
                    $query4 = "INSERT INTO notifications (Email,Message) VALUES ('{$row3['UserEmail']}','$Group_Name group has been delete by $Owner_Email')";
                    $result4=mysqli_query($conn, $query4);
                }
            }
    
            // Activity
            $query7 = "
                INSERT INTO activitylog (Email, Section, Activity)
                VALUES ('{$_SESSION['Email']}', 'Chat', 'Deleted a chat group')
            ";
            mysqli_query($conn, $query7);
            
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