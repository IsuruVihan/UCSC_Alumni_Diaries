<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/admin.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Admin
    </p>
    <p class='main-title'>
        <i class="fas fa-user-shield"></i> Admin
    </p>
</div>
<div class='admin'>
    <a class='card-link' href='./admin-accounts.php'>
        <div class='card' id='accounts-card'>
            <p class='title'>
                Accounts
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/alumnus.gif' alt='accounts' width='100%'/>
            </div>
            <div class='description' id='accounts-description'>
                <ul class='list'>
                    <li>Account Requests</li>
                    <li>Rejected Requests</li>
                    <li>Registered Members</li>
                    <li>Banned Accounts</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./admin-reports.php'>
        <div class='card' id='reports-card'>
            <p class='title'>
                Reports
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/reports.gif' alt='reports' width='100%'/>
            </div>
            <div class='description' id='reports-description'>
                <ul class='list'>
                    <li>Post Reports</li>
                    <li>Comment Reports</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./admin-subscriptions.php'>
        <div class='card' id='subscriptions-card'>
            <p class='title'>
                Subscriptions
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/subscriptions.gif' alt='subscriptions' width='100%'/>
            </div>
            <div class='description' id='subscriptions-description'>
                <ul class='list'>
                    <li>Subscriptions to be Accept</li>
                    <li>Subscription Done</li>
                    <li>Subscription Status</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./admin-project-spendings.php'>
        <div class='card' id='spendings-card'>
            <p class='title'>
                Project Spending
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/spendings.gif' alt='spendings' width='100%'/>
            </div>
            <div class='description' id='spendings-description'>
                <ul class='list'>
                    <li>Cash Spent</li>
                    <li>Items Spent</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./admin-inventory.php'>
        <div class='card' id='inventory-card'>
            <p class='title'>
                Inventory
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/inventory.gif' alt='inventory' width='100%'/>
            </div>
            <div class='description' id='inventory-description'>
                <ul class='list'>
                    <li>Available Assets</li>
                    <li>Transferred Assets</li>
                    <li>Assets to be Accept</li>
                    <li>Assets Received</li>
                </ul>
            </div>
        </div>
    </a>
</div>

<?php include('../components/footer.php'); ?>