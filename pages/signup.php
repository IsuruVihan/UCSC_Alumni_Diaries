<link rel='stylesheet' href='../assets/styles/signup.css'/>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() =>{
       $('#signup-cancel').click(() =>{
          $('#signup-init,#signup-fname,#signup-lname,#signup-nic,#signup-email,#signup-index,#signup-contact,'
          +'#signup-gender,#signup-batch,#signup-address').removeClass('input-error,input-ok');
          $('#signup-init,#signup-fname,#signup-lname,#signup-nic,#signup-email,#signup-index,#signup-contact,'
          +'#signup-address').val('');    
    }); 
    
    $('#signup-form').submit((event) =>{
        event.preventDefault();
        let isComplete = true;

        const name_with_initials = $('#signup-init').val();
        const first_name = $('#signup-fname').val();
        const last_name = $('#signup-lname').val();
        const nic =$('#signup-nic').val();
        const email = $('#signup-email').val();
        const index = $('#signup-index').val();
        const contact = $('#signup-contact').val();
        const gender = $('#signup-gender').val();
        const batch = $('#signup-batch').val();
        const address = $('#signup-address').val();

        $('#signup-init,#signup-fname,#signup-lname,#signup-nic,#signup-email,#signup-index,#signup-contact,'
          +'#signup-gender,#signup-batch,#signup-address').removeClass('input-error,input-ok');

        if(name_with_initials === ''){
             $('#signup-init').addClass('input-error');
             isComplete = false;   
        }else{
             $('#signup-init').addClass('input-ok'); 
        }
        if(first_name ===''){
             $('#signup-fname').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-fname').addClass('input-ok'); 
        }
        if(last_name ===''){
             $('#signup-lname').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-lname').addClass('input-ok'); 
        }
        if(nic ===''){
             $('#signup-nic').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-nic').addClass('input-ok');
        }
        if(email ===''){
             $('#signup-email').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-email').addClass('input-ok');
            }
        if(index ===''){
             $('#signup-index').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-index').addClass('input-ok'); 
        }
        if(contact ===''){
             $('#signup-contact').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-contact').addClass('input-ok');
        }
        if(address ===''){
             $('#signup-address').addClass('input-error');
              isComplete=false;  
        }else{
             $('#signup-address').addClass('input-ok'); 
        }
        if(isComplete){
            $('#signup-init,#signup-fname,#signup-lname,#signup-nic,#signup-email'
            +'#signup-index,#signup-contact,#signup-address').val();
            $('#signup-init,#signup-fname,#signup-lname,#signup-nic,#signup-email'
            +'#signup-index,#signup-contact,#signup-gender,#signup-batch,#signup-address'
            ).removeClass('input-error,input-ok');
        }
        $('#signup-message').load("../server/signup-form.php",{
            name_with_initials:name_with_initials,
            first_name:first_name,
            last_name:last_name,
            nic:nic,
            email:email,
            index:index,
            contact:contact,
            batch:batch,
            address:address
        });

    });
    
});
</script>

<div class='conatiner01'>
    <div class='container'>
        <div class='title'>Sign Up</div>
        <form name='signup-form' id='signup-form'>
            <div class='input_box'>
                <span class='details'>Name with Initials</span>
                <input type='text' id='signup-init'>
            </div>
            <div class='user_details'>
                <div class='input_box'>
                    <span class='details'>First Name</span>
                    <input type='text' id='signup-fname'>
                </div>
                <div class='input_box'>
                    <span class='details'>Last Name</span>
                    <input type='text' id='signup-lname'>
                </div>
                <div class='input_box'>
                    <span class='details'> NIC</span>
                    <input type='text' id='signup-nic'>
                </div>
                <div class='input_box'>
                    <span class='details'>Email</span>
                    <input type='email' id='signup-email'>
                </div>
                <div class='input_box'>
                    <span class='details'>Index Number</span>
                    <input type='text' id='signup-index'>
                </div>
                <div class='input_box'>
                    <span class='details'>Contact Number</span>
                    <input type='text' id='signup-contact'>
                </div>
            </div>
            <div class='user_details01'>
                <div class='input_box'>
                    <span class='details'>Gender</span>
                    <select class='Gender' id='signup-gender'>
                        <option value='D' class='option01'>Select Gender</option>
                        <option value='N'>Male</option>
                        <option value='f'>Female</option>
                    </select>
                </div>
                <div class='input_box'>
                    <span class='details'>Batch</span>
                    <select class='Batch' id='signup-batch'>
                        <option value='G' class='option01'>Select Batch</option>
                        <option value="01">2004/2005</option>
                        <option value="02">2005/2006</option>
                        <option value="03">2006/2007</option>
                        <option value="04">2007/2008</option>
                        <option value="05">2008/2009</option>
                        <option value="06">2009/2010</option>
                        <option value="07">2010/2011</option>
                        <option value="08">2011/2012</option>
                        <option value="09">2012/2013</option>
                        <option value="10">2013/2014</option>
                        <option value="01">2014/2015</option>
                        <option value="02">2016/2017</option>
                        <option value="03">2018/2019</option>
                        <option value="04">2019/2020</option>
                        <option value="05">2020/2021</option>
                        <option value="06">2021/2022</option>
                        <option value="07">2022/2023</option>
                    </select>
                </div>
            </div>
            <div class='input_box'>
                <span class='details'>Address</span>
                <input type='text' id='signup-address'>
            </div>
            <p id='signup-message'></p>
            <div class='buttons'>
                <input id='signup-submit' name='submit' type='submit' value='Sign Up' class='btn'>
                <input id='signup-cancel' type='reset' value='Cancel' class='btn_cancel'/>
            </div>
            <p>Already have an account? <a href='login.php'>log in</a></p>
        </form>
    </div>
</div>

<?php include('../components/footer.php'); ?>