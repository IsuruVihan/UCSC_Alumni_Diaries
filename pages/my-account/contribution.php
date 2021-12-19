<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../../db/db-conn.php'); ?>
<?php include('../../server/session.php'); ?>

<div class='contributions'>
    <div class='sec-1'>
        <a href='./contributions-cash.php' class='section-link clicked-link' id='contributions-cash'
           onclick='onClickContributionsCash()' target='iframe2'>Cash</a>
        <a href='./contributions-items.php' class='section-link ' id='contributions-items'
           onclick='onClickContributionsItems()' target='iframe2'>Items</a>
    </div>
    <iframe
            class='sec-2'
            src='./contributions-cash.php'
            name='iframe2'
            height='100%' width='100%'
            title="Iframe"
    ></iframe>
</div>

<script src='../../js/my-account-iframe.js'></script>












<!--<div class='contributions'>-->
<!--    <div class='title'>-->
<!--        Contributions-->
<!--    </div>-->
<!--    <div class='contributions-container'>-->
<!--        <div class='contributions-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Amount</p>-->
<!--            <p class='item-label'>time</p>-->
<!--        </div>-->
<!--        <div class='contributions-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Amount</p>-->
<!--            <p class='item-label'>time</p>-->
<!--        </div>-->
<!--        <div class='contributions-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Amount</p>-->
<!--            <p class='item-label'>time</p>-->
<!--        </div>-->
<!--        <div class='contributions-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Amount</p>-->
<!--            <p class='item-label'>time</p>-->
<!--        </div>-->
<!--        <div class='contributions-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Amount</p>-->
<!--            <p class='item-label'>time</p>-->
<!--        </div>-->
<!--        <div class='contributions-item'>-->
<!--            <p class='item-label'>ProjectName</p>-->
<!--            <p class='item-label'>Amount</p>-->
<!--            <p class='item-label'>time</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->