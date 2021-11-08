const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "block";
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "none";
}

const fontColorChanger = () => {
    document.getElementById('involved-projects').classList.remove("fontColorChange");
    document.getElementById('contributions').classList.add("fontColorChange");
}

const fontColorChangerProjects = () => {
    document.getElementById('involved-projects').classList.add("fontColorChange");
    document.getElementById('contributions').classList.remove("fontColorChange");

}

const onClickState = (id) => {
    switch (id) {

        case "account-signup":
            document.getElementById('account-signup').classList.add("iframe-nav-state");
            document.getElementById('account-request').classList.remove("iframe-nav-state");
            document.getElementById('account-rejected').classList.remove("iframe-nav-state");
            document.getElementById('account-registered').classList.remove("iframe-nav-state");
            document.getElementById('account-banned').classList.remove("iframe-nav-state");
            break;

        case "account-request":
            document.getElementById('account-request').classList.add("iframe-nav-state");
            document.getElementById('account-signup').classList.remove("iframe-nav-state");
            document.getElementById('account-rejected').classList.remove("iframe-nav-state");
            document.getElementById('account-registered').classList.remove("iframe-nav-state");
            document.getElementById('account-banned').classList.remove("iframe-nav-state");
            break;

        case "account-rejected":
            document.getElementById('account-rejected').classList.add("iframe-nav-state");
            document.getElementById('account-request').classList.remove("iframe-nav-state");
            document.getElementById('account-signup').classList.remove("iframe-nav-state");
            document.getElementById('account-registered').classList.remove("iframe-nav-state");
            document.getElementById('account-banned').classList.remove("iframe-nav-state");
            break;

        case "account-registered":
            document.getElementById('account-registered').classList.add("iframe-nav-state");
            document.getElementById('account-request').classList.remove("iframe-nav-state");
            document.getElementById('account-rejected').classList.remove("iframe-nav-state");
            document.getElementById('account-signup').classList.remove("iframe-nav-state");
            document.getElementById('account-banned').classList.remove("iframe-nav-state");
            break;

        case "account-banned":
            document.getElementById('account-banned').classList.add("iframe-nav-state");
            document.getElementById('account-request').classList.remove("iframe-nav-state");
            document.getElementById('account-rejected').classList.remove("iframe-nav-state");
            document.getElementById('account-registered').classList.remove("iframe-nav-state");
            document.getElementById('account-signup').classList.remove("iframe-nav-state");
            break;

        default:
            document.getElementById('account-request').classList.add("iframe-nav-state");
    }
}

const onClickPageShow = (id) => {
    switch (id) {
        case "account-signup":
            document.getElementById('account-register').style.display="flex";
            document.getElementById('requests-account').style.display="none";
            document.getElementById('rejected-request').style.display="none";
            document.getElementById('registered-account').style.display="none";
            document.getElementById('banned-account').style.display="none";
            break;
        case "account-request":
            document.getElementById('account-register').style.display="none";
            document.getElementById('requests-account').style.display="flex";
            document.getElementById('rejected-request').style.display="none";
            document.getElementById('registered-account').style.display="none";
            document.getElementById('banned-account').style.display="none";
            break;
        case "account-rejected":
            document.getElementById('account-register').style.display="none";
            document.getElementById('requests-account').style.display="none";
            document.getElementById('rejected-request').style.display="flex";
            document.getElementById('registered-account').style.display="none";
            document.getElementById('banned-account').style.display="none";
            break;
        case "account-registered":
            document.getElementById('account-register').style.display="none";
            document.getElementById('requests-account').style.display="none";
            document.getElementById('rejected-request').style.display="none";
            document.getElementById('registered-account').style.display="flex";
            document.getElementById('banned-account').style.display="none";
            break;
        case "account-banned":
            document.getElementById('account-register').style.display="none";
            document.getElementById('requests-account').style.display="none";
            document.getElementById('rejected-request').style.display="none";
            document.getElementById('registered-account').style.display="none";
            document.getElementById('banned-account').style.display="flex";
            break;
        default:
            document.getElementById('account-register').style.display="flex";
    }
}