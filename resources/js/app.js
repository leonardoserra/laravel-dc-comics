import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const dangerButtons = document.querySelectorAll(".form-delete-comic button[type='submit']");

dangerButtons.forEach((button) =>

    button.addEventListener('click', event => {

        event.preventDefault();

        const userChoice = confirm('Are you sure to delete this?');

        if (userChoice) {
            button.parentElement.submit();
        }
    })
)





