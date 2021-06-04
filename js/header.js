// let hamburger = document.querySelector('.hamburger');
// let navLink = document.querySelector('.nav-link-mobile');

// hamburger.addEventListener('click', function (event) {
//     navLink.setAttribute('id', 'nav-active');
// });

// let body = document.getElementById('main');

// body.addEventListener('click', function (event) {
//     navLink.setAttribute('id', '');
// });

// Nav desktop ~ profile user
let imageUser = document.querySelector('.picture-user');
let profileDropdown = document.querySelector('.profile-setting');

imageUser.addEventListener('click', function (event) {
    profileDropdown.setAttribute('id', '');
});

profileDropdown.addEventListener('click', function (event) {
    profileDropdown.setAttribute('id', 'profile-setting-non-active');
});
