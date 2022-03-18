<?php
    
    include('../../session.php');
    include('../../../db/db-conn.php');
    
    $ProjectId = $_POST['ProjectId'];
    $SenderEmail = $_POST['SenderEmail'];
    $Message = str_replace("'", "\'", $_POST['Message']);
    
    $query = "
        INSERT INTO committeechatmessages (ProjectId, SenderEmail, Message, PicSrc)
        VALUES ('{$ProjectId}', '{$SenderEmail}', '{$Message}', NULL)
    ";
    mysqli_query($conn, $query);
    
    // Activity
    $query10 = "
        INSERT INTO activitylog (Email, Section, Activity)
        VALUES ('{$_SESSION['Email']}', 'Projects - Ongoing', 'Sent a chat message in Project (ID): {$ProjectId} chat')
    ";
    mysqli_query($conn, $query10);
    
    $query2 = "
        SELECT Id, SenderEmail, Message, committeechatmessages.PicSrc, Timestamp, FirstName FROM committeechatmessages
        INNER JOIN registeredmembers on committeechatmessages.SenderEmail = registeredmembers.Email
        ORDER BY Timestamp
    ";
    $results2 = mysqli_query($conn, $query2);

    while ($row2 = mysqli_fetch_assoc($results2)) {
        if ($row2['SenderEmail']==$_SESSION['Email']) {
            echo "
                <div class='sent-message-line'>
                    <div class='sent-message'>
                        <div class='delete-msg-container'>
                            <i
                                class='fas fa-times-circle delete-msg-icon'
                                onclick=DeleteChatMessage('{$row2['Id']}')
                            ></i>
                        </div>
            ";
            if (!empty($row2['Message'])) {
                echo "
                        <div class='content'>{$row2['Message']}</div>
                ";
            }
            if (!empty($row2['PicSrc'])) {
                echo "
                        <img
                            src='../../../uploads/projects-chat-attachments/{$row2['PicSrc']}'
                            width='100%'
                            alt='attachment'
                        />
                ";
            }
            echo "
                        <div class='time'>{$row2['Timestamp']}</div>
                    </div>
                </div>
            ";
        } else {
            echo "
                <div class='received-message-line'>
                    <div class='received-message'>
                        <div class='sender-name'>{$row2['FirstName']}</div>
            ";
            if (!empty($row2['Message'])) {
                echo "
                            <div class='content'>{$row2['Message']}</div>
                ";
            }
            if (!empty($row2['PicSrc'])) {
                echo "
                            <img
                                src='../../../uploads/projects-chat-attachments/{$row2['PicSrc']}'
                                width='100%'
                                alt='attachment'
                            />
                ";
            }
            echo "
                            <div class='time'>{$row2['Timestamp']}</div>
                        </div>
                    </div>
            ";
        }
    }