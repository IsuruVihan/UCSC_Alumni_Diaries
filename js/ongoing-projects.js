const details = document.getElementById('details');
const committee_members =document.getElementById('committee-members');
const committee_chat = document.getElementById('committee-chat');
const assets = document.getElementById('assets');
const action = document.getElementById('action');

const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'block';
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = 'none';
}

const ClickLink1 = (id) => {
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

const chatScroll = document.getElementById('message-list');
chatScroll.scrollTop = chatScroll.scrollHeight;
 