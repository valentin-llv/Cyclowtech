'use strict'

function bindMobileMenuEvent() {
    document.getElementById("top-menu-hamburger").addEventListener('change', () => {
        if(document.getElementById("top-menu-hamburger").checked) {
            document.getElementById('mobile-menu').classList.remove('left-full');
            document.getElementById('mobile-menu').classList.add('left-0');
        } else {
            document.getElementById('mobile-menu').classList.add('left-full');
            document.getElementById('mobile-menu').classList.remove('left-0');
        }
    });

    window.addEventListener('resize', () => {
        document.getElementById('mobile-menu').classList.add('left-full');
        document.getElementById('mobile-menu').classList.remove('left-0');

        document.getElementById("top-menu-hamburger").checked = false;
    });
}

window.addEventListener('load', bindMobileMenuEvent);