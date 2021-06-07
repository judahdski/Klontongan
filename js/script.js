// Nav desktop ~ profile user
let userPicture = document.querySelector('.picture-user');
let dropdownDesktopmenu = document.querySelector('.profile-desktop');

userPicture.addEventListener('click', function () {
    dropdownDesktopmenu.setAttribute('id', '');
});

dropdownDesktopmenu.addEventListener('click', function () {
    dropdownDesktopmenu.setAttribute('id', 'profile-dropdown');
});

// Nav mobile ~ hamburger button
let hamburger = document.querySelector('.hamburger');
let navDropdown = document.querySelector('.nav-link-mobile');

hamburger.addEventListener('click', function () {
    navDropdown.setAttribute('id', '');
});

navDropdown.addEventListener('click', function () {
    navDropdown.setAttribute('id', 'nav-mobile-non-active');
});
