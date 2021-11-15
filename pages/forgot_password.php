<link rel="stylesheet" href="../assets/styles/forgot_password.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="../js/forgot_password.js"></script>
<?php include('../components/header.php'); ?>

<script>
    $(document).ready( () => {
        $('#form-1').submit((event) => {
            event.preventDefault();

            const email = $('#email-1').val();
            let isComplete = true;
            $('#email').removeClass('input-error, input-ok');
            
            if(email === ''){
                $('#email-1').addClass('input-error'); // singal assignment operator eken db eke thiyena mail valata ok double ekata vada na
                isComplete = false;
            }else {
                $('#emai-1').addClass('input-ok');
            }
            if (isComplete) {
                $('#email').val('').removeClass('input-error, input-ok');
            }
            $('#headingname').load("../server/forgot-password/forgot-password-backend.php", {
                    email : email
            }, (response) => {
                    if(response === "Message sent"){
                        $('#form-1').hide();
                        $('#form-2').show();
                    }  
            });
        });
        $('#form-2').submit((event) => {
            event.preventDefault();
            let isComplete = true;

            const otp = $('#otp').val();
            
            $('#otp').removeClass('input-error, input-ok');

            if(otp === ''){
                $('#otp').addClass('input-error'); 
                isComplete = false;
            }else {
                $('#otp').addClass('input-ok');
            }
            if (isComplete) {
                $('#otp').val('').removeClass('input-error, input-ok');
            }

            $('#headingname-1').load("../server/forgot-password/forgot-password-otp.php",{
                otp: otp
            },(response) => {
                if(response === "Correct OTP"){
                    window.location.replace('http://localhost/UCSC_Alumni_Diaries/pages/reset-password.php');
                }  
            });

        });
    
    });  
</script>
<div class='my-account'>
    
    <section class='container-wrapper'>
        <header>Forgot Password</header>
        <form id='form-1' name='form-mail'>
            <label for='email-1' class='labeling'> Email Address
                <input type='text' name='email' id='email-1' placeholder='Enter your Email address' class='input-style'>
                <div id='headingname'></div>
                <input type='submit' value='Send OTP' id='button1'>
            </label>
        </form>
        <form id='form-2'>
            <label for='otp' class='labeling'>OTP
                <span id='timer' class='timer'></span>
                <input type='text' id='otp' placeholder='OTP Code' class='input-style'>
                <div id='headingname-1'>
                    <span class='message-success'>Check your email inbox</span>
                </div>
                <input type='submit' value='Submit' id='button2'>
            </label>
        </form>
        <a href='login.php' class='return_login'>Return to login</a>
    </section>
</div>

<?php include('../components/footer.php'); ?>