const header = document.getElementById("header");
const nav = document.getElementById("nav");
const scrollHide1 = document.getElementById("scroll-hide1");
const scrollHide2 = document.getElementById("scroll-hide2");
const navText = document.getElementById("nav-text");

window.onscroll = function () {
  if (window.pageYOffset >= nav.offsetTop) {
    header.classList.add("d-flex", "sticky-top", "scroll");
    nav.classList.add("scroll-nav");
    nav.classList.remove("bg-light", "rounded-3", "shadow");
    scrollHide1.classList.add("d-none");
    scrollHide2.classList.add("d-none");
    navText.classList.remove("m-auto");
    navText.classList.add("ms-auto");
  } else {
    header.classList.remove("d-flex", "sticky-top", "scroll");
    nav.classList.remove("scroll-nav");
    nav.classList.add("bg-light", "rounded-3", "shadow");
    scrollHide1.classList.remove("d-none");
    scrollHide2.classList.remove("d-none");
    navText.classList.add("m-auto");
    navText.classList.remove("ms-auto");
  }
};
