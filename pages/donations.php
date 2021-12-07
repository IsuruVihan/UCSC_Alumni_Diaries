<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/donations.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>
<script>
    $(document).ready(()=>{
        $('#donation-cancel').click(() =>{
            $('#donor-name,#donor-mail,#donor-amount,#donor-file').removeClass('input-error,input-ok');
            $('#donor-name,#donor-mail,#donor-amount,#donor-file').val(''); 
        
        });

        $('#donation-form').submit((event)=>{
            event.preventDefault();
            const url = '../server/donation/donation-form.php';
            const form = document.getElementById('donation-form');
            const files = document.querySelector('[type=file]').files;
            const formData = new FormData(document.getElementById('donation-form'));

            fetch(url, {
                method: 'POST',
                body: formData,
            }).then((response) => {
                console.log(response);
            }).catch((error) => {
                console.log(error);
            });

            const donor_name = $('#donor-name').val();
            const donor_mail = $('#donor-mail').val();
            const donor_amount = $('#donor-amount').val();
            
            let isComplete = true, isValidEmail = true, isValidCurrency = true;

            $('#donor-name, #donor-mail, #donor-amount').removeClass('input-error, input-ok');

            if (donor_name == '') {
                $('#donor-name').addClass('input-error');
                isComplete = false; 
            } else {
                $('#donor-name').addClass('input-ok');
            }
            if (donor_mail == '') {
                $('#donor-mail').addClass('input-error');
                isComplete = false; 
            } else {
                $('#donor-mail').addClass('input-ok');
            }
            if (donor_amount == '') {
                $('#donor-amount').addClass('input-error');
                isComplete = false; 
            } else {
                $('#donor-amount').addClass('input-ok');
            }

            if (isComplete) {
                if (donor_mail.length <= 2) {
                    isValidEmail = false;
                } else {
                    if (donor_mail.indexOf("@") == -1) {
                        isValidEmail = false;
                    } else {
                        var parts = donor_mail.split("@");
                        var dot = parts[1].indexOf(".");
                        var len = parts[1].length;
                        var dotSplits = parts[1].split(".");
                        var dotCount = dotSplits.length - 1;
                        if (dot == -1 || dot < 2 || dotCount > 2) {
                            isValidEmail = false;
                        } else {
                            for (var i = 0; i < dotSplits.length; i++) {
                                if (dotSplits[i].length == 0) {
                                    isValidEmail = false;
                                    break;
                                }
                            }
                        }
                    }
                }

                if (!isValidEmail) {
                    $('#donation-message').html("Email is not valid");
                    $('#donation-message').addClass('message-error');
                    $('#donor-mail').removeClass('input-ok');
                    $('#donor-mail').addClass('input-error');
                } else{
                    let currency = document.getElementById("donor-amount").value;

                    if (currency <= 0){
                        $('#donation-message').html("Enter a value greater than 0");
                        $('#donation-message').addClass('message-error');
                        $('#donation-message').removeClass('message-success');
                        $('#donor-amount').removeClass('input-ok');
                        $('#donor-amount').addClass('input-error');  
                    } else {
                        $('#donation-message').html("donation has been accepted");
                        $('#donation-message').addClass('message-success');
                    }
                }
                 
            } else {
                $('#donation-message').html("All Fields must be filled");
                $('#donation-message').addClass('message-error');
            }
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
        <form name='donation-form' id='donation-form' methos='post' enctype='multipart/form-data'>
            <div class='box'>
                <p> Proceed via pay here..</p>
            </div>
            <div class='box-01'>
                <div class='col-03'>
                    <label class='label'> Donor Name </label>
                    <input id='donor-name' name='donor-name' class='input-field' type='text' placeholder='Enter your name here'/>
                    <label class='label'> Donor Email </label>
                    <input id='donor-mail' name='donor-mail' class='input-field' type='text' placeholder='Enter your email here'/>
                    <label class='label'> Amount </label>
                    <input id='donor-amount' name='donor-amount' class='input-field' type='number' step='0.01' placeholder='Amount donating'/>
                    <label class='label'> Attachment </label>
                    <input id='donor-file' class='slip-attachment' type='file' name='files[]' placeholder='Bank Slip Attachment'/>
                </div>
                <p id='donation-message'></p>
                <div class='col-04'>
                <input id='donation-submit' name='submit' type='submit' value='Submit' class='btn submit-btn'/>
                <input id='donation-cancel' type='button' value='Cancel' class='btn cancel-btn'/>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('../components/footer.php'); ?>
