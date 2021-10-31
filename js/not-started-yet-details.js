const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'block';
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'none';
}

const ClickLink = (id) => {
    document.getElementById(id).classList.add('clicked-link');
    if (id==='l-1') {
        document.getElementById('l-2').classList.remove('clicked-link');
        document.getElementById('l-3').classList.remove('clicked-link');
    } else if (id==='l-2') {
        document.getElementById('l-1').classList.remove('clicked-link');
        document.getElementById('l-3').classList.remove('clicked-link');
    } else if (id==='l-3') {
        document.getElementById('l-1').classList.remove('clicked-link');
        document.getElementById('l-2').classList.remove('clicked-link');
    }
}