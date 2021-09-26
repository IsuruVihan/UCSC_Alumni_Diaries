const MarkAsStarred= () => {
    document.getElementById('star-div-off').style.display = "none";
    document.getElementById('star-div-on').style.display = "block";
}

const DisplayCreatePost= () => {
    document.getElementById('create-post-box').style.display = "flex";   
}

const DisplayComment= () => {
    document.getElementById('show-comment').style.display = "flex";  
}

const DisplayAddComment= () => {
    document.getElementById('add-comment').style.display = "flex";  
}
const DisplayPostReport= () => {
    document.getElementById('post-report').style.display = "flex";   
}
const DisplayCommentReport= () => {
    document.getElementById('comment-report').style.display = "flex";   
}