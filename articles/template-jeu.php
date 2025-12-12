<?php
/**
 * TEMPLATE JEU SOLOPLUGS
 * Copiez ce fichier et remplissez les sections marquées [À PERSONNALISER]
 */

// IMPORTANT : Définir le basePath pour les fichiers dans /articles/
$basePath = '../';

// CSS additionnels à charger
$additionalCSS = ['articles.css', 'jeux-soloplugs.css'];

// Inclusion du head
include '../components/head.php';
?>

<!-- SECTION JEU -->
<section class="jeu-section">
  <div class="jeu-container">
    
    <!-- BADGE -->
    <div style="text-align: center;">
      <span class="jeu-badge">🎮 Jeux en Solo</span>
    </div>
    
    <!-- TITRE [À PERSONNALISER] -->
    <h2 class="jeu-titre">Nom du Jeu</h2>
    
    <!-- INTRODUCTION [À PERSONNALISER] -->
    <p class="jeu-intro">
      Description courte du jeu en 1-2 phrases. Expliquez l'essence du jeu et son rapport avec la solitude positive.
    </p>
    
    <!-- STATS [À PERSONNALISER] -->
    <div class="jeu-stats">
      <div class="jeu-stat">
        <span class="jeu-stat-icon">⏱️</span>
        <span>XX minutes</span> <!-- Durée moyenne -->
      </div>
      <div class="jeu-stat">
        <span class="jeu-stat-icon">✨</span>
        <span>Gratuit</span> <!-- ou "Freemium" -->
      </div>
      <div class="jeu-stat">
        <span class="jeu-stat-icon">🔓</span>
        <span>Sans inscription</span> <!-- ou "Inscription optionnelle" -->
      </div>
    </div>
    
    <!-- IFRAME JEU [À PERSONNALISER] -->
    <div class="jeu-wrapper">
      <iframe 
        src="URL_DU_JEU_ICI" 
        width="100%" 
        height="600"
        frameborder="0"
        allowfullscreen
        title="Nom du Jeu">
      </iframe>
    </div>

    <!-- BOUTONS [À PERSONNALISER] -->
    <div class="jeu-boutons">
      <a href="URL_PLEIN_ECRAN" target="_blank" class="btn-jeu btn-jeu-primaire">
        🎮 Jouer en plein écran
      </a>
      <a href="URL_VERSION_MOBILE" target="_blank" class="btn-jeu btn-jeu-secondaire">
        📱 Version mobile
      </a>
    </div>
    
    <!-- ENCADRÉ "POURQUOI CE JEU ?" [À PERSONNALISER] -->
    <div class="jeu-pourquoi">
      <h3 class="jeu-pourquoi-titre">💭 Pourquoi ce jeu ?</h3>
      <p>
        Premier paragraphe : Expliquez la dimension philosophique du jeu. 
        Pourquoi ce jeu est pertinent pour quelqu'un qui explore sa solitude ?
      </p>
      <p>
        Deuxième paragraphe : Reliez le jeu à la mission SOLOPLUGS. 
        Comment ce jeu aide-t-il à habiter sa solitude, à développer son autonomie, 
        ou à trouver la paix dans le silence ?
      </p>
    </div>
    
    <!-- BÉNÉFICES [À PERSONNALISER] -->
    <div class="jeu-benefices">
      <h3 class="jeu-benefices-titre">✨ Les bénéfices de ce jeu solo</h3>
      
      <div class="jeu-benefices-liste">
        
        <!-- BÉNÉFICE 1 -->
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🧠</span> <!-- Choisir emoji approprié -->
          <h4 class="jeu-benefice-titre">Titre du bénéfice</h4>
          <p class="jeu-benefice-desc">
            Description du bénéfice en 1-2 phrases.
          </p>
        </div>
        
        <!-- BÉNÉFICE 2 -->
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🎯</span>
          <h4 class="jeu-benefice-titre">Titre du bénéfice</h4>
          <p class="jeu-benefice-desc">
            Description du bénéfice en 1-2 phrases.
          </p>
        </div>
        
        <!-- BÉNÉFICE 3 -->
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">😌</span>
          <h4 class="jeu-benefice-titre">Titre du bénéfice</h4>
          <p class="jeu-benefice-desc">
            Description du bénéfice en 1-2 phrases.
          </p>
        </div>
        
        <!-- BÉNÉFICE 4 -->
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">⏸️</span>
          <h4 class="jeu-benefice-titre">Titre du bénéfice</h4>
          <p class="jeu-benefice-desc">
            Description du bénéfice en 1-2 phrases.
          </p>
        </div>
        
        <!-- BÉNÉFICE 5 (optionnel) -->
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🔄</span>
          <h4 class="jeu-benefice-titre">Titre du bénéfice</h4>
          <p class="jeu-benefice-desc">
            Description du bénéfice en 1-2 phrases.
          </p>
        </div>
        
        <!-- BÉNÉFICE 6 (optionnel) -->
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🏆</span>
          <h4 class="jeu-benefice-titre">Titre du bénéfice</h4>
          <p class="jeu-benefice-desc">
            Description du bénéfice en 1-2 phrases.
          </p>
        </div>
        
      </div>
    </div>
    
  </div>
</section>

<?php
// Inclusion du footer
include '../components/footer.php';
?>
