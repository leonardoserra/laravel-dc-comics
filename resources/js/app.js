import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteButton = document.querySelector(".btn.btn-danger");

deleteButton.addEventListener('click', warningAlert);


function warningAlert() {
    const answer = prompt('digit "yes" if you really want to delete it')

    if (answer != "yes") {
        return null;
    } else {
        alert('the element has been deleted')
    }
}