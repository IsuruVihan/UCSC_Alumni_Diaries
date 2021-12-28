<?php
    
    session_start();
    include('../../db/db-conn.php');
    
    $query = "SELECT COUNT(Email) AS MemberCount FROM registeredmembers";
    $query2 = "SELECT COUNT(Id) AS CompletedProjectCount FROM projects WHERE Status = 'Completed'";
    $query3 = "
        SELECT COUNT(Id) AS NotViewedNotificationCount FROM notifications
        WHERE Email = '{$_SESSION['Email']}' AND Status = 'NotViewed'
    ";
    $query4 = "
        SELECT COUNT(ProjectId) AS InvolvedProjectsCount FROM committeemembers WHERE Email = '{$_SESSION['Email']}'
    ";
    $query5 = "SELECT Email, FirstName, LastName, CashDonated FROM registeredmembers ORDER BY CashDonated DESC LIMIT 5";
    
    $results = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query2);
    $results3 = mysqli_query($conn, $query3);
    $results4 = mysqli_query($conn, $query4);
    $results5 = mysqli_query($conn, $query5);
    
    while ($row = mysqli_fetch_assoc($results)) {
        while ($row2 = mysqli_fetch_assoc($results2)) {
            while ($row3 = mysqli_fetch_assoc($results3)) {
                while ($row4 = mysqli_fetch_assoc($results4)) {
                    echo "
                        <div class='section-1'>
                            <div class='card c-1'>
                                <div class='title'>Registered Members</div>
                                <div class='count'>{$row['MemberCount']}</div>
                            </div>
                            <div class='card c-2'>
                                <div class='title'>Completed Projects</div>
                                <div class='count'>{$row2['CompletedProjectCount']}</div>
                            </div>
                            <div class='card c-3'>
                                <div class='title'>Notifications</div>
                                <div class='count'>{$row3['NotViewedNotificationCount']}</div>
                            </div>
                            <div class='card c-4'>
                                <div class='title'>My Projects</div>
                                <div class='count'>{$row4['InvolvedProjectsCount']}</div>
                            </div>
                        </div>
                        <div class='section-2'>
                            <div class='top'>
                                Top Donors
                            </div>
                    ";
                    
                    while ($row5 = mysqli_fetch_assoc($results5)) {
                        echo "
                            <div class='result r-{$row5['Email']}'>
                                <div class='name'>{$row5['FirstName']} {$row5['LastName']}</div>
                                <div class='name'>LKR {$row5['CashDonated']}</div>
                            </div>
                        ";
                    }
                    
                    echo "
                        </div>
                    ";
                }
            }
        }
    }