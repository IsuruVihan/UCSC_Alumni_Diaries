const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "block";
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "none";
}

const ClickLink = (id) => {
    const link1 = document.getElementById('l-1');
    const link2 = document.getElementById('l-2');
    const link3 = document.getElementById('l-3');
    const link4 = document.getElementById('l-4');
    const link5 = document.getElementById('l-5');

    if (id==='l-1') {
        link1.classList.add('clicked-link');
        link2.classList.remove('clicked-link');
        link3.classList.remove('clicked-link');
        link4.classList.remove('clicked-link');
        link5.classList.remove('clicked-link');
    } else if (id==='l-2') {
        link1.classList.remove('clicked-link');
        link2.classList.add('clicked-link');
        link3.classList.remove('clicked-link');
        link4.classList.remove('clicked-link');
        link5.classList.remove('clicked-link');
    } else if (id==='l-3') {
        link1.classList.remove('clicked-link');
        link2.classList.remove('clicked-link');
        link3.classList.add('clicked-link');
        link4.classList.remove('clicked-link');
        link5.classList.remove('clicked-link');
    } else if (id==='l-4') {
        link1.classList.remove('clicked-link');
        link2.classList.remove('clicked-link');
        link3.classList.remove('clicked-link');
        link4.classList.add('clicked-link');
        link5.classList.remove('clicked-link');
    } else if (id==='l-5') {
        link1.classList.remove('clicked-link');
        link2.classList.remove('clicked-link');
        link3.classList.remove('clicked-link');
        link4.classList.remove('clicked-link');
        link5.classList.add('clicked-link');
    }
}

const chatScroll = document.getElementById('message-list');
chatScroll.scrollTop = chatScroll.scrollHeight;