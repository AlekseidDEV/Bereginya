//поиск 

const search = document.querySelector(".search")
const searchInput = document.querySelector(".search__active")

search.addEventListener("click", (e) => {
  searchInput.style.display = "flex";
});