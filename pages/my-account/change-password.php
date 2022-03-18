<?php include('../../server/session.php'); ?>
<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<script src='../../js/regex.js'></script>

<div class='password-main-container'>
    <script>
        $(document).ready(() => {
            let isComplete = true;
            $('#new-password').keyup(() => {
                const currentVal = $('#new-password').val();

                $('#rule-1, #rule-2, #rule-3, #rule-4, #rule-5').removeClass('rule-ok, rule-no');

                if (currentVal.length > 6) {
                    $('#rule-1').addClass('rule-ok');
                } else {
                    $('#rule-1').addClass('rule-no');
                }
                if (uppercaseTest(currentVal)) {
                    $('#rule-2').addClass('rule-ok');
                } else {
                    $('#rule-2').addClass('rule-no');
                }
                if (lowercaseTest(currentVal)) {
                    $('#rule-3').addClass('rule-ok');
                } else {
                    $('#rule-3').addClass('rule-no');
                }
                if (numericTest(currentVal)) {
                    $('#rule-4').addClass('rule-ok');
                } else {
                    $('#rule-4').addClass('rule-no');
                }
                if (specialTest(currentVal)) {
                    $('#rule-5').addClass('rule-ok');
                } else {
                    $('#rule-5').addClass('rule-no');
                }
            });
            $('#form').submit((event) => {
                event.preventDefault();

                const password1 = $('#new-password').val();
                const password2 = $('#confirm-password').val();
                const password0 = $('#current-password').val();

                $('#current-password, #new-password, #confirm-password').removeClass('input-error, input-ok');

                if (  !(password0 ==="") && password1 === password2 && !(password1 === "")) {
                    $('#current-password, #new-password, #confirm-password').addClass('input-ok');
                } else {
                    $('#current-password, #new-password, #confirm-password').addClass('input-error');
                }

                $('#flash-message').load("../../server/my-account/change-password-backend.php", {
                    password1: password1,
                    password2: password2,
                    password0: password0
                },
                    (response) => {
                    if (response === "1") {
                        window.location.replace("http://localhost/UCSC_Alumni_Diaries/pages/my-account/change-password-success-msg.php");
                    }
                });
            });
        });
    </script>

    <div class='change-password'>
        <h1 class='title'>Change Password</h1>
        <form id='form' class='change-password-form'>
            <div class='container1'>
                <label for='current-password' class='labels'>Current Password</label>
                <input class='input-field' id='current-password' type='password' placeholder='Enter current password' />
            </div>
            <br/>
            <div class='container1'>
                <label for='new-password' class='labels'>New Password</label>
                <input class='input-field' id='new-password' type='password' placeholder='Enter new password' />
                <table class='rules'>
                    <tr>
                        <td id='rule-1'>Minimum six characters</td>
                        <td id='rule-2'>One uppercase letter</td>
                    </tr>
                    <tr>
                        <td id='rule-3'>One lowercase letter</td>
                        <td id='rule-4'>One digit</td>
                    </tr>
                    <tr>
                        <td id='rule-5'>One special character (- + ! @ # $ % & * ?)</td>
                    </tr>
                </table>
            </div>
            <br/>
            <div class='container1'>
                <label for='confirm-password' class='labels'>Confirm Password</label>
                <input class='input-field' id='confirm-password' type='password' placeholder='Re-enter new password' />
            </div>
            <div id='flash-message'></div>
            <br/>
            <div class='btn-container'>
                <input type='submit' value="Submit" class='btn-solid'>
            </div>
        </form>
    </div>
</div>
