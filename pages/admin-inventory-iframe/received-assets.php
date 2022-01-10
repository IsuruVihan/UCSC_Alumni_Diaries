<link rel='stylesheet' href='../../assets/styles/inventory-new.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p'
      crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<div class='received-assets'>
    <div class='received-assets-section-1'>
        <a href='../admin-inventory-iframe/received-cash.php' class='received-section-link clicked-link'
           id='link-1' onclick='onClickCash()' target='iframe2'>Received Cash</a>
        <a href='../admin-inventory-iframe/received-items.php' class='received-section-link'
           id='link-2' onclick='onClickItems()' target='iframe2'>Received Items</a>
        <a href='../admin-inventory-iframe/received-subscriptions.php' class='received-section-link'
           id='link-3' onclick='onClickSubscriptions()' target='iframe2'>Subscriptions</a>
    </div>
    <iframe
            class='received-assets-section-2'
            src='../admin-inventory-iframe/received-cash.php'
            name='iframe2'
            height='100%' width='100%'
            title="Iframe"
    ></iframe>
</div>

<script>
    const cash = document.getElementById('link-1');
    const items = document.getElementById('link-2');
    const subscriptions = document.getElementById('link-3');

    const onClickCash = () => {
        cash.classList.add('clicked-link');
        items.classList.remove('clicked-link');
        subscriptions.classList.remove('clicked-link');
    }
    const onClickItems = () => {
        cash.classList.remove('clicked-link');
        items.classList.add('clicked-link');
        subscriptions.classList.remove('clicked-link');
    }
    const onClickSubscriptions = () => {
        cash.classList.remove('clicked-link');
        items.classList.remove('clicked-link');
        subscriptions.classList.add('clicked-link');
    }

</script>