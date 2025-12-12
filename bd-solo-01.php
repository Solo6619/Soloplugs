<?php
  // Configuration de la page
  $pageTitle = 'Solo en BD #1 - Être seul, c\'est parfois être avec l\'infini';
  $pageDescription = 'Première BD Solo : un voyage philosophique du mouvement à la contemplation.';
  $basePath = '../';
  $currentPage = 'magazine';
  $additionalCSS = ['magazine.css', 'bd-solo.css'];
  
  include $basePath . 'components/head.php';
?>
<body>

  <?php include $basePath . 'components/header.php'; ?>

  <!-- CONTENU ARTICLE BD -->
  <main class="article-container">
    
    <!-- En-tête article -->
    <header class="article-header">
      <div class="article-meta">
        <span class="badge-bd">🗯️ Solo en BD</span>
        <span class="article-date">16 octobre 2025</span>
      </div>
      <h1>Solo #1 : L'infini intérieur</h1>
      <p class="article-subtitle">Du mouvement à la contemplation : un voyage vers l'infini intérieur</p>
    </header>

    <!-- BD Section -->
    <section class="bd-section">
      <div class="bd-panels-container">
        <div class="bd-panels">
          <div class="panel p1">
            <img src="../images/Magazine/Solo_bd_0101.png" alt="Panel 1 - Personnage qui court">
            <div class="panel-caption">L'agitation</div>
          </div>
          <div class="panel p2">
            <img src="../images/Magazine/Solo_bd_0102.png" alt="Panel 2 - Personnage seul">
            <div class="panel-caption">L'arrêt</div>
          </div>
          <div class="panel p3">
            <img src="../images/Magazine/Solo_bd_0103.png" alt="Panel 3 - Contemplation sous la lune">
            <div class="panel-caption">La contemplation</div>
          </div>
          <div class="panel p4">
            <img src="../images/Magazine/Solo_bd_0104.png" alt="Panel 4 - Être seul, c'est parfois être avec l'infini">
            <div class="panel-caption">La révélation</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Analyse de la BD -->
    <section class="article-content">
      <div class="content-wrapper">
        <h2>L'art de s'arrêter</h2>
        <p>Cette première BD Solo explore le parcours universel qui nous mène de l'agitation quotidienne vers la découverte de notre infini intérieur. En quatre panneaux simples, elle illustre parfaitement la distinction fondamentale de SOLOPLUGS entre la solitude subie et la solitude choisie.</p>
        
        <h3>Du mouvement vers la stillness</h3>
        <p>Le personnage passe de la course effrénée du premier panneau à l'immobilité contemplative du troisième. Cette progression n'est pas un arrêt subi, mais un choix conscient de ralentir, de s'écouter, de se retrouver.</p>
        
        <h3>L'infini dans la solitude</h3>
        <p>Le dernier panneau révèle la véritable philosophie de SOLOPLUGS : être seul, ce n'est pas être isolé du monde, c'est parfois être en contact avec quelque chose d'infiniment plus grand que soi.</p>
        
        <div class="quote-box">
          <blockquote>"Être seul, c'est parfois être avec l'infini."</blockquote>
          <cite>— Solo BD #1</cite>
        </div>
      </div>
    </section>

    <!-- Navigation -->
    <nav class="article-nav">
      <a href="../magazine.php" class="btn-back">
        ← Retour au Magazine
      </a>
      <div class="article-next">
        <span>Prochaine BD Solo bientôt...</span>
      </div>
    </nav>

  </main>

  <?php include $basePath . 'components/footer.php'; ?>
  <?php include $basePath . 'components/scripts.php'; ?>

</body>
</html>