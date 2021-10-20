<?php include('../server/session.php'); ?>

<?php include '../components/header.php';?>

<link rel="stylesheet" href="../assets/styles/reset-password.css" />
<script src='../js/regex/regex-test.js'></script>
<script>
    $(document).ready(() => {
        let isComplete = true;
        $('#password').keyup(() => {
            const currentVal = $('#password').val();
            
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
            
            const password1 = $('#password').val();
            const password2 = $('#confirm-password').val();

            $('#password, #confirm-password').removeClass('input-error, input-ok');
            
            if (password1 === password2 && !(password1 === "")) {
                $('#password, #confirm-password').addClass('input-ok');
            } else {
                $('#password, #confirm-password').addClass('input-error');
            }
            
            $('#flash-message').load("../server/reset-password/reset-password.php", {
                password1: password1,
                password2: password2
            }, (response) => {
                if (response === "1") {
                    window.location.replace("http://localhost/UCSC_Alumni_Diaries/pages/login.php");
                }
            });
        });
    });
</script>

<div class='reset-password'>
    <h1 class='title'>Reset Password</h1>
    <form id='form' class='reset-password-form'>
        <div class='container1'>
            <label for='password' class='labels'>Password</label>
            <input class='input-field' id='password' type='password' placeholder='Enter new password' />
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
        <div class='container2'>
            <label for='confirm-password' class='labels'>Confirm Password</label>
            <input class='input-field' id='confirm-password' type='password' placeholder='Re-enter new password' />
        </div>
        <div id='flash-message'></div>
        <input type='submit' value="Submit" class='btn-solid'>
    </form>
</div>

<?php include '../components/footer.php';?>