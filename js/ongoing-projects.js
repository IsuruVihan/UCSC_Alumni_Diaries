const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'block';
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'none';
}

const ClickLink1 = (id) => {
    const details = document.getElementById('details');
    const committee_members =document.getElementById('committee-members');
    const committee_chat = document.getElementById('committee-chat');
    const assets = document.getElementById('assets');
    const action = document.getElementById('action');

    document.getElementById(id).classList.add('clicked');
    if (id==='link-1') {
        document.getElementById('link-2').classList.remove('clicked');
        document.getElementById('link-3').classList.remove('clicked');
        document.getElementById('link-4').classList.remove('clicked');
        document.getElementById('link-5').classList.remove('clicked');
        details.style.display = 'flex';
        committee_members.style.display = 'none';
        committee_chat.style.display = 'none';
        assets.style.display = 'none';
        action.style.display = 'none';
    } else if (id==='link-2') {
        document.getElementById('link-1').classList.remove('clicked');
        document.getElementById('link-3').classList.remove('clicked');
        document.getElementById('link-4').classList.remove('clicked');
        document.getElementById('link-5').classList.remove('clicked');
        committee_members.style.display = 'flex';
        details.style.display = 'none';
        committee_chat.style.display = 'none';
        assets.style.display = 'none';
        action.style.display = 'none';
    } else if (id==='link-3') {
        document.getElementById('link-1').classList.remove('clicked');
        document.getElementById('link-2').classList.remove('clicked');
        document.getElementById('link-4').classList.remove('clicked');
        document.getElementById('link-5').classList.remove('clicked');
        committee_chat.style.display = 'flex';
        committee_members.style.display = 'none';
        details.style.display = 'none';
        assets.style.display = 'none';
        action.style.display = 'none';
    } else if (id==='link-4') {
        document.getElementById('link-1').classList.remove('clicked');
        document.getElementById('link-2').classList.remove('clicked');
        document.getElementById('link-3').classList.remove('clicked');
        document.getElementById('link-5').classList.remove('clicked');
        assets.style.display = 'grid';
        action.style.display = 'none';
        committee_chat.style.display = 'none';
        committee_members.style.display = 'none';
        details.style.display = 'none';
    } else if (id==='link-5') {
        document.getElementById('link-1').classList.remove('clicked');
        document.getElementById('link-2').classList.remove('clicked');
        document.getElementById('link-3').classList.remove('clicked');
        document.getElementById('link-4').classList.remove('clicked');
        action.style.display = 'block';
        assets.style.display = 'none';
        committee_chat.style.display = 'none';
        committee_members.style.display = 'none';
        details.style.display = 'none';
    }
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