const showHide = (id) => {
    if (document.getElementById('icon-' + id).classList.contains('fa-angle-down') ) {
        document.getElementById('icon-' + id).classList.remove('fa-angle-down');
        document.getElementById('icon-' + id).classList.remove('dropdown-icon');
        document.getElementById('icon-' + id).classList.add('fa-angle-up');
        document.getElementById('icon-' + id).classList.add('dropup-icon');
        document.getElementById('ans-' + id).style.display = 'block';
    } else {
        document.getElementById('icon-' + id).classList.remove('fa-angle-up');
        document.getElementById('icon-' + id).classList.remove('dropup-icon');
        document.getElementById('icon-' + id).classList.add('fa-angle-down');
        document.getElementById('icon-' + id).classList.add('dropdown-icon');
        document.getElementById('ans-' + id).style.display = 'none';
    }
}