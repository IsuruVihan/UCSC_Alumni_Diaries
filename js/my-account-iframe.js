const onclickAccountDetails= () => {
    account_details.classList.add('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    invoved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
}

const account_details = document.getElementById("account-details");
const change_password = document.getElementById("change-password");
const contribution_page = document.getElementById("contribution");
const invoved_projects = document.getElementById("invoved-projects");
const subscription_page = document.getElementById("subscriptions");


const onclickChangePass= () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.add('clicked-link');
    contribution_page.classList.remove('clicked-link');
    invoved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
}

const onclickContribution= () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.add('clicked-link');
    invoved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
    
}

const onclickProjects = () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    invoved_projects.classList.add('clicked-link');
    subscription_page.classList.remove('clicked-link');
}
const onclickSubscriptions = () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    invoved_projects.classList.remove('clicked-link');
    subscription_page.classList.add('clicked-link');
}