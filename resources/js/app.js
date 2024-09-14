import "./bootstrap";

const edit_btn_contact = document.querySelectorAll(".edit_btn_contact");
const container_contact_form = document.querySelectorAll(
    ".container-contact .container-contact-form"
);
const cancelBtn = document.querySelectorAll(".cancel_form_contact");

console.log(container_contact_form);

edit_btn_contact.forEach((data, index) => {
    data.addEventListener("click", (event) => {
        event.preventDefault();
        container_contact_form.forEach((form) => {
            form.classList.remove("active");
        });
        container_contact_form[index].classList.add("active");

        cancelBtn.forEach((cancel) => {
            cancel.addEventListener("click", (event) => {
                event.preventDefault();
                container_contact_form[index].classList.remove("active");
            });
        });
    });
});

