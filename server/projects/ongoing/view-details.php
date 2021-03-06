<?php
    
    include('../../session.php');
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    
    $query = "SELECT * FROM projects WHERE Id='{$Id}'";
    $query2 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$Id}' AND Email='{$_SESSION['Email']}' AND Type='Member'
    ";
    $query3 = "
        SELECT * FROM committeemembers
        WHERE ProjectId='{$Id}' AND Email='{$_SESSION['Email']}' AND Type='Coordinator'
    ";
    $query4 = "
        SELECT FirstName, LastName, PicSrc, registeredmembers.Email
        FROM registeredmembers INNER JOIN committeemembers ON committeemembers.Email=registeredmembers.Email
        WHERE committeemembers.ProjectId='{$Id}' AND committeemembers.Type='Coordinator'
    ";
    $query5 = "
        SELECT FirstName, LastName, PicSrc, registeredmembers.Email
        FROM registeredmembers INNER JOIN committeemembers ON committeemembers.Email=registeredmembers.Email
        WHERE committeemembers.ProjectId='{$Id}' AND committeemembers.Type='Member'
    ";
    $query6 = "
        SELECT Id, SenderEmail, Message, committeechatmessages.PicSrc, Timestamp, FirstName FROM committeechatmessages
        INNER JOIN registeredmembers on committeechatmessages.SenderEmail = registeredmembers.Email
        ORDER BY Timestamp
    ";
    $query7 = "SELECT Amount FROM projectcash WHERE ProjectId='{$Id}'";
    $query8 = "SELECT SpentAmount FROM projectcashspendings WHERE ProjectId='{$Id}' AND Status='Paid'";
    $query9 = "SELECT * FROM projectcashspendings WHERE ProjectId='{$Id}'";
    $query10 = "SELECT SpentAmount, Description, BillSrc, Timestamp FROM projectcashspendings WHERE ProjectId='{$Id}' AND Status = 'Paid'";
//    $query11 = "
//        SELECT projectitems.Id, ItemName, Quantity, Status FROM projectitems
//        LEFT JOIN projectitemspendings
//        ON projectitems.Id = projectitemspendings.ItemId
//        WHERE ProjectId='{$Id}'
//    ";
    $query11 = "SELECT Id, ItemName, Quantity FROM projectitems WHERE ProjectId='{$Id}'";
    $query12 = "SELECT Id, ItemName FROM projectitems WHERE ProjectId='{$Id}' AND Quantity > '0'";
    $query13 = "
        SELECT projectitemspendings.Id, ItemName, SpentQuantity, Description, BillSrc, Status, Timestamp
        FROM projectitemspendings INNER JOIN projectitems ON projectitemspendings.ItemId = projectitems.Id
        WHERE ProjectId='{$Id}'
    ";
    $query14 = "
        SELECT projectitemspendings.Id, ItemName, SpentQuantity, Description, BillSrc, Timestamp
        FROM projectitemspendings
        INNER JOIN projectitems ON projectitems.Id = projectitemspendings.ItemId
        WHERE ProjectId = '{$Id}' AND Status = 'Paid'
    ";
    
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
    
    $isCommitteeMember = mysqli_num_rows($results2) > 0;
    $isCoordinator = mysqli_num_rows($results3) > 0;
    $isTBMember = $_SESSION['AccType'] == "TopBoard";
    
    while ($row = mysqli_fetch_assoc($results)) {
        echo "
            <div class='row-1'>
                <div class='link clicked' id='link-1' onclick=ClickLink1('link-1')>Details</div>
                <div class='link clicked' id='link-2' onclick=ClickLink1('link-2')>Committee</div>
        ";
        
        if ($isCommitteeMember || $isCoordinator) {
            echo "
                <div class='link clicked' id='link-3' onclick=ClickLink1('link-3')>Chat</div>
            ";
        } else {
            echo "
                <div class='link clicked' id='link-3' style='display: none' onclick=ClickLink1('link-3')>Chat</div>
            ";
        }
        
        if ($isCommitteeMember || $isCoordinator || $isTBMember) {
            echo "
                <div class='link clicked' id='link-4' onclick=ClickLink1('link-4')>Assets</div>
            ";
        } else {
            echo "
                <div class='link clicked' id='link-4' style='display: none' onclick=ClickLink1('link-4')>Assets</div>
            ";
        }
    
        if ($isTBMember) {
            echo "
                <div class='link clicked' id='link-5' onclick=ClickLink1('link-5')>Actions</div>
            ";
        } else {
            echo "
                <div class='link clicked' id='link-5' style='display: none' onclick=ClickLink1('link-5')>Actions</div>
            ";
        }
        
        echo "
            </div>
            <div name='ongoing-projects-iframe' class='row-2' id='row-2'>
                <div class='details' id='details'>
                    <div class='row-a'>
                        <div class='set'>
                            <label for='p-id' class='label'>Project Id</label>
                            <div id='p-id' class='data'>
                                <p>{$row['Id']}</p>
                            </div>
                        </div>
                        <div class='set'>
                            <label for='p-start' class='label'>Started on</label>
                            <div id='p-start' class='data'>
                                <p>{$row['Timestamp']}</p>
                            </div>
                        </div>
                    </div>
                    <div class='set-2'>
                        <label for='p-name' class='label'>Project Name</label>
                        <div id='p-name' class='data-2'>
                            <p>{$row['Name']}</p>
                        </div>
                    </div>
                    <div class='set-3'>
                        <label for='p-description' class='label'>Project Description</label>
                        <div id='p-description' class='data-3'>
                            <p>{$row['Description']}</p>
                        </div>
                    </div>
                </div>
                <div class='card-commitee project-committee' id='committee-members'>
                    <div class='title'>Coordinator</div>
        ";
        
        while ($row4 = mysqli_fetch_assoc($results4)) {
            echo "
                    <div class='coord'>
            ";
            
            if ($row4['PicSrc'] == 'user-default.png') {
                echo "
                        <img
                            src='../assets/images/user-default.png'
                            height='100%'
                            alt='user'
                            class='coord-pic'
                        />
                ";
            } else {
                echo "
                        <img
                            src='../uploads/profile-pics/{$row4['PicSrc']}'
                            height='100%'
                            alt='user'
                            class='coord-pic'
                        />
                ";
            }
            
            echo "
                        <div>{$row4['FirstName']} {$row4['LastName']}</div>
                        <div>{$row4['Email']}</div>
                    </div>
            ";
        }
        
        echo "
                    <div class='title'>Members</div>
                    <div class='results'>
        ";
        
        if (mysqli_num_rows($results5) > 0) {
            while ($row5 = mysqli_fetch_assoc($results5)) {
                echo "
                        <div class='result2'>
                ";
    
                if ($row5['PicSrc'] == 'user-default.png') {
                    echo "
                        <img
                            src='../assets/images/user-default.png'
                            height='100%'
                            alt='user'
                            class='coord-pic'
                        />
                    ";
                } else {
                    echo "
                        <img
                            src='../uploads/profile-pics/{$row5['PicSrc']}'
                            height='100%'
                            alt='user'
                            class='coord-pic'
                        />
                    ";
                }
                
                echo "
                            <div>{$row5['FirstName']} {$row5['LastName']}</div>
                            <div>{$row5['Email']}</div>
                        </div>
                ";
            }
        } else {
            echo "
                        <div class='result2'>
                            <div class='lname'>No data</div>
                        </div>
            ";
        }
        
        echo "
                    </div>
                </div>
                <div class='card-chat committee-chat' id='committee-chat'>
                    <div class='results3' id='message-list'>
        ";
        
        if (mysqli_num_rows($results6) > 0) {
            while ($row6 = mysqli_fetch_assoc($results6)) {
                if ($row6['SenderEmail']==$_SESSION['Email']) {
                    echo "
                        <div class='sent-message-line'>
                            <div class='sent-message'>
                                <div class='delete-msg-container'>
                                    <i
                                        class='fas fa-times-circle delete-msg-icon'
                                        onclick=DeleteChatMessage('{$row6['Id']}')
                                    ></i>
                                </div>
                    ";
                    if (!empty($row6['Message'])) {
                        echo "
                                <div class='content'>{$row6['Message']}</div>
                        ";
                    }
                    if (!empty($row6['PicSrc'])) {
                        echo "
                                <img
                                    src='../../../uploads/projects-chat-attachments/{$row6['PicSrc']}'
                                    width='100%'
                                    alt='attachment'
                                />
                        ";
                    }
                    echo "
                                <div class='time'>{$row6['Timestamp']}</div>
                            </div>
                        </div>
                    ";
                } else {
                    echo "
                        <div class='received-message-line'>
                            <div class='received-message'>
                                <div class='sender-name'>{$row6['FirstName']}</div>
                    ";
                    if (!empty($row6['Message'])) {
                        echo "
                                <div class='content'>{$row6['Message']}</div>
                        ";
                    }
                    if (!empty($row6['PicSrc'])) {
                        echo "
                                <img
                                    src='../../../uploads/projects-chat-attachments/{$row6['PicSrc']}'
                                    width='100%'
                                    alt='attachment'
                                />
                        ";
                    }
                    echo "
                                <div class='time'>{$row6['Timestamp']}</div>
                            </div>
                        </div>
                    ";
                }
            }
        }
        
        $Data = $Id . ',' . $_SESSION['Email'];
        echo "
                    </div>
                    <div class='create-message-div'>
                        <textarea id='text-message-body' class='chat-message'></textarea>
                        <div class='button-set'>
                            <i
                                class='fas fa-paper-plane chat-icon send-icon'
                                onclick=SendChatMessage('{$Data}')
                            ></i>
                            <i class='fas fa-paperclip chat-icon attach-icon'></i>
                            <i class='fas fa-times-circle chat-icon clear-icon'></i>
                        </div>
                    </div>
                </div>
                <div class='assets' id='assets'>
                    <div class='container-1'>
                        <div
                            id='l-1'
                            href='./projects/ongoing/assets/cash.php'
                            class='iframe-link left clicked-link'
                            onclick=VisitLinkNav('l-1')
                        >Cash</div>
                        <div
                            id='l-2'
                            href='./projects/ongoing/assets/items.php'
                            class='iframe-link right'
                            onclick=VisitLinkNav('l-2')
                        >Items</div>
                    </div>
                    <div class='container-2' name='iframe'>
                        <div class='cash-cash' id='project-cash'>
                            <div class='cash-sec-1'>
                                <div
                                    id='l-1-1'
                                    class='cash-iframe-link left cash-clicked-link'
                                    onclick=VisitLink('l-1-1')
                                >Summary</div>
        ";
        
        if ($isCoordinator) {
            echo "
                                <div
                                    id='l-2-1'
                                    class='cash-iframe-link'
                                    onclick=VisitLink('l-2-1')
                                >Spend</div>
            ";
        } else {
            echo "
                                <div
                                    id='l-2-1'
                                    class='cash-iframe-link'
                                    style='display: none;'
                                    onclick=VisitLink('l-2-1')
                                >Spend</div>
            ";
        }
        
        echo "
                                <div
                                    id='l-3-1'
                                    class='cash-iframe-link'
                                    onclick=VisitLink('l-3-1')
                                >Approvals</div>
                                <div
                                    id='l-4-1'
                                    class='cash-iframe-link'
                                    onclick=VisitLink('l-4-1')
                                >Spent Records</div>
                            </div>
                            <div class='cash-sec-2' src='./cash/available.php'>
                                <div class='available-available' id='cash-summary'>
                                    <div class='available-card-1'>
                                        <div class='available-card-title'>Available Cash</div>
        ";
        
        while ($row7 = mysqli_fetch_assoc($results7)) {
            echo "
                                            <div class='available-value'>Rs. {$row7['Amount']}</div>
            ";
        }
        
        echo "
                                    </div>
                                    <div class='available-card-2'>
                                        <div class='available-card-title'>Spent Cash</div>
        ";
        
        $TotalSpentAmount = 0.00;
        if (mysqli_num_rows($results8) > 0) {
            while ($row8 = mysqli_fetch_assoc($results8)) {
                $TotalSpentAmount = $TotalSpentAmount + $row8['SpentAmount'];
            }
        }
        
        echo "
                                        <div class='available-value'>Rs. {$TotalSpentAmount}</div>
                                    </div>
                                    <div class='available-card-3'>
                                        <button
                                            class='available-btn available-filter-btn'
                                            onclick=GenRep1('{$Id}')
                                        >Generate Report</button>
                                    </div>
                                </div>
                                <form
                                    class='spend-spend'
                                    id='cash-spend'
                                    name='cash-spend'
                                    action='../server/projects/ongoing/spend-cash.php'
                                    method='post'
                                    enctype='multipart/form-data'
                                >
                                    <input
                                        id='project-id'
                                        name='project-id'
                                        type='text'
                                        style='display: none'
                                        value='{$Id}'
                                    />
                                    <div class='spend-group'>
                                        <label for='amount'>Amount (Rs.)</label>
                                        <input id='amount' name='amount' type='text' class='spend-input-field'/>
                                    </div>
                                    <div class='spend-group'>
                                        <label for='description'>Description</label>
                                        <input
                                            id='description'
                                            name='description'
                                            type='text'
                                            class='spend-input-field'
                                        />
                                    </div>
                                    <div class='spend-group'>
                                        <label for='quotation'>Quotation attachment</label>
                                        <br />
                                        <input
                                            id='quotation-attachment'
                                            name='quotation-attachment'
                                            type='file'
                                            class='spend-bill-input'
                                        />
                                    </div>
                                    <div class='spend-group'>
                                        <input
                                            type='submit'
                                            id='cash-spend-submit'
                                            name='cash-spend-submit'
                                            class='spend-spend-btn spend-button'
                                            value='Create spend request'
                                        />
                                    </div>
                                    <div class='spend-notice'>
                                        * Check the status of the spend request under the <b>Approvals</b> tab.
                                    </div>
                                </form>
                                <table id='cash-approvals'>
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
                                                src='../uploads/projects-spend-cash-quotations/{$row9['BillSrc']}'
                                                alt='quotation'
                                                height='95%'
                                            /><br/>
                                            <a
                                                href='../uploads/projects-spend-cash-quotations/{$row9['BillSrc']}'
                                                download
                                            >Download</a>
                                        </div>
                                    </div>
                ";
    
                $Data2 = $Id . ',' . $row9['Id'];
                if ($isTBMember) {
                    echo "
                                    <tr>
                                        <td>{$row9['SpentAmount']}</td>
                                        <td>{$row9['Description']}</td>
                                        <td>
                                            <button
                                                id='myBtn'
                                                class='btn view-btn'
                                                onclick=OpenModal('{$modalId}')
                                                style='width: 100%'
                                            >View</button>
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
                                            <button
                                                style='width: 100%'
                                                class='btn accept-btn'
                                                onclick=AcceptCashSpendRequest('$Data2')
                                            >Accept</button>
                                            <button
                                                style='width: 100%'
                                                class='btn remove-btn'
                                                onclick=RejectCashSpendRequest('$Data2')
                                            >Reject</button>
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
                                            <button
                                                id='myBtn'
                                                class='btn view-btn'
                                                onclick=OpenModal('{$modalId}')
                                                style='width: 100%'
                                            >View</button>
                                        </td>
                                        <td>{$row9['Timestamp']}</td>
                                        <td>{$row9['Status']}</td>
                    ";
                    
                    if ($isCoordinator) {
                        if ($row9['Status']=='Accepted') {
                            echo "
                                        <td>
                                            <button
                                                style='width: 100%'
                                                class='btn accept-btn'
                                                onclick=PayCash('$Data2')
                                            >Pay</button>
                                            <button
                                                style='width: 100%'
                                                class='btn remove-btn'
                                                onclick=DeleteCashSpendRequest('$Data2')
                                            >Delete</button>
                                        </td>
                            ";
                        } elseif ($row9['Status']=='Pending') {
                            echo "
                                        <td>
                                            <button
                                                style='width: 100%'
                                                class='btn remove-btn'
                                                onclick=DeleteCashSpendRequest('$Data2')
                                            >Delete</button>
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
        
        echo "
                                </table>
                                <div class='spent-records-spent-records' id='cash-spent-records'>
                                    <div class='spent-records-card-3'>
                                        <button
                                            class='spent-records-btn spent-records-filter-btn'
                                            onclick=GenRep1('{$Id}')
                                        >Generate Report</button>
                                    </div>
                                    <table>
                                        <tr class='spent-records-headings'>
                                            <th class='spent-records-h-1'>Amount (Rs.)</th>
                                            <th class='spent-records-h-2'>Description</th>
                                            <th class='spent-records-h-3'>Bill</th>
                                            <th class='spent-records-h-5'>Timestamp</th>
                                        </tr>
        ";
        
        if (mysqli_num_rows($results10) > 0) {
            $modalId2 = 0;
            while ($row10 = mysqli_fetch_assoc($results10)) {
                echo "
                                        <div id='cash-paid-attachment-{$modalId2}' class='modal'>
                                            <div class='modal-content'>
                                                <span class='close' onclick=CloseModal2('{$modalId2}')>&times;</span>
                                                <img
                                                    src='../uploads/projects-spend-cash-quotations/{$row10['BillSrc']}'
                                                    alt='quotation'
                                                    height='95%'
                                                /><br/>
                                                <a
                                                    href='../uploads/projects-spend-cash-quotations/{$row10['BillSrc']}'
                                                    download
                                                >Download</a>
                                            </div>
                                        </div>
                ";
                
                echo "
                                        <tr>
                                            <td>{$row10['SpentAmount']}</td>
                                            <td>{$row10['Description']}</td>
                                            <td>
                                                <button
                                                    id='myBtn'
                                                    class='btn view-btn'
                                                    onclick=OpenModal2('{$modalId2}')
                                                    style='width: 100%'
                                                >View</button>
                                            </td>
                                            <td>{$row10['Timestamp']}</td>
                                        </tr>
                ";
                $modalId2++;
            }
        } else {
            echo "
                                        <tr>
                                            <td colspan='4'>No data</td>
                                        </tr>
            ";
        }
        
        echo "
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class='item-outer-container' id='project-item'>
                            <div class='items-items'>
                                <div class='items-sec-1'>
                                    <div
                                        id='l-1-2'
                                        href='./items/available.php'
                                        class='items-iframe-link left items-clicked-link'
                                        onclick=VisitLinkItem('l-1-2')
                                    >Summary</div>
        ";
        
        if ($isCoordinator) {
            echo "
                                    <div
                                        id='l-2-2'
                                        href='./items/spend.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-2-2')
                                    >Spend</div>
            ";
        } else {
            echo "
                                    <div
                                        id='l-2-2'
                                        href='./items/spend.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-2-2')
                                        style='display: none'
                                    >Spend</div>
            ";
        }
        
        echo "
                                    <div
                                        id='l-3-2'
                                        href='./items/spend-approvals.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-3-2')
                                    >Approvals</div>
                                    <div
                                        id='l-4-2'
                                        href='./items/spent-records.php'
                                        class='items-iframe-link'
                                        onclick=VisitLinkItem('l-4-2')
                                    >Spent Records</div>
                                </div>
                                <div name='iframe-2' class='items-sec-2'>
                                    <div class='item-available-available' id='items-available'>
                                        <div class='item-available-card-3'>
                                            <button
                                                class='item-available-btn item-available-filter-btn'
                                                onclick=GenRep2('{$Id}')
                                            >Generate Report</button>
                                        </div>
                                        <table>
                                            <tr class='headings'>
                                                <th class='item-available-h-1'>Item Id</th>
                                                <th class='item-available-h-2'>Item Name</th>
                                                <th class='item-available-h-1'>Available Qty.</th>
                                            </tr>
        ";
        
        if (mysqli_num_rows($results11) > 0) {
            while ($row11 = mysqli_fetch_assoc($results11)) {
                echo "
                                            <tr>
                                                <td>{$row11['Id']}</td>
                                                <td>{$row11['ItemName']}</td>
                                                <td>{$row11['Quantity']}</td>
                                            </tr>
                ";
            }
        } else {
            echo "
                                            <tr>
                                                <td colspan='4'>No data</td>
                                            </tr>
            ";
        }
        
        echo "
                                        </table>
                                    </div>
                                    <form
                                        action='../server/projects/ongoing/create-item-spend-request.php'
                                        method='post'
                                        enctype='multipart/form-data'
                                        class='item-spend-spend'
                                        id='items-spend'
                                    >
                                        <div class='item-spend-parent-group'>
                                            <div class='item-spend-group item-spend-first'>
                                                <label for='id'>Item Id</label>
                                                <select
                                                    id='selected-item-id'
                                                    name='selected-item-id'
                                                    class='item-spend-input-field'
                                                    onchange=ChangeSelectedItem('1')
                                                >
                                                    <option>Select</option>
        ";
        
        if (mysqli_num_rows($results12) > 0) {
            while ($row12 = mysqli_fetch_assoc($results12)) {
                echo "
                                                    <option value='{$row12['Id']}'>{$row12['ItemName']}</option>
                ";
            }
        }
        
        echo "
                                                </select>
                                            </div>
                                            <div class='item-spend-group item-spend-middle' id='selected-item-name'>
                                                <label for='name'>Item Name</label>
                                                <input
                                                    id='selected-item-name-txt'
                                                    type='text'
                                                    class='item-spend-input-field'
                                                    disabled
                                                />
                                            </div>
                                            <div class='item-spend-group item-spend-last' id='selected-item-available'>
                                                <label for='available'>Available Quantity</label>
                                                <input
                                                    id='selected-item-available-txt'
                                                    type='text'
                                                    class='item-spend-input-field'
                                                    disabled
                                                />
                                            </div>
                                        </div>
                                        <div class='item-spend-parent-group'>
                                            <div class='item-spend-group item-spend-first'>
                                                <label for='spend'>Spend Quantity</label>
                                                <input
                                                    id='item-spend-qty'
                                                    name='item-spend-qty'
                                                    type='number'
                                                    min='1'
                                                    class='item-spend-input-field'
                                                />
                                            </div>
                                            <div class='item-spend-group item-spend-last-2'>
                                                <label for='description'>Description</label>
                                                <input
                                                    id='item-spend-description'
                                                    name='item-spend-description'
                                                    type='text'
                                                    class='item-spend-input-field'
                                                />
                                            </div>
                                        </div>
                                        <div class='item-spend-group'>
                                            <label for='quotation'>Quotation attachment</label>
                                            <br />
                                            <input
                                                id='item-spend-quotation'
                                                name='item-spend-quotation'
                                                type='file'
                                                class='item-spend-bill-input'
                                            />
                                        </div>
                                        <div class='item-spend-group'>
                                            <input
                                                type='submit'
                                                class='item-spend-spend-btn item-spend-button'
                                                value='Create spend request'
                                                id='item-spend-request-submit'
                                            />
                                        </div>
                                        <div class='item-spend-notice'>
                                            * Check the status of the spend request under the <b>Approvals</b> tab.
                                        </div>
                                    </form>
                                    <table id='item-spend-approval'>
                                        <tr>
                                            <th class='item-approval-h-1'>Id</th>
                                            <th class='item-approval-h-2'>Name</th>
                                            <th class='item-approval-h-1'>Qty</th>
                                            <th class='item-approval-h-3'>Description</th>
                                            <th class='item-approval-h-1'>Quotation</th>
                                            <th class='item-approval-h-2'>Status</th>
                                            <th class='item-approval-h-2'>Timestamp</th>
                                            <th class='item-approval-h-2'>Actions</th>
                                        </tr>
        ";
    
        if (mysqli_num_rows($results13) > 0) {
            $modalId3 = 0;
            while ($row13 = mysqli_fetch_assoc($results13)) {
                echo "
                                        <div id='item-spend-approval-bill-{$modalId3}' class='modal'>
                                            <div class='modal-content'>
                                                <span class='close' onclick=CloseModal3('{$modalId3}')>&times;</span>
                                                <img
                                                    src='../uploads/project-item-spend-request-quotations/{$row13['BillSrc']}'
                                                    alt='quotation'
                                                    height='95%'
                                                /><br/>
                                                <a
                                                    href='../uploads/project-item-spend-request-quotations/{$row13['BillSrc']}'
                                                    download
                                                >Download</a>
                                            </div>
                                        </div>
                ";
                
                echo "
                                        <tr>
                                            <td>{$row13['Id']}</td>
                                            <td>{$row13['ItemName']}</td>
                                            <td>{$row13['SpentQuantity']}</td>
                                            <td>{$row13['Description']}</td>
                                            <td>
                                                <button
                                                    id='myBtn'
                                                    class='btn view-btn'
                                                    onclick=OpenModal3('{$modalId3}')
                                                    style='width: 100%'
                                                >View</button>
                                            </td>
                                            <td>{$row13['Status']}</td>
                                            <td>{$row13['Timestamp']}</td>
                ";
    
                $Data3 = $Id . ',' . $row13['Id'];
                if ($isTBMember) {
                    if ($row13['Status']=='Pending') {
                        echo "
                                            <td>
                                                <button
                                                    style='width: 100%'
                                                    class='btn accept-btn'
                                                    onclick=AcceptItemSpendRequest('{$Data3}')
                                                >Accept</button>
                                                <button
                                                    style='width: 100%'
                                                    class='btn remove-btn'
                                                    onclick=RejectItemSpendRequest('{$Data3}')
                                                >Reject</button>
                                            </td>
                        ";
                    } elseif ($row13['Status']=='Rejected') {
                        echo "
                                            <td>
                                                <button
                                                    style='width: 100%'
                                                    class='btn accept-btn'
                                                    onclick=AcceptItemSpendRequest('{$Data3}')
                                                >Accept</button>
                                            </td>
                        ";
                    }
                } elseif ($isCoordinator) {
                    if ($row13['Status']=='Pending' || $row13['Status']=='Rejected') {
                        echo "
                                            <td>
                                                <button
                                                    style='width: 100%'
                                                    class='btn remove-btn'
                                                    onclick=DeleteItemSpendRequest('{$Data3}')
                                                >Delete</button>
                                            </td>
                        ";
                    } elseif ($row13['Status']=='Accepted') {
                        echo "
                                            <td>
                                                <button
                                                    style='width: 100%'
                                                    class='btn accept-btn'
                                                    onclick=SpendItem('{$Data3}')
                                                >Pay</button>
                                                <button
                                                    style='width: 100%'
                                                    class='btn remove-btn'
                                                    onclick=DeleteItemSpendRequest('{$Data3}')
                                                >Delete</button>
                                            </td>
                        ";
                    }
                }
                
                echo "
                                        </tr>
                ";
                $modalId3++;
            }
        } else {
            echo "
                                        <tr>
                                            <td colspan='7'>No data</td>
                                        </tr>
            ";
        }
        
        echo "
                                    </table>
                                    <div class='item-record-spent-records' id='item-spent-record'>
                                        <div class='item-record-card-3'>
                                            <button
                                                class='item-record-btn item-record-filter-btn'
                                                onclick=GenRep3('{$Id}')
                                            >Generate Report</button>
                                        </div>
                                        <table>
                                            <tr class='headings'>
                                                <th class='item-record-h-1'>Id</th>
                                                <th class='item-record-h-1'>Name</th>
                                                <th class='item-record-h-1'>Qty</th>
                                                <th class='item-record-h-2'>Description</th>
                                                <th class='item-record-h-1'>Quotation</th>
                                                <th class='item-record-h-5'>Timestamp</th>
                                            </tr>
        ";
        
        if (mysqli_num_rows($results14) > 0) {
            $modalId4 = 0;
            while ($row14 = mysqli_fetch_assoc($results14)) {
                echo "
                                            <div id='item-spent-bill-{$modalId4}' class='modal'>
                                                <div class='modal-content'>
                                                    <span class='close' onclick=CloseModal4('{$modalId4}')>&times;</span>
                                                    <img
                                                        src='../uploads/project-item-spend-request-quotations/{$row14['BillSrc']}'
                                                        alt='quotation'
                                                        height='95%'
                                                    /><br/>
                                                    <a
                                                        href='../uploads/project-item-spend-request-quotations/{$row14['BillSrc']}'
                                                        download
                                                    >Download</a>
                                                </div>
                                            </div>
                ";
                
                echo "
                                            <tr>
                                                <td>{$row14['Id']}</td>
                                                <td>{$row14['ItemName']}</td>
                                                <td>{$row14['SpentQuantity']}</td>
                                                <td>{$row14['Description']}</td>
                                                <td>
                                                    <button
                                                        id='myBtn'
                                                        class='btn view-btn'
                                                        onclick=OpenModal4('{$modalId4}')
                                                        style='width: 100%'
                                                    >View</button>
                                                </td>
                                                <td>{$row14['Timestamp']}</td>
                                            </tr>
                ";
            }
        } else {
            echo "
                                            <tr>
                                                <td colspan='6'>No data</td>
                                            </tr>
            ";
        }
        
        echo "
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='actions' id='action'>
                    <div class='message'>Complete the project by achieving project goals.</div>
                    <button class='button create-btn' onclick=CompleteProject('{$Id}')>
                        Complete Project
                    </button>
                    <br /><br /><br />
                    <div class='message'>Close the project without achieving project goals.</div>
                    <button class='button cancel-btn' onclick=CloseProject('{$Id}')>
                        Close Project
                    </button>
                </div>
            </div>
        ";
    }