<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Mug cake au chocolat';
    $pageDescription = 'Un gâteau au chocolat individuel en 5 minutes. Chaud, fondant, parfait.';
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
          <img src="../../images/Magazine/recettes/mug_cake.png" alt="Mug cake au chocolat" loading="lazy">
        </div>
      </div>
      
      <!-- Titre et sous-titre -->
      <div class="recette-title-block">
        <h1>Mug cake au chocolat</h1>
        <p class="recette-subtitle">Un gâteau individuel en 5 minutes. La portion parfaite.</p>
      </div>
      
    </header>

    <div class="recette-content">

      <p class="recette-intro">
        Parfois, on a juste envie de chocolat. Pas d'un gâteau entier qui va nous 
        narguer pendant une semaine — juste une portion. Le mug cake, c'est exactement 
        ça : un gâteau chaud, fondant, prêt en moins de temps qu'il n'en faut pour 
        hésiter. Pas de reste, pas de culpabilité, juste du plaisir.
      </p>

      <div class="recipe-box">
        <h3>Mug cake au chocolat</h3>
        <p><em>Pour 1 personne</em></p>
        
        <div class="recipe-quick-info">
          <div class="info-item">
            <span class="info-label">Préparation</span>
            <span class="info-value">3 min</span>
          </div>
          <div class="info-item">
            <span class="info-label">Cuisson</span>
            <span class="info-value">90 sec</span>
          </div>
          <div class="info-item">
            <span class="info-label">Difficulté</span>
            <span class="info-value">Très facile</span>
          </div>
        </div>
        
        <div class="ingredients">
          <h4>Ingrédients</h4>
          <ul>
            <li>4 c. à soupe de farine</li>
            <li>3 c. à soupe de sucre</li>
            <li>2 c. à soupe de cacao en poudre non sucré</li>
            <li>1/4 c. à café de levure chimique</li>
            <li>3 c. à soupe de lait</li>
            <li>2 c. à soupe d'huile végétale</li>
            <li>1 pincée de sel</li>
            <li>Quelques pépites de chocolat (facultatif)</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation</h4>
          
          <p><strong>Les ingrédients secs :</strong> Dans un mug large (environ 350ml), mélanger la farine, le sucre, le cacao, la levure et le sel.</p>
          
          <p><strong>Les liquides :</strong> Ajouter le lait et l'huile. Bien mélanger avec une fourchette jusqu'à obtenir une pâte lisse, sans grumeaux. Racler les bords.</p>
          
          <p><strong>Le petit plus :</strong> Enfoncer quelques pépites de chocolat dans la pâte si vous en avez. Elles vont fondre et créer des poches de chocolat fondu.</p>
          
          <p><strong>La cuisson :</strong> Micro-ondes à pleine puissance pendant 60 à 90 secondes. Le gâteau va gonfler — c'est normal. Il est prêt quand le dessus est juste pris mais encore légèrement humide.</p>
          
          <p><strong>La dégustation :</strong> Attendre 1 minute (c'est brûlant !). Manger directement dans le mug avec une cuillère. Ajouter une boule de glace vanille si on veut se faire vraiment plaisir.</p>
          
          <p><em>Le secret d'un mug cake réussi : ne pas trop cuire ! Mieux vaut 60 secondes et un cœur fondant que 2 minutes et un gâteau caoutchouteux. Chaque micro-ondes est différent — ajustez selon le vôtre.</em></p>
        </div>
      </div>

    </div>

  </main>

  <?php include '../../components/footer.php'; ?>
  <?php include '../../components/scripts.php'; ?>

</body>
</html>
