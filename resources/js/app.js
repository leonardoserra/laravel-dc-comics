import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteButton = document.getElementById("delete-button");

deleteButton.addEventListener('click', warningAlert);


function warningAlert() {
    alert('sicuro di volerlo eliminare');
}