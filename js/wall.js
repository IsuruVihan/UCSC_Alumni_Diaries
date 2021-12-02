const MarkAsStarred = () => {
    document.getElementById('star-div-off').style.display = "none";
    document.getElementById('star-div-on').style.display = "block";
}

const DisplayCreatePost = () => {
    document.getElementById('create-post-box').style.display = "flex";
}

const HideCreatePost = () => {
    document.getElementById('create-post-box').style.display = "none";
}

const DisplayComments = () => {
    document.getElementById('show-comment').style.display = "flex";
}

const DisplayAddComment = () => {
    document.getElementById('add-comment').style.display = "flex";
}

const DisplayPostReport = () => {
    document.getElementById('post-report').style.display = "flex";
}

const HidePostReport = () => {
    document.getElementById('post-report').style.display = "none";
}

const DisplayCommentReport = () => {
    document.getElementById('comment-report').style.display = "flex";
}

const HideCommentReport = () => {
    document.getElementById('comment-report').style.display = "none";
}

const HideComments = () => {
    document.getElementById('show-comment').style.display = "none";
}

const HideAddComment = () => {
    document.getElementById('add-comment').style.display = "none";
}

// const ShowEditNotice = () => {
//     document.getElementById('edit-notice-box').style.display = "flex";
// }
//
// const HideEditNotice = () => {
//     document.getElementById('edit-notice-box').style.display = "none";
// }

const fileValidation = () => {
    const fileInput = document.getElementById('myFile');
    const filePath = fileInput.value;

    // Allowing file type
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    if (!allowedExtensions.exec(filePath)) {
        document.getElementById('flash-message').classList.add('message-error');
        document.getElementById('flash-message').innerHTML = "Invalid File Type";
        fileInput.value = '';
        return false;
    }
}