document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("formModal");
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const contactForm = document.getElementById("contactForm");

    openModalBtn.addEventListener("click", function () {
        modal.classList.add("show");
    });

    closeModalBtn.addEventListener("click", function () {
        modal.classList.remove("show");
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.classList.remove("show");
        }
    });

    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();
        Swal.fire({
            title: "Success!",
            text: "Your form has been successfully submitted. Our team will contact you later.",
            icon: "success",
            confirmButtonColor: "#28a745",
            confirmButtonText: "OK"
        }).then((result) => {
            if (result.isConfirmed) {
                // Hide the modal after the user clicks "OK"
                modal.classList.remove("show");
                // Reset the form
                contactForm.reset();
            }
        });
    });
});