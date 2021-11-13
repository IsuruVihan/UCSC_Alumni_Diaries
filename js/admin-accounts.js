const DisplayButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "block";
}

const HideButtons = (id) => {
    const element = document.getElementById(id);
    element.style.display = "none";
}

const onClickState = (id) => {
    switch (id) {
        case "account-signup":
            document.getElementById("account-signup").classList.add("iframe-nav-state");
            document.getElementById("account-request").classList.remove("iframe-nav-state");
            document.getElementById("account-rejected").classList.remove("iframe-nav-state");
            document.getElementById("account-registered").classList.remove("iframe-nav-state");
            document.getElementById("account-banned").classList.remove("iframe-nav-state");
            break;
        case "account-request":
            document.getElementById("account-signup").classList.remove("iframe-nav-state");
            document.getElementById("account-request").classList.add("iframe-nav-state");
            document.getElementById("account-rejected").classList.remove("iframe-nav-state");
            document.getElementById("account-registered").classList.remove("iframe-nav-state");
            document.getElementById("account-banned").classList.remove("iframe-nav-state");
            break;
        case "account-rejected":
            document.getElementById("account-signup").classList.remove("iframe-nav-state");
            document.getElementById("account-request").classList.remove("iframe-nav-state");
            document.getElementById("account-rejected").classList.add("iframe-nav-state");
            document.getElementById("account-registered").classList.remove("iframe-nav-state");
            document.getElementById("account-banned").classList.remove("iframe-nav-state");
            break;
        case "account-registered":
            document.getElementById("account-signup").classList.remove("iframe-nav-state");
            document.getElementById("account-request").classList.remove("iframe-nav-state");
            document.getElementById("account-rejected").classList.remove("iframe-nav-state");
            document.getElementById("account-registered").classList.add("iframe-nav-state");
            document.getElementById("account-banned").classList.remove("iframe-nav-state");
            break;
        case "account-banned":
            document.getElementById("account-signup").classList.remove("iframe-nav-state");
            document.getElementById("account-request").classList.remove("iframe-nav-state");
            document.getElementById("account-rejected").classList.remove("iframe-nav-state");
            document.getElementById("account-registered").classList.remove("iframe-nav-state");
            document.getElementById("account-banned").classList.add("iframe-nav-state");
    }
}

const onClickPageShow = (id) => {
    switch (id) {
        case "account-signup":
            document.getElementById("account-register").style.display = "flex";
            document.getElementById("requests-account").style.display = "none";
            document.getElementById("rejected-request").style.display = "none";
            document.getElementById("registered-account").style.display = "none";
            document.getElementById("banned-account").style.display = "none";
            break;
        case "account-request":
            document.getElementById("account-register").style.display = "none";
            document.getElementById("requests-account").style.display = "flex";
            document.getElementById("rejected-request").style.display = "none";
            document.getElementById("registered-account").style.display = "none";
            document.getElementById("banned-account").style.display = "none";
            break;
        case "account-rejected":
            document.getElementById("account-register").style.display = "none";
            document.getElementById("requests-account").style.display = "none";
            document.getElementById("rejected-request").style.display = "flex";
            document.getElementById("registered-account").style.display = "none";
            document.getElementById("banned-account").style.display = "none";
            break;
        case "account-registered":
            document.getElementById("account-register").style.display = "none";
            document.getElementById("requests-account").style.display = "none";
            document.getElementById("rejected-request").style.display = "none";
            document.getElementById("registered-account").style.display = "flex";
            document.getElementById("banned-account").style.display = "none";
            break;
        case "account-banned":
            document.getElementById("account-register").style.display = "none";
            document.getElementById("requests-account").style.display = "none";
            document.getElementById("rejected-request").style.display = "none";
            document.getElementById("registered-account").style.display = "none";
            document.getElementById("banned-account").style.display = "flex";
    }
}

const TabChanger = (id) => {
    if (id==='member-contribution') {
        $('#member-contribution').show();
        $('#member-involved-projects').hide();

        $('#contributions').addClass('fontColorChange');
        $('#involved-projects').removeClass('fontColorChange');
    } else {
        $('#member-contribution').hide();
        $('#member-involved-projects').show();

        $('#contributions').removeClass('fontColorChange');
        $('#involved-projects').addClass('fontColorChange');
    }
}