var scroll = window.scrollY,
    html =  document.querySelector("html");
function sticky_header() {
      window.scrollY > scroll ? html.classList.add("scroll-down", "scroll-active") : html.classList.remove("scroll-down");
      window.scrollY === 0 ? html.classList.remove("scroll-down", "scroll-active") : null;
      scroll = window.scrollY;
}
window.onscroll=() => sticky_header();