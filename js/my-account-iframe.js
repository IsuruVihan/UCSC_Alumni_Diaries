const account_details = document.getElementById("account-details");
const change_password = document.getElementById("change-password");
const contribution_page = document.getElementById("contribution");
const involved_projects = document.getElementById("involved-projects");
const subscription_page = document.getElementById("subscriptions");
const activity_log = document.getElementById("activity-log");
const subs_recharge = document.getElementById('subs-recharge');
const recharge_details = document.getElementById('recharge-details');
const contributions_cash = document.getElementById("contributions-cash");
const contributions_items = document.getElementById("contributions-items");

const onclickAccountDetails= () => {
    account_details.classList.add('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    involved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
}

const onclickChangePass= () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.add('clicked-link');
    contribution_page.classList.remove('clicked-link');
    involved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
    activity_log.classList.remove('clicked-link');
}

const onclickContribution= () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.add('clicked-link');
    involved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
    activity_log.classList.remove('clicked-link');
}

const onclickProjects = () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    involved_projects.classList.add('clicked-link');
    subscription_page.classList.remove('clicked-link');
    activity_log.classList.remove('clicked-link');
}

const onclickSubscriptions = () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    involved_projects.classList.remove('clicked-link');
    subscription_page.classList.add('clicked-link');
    activity_log.classList.remove('clicked-link');
}

const onclickActivityLog = () => {
    account_details.classList.remove('clicked-link');
    change_password.classList.remove('clicked-link');
    contribution_page.classList.remove('clicked-link');
    involved_projects.classList.remove('clicked-link');
    subscription_page.classList.remove('clicked-link');
    activity_log.classList.add('clicked-link');
}

const onClickRechargeAccount = () => {
    subs_recharge.classList.add('clicked-link');
    recharge_details.classList.remove('clicked-link');
}

const onClickRechargeDetails = () => {
    subs_recharge.classList.remove('clicked-link');
    recharge_details.classList.add('clicked-link');
}

const onClickContributionsCash = () => {
    contributions_cash.classList.add('clicked-link');
    contributions_items.classList.remove('clicked-link');
}

const onClickContributionsItems = () => {
    contributions_cash.classList.remove('clicked-link');
    contributions_items.classList.add('clicked-link');
}