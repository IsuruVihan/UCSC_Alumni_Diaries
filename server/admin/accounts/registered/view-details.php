<?php

include('../../../../db/db-conn.php');

$Email = trim($_POST['Email']);

$query = "SELECT * FROM registeredmembers WHERE Email='{$Email}'";
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($results)) {
    $query2 = "SELECT Email FROM bannedaccounts WHERE Email='{$Email}'";
    $results2 = mysqli_query($conn, $query2);
    if (mysqli_num_rows($results2) > 0) {
        echo "
            <div class='details-title'>Registered Member (Banned) - Details</div>
            <div class='row-1'>
                <div class='container-1'>
                    <div class='section-1'>
                        <img src='{$row['PicSrc']}' width='100%' class='user-pic' alt='user-pic'/>
                        <div class='account-type'>{$row['AccType']}</div>
                    </div>
                    <div class='section-2'>
                        <div class='subscription-type'>{$row['SubscriptionType']}</div>
                        <div class='due-date'>{$row['SubscriptionDue']}</div>
                        <button class='recharge-report-btn btn'>Recharge Report</button>
                    </div>
                    <div class='section-3'>
                        <!--
                        <div class='sec-row-1'>
                            <button class='accept-btn btn'>Accept</button>
                            <button class='remove-btn btn'>Remove</button>
                        </div>
                        -->
                        <div class='sec-row-2'>
                            <!--
                            <button class='ban-btn btn'>Ban</button>
                            -->
                            <button class='remove-btn btn'>Remove</button>
                            <button class='unban-btn btn'>Unban</button>
                        </div>
                    </div>
                </div>
                <div class='container-2'>
                    <div class='full-name details-field'>{$row['NameWithInitials']}</div>
                    <div class='middle-section'>
                        <div class='mid-sec-row'>
                            <div class='first-name details-field'>{$row['FirstName']}</div>
                            <div class='last-name details-field'>{$row['LastName']}</div>
                        </div>
                        <div class='mid-sec-row'>
                            <div class='gender details-field'>{$row['Gender']}</div>
                            <div class='batch details-field'>{$row['Batch']}</div>
                        </div>
                        <div class='mid-sec-row'>
                            <div class='nic details-field'>{$row['NIC']}</div>
                            <div class='contact-number details-field'>{$row['ContactNumber']}</div>
                        </div>
                    </div>
                    <div class='email details-field'>{$row['Email']}</div>
                    <div class='address details-field'>{$row['Address']}</div>
                </div>
            </div>
            <div class='iframe-nav-projectContribution'>
                <div
                    class='contribution-iframe-link fontColorChange'
                    id='contributions'
                    onclick=TabChanger('member-contribution')
                >Contributions</div>
                <div
                    class='contribution-iframe-link'
                    id='involved-projects'
                    onclick=TabChanger('member-involved-projects')
                >Projects</div>
            </div>
            <div class='iframe-display-projectContribution'>
                <div class='contributions' id='member-contribution'>
                    <div class='list'>
                        <div class='result'>
                            <div class='project-name'>Project Name</div>
                            <div class='amount'>Amount</div>
                        </div>
                    </div>
                </div>
                <div class='involved-projects' id='member-involved-projects'>
                    <div class='list'>
                        <div class='result'>
                            <div class='project-name'>Project Name</div>
                            <div class='position'>Position</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    } else {
        echo "
            <div class='details-title'>Registered Member - Details</div>
            <div class='row-1'>
                <div class='container-1'>
                    <div class='section-1'>
                        <img src='{$row['PicSrc']}' width='100%' class='user-pic' alt='user-pic'/>
                        <div class='account-type'>{$row['AccType']}</div>
                    </div>
                    <div class='section-2'>
                        <div class='subscription-type'>{$row['SubscriptionType']}</div>
                        <div class='due-date'>{$row['SubscriptionDue']}</div>
                        <button class='recharge-report-btn btn'>Recharge Report</button>
                    </div>
                    <div class='section-3'>
                        <!--
                        <div class='sec-row-1'>
                            <button class='accept-btn btn'>Accept</button>
                            <button class='remove-btn btn'>Remove</button>
                        </div>
                        -->
                        <div class='sec-row-2'>
                            <button class='ban-btn btn'>Ban</button>
                            <button class='remove-btn btn'>Remove</button>
                            <!--
                            <button class='unban-btn btn'>Unban</button>
                            -->
                        </div>
                    </div>
                </div>
                <div class='container-2'>
                    <div class='full-name details-field'>{$row['NameWithInitials']}</div>
                    <div class='middle-section'>
                        <div class='mid-sec-row'>
                            <div class='first-name details-field'>{$row['FirstName']}</div>
                            <div class='last-name details-field'>{$row['LastName']}</div>
                        </div>
                        <div class='mid-sec-row'>
                            <div class='gender details-field'>{$row['Gender']}</div>
                            <div class='batch details-field'>{$row['Batch']}</div>
                        </div>
                        <div class='mid-sec-row'>
                            <div class='nic details-field'>{$row['NIC']}</div>
                            <div class='contact-number details-field'>{$row['ContactNumber']}</div>
                        </div>
                    </div>
                    <div class='email details-field'>{$row['Email']}</div>
                    <div class='address details-field'>{$row['Address']}</div>
                </div>
            </div>
            <div class='iframe-nav-projectContribution'>
                <div
                    class='contribution-iframe-link fontColorChange'
                    id='contributions'
                    onclick=TabChanger('member-contribution')
                >Contributions</div>
                <div
                    class='contribution-iframe-link'
                    id='involved-projects'
                    onclick=TabChanger('member-involved-projects')
                >Projects</div>
            </div>
            <div class='iframe-display-projectContribution'>
                <div class='contributions' id='member-contribution'>
                    <div class='list'>
                        <div class='result'>
                            <div class='project-name'>Project Name</div>
                            <div class='amount'>Amount</div>
                        </div>
                    </div>
                </div>
                <div class='involved-projects' id='member-involved-projects'>
                    <div class='list'>
                        <div class='result'>
                            <div class='project-name'>Project Name</div>
                            <div class='position'>Position</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}