<link rel='stylesheet' href='../assets/styles/report-actions-iframe.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Reports
    </p>
    <p class='main-title'>
        <i class="fas fa-exclamation-triangle"></i> Report Actions
    </p>
</div>

<div class='reports'>
    <div class='section-1'>
        <a href='./post-reports.php' class='section-link' target='iframe'>Post Reports </a>
        <a href='./comment-reports.php' class='section-link' target='iframe'>Comment Reports </a>
    </div>
    <iframe
        class='section-2'
        src='./post-reports.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<?php include('../components/footer.php'); ?>