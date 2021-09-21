<?php include('../components/header.php'); ?>
<link rel='stylesheet' href='../assets/styles/private-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

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
        <div class='chat-body'>
        </div>
        <div class='input-field'>
            <div class='text-area'>
                <textarea class='txt-area' placeholder='Enter Message...' rows='4' cols='50'>
                </textarea>
            </div>
            <div class='btn-container-input-field'>
                <label for='file-input'><i id='previewImg' class='fas fa-paperclip'></i>
                </label>
                <input id='file-input' type='file' style='display: none;' />
                <label for='submit-input'><i class="fas fa-paper-plane"></i>
                </label>
                <input id='submit-input' type='submit' style='display: none;' />
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
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
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

<!--<script src='../js/private-chat.js'></script>-->

<?php include('../components/footer.php'); ?>
