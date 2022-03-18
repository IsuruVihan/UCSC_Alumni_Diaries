const VisitLinkItem = (id) => {
    const Link1 = document.getElementById('l-1-2');
    const Link2 = document.getElementById('l-2-2');
    const Link3 = document.getElementById('l-3-2');
    const Link4 = document.getElementById('l-4-2');

    const Section1 = document.getElementById('items-available');
    const Section2 = document.getElementById('items-spend');
    const Section3 = document.getElementById('item-spend-approval');
    const Section4 = document.getElementById('item-spent-record');

    if (id==='l-1-2') {
        Link1.classList.add('items-clicked-link');
        Link2.classList.remove('items-clicked-link');
        Link3.classList.remove('items-clicked-link');
        Link4.classList.remove('items-clicked-link');
        Section1.style.display='block';
        Section2.style.display='none';
        Section3.style.display='none';
        Section4.style.display='none';
    } else if (id==='l-2-2') {
        Link1.classList.remove('items-clicked-link');
        Link2.classList.add('items-clicked-link');
        Link3.classList.remove('items-clicked-link');
        Link4.classList.remove('items-clicked-link');
        Section1.style.display='none';
        Section2.style.display='flex';
        Section3.style.display='none';
        Section4.style.display='none';
    } else if (id==='l-3-2') {
        Link1.classList.remove('items-clicked-link');
        Link2.classList.remove('items-clicked-link');
        Link3.classList.add('items-clicked-link');
        Link4.classList.remove('items-clicked-link');
        Section1.style.display='none';
        Section2.style.display='none';
        Section3.style.display='block';
        Section4.style.display='none';
    } else if (id==='l-4-2') {
        Link1.classList.remove('items-clicked-link');
        Link2.classList.remove('items-clicked-link');
        Link3.classList.remove('items-clicked-link');
        Link4.classList.add('items-clicked-link');
        Section1.style.display='none';
        Section2.style.display='none';
        Section3.style.display='none';
        Section4.style.display='flex';
    }
}