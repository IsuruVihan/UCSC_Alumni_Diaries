const VisitLinkNav = (id) => {
    const Link1 = document.getElementById('l-1');
    const Link2 = document.getElementById('l-2');
    const ProjectCash = document.getElementById('project-cash');
    const ProjectItems = document.getElementById('project-item');

    if (id==='l-1') {
        Link1.classList.add('clicked-link');
        Link2.classList.remove('clicked-link');
        ProjectCash.style.display = 'grid';
        ProjectItems.style.display = 'none';
    } else if (id==='l-2') {
        Link2.classList.add('clicked-link');
        Link1.classList.remove('clicked-link');
        ProjectItems.style.display = 'block';
        ProjectCash.style.display = 'none';
    }
}