<link rel='stylesheet' href='../../assets/styles/private-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#chat-list-container').load("../../server/private-chat/render-chat-list.php");
    });
</script>

<script>
    $(document).ready(() => {
        $('#filter-field').submit((event) => {
            event.preventDefault();
            const firstname = $('#first-name').val();
            const lastname = $('#last-name').val();
            $('#chat-list-container').load("../../server/private-chat/chat-list-filter.php", {
                firstname: firstname,
                lastname: lastname
            });
        });
    })
</script>

<div class='chat-list-main-container'>
    <div class='chat-list' id='chat-list'>
        <div class='chat-list-title'>
            Chat List
        </div>
        <form class='filter-field' id='filter-field'>
            <div class='col1'>
                <input class='input' id='first-name' type='text' placeholder='First Name'/>
                <input class='input' id='last-name' type='text' placeholder='Last Name'/>
            </div>
            <div class='col2'>
                <button class="filter-btn btn" type="submit" value="Filter">Filter</button>
            </div>
        </form>
        <div class='chat-list-container' id='chat-list-container'>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
            <div class='chat-list-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="view-btn btn" id='view-btn' onclick='onClickViewBtn()'>View</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='chat' id='chat'>
        <div class='chat-title' id='chat-title'>
            <img src='../../assets/images/user-default.png' width="8%" class='user-pic' alt='user-pic'>
            <div class='chat-name-container'>
                <div class='first-name'>First Name</div>
                <div class='last-name'>Last Name</div>
            </div>
            <div class='chat-list-btn-container'>
                <button class='chat-list-btn btn' id='chat-list-btn' onclick='onClickChatListBtn()'>Back To Chat List</button>
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
        <form class='create-message-div' method="post" action="../../server/private-chat/create-message.php" enctype="multipart/form-data" id="create-message">
            <textarea class='chat-message' id='message'></textarea>
            <div class='button-set'>
                <label class="pic-upload">
                    <input type="submit" name="submit-btn" id="submit-btn" class="file-upload-btn btn">
                    <i class='fas fa-paper-plane chat-icon send-icon'></i>
                </label>
                <label class="pic-upload">
                    <input type="file" name="file" id="file" class="file-upload-btn btn">
                    <i class='fas fa-paperclip chat-icon attach-icon'></i>
                </label>
                <label class="pic-upload">
                    <input name="new-photo" type ='reset' id="cancel-photo" class="file-upload-btn btn">
                    <i class='fas fa-times-circle chat-icon clear-icon'></i>
                </label>
            </div>
        </form>
    </div>
</div>

<script src='../../js/private-chat.js'></script>

<script>
    const onClickDeleteBtn = (Id) =>{
        $('#chat-list-container').load("../../server/private-chat/delete-chat-from-chat-list.php", {
            Id: Id
        });
    }
</script>

<script>
    const  chatlist = document.getElementById('chat-list');
    const chat = document.getElementById('chat');

    const onClickViewBtn = (Id) =>{
        chatlist.style.display = 'none';
        chat.style.display = 'flex';

        const message = document.getElementById('message-list');
        message.scrollTop= message.scrollHeight;

        $('#message-list').load("../../server/private-chat/render-chat-window.php", {
            Id: Id
        });

        $('#chat-title').load('../../server/private-chat/chat-title.php',{
            Id: Id
        });

            $("#create-message").submit((event) => {
                event.preventDefault();

                const fd = new FormData();
                const files = $('#file')[0].files;
                const message = $('#message').val();


                if(files.length > 0 || message.length > 0){
                    fd.append('file',files[0]);
                    fd.append('message',message);
                    fd.append('Id',Id);

                    $.ajax({
                        url: '../../server/private-chat/create-message.php',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false

                    });
                }
                $('#message-list').load("../../server/private-chat/render-chat-window.php", {
                    Id: Id
                });
                document.getElementById("message").value = "";
                document.getElementById("file").value = "";
            });

    }


    const onClickDeleteMsg = (data) =>{
        const Id = data.split(',')[0];
        const ChatId = data.split(',')[1];
        $('#message-list').load("../../server/private-chat/delete-message.php",{
            Id: Id,
            ChatId: ChatId
        })
    }

    const onClickChatListBtn = () =>{
        chatlist.style.display = 'flex';
        chat.style.display = 'none';
    }
</script>

<script>

</script>
