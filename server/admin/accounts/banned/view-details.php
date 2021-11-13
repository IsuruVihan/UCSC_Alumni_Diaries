<?php

include('../../../../db/db-conn.php');

$Email = trim($_POST['Email']);

$query3 = "
    SELECT projects.Name, committeemembers.Type
    FROM projects
    INNER JOIN committeemembers ON projects.Id=committeemembers.ProjectId
    WHERE projects.Status='Ongoing' OR projects.Status='Completed'
";
$results3 = mysqli_query($conn, $query3);

$query4 = "SELECT DonationFor, Amount FROM cashdonations WHERE DonorEmail={$Email}";
$results4 = mysqli_query($conn, $query4);

$query = "SELECT * FROM bannedaccounts INNER JOIN registeredmembers WHERE bannedaccounts.Email=registeredmembers.Email";
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($results)) {
    echo "
        <div class='details-title'><span style='color: #f5222d'>Registered Member (Banned)</span> - Details</div>
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
                    <div class='sec-row-2'>
                        <button class='remove-btn btn' onclick=RemoveBannedAccount('{$row['Email']}')>Remove</button>
                        <button class='unban-btn btn' onclick=UnbanBannedAccount('{$row['Email']}')>Unban</button>
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
    ";
    if (($results4) > 0) {
        while ($row4 = mysqli_fetch_assoc($results4)) {
            echo "
                <div class='result'>
                    <div class='project-name'>{$row4['DonationFor']}</div>
                    <div class='amount'>{$row4['Amount']}</div>
                </div>
            ";
        }
    } else {
        echo "
            <div class='result'>
                <div class='project-name'>No data</div>
            </div>
        ";
    }
    echo "
                </div>
            </div>
            <div class='involved-projects' id='member-involved-projects'>
                <div class='list'>
    ";
    if (mysqli_num_rows($results3) > 0) {
        while ($row3 = mysqli_fetch_assoc($results3)) {
            echo "
                <div class='result'>
                    <div class='project-name'>{$row3['Name']}</div>
                    <div class='position'>{$row3['Type']}</div>
                </div>
            ";
        }
    } else {
        echo "
            <div class='result'>
                <div class='project-name'>No data</div>
            </div>
        ";
    }
    echo "
                </div>
            </div>
        </div>
    ";
}