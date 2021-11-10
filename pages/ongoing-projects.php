<link rel='stylesheet' href='../assets/styles/ongoing_projects.css'/>
<link rel='stylesheet' href='../assets/styles/ongoing-projects-details.css'/>
<link rel='stylesheet' href='../assets/styles/ongoing-projects-committee.css'/>
<link rel='stylesheet' href='../assets/styles/ongoing-projects-chat.css'/>
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets.css'/>
<link rel='stylesheet' href='../assets/styles/ongoing-projects-actions.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Ongoing
    </p>
    <p class='main-title'>
        <i class="fas fa-play-circle"></i> Ongoing
    </p>
</div>

<div class='ongoing-projects'>
    <div class='section-1'>
        <div class='card projects-list'>
            <div class='title'>
                Projects List
            </div>
            <div class='filter'>
                <div class='col1'>
                    <input class='input-field date-field' type='date' placeholder='First Name'/>
                    to
                    <input class='input-field date-field' type='date' placeholder='Last Name'/>
                </div>
                <div class='col3'>
                    <input class='input-field date-field' type='text' placeholder='Project Name'/>
                    <input class='input-field date-field' type='text' placeholder='Project Id'/>
                </div>
                <div class='col2'>
                    <label>My Projects</label>
                    <input class='input-field' type='checkbox'>
                </div>
                <div class='col4'>
                    <button class='filter-btn btn'>Filter</button>
                </div>
            </div>
            <div class='results'>
                <div class='result' onmouseover=DisplayButtons('p-list-1') onmouseout=HideButtons('p-list-1')>
                    <p class='request-id'>ProjectId</p>
                    <p class='request-id'>ProjectName</p>
                    <div class='buttons' id='p-list-1'>
                        <button class='view-btn btn'>View</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='section-2'>
        <div class='row-1'>
            <div class='link clicked' id='link-1'  onclick=ClickLink1('link-1') >Details</div>
            <div class='link clicked' id='link-2'  onclick=ClickLink1('link-2') >Committee</div>
            <div class='link clicked' id='link-3'  onclick=ClickLink1('link-3')>Chat</div>
            <div class='link clicked' id='link-4'  onclick=ClickLink1('link-4') >Assets</div>
            <div class='link clicked' id='link-5'  onclick=ClickLink1('link-5') >Actions</div>
        </div>
        <div name='ongoing-projects-iframe' class='row-2' id='row-2'>
            <div class='details' id ='details'>
                <div class='row-a'>
                    <div class='set'>
                        <label for='p-id' class='label'>Project Id</label>
                        <div id='p-id' class='data'>
                            <p>132</p>
                        </div>
                    </div>
                    <div class='set'>
                        <label for='p-start' class='label'>Started on</label>
                        <div id='p-start' class='data'><p>01/11/2021</p></div>
                    </div>
                </div>
                <div class='set-2'>
                    <label for='p-name' class='label'>Project Name</label>
                    <div id='p-name' class='data-2'><p>First Project</p></div>
                </div>
                <div class='set-3'>
                    <label for='p-description' class='label'>Project Description</label>
                    <div id='p-description' class='data-3'><p>This is my first project</p></div>
                </div>
            </div> 
            <div class='card-commitee project-committee' id='committee-members'>
                <div class='title'>Coordinator</div>
                <div class='coord'>
                    <img src='../assets/images/user-default.png' height='100%' alt='user'/>
                    <div>First Name</div>
                    <div>Last Name</div>
                </div>
                <div class='title'>Members</div>
                <div class='results'>
                    <div class='result2'>
                        <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                        <div class='fname'>First Name</div>
                        <div class='lname'>Last Name</div>
                    </div>
                    <div class='result2'>
                        <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                        <div class='fname'>First Name</div>
                        <div class='lname'>Last Name</div>
                    </div>
                    <div class='result2'>
                        <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                        <div class='fname'>First Name</div>
                        <div class='lname'>Last Name</div>
                    </div>
                </div>
            </div>
            <div class='card-chat committee-chat' id='committee-chat'>
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
            <div class='assets' id='assets'>
                <div class='container-1'>
                    <a
                        id='l-1'
                        href='./projects/ongoing/assets/cash.php'
                        class='iframe-link left clicked-link'
                        target='iframe'
                        oncick=VisitLink('l-1')
                    >Cash</a>
                    <a
                        id='l-2'
                        href='./projects/ongoing/assets/items.php'
                        class='iframe-link right'
                        target='iframe'
                        onclick=VisitLink('l-2')
                    >Items</a>
                </div>
                <iframe
                    class='container-2'
                    name='iframe'
                    src='./projects/ongoing/assets/cash.php'
                ></iframe>
            </div> 
            <div class='actions' id='action'>
                <div class='message'>
                    Complete the project by achieving project goals.
                </div>
                    <button class='button create-btn'>Complete Project</button>
                    <br/>
                    <br/>
                    <br/>
                <div class='message'>
                    Close the project without achieving project goals.
                </div>
                    <button class='button cancel-btn'>Close Project</button>
            </div>
        </div>   
    </div>
</div>


<script src='../js/ongoing-projects.js'></script>
<script src='../js/ongoing-projects-assets.js'></script>

<?php include('../components/footer.php'); ?>