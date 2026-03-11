document.querySelector("main").addEventListener("click", () => {
  document.querySelectorAll(".dropdown.open").forEach((dropdown) => {
    dropdown.classList.remove("open");
  });
  document.querySelectorAll(".arrow.rotated").forEach((arrow) => {
    arrow.classList.remove("rotated");
  });
  document.querySelectorAll(".dropdown-toggle.active").forEach((toggle) => {
    toggle.classList.remove("active");
  });
});

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
