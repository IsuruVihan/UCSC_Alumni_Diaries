<link rel="stylesheet" href="../assets/styles/forgot_password.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<?php include('../components/header.php'); ?>

<script>
    $(document).ready( () => {
        $('#form-1').submit((event) => {
            event.preventDefault();

            const email = $('#email-1').val();
            //onlcick function ek ameka athule ghnna
            $('#headingname').load('../server/forgot-password/forgot-password-be.php', {
                 email : email
            });

           // 
            if(email = ''){
                $('#form-1').show();
                $('#container-2').hide();
                $('#email-1').addClass('input-error'); // singal assignment operator eken db eke thiyena mail valata ok double ekata vada na
                
            }
            else{
            $('#form-1').hide();
            $('#container-2').show();
            }
        });
    });

    // $(document).ready(function (){
    //     $('#form1').submit(function (event) {
    //         event.preventDefault();
    //         $('#form1').load('../server/forgot-password/forgot-password-be.php')

    //     });
    // });
</script>
<div class='my-account'>
    <div id='headingname'></div>
    <section class='container-wrapper'>
        <header>Forgot Password</header>
        <form id='form-1' name='form-mail'>
            <label for='email-1' class='labeling'> Email Address
                <input type='text' name='email' id='email-1' placeholder='Enter your Email address' class='input-style'>
                <input type='submit' value='Send OTP' id='button1'>
            </label>
        </form>
        <form action='#' method='POST' id='container-2'>
            <label for='otp' class='labeling'>OTP
                <input type='text' id='otp' placeholder='OTP Code' class='input-style' required maxlength='4'>
                <input type='submit' value='Submit' id='button2'>
            </label>
        </form>
        <a href='login.php' class='return_login'>Return to login</a>
    </section>
</div>

<script src="../js/forgot_password.js"></script>

<?php include('../components/footer.php'); ?>