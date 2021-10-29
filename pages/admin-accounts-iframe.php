<?php include('../components/header.php'); ?>
<link rel='stylesheet' href='./admin-accounts/admin-accounts-1.css'/>
<link rel='stylesheet' href='./admin-accounts/admin-account-iframe.css'>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/admin-accounts.js'></script>



<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Accounts
    </p>
    <p class='main-title'>
        <i class="fas fa-users-cog"></i> Accounts
    </p>
</div>
<div class='admin-accounts'>
    <div class='admin-account-iframe'>
        <div class='iframe-nav'>
            <a href='./admin-accounts/admin-accounts-signup.php' class='iframe-nav-link' target='iframe'>Create</a>
            <a href='./admin-accounts/admin-account-request.php' class='iframe-nav-link' target='iframe'>Requests</a>
            <a href='./admin-accounts/admin-account-rejected.php' class='iframe-nav-link' target='iframe'>Rejected</a>
            <a href='./admin-accounts/admin-account-registered.php' class='iframe-nav-link' target='iframe'>Registered</a>
            <a href='./admin-accounts/admin-accounts-banned.php' class='iframe-nav-link' target='iframe'>Banned</a>
        </div>
        
        <iframe class='iframe-display' src='./admin-accounts/admin-account-registered.php' name='iframe' height='100%' width='100%' title="Iframe">
    
        </iframe>
    </div>
  
    <div class='details'>
        <div class='details-title'>
            Details
        </div>
        <div class='row-1'>
            <div class='container-1'>
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
                <div class='section-3'>
                    <div class='sec-row-1'>
                        <button class='accept-btn btn'>Accept</button>
                        <button class='remove-btn btn'>Remove</button>
                    </div>
                    <div class='sec-row-2'>
                        <button class='ban-btn btn'>Ban</button>
                        <button class='unban-btn btn'>Unban</button>
                    </div>
                </div>
            </div>
            <div class='container-2'>
                <div class='full-name details-field'>Full Name</div>
                <div class='middle-section'>
                    <div class='mid-sec-row'>
                        <div class='first-name details-field'>First Name</div>
                        <div class='last-name details-field'>Last Name</div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='gender details-field'>Gender</div>
                        <div class='batch details-field'>Batch</div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='nic details-field'>NIC</div>
                        <div class='contact-number details-field'>Contact Number</div>
                    </div>
                </div>
                <div class='email details-field'>Email</div>
                <div class='address details-field'>Address</div>
            </div>
        </div>

        <div class='contribution-iframe-section'>
            <div class='iframe-nav-2'>
                <a href='./admin-accounts/admin-accounts-contributions.php' class='contribution-iframe-link' target='iframe-2'>Contributions</a>
                <a href='./admin-accounts/admin-accounts-involved-projects.php' class='contribution-iframe-link' target='iframe-2'>Projects</a>
            </div>
            <iframe class='iframe-display-2' src='./admin-accounts/admin-accounts-involved-projects.php' name='iframe-2' height='100%' width='100%'title="Iframe">

            </iframe>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>