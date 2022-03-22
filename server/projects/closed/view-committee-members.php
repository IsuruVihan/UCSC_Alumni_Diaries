<?php
    
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    
    $query = "
        SELECT FirstName, LastName, PicSrc FROM registeredmembers INNER JOIN committeemembers
        ON registeredmembers.Email = committeemembers.Email WHERE ProjectId = '{$ProjectId}' AND Type = 'Member'
    ";
    
    $results = mysqli_query($conn, $query);
    
    echo "
        <div class='title'>
            Committee Members
        </div>
    ";
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div class='results'>
                <div class='result'>
                ";
                 if ($row['PicSrc']==='user-default.png') {
                                    echo "
                                    <img src='../assets/images/user-default.png' alt='coord-pic' height='100%'/>
                                    ";
                                } else {
                                    echo "
                                    <img src='../uploads/profile-pics/{$row['PicSrc']}' alt='coord-pic' height='100%'/>
                                    ";
                                }
                    echo"<div class='fname'>{$row['FirstName']}</div>
                    <div class='lname'>{$row['LastName']}</div>
                </div>
            </div>
            ";

    }