<link rel='stylesheet' href='../assets/styles/chat-navigation.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Chat
    </p>
    <p class='main-title'>
	<i class="fas fa-kiss-wink-heart"></i> Chat
    </p>
</div>

<div class='chats'>
    <a class='card-link' href='private-chat.php'>
        <div class='card' id='accounts-card'>
            <p class='title'>
                Private Chat
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/private-chat.gif' alt='not-started-yet' width='100%' />
            </div>
            <div class='description' id='accounts-description'>
                <ul class='list'>
                    <li>Chat Privately</li>
                </ul>
            </div>
        </div>
    </a>

    <a class='card-link' href='group-chat.php'>
        <div class='card' id='accounts-card'>
            <p class='title'>
                Group Chat
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/group-chat.gif' alt='not-started-yet' width='100%' />
            </div>
            <div class='description' id='accounts-description'>
                <ul class='list'>
                    <li>Chat with a Group</li>
                </ul>
            </div>
        </div>
    </a>
</div>


<?php include('../components/footer.php'); ?>
