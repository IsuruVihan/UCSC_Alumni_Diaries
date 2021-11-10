const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "block";
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "none";
}
const DisplayDetails = () => {
    document.getElementById('committee-chat').style.display = "none";
    document.getElementById('committee-members').style.display = "none";
    document.getElementById('action').style.display = "none";
    document.getElementById('assets').style.display = "none";
    document.getElementById('details').style.display = "flex";
}
const Displaycommitee = () => {
    document.getElementById('details').style.display = "none";
    document.getElementById('committee-chat').style.display = "none";
    document.getElementById('action').style.display = "none";
    document.getElementById('assets').style.display = "none";
    document.getElementById('committee-members').style.display = "flex";
}
const DisplayChat = () => {
    document.getElementById('details').style.display = "none";
    document.getElementById('committee-members').style.display = "none";
    document.getElementById('action').style.display = "none";
    document.getElementById('assets').style.display = "none";
    document.getElementById('committee-chat').style.display = "flex";
}
const DisplayAction = () => {
    document.getElementById('details').style.display = "none";
    document.getElementById('committee-members').style.display = "none";
    document.getElementById('committee-chat').style.display = "none";
    document.getElementById('assets').style.display = "none";
    document.getElementById('action').style.display = "block";
}
const DisplayAssets = () => {
    document.getElementById('details').style.display = "none";
    document.getElementById('committee-members').style.display = "none";
    document.getElementById('committee-chat').style.display = "none";
    document.getElementById('action').style.display = "none";
    document.getElementById('assets').style.display = "grid";
}

const chatScroll = document.getElementById('message-list');
chatScroll.scrollTop = chatScroll.scrollHeight;