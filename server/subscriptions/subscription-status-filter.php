<?php

include('../../db/db-conn.php');

$FirstName = trim($_POST['FirstName']);
$LastName = trim($_POST['LastName']);
$Batch = $_POST['Batch'];
$SubscriptionType = $_POST['SubscriptionType'];
$Email = trim($_POST['Email']);
$PaymentStatus = $_POST['PaymentStatus'];


$query = "SELECT FirstName, LastName, Email, SubscriptionDue, Batch, SubscriptionType, NIC, PicSrc FROM registeredmembers";

if (!empty($FirstName)) {
    $query = $query . " WHERE FirstName LIKE '{$FirstName}%'";
}

if (!empty($LastName)) {
    if (!empty($FirstName)) {
        $query = $query . " AND LastName LIKE '{$LastName}%'";
    } else {
        $query = $query . " WHERE LastName LIKE '{$LastName}%'";
    }
}

if ($Batch !== 'All') {
    if (!empty($FirstName) || !empty($LastName)) {
        $query = $query . " AND Batch='{$Batch}'";
    } else {
        $query = $query . " WHERE Batch='{$Batch}'";
    }
}


if ($SubscriptionType !== 'All') {
    if (!empty($FirstName) || !empty($LastName) || ($Batch !== 'All')) {
        $query = $query . " AND SubscriptionType='{$SubscriptionType}'";
    } else {
        $query = $query . " WHERE SubscriptionType='{$SubscriptionType}'";
    }
}

if (!empty($Email)) {
    if (!empty($FirstName) || !empty($LastName) || ($Batch !== 'All') || ($SubscriptionType !== 'All')) {
        $query = $query . " AND Email LIKE '{$Email}%'";
    } else {
        $query = $query . " WHERE Email LIKE '{$Email}%'";
    }
}

$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $query2 = "SELECT * FROM bannedaccounts WHERE Email='{$row['Email']}'";
        $results2 = mysqli_query($conn, $query2);
        if (mysqli_num_rows($results2) > 0) {
            
            if (date("Y-m-d h:i:s") < $row['SubscriptionDue']) {
                $PaymentStatus2 = 'Paid';
            }else {
                $PaymentStatus2 = 'NotPaid';
            }
            echo"
            <div class='flexbox-item3'>
            <input type='text' value='{$PaymentStatus}' id='PaymentStatus-{$row['Email']}' style='display: none'/>
                            <div class='profilepic-col2'>
                                <img class='img' src={$row['PicSrc']} width='100%' height=''
                                     class='user-pic' alt='user-pic'/>
                            </div>
                            <div class='col2-col2'>
                                <div class='ids'>
                                    <label class='alllabels'> NIC </label>
                                    <div class='namesecond'> {$row['NIC']}
                                    </div>
                                </div>
                                <div class='firstname-right'>
                                    <label class='alllabels'> First Name </label>
                                    <div class='namesecond'> {$row['FirstName']}
                                    </div>
                                </div>
                                <div class='batch-right'>
                                    <label class='alllabels'> Batch </label>
                                    <div class='namesecond'> {$row['Batch']}
                                    </div>
                                </div>
                            </div> 
                            <div class='col3-col2'>
                                <div class='email-right'>
                                    <label class='alllabels'> Email </label>
                                    <div class='namesecond'> {$row['Email']}
                                    </div>
                                </div>
                                <div class='lastname-right'>
                                    <label class='alllabels'> Last Name </label>
                                    <div class='namesecond'> {$row['LastName']}
                                    </div>
                                </div>
                                <div class='batch-col2'>
                                    <label class='alllabels'> Subscription Type </label>
                                    <div class='namesecond'> {$row['SubscriptionType']}
                                    </div>
                                </div>
                            </div> 
                            <div class='col4-col2'>
                                <div class='duedate'>
                                    <label class='alllabels'> Due Date </label>
                                    <div class='namesecond'> {$row['SubscriptionDue']}
                                    </div>
                                </div>
                                <div class='payment'>
                                    <label class='alllabels'> Payment Status </label>
                                    <div class='namesecond'> {$PaymentStatus}
                                    </div>
                                </div>
                                <div class='ban-unban'>
                                    <div class='unban'>
                                        <button class='unban-btn' onclick=UnBanbtn('{$row['Email']}')> Unban
                                        </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
            ";
        }else {
            if (date("Y-m-d h:i:s") < $row['SubscriptionDue']) { 
                $PaymentStatus = 'Paid';
            } else { 
                $PaymentStatus = 'Not Paid';
            }
            echo"
            <div class='flexbox-item3'>
                            <div class='profilepic-col2'>
                                <img class='img' src={$row['PicSrc']} width='100%' height=''
                                     class='user-pic' alt='user-pic'/>
                            </div>
                            <div class='col2-col2'>
                                <div class='ids'>
                                    <label class='alllabels'> NIC </label>
                                    <div class='namesecond'> {$row['NIC']}
                                    </div>
                                </div>
                                <div class='firstname-right'>
                                    <label class='alllabels'> First Name </label>
                                    <div class='namesecond'> {$row['FirstName']}
                                    </div>
                                </div>
                                <div class='batch-right'>
                                    <label class='alllabels'> Batch </label>
                                    <div class='namesecond'> {$row['Batch']}
                                    </div>
                                </div>
                            </div> 
                            <div class='col3-col2'>
                                <div class='email-right'>
                                    <label class='alllabels'> Email </label>
                                    <div class='namesecond'> {$row['Email']}
                                    </div>
                                </div>
                                <div class='lastname-right'>
                                    <label class='alllabels'> Last Name </label>
                                    <div class='namesecond'> {$row['LastName']}
                                    </div>
                                </div>
                                <div class='batch-col2'>
                                    <label class='alllabels'> Subscription Type </label>
                                    <div class='namesecond'> {$row['SubscriptionType']}
                                    </div>
                                </div>
                            </div> 
                            <div class='col4-col2'>
                                <div class='duedate'>
                                    <label class='alllabels'> Due Date </label>
                                    <div class='namesecond'> {$row['SubscriptionDue']}
                                    </div>
                                </div>
                                <div class='payment'>
                                    <label class='alllabels'> Payment Status </label>
                                    <div class='namesecond'> {$PaymentStatus}
                                    </div>
                                </div>
                                <div class='ban-unban'>
                                    <div class='unban'>
                                        <button class='ban-btn' onclick=Banbtn('{$row['Email']}')> Ban
                                        </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
            ";
        }
    }
} else {
    echo "<div class='flexbox-item3'>No data</div>";
}
