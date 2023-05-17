import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const dangerButtons = document.querySelectorAll(".btn-danger");

dangerButtons.forEach((button) =>

    button.addEventListener('click', function () {


        let flag = false;
        while (!flag) {
            const answer = prompt('are you sure? digit "yes" or "no"');
            if (answer === "no") {
                this.button.disabled = true;
                flag = true;
            } else if (answer === "yes") {
                alert('the element has been deleted')
                flag = true;

            } else {
                alert('digit yes or no')
            }
        }
    })
)





