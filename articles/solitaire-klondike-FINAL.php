<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Solitaire Klondike';
    $pageDescription = 'Jouez au Solitaire Klondike en ligne gratuitement sur SOLOPLUGS.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['articles.css', 'jeux-soloplugs.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <!-- SECTION JEU SOLITAIRE (sans header navigation) -->
  <section class="jeu-section">
    <div class="jeu-container">
      
      <!-- BOUTON RETOUR -->
      <div style="text-align: center; margin-bottom: 1rem;">
        <a href="<?php echo $basePath; ?>magazine.php" class="btn-retour">Retour</a>
      </div>
      
      <!-- TITRE -->
      <h2 class="jeu-titre">Solitaire Klondike</h2>
      
      <!-- INTRODUCTION -->
      <p class="jeu-intro">
        Le grand classique des jeux de cartes en solitaire. 
        Un moment de calme et de concentration, parfait pour se retrouver avec soi-même.
      </p>
      
      <!-- STATS -->
      <div class="jeu-stats">
        <div class="jeu-stat">
          <span class="jeu-stat-icon">⏱️</span>
          <span>5-15 minutes</span>
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
          src="https://b6.games/solitaire/?lang=fr" 
          width="100%" 
          height="600"
          frameborder="0"
          allowfullscreen
          title="Solitaire Klondike">
        </iframe>
      </div>

      <!-- BOUTONS -->
      <div class="jeu-boutons">
        <a href="https://b6.games/solitaire/?lang=fr" target="_blank" class="btn-jeu btn-jeu-primaire">
          Jouer en plein écran
        </a>
        <a href="https://b6.games/solitaire-kingdom" target="_blank" class="btn-jeu btn-jeu-secondaire">
          Version mobile
        </a>
      </div>
      
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
