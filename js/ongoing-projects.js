
    const link1 = document.getElementById('link-1');
    const link2 = document.getElementById('link-2');
    const link3 = document.getElementById('link-3');
    const link4 = document.getElementById('link-4');
    const link5 = document.getElementById('link-5');

    const DisplayDetails= () => {
        link1.classList.add('clicked');
        link2.classList.remove('clicked');
        link3.classList.remove('clicked');
        link4.classList.remove('clicked');
        link5.classList.remove('clicked');
    }
    const Displaycommitee= () => {
        link1.classList.remove('clicked');
        link2.classList.add('clicked');
        link3.classList.remove('clicked');
        link4.classList.remove('clicked');
        link5.classList.remove('clicked');
    }
    const DisplayChat= () => {
        link1.classList.remove('clicked');
        link2.classList.remove('clicked');
        link3.classList.add('clicked');
        link4.classList.remove('clicked');
        link5.classList.remove('clicked');
    }
    const DisplayAssets= () => {
        link1.classList.remove('clicked');
        link2.classList.remove('clicked');
        link3.classList.remove('clicked');
        link4.classList.add('clicked');
        link5.classList.remove('clicked');
    }
    const DisplayAction= () => {
        link1.classList.remove('clicked');
        link2.classList.remove('clicked');
        link3.classList.remove('clicked');
        link4.classList.remove('clicked');
        link5.classList.add('clicked');
    }
    