<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Riz sauté aux légumes et œuf';
    $pageDescription = 'Pour ces soirs où on veut du réconfort simple. Un plat complet qui réchauffe le cœur.';
    $basePath = '../../';
    $currentPage = 'magazine';
    $additionalCSS = ['recettes.css'];
    
    include '../../components/head.php';
  ?>
</head>
<body>

  

  <!-- ============================================================
       RECETTE : RIZ SAUTÉ AUX LÉGUMES ET ŒUF
       ============================================================ -->
  <main class="article-container">
    
    <!-- Header de recette -->
    <header class="recette-header">
      
      <!-- Hero : Image + Bouton retour -->
      <div class="recette-hero">
        <a href="../../section-table.php" class="back-button">
          <span class="back-icon">←</span> Solo à table
        </a>
        <div class="recette-image">
          <img src="../../images/Magazine/recettes/riz_saute_solo.jpg" alt="Riz sauté aux légumes et œuf" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Riz sauté aux légumes et œuf</h1>
        <p class="recette-subtitle">Pour ces soirs où on veut du réconfort simple.</p>
      </div>
      
    </header>

    <!-- Contenu -->
    <div class="recette-content">

      <p class="recette-intro">
        Il existe des plats qui nous embrassent. Des recettes qui ne demandent pas 
        grand-chose mais offrent tout : le réconfort, la simplicité, la satisfaction 
        de se nourrir vraiment. Le riz sauté aux légumes et œuf est de ceux-là.
      </p>

      <div class="recipe-box">
        <h3>Riz sauté aux légumes et œuf</h3>
        <p><em>Pour 1 personne</em></p>
        
        <div class="recipe-quick-info">
          <div class="info-item">
            <span class="info-label">Préparation</span>
            <span class="info-value">5 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Cuisson</span>
            <span class="info-value">10 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Difficulté</span>
            <span class="info-value">Facile</span>
          </div>
        </div>
        
        <div class="ingredients">
          <h4>Ingrédients</h4>
          <ul>
            <li>80g de riz basmati ou jasmin (ou reste de riz cuit)</li>
            <li>1 œuf</li>
            <li>1 carotte moyenne</li>
            <li>1/2 courgette</li>
            <li>3-4 champignons de Paris</li>
            <li>2 c. à soupe d'huile de sésame (ou olive)</li>
            <li>1 c. à soupe de sauce soja</li>
            <li>1 oignon vert (facultatif)</li>
            <li>Graines de sésame</li>
            <li>Sel, poivre</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>Le riz :</strong> Si vous n'avez pas de riz cuit, rincer le riz et le cuire dans 1,5 fois son volume d'eau salée. Laisser mijoter 15 minutes à couvert, puis égrener.</p>
          
          <p><strong>Les légumes :</strong> Couper carotte et courgette en petits dés. Émincer les champignons. Dans une poêle chaude avec l'huile, faire revenir les carottes 2-3 minutes, puis ajouter courgettes et champignons 3-4 minutes.</p>
          
          <p><strong>L'œuf :</strong> Pousser les légumes sur un côté. Casser l'œuf dans l'espace libre et le brouiller. Quand il prend, mélanger avec les légumes.</p>
          
          <p><strong>L'assemblage :</strong> Ajouter le riz cuit, bien mélanger. Verser la sauce soja, goûter, ajuster. Parsemer d'oignon vert et de graines de sésame.</p>
          
          <p><em>Ce plat se mange avec plaisir, à table, en prenant son temps. Chaque bouchée mélange les textures et les goûts. C'est simple, c'est bon.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
