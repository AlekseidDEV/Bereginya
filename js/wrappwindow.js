//wrapp_window
const btnNumbCall = document.querySelector(".numb__call");
const btnRequestCall = document.querySelector(".requestcall");
const modalWind = document.querySelector(".wrapp_window");
const closeModalWind = document.querySelector(".close_btn");

btnNumbCall.addEventListener("click", (e) => {
  e.preventDefault()
  modalWind.style.display = "flex";
});

btnRequestCall.addEventListener("click", (e) => {
  e.preventDefault()
  modalWind.style.display = "flex";
});

closeModalWind.addEventListener("click", (e) => {
  e.preventDefault()
  modalWind.style.display = "none";
});

modalWind.addEventListener("click", (e) => {
  e.preventDefault()
  if (e.target == modalWind) {
    modalWind.style.display = "none";
  }
});