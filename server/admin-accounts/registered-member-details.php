<?php
    include('../../db/db-conn.php');
    
    $member_email = $_POST['member_email'];
    
    $query = "SELECT * FROM registeredmembers WHERE Email='${member_email}'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            
            $query2 = "SELECT * FROM bannedaccounts WHERE Email='${row['Email']}'";
            $results2 = mysqli_query($conn, $query2);
            if (mysqli_num_rows($results2) > 0) {
                echo "
                    <div class='details-title'>
                        Details
                    </div>
                    <div class='row-1'>
                        <div class='container-1'>
                            <div class='section-1'>
                                <img src='${row['PicSrc']}' width='100%' class='user-pic' alt='user-pic'/>
                                <div class='account-type'>
                                    ${row['AccType']}
                                </div>
                            </div>
                            <div class='section-2'>
                                <div class='subscription-type'>
                                    ${row['SubscriptionType']}
                                </div>
                                <div class='due-date'>
                                    ${row['SubscriptionDue']}
                                </div>
                                <button class='recharge-report-btn btn'>
                                    Recharge Report
                                </button>
                            </div>
                            <div class='section-3'>
                                <div class='sec-row-1'>
                                    <!--
                                    <button class='accept-btn btn' onclick=AcceptRequest('')>Accept</button>
                                    -->
                                    <button class='remove-btn btn' onclick=RemoveMemberAccount('${row['Email']}')>
                                        Remove
                                    </button>
                                    <button onclick=UnbanMemberAccount('${row['Email']}') class='unban-btn btn'>
                                        Unban
                                    </button>
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
                    <div class='row-2'>
                        <div class='contributions'>
                            <div class='contributions-title'>
                                Contributions
                            </div>
                            <div class='list'>
                                <!--
                                <div class='result'>
                                    <div class='project-name'>
                                        Project Name
                                    </div>
                                    <div class='amount'>
                                        Amount
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class='involved-projects'>
                            <div class='involved-projects-title'>
                                Involved Projects
                            </div>
                            <div class='list'>
                                <!--
                                <div class='result'>
                                    <div class='project-name'>
                                        Project Name
                                    </div>
                                    <div class='position'>
                                        Position
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                ";
            } else {
                echo "
                    <div class='details-title'>
                        Details
                    </div>
                    <div class='row-1'>
                        <div class='container-1'>
                            <div class='section-1'>
                                <img src='${row['PicSrc']}' width='100%' class='user-pic' alt='user-pic'/>
                                <div class='account-type'>
                                    ${row['AccType']}
                                </div>
                            </div>
                            <div class='section-2'>
                                <div class='subscription-type'>
                                    ${row['SubscriptionType']}
                                </div>
                                <div class='due-date'>
                                    ${row['SubscriptionDue']}
                                </div>
                                <button class='recharge-report-btn btn'>
                                    Recharge Report
                                </button>
                            </div>
                            <div class='section-3'>
                                <div class='sec-row-1'>
                                    <!--
                                    <button class='accept-btn btn' onclick=AcceptRequest('')>Accept</button>
                                    -->
                                    <button class='remove-btn btn' onclick=RemoveMemberAccount('${row['Email']}')>
                                        Remove
                                    </button>
                                    <button onclick=BanMemberAccount('${row['Email']}') class='ban-btn btn'>
                                        Ban
                                    </button>
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
                    <div class='row-2'>
                        <div class='contributions'>
                            <div class='contributions-title'>
                                Contributions
                            </div>
                            <div class='list'>
                                <!--
                                <div class='result'>
                                    <div class='project-name'>
                                        Project Name
                                    </div>
                                    <div class='amount'>
                                        Amount
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class='involved-projects'>
                            <div class='involved-projects-title'>
                                Involved Projects
                            </div>
                            <div class='list'>
                                <!--
                                <div class='result'>
                                    <div class='project-name'>
                                        Project Name
                                    </div>
                                    <div class='position'>
                                        Position
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                ";
            }
        }
    }