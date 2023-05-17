import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const dangerButtons = document.querySelectorAll(".btn-danger");

dangerButtons.forEach((button) =>

    button.addEventListener('click', function () {


        const answer = prompt('digit "yes" if you really want to delete it');
        if (answer != "yes") {
            return;
        } else {
            alert('the element has been deleted')
            return;
        }
    })
)




