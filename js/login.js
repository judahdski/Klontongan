const inputEmail = document.querySelector('#email');
const inputPass = document.querySelector('#password');

inputEmail.addEventListener('click', () => {
    if (inputEmail.getAttribute('placeholder') === '') {
        inputEmail.setAttribute('placeholder', 'Email');
    } else {
        inputEmail.setAttribute('placeholder', '');
    }
});

inputPass.addEventListener('click', () => {
    if (inputPass.getAttribute('placeholder') === '') {
        inputPass.setAttribute('placeholder', 'Password');
    } else {
        inputPass.setAttribute('placeholder', '');
    }
});
