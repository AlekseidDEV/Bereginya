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