<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/admin-subscriptions-iframe.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Subscriptions
    </p>
    <p class='main-title'>
        <i class="fas fa-file-invoice-dollar"></i> Subscriptions
    </p>
</div>

<div class='reports'>
    <div class='section-1'>
        <a href='subscriptions-t-b-a.php' class='section-link' target='iframe'> To Be Accepted </a>
        <a href='subscriptions-done.php' class='section-link' target='iframe'> Done </a>
        <a href='subscription-status.php' class='section-link' target='iframe'> Status </a>
    </div>
    <iframe
        class='section-2'
        src='subscriptions-t-b-a.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<?php include('../components/footer.php'); ?>