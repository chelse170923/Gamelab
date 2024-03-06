let nav = document.getElementById("bottom-nav");
let show = false;

function toggleDropdown() {
  if (show == false) {
    nav.classList.remove("hide-nav");
    show = !show;
  } else {
    nav.classList.add("hide-nav");
    show = !show;
  }
}


window.addEventListener("resize", () => {
  if (window.innerWidth > 768) {
    show = false;
    nav.classList.add("hide-nav");
  }
});
