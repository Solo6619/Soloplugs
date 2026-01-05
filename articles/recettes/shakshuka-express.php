<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Shakshuka express';
    $pageDescription = 'Œufs pochés dans une sauce tomate épicée. Un plat qui réchauffe l\'âme.';
    $basePath = '../../';
    $currentPage = 'magazine';
    $additionalCSS = ['recettes.css'];
    
    include '../../components/head.php';
  ?>
</head>
<body>

  

  <main class="article-container">
    
    <header class="recette-header">
      
      <!-- Hero : Image + Bouton retour -->
      <div class="recette-hero">
        <a href="../../section-table.php" class="back-button">
          <span class="back-icon">←</span> Solo à table
        </a>
        <div class="recette-image">
          <img src="../../images/Magazine/recettes/shakshuka_express.png" alt="Shakshuka express" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Shakshuka express</h1>
        <p class="recette-subtitle">Un plat du Moyen-Orient qui réchauffe l'âme.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        La shakshuka, c'est des œufs qui pochent doucement dans une sauce tomate 
        parfumée aux épices. Originaire d'Afrique du Nord, ce plat est devenu un 
        classique du brunch — mais il est tout aussi parfait pour un dîner solo. 
        On trempe son pain directement dans la poêle. Pas de chichi.
      </p>

      <div class="recipe-box">
        <h3>Shakshuka express</h3>
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
            <li>2 œufs</li>
            <li>200g de tomates concassées (conserve)</li>
            <li>1/2 oignon</li>
            <li>1 gousse d'ail</li>
            <li>1 c. à café de cumin</li>
            <li>1/2 c. à café de paprika</li>
            <li>Piment (selon goût)</li>
            <li>Huile d'olive</li>
            <li>Sel, poivre</li>
            <li>Persil ou coriandre frais</li>
            <li>Pain croûté pour servir</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>La base :</strong> Émincer l'oignon et l'ail. Les faire revenir dans l'huile d'olive à feu moyen jusqu'à ce qu'ils soient translucides.</p>
          
          <p><strong>Les épices :</strong> Ajouter le cumin, le paprika et le piment. Remuer 30 secondes — les épices s'ouvrent au contact de la chaleur.</p>
          
          <p><strong>La sauce :</strong> Verser les tomates concassées. Saler, poivrer. Laisser mijoter 5 minutes jusqu'à ce que la sauce épaississe légèrement.</p>
          
          <p><strong>Les œufs :</strong> Creuser deux petits puits dans la sauce. Casser un œuf dans chaque puits. Couvrir et laisser cuire 4-5 minutes — le blanc doit être pris, le jaune encore coulant.</p>
          
          <p><strong>La finition :</strong> Parsemer d'herbes fraîches. Servir directement dans la poêle avec du bon pain pour saucer.</p>
          
          <p><em>On peut ajouter de la feta émiettée sur le dessus, ou des poivrons grillés dans la sauce. C'est un plat qui s'adapte à ce qu'on a.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
