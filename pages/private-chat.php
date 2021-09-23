<?php include('../components/header.php'); ?>
<link rel='stylesheet' href='../assets/styles/private-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Private Chat
    </p>
    <p class='main-title'>
        <i class='fa fa-comment'></i>
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
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn">View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='chat'>
        <div class='chat-title'>
            <img src='../assets/images/user-default.png' width="8%" class='user-pic' alt='user-pic'>
            <div class='chat-name-container'>
                <div class='first-name'>First Name</div>
                <div class='last-name'>Last Name</div>
            </div>
        </div>
        <div class='results3' id='message-list'>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='delete-msg-container'>
                        <i class='fas fa-times-circle delete-msg-icon'></i>
                    </div>
                    <div class='content'>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        Isuru
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='delete-msg-container'>
                        <i class='fas fa-times-circle delete-msg-icon'></i>
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        Isuru
                    </div>
                    <div class='content'>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='delete-msg-container'>
                        <i class='fas fa-times-circle delete-msg-icon'></i>
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='delete-msg-container'>
                        <i class='fas fa-times-circle delete-msg-icon'></i>
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        Isuru
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
        </div>
        <div class='create-message-div'>
            <textarea class='chat-message'></textarea>
            <div class='button-set'>
                <i class='fas fa-paper-plane chat-icon send-icon'></i>
                <i class='fas fa-paperclip chat-icon attach-icon'></i>
                <i class='fas fa-times-circle chat-icon clear-icon'></i>
            </div>
        </div>
    </div>
    <div class='available-users'>
        <div class='available-users-title'>
            Available Users
            <div class='filter-field'>
                <div class='col1'>
                    <input class='input-avu' type='text' placeholder='First Name'/>
                    <input class='input-avu' type='text' placeholder='Last Name'/>
                    <select class='input-avu'>
                        <option value='All'>All</option>
                        <option value='2012/2013'>2012/2013</option>
                        <option value='2013/2014'>2013/2014</option>
                        <option value='2014/2015'>2014/2015</option>
                        <option value='2015/2016'>2015/2016</option>
                        <option value='2016/2017'>2016/2017</option>
                        <option value='2017/2018'>2017/2018</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2019/2020'>2019/2020</option>
                        <option value='2020/2021'>2020/2021</option>
                    </select>
                </div>
                <div class='col2'>
                    <button class="filter-btn btn">Filter</button>
                </div>
            </div>
        </div>
        <div class='available-users-container'>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='../js/private-chat.js'></script>

<?php include('../components/footer.php'); ?>
