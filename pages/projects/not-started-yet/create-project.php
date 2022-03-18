<link rel='stylesheet' href='../../../assets/styles/not-started-yet-create-project.css'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>

<script>
    $(document).ready(() => {
        $('#cancel-btn').click(() => {
            $('#p-name, #p-description').val('');
        });
        
        $('#create-project-form').submit((event) => {
            event.preventDefault();
            let isComplete = true;

            const name = $('#p-name').val();
            const description = $('#p-description').val();

            $('#p-name, #p-description').removeClass('input-error, input-ok');

            if (name === '') {
                $('#p-name').addClass('input-error');
                isComplete = false;
            } else {
                $('#p-name').addClass('input-ok');
            }
            if (description === '') {
                $('#p-description').addClass('input-error');
                isComplete = false;
            } else {
                $('#p-description').addClass('input-ok');
            }

            if (isComplete) {
                $('#p-name, #p-description').val('').removeClass('input-error, input-ok');
            }

            $('#message-container').load("../../../server/projects/not-started-yet/create-project.php", {
                Name: name,
                Description: description
            });
        });
    });
</script>

<div id='message-container' class='message-container'></div>
<div class='create-project'>
    <form class='create-project-form' id='create-project-form'>
        <label for='p-name' class='label'>Project name</label>
        <input id='p-name' class='input' type='text'/>
        <label for='p-name' class='label'>Project description</label>
        <textarea class='input text-area' id='p-description'></textarea>
        <div class='notice'>
            * You will be able to select project coordinator and committee members once you create a
            project successfully.
        </div>
        <br/>
        <div class='buttons'>
            <input class='button create-btn' type='submit' value='Create project' />
            <button class='button cancel-btn' id='cancel-btn'>Cancel</button>
        </div>
    </form>
</div>