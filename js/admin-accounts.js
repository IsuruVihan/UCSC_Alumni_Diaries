const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "block";
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "none";
}

const fontColorChanger =() => {
    document.getElementById('involved-projects').classList.remove("fontColorChange");
    document.getElementById('contributions').classList.add("fontColorChange");
} 

const fontColorChangerProjects =() => {
    document.getElementById('involved-projects').classList.add("fontColorChange");
    document.getElementById('contributions').classList.remove("fontColorChange");
    
} 