const group_chat = document.getElementById("group-chat");
const create_group = document.getElementById("create-group");

const onclickGroupChat= () => {
    group_chat.classList.add('clicked-link');
    create_group.classList.remove('clicked-link');

}

const onclickCreateChat= () => {
    group_chat.classList.remove('clicked-link');
    create_group.classList.add('clicked-link');
   
}

