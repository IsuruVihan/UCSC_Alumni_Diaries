const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []

    if ((password.value === '' || password.value == null) && (email.value === '' || email.value == null) ){
        messages.push('Email and Password is Required!')
    }

    else if (password.value === '' || password.value == null) {
        messages.push('Password is Required!')
    }

    else if (email.value === '' || email.value == null) {
        messages.push('Email is Required!')
    }


    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join('!')
    }

    
})