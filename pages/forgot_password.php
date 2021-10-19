<?php include('../server/session.php'); ?>

<?php include('../components/header.php'); ?>

<link rel="stylesheet" href="../assets/styles/forgot_password.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<script>
    $(document).ready(() => {
        $('#container-1').submit((event) => {
            event.preventDefault();
            let isComplete = true;
            
            const email = $('#email').val();
            $('#email').removeClass('input-error, input-ok');

            if (email === '') {
                $('#email').addClass('input-error');
                isComplete = false;
            } else {
                $('#email').addClass('input-ok');
            }

            if (isComplete) {
                $('#email').val('').removeClass('input-error, input-ok');
            }
            $('#flash-message1').load("../server/forgot-password/forgot-password.php", {
                email: email
            }, (response) => {
                if (response === "1") {
                    window.location.replace("http://localhost/UCSC_Alumni_Diaries/pages/reset-password.php");
                }
            });
        });
    });
</script>

<div class='my-account'>
    <div class='container-wrapper'>
        <header>Forgot Password</header>
        <form id='container-1' name='form-mail'>
            <label for='email' class='labeling'> Email Address
                <input type='text' name='email' id='email' placeholder='Enter your Email address' class='input-style'>
                <div id='flash-message1'></div>
                <input type='submit' value='Send OTP' id='button1'>
            </label>
        </form>
        <form id='container-2'>
            <label for='otp' class='labeling'>OTP
                <input type='text' id='otp' placeholder='OTP Code' class='input-style' required maxlength='6'>
                <div id='flash-message2'></div>
                <input type='submit' value='Submit' id='button2'>
            </label>
        </form>
        <a href='login.php' class='return_login'>Return to login</a>
    </div>
</div>

<script src="../js/forgot_password.js"></script>

<?php include('../components/footer.php'); ?>