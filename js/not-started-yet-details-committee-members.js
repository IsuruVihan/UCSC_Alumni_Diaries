const ClickLink = (id) => {
    document.getElementById(id).classList.add('clicked-link');
    if (id==='l-1') {
        document.getElementById('l-2').classList.remove('clicked-link');
    } else if (id==='l-2') {
        document.getElementById('l-1').classList.remove('clicked-link');
    }
}