<?php

include('../../db/db-conn.php');

$query = "SELECT FirstName, LastName, Email, SubscriptionDue, Batch, SubscriptionType FROM registeredmembers";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {

    while ($row = mysqli_fetch_assoc($results)) {
        if (date("Y-m-d h:i:s") < $row['SubscriptionDue']) { 
            $PaymentStatus = 'Paid';
        } else { 
            $PaymentStatus = 'NotPaid';
        }
        echo"
        <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class='img' src='../assets/images/user-default.png' width='100%' height=''
                                 class='user-pic' alt='user-pic'/>
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <label class='alllabels'> ID </label>
                                <div class='namesecond'> ID
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
                                <div class='ban'>
                                    <button class='ban-btn'> Ban
                                    </button>
                                </div>
                                <div class='unban'>
                                    <button class='unban-btn'> Unban
                                    </button>
                                </div>
                            </div>
                        </div> 
                    </div>
        ";
    }
}else {
    echo "

    <div class='flexbox-item'>
        <p class='request-id'>No data</p>
    </div>

    ";
}

