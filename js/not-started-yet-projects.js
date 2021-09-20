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

const DisplayEditProjectDescriptionDiv = () => {
    document.getElementById('project-description').style.display = "none";
    document.getElementById('edit-project-description').style.display = "flex";
}

const HideEditProjectDescriptionDiv = () => {
    document.getElementById('project-description').style.display = "block";
    document.getElementById('edit-project-description').style.display = "none";
}

const DisplayEditCoordBtn = () => {
    document.getElementById('edit-coord-btn').style.display = 'block';
}

const HideEditCoordBtn = () => {
    document.getElementById('edit-coord-btn').style.display = 'none';
}

const DisplayRemoveMemberBtn = (id) => {
    document.getElementById(id).style.display = 'block';
}

const HideRemoveMemberBtn = (id) => {
    document.getElementById(id).style.display = 'none';
}