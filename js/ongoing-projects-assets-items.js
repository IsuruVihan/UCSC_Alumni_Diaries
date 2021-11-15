const VisitLinkItem = (id) => {
    if (id==='l-1-2') {
        document.getElementById('l-1-2').classList.add('items-clicked-link');
        document.getElementById('l-2-2').classList.remove('items-clicked-link');
        document.getElementById('l-3-2').classList.remove('items-clicked-link');
        document.getElementById('l-4-2').classList.remove('items-clicked-link');
    } else if (id==='l-2-2') {
        document.getElementById('l-1-2').classList.remove('items-clicked-link');
        document.getElementById('l-2-2').classList.add('items-clicked-link');
        document.getElementById('l-3-2').classList.remove('items-clicked-link');
        document.getElementById('l-4-2').classList.remove('items-clicked-link');
    } else if (id==='l-3-2') {
        document.getElementById('l-1-2').classList.remove('items-clicked-link');
        document.getElementById('l-2-2').classList.remove('items-clicked-link');
        document.getElementById('l-3-2').classList.add('items-clicked-link');
        document.getElementById('l-4-2').classList.remove('items-clicked-link');
    } else if (id==='l-4-2') {
        document.getElementById('l-1-2').classList.remove('items-clicked-link');
        document.getElementById('l-2-2').classList.remove('items-clicked-link');
        document.getElementById('l-3-2').classList.remove('items-clicked-link');
        document.getElementById('l-4-2').classList.add('items-clicked-link');
    }
}