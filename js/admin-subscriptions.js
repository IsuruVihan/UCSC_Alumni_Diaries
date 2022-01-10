const tobeAcceptedTab = document.getElementById('to-be-accepted');
const doneTab = document.getElementById('sub-done');
const rejTab = document.getElementById('sub-rej');
const statusTab = document.getElementById('sub-status');

const onClickSubtba = () => {
    tobeAcceptedTab.classList.add('clicked');
    doneTab.classList.remove('clicked');
    rejTab.classList.remove('clicked');
    statusTab.classList.remove('clicked');
}

const onClickDone = () => {
    doneTab.classList.add('clicked');
    tobeAcceptedTab.classList.remove('clicked');
    rejTab.classList.remove('clicked');
    statusTab.classList.remove('clicked');
}

const onClickRej = () => {
    rejTab.classList.add('clicked');
    tobeAcceptedTab.classList.remove('clicked');
    doneTab.classList.remove('clicked');
    statusTab.classList.remove('clicked');
}

const onClickStatus = () => {
    statusTab.classList.add('clicked');
    tobeAcceptedTab.classList.remove('clicked');
    doneTab.classList.remove('clicked');
    rejTab.classList.remove('clicked');
}