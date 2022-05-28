const btnBurger = document.querySelector(".buger");
const panelBurger = document.querySelector(".drop__wrapp");
const closePanel = document.querySelector(".close__burger");


// burger
btnBurger.addEventListener("click", (e) => {
  panelBurger.style.display = "flex";
});

closePanel.addEventListener("click", (e) => {
  panelBurger.style.display = "none";
});






