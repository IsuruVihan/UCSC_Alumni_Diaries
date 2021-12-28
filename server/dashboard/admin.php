<?php
    
    session_start();
    include('../../db/db-conn.php');
    
    $query = "SELECT COUNT(Email) AS RegisteredMembersCount FROM registeredmembers";
    $query2 = "SELECT COUNT(Id) AS MemberAccountRequestsCount FROM memberaccountrequests WHERE isRejected = '0'";
    $query3 = "SELECT COUNT(Id) AS RejectedMemberAccountRequestsCount FROM memberaccountrequests WHERE isRejected = '1'";
    $query4 = "SELECT COUNT(Email) AS BannedMembersCount FROM bannedaccounts";
    $query5 = "SELECT COUNT(Id) AS NotStartedProjectsCount FROM projects WHERE Status = 'NotStartedYet'";
    $query6 = "SELECT COUNT(Id) AS OngoingProjectsCount FROM projects WHERE Status = 'Ongoing'";
    $query7 = "SELECT COUNT(Id) AS CompletedProjectsCount FROM projects WHERE Status = 'Completed'";
    $query8 = "SELECT COUNT(Id) AS ClosedProjectsCount FROM projects WHERE Status = 'Closed'";
    $query9 = "SELECT Amount FROM associationcash WHERE Id = '0'";
    $query10 = "SELECT Amount FROM cashdonations WHERE Status = 'Accepted'";
    $query11 = "SELECT Amount FROM subscriptionsdone WHERE Status = 'Accepted'";
    $query12 = "SELECT COUNT(Id) AS PendingSubscriptionsCount FROM subscriptionsdone WHERE Status = 'Pending'";
    $query13 = "SELECT COUNT(Id) AS PendingCashDonationsCount FROM cashdonations WHERE Status = 'Pending'";
    $query14 = "SELECT COUNT(Id) AS PendingItemDonationsCount FROM itemdonations WHERE Status = 'Pending'";
    $query15 = "SELECT COUNT(ID) AS SuggestionsCount FROM suggestions";
    $query16 = "SELECT COUNT(ID) AS PostReportsCount FROM reportsforposts";
    $query17 = "SELECT COUNT(ID) AS CommentReportsCount FROM reportsforcomments";
    
    $results = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query2);
    $results3 = mysqli_query($conn, $query3);
    $results4 = mysqli_query($conn, $query4);
    $results5 = mysqli_query($conn, $query5);
    $results6 = mysqli_query($conn, $query6);
    $results7 = mysqli_query($conn, $query7);
    $results8 = mysqli_query($conn, $query8);
    $results9 = mysqli_query($conn, $query9);
    $results10 = mysqli_query($conn, $query10);
    $results11 = mysqli_query($conn, $query11);
    $results12 = mysqli_query($conn, $query12);
    $results13 = mysqli_query($conn, $query13);
    $results14 = mysqli_query($conn, $query14);
    $results15 = mysqli_query($conn, $query15);
    $results16 = mysqli_query($conn, $query16);
    $results17 = mysqli_query($conn, $query17);
    
    echo "
        <div class='section-1 card-section'>
            <div class='card card-width-1'>
                <div class='title'>Registered Members</div>
    ";
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
                <div class='count'>{$row['RegisteredMembersCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-1'>
                <div class='title'>Account Requests</div>
    ";
    
    while ($row2 = mysqli_fetch_assoc($results2)) {
        echo "
                <div class='count'>{$row2['MemberAccountRequestsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-1'>
                <div class='title'>Rejected Requests</div>
    ";
    
    while ($row3 = mysqli_fetch_assoc($results3)) {
        echo "
                <div class='count'>{$row3['RejectedMemberAccountRequestsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-1'>
                <div class='title'>Banned Accounts</div>
    ";
    
    while ($row4 = mysqli_fetch_assoc($results4)) {
        echo "
                <div class='count'>{$row4['BannedMembersCount']}</div>
        ";
    }
    
    echo "
            </div>
        </div>
        <div class='section-2 card-section'>
            <div class='card card-width-1'>
                <div class='title'>Not started projects</div>
    ";
    
    while ($row5 = mysqli_fetch_assoc($results5)) {
        echo "
                <div class='count'>{$row5['NotStartedProjectsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-1'>
                <div class='title'>Ongoing<br/>Projects</div>
    ";
    
    while ($row6 = mysqli_fetch_assoc($results6)) {
        echo "
                <div class='count'>{$row6['OngoingProjectsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-1'>
                <div class='title'>Completed Projects</div>
    ";
    
    while ($row7 = mysqli_fetch_assoc($results7)) {
        echo "
                <div class='count'>{$row7['CompletedProjectsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-1'>
                <div class='title'>Closed<br/>Projects</div>
    ";
    
    while ($row8 = mysqli_fetch_assoc($results8)) {
        echo "
                <div class='count'>{$row8['ClosedProjectsCount']}</div>
        ";
    }
    
    echo "
            </div>
        </div>
        <div class='section-3 card-section'>
            <div class='card card-width-2'>
                <div class='title'>Available Cash<br/<b>(LKR)</b></div>
    ";
    
    while ($row9 = mysqli_fetch_assoc($results9)) {
        echo "
                <div class='count'>{$row9['Amount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-2'>
                <div class='title'>Cash Donation<br/<b>(LKR)</b></div>
    ";
    
    $Total = 0;
    while ($row10 = mysqli_fetch_assoc($results10)) {
        $Total += $row10['Amount'];
    }
    
    echo "
                <div class='count'>{$Total}</div>
            </div>
            <div class='card card-width-2'>
                <div class='title'>Subscriptions<br/<b>(LKR)</b></div>
    ";
    
    $Total2 = 0;
    while ($row11 = mysqli_fetch_assoc($results11)) {
        $Total2 += $row11['Amount'];
    }
    
    echo "
                <div class='count'>{$Total2}</div>
            </div>
            <div class='card card-width-2'>
                <div class='title'>Subscriptions to be accepted</div>
    ";
    
    while ($row12 = mysqli_fetch_assoc($results12)) {
        echo "
                <div class='count'>{$row12['PendingSubscriptionsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-2'>
                <div class='title'>Cash donations to be accepted</div>
    ";
    
    while ($row13 = mysqli_fetch_assoc($results13)) {
        echo "
                <div class='count'>{$row13['PendingCashDonationsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-2'>
                <div class='title'>Item donations to be accepted</div>
    ";
    
    while ($row14 = mysqli_fetch_assoc($results14)) {
        echo "
                <div class='count'>{$row14['PendingItemDonationsCount']}</div>
        ";
    }
    
    echo "
            </div>
        </div>
        <div class='section-4 card-section'>
            <div class='card card-width-3'>
                <div class='title'>Suggestions</div>
    ";
    
    while ($row15 = mysqli_fetch_assoc($results15)) {
        echo "
                <div class='count'>{$row15['SuggestionsCount']}</div>
        ";
    }
    
    echo ";
            </div>
            <div class='card card-width-3'>
                <div class='title'>Post Reports</div>
    ";
    
    while ($row16 = mysqli_fetch_assoc($results16)) {
        echo "
                <div class='count'>{$row16['PostReportsCount']}</div>
        ";
    }
    
    echo "
            </div>
            <div class='card card-width-3'>
                <div class='title'>Comment Reports</div>
    ";
    
    while ($row17 = mysqli_fetch_assoc($results17)) {
        echo "
                <div class='count'>{$row17['CommentReportsCount']}</div>
        ";
    }
    
    echo "
            </div>
        </div>
    ";