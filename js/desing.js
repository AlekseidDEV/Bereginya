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
