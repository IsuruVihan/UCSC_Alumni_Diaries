<link rel='stylesheet' href='../assets/styles/faq.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / FAQ
    </p>
    <p class='main-title'>
        <i class="fas fa-question-circle"></i> FAQ
    </p>
</div>
<div class='faq'>
	<div class='column-1'>
        <div class='question'>
            <div class='header'>
                How to request a member account?
                <i class='fas fa-angle-down dropdown-icon' id='icon-1' onclick="showHide('1')"></i>
            </div>
            <div class='answer' id='ans-1'>
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How to proceed with "Forgot Password"?
                <i class='fas fa-angle-down dropdown-icon' id='icon-2' onclick="showHide('2')"></i>
            </div>
            <div class='answer' id='ans-2'>
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How to do a donation?
                <i class='fas fa-angle-down dropdown-icon' id='icon-3' onclick="showHide('3')"></i>
            </div>
            <div class='answer' id='ans-3'>
            </div>
        </div>
    </div>
    <div class='column-2'>
        <div class='question'>
            <div class='header'>
                How to view project?
                <i class='fas fa-angle-down dropdown-icon' id='icon-4' onclick="showHide('4')"></i>
            </div>
            <div class='answer' id='ans-4'>
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                What are the benefits of having an alumni account?
                <i class='fas fa-angle-down dropdown-icon' id='icon-5' onclick="showHide('5')"></i>
            </div>
            <div class='answer' id='ans-5'>
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How to recharge an account?
                <i class='fas fa-angle-down dropdown-icon' id='icon-6' onclick="showHide('6')"></i>
            </div>
            <div class='answer' id='ans-6'>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>

<script src='../js/faq.js'></script>