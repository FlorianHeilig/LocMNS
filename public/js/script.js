document.addEventListener("DOMContentLoaded", () => {
  // Fermer dropdown en cliquant sur main
  document.querySelector("main").addEventListener("click", () => {
    document
      .querySelectorAll(".dropdown.open")
      .forEach((d) => d.classList.remove("open"));
    document
      .querySelectorAll(".arrow.rotated")
      .forEach((a) => a.classList.remove("rotated"));
    document
      .querySelectorAll(".dropdown-toggle.active")
      .forEach((t) => t.classList.remove("active"));
  });

  // Dropdown catalogue
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
      e.preventDefault();
      const arrow = toggle.querySelector(".arrow");
      const dropdown = toggle.nextElementSibling;

      arrow.classList.toggle("rotated");
      dropdown.classList.toggle("open");
      toggle.classList.toggle("active");
    });
  });

  // Burger menu
  const burgerIcon = document.querySelector(".burger-menu-icon");
  const burgerMenu = document.querySelector(".burger-menu");

  burgerIcon.addEventListener("click", () => {
    burgerMenu.classList.toggle("open");

    // Changement icône dans le listener
    const icon = burgerIcon.querySelector("i");
    icon.classList.toggle("bx-menu");
    icon.classList.toggle("bx-x");
  });
});
