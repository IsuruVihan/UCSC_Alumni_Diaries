<script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
></script>
<link rel="stylesheet" href="../assets/styles/reset-password.css" />

<div class='reset-password'>

    <h2 class='title'>Reset Password</h2>
    <form id='form' action="#" method="POST" class='reset-password-form'>
<!--        <img src='Reset_Password_images/logo.jpeg' alt='logo' width='150' height='150'> <br>-->

        <div class='container1'>
        <div class='labels'>
            <label>Password</label>
        </div>

        <div class='input-field'>
            <input id='password' type="password"  />
        </div>
        </div>

        <div class='container2'>
        <div class='labels'>
            <label>Confirm Password</label>
        </div>

        <div class='input-field'>
            <input id='confirmPassword' type="password" />
        </div>
        </div>
        <div id='error'></div>

        <input type='submit' value="Submit" class='btn-solid'> &nbsp; &nbsp;

    </form>

</div>

      <script src="../js/reset-password.js"> </script>