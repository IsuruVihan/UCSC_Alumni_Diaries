const DisplayCreatePost = () => {
    document.getElementById('create-post-form').style.display = "flex";
}

const HideCreatePost = () => {
    document.getElementById('create-post-form').style.display = "none";
}

const fileValidation = () => {
    const fileInput = document.getElementById('myFile');
    const filePath = fileInput.value;

    // Allowing file type
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    if (!allowedExtensions.exec(filePath)) {
        document.getElementById('flash-message').classList.add('message-error');
        document.getElementById('flash-message').innerHTML = "Invalid File Type";
        fileInput.value = '';
        setTimeout(function() {
            document.getElementById('flash-message').innerText='';
        },4000);
        return false;
    }
}

const fileValidationPost = () => {
    const fileInput = document.getElementById('myFile2');
    const filePath = fileInput.value;

    // Allowing file type
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    if (!allowedExtensions.exec(filePath)) {
        document.getElementById('flash-message3').classList.add('message-error');
        document.getElementById('flash-message3').innerHTML = "Invalid File Type";
        fileInput.value = '';
        setTimeout(function() {
            document.getElementById('flash-message3').innerText='';
        },4000);
        return false;
    }

}