const DisplayParticipantsList = () =>{
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('available-button').style.display = "none";
    document.getElementById('participants-list').style.display = "flex";

}

const DispalyAvailableUsers = () =>{
    document.getElementById('chat-window').style.display = "none";
    document.getElementById('chat-window-01').style.display = "none";
    document.getElementById('participants-button').style.display = "none";
    document.getElementById('available-users').style.display = "flex";

}
const HideChat = () => {
    document.getElementById('available-users').style.display = "none";
    document.getElementById('participants-list').style.display = "none";
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('participants-button').style.display = "flex";
    document.getElementById('available-button').style.display = "flex";
    
}
const HideChatWindow = () => {
    document.getElementById('available-users').style.display = "none";
    document.getElementById('participants-list').style.display = "none";
    document.getElementById('chat-window').style.display = "flex";
    document.getElementById('chat-window-01').style.display = "flex";
    document.getElementById('participants-button').style.display = "flex";
    document.getElementById('available-button').style.display = "flex";
    
}