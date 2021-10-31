const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "block";
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "none";
}

const DisplayEditProjectNameDiv = () => {
    document.getElementById('project-name-div').style.display = "none";
    document.getElementById('edit-project-name-div').style.display = "flex";
}

const HideEditProjectNameDiv = () => {
    document.getElementById('project-name-div').style.display = "block";
    document.getElementById('edit-project-name-div').style.display = "none";
}
const DisplayParticipantsList = () => {
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('available-button').style.display = "none";
    document.getElementById('participants-list').style.display = "flex";
}

const HideChatWindow = () => {
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('available-button').style.display = "block";
    document.getElementById('participants-list').style.display = "none";
}

const DispalyAvailableUsers = () => {
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('participants-button').style.display = "none";
    document.getElementById('available-users').style.display = "flex";
}

const HideChat = () => {
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('participants-button').style.display = "block";
    document.getElementById('available-users').style.display = "none";
}

const chatScroll = document.getElementById('message-list');
chatScroll.scrollTop = chatScroll.scrollHeight;