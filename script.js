// Hide greeting banner after 10 seconds
window.onload = function() {
    const greeting = document.getElementById("greeting");
    if (greeting) {
        setTimeout(() => {
            greeting.style.display = "none";
        }, 10000); // 10 seconds
    }
};

// Mobile menu toggle
document.addEventListener("DOMContentLoaded", () => {
  const menu = document.getElementById("mobileToggle");
  const nav = document.getElementById("mobile");

  menu.addEventListener("click", () => {
    nav.classList.toggle("show");
  });
});

