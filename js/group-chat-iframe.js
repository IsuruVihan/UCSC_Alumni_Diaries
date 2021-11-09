const groupChat = document.getElementById('group-chat');
const createGroup = document.getElementById('create-group');

const onclickGroupChat= () => {
    groupChat.classList.add('clicked-link');
    createGroup.classList.remove('clicked-link');
    
}

const onclickCreateChat = () => {
    groupChat.classList.remove('clicked-link');
    createGroup.classList.add('clicked-link');
}
