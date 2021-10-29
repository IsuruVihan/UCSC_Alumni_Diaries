const postReportsTab = document.getElementById('post-rep-tab');
const commentReportsTab = document.getElementById('com-rep-tab');

const onClickPostReports = () => {
    postReportsTab.classList.add('clicked');
    commentReportsTab.classList.remove('clicked');
}

const onClickCommentReports = () => {
    commentReportsTab.classList.add('clicked');
    postReportsTab.classList.remove('clicked');
}