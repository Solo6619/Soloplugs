// === Script d'inclusion automatique pour header / footer ===
// Ce script charge tous les fichiers mentionnés avec include-html="..."
// Exemple : <div include-html="includes/header.html"></div>

document.addEventListener("DOMContentLoaded", includeHTML);

function includeHTML() {
  const elements = document.querySelectorAll("[include-html]");
  elements.forEach(async (el) => {
    const file = el.getAttribute("include-html");
    if (file) {
      try {
        const response = await fetch(file);
        if (!response.ok) throw new Error("Erreur " + response.status);
        const text = await response.text();
        el.innerHTML = text;
        el.removeAttribute("include-html");
        includeHTML(); // relance l’inclusion pour les éléments imbriqués

        if (file.includes("header.html")) {
          setTimeout(() => {
            highlightActiveLink();
            initHeaderScrollEffect();
          }, 600);
        }
      } catch (err) {
        el.innerHTML = `<p style="color:red;">Impossible de charger : ${file}</p>`;
      }
    }
  });
}

// === MISE EN ÉVIDENCE DU LIEN ACTIF ===
function highlightActiveLink() {
  const currentURL = window.location.href.split("?")[0];
  const links = document.querySelectorAll("#menu-main a, #menu-themes a");

  let foundActive = false;

  links.forEach(link => {
    const normalizedLink = link.href.replace(/\/+$/, "");
    const normalizedPage = currentURL.replace(/\/+$/, "");

    // 🔹 Correction : on compare uniquement le chemin complet, pas les sous-chaînes
    const currentPath = new URL(normalizedPage).pathname;
    const linkPath = new URL(normalizedLink).pathname;

    if (currentPath === linkPath) {
      link.classList.add("active-link");
      sessionStorage.setItem("activeLink", link.href);
      foundActive = true;
    } else {
      link.classList.remove("active-link");
    }
  });

  // 🔸 Si aucun lien détecté (page non répertoriée dans le menu)
  if (!foundActive && sessionStorage.getItem("activeLink")) {
    const lastActive = sessionStorage.getItem("activeLink");
    links.forEach(link => {
      if (link.href === lastActive) {
        link.classList.add("active-link");
      }
    });
  }
}


// === HEADER QUI SE COMPACTE AU SCROLL ===
function initHeaderScrollEffect() {
  const header = document.getElementById("header");
  if (!header) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY > 80) {
      header.classList.add("header-scrolled");
    } else {
      header.classList.remove("header-scrolled");
    }
  });
}
if (file.includes("header.html")) {
  setTimeout(() => {
    highlightActiveLink();
    initHeaderScrollEffect();
  }, 600);
}
