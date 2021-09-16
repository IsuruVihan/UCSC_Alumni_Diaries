<?php include('../components/header.php'); ?>
<link rel='stylesheet' href='../assets/styles/private-chat.css'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Private Chat
    </p>
    <p class='main-title'>
         Private Chat
    </p>
</div>
<div class='private-chat'>
    <div class='chat-list'>
        <div class='chat-list-title'>
            Chat List
        </div>
        <div class='filter-field'>
            <div class='col1'>
                <input class='input' type='text' placeholder='First Name'/>
                <input class='input' type='text' placeholder='Last Name'/>
            </div>
            <div class='col2'>
                <button class="filter-btn btn">Filter</button>
            </div>
        </div>

        <div class='chat-list-container'>
            <div class='chat-list-item'>
            </div>
            <div class='chat-list-item'>
            </div>
            <div class='chat-list-item'>
            </div>
            <div class='chat-list-item'>
            </div>
           <div class='chat-list-item'>
           </div>
           <div class='chat-list-item'>
           </div>
           <div class='chat-list-item'>
           </div>
        </div>
    </div>
    <div class='chat'>
        <div class='chat-title'>
        </div>
        <div class='chat-body'>
        </div>
        <div class='input-field'>
        </div>
    </div>
    <div class='available-users'>
        <div class='available-users-title'>
            Available Users
            <div class='filter-field'>
            </div>
        </div>
        <div class='available-users-container'>
             <div class='available-users-item'>
             </div>
             <div class='available-users-item'>
             </div>
             <div class='available-users-item'>
             </div>
             <div class='available-users-item'>
             </div>
            <div class='available-users-item'>
            </div>
            <div class='available-users-item'>
            </div>
            <div class='available-users-item'>
            </div>
            <div class='available-users-item'>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>
