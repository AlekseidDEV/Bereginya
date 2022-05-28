const linkEmail = document.querySelector(".adress__email");
const modalEmail = document.querySelector(".modal__bg_email");
const closeModalEmail = document.querySelector(".close_email_mod");
linkEmail.addEventListener("click", (e) => {
    modalEmail.style.display = "flex";
  });
  
  closeModalEmail.addEventListener("click", (e) => {
    modalEmail.style.display = "none";
  });
  
  modalEmail.addEventListener("click", (event) => {
    if (event.target == modalEmail) {
      modalEmail.style.display = "none";
    }
  });