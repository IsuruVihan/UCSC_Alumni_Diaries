const VisitLink = (id) => {
    if (id==='l-1') {
        document.getElementById('l-1').classList.add('clicked-link');
        document.getElementById('l-2').classList.remove('clicked-link');
        document.getElementById('l-3').classList.remove('clicked-link');
        document.getElementById('l-4').classList.remove('clicked-link');
    } else if (id==='l-2') {
        document.getElementById('l-1').classList.remove('clicked-link');
        document.getElementById('l-2').classList.add('clicked-link');
        document.getElementById('l-3').classList.remove('clicked-link');
        document.getElementById('l-4').classList.remove('clicked-link');
    } else if (id==='l-3') {
        document.getElementById('l-1').classList.remove('clicked-link');
        document.getElementById('l-2').classList.remove('clicked-link');
        document.getElementById('l-3').classList.add('clicked-link');
        document.getElementById('l-4').classList.remove('clicked-link');
    } else if (id==='l-4') {
        document.getElementById('l-1').classList.remove('clicked-link');
        document.getElementById('l-2').classList.remove('clicked-link');
        document.getElementById('l-3').classList.remove('clicked-link');
        document.getElementById('l-4').classList.add('clicked-link');
    }
}