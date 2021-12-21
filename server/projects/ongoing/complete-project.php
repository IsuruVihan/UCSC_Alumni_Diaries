<?php
    
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    
    // Add remaining cash to 'associationcash'
    $query = "SELECT Amount FROM associationcash WHERE Id = '0'";
    $query2 = "SELECT Amount FROM projectcash WHERE ProjectId = '{$ProjectId}'";
    
    // Delete relevant 'projectcash'
    $query4 = "DELETE FROM projectcash WHERE ProjectId = '{$ProjectId}'";
    
    // Add remaining items to 'associationitems'
    $query5 = "SELECT ItemName, Quantity FROM projectitems WHERE ProjectId = '{$ProjectId}' AND Quantity > 0";
    
    // Delete relevant 'projectitems'
    $query7 = "DELETE FROM projectitems WHERE ProjectId = '{$ProjectId}'";
    
    // Delete all relevant 'committeechatmessages'
    $query8 = "DELETE FROM committeechatmessages WHERE ProjectId = '{$ProjectId}'";
    
    // Mark all relevant 'committeemembers' as available in 'registeredmembers'
    $query9 = "SELECT Email FROM committeemembers WHERE ProjectId = '{$ProjectId}'";
    
    // Mark the project as Completed in 'projects'
    $query11 = "UPDATE projects SET Status = 'Completed' WHERE Id = '{$ProjectId}'";
    
    $results = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query2);
    mysqli_query($conn, $query4);
    $results5 = mysqli_query($conn, $query5);
    mysqli_query($conn, $query7);
    mysqli_query($conn, $query8);
    $results9 = mysqli_query($conn, $query9);
    mysqli_query($conn, $query11);
    
    while ($row = mysqli_fetch_assoc($results)) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            $NewAmount = $row['Amount'] + $row2['Amount'];
            $query3 = "UPDATE associationcash SET Amount = '{$NewAmount}' WHERE Id = '0'";
            mysqli_query($conn, $query3);
        }
    }
    
    if (mysqli_num_rows($results5) > 0) {
        while ($row5 = mysqli_fetch_assoc($results5)) {
            $query6 = "
                INSERT INTO associationitems (ItemName, Quantity) VALUES ('{$row5['ItemName']}', '{$row5['Quantity']}')
            ";
            mysqli_query($conn, $query6);
        }
    }
    
    while ($row9 = mysqli_fetch_assoc($results9)) {
        $query10 = "UPDATE registeredmembers SET Availability = '1' WHERE Email = '{$row9['Email']}'";
        mysqli_query($conn, $query10);
    }
    
    echo "Project has been completed successfully!";