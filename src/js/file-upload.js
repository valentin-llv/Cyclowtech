'use strict'

function bindFileInputEvent() {
    document.getElementById('file').addEventListener('change', (e) => {
        document.getElementById('file_name').innerHTML = document.getElementById('file').value.replace('C:\\fakepath\\', '');
    });
}

window.addEventListener('load', bindFileInputEvent);