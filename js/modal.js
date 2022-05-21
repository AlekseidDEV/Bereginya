const btnBurger = document.querySelector(".buger");
const panelBurger = document.querySelector(".drop__wrapp");
const closePanel = document.querySelector(".close__burger");
const linkEmail = document.querySelector(".adress__email");
const modalEmail = document.querySelector(".modal__bg_email");
const closeModalEmail = document.querySelector(".close_email_mod");

// burger
btnBurger.addEventListener("click", (e) => {
  panelBurger.style.display = "flex";
});

closePanel.addEventListener("click", (e) => {
  panelBurger.style.display = "none";
});

//emailModal
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

//мы вам перезвоним
const btnNumbCall = document.querySelector(".numb__call");
const btnRequestCall = document.querySelector(".requestcall");
const modalWind = document.querySelector(".wrapp_window");
const closeModalWind = document.querySelector(".close_btn");

btnNumbCall.addEventListener("click", (e) => {
  modalWind.style.display = "flex";
});

btnRequestCall.addEventListener("click", (e) => {
  modalWind.style.display = "flex";
});

closeModalWind.addEventListener("click", (e) => {
  modalWind.style.display = "none";
});

modalWind.addEventListener("click", (e) => {
  if (e.target == modalWind) {
    modalWind.style.display = "none";
  }
});

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

//оформить заказ

const btnOpenModal = document.querySelector(".btn_panel_bran_open");
const modalTwo = document.querySelector(".bg__modal_two");
const smallClose = document.querySelector(".close_thank");

btnOpenModal.addEventListener("click", (e) => {
  e.preventDefault();
  modalTwo.style.display = "flex";
});

smallClose.addEventListener("click", (e) => {
  e.preventDefault();
  modalTwo.style.display = "none";
});

modalTwo.addEventListener("click", (e) => {
  if (e.target == modalTwo) {
    modalTwo.style.display = "none";
  }
});

//заяквка принята

const modalFreeOpen = document.querySelector(".issue");
const modalFree = document.querySelector(".modal__free_bg");

modalFreeOpen.addEventListener("click", (e) => {
  e.preventDefault();
  modalFree.style.display = "flex";
});

modalFree.addEventListener("click", (e) => {
  if (e.target == modalFree) {
    modalFree.style.display = "none";
  }
});
