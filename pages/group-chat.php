<link rel='stylesheet' href='../assets/styles/group-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Accounts
    </p>
    <p class='main-title'>
        <i class="fas fa-comments"></i> Group Chat
    </p>
</div>
<div class='group-chat'>
   <div class='chat-list'>
   <div class='title'>
            Chat List
        </div>
       <div class='filter'>
           <div class='col01'>
                 <input class='input-field' type='text' placeholder=' Name'/>
                 <input class='input-field' type='text' placeholder=' Name'/>

            
                <div class='col2'>
                      <button class='filter-btn btn'>Filter</button>
                </div>  

            </div>
     
       </div>
</div>
       <div class='chat-wall'>

         </div>
         <div class='available-users'>

            </div>
            <div class='create-group'>

                </div>
                <div class='edit-group'>

                   </div>
 </div>


<?php include('../components/footer.php'); ?>
