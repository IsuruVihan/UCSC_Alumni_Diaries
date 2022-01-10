

const DisplayEditProjectNameDiv = () => {
    document.getElementById('project-name-div').style.display = "none";
    document.getElementById('button-class').style.display = "none";
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('edit-project-name-div').style.display = "flex";
}

const HideEditProjectNameDiv = () => {
    document.getElementById('project-name-div').style.display = "block";
    document.getElementById('button-class').style.display = "flex";
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('edit-project-name-div').style.display = "none";
}
const DisplayParticipantsList = () =>{
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('available-users').style.display = "none";
    document.getElementById('participants-button').style.display = "none";
    document.getElementById('available-button').style.display = "flex";
    document.getElementById('participants-list').style.display = "flex";

}

const DispalyAvailableUsers = () =>{
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('available-button').style.display = "none";
    document.getElementById('participants-list').style.display = "none";
    document.getElementById('participants-button').style.display = "flex";
    document.getElementById('available-users').style.display = "flex";

}
const DisplayChat = () => {
    document.getElementById('available-users').style.display = "none";
    document.getElementById('participants-list').style.display = "none";
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('participants-button').style.display = "flex";
    document.getElementById('available-button').style.display = "flex";
    
}
const DisplayChatWindow = () => {
    document.getElementById('available-users').style.display = "none";
    document.getElementById('participants-list').style.display = "none";
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('participants-button').style.display = "flex";
    document.getElementById('available-button').style.display = "flex";
    
}
