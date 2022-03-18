<link rel='stylesheet' href='../../assets/styles/group-chat-iframe-01.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script>
    $(document).ready(() => {
        $('#chatList').load("../../server/group-chat/render-list.php");
        $('#filter').submit((event) =>{
          event.preventDefault();
          const group_name = $('#group-name').val();
          $('#chatList').load("../../server/group-chat/filter.php",{
              Group_Name : group_name 
          });
    
        });
    });
</script>
<script> 
    const ViewChat = (id) => {
        $('#chat-wall').load("../../server/group-chat/group-chat-details.php", {
            Id: id        
        });
        const message = document.getElementById('message-list');
        message.scrollTop= message.scrollHeight;
    }
    const DeleteChat= (id) => {
        $('#chatList').load("../../server/group-chat/delete.php", {
            Id: id       
        });    
    }
    const Edit = (id) =>{ 
        const Edit_Form = '#edit-form-'+id;
        const Form = 'edit-form-'+id;
        const submitFile = 'file-input-'+id;
        const message = 'message-'+id;
       
        $(Edit_Form).submit((event) => {
            event.preventDefault(); 
            const url = '../../server/group-chat/edit-group.php';
            const form = document.getElementById(Form);
            const files1 = document.getElementById(submitFile);
            const formData = new FormData(form);

            fetch(url, {
                method: 'POST',
                body: formData,
            }).then((response) => {
                console.log(response);
            }).catch((error) => {
                console.log(error);
            });
            
            setTimeout(() => {
                location.reload();
            }, 1000); 
        });  
    }
    const fiterAvailableUsers = (id) =>{
        $('#filter-available').submit((event) =>{
            event.preventDefault();
            const first_name = $('#first-name').val();
            const last_name = $('#last-name').val();
            const batch = $('#select-batch').val();
           $('#availableusers').load("../../server/group-chat/fiter-available-users.php",{
                Id: id,
                First_Name : first_name, 
                Last_Name : last_name,
                Batch : batch
            });
        });   
   } 
    const onClickAddBtn = (id) =>{ 
        const group_id1 = $('#GroupId').val();
        $('#availableusers').load("../../server/group-chat/Add-user.php", {
        Id:id,
        GroupId:group_id1    
        });   
    }
    const OnclickRemove = (id) =>{ 
        const user_email = $('#User-Email').val();
        $('#group-participants').load("../../server/group-chat/delete-user.php", {
        Id2:id,
        UserEmail:user_email

        });  
   } 
    const fiterParticipants = (id) =>{ 
        $('#participants-filter').submit((event) =>{
            event.preventDefault();
            const participnts_firstname = $('#participants-firstName').val();
            const participnts_lastname = $('#participants-lastName').val();
            $('#group-participants').load("../../server/group-chat/filter-participants.php", {
                Id:id, 
                Participants_FirstName:participnts_firstname,
                Participants_LastName:participnts_lastname
            }); 
        });   
    }
</script>
<script>    
    const chat = (id) =>{
     $('#chat-window-01').submit((event) =>{
            event.preventDefault();
            const fd = new FormData();
            const files = $('#file-btn')[0].files;
            const message = $('#message').val();
            const Id = $('#msgId').val();
            if(files.length > 0 || message.length > 0){
                fd.append('file-message',files[0]);
                fd.append('message',message);
                fd.append('msgId',Id);
                $.ajax({
                     url: '../../server/group-chat/sent-message.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false
                });
            }
            $('#message-list').load("../../server/group-chat/render-messages.php", {
            Id: id
            });   
            document.getElementById("message").value = "";
            document.getElementById("file-btn").value = ""; 
        });    
    } 
    const onClickDeleteMsg = (data) =>{
            const Id = data.split(',')[0];
            const ChatId = data.split(',')[1];
            $('#message-list').load("../../server/group-chat/delete-message.php",{
                Id: Id,
                ChatId: ChatId
            });
        }
</script>  
<div class='group-chat-grid'>
    <div class='card chat-list'>
        <div class='title'>Chat List</div>
        <form class='filter' id='filter'>
            <div class='box-01'>
                <input class='input-field-01' id='group-name' type='text' placeholder='Group Name'/>
            </div>
            <div class='box-02'>
                <input type='submit' class='filter-btn btn' value='Filter'></input>
            </div>
        </form>
        <div class='chats' id='chatList'>
            <div class='list-items'>
                <img src='../../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic'>
                <div class='name-buttons'>
                    <div class='name'> Name</div>
                    <div class='buttons'>
                     <button class='view-btn btn' id='view-btn' onclick=ViewChat()> View</button>
                    <button class='delete-btn btn'>Delete</button>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class='chat-wall' id='chat-wall'></div>
</div>
 <script src='../../js/group-project.js'></script>
 <script src='../../js/available-users.js'></script>
