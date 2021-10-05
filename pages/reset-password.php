<?php include '../components/header.php';?>

<link rel="stylesheet" href="../assets/styles/reset-password.css" />

<div class='reset-password'>
    <div class=img>
<!--        <img src='../assets/images/logo.jpeg' alt='logo' width='150' height='150'> <br>-->
    </div>
    <h1 class='title'>Reset Password</h1>
    <form id='form' action="#" method="POST" class='reset-password-form'>
        <div class='container1'>
            <div class='labels'>
                <label>Password</label>
            </div>
            <div class='input-field'>
                <input id='password' type="password" placeholder="Enter Password" />
            </div>
        </div>
        <div class='container2'>
            <div class='labels'>
                <label>Confirm Password</label>
            </div>
            <div class='input-field'>
                <input id='confirmPassword' type="password" placeholder="Re-enter Password"/>
            </div>
        </div>
        <div id='error'></div>
        <input type='submit' value="Submit" class='btn-solid'>
    </form>
</div>

<script src="../js/reset-password.js"> </script>

<?php include '../components/footer.php';?>