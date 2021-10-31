<link rel='stylesheet' href='../../assets/styles/inventory-new.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p'
      crossorigin='anonymous'/>

<div class='received-assets'>
    <div class='received-assets-section-1'>
        <a href='../admin-inventory-iframe/received-cash.php' class='received-section-link clicked-link'
           id="link-1" onclick='onClickCash()' target='iframe2'>Received Cash</a>
        <a href='../admin-inventory-iframe/received-items.php' class='received-section-link'
           id="link-2" onclick='onClickItems()' target='iframe2'>Received Items</a>
        <a href='../admin-inventory-iframe/received-subscriptions.php' class='received-section-link'
           id="link-3" onclick='onClickSubscriptions()' target='iframe2'>Subscriptions</a>
    </div>
    <iframe
            class='received-assets-section-2'
            src='../admin-inventory-iframe/received-cash.php'
            name='iframe2'
            height='100%' width='100%'
            title="Iframe"
    ></iframe>
</div>

<script src='../../js/admin-inventory.js'></script>