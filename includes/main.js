// ============= Soloplugs main.js =============
// Gère la langue et le pays choisis, et synchronise le header

document.addEventListener("DOMContentLoaded", () => {
  const lang = localStorage.getItem("lang") || "fr";
  const country = localStorage.getItem("country") || "CA";

  // Ajuste la langue du header s'il existe
  const langFR = document.getElementById("lang-fr");
  const langEN = document.getElementById("lang-en");

  if (langFR && langEN) {
    if (lang === "fr") {
      langFR.classList.add("active");
      langEN.classList.remove("active");
      switchLang("fr");
    } else {
      langFR.classList.remove("active");
      langEN.classList.add("active");
      switchLang("en");
    }
  }

  // Ajuste la langue de la page (pour SEO et accessibilité)
  document.documentElement.lang = lang;

  // Affiche une trace discrète dans la console (utile pour toi)
  console.log(`🌍 Soloplugs : ${country} | Langue : ${lang.toUpperCase()}`);
});

// Permet de changer de langue manuellement depuis le header
function setLang(lang) {
  localStorage.setItem("lang", lang);
  switchLang(lang);
}
