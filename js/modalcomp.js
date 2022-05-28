//modal__comp

const characteristics = document.querySelector(".btn__comp__card")
const modalComp = document.querySelector(".modal_comp_bg")
const closeComp = document.querySelector(".close_comp")
characteristics.addEventListener("click", (e) => {
  e.preventDefault();
  modalComp.style.display = "flex";
});

closeComp.addEventListener("click", (e) => {
  e.preventDefault();
  modalComp.style.display = "none";
});

modalComp.addEventListener("click", (event) => {
  if (event.target == modalComp) {
    modalComp.style.display = "none";
  }
});