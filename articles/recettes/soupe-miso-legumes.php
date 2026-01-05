<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Soupe miso aux légumes';
    $pageDescription = 'Bouillon umami, tofu soyeux, légumes. Une soupe apaisante pour les soirs doux.';
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
          <img src="../../images/Magazine/recettes/soupe_miso.png" alt="Soupe miso aux légumes" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Soupe miso aux légumes</h1>
        <p class="recette-subtitle">Réconfort instantané pour les soirs où on a besoin de douceur.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        La soupe miso, c'est un câlin liquide. Ce bouillon japonais, riche en umami, 
        apaise autant qu'il nourrit. Quelques légumes, du tofu soyeux, et voilà — 
        un bol de sérénité qui se prépare en moins de dix minutes.
      </p>

      <div class="recipe-box">
        <h3>Soupe miso aux légumes</h3>
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
            <li>400ml d'eau</li>
            <li>1,5 c. à soupe de pâte miso</li>
            <li>50g de tofu soyeux ou ferme</li>
            <li>1 oignon vert</li>
            <li>Quelques champignons shiitake (ou Paris)</li>
            <li>Une poignée d'épinards ou de wakame</li>
            <li>1 c. à café de sauce soja (facultatif)</li>
            <li>Graines de sésame</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>Les légumes :</strong> Émincer finement les champignons et l'oignon vert. Couper le tofu en petits cubes.</p>
          
          <p><strong>Le bouillon :</strong> Porter l'eau à frémissement (pas à ébullition). Ajouter les champignons et laisser infuser 2-3 minutes.</p>
          
          <p><strong>Le miso :</strong> Retirer du feu. Délayer la pâte miso dans un peu de bouillon chaud, puis l'incorporer au reste. Ne jamais faire bouillir le miso — ça tue ses bienfaits et altère son goût.</p>
          
          <p><strong>L'assemblage :</strong> Ajouter le tofu et les épinards (ou wakame). Ils vont cuire dans la chaleur résiduelle.</p>
          
          <p><strong>La finition :</strong> Verser dans un grand bol. Parsemer d'oignon vert et de graines de sésame. Déguster lentement.</p>
          
          <p><em>On peut enrichir cette soupe avec des nouilles udon ou soba pour en faire un repas plus consistant. Le miso blanc est plus doux, le miso rouge plus corsé — à vous de choisir.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
