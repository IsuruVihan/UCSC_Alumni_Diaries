<?php include('../server/session.php'); ?>

<?php
    if (!isset($_SESSION['Email'])) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/private-chat-iframe.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='chat.php'>Chat</a> / Private Chat
    </p>
    <p class='main-title'>
        <i class='fa fa-comment'></i>
        Private Chat
    </p>
</div>

<div class='private-chat'>
    <div class='section-1'>
        <a href='../pages/private-chat-iframe/chat-list.php' class='section-link clicked-link'
           id='link-1' onclick='onClickChatList()' target='iframe'>Chat List</a>
        <a href='../pages/private-chat-iframe/available-users.php' class='section-link'
           id='link-2' onclick='onClickAvailUsers()' target='iframe'>Available Users</a>
    </div>
    <iframe
        class='section-2'
        src='../pages/private-chat-iframe/chat-list.php'
        name='iframe'
        height='100%' width='100%'
        title="Iframe"
    ></iframe>
</div>

<!--<script src='../js/private-chat.js'></script>-->

<script>
    const chat_list = document.getElementById('link-1');
    const avail_user_list = document.getElementById('link-2');

    const onClickChatList= () => {
        chat_list.classList.add('clicked-link');
        avail_user_list.classList.remove('clicked-link');
    }
    const onClickAvailUsers= () => {
        chat_list.classList.remove('clicked-link');
        avail_user_list.classList.add('clicked-link');
    }
</script>

<?php include('../components/footer.php'); ?>