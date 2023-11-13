'use strict'

function bindImageSwitch() {
    document.getElementById('show-images').addEventListener('click', () => {
        let images = document.getElementsByClassName('hidden-image');
        if(document.getElementById('show-images').checked) {
            for(let i = 0; i < images.length; i++) {
                images[i].src = images[i].dataset.imgsrc;
                images[i].classList.remove("hidden");
            }
        } else {
            for(let i = 0; i < images.length; i++) {
                images[i].classList.add("hidden");
            }
        }
    });
}

window.addEventListener('load', bindImageSwitch);