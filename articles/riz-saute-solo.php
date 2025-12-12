<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Riz sauté aux légumes et œuf';
    $pageDescription = 'Pour ces soirs où on veut du réconfort simple. Un plat complet qui réchauffe le cœur.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['../magazine.css', '../articles.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       ARTICLE PRINCIPAL
       ============================================================ -->
  <main class="article-container">
    
    <!-- Navigation retour -->
    <nav class="article-breadcrumb">
      <a href="../magazine.php" class="back-link">
        ← Retour au Magazine
      </a>
    </nav>

    <!-- En-tête de l'article -->
    <header class="article-header">
      <div class="article-meta">
        <span class="article-category">Solo à table</span>
        <span class="article-date">12 octobre 2025</span>
        <span class="article-read">15 min de lecture</span>
      </div>
      
      <h1 class="article-title">Riz sauté aux légumes et œuf</h1>
      
      <p class="article-subtitle">
        Pour ces soirs où on veut du réconfort simple. Un plat complet qui réchauffe le cœur.
      </p>
      
      <div class="article-image">
        <img src="../images/Magazine/riz_saute_solo.jpg" alt="Riz sauté solo réconfortant" loading="lazy">
      </div>
    </header>

    <!-- Contenu de l'article -->
    <article class="article-content">
      
      <p class="article-intro">
        Il existe des plats qui nous embrassent. Des recettes qui ne demandent pas grand-chose mais offrent tout : le réconfort, la simplicité, la satisfaction de se nourrir vraiment. Le riz sauté aux légumes et œuf est de ceux-là.
      </p>

      <p>
        Ce n'est pas un plat sophistiqué. Pas de technique complexe, pas d'ingrédients rares. Juste cette magie du quotidien : transformer quelques éléments simples en un moment de bonheur culinaire. Et surtout, se le préparer à soi, pour soi, selon ses envies du moment.
      </p>

      <h2>Le plat des soirs tranquilles</h2>

      <p>
        Le riz sauté, c'est cette recette qu'on fait quand on veut se faire du bien sans se compliquer la vie. Quand on rentre fatigué·e et qu'on a besoin de quelque chose de nourrissant, de coloré, de vivant. Quelque chose qui nous dit : "Tu es chez toi, tu peux te poser."
      </p>

      <p>
        C'est aussi le plat anti-gaspillage par excellence. Ces légumes qui attendent dans le frigo, ce reste de riz d'hier, cet œuf solitaire : tout prend un sens dans la poêle. Rien ne se perd, tout se transforme en un repas généreux.
      </p>

      <h2>La liberté des proportions</h2>

      <p>
        Quand on cuisine pour soi, on découvre la liberté des proportions. Plus de courgettes que de carottes aujourd'hui ? Pourquoi pas. Deux œufs au lieu d'un parce qu'on a faim ? C'est notre choix. Un peu plus de sauce soja parce qu'on adore ça ? Personne ne va protester.
      </p>

      <p>
        Cette liberté nous apprend quelque chose d'important : il n'y a pas une seule bonne façon de cuisiner. Il y a notre façon, celle qui nous correspond aujourd'hui, avec ce qu'on a sous la main et l'humeur du moment.
      </p>

      <div class="recipe-box">
        <h3>Riz sauté aux légumes et œuf</h3>
        <p><em>Pour 1 personne qui mérite un vrai repas</em></p>
        
        <div class="ingredients">
          <h4>Ingrédients :</h4>
          <ul>
            <li>80g de riz basmati ou jasmin (ou reste de riz cuit)</li>
            <li>1 œuf</li>
            <li>1 carotte moyenne</li>
            <li>1/2 courgette</li>
            <li>3-4 champignons de Paris</li>
            <li>2 cuillères à soupe d'huile de sésame (ou olive)</li>
            <li>1 cuillère à soupe de sauce soja</li>
            <li>1 oignon vert (facultatif)</li>
            <li>Sel, poivre</li>
            <li>Graines de sésame (pour finir)</li>
          </ul>
        </div>
        
        <div class="method">
          <h4>Préparation :</h4>
          
          <p><strong>Si vous n'avez pas de riz cuit :</strong> Rincer le riz jusqu'à ce que l'eau soit claire. Le cuire dans 1,5 fois son volume d'eau salée. Laisser mijoter à feu doux 15 minutes, couvercle fermé. Laisser reposer 5 minutes puis égrener à la fourchette.</p>
          
          <p><strong>Préparer les légumes :</strong> Couper la carotte et la courgette en petits dés réguliers. Émincer les champignons. Ciseler l'oignon vert si vous en utilisez. Prendre son temps pour cette étape, elle est méditative.</p>
          
          <p><strong>La cuisson :</strong> Dans une grande poêle ou un wok, chauffer l'huile à feu moyen-vif. Commencer par les carottes (elles sont plus dures), les faire revenir 2-3 minutes. Ajouter courgettes et champignons, continuer 3-4 minutes jusqu'à ce que tout soit tendre.</p>
          
          <p><strong>L'œuf :</strong> Pousser les légumes sur un côté de la poêle. Casser l'œuf dans l'espace libre et le brouiller à la spatule. Quand il commence à prendre, mélanger avec les légumes.</p>
          
          <p><strong>Le riz :</strong> Ajouter le riz cuit, bien mélanger pour qu'il se réchauffe et s'imprègne des saveurs. Verser la sauce soja, goûter, ajuster l'assaisonnement. Si c'est un peu sec, ajouter une cuillère d'eau.</p>
          
          <p><strong>La finition :</strong> Retirer du feu, parsemer d'oignon vert et de graines de sésame. Servir immédiatement dans votre bol préféré.</p>
          
          <p><em>Ce plat se mange avec plaisir, à table, en prenant son temps. Chaque bouchée mélange les textures et les goûts. C'est simple, c'est bon, c'est exactement ce dont on avait besoin.</em></p>
        </div>
      </div>

      <h2>Le rituel du riz sauté</h2>

      <p>
        Faire un riz sauté, c'est créer son petit rituel. Sortir les légumes, les laver, les couper avec attention. Entendre le grésillement dans la poêle. Sentir les parfums qui montent. Ajuster les saveurs en goûtant.
      </p>

      <p>
        Ces gestes simples nous ancrent dans l'instant présent. Ils nous rappellent que prendre soin de soi, ça commence par ces petites attentions quotidiennes. Se nourrir correctement, avec plaisir, sans culpabilité.
      </p>

      <div class="article-highlight">
        <h3>À retenir</h3>
        <p>
          Le riz sauté n'est pas qu'une recette, c'est une philosophie. Celle de faire avec ce qu'on a, de s'adapter à ses envies, de transformer le simple en délicieux.
        </p>
        <p>
          C'est apprendre que cuisiner pour soi ne demande pas des heures ni des ingrédients compliqués. Juste un peu d'attention, quelques légumes, et la volonté de se faire plaisir.
        </p>
        <p>
          <strong>Parce que se nourrir avec bienveillance, c'est déjà s'aimer un peu.</strong>
        </p>
      </div>

    </article>

    <!-- Navigation articles similaires -->
    <section class="related-articles">
      <h3>Articles similaires</h3>
      <div class="related-grid">
        
        <a href="salade-lentilles-solo.php" class="related-card">
          <div class="related-image">
            <img src="../images/Magazine/salade_lentilles_solo.jpg" alt="Salade tiède lentilles-chèvre-noix" loading="lazy">
          </div>
          <div class="related-content">
            <h4>Salade tiède lentilles-chèvre-noix</h4>
            <p>Pour ces moments où on veut se faire du bien. Un plat qui dit "je prends soin de moi".</p>
            <span class="related-meta">20 min • Solo à table</span>
          </div>
        </a>

        <a href="cuisiner-pour-soi.php" class="related-card">
          <div class="related-image">
            <img src="../images/Magazine/cuisine_solo.jpg" alt="Cuisiner pour soi" loading="lazy">
          </div>
          <div class="related-content">
            <h4>Cuisiner pour soi</h4>
            <p>Dans un monde où manger seul·e devient assumé, cuisiner en solo devient un geste de liberté.</p>
            <span class="related-meta">4 min • Solo à table</span>
          </div>
        </a>

      </div>
    </section>

  </main>

  <?php include '../components/footer.php'; ?>

  <style>
    /* Styles spécifiques pour la recette */
    .recipe-box {
      background: linear-gradient(135deg, rgba(212, 165, 116, 0.08), rgba(212, 165, 116, 0.03));
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 12px;
      padding: var(--spacing-lg);
      margin: var(--spacing-xl) 0;
    }

    .recipe-box h3 {
      font-family: 'Lora', serif;
      font-size: 1.4rem;
      color: var(--accent);
      margin-bottom: var(--spacing-sm);
      text-align: center;
    }

    .recipe-box h4 {
      font-family: 'Lora', serif;
      font-size: 1.1rem;
      color: var(--text-primary);
      margin: var(--spacing-md) 0 var(--spacing-sm) 0;
    }

    .ingredients ul {
      list-style: none;
      padding: 0;
    }

    .ingredients li {
      padding: 0.3rem 0;
      padding-left: 1.5rem;
      position: relative;
    }

    .ingredients li::before {
      content: "•";
      color: var(--accent);
      font-weight: bold;
      position: absolute;
      left: 0;
    }

    .method p {
      margin-bottom: var(--spacing-sm);
      line-height: 1.6;
    }
  </style>

  <!-- Scripts spécifiques aux articles -->
  <script>
    // Retour en haut fluide
    document.querySelector('.back-link')?.addEventListener('click', (e) => {
      e.preventDefault();
      window.history.back();
    });
  </script>

  <?php include '../components/scripts.php'; ?>

</body>
</html>