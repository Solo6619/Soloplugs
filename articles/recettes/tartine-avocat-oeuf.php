<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Tartine avocat-œuf poché';
    $pageDescription = 'Pain grillé, avocat crémeux, œuf coulant. Simple mais satisfaisant.';
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
          <img src="../../images/Magazine/recettes/tartine_avocat.png" alt="Tartine avocat-œuf poché" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Tartine avocat-œuf poché</h1>
        <p class="recette-subtitle">Simple mais satisfaisant. Parfait pour un brunch solo.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        Cette tartine est devenue un classique pour une bonne raison : elle coche 
        toutes les cases. Crémeux, croquant, nourrissant. L'œuf poché qui coule 
        sur l'avocat, le pain qui croustille — c'est un petit bonheur accessible 
        en dix minutes.
      </p>

      <div class="recipe-box">
        <h3>Tartine avocat-œuf poché</h3>
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
            <span class="info-value">Moyen</span>
          </div>
        </div>
        
        <div class="ingredients">
          <h4>Ingrédients</h4>
          <ul>
            <li>1 tranche de pain au levain (ou complet)</li>
            <li>1/2 avocat mûr</li>
            <li>1 œuf très frais</li>
            <li>Jus d'un demi-citron</li>
            <li>Piment d'Espelette ou flocons de chili</li>
            <li>Fleur de sel</li>
            <li>Poivre du moulin</li>
            <li>Quelques graines (sésame, courge)</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>L'œuf poché :</strong> Porter une casserole d'eau à frémissement (petites bulles, pas d'ébullition). Ajouter un trait de vinaigre. Créer un tourbillon avec une cuillère, puis glisser l'œuf au centre. Cuire 3 minutes. Récupérer avec une écumoire.</p>
          
          <p><strong>Le pain :</strong> Pendant ce temps, faire griller le pain jusqu'à ce qu'il soit bien doré et croustillant.</p>
          
          <p><strong>L'avocat :</strong> Écraser l'avocat à la fourchette directement sur le pain chaud. Arroser de jus de citron. Saler, poivrer.</p>
          
          <p><strong>L'assemblage :</strong> Déposer délicatement l'œuf poché sur l'avocat. Saupoudrer de piment et de graines. Finir avec une pincée de fleur de sel.</p>
          
          <p><em>L'astuce pour un œuf poché réussi : utiliser un œuf très frais (le blanc se tient mieux) et ne surtout pas faire bouillir l'eau. Le tourbillon aide le blanc à envelopper le jaune.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
