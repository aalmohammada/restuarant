import axios from "axios";
import Alpine from "alpinejs";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.Alpine = Alpine;
Alpine.start();
const initMobileMenu = () => {
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const body = document.body;
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
      body.classList.toggle("overflow-hidden");
    });
  }
};
initMobileMenu();
