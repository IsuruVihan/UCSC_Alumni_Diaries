<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/admin-reports.css'/>
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
        <a
            href='admin-reports/post-reports.php'
            id='post-rep-tab'
            class='section-link clicked'
            target='iframe'
            onclick=onClickPostReports()
        >Post Reports</a>
        <a
            href='admin-reports/comment-reports.php'
            id='com-rep-tab'
            class='section-link'
            target='iframe'
            onclick=onClickCommentReports()
        >Comment Reports </a>
    </div>
    <iframe
            class='section-2'
            src='admin-reports/post-reports.php'
            name='iframe'
            height='100%' width='100%'
            title="Iframe"
    ></iframe>
</div>

<script src="../js/admin-reports.js"></script>

<?php include('../components/footer.php'); ?>