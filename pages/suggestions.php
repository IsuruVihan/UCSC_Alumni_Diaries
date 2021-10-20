<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/suggestions.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Suggestions
    </p>
    <p class='main-title'>
        <i class="fas fa-lightbulb"></i> Suggestions
    </p>
</div>
<div class='suggestions'>
    <form class='submit-suggestion-form'>
        <div class='section'>
            <label for='user-name'>Your Name</label><br/>
            <input type='text' id='user-name'>
        </div>
        <div class='section'>
            <label for='user-email'>Your Email</label><br/>
            <input type='text' id='user-email'>
        </div>
        <div class='section'>
            <label for='suggestion-title'>Title</label><br/>
            <input type='text' id='suggestion-title'>
        </div>
        <div class='section'>
            <label for='suggestion-content'>Suggestion</label><br/>
            <textarea id='suggestion-content'></textarea>
        </div>
        <input type='file' id='image-attach'>
        <div class='section-2'>
            <input type='submit'>
            <button>Cancel</button>
        </div>
    </form>
</div>

<?php include('../components/footer.php'); ?>