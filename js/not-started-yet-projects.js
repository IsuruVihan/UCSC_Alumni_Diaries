const ClickLink = (id) => {
    const link1 = document.getElementById('l-1');
    const link2 = document.getElementById('l-2');

    if (id==='l-1') {
        link1.classList.add('clicked-link');
        link2.classList.remove('clicked-link');
    } else {
        link2.classList.add('clicked-link');
        link1.classList.remove('clicked-link');
    }
}