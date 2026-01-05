<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Sudoku';
    $pageDescription = 'Jouez au Sudoku en ligne gratuitement sur SOLOPLUGS.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['articles.css', 'jeux-soloplugs.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <!-- SECTION JEU SUDOKU (sans header navigation) -->
  <section class="jeu-section">
    <div class="jeu-container">
      
      <!-- BOUTON RETOUR -->
      <div style="text-align: center; margin-bottom: 1rem;">
        <a href="<?php echo $basePath; ?>magazine.php#jeux" class="btn-retour">Retour</a>
      </div>
      
      <!-- TITRE -->
      <h2 class="jeu-titre">Sudoku</h2>
      
      <!-- INTRODUCTION -->
      <p class="jeu-intro">
        Dans la grille vide, une promesse : celle d'un ordre à découvrir. 
        Le Sudoku ne crée rien — il révèle ce qui était déjà là, patient, caché dans les chiffres.
      </p>
      
      <!-- STATS -->
      <div class="jeu-stats">
        <div class="jeu-stat">
          <span class="jeu-stat-icon">⏱️</span>
          <span>5-30 minutes</span>
        </div>
        <div class="jeu-stat">
          <span class="jeu-stat-icon">✨</span>
          <span>Gratuit</span>
        </div>
        <div class="jeu-stat">
          <span class="jeu-stat-icon">🔓</span>
          <span>Sans inscription</span>
        </div>
      </div>
      
      <!-- IFRAME JEU -->
      <div class="jeu-wrapper">
        <iframe 
          src="https://b6.games/sudoku/?lang=fr" 
          width="100%" 
          height="600"
          frameborder="0"
          allowfullscreen
          title="Sudoku">
        </iframe>
      </div>

      <!-- BOUTONS -->
      <div class="jeu-boutons">
        <a href="https://b6.games/sudoku/?lang=fr" target="_blank" class="btn-jeu btn-jeu-primaire">
          Ouvrir en plein écran
        </a>
        <a href="https://b6.games/sudoku/?lang=fr" target="_blank" class="btn-jeu btn-jeu-secondaire">
          Version mobile
        </a>
      </div>
      
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
