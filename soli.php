<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Soli — L\'oreille intérieure';
    $pageDescription = 'Soli est votre journal intime vivant. Un miroir bienveillant pour accueillir vos pensées, émotions et silences.';
    $basePath = '';
    $currentPage = 'soli';
    $additionalCSS = ['articles.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       CONTENU PRINCIPAL
       ============================================================ -->
  <main class="article-container">

    <!-- En-tête -->
    <header class="article-header">
      <div class="article-meta">
        <span class="article-category">Journal intime</span>
        <span class="article-read">En développement</span>
      </div>
      
      <h1 class="article-title">Soli — L'oreille intérieure</h1>
      
      <p class="article-subtitle">
        Soli est votre journal intime vivant. Un miroir bienveillant pour accueillir vos pensées, émotions et silences.
      </p>
      
      <div class="article-image">
        <img src="images/soli_hero.jpg" alt="Soli - L'oreille intérieure" loading="lazy">
      </div>
    </header>

    <!-- Contenu -->
    <article class="article-content">
      
      <div class="article-highlight">
        <p>
          <em>Cette page est en construction. Le contenu sera ajouté prochainement.</em>
        </p>
      </div>

      <h2>Ce que Soli vous offrira</h2>

      <p>
        <strong>📓 Journal intime intelligent</strong><br>
        Un espace privé et sécurisé pour déposer vos pensées, émotions et réflexions quotidiennes.
      </p>

      <p>
        <strong>🪞 Miroir bienveillant</strong><br>
        Reflet empathique de votre univers intérieur, sans jugement ni prescription.
      </p>

      <p>
        <strong>🎨 Expression multimédia</strong><br>
        Intégrez textes, photos, musiques et souvenirs pour créer votre journal unique.
      </p>

      <div class="article-highlight">
        <h3>La vision de Soli</h3>
        <p>
          Soli n'est pas un service médical. C'est un outil de réflexion personnelle — un journal intime qui répond, un miroir de votre univers intérieur.
        </p>
        <p>
          <strong>Il vous écoute vraiment, sans jamais vous interrompre.</strong>
        </p>
      </div>

    </article>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
