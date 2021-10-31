<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/my-account-iframe.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / My Account
    </p>
    <p class='main-title'>
        <i class="fas fa-user"></i>
        My Account
    </p>
</div>
<div class='myAccount'>
    <div class='section-1'>
        <a href='my-account/account-details.php' class='section-link clicked-link' id='account-details'
        onclick='onclickAccountDetails()' target='iframe'>Account Details</a>
        <a href='my-account/change-password.php' class='section-link ' id='change-password' 
        onclick='onclickChangePass()'target='iframe'>Change Password</a>
        <a href='my-account/contribution.php' class='section-link ' id='contribution' 
        onclick='onclickContribution()'target='iframe'>Contribution </a>
        <a href='my-account/involved-projects.php' class='section-link ' id='invoved-projects' 
        onclick='onclickProjects()'target='iframe'>Involved Projects</a>
        <a href='my-account/subscription.php' class='section-link ' id='subscriptions' 
        onclick='onclickSubscriptions()'target='iframe'>Subscriptions</a>
    </div>
    <iframe
        class='section-2'
        src='my-account/account-details.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<script src='../js/my-account-iframe.js'></script>
<?php include('../components/footer.php'); ?>
