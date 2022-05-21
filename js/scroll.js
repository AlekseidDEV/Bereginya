const linkDown = document.querySelector(".down");

const trackScroll = () => {
  let scrolled = window.pageYOffset;
  window.scrollBy(0, 950);
};

linkDown.addEventListener("click", (e) => {
  e.preventDefault();
  trackScroll();
});
