<?php include '../components/header.php'; ?>

<link rel='stylesheet' type='text/css' href='../assets/styles/login.css'>

<script>
    $(document).ready(() => {
        $('#login-cancel').click(() => {
            $('#email, #password').removeClass('input-error, input-ok');
            $('#email, #password').val('');
        });

        $('#form').submit((event) => {
            event.preventDefault();
            let isComplete = true;

            const login_email = $('#email').val();
            const login_password = $('#password').val();

            $('#email, #password').removeClass('input-error, input-ok');

            if (login_email === '') {
                $('#email').addClass('input-error');
                isComplete = false;
            } else {
                $('#email').addClass('input-ok');
            }

            if (login_password === '') {
                $('#password').addClass('input-error');
                isComplete = false;
            } else {
                $('#password').addClass('input-ok');
            }

            if (isComplete) {
                $('#email, #password').val('');
                $('#email, #password').removeClass('input-error, input-ok');
            }

            $('#error-message').load('../server/login/login.php', {
                login_email: login_email,
                login_password: login_password,
            });
        });

    });
</script>

<div class='login'>
    <div class='img'>
        <!-- <img src='../assets/images/logo.jpeg' alt='logo' width='150' height='150'> <br>  -->
    </div>
    <h1 class='title'> Login </h1>
    <form id='form' action='#' method="POST" class='login-form'>
        <div class='container1'>
            <div class='labels'>
                <label>Email</label>
            </div>
            <div class='input-field' id='email'>
                <input type='text' placeholder='Enter Email'/>
            </div>
        </div>
        <div class='container2'>
            <div class='labels'>
                <label>Password</label>
            </div>
            <div class='input-field' id='password'>
                <input type='password' placeholder='Enter Password'/>
            </div>
        </div>
        <!-- <div id="error"></div> -->
        <p id='error-message' class='error'> </p>
        <div class='check-box' align='left' ;>
            <input type='checkbox' id='checkbox'>
            <label for="checkbox"> <b> Remember me </b> </label>
        </div>
        <br />
        <table class='logcan'>
            <tr>
                <td align='left'>
                    <input id='login-submit' class='btn-solid-login' type='submit' name='' value=' Login  '>
                </td>
                <td align='right'>
                    <input id='login-cancel' class='btn-solid-cancel' type='reset' name='' value='Cancel'>
                </td>
            </tr>
        </table>
        <br />
        <center>
            <a class='loginpagelink' href='forgot_password.php'> <b> Forgot Password? </b> </a> <br>
            <p><b> Not one of us yet? </b> <a class='loginpagelink' href='signup.php'> <b> Sign Up </b> </a></p>
        </center>
    </form>
</div>

<script defer src='../js/login.js'></script>

<?php include('../components/footer.php'); ?>