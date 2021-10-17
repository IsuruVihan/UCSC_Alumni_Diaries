<?php include('../server/session.php'); ?>

<?php include '../components/header.php'; ?>

<link rel='stylesheet' type='text/css' href='../assets/styles/login.css'>

<script>
    $(document).ready(() => {
        let loginSuccess = false;
        $('#form').submit((event) => {
            event.preventDefault();
            let isComplete = true;
            
            const email = $('#email').val();
            const password = $('#password').val();
            const rememberMe = $('#remember-me').is(":checked");

            $('#email, #password').removeClass('input-error, input-ok');

            if (email === '') {
                $('#email').addClass('input-error');
                isComplete = false;
            } else {
                $('#email').addClass('input-ok');
            }
            if (password === '') {
                $('#password').addClass('input-error');
                isComplete = false;
            } else {
                $('#password').addClass('input-ok');
            }

            if (isComplete) {
                $('#email, #password').val('').removeClass('input-error, input-ok');
            }
            $('#flash-message').load("../server/login/login-submit.php", {
                email: email,
                password: password,
                rememberMe: rememberMe
            }, (response) => {
                if (response === "1") {
                    window.location.replace("http://localhost/UCSC_Alumni_Diaries/pages/home.php");
                }
            });
        });
    });
</script>

<div class='login'>
    <div class=img>
        <!-- <img src='../assets/images/logo.jpeg' alt='logo' width='150' height='150'> <br>  -->
    </div>
    <h1 class='title'> Login </h1>
    <form id='form' class='login-form'>
        <div class='container1'>
            <div class='labels'>
                <label>Email</label>
            </div>
            <input class='input-field' id='email' type='text' name='email'/>
        </div>
        <div class='container2'>
            <div class='labels'>
                <label>Password</label>
            </div>
            <input class='input-field' id='password' type='password' name='password'/>
        </div>
        <div class='check-box'>
            <input type='checkbox' id='remember-me'>
            <label for="remember-me"> <b> Remember me </b> </label>
        </div>
        <br />
        <div id='flash-message'></div>
        <br />
        <div class='logcan'>
            <input class='btn-solid-login' type='submit' value='LOGIN'>
            <button class='btn-solid-cancel'>CANCEL</button>
        </div>
        <br />
        <a class='loginpagelink' href='forgot_password.php'> <b> Forgot Password? </b> </a> <br>
        <p><b> Not one of us yet? </b> <a class='loginpagelink' href='signup.php'> <b> Sign Up </b> </a></p>
    </form>
</div>

<?php include('../components/footer.php'); ?>