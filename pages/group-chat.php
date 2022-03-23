<?php include('../server/session.php'); ?>

<?php
    if (!isset($_SESSION['Email']) || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/group-chat-iframe.css'/>
<link rel='stylesheet' href='../assets/styles/group-chat-iframe-01.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='chat.php'>Chat</a> / Group Chat
    </p>
    <p class='main-title'>
        <i class="fas fa-comments"></i> Group Chat
    </p>
</div>
<div class='groupchat'>
    <div class='section-1'>
        <a href='group-chat/group-chat.php' class='section-link clicked-link' id='group-chat'
           onclick='onclickGroupChat()' target='iframe'>Group chat</a>
        <a href='group-chat/create-group.php' class='section-link ' id='create-group'
           onclick='onclickCreateChat()'target='iframe'>Create group</a>
    </div>
    <iframe
            class='section-2'
            src='group-chat/group-chat.php'
            name='iframe'
            height='100%' width='100%'
            title="Iframe"
    ></iframe>
</div>

<script src='../js/group-chat-iframe.js'></script>

<?php include('../components/footer.php'); ?>

<!--<link rel='stylesheet' href='../assets/styles/group-chat.css'/>-->
<!--<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'-->
<!--      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>-->
<!---->
<?php //include('../components/header.php'); ?>
<!---->
<!--<div class='main-container'>-->
<!--    <p class='breadcrumb'>-->
<!--        <a href='home.php'>Home</a> /-->
<!--        <a href='chat.php'>Chat</a> / Group Chat-->
<!--    </p>-->
<!--    <p class='main-title'>-->
<!--        <i class="fas fa-comments"></i> Group Chat-->
<!--    </p>-->
<!--</div>-->
<!--<div class='group-chat-grid'>-->
<!--    <div class='card chat-list'>-->
<!--        <div class='title'>Chat List</div>-->
<!--        <div class='filter'>-->
<!--            <div class='box-01'>-->
<!--                <input class='input-field-01' type='text' placeholder='First Name'/>-->
<!--                <input class='input-field-01' type='text' placeholder='Last Name'/>-->
<!--            </div>-->
<!--            <div class='box-02'>-->
<!--                <button class='filter-btn btn'>Filter</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class='chats'>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='list-items'>-->
<!--                <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>-->
<!--                <div class='name-buttons'>-->
<!--                    <div class='name'> Name</div>-->
<!--                    <div class='buttons'>-->
<!--                        <button class='view-btn btn'>View</button>-->
<!--                        <button class='delete-btn btn'>Delete</button>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='chat-wall'>-->
<!--        <div class='row-01'>-->
<!--            <div class='title project-name-div' id='project-name-div'>-->
<!--                Group Name-->
<!--                <i class='fas fa-edit icon-btn ' title='Edit Group' onclick='DisplayEditProjectNameDiv()'></i>-->
<!--            </div>-->
<!--            <div class='edit-project-name-div' id='edit-project-name-div'>-->
<!--                <img src='../assets/images/user-default.png' width='10%' height='' class='user-pic' alt='user-pic'>-->
<!--                <input type='text' placeholder='Enter new Group name' value=" Group Name"-->
<!--                       class='new-project-name input-field' id='new-project-name'/>-->
<!--                <button class='edit-btn btn'>Edit</button>-->
<!--                <button class='cancel-btn btn' onclick='HideEditProjectNameDiv()'>Cancel</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class='row-02'>-->
<!--            <div class='results3' id='message-list'>-->
<!--                <div class='sent-message-line'>-->
<!--                    <div class='sent-message'>-->
<!--                        <div class='delete-msg-container'>-->
<!--                            <i class='fas fa-times-circle delete-msg-icon'></i>-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece-->
<!--                            of-->
<!--                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a-->
<!--                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure-->
<!--                            Latin-->
<!--                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in-->
<!--                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections-->
<!--                            1.10.32-->
<!--                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,-->
<!--                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the-->
<!--                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a-->
<!--                            line in-->
<!--                            section 1.10.32.-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='received-message-line'>-->
<!--                    <div class='received-message'>-->
<!--                        <div class='sender-name'>-->
<!--                            Isuru-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Hello Machan-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='sent-message-line'>-->
<!--                    <div class='sent-message'>-->
<!--                        <div class='delete-msg-container'>-->
<!--                            <i class='fas fa-times-circle delete-msg-icon'></i>-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Hello Machan-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='received-message-line'>-->
<!--                    <div class='received-message'>-->
<!--                        <div class='sender-name'>-->
<!--                            Isuru-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece-->
<!--                            of-->
<!--                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a-->
<!--                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure-->
<!--                            Latin-->
<!--                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in-->
<!--                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections-->
<!--                            1.10.32-->
<!--                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,-->
<!--                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the-->
<!--                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a-->
<!--                            line in-->
<!--                            section 1.10.32.-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='sent-message-line'>-->
<!--                    <div class='sent-message'>-->
<!--                        <div class='delete-msg-container'>-->
<!--                            <i class='fas fa-times-circle delete-msg-icon'></i>-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Hello Machan-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='sent-message-line'>-->
<!--                    <div class='sent-message'>-->
<!--                        <div class='delete-msg-container'>-->
<!--                            <i class='fas fa-times-circle delete-msg-icon'></i>-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Hello Machan-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='received-message-line'>-->
<!--                    <div class='received-message'>-->
<!--                        <div class='sender-name'>-->
<!--                            Isuru-->
<!--                        </div>-->
<!--                        <div class='content'>-->
<!--                            Hello Machan-->
<!--                        </div>-->
<!--                        <div class='time'>-->
<!--                            09:28-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class='create-message-div'>-->
<!--            <textarea class='chat-message'></textarea>-->
<!--            <div class='button-set'>-->
<!--                <i class='fas fa-paper-plane chat-icon send-icon'></i>-->
<!--                <i class='fas fa-paperclip chat-icon attach-icon'></i>-->
<!--                <i class='fas fa-times-circle chat-icon clear-icon'></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class='row-04'>-->
<!--            <div class='participants'>-->
<!--                <div class='title-02'>Participants</div>-->
<!--                <div class='Participants-filter'>-->
<!--                    <div class='p_box-01'>-->
<!--                        <input class='participants-field' type='text' placeholder='First Name'/>-->
<!--                        <input class='participants-field' type='text' placeholder='Last Name'/>-->
<!--                        <select class='participants-field'>-->
<!--                            <option value='All'>All</option>-->
<!--                            <option value='2004/2005'>2004/2005</option>-->
<!--                            <option value='2005/2006'>2005/2006</option>-->
<!--                            <option value='2006/2007'>2006/2007</option>-->
<!--                            <option value='2008/2009'>2008/2009</option>-->
<!--                            <option value='2009/2010'>2009/2010</option>-->
<!--                            <option value='2010/2011'>2010/2011</option>-->
<!--                            <option value='2011/2012'>2011/2012</option>-->
<!--                            <option value='2012/2013'>2012/2013</option>-->
<!--                            <option value='2013/2014'>2013/2014</option>-->
<!--                            <option value='2014/2015'>2014/2015</option>-->
<!--                            <option value='2015/2016'>2015/2016</option>-->
<!--                            <option value='2016/2017'>2016/2017</option>-->
<!--                            <option value='2017/2018'>2017/2018</option>-->
<!--                            <option value='2018/2019'>2018/2019</option>-->
<!--                            <option value='2019/2020'>2019/2020</option>-->
<!--                            <option value='2020/2021'>2020/2021</option>-->
<!--                            <option value='2021/2022'>2021/2022</option>-->
<!--                            <option value='2022/2023'>2022/2023</option>-->
<!---->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <div class='box-02'>-->
<!--                        <button class='filter-btn btn'>Filter</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='participants-list'>-->
<!--                    <div class='list'>-->
<!--                        <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic'-->
<!--                             alt='user-pic'>-->
<!--                        <div class='p-name-buttons'>-->
<!--                            <div class='p-first-name'>First Name</div>-->
<!--                            <div class='p-last-name'>last Name</div>-->
<!--                        </div>-->
<!--                        <button class='remove-btn btn'>Remove</button>-->
<!--                    </div>-->
<!--                    <div class='list'>-->
<!--                        <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic'-->
<!--                             alt='user-pic'>-->
<!--                        <div class='p-name-buttons'>-->
<!--                            <div class='p-first-name'>First Name</div>-->
<!--                            <div class='p-last-name'>last Name</div>-->
<!--                        </div>-->
<!--                        <button class='remove-btn btn'>Remove</button>-->
<!--                    </div>-->
<!--                    <div class='list'>-->
<!--                        <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic'-->
<!--                             alt='user-pic'>-->
<!--                        <div class='p-name-buttons'>-->
<!--                            <div class='p-first-name'>First Name</div>-->
<!--                            <div class='p-last-name'>last Name</div>-->
<!--                        </div>-->
<!--                        <button class='remove-btn btn'>Remove</button>-->
<!--                    </div>-->
<!--                    <div class='list'>-->
<!--                        <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic'-->
<!--                             alt='user-pic'>-->
<!--                        <div class='p-name-buttons'>-->
<!--                            <div class='p-first-name'>First Name</div>-->
<!--                            <div class='p-last-name'>last Name</div>-->
<!--                        </div>-->
<!--                        <button class='remove-btn btn'>Remove</button>-->
<!--                    </div>-->
<!--                    <div class='list'>-->
<!--                        <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic'-->
<!--                             alt='user-pic'>-->
<!--                        <div class='p-name-buttons'>-->
<!--                            <div class='p-first-name'>First Name</div>-->
<!--                            <div class='p-last-name'>last Name</div>-->
<!--                        </div>-->
<!--                        <button class='remove-btn btn'>Remove</button>-->
<!--                    </div>-->
<!--                    <div class='list'>-->
<!--                        <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic'-->
<!--                             alt='user-pic'>-->
<!--                        <div class='p-name-buttons'>-->
<!--                            <div class='p-first-name'>First Name</div>-->
<!--                            <div class='p-last-name'>last Name</div>-->
<!--                        </div>-->
<!--                        <button class='remove-btn btn'>Remove</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='card available-users'>-->
<!--        <div class='title'>Available Users</div>-->
<!--        <div class='filter'>-->
<!--            <div class='box-01'>-->
<!--                <input class='input-field' type='text' placeholder='First Name'/>-->
<!--                <input class='input-field' type='text' placeholder='Last Name'/>-->
<!--                <select class='input-field'>-->
<!--                    <option value='All'>All</option>-->
<!--                    <option value='2004/2005'>2004/2005</option>-->
<!--                    <option value='2005/2006'>2005/2006</option>-->
<!--                    <option value='2006/2007'>2006/2007</option>-->
<!--                    <option value='2008/2009'>2008/2009</option>-->
<!--                    <option value='2009/2010'>2009/2010</option>-->
<!--                    <option value='2010/2011'>2010/2011</option>-->
<!--                    <option value='2011/2012'>2011/2012</option>-->
<!--                    <option value='2012/2013'>2012/2013</option>-->
<!--                    <option value='2013/2014'>2013/2014</option>-->
<!--                    <option value='2014/2015'>2014/2015</option>-->
<!--                    <option value='2015/2016'>2015/2016</option>-->
<!--                    <option value='2016/2017'>2016/2017</option>-->
<!--                    <option value='2017/2018'>2017/2018</option>-->
<!--                    <option value='2018/2019'>2018/2019</option>-->
<!--                    <option value='2019/2020'>2019/2020</option>-->
<!--                    <option value='2020/2021'>2020/2021</option>-->
<!--                    <option value='2021/2022'>2021/2022</option>-->
<!--                    <option value='2022/2023'>2022/2023</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            <div class='box-02'>-->
<!--                <button class='filter-btn btn'>Filter</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class='available-users-container'>-->
<!--            <div class='available-users-item'>-->
<!--                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>-->
<!--                <div class='names-btn-container01'>-->
<!--                    <div class='names-container02'>-->
<!--                        <div class='a-first-name'>First Name</div>-->
<!--                        <div class='a-last-name'>Last Name</div>-->
<!--                    </div>-->
<!--                    <div class='btn-container03'>-->
<!--                        <button class="add-btn btn">Add</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='available-users-item'>-->
<!--                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>-->
<!--                <div class='names-btn-container01'>-->
<!--                    <div class='names-container02'>-->
<!--                        <div class='a-first-name'>First Name</div>-->
<!--                        <div class='a-last-name'>Last Name</div>-->
<!--                    </div>-->
<!--                    <div class='btn-container03'>-->
<!--                        <button class="add-btn btn">Add</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='available-users-item'>-->
<!--                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>-->
<!--                <div class='names-btn-container01'>-->
<!--                    <div class='names-container02'>-->
<!--                        <div class='a-first-name'>First Name</div>-->
<!--                        <div class='a-last-name'>Last Name</div>-->
<!--                    </div>-->
<!--                    <div class='btn-container03'>-->
<!--                        <button class="add-btn btn">Add</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='available-users-item'>-->
<!--                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>-->
<!--                <div class='names-btn-container01'>-->
<!--                    <div class='names-container02'>-->
<!--                        <div class='a-first-name'>First Name</div>-->
<!--                        <div class='a-last-name'>Last Name</div>-->
<!--                    </div>-->
<!--                    <div class='btn-container03'>-->
<!--                        <button class="add-btn btn">Add</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='available-users-item'>-->
<!--                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>-->
<!--                <div class='names-btn-container01'>-->
<!--                    <div class='names-container02'>-->
<!--                        <div class='a-first-name'>First Name</div>-->
<!--                        <div class='a-last-name'>Last Name</div>-->
<!--                    </div>-->
<!--                    <div class='btn-container03'>-->
<!--                        <button class="add-btn btn">Add</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='available-users-item'>-->
<!--                <img src='../assets/images/user-default.png' width="23%" class='user-pic' alt='user-pic'>-->
<!--                <div class='names-btn-container01'>-->
<!--                    <div class='names-container02'>-->
<!--                        <div class='a-first-name'>First Name</div>-->
<!--                        <div class='a-last-name'>Last Name</div>-->
<!--                    </div>-->
<!--                    <div class='btn-container03'>-->
<!--                        <button class="add-btn btn">Add</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='card create-group'>-->
<!--        <div class='title'>Create Group</div>-->
<!--        <div class='list-items-02'>-->
<!--            <img src='../assets/images/user-default.png' width='30%' height='' class='user-pic' alt='user-pic'>-->
<!--            <div class='create-buttons'>-->
<!--                <div class='name'>Group Name</div>-->
<!--                <div class='buttons-create'>-->
<!--                    <button class='create-btn btn'>Create</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<script src='../js/group-project.js'></script>-->
<!---->
<?php //include('../components/footer.php'); ?>