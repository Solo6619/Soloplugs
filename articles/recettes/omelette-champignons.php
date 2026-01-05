<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Omelette aux champignons et fines herbes';
    $pageDescription = 'Un classique réconfortant. Champignons dorés, œufs baveux, herbes fraîches.';
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
          <img src="../../images/Magazine/recettes/omelette_champignons.png" alt="Omelette aux champignons et fines herbes" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Omelette aux champignons et fines herbes</h1>
        <p class="recette-subtitle">Un classique qu'on oublie trop souvent.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        L'omelette, c'est ce plat qu'on sous-estime. Pourtant, bien faite, avec des champignons 
        dorés au beurre et des herbes fraîches, elle devient un petit festin. Rapide, 
        nourrissante, réconfortante. Le dîner parfait quand on ne veut pas réfléchir.
      </p>

      <div class="recipe-box">
        <h3>Omelette aux champignons et fines herbes</h3>
        <p><em>Pour 1 personne</em></p>
        
        <div class="recipe-quick-info">
          <div class="info-item">
            <span class="info-label">Préparation</span>
            <span class="info-value">5 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Cuisson</span>
            <span class="info-value">5 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Difficulté</span>
            <span class="info-value">Facile</span>
          </div>
        </div>
        
        <div class="ingredients">
          <h4>Ingrédients</h4>
          <ul>
            <li>3 œufs</li>
            <li>100g de champignons de Paris</li>
            <li>1 noix de beurre</li>
            <li>1 c. à soupe de crème fraîche (facultatif)</li>
            <li>Ciboulette, persil ou estragon</li>
            <li>Sel, poivre</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>Les champignons :</strong> Émincer les champignons. Les faire sauter dans une noix de beurre à feu vif jusqu'à ce qu'ils soient dorés et que l'eau se soit évaporée. Saler légèrement. Réserver.</p>
          
          <p><strong>Les œufs :</strong> Battre les œufs avec la crème fraîche, du sel et du poivre. Ne pas trop battre — on veut garder un peu de texture.</p>
          
          <p><strong>La cuisson :</strong> Dans la même poêle, ajouter un peu de beurre. Verser les œufs à feu moyen. Laisser prendre le fond, puis ramener doucement les bords vers le centre avec une spatule.</p>
          
          <p><strong>L'assemblage :</strong> Quand l'omelette est encore baveuse sur le dessus, ajouter les champignons et les herbes ciselées sur une moitié. Replier délicatement et glisser dans l'assiette.</p>
          
          <p><em>Une omelette parfaite est dorée à l'extérieur, crémeuse à l'intérieur. Si elle est trop cuite, elle devient caoutchouteuse — mieux vaut la sortir un peu tôt.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
