<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Solo à table';
    $pageDescription = 'Recettes gourmandes et réconfortantes pour une personne.';
    $basePath = '';
    $currentPage = 'magazine';
    $additionalCSS = ['recettes.css', 'header-compact.css'];  // ← CSS RECETTES !
    
    include 'components/head.php';
  ?>
</head>
<body class="has-compact-header">

  <?php include 'components/header-compact.php'; ?>

  <!-- ============================================================
       PAGE SECTION : SOLO À TABLE
       ============================================================ -->
  <main class="section-page-container">

    <!-- HEADER DE SECTION -->
    <header class="section-page-header" style="--section-accent: #D4A574;">
      <a href="magazine.php" class="back-link">← Retour au magazine</a>
      <div class="section-page-icon">🍽️</div>
      <h1>Solo à table</h1>
      <p>Des recettes pensées pour une personne, sans gaspillage et pleines de saveur.</p>
    </header>

    <!-- GRILLE DES RECETTES -->
    <section class="recettes-grid">

      <!-- Recette 1 : Pâtes aux courgettes et citron -->
      <a href="articles/recettes/pates-courgettes-citron.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/pates_courgettes_citron.png" alt="Pâtes aux courgettes et citron" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Pâtes aux courgettes et citron</h3>
          <p>Simple, frais, fait avec attention pour soi-même.</p>
          <div class="recette-card-meta">
            <span>⏱️ 20 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 2 : Salade tiède lentilles-chèvre-noix -->
      <a href="articles/recettes/salade-lentilles-solo.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/salade_lentilles_solo.jpg" alt="Salade tiède lentilles-chèvre-noix" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Salade tiède lentilles-chèvre-noix</h3>
          <p>Protéines, croquant et douceur réunis.</p>
          <div class="recette-card-meta">
            <span>⏱️ 20 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 3 : Riz sauté aux légumes et œuf -->
      <a href="articles/recettes/riz-saute-solo.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/riz_saute_solo.jpg" alt="Riz sauté aux légumes et œuf" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Riz sauté aux légumes et œuf</h3>
          <p>Du réconfort simple qui réchauffe.</p>
          <div class="recette-card-meta">
            <span>⏱️ 15 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 4 : Omelette aux champignons -->
      <a href="articles/recettes/omelette-champignons.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/omelette_champignons.png" alt="Omelette aux champignons et fines herbes" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Omelette aux champignons</h3>
          <p>Un classique qu'on oublie trop souvent.</p>
          <div class="recette-card-meta">
            <span>⏱️ 10 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 5 : Shakshuka express -->
      <a href="articles/recettes/shakshuka-express.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/shakshuka_express.png" alt="Shakshuka express" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Shakshuka express</h3>
          <p>Œufs pochés dans une sauce tomate épicée.</p>
          <div class="recette-card-meta">
            <span>⏱️ 15 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 6 : Soupe miso aux légumes -->
      <a href="articles/recettes/soupe-miso-legumes.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/soupe_miso.png" alt="Soupe miso aux légumes" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Soupe miso aux légumes</h3>
          <p>Réconfort instantané pour les soirs doux.</p>
          <div class="recette-card-meta">
            <span>⏱️ 10 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 7 : Tartine avocat-œuf poché -->
      <a href="articles/recettes/tartine-avocat-oeuf.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/tartine_avocat.png" alt="Tartine avocat-œuf poché" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Tartine avocat-œuf poché</h3>
          <p>Simple mais satisfaisant. Parfait pour un brunch.</p>
          <div class="recette-card-meta">
            <span>⏱️ 10 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 8 : Curry de pois chiches -->
      <a href="articles/recettes/curry-pois-chiches.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/curry_pois_chiche.png" alt="Curry de pois chiches express" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Curry de pois chiches express</h3>
          <p>Réconfortant et nourrissant.</p>
          <div class="recette-card-meta">
            <span>⏱️ 20 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

      <!-- Recette 9 : Mug cake au chocolat (DESSERT) -->
      <a href="articles/recettes/mug-cake-chocolat.php" class="recette-card">
        <div class="recette-card-image">
          <img src="images/Magazine/recettes/mug_cake.png" alt="Mug cake au chocolat" loading="lazy">
        </div>
        <div class="recette-card-content">
          <h3>Mug cake au chocolat</h3>
          <p>Un gâteau individuel en 5 minutes. 🍫</p>
          <div class="recette-card-meta">
            <span>⏱️ 5 min</span>
            <span>👤 1 personne</span>
          </div>
        </div>
      </a>

    </section>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
