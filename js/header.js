let hamburger = document.querySelector('.hamburger');
let navLink = document.querySelector('.nav-link-mobile');

hamburger.addEventListener('click', function (event) {
    navLink.setAttribute('id', 'nav-active');
});

let body = document.getElementById('main');

body.addEventListener('click', function (event) {
    navLink.setAttribute('id', '');
});
