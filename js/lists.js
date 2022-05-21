const btnOpenList = document.querySelector(".btn__sorting");

const listBlock = document.querySelector(".wrapp_vol_List");
const btnOpenTwo = document.querySelector(".btn__sorting_right");
const listTwo = document.querySelector(".wrapp_sor_List");
const windowCat = document.querySelector(".catalog");

btnOpenList.addEventListener("click", (e) => {
  e.preventDefault();
  listBlock.style.display = "flex";
});

btnOpenTwo.addEventListener("click", (e) => {
  e.preventDefault();
  listTwo.style.display = "flex";
});
