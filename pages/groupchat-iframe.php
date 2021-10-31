<link rel='stylesheet' href='../assets/styles/group-chat-iframe.css'/>
<link rel='stylesheet' href='group-chat/group-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='chat.php'>Chat</a> / Group Chat
    </p>
    <p class='main-title'>
        <i class="fas fa-comments"></i> Group Chat
    </p>
</div>
<div class='private-chat'>
    <div class='section-1'>
        <a href='group-chat/group-chat.php' class='section-link' target='iframe'>group chat</a>
        <a href='group-chat/create-group.php' class='section-link' target='iframe'>create group</a>
        <!-- <a href='group-chat/participants.php' class='section-link' target='iframe'>create group</a> -->
    </div>
    <iframe
        class='section-2'
        src='group-chat/group-chat.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<?php include('../components/footer.php'); ?>
