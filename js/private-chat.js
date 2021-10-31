const chatListLink = document.getElementById('link-1');
const availUsers = document.getElementById('link-2');

const onClickChatList = () => {
    chatListLink.classList.add('clicked-link');
    availUsers.classList.remove('clicked-link');
}

const onClickAvailUsers = () => {
    chatListLink.classList.remove('clicked-link');
    availUsers.classList.add('clicked-link');
}

const chatList = document.getElementById('chat-list');
const chatWindow = document.getElementById('chat');


const onClickViewBtn = () => {
    chatList.style.display= "none";
    chatWindow.style.display = "flex";
    const message =document.getElementById('message-list');
    message.scrollTop = message.scrollHeight;
}

const onClickChatListBtn = () => {
    chatList.style.display= "flex";
    chatWindow.style.display = "none";
}