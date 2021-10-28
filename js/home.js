const generalTab = document.getElementById('general-tab');
const adminTab = document.getElementById('admin-tab');

const onClickGeneral = () => {
    adminTab.classList.remove('clicked-link');
    generalTab.classList.add('clicked-link');
}

const onClickAdmin = () => {
    adminTab.classList.add('clicked-link');
    generalTab.classList.remove('clicked-link');
}