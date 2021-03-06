<?php

include('../../db/db-conn.php');

$query = "SELECT Id, FirstName, LastName, Batch, registeredmembers.Email, Timestamp, PayslipSrc, 
    Amount, SubType, PicSrc, SubscriptionDue FROM subscriptionsdone INNER JOIN registeredmembers 
    ON registeredmembers.Email = subscriptionsdone.Email WHERE Status = 'Pending'";

$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) { 
    while ($row = mysqli_fetch_assoc($results)) {

        echo"
            <div class='flexbox-item'>
                            <div class='profilepic'>
                                <img class='img' src='../uploads/profile-pics/{$row['PicSrc']}' width='100%' height=''
                                     class='user-pic' alt='user-pic'/>
                            </div>
                            <div class='col2'>
                                <div class='name'>
                                    <div class='first-name'>
                                        <label class='alllabels'> First Name </label>
                                        <div class='namefirst list-details'> {$row['FirstName']}
                                        </div>
                                    </div>
                                    <div class='last-name'>
                                        <label class='alllabels'> Last Name </label>
                                        <div class='namesecond list-details'> {$row['LastName']}
                                        </div>
                                    </div>
                                </div>
                                <div class='e-mail'>
                                    <label class='alllabels'> Email </label>
                                    <div class='mail'> {$row['Email']}
                                    </div>
                                </div>
                                <div class='bill'>
                                    <label class='alllabels'> Bill </label>
                                    <div class='bill-attachment'> {$row['PayslipSrc']}
                                    </div>
                                </div>
                            </div> 
                            <div class='col3'>
                                <div class='batch-year'>
                                    <label class='alllabels'> Batch </label>
                                    <div class='b'> {$row['Batch']}
                                    </div>
                                </div>
                                <div class='timestamp'>
                                    <label class='alllabels'> Time </label>
                                    <div class='time'> {$row['Timestamp']}
                                    </div>
                                </div>
                                <div class='accept'>
                                    <button class='accept-btn' onclick=Acceptbtn('{$row['Id']}')> Accept </button>
                                </div>
                            </div> 
                            <div class='col4'>
                                <div class='subbutton'>
                                    <label class='alllabels'> Subscription Type </label>
                                    <div class='substype'> {$row['SubType']}
                                    </div>
                                </div>
                                <div class='price'>
                                    <label class='alllabels'> Amount </label>
                                    <div class='amount'> {$row['Amount']}
                                    </div>
                                </div>
                                <div class='reject'>
                                    <button class='reject-btn' onclick=Rejectbtn('{$row['Id']}')> Reject
                                    </button>
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

    