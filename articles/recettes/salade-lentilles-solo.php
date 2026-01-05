<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Salade tiède lentilles-chèvre-noix';
    $pageDescription = 'Un plat complet et savoureux pour une personne. Protéines, croquant et douceur réunis.';
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
          <img src="../../images/Magazine/recettes/salade_lentilles_solo.jpg" alt="Salade tiède lentilles-chèvre-noix" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Salade tiède lentilles-chèvre-noix</h1>
        <p class="recette-subtitle">Pour ces moments où on veut se faire du bien.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        Ce n'est pas une salade qu'on mange parce qu'on "fait attention". C'est une salade 
        qu'on choisit parce qu'elle nous fait du bien. Les lentilles tièdes sur la roquette 
        fraîche, le chèvre qui fond légèrement, les noix qui croquent — chaque bouchée 
        est un petit moment de bonheur.
      </p>

      <div class="recipe-box">
        <h3>Salade tiède lentilles-chèvre-noix</h3>
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
            <li>100g de lentilles vertes cuites</li>
            <li>50g de fromage de chèvre frais</li>
            <li>1 poignée de roquette ou épinards</li>
            <li>6-8 cerneaux de noix</li>
            <li>1/2 pomme (Granny Smith)</li>
            <li>1 c. à soupe de miel</li>
            <li>2 c. à soupe de vinaigre balsamique</li>
            <li>3 c. à soupe d'huile d'olive</li>
            <li>Sel, poivre</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>La vinaigrette :</strong> Dans un petit bol, mélanger le miel et le vinaigre balsamique. Monter à l'huile d'olive en émulsionnant à la fourchette. Assaisonner.</p>
          
          <p><strong>Les lentilles :</strong> Si elles sortent d'une conserve, les rincer à l'eau tiède. Les réchauffer doucement dans une petite casserole avec un filet d'huile d'olive. Juste tiédir, pas bouillir.</p>
          
          <p><strong>Le reste :</strong> Laver et essorer la roquette. Couper la pomme en fines lamelles. Émietter le chèvre en gros morceaux. Concasser les noix.</p>
          
          <p><strong>Le dressage :</strong> Disposer la roquette en lit dans une belle assiette. Répartir les lentilles tièdes par-dessus. Ajouter pomme, chèvre et noix. Arroser de vinaigrette.</p>
          
          <p><em>Cette salade se déguste immédiatement. Les températures et les textures se mélangent en bouche. C'est un vrai plat, pas une punition santé.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
