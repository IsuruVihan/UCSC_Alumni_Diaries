<?php include('../server/session.php'); ?>

<?php
    if (!(isset($_SESSION['Email']) && $_SESSION['AccType'] == 'TopBoard')) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/admin-inventory-iframe.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Inventory
    </p>
    <p class='main-title'>
        <i class='fas fa-inventory'></i>
        Inventory
    </p>
</div>

<div class='admin-inventory'>
    <div class='section-1'>
        <a href='./admin-inventory-iframe/available-assets.php' class='section-link clicked-link'
           id='available-assets' onclick='onClickAvailable()' target='iframe'>Available Assets</a>
        <a href='./admin-inventory-iframe/transferred-assets.php' class='section-link'
           id='transferred-assets' onclick='onClickTransferred()' target='iframe'>Transferred Assets</a>
        <a href='./admin-inventory-iframe/to-be-accepted.php' class='section-link'
           id='to-be-acc-assets' onclick='onClickToBeAcc()' target='iframe'>To Be Accepted</a>
        <a href='./admin-inventory-iframe/received-assets.php' class='section-link'
           id='received-assets' onclick='onClickReceived()' target='iframe'>Received Assets</a>
    </div>
    <iframe
        class='section-2'
        src='./admin-inventory-iframe/available-assets.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<script>
    const available_assets = document.getElementById('available-assets');
    const transferred_assets = document.getElementById('transferred-assets');
    const to_be_acc_assets = document.getElementById('to-be-acc-assets');
    const received_assets = document.getElementById('received-assets');

    const onClickAvailable = () => {
        available_assets.classList.add('clicked-link');
        transferred_assets.classList.remove('clicked-link');
        to_be_acc_assets.classList.remove('clicked-link');
        received_assets.classList.remove('clicked-link');
    }
    const onClickTransferred = () => {
        available_assets.classList.remove('clicked-link');
        transferred_assets.classList.add('clicked-link');
        to_be_acc_assets.classList.remove('clicked-link');
        received_assets.classList.remove('clicked-link');
    }
    const onClickToBeAcc = () => {
        available_assets.classList.remove('clicked-link');
        transferred_assets.classList.remove('clicked-link');
        to_be_acc_assets.classList.add('clicked-link');
        received_assets.classList.remove('clicked-link');
    }
    const onClickReceived = () => {
        available_assets.classList.remove('clicked-link');
        transferred_assets.classList.remove('clicked-link');
        to_be_acc_assets.classList.remove('clicked-link');
        received_assets.classList.add('clicked-link');
    }
</script>

<?php include('../components/footer.php'); ?>

