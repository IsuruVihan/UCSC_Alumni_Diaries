<?php
    
    include('../../session.php');
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    $RequestId = $_POST['RequestId'];
    
    $query = "UPDATE projectcashspendings SET Status='Rejected' WHERE Id='{$RequestId}'";
    $query2 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$ProjectId}' AND Email='{$_SESSION['Email']}' AND Type='Member'
    ";
    $query3 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$ProjectId}' AND Email='{$_SESSION['Email']}' AND Type='Coordinator'
    ";
    $query9 = "SELECT * FROM projectcashspendings WHERE ProjectId='{$ProjectId}'";
    
    mysqli_query($conn, $query);
       //notification
       $query12 = "SELECT Name FROM projects WHERE Id='{$ProjectId}'";  
       $results12 = mysqli_query($conn, $query12);
       $row12 = mysqli_fetch_assoc($results12); 

       $query13 = "SELECT Email FROM committeemembers WHERE ProjectId='{$ProjectId}' AND Type='Coordinator'";  
       $results13 = mysqli_query($conn, $query13);
       $row13 = mysqli_fetch_assoc($results13);
       
        
       $query14 = "SELECT SpentAmount FROM projectcashspendings WHERE ProjectId='{$ProjectId }'";  
       $results14 = mysqli_query($conn, $query14);
       $row14 = mysqli_fetch_assoc($results14);

       $query10 = "SELECT Email FROM registeredmembers WHERE AccType='TopBoard'";
       $results10 = mysqli_query($conn, $query10);
       
       if (mysqli_num_rows($results10) > 0) {
           while ($row10 = mysqli_fetch_assoc($results10)) {  
               $query11 = "
                    INSERT INTO notifications (Email,Message)
                    VALUES ('{$row10['Email']}','Rs.{$row14['SpentAmount']} cash spend request of {$row12['Name']} has been rejected by {$_SESSION['Email']}')
               ";
               mysqli_query($conn, $query11);
    
               // Activity
               $query16 = "
                    INSERT INTO activitylog (Email, Section, Activity)
                    VALUES ('{$_SESSION['Email']}', 'Projects - Ongoing', 'Rejected Cash spend request (ID): {$RequestId} of Project (ID): {$ProjectId}')
               ";
               mysqli_query($conn, $query16);
           }
       }
       $query12 = "INSERT INTO notifications (Email,Message)   
       VALUES ('{$row13['Email']}','Rs.{$row14['SpentAmount']} cash spend request of {$row12['Name']} has been rejected by {$_SESSION['Email']}')
       ";   
    mysqli_query($conn, $query12);
    $results2 = mysqli_query($conn, $query2);
    $results3 = mysqli_query($conn, $query3);
    $results9 = mysqli_query($conn, $query9);
    
    $isCommitteeMember = mysqli_num_rows($results2) > 0;
    $isCoordinator = mysqli_num_rows($results3) > 0;
    $isTBMember = $_SESSION['AccType'] == "TopBoard";
    
    echo "
        <tr>
            <th class='spend-approvals-h-1'>Amount (Rs.)</th>
            <th class='spend-approvals-h-2'>Description</th>
            <th class='spend-approvals-h-3'>Quotation</th>
            <th class='spend-approvals-h-4'>Timestamp</th>
            <th class='spend-approvals-h-5'>Status</th>
            <th class='spend-approvals-h-6'>Actions</th>
        </tr>
    ";
    
    if (mysqli_num_rows($results9) > 0) {
        $modalId = 0;
        while ($row9 = mysqli_fetch_assoc($results9)) {
            echo "
        <div id='cash-spend-approval-attachment-{$modalId}' class='modal'>
            <div class='modal-content'>
                <span class='close' onclick=CloseModal('{$modalId}')>&times;</span>
                <img
                    src='../uploads/projects-spend-cash-quotations/{$row9['BillSrc']}' alt='quotation' height='95%'
                /><br/>
                <a href='../uploads/projects-spend-cash-quotations/{$row9['BillSrc']}' download>Download</a>
            </div>
        </div>
                ";
            
            $Data2 = $ProjectId . ',' . $RequestId;
            if ($isTBMember) {
                echo "
        <tr>
            <td>{$row9['SpentAmount']}</td>
            <td>{$row9['Description']}</td>
            <td>
                <button id='myBtn' class='btn view-btn' onclick=OpenModal('{$modalId}') style='width: 100%'>
                    View
                </button>
            </td>
            <td>{$row9['Timestamp']}</td>
            <td>{$row9['Status']}</td>
                ";
                
                if ($row9['Status']=='Accepted' || $row9['Status']=='Rejected' || $row9['Status']=='Paid') {
                    echo "
            <td></td>
                    ";
                } elseif ($row9['Status']=='Pending') {
                    echo "
            <td>
                <button style='width: 100%' class='btn accept-btn' onclick=AcceptCashSpendRequest('$Data2')>
                    Accept
                </button>
                <button style='width: 100%' class='btn remove-btn' onclick=RejectCashSpendRequest('$Data2')>
                    Reject
                </button>
            </td>
                    ";
                }
                
                echo "
        </tr>
                ";
            } else {
                echo "
        <tr>
            <td>{$row9['SpentAmount']}</td>
            <td>{$row9['Description']}</td>
            <td>
                <button id='myBtn' class='btn view-btn' onclick=OpenModal('{$modalId}') style='width: 100%'>
                    View
                </button>
            </td>
            <td>{$row9['Timestamp']}</td>
            <td>{$row9['Status']}</td>
                ";
                
                if ($isCoordinator) {
                    if ($row9['Status']=='Accepted') {
                        echo "
            <td>
                <button style='width: 100%' class='btn accept-btn' onclick=PayCash('$Data2')>Pay</button>
                <button style='width: 100%' class='btn remove-btn' onclick=DeleteCashSpendRequest('$Data2')>
                    Delete
                </button>
            </td>
                        ";
                    } elseif ($row9['Status']=='Pending') {
                        echo "
            <td>
                <button style='width: 100%' class='btn remove-btn' onclick=DeleteCashSpendRequest('$Data2')>
                    Delete
                </button>
            </td>
                        ";
                    } elseif ($row9['Status']=='Rejected' || $row9['Status']=='Paid') {
                        echo "
            <td></td>
                        ";
                    }
                } elseif ($isCommitteeMember) {
                    echo "
            <td></td>
                    ";
                }
                
                echo "
        </tr>
                ";
            }
            $modalId++;
        }
         
    } else {
        echo "
        <tr>
            <td colspan='6'>No data</td>
        </tr>
        ";
    }