<link rel='stylesheet' href='../assets/styles/admin.css' />
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='./home.php'>Home</a> / Admin
    </p>
    <p class='main-title'>
        <i class="fas fa-user-shield"></i> Admin
    </p>
</div>
<div class='admin'>
	<div class='card' id='accounts-card'>
        <p class='title'>
            Accounts
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/alumnus.gif' alt='accounts' width='100%' />
        </div>
        <p class='description' id='accounts-description'>
        
        </p>
    </div>
    <div class='card' id='reports-card'>
        <p class='title'>
            Reports
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/reports.gif' alt='reports' width='100%' />
        </div>
        <p class='description' id='reports-description'>

        </p>
    </div>
    <div class='card' id='subscriptions-card'>
        <p class='title'>
            Subscriptions
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/subscriptions.gif' alt='subscriptions' width='100%' />
        </div>
        <p class='description' id='subscriptions-description'>

        </p>
    </div>
    <div class='card' id='spendings-card'>
        <p class='title'>
            Project Spending
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/spendings.gif' alt='spendings' width='100%' />
        </div>
        <p class='description' id='spendings-description'>

        </p>
    </div>
    <div class='card' id='inventory-card' onmouseover="DisplayDescription('inventory-description')">
        <p class='title'>
            Inventory
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/inventory.gif' alt='inventory' width='100%' />
        </div>
        <p class='description' id='inventory-description'>

        </p>
    </div>
</div>

<?php include('../components/footer.php'); ?>

<script src='../js/admin.js'></script>