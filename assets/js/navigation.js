/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
  const header = document.querySelector(".header");
  const btn = document.querySelector(".header__toggle");
  const menu = document.querySelector(".header__menu");

  btn.addEventListener("click", function () {
    const isOpened = btn.getAttribute("aria-expanded") === "true";

    btn.classList.toggle("menu-open", !isOpened);
    btn.setAttribute("aria-expanded", String(!isOpened));
    menu.classList.toggle("header__menu--open", !isOpened);
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
      btn.classList.toggle("menu-open", false);
      btn.setAttribute("aria-expanded", String(false));
      menu.classList.toggle("header__menu--open", false);
    }
  }, true);

  window.addEventListener("scroll", () => {
    header.classList.toggle("sticky", window.scrollY > 0);
  });
})();
