import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])



const deleteBtns = document.querySelectorAll(".delete-btn");

deleteBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        event.preventDefault();
        const letterName = btn.getAttribute("data-letter-name");
        const letterSurname = btn.getAttribute("data-letter-surname");
        console.log(letterName, letterSurname);
        const modal = new bootstrap.Modal(
            document.getElementById("deleteModal")
        );
        document.getElementById("modal-letter-name").innerText = `${letterName} ${letterSurname}`;
        document.getElementById("delete").addEventListener("click", () => {
            btn.parentElement.submit();
        });
        modal.show();
    });
});




