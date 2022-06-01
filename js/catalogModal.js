//catalog

const basketModalOpen = document.querySelector(".basket__catalog");
const modalBasket = document.querySelector(".bg_modal");
const modalBasketClose = document.querySelector(".close__modal_wind");

basketModalOpen.addEventListener("click", (e) => {
  e.preventDefault();
  modalBasket.style.display = "flex";
});

modalBasketClose.addEventListener("click", (e) => {
  e.preventDefault();
  modalBasket.style.display = "none";
});

modalBasket.addEventListener("click", (e) => {
  if (e.target == modalBasket) {
    modalBasket.style.display = "none";
  }
});


//two wind
const btnCall = document.querySelector(".btn_panel_bran_open");
const modalTwo = document.querySelector(".bg__modal_two");
const closeModalTwo = document.querySelector(".close_thank");

btnCall.addEventListener("click", (e) => {
  e.preventDefault();
  modalTwo.style.display = "flex";
});

closeModalTwo.addEventListener("click", (e) => {
  e.preventDefault();
  modalTwo.style.display = "none";
});

modalTwo.addEventListener("click", (e) => {
  if (e.target == modalTwo) {
    modalTwo.style.display = "none";
  }
});

//free wind

const btnIssue = document.querySelector(".issue");
const modalFreeWind = document.querySelector(".modal__free_bg");

btnIssue.addEventListener("click", (e) => {
  e.preventDefault();
  modalFreeWind.style.display = "flex";
});


modalFreeWind.addEventListener("click", (e) => {
  if (e.target == modalFreeWind) {
    modalFreeWind.style.display = "none";
  }
});




