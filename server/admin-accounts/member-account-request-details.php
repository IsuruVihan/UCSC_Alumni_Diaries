<?php
    include('../../db/db-conn.php');
    
    $request_id = $_POST['request_id'];
    
    $query = "SELECT * FROM memberaccountrequests WHERE Id='${request_id}'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            echo "
                <div class='details-title'>
                    Details
                </div>
                <div class='row-1'>
                    <div class='container-1'>
                        <!--
                        <div class='section-1'>
                            <img src='../assets/images/user-default.png' width='100%' class='user-pic' alt='user-pic'/>
                            <div class='account-type'>
                                Account Type
                            </div>
                        </div>
                        <div class='section-2'>
                            <div class='subscription-type'>
                                Subscription Type
                            </div>
                            <div class='due-date'>
                                Due Date
                            </div>
                            <button class='recharge-report-btn btn'>
                                Recharge Report
                            </button>
                        </div>
                        -->
                        <div class='section-3'>
                            <div class='sec-row-1'>
                                <button class='accept-btn btn'>Accept</button>
                                <button class='remove-btn btn'>Remove</button>
                            </div>
                            <!--
                            <div class='sec-row-2'>
                                <button class='ban-btn btn'>Ban</button>
                                <button class='unban-btn btn'>Unban</button>
                            </div>
                            -->
                        </div>
                    </div>
                    <div class='container-2'>
                        <div class='full-name details-field'>${row['NameWithInitials']}</div>
                        <div class='middle-section'>
                            <div class='mid-sec-row'>
                                <div class='first-name details-field'>${row['FirstName']}</div>
                                <div class='last-name details-field'>${row['LastName']}</div>
                            </div>
                            <div class='mid-sec-row'>
                                <div class='gender details-field'>${row['Gender']}</div>
                                <div class='batch details-field'>${row['Batch']}</div>
                            </div>
                            <div class='mid-sec-row'>
                                <div class='nic details-field'>${row['NIC']}</div>
                                <div class='contact-number details-field'>${row['ContactNumber']}</div>
                            </div>
                        </div>
                        <div class='email details-field'>${row['Email']}</div>
                        <div class='address details-field'>${row['Address']}</div>
                    </div>
                </div>
                <!--
                <div class='row-2'>
                    <div class='contributions'>
                        <div class='contributions-title'>
                            Contributions
                        </div>
                        <div class='list'>
                            <div class='result'>
                                <div class='project-name'>
                                    Project Name
                                </div>
                                <div class='amount'>
                                    Amount
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='involved-projects'>
                        <div class='involved-projects-title'>
                            Involved Projects
                        </div>
                        <div class='list'>
                            <div class='result'>
                                <div class='project-name'>
                                    Project Name
                                </div>
                                <div class='position'>
                                    Position
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            ";
        }
    }