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
        <a 
            href='subscriptions-t-b-a.php' 
            id='to-be-accepted'
            class='section-link' 
            target='iframe'
            onclick=onClickSubtba()

        >To Be Accepted </a>
        
    
        <a 

            href='subscriptions-done.php' 
            id='sub-done'
            class='section-link' 
            target='iframe'
            onclick=onClickDone()

        >Done </a>
        
        <a 
        
            href='subscription-status.php' 
            id='sub-status'
            class='section-link' 
            target='iframe'
            onclick=onClickStatus()
            
        >Status </a>

    </div>
    <iframe
        class='section-2'
        src='subscriptions-t-b-a.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<script src="../js/admin-subscriptions.js"></script>

<?php include('../components/footer.php'); ?>