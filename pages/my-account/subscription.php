<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='subscription'>
    <div class='sec-1'>
        <a href='./subscription-recharge-account.php' class='section-link clicked-link' id='subs-recharge'
           onclick='onClickRechargeAccount()' target='iframe2'>Recharge Account</a>
        <a href='./subscription-recharge-details.php' class='section-link ' id='recharge-details'
           onclick='onClickRechargeDetails()' target='iframe2'>Recharge Details</a>
    </div>
    <iframe
        class='sec-2'
        src='./subscription-recharge-account.php'
        name='iframe2'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<script src='../../js/my-account-iframe.js'></script>