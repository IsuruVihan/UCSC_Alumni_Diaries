<?php include('../server/session.php'); ?>

    <link rel='stylesheet' href='../assets/styles/suggestions.css'/>
    <link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
          integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

    <script>
        // $(document).ready(() => {
        //     $('#submit-btn').click((event) => {
        //         event.preventDefault();
        //         let isComplete = true;
        //
        //         const userName = $('#user-name').val();
        //         const userEmail = $('#user-email').val();
        //         const suggestionTitle = $('#suggestion-title').val();
        //         const suggestionContent = $('#suggestion-content').val();
        //         const attachment = $('#image-attach').file;
        //
        //         $('#user-name, #user-email, #suggestion-title, #suggestion-content')
        //             .removeClass('input-error, input-ok');
        //
        //         if (userName === '') {
        //             $('#user-name').addClass('input-error');
        //             isComplete = false;
        //         } else {
        //             $('#user-name').addClass('input-ok');
        //         }
        //         if (userEmail === '') {
        //             $('#user-email').addClass('input-error');
        //             isComplete = false;
        //         } else {
        //             $('#user-email').addClass('input-ok');
        //         }
        //         if (suggestionTitle === '') {
        //             $('#suggestion-title').addClass('input-error');
        //             isComplete = false;
        //         } else {
        //             $('#suggestion-title').addClass('input-ok');
        //         }
        //         if (suggestionContent === '') {
        //             $('#suggestion-content').addClass('input-error');
        //             isComplete = false;
        //         } else {
        //             $('#suggestion-content').addClass('input-ok');
        //         }
        //
        //         $('#flash-message').load('../server/suggestions/submit-suggestion.php' ,{
        //             image_attach: attachment
        //         });
        //     });
        // });
    </script>

    <div class='main-container'>
        <p class='breadcrumb'>
            <a href='home.php'>Home</a> / Suggestions
        </p>
        <p class='main-title'>
            <i class="fas fa-lightbulb"></i> Suggestions
        </p>
    </div>
    <div class='suggestions'>
        <form
            action='../server/suggestions/submit-suggestion.php'
            method='post'
            id='suggestion-form'
            class='submit-suggestion-form'
            enctype='multipart/form-data'
        >
            <div id='flash-message'></div>
            <div class='section'>
                <label for='user-name'>Your Name</label><br/>
                <input class='input-field' type='text' id='user-name' name='user-name'>
            </div>
            <div class='section'>
                <label for='user-email'>Your Email</label><br/>
                <input class='input-field' type='text' id='user-email' name='user-email'>
            </div>
            <div class='section'>
                <label for='suggestion-title'>Title</label><br/>
                <input class='input-field' type='text' id='suggestion-title' name='suggestion-title'>
            </div>
            <div class='section'>
                <label for='suggestion-content'>Suggestion</label><br/>
                <textarea class='input-field text-area' id='suggestion-content' name='suggestion-content'></textarea>
            </div>
            <input type='file' id='image-attach' name='image-attach'>
            <div class='section-2'>
                <input id='submit-btn' name='submit-btn' class='btn accept-btn' type='submit'>
                <button class='btn remove-btn' type='reset'>Cancel</button>
            </div>
        </form>
    </div>

<?php include('../components/footer.php'); ?>