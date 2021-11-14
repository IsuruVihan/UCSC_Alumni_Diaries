<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/home.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='main-title'>
        <i class="fas fa-snowboarding"></i> Activities
    </p>
</div>
<div class='activities'>
    <a class='act-link link-1' href='./wall.php'>
        <div class='act-title'>Post Wall</div>
        <div class='act-icon'><i class="fa fa-globe"></i></div>
    </a>
    <a class='act-link link-2' href='./private-chat.php'>
        <div class='act-title'>Private Messaging</div>
        <div class='act-icon'><i class='fa fa-comment'></i></div>
    </a>
    <a class='act-link link-3' href='./group-chat.php'>
        <div class='act-title'>Group Chats</div>
        <div class='act-icon'><i class="fas fa-comments"></i></div>
    </a>
    <a class='act-link link-4' href='./projects.php'>
        <div class='act-title'>Projects</div>
        <div class='act-icon'><i class="fas fa-project-diagram"></i></div>
    </a>
</div>
<div class='main-container'>
    <p class='main-title'>
        <i class="fas fa-chart-line"></i> Dashboard
    </p>
</div>
<div class='home'>
    <div class='dashboard-links'>
        <a
            class='dashboard-link clicked-link'
            href='../components/dashboard/general.php'
            target='dashboard'
            id='general-tab'
            onclick=onClickGeneral()
        >General</a>
        <a
            class='dashboard-link'
            href='../components/dashboard/admin.php'
            target='dashboard'
            id='admin-tab'
            onclick=onClickAdmin()
        >Admin</a>
    </div>
    <div class='white-space2'></div>
    <iframe name='dashboard' class='dashboard' src='../components/dashboard/general.php'></iframe>
    
    <img src='../assets/images/main-cover%20-%20Copy.jpg' class='main-cover' alt="main-cover"/>
    <div class='title'>
        Who we are?
    </div>
    <div class='text'>
        <div class='para'>
            <img src='../assets/gifs/cover-1.gif' width='33%' alt="main-cover"/>
            <p class='para-text'>
                Welcome to the official web site of the Alumni Association of University of Colombo of School of
                Computing
                (UCSC). Alumni Association of University of Colombo School of Computing is formed in the sole objective
                of
                enriching the fellowship among Graduate and Undergraduate Community to initiate and hold responsibility
                to en
                route the development of UCSC in achieving highest educational, professional and ethical standards by
                acting as
                an independent entity.
            </p>
        </div>
        <div class='para'>
            <img src='../assets/gifs/cover-2.gif' width='33%' alt="main-cover"/>
            <p class='para-text'>
                The accomplishment of the association would also focus on the process enhancing the education standard
                and usage
                of ICT throughout the country.
            </p>
        </div>
        <div class='para'>
            <img src='../assets/gifs/cover-3.gif' width='33%' alt="main-cover"/>
            <p class='para-text'>
                As a strong entity with having vastly talented professionals in the modern era,
                we the association, will make it our passion of achieving the above goals by accomplishing its
                predefined
                targets throughout.
            </p>
        </div>
    </div>
</div>

<script src='../js/home.js'></script>

<?php include('../components/footer.php'); ?>