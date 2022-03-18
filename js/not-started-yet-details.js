const general = document.getElementById('general');
const committeeMembers =document.getElementById('committee-members');
const coordinator = document.getElementById('coordinator');
const committee = document.getElementById('committee-card');
const addMembers = document.getElementById('add-members-card');

const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'block';
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'none';
}

const ClickLink = (id) => {
    document.getElementById(id).classList.add('details-clicked-button');
    if (id==='l-1') {
        document.getElementById('l-2').classList.remove('details-clicked-button');
        document.getElementById('l-3').classList.remove('details-clicked-button');
        general.style.display = 'block';
        committeeMembers.style.display = 'none';
        coordinator.style.display = 'none';

    } else if (id==='l-2') {
        document.getElementById('l-1').classList.remove('details-clicked-button');
        document.getElementById('l-3').classList.remove('details-clicked-button');
        general.style.display = 'none';
        committeeMembers.style.display = 'grid';
        coordinator.style.display = 'none';


    } else if (id==='l-3') {
        document.getElementById('l-1').classList.remove('details-clicked-button');
        document.getElementById('l-2').classList.remove('details-clicked-button');
        general.style.display = 'none';
        committeeMembers.style.display = 'none';
        coordinator.style.display = 'grid';
    }
}

const ClickLinkCommittee = (id) => {
    document.getElementById(id).classList.add('committee-members-clicked-link');
    if (id==='link-1') {
        document.getElementById('link-2').classList.remove('committee-members-clicked-link');
        committee.style.display = 'flex';
        addMembers.style.display = 'none';

    } else if (id==='link-2') {
        document.getElementById('link-1').classList.remove('committee-members-clicked-link');
        committee.style.display = 'none';
        addMembers.style.display = 'flex';
    }
}