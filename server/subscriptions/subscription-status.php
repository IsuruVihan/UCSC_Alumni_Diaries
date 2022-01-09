<?php

include('../../db/db-conn.php');

$query = "SELECT FirstName, LastName, Email, SubscriptionDue, Batch, SubscriptionType, NIC, PicSrc FROM registeredmembers";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $query2 = "SELECT * FROM bannedaccounts WHERE Email='{$row['Email']}'";
        $results2 = mysqli_query($conn, $query2);
        if (mysqli_num_rows($results2) > 0) {
            if (date("Y-m-d h:i:s") < $row['SubscriptionDue']) {
                $PaymentStatus = 'Paid';
            }else {
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
}

    
        



