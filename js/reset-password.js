const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = []
    if (password.value === '' || password.value == null) {
        messages.push('Password is required!');
    }

    else if (confirmPassword.value === '' || confirmPassword.value == null) {
        messages.push('Password confirmation is required!');
    }

    else if ( confirmPassword.value == null &&  password.value == null){
        messages.push('Password is required!');
    }

    else if (password.value.length <= 6) {
        messages.push('Password must be longer than 6 characters!');
    }

    else if (password.value.length >= 20) {
        messages.push('Password must be less than 20 characters!');
    }

    else if (password.value != confirmPassword.value) {
        messages.push('Passwords do not match!');
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join('!  ');
    }
})
