<!DOCTYPE html>
<html lang="fr">
<head>
<?php
/**
 * JEUX EN SOLO - Page multi-jeux SOLOPLUGS
 * Sélection dynamique de jeux via badges
 * 
 * Version 1.1 - FreeCell remplace Mahjong
 * 
 * Pour utiliser ce fichier :
 * 1. Placer dans /articles/jeux-solo.php
 * 2. Définir $basePath = '../'
 * 3. S'assurer que jeux-soloplugs.css est dans /css/
 */

$basePath = '../';
$additionalCSS = ['articles.css', 'jeux-soloplugs.css'];
include '../components/head.php';
?>

<style>
/* ============================================================
   STYLES SPÉCIFIQUES PAGE MULTI-JEUX
   ============================================================ */

/* Section principale sans espace en haut */
.jeux-multi-section {
  background: linear-gradient(135deg, #F5F1EB 0%, #FBF9F6 100%);
  padding: 1rem 1rem 2rem 1rem;
  margin: 0;
  min-height: 100vh;
}

.jeux-multi-container {
  max-width: 1000px;
  margin: 0 auto;
}

/* Bouton retour */
.btn-retour {
  display: inline-block;
  background: linear-gradient(135deg, #E07B53 0%, #C96A45 100%);
  color: white;
  padding: 0.6rem 1.5rem;
  border-radius: 2rem;
  font-size: 0.9rem;
  font-weight: 600;
  font-family: 'Inter', Arial, sans-serif;
  text-decoration: none;
  margin-bottom: 1.5rem;
  box-shadow: 0 4px 12px rgba(224, 123, 83, 0.3);
  transition: all 0.3s ease;
}

.btn-retour:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(224, 123, 83, 0.4);
  color: white;
  text-decoration: none;
}

/* Titre principal */
.jeux-titre-principal {
  color: #D4A574;
  font-size: 2rem;
  text-align: center;
  margin-bottom: 0.5rem;
  font-weight: 600;
  font-family: 'Lora', Georgia, serif;
}

.jeux-sous-titre {
  color: #666;
  text-align: center;
  font-size: 1rem;
  margin-bottom: 1.5rem;
  font-family: 'Inter', Arial, sans-serif;
}

/* ============================================================
   GRILLE DE SÉLECTION DES JEUX
   ============================================================ */
.jeux-selection {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.75rem;
  margin-bottom: 1.5rem;
  padding: 0 1rem;
}

.jeu-badge-select {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: white;
  color: #2C3338;
  padding: 0.6rem 1.2rem;
  border-radius: 2rem;
  font-size: 0.9rem;
  font-weight: 500;
  font-family: 'Inter', Arial, sans-serif;
  cursor: pointer;
  border: 2px solid #E8E0D8;
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.jeu-badge-select:hover {
  border-color: #D4A574;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(212, 165, 116, 0.2);
}

.jeu-badge-select.active {
  background: linear-gradient(135deg, #D4A574 0%, #C4956A 100%);
  color: white;
  border-color: #D4A574;
  box-shadow: 0 4px 16px rgba(212, 165, 116, 0.35);
}

.jeu-badge-icon {
  font-size: 1.1rem;
}

/* ============================================================
   ZONE DE JEU DYNAMIQUE
   ============================================================ */
.jeu-actif-info {
  text-align: center;
  margin-bottom: 1rem;
}

.jeu-actif-nom {
  color: #D4A574;
  font-size: 1.5rem;
  font-weight: 600;
  font-family: 'Lora', Georgia, serif;
  margin-bottom: 0.25rem;
}

.jeu-actif-desc {
  color: #666;
  font-size: 0.95rem;
  font-style: italic;
  max-width: 600px;
  margin: 0 auto;
}

/* Wrapper iframe amélioré */
.jeu-wrapper-multi {
  background: white;
  padding: 0.75rem;
  border-radius: 1rem;
  box-shadow: 0 8px 32px rgba(212, 165, 116, 0.15);
  overflow: hidden;
  margin-bottom: 1.5rem;
}

.jeu-wrapper-multi iframe {
  display: block;
  width: 100%;
  height: 550px;
  border: none;
  border-radius: 0.5rem;
}

/* Boutons sous le jeu */
.jeu-actions {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}

.btn-action {
  padding: 0.75rem 1.5rem;
  font-size: 0.95rem;
  text-decoration: none;
  border-radius: 0.5rem;
  font-weight: 600;
  font-family: 'Inter', Arial, sans-serif;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  cursor: pointer;
}

.btn-action-primaire {
  background: linear-gradient(135deg, #D4A574 0%, #C4956A 100%);
  color: white;
  border: none;
  box-shadow: 0 4px 16px rgba(212, 165, 116, 0.3);
}

.btn-action-primaire:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(212, 165, 116, 0.4);
  color: white;
  text-decoration: none;
}

.btn-action-secondaire {
  background: white;
  color: #D4A574;
  border: 2px solid #D4A574;
}

.btn-action-secondaire:hover {
  background: #FBF9F6;
  transform: translateY(-2px);
  text-decoration: none;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 768px) {
  .jeux-titre-principal {
    font-size: 1.6rem;
  }
  
  .jeux-selection {
    gap: 0.5rem;
  }
  
  .jeu-badge-select {
    padding: 0.5rem 1rem;
    font-size: 0.85rem;
  }
  
  .jeu-wrapper-multi iframe {
    height: 450px;
  }
  
  .jeu-actions {
    flex-direction: column;
    align-items: stretch;
  }
  
  .btn-action {
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .jeux-titre-principal {
    font-size: 1.4rem;
  }
  
  .jeu-badge-select {
    padding: 0.4rem 0.8rem;
    font-size: 0.8rem;
  }
  
  .jeu-wrapper-multi iframe {
    height: 400px;
  }
}
</style>
<link rel="stylesheet" href="../css/components.css">
</head>

<body>
<!-- PAS de header.php = pas d'espace blanc en haut -->

<section class="jeux-multi-section">
  <div class="jeux-multi-container">
    
    <!-- Bouton Retour -->
    <a href="../magazine.php" class="btn-retour">← Retour au Magazine</a>
    
    <!-- Titre -->
    <h1 class="jeux-titre-principal">🎮 Jeux en Solo</h1>
    <p class="jeux-sous-titre">Choisis ton moment de concentration et de calme</p>
    
    <!-- Sélection des jeux -->
    <div class="jeux-selection">
      <button class="jeu-badge-select active" data-jeu="solitaire">
        <span class="jeu-badge-icon">🃏</span>
        <span>Solitaire</span>
      </button>
      <button class="jeu-badge-select" data-jeu="sudoku">
        <span class="jeu-badge-icon">🔢</span>
        <span>Sudoku</span>
      </button>
      <button class="jeu-badge-select" data-jeu="freecell">
        <span class="jeu-badge-icon">🃏</span>
        <span>FreeCell</span>
      </button>
      <button class="jeu-badge-select" data-jeu="echecs">
        <span class="jeu-badge-icon">♟️</span>
        <span>Échecs</span>
      </button>
      <button class="jeu-badge-select" data-jeu="bakers">
        <span class="jeu-badge-icon">🃏</span>
        <span>Baker's Game</span>
      </button>
      <button class="jeu-badge-select" data-jeu="lines">
        <span class="jeu-badge-icon">🔮</span>
        <span>Lines</span>
      </button>
    </div>
    
    <!-- Info du jeu actif -->
    <div class="jeu-actif-info">
      <h2 class="jeu-actif-nom" id="jeuNom">Solitaire Klondike</h2>
      <p class="jeu-actif-desc" id="jeuDesc">Le grand classique. Un moment de calme où chaque carte posée devient un geste conscient.</p>
    </div>
    
    <!-- Iframe du jeu -->
    <div class="jeu-wrapper-multi">
      <iframe 
        id="jeuFrame"
        src="https://b6.games/solitaire/?lang=fr" 
        allowfullscreen
        title="Jeu en Solo">
      </iframe>
    </div>
    
    <!-- Boutons d'action -->
    <div class="jeu-actions">
      <a href="https://b6.games/solitaire/?lang=fr" target="_blank" class="btn-action btn-action-primaire" id="btnPleinEcran">
        🖥️ Plein écran
      </a>
      <button class="btn-action btn-action-secondaire" onclick="rechargerJeu()">
        🔄 Nouvelle partie
      </button>
    </div>
    
  </div>
</section>

<?php include '../components/footer.php'; ?>

<script>
// Configuration des jeux
const jeux = {
  solitaire: {
    nom: "Solitaire Klondike",
    desc: "Le grand classique. Un moment de calme où chaque carte posée devient un geste conscient.",
    url: "https://b6.games/solitaire/?lang=fr",
    pleinEcran: "https://b6.games/solitaire/?lang=fr"
  },
  sudoku: {
    nom: "Sudoku",
    desc: "Dans la grille vide, une promesse : celle d'un ordre à découvrir, patient, dans les chiffres.",
    url: "https://b6.games/sudoku/?lang=fr",
    pleinEcran: "https://b6.games/sudoku/?lang=fr"
  },
  freecell: {
    nom: "FreeCell",
    desc: "Quatre cellules libres, un défi stratégique. Chaque partie est gagnante si tu réfléchis bien.",
    url: "https://b6.games/solitaire/?game=freecell-freecell&lang=fr",
    pleinEcran: "https://b6.games/solitaire/?game=freecell-freecell&lang=fr"
  },
  echecs: {
    nom: "Échecs (Live)",
    desc: "Le jeu des rois : observe les meilleurs joueurs en direct sur Lichess.",
    url: "https://lichess.org/tv/frame?theme=wood&bg=light",
    pleinEcran: "https://lichess.org/tv"
  },
  bakers: {
    nom: "Baker's Game",
    desc: "Variante élégante du FreeCell : construire par couleur, pas par alternance. Un défi de patience.",
    url: "https://www.solitaireparadise.com/fr/jeu/bakers-game.html",
    pleinEcran: "https://www.solitaireparadise.com/fr/jeu/bakers-game.html"
  },
  lines: {
    nom: "Lines 98",
    desc: "Nostalgie et concentration : construire des lignes de billes colorées, un geste méditatif.",
    url: "https://b6.games/lines/?lang=fr",
    pleinEcran: "https://b6.games/lines/?lang=fr"
  }
};

// Éléments DOM
const badges = document.querySelectorAll('.jeu-badge-select');
const jeuNom = document.getElementById('jeuNom');
const jeuDesc = document.getElementById('jeuDesc');
const jeuFrame = document.getElementById('jeuFrame');
const btnPleinEcran = document.getElementById('btnPleinEcran');

let jeuActuel = 'solitaire';

// Changer de jeu
function changerJeu(jeuId) {
  const jeu = jeux[jeuId];
  if (!jeu) return;
  
  jeuActuel = jeuId;
  
  // Mettre à jour l'interface
  jeuNom.textContent = jeu.nom;
  jeuDesc.textContent = jeu.desc;
  jeuFrame.src = jeu.url;
  btnPleinEcran.href = jeu.pleinEcran;
  
  // Mettre à jour les badges actifs
  badges.forEach(badge => {
    badge.classList.remove('active');
    if (badge.dataset.jeu === jeuId) {
      badge.classList.add('active');
    }
  });
}

// Recharger le jeu actuel
function rechargerJeu() {
  const jeu = jeux[jeuActuel];
  if (jeu) {
    jeuFrame.src = jeu.url;
  }
}

// Événements sur les badges
badges.forEach(badge => {
  badge.addEventListener('click', () => {
    changerJeu(badge.dataset.jeu);
  });
});
</script>

</body>
</html>
