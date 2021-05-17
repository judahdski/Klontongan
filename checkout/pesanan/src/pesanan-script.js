let btnContainer = document.getElementById('breadcrumb');
let btns = btnContainer.querySelectorAll('.nav-dsktp-btn');

// Loop through the buttons and add the active class to the current/clicked button
for (let items of btns) {
    btns[items].addEventListener('click', function () {
        var current = document.querySelector('.active');
        current[0].className = current[0].className.replace(' active', '');
        this.className += ' active';
    });
}

let btnBackwards = document.getElementById('prev-page-btn');
