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
 