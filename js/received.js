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