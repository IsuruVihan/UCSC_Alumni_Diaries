<?php include('../server/session.php'); ?>

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
                How can I catch up with my batch-mates?
                <i class='fas fa-angle-down dropdown-icon' id='icon-1' onclick="showHide('1')"></i>
            </div>
            <div class='answer' id='ans-1'>
                You can join your batch chat group using the link in your chat group.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How to pay the subscription fee?
                <i class='fas fa-angle-down dropdown-icon' id='icon-2' onclick="showHide('2')"></i>
            </div>
            <div class='answer' id='ans-2'>
                You can choose your subscription plan as monthly or annually according your preference and you are able
                to pay it via pay here or another payment mechanism.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How to register for the web application?
                <i class='fas fa-angle-down dropdown-icon' id='icon-3' onclick="showHide('3')"></i>
            </div>
            <div class='answer' id='ans-3'>
                In order to register for the web application you are required to fill the the sign-in form and request
                permission from the UCSC Alumni Top Board. The top board will check your application according to
                specific eligibility criteria and inform you the approval or rejection through the email you provided.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                Can non-Alumni members use this application?
                <i class='fas fa-angle-down dropdown-icon' id='icon-4' onclick="showHide('4')"></i>
            </div>
            <div class='answer' id='ans-4'>
                No, This application is a community platform designed only for UCSC Alumni association. But still you
                can donate for the association as well as for the projects carried out by the association.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How can I recover my account if I get banned?
                <i class='fas fa-angle-down dropdown-icon' id='icon-5' onclick="showHide('5')"></i>
            </div>
            <div class='answer' id='ans-5'>
                You can contact one of the top board members to clarify the reason behind the banning and if you have
                not violated any of the rules they will unban your account.
            </div>
        </div>
    </div>
    <div class='column-2'>
        <div class='question'>
            <div class='header'>
                How will my Alumni account get banned?
                <i class='fas fa-angle-down dropdown-icon' id='icon-6' onclick="showHide('6')"></i>
            </div>
            <div class='answer' id='ans-6'>
                The Top Board members have the rights to ban your Alumni account if you violate any of the rules of the
                association, if you misbehave within the platform and post abusive content.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                Can Alumni members post Important notices?
                <i class='fas fa-angle-down dropdown-icon' id='icon-7' onclick="showHide('7')"></i>
            </div>
            <div class='answer' id='ans-7'>
                No, only the Top Board members are able to post important notices on the wall.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                Can university leavers join this platform?
                <i class='fas fa-angle-down dropdown-icon' id='icon-8' onclick="showHide('8')"></i>
            </div>
            <div class='answer' id='ans-8'>
                Yes, Any Alumni member is eligible to join the platform even though they have already graduated.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                How can I provide my feedback on the community?
                <i class='fas fa-angle-down dropdown-icon' id='icon-9' onclick="showHide('9')"></i>
            </div>
            <div class='answer' id='ans-9'>
                You can provide any feedbacks or suggestions in the suggestions section.we welcome and value all the
                feedbacks in order make the best community.
            </div>
        </div>
        <div class='question'>
            <div class='header'>
                What are the possible ways to do a cash transaction?
                <i class='fas fa-angle-down dropdown-icon' id='icon-10' onclick="showHide('10')"></i>
            </div>
            <div class='answer' id='ans-10'>
                Both bank payments (including internet banking), and PayHere money transactions are allowed.
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>

<script src='../js/faq.js'></script>