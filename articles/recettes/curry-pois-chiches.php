<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Curry de pois chiches express';
    $pageDescription = 'Un plat végétarien complet, réconfortant et nourrissant. Prêt en 20 minutes.';
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
          <img src="../../images/Magazine/recettes/curry_pois_chiche.png" alt="Curry de pois chiches express" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Curry de pois chiches express</h1>
        <p class="recette-subtitle">Réconfortant, nourrissant, et prêt avec des conserves.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        Ce curry est la preuve qu'on peut se régaler avec ce qu'on a dans les placards. 
        Une boîte de pois chiches, du lait de coco, quelques épices — et voilà un plat 
        généreux, parfumé, qui tient au corps. Le genre de recette qu'on refait encore 
        et encore.
      </p>

      <div class="recipe-box">
        <h3>Curry de pois chiches express</h3>
        <p><em>Pour 1 personne (avec restes pour demain)</em></p>
        
        <div class="recipe-quick-info">
          <div class="info-item">
            <span class="info-label">Préparation</span>
            <span class="info-value">5 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Cuisson</span>
            <span class="info-value">15 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Difficulté</span>
            <span class="info-value">Facile</span>
          </div>
        </div>
        
        <div class="ingredients">
          <h4>Ingrédients</h4>
          <ul>
            <li>1 boîte de pois chiches (400g)</li>
            <li>200ml de lait de coco</li>
            <li>200g de tomates concassées</li>
            <li>1 oignon</li>
            <li>2 gousses d'ail</li>
            <li>1 c. à soupe de pâte de curry (ou poudre)</li>
            <li>1 c. à café de curcuma</li>
            <li>1 c. à café de cumin</li>
            <li>Huile d'olive</li>
            <li>Coriandre fraîche</li>
            <li>Riz basmati pour servir</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>La base :</strong> Émincer l'oignon et l'ail. Les faire revenir dans l'huile d'olive jusqu'à ce qu'ils soient dorés.</p>
          
          <p><strong>Les épices :</strong> Ajouter la pâte de curry, le curcuma et le cumin. Remuer 1 minute — les parfums vont exploser.</p>
          
          <p><strong>Le curry :</strong> Verser les tomates concassées et le lait de coco. Ajouter les pois chiches égouttés et rincés. Mélanger.</p>
          
          <p><strong>La cuisson :</strong> Laisser mijoter 10-15 minutes à feu doux. La sauce va épaissir et les saveurs vont se mélanger. Goûter, ajuster l'assaisonnement.</p>
          
          <p><strong>La finition :</strong> Servir sur du riz basmati chaud. Parsemer de coriandre fraîche. Un trait de jus de citron en finition si on aime.</p>
          
          <p><em>Ce curry est encore meilleur réchauffé le lendemain — les saveurs ont eu le temps de se marier. Parfait pour préparer deux portions d'un coup.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
