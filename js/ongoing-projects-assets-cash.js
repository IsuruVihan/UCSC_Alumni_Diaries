const VisitLink = (id) => {
    if (id==='l-1-1') {
        document.getElementById('l-1-1').classList.add('cash-clicked-link');
        document.getElementById('l-2-1').classList.remove('cash-clicked-link');
        document.getElementById('l-3-1').classList.remove('cash-clicked-link');
        document.getElementById('l-4-1').classList.remove('cash-clicked-link');
    } else if (id==='l-2-1') {
        document.getElementById('l-1-1').classList.remove('cash-clicked-link');
        document.getElementById('l-2-1').classList.add('cash-clicked-link');
        document.getElementById('l-3-1').classList.remove('cash-clicked-link');
        document.getElementById('l-4-1').classList.remove('cash-clicked-link');
    } else if (id==='l-3-1') {
        document.getElementById('l-1-1').classList.remove('cash-clicked-link');
        document.getElementById('l-2-1').classList.remove('cash-clicked-link');
        document.getElementById('l-3-1').classList.add('cash-clicked-link');
        document.getElementById('l-4-1').classList.remove('cash-clicked-link');
    } else if (id==='l-4-1') {
        document.getElementById('l-1-1').classList.remove('cash-clicked-link');
        document.getElementById('l-2-1').classList.remove('cash-clicked-link');
        document.getElementById('l-3-1').classList.remove('cash-clicked-link');
        document.getElementById('l-4-1').classList.add('cash-clicked-link');
    }
}