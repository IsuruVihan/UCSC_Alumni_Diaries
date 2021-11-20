<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/donations.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>
<script >
    $(document).ready(()=>{
        $('#donation-cancel').click(() =>{
            $('#donor-name,#donor-mail,#donor-amount').removeClass('input-error,input-ok');
            $('#donor-name,#donor-mail,#donor-amount').val(''); 
        
        });

            const donationform = document.getElementById("donationform");
            const donorname = document.getElementById("donor-name");
            const donormail = document.getElementById("donor-mail");
            const donoramount = document.getElementById("donor-amount");
            const donorfile = document.getElementById("donorfile");

            donationform.addEventListener("#donation-submit", e => {
                e.preventDefault();

                const endpoint = "../server/donation/donation-form.php";
                const formData = new FormData();

                formData.append("donorname".val());
                formData.append("donormail".val());
                formData.append("donoramount".val());
                formData.append("donorfile", donorfile.files[0]);

                fetch(endpoint,{
                    method:"post",
                    body:fromData


              
              
            });

            $('#donor-name,#donor-mail,#donor-amount').removeClass('input-error,input-ok');

            if(donor_name === ''){
                    $('#donor-name').addClass('input-error');
                    isComplete = false; 
            }else{
                    $('#donor-name').addClass('input-ok');
            }
            if(donor_mail === ''){
                    $('#donor-mail').addClass('input-error');
                    isComplete = false; 
            }else{
                    $('#donor-mail').addClass('input-ok');
            }
            if(donor_amount === ''){
                    $('#donor-amount').addClass('input-error');
                    isComplete = false; 
            }else{
                    $('#donor-amount').addClass('input-ok');
            }

            if(isComplete){
                $('#donor-name,#donor-mail,#donor-amount').val(''); 
                $('#donor-name,#donor-mail,#donor-amount').removeClass('input-error,input-ok');
            }
            $('#donation-message').load("../server/donation/donation-form.php",{
                donorname: donorname,
                donormail: donormail,
                donoramount: donoramount,
                donorfile: donorfile,
            });
                
        });
    });
</script>
<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /Donations
    </p>
    <p class='main-title'>
        <i class='fas fa-users'></i> Donations
    </p>
</div>
<div class='container'>
    <div class='card container-02'>
        <form name='donationform' id='donationform' methos='post' enctype='multipart/form-data'>
            <div class='box'>
                <p> Proceed via pay here..</p>
            </div>
            <div class='box-01'>
                <div class='col-03'>
                    <label class='label'> Donor Name </label>
                    <input id='donor-name' class='input-field' type='text' placeholder='Enter your name here'/>
                    <label class='label'> Donor Email </label>
                    <input id='donor-mail' class='input-field' type='text' placeholder='Enter your email here'/>
                    <label class='label'> Amount </label>
                    <input id='donor-amount' class='input-field' type='text' placeholder='Amount donating'/>
                    <label class='label'> Attachment </label>
                    <input id='donorfile' class='slip-attachment' type='file' placeholder='Bank Slip Attachment'/>
                </div>
                <p id='donation-message'></p>
                <div class='col-04'>
                <button id='donation-submit' name='submit' type='submit' value='Submit' class='btn submit-btn'/>Submit</button>
                <input id='donation-cancel' type='button' value='Cancel' class='btn cancel-btn'/>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('../components/footer.php'); ?>
