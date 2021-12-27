<link rel='stylesheet' href='../../assets/styles/group-chat-iframe-01.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../../db/db-conn.php'); ?> 
<?php include('../../server/session.php'); ?>

<script> 
    function loadfile(event){
        const fileChosen = document.getElementById('file-chosen');
        var output=document.getElementById('user-pic');
        output.src=URL.createObjectURL(event.target.files[0]);   
      
    }; 
    
</script>
   
<form class='create-group' action='../../server/group-chat/create.php' id='create-group' name='create-group' method='post' enctype='multipart/form-data'>
    <div class='title'>
        Create Group
    </div>
    <div class='list-items-02'>
        <div class='pic-button'>
          
             <img src='../../assets/images/user-default.png' width='44%' height='99%' class='user-pic-01' alt='user-pic' id='user-pic'/>
          
             <div class='remove-cancel-button'>
              
                <input type='file' name='file'  id="custom-file-input" onchange="loadfile(event)" style="display:none" >
                <label for="custom-file-input" class="label">Choose File</label>
            
            </div> 
        <div>     
        <div class='create-buttons'> 
            <input class='group-name' id='group-name' name='group-name' type='text' placeholder='Group Name'/>
        <div class='message' name='message' id='message'></div>    
        <div class='buttons-create'>
             <input class='create-btn btn' type='submit' name='submit' value='Create'>
        </div>
    </div>
</form>