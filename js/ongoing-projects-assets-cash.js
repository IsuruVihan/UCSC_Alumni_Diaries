const VisitLink = (id) => {
    const Link1 = document.getElementById('l-1-1');
    const Link2 = document.getElementById('l-2-1');
    const Link3 = document.getElementById('l-3-1');
    const Link4 = document.getElementById('l-4-1');

    const Section1 = document.getElementById('cash-summary');
    const Section2 = document.getElementById('cash-spend');
    const Section3 = document.getElementById('cash-approvals');
    const Section4 = document.getElementById('cash-spent-records');

    if (id==='l-1-1') {
        Link1.classList.add('cash-clicked-link');
        Link2.classList.remove('cash-clicked-link');
        Link3.classList.remove('cash-clicked-link');
        Link4.classList.remove('cash-clicked-link');
        Section1.style.display='grid';
        Section2.style.display='none';
        Section3.style.display='none';
        Section4.style.display='none';
    } else if (id==='l-2-1') {
        Link1.classList.remove('cash-clicked-link');
        Link2.classList.add('cash-clicked-link');
        Link3.classList.remove('cash-clicked-link');
        Link4.classList.remove('cash-clicked-link');
        Section1.style.display='none';
        Section2.style.display='flex';
        Section3.style.display='none';
        Section4.style.display='none';
    } else if (id==='l-3-1') {
        Link1.classList.remove('cash-clicked-link');
        Link2.classList.remove('cash-clicked-link');
        Link3.classList.add('cash-clicked-link');
        Link4.classList.remove('cash-clicked-link');
        Section1.style.display='none';
        Section2.style.display='none';
        Section3.style.display='block';
        Section4.style.display='none';
    } else if (id==='l-4-1') {
        Link1.classList.remove('cash-clicked-link');
        Link2.classList.remove('cash-clicked-link');
        Link3.classList.remove('cash-clicked-link');
        Link4.classList.add('cash-clicked-link');
        Section1.style.display='none';
        Section2.style.display='none';
        Section3.style.display='none';
        Section4.style.display='flex';
    }
}