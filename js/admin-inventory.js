const cash = document.getElementById('link-1');
const items = document.getElementById('link-2');
const subscriptions = document.getElementById('link-3');
const available = document.getElementById('available-assets');
const transferred = document.getElementById('transferred-assets');
const to_be_acc = document.getElementById('to-be-acc-assets');
const received = document.getElementById('received-assets');


const onClickAvailable = () => {
    available.classList.add('clicked-link');
    transferred.classList.remove('clicked-link');
    to_be_acc.classList.remove('clicked-link');
    received.classList.remove('clicked-link');
}

const onClickTransferred = () => {
    available.classList.remove('clicked-link');
    transferred.classList.add('clicked-link');
    to_be_acc.classList.remove('clicked-link');
    received.classList.remove('clicked-link');
}

const onClickToBeAcc = () => {
    available.classList.remove('clicked-link');
    transferred.classList.remove('clicked-link');
    to_be_acc.classList.add('clicked-link');
    received.classList.remove('clicked-link');
}

const onClickReceived = () => {
    available.classList.remove('clicked-link');
    transferred.classList.remove('clicked-link');
    to_be_acc.classList.remove('clicked-link');
    received.classList.add('clicked-link');
}

const onClickCash =() => {
    cash.classList.add('clicked-link');
    items.classList.remove('clicked-link');
    subscriptions.classList.remove('clicked-link');
}

const onClickItems =() => {
    cash.classList.remove('clicked-link');
    items.classList.add('clicked-link');
    subscriptions.classList.remove('clicked-link');
}

const onClickSubscriptions =() => {
    cash.classList.remove('clicked-link');
    items.classList.remove('clicked-link');
    subscriptions.classList.add('clicked-link');
}
