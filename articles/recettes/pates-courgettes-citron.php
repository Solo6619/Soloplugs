<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Pâtes aux courgettes et citron';
    $pageDescription = 'Simple, frais, fait avec attention pour soi-même. Une recette parfaite pour une personne.';
    $basePath = '../../';
    $currentPage = 'magazine';
    $additionalCSS = ['recettes.css'];
    
    include '../../components/head.php';
  ?>
</head>
<body>

  

  <!-- ============================================================
       RECETTE : PÂTES AUX COURGETTES ET CITRON
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
          <img src="../../images/Magazine/recettes/pates_courgettes_citron.png" alt="Pâtes aux courgettes et citron" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Pâtes aux courgettes et citron</h1>
        <p class="recette-subtitle">Simple, frais, fait avec attention pour soi-même.</p>
      </div>
      
    </header>

    <!-- Contenu -->
    <div class="recette-content">

      <p class="recette-intro">
        Ce plat n'a rien d'exceptionnel, mais il a tout d'une victoire personnelle. 
        Les courgettes fondantes, le citron qui relève, le parmesan qui enrobe — 
        exactement ce dont on avait besoin.
      </p>

      <div class="recipe-box">
        <h3>Pâtes aux courgettes et citron</h3>
        <p><em>Pour 1 personne</em></p>
        
        <div class="recipe-quick-info">
          <div class="info-item">
            <span class="info-label">Préparation</span>
            <span class="info-value">10 min</span>
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
            <li>100g de pâtes courtes (celles qu'on préfère)</li>
            <li>1 courgette moyenne</li>
            <li>1/2 citron (jus et zestes)</li>
            <li>2 cuillères à soupe d'huile d'olive</li>
            <li>Parmesan râpé (facultatif)</li>
            <li>Sel, poivre</li>
            <li>Herbes fraîches si on en a</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>Les courgettes :</strong> Couper la courgette en petits dés. Les faire revenir à feu moyen dans l'huile d'olive jusqu'à ce qu'ils soient tendres et légèrement dorés. Prendre son temps, écouter le grésillement, sentir les parfums.</p>
          
          <p><strong>Les pâtes :</strong> Pendant ce temps, cuire les pâtes dans l'eau bouillante salée. Les égoutter en gardant un peu d'eau de cuisson (environ 1/4 de tasse).</p>
          
          <p><strong>L'assemblage :</strong> Mélanger les pâtes aux courgettes avec le jus et les zestes du citron. Ajouter l'eau de cuisson si nécessaire pour que ce soit bien crémeux. Goûter, ajuster l'assaisonnement.</p>
          
          <p><strong>La finition :</strong> Servir dans son assiette préférée. Râper du parmesan si on en a envie. Ajouter les herbes fraîches. S'installer confortablement et savourer chaque bouchée.</p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
