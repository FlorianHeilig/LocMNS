document.addEventListener("DOMContentLoaded", () => {
  // Fermer dropdown en cliquant sur main
  document.querySelector("main").addEventListener("click", () => {
    document
      .querySelectorAll(".dropdown.open")
      .forEach((d) => d.classList.remove("open"));
    document
      .querySelectorAll(".bx bx-chevron-right.rotated")
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

  document.querySelectorAll(".filter-group").forEach((group) => {
    group.querySelectorAll('input[type="radio"]').forEach((input) => {
      input.addEventListener("change", () => {
        const label = group.querySelector("strong");
        const span = input.closest(".radio-btn").querySelector("span");

        const img = span.querySelector("img");
        label.textContent = img ? img.alt : span.textContent.trim();
      });
    });
  });
});
