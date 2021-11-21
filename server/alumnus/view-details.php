<?php

include('../../db/db-conn.php');

$Email = trim($_POST['Email']);

$query4 = "SELECT DonationFor FROM cashdonations WHERE DonorEmail='{$Email}'";
$results4 = mysqli_query($conn, $query4);

$query5 = "SELECT ProjectId, Type FROM committeemembers WHERE Email='{$Email}'";
$results5 = mysqli_query($conn, $query5);

$query3 = "
    SELECT projects.Name, committeemembers.Type
    FROM projects
    INNER JOIN committeemembers ON projects.Id=committeemembers.ProjectId
    WHERE projects.Status='Ongoing' OR projects.Status='Completed'
";

$results3 = mysqli_query($conn, $query3);


$query = "SELECT * FROM registeredmembers WHERE Email='{$Email}'";
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($results)) {
    $query2 = "SELECT Email FROM bannedaccounts WHERE Email='{$Email}'";
    $results2 = mysqli_query($conn, $query2);
    if (mysqli_num_rows($results2) > 0) {
        echo "
            <div class='account-details-container'>
                <div class='img-container'>
                <img src='{$row['PicSrc']}' height='100%' alt='profile-pic'/>
                </div>
                <div class='acdc-text-field'>{$row['AccType']}</div>
            </div>
            <div class='alumni-details-container'>
                <header class='container-heading'> <span style='color: #f5222d'> Registered Member (Banned)</span> - Account Details</header>
                    <div class='aldc-row1'>
                        <div class='first-name details-field'>{$row['FirstName']}</div>
                        <div class='last-name details-field'>{$row['LastName']}</div>
                    </div>
                    <div class='details-field full-name'>{$row['NameWithInitials']}</div>
                    <div class='details-field gender'>{$row['Gender']}</div>
                    <div class='details-field batch'>{$row['Batch']}</div>
                    <div class='aldc-row1'>
                        <div class='nic details-field'>{$row['NIC']}</div>
                        <div class='contact-number details-field'>{$row['ContactNumber']}</div>
                    </div>
                    <div class='details-field address'>{$row['Address']}</div>
            </div>
            <div class='contributions-container'>
                <header class='container-heading'>Contributions</header>
                <div class='contribution-box'>
            ";

            if (mysqli_num_rows($results4) > 0) {
                while ($row4 = mysqli_fetch_assoc($results4)) {
                    echo "
                        <div class='contribution-row1'>
                            <p class='request-id'>{$row4['DonationFor']}</p>
                        </div>
                    ";
                }

            } else {
                echo "
                    <div class='contribution-row1'>
                        <p class='request-id'>No data</p>
                    </div>
                ";
            }
            
            echo"

                </div>
            </div>
            <div class='involved-projects-container'>
                <header class='container-heading'>Involved Projects</header>
                <div class='involved-projects-box'>

                ";

                if (mysqli_num_rows($results5) > 0) {
                    while ($row5 = mysqli_fetch_assoc($results5)) {
                        echo "
                            <div class='involved-projects-row'>
                                <p>{$row5['ProjectId']}</p>
                                <p>{$row5['Type']}</p>
                            </div>
                        ";
                    }

                } else {
                    echo "
                        <div class='contribution-row1'>
                            <p class='request-id'>No data</p>
                        </div>
                    ";
                }
            echo"

                </div>
            </div> 
        ";

    } else {
        echo "
            <div class='account-details-container'>
                <div class='img-container'>
                    <img src='{$row['PicSrc']}' height='100%' alt='profile-pic'/>
                </div>
                <div class='acdc-text-field'>{$row['AccType']}</div>
            </div>
            <div class='alumni-details-container'>
                <header class='container-heading'> <span style='color: #237804'> Registered Member </span> - Account Details</header>
                    <div class='aldc-row1'>
                        <div class='first-name details-field'>{$row['FirstName']}</div>
                        <div class='last-name details-field'>{$row['LastName']}</div>
                    </div>
                    <div class='details-field full-name'>{$row['NameWithInitials']}</div>
                    <div class='details-field gender'>{$row['Gender']}</div>
                    <div class='details-field batch'>{$row['Batch']}</div>
                    <div class='aldc-row1'>
                        <div class='nic details-field'>{$row['NIC']}</div>
                        <div class='contact-number details-field'>{$row['ContactNumber']}</div>
                    </div>
                    <div class='details-field address'>{$row['Address']}</div>
            </div>
            <div class='contributions-container'>
                <header class='container-heading'>Contributions</header>
                <div class='contribution-box'>
        ";

        if (mysqli_num_rows($results4) > 0) {
            while ($row4 = mysqli_fetch_assoc($results4)) {
                echo "
                    <div class='contribution-row1'>
                        <p class='request-id'>{$row4['DonationFor']}</p>
                    </div>
                ";
            }
        } else {
            echo "
                <div class='contribution-row1'>
                    <p class='request-id'>No data</p>
                </div>
            ";
        }

        echo "
                </div>
            </div>
            <div class='involved-projects-container'>
                <header class='container-heading'>Involved Projects</header>
                <div class='involved-projects-box'>
            ";

            if (mysqli_num_rows($results5) > 0) {
                while ($row5 = mysqli_fetch_assoc($results5)) {
                    echo "
                        <div class='involved-projects-row'>
                            <p>{$row5['ProjectId']}</p>
                            <p>{$row5['Type']}</p>
                        </div>
                    ";
                }

            } else {
                echo "
                    <div class='contribution-row1'>
                        <p class='request-id'>No data</p>
                    </div>
                ";
            }

            echo "
                </div>
            </div> 
        ";
    }
}