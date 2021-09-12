<link rel='stylesheet' href='../assets/styles/admin.css' />
<script src='../js/admin.js'></script>

<?php include('../components/header.php'); ?>

<div class='main-title-container'>
    <p class='main-title'>
        Admin
    </p>
</div>
<div class='admin'>
	<div class='card'>
        <p class='title'>
            Accounts
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/alumnus.gif' alt='accounts' width='100%' />
        </div>
        <p class='description' id='accounts-description'>
        
        </p>
    </div>
    <div class='card'>
        <p class='title'>
            Reports
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/reports.gif' alt='reports' width='100%' />
        </div>
        <p class='description' id='reports-description'>

        </p>
    </div>
    <div class='card'>
        <p class='title'>
            Subscriptions
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/subscriptions.gif' alt='subscriptions' width='100%' />
        </div>
        <p class='description' id='subscriptions-description'>

        </p>
    </div>
    <div class='card'>
        <p class='title'>
            Project Spending
        </p>
        <div class='img-container'>
            <img src='../assets/gifs/spendings.gif' alt='spendings' width='100%' />
        </div>
        <p class='description' id='spendings-description'>

        </p>
    </div>
    <div class='card' onmouseenter="DisplayDescription('inventory-description')">
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
