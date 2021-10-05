const myFunction = () => {
    const z = document.getElementById("myDIV");
    z.innerHTML = "Step 2 : Enter the OTP";
}

const checkEmail = () => {
    const email = document.getElementById('email');
    const filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
        alert('Please provide a valid email address');
        email.focus();
    } else {
        myFunction();
        container_2Show();
        container_1Hide();
    }
}

const container_2Show = () => {
    const x = document.getElementById("container-2");
    x.style.display = "block";
}

const container_1Hide = () => {
    const y = document.getElementById("container-1");
    y.style.display = "none";
}