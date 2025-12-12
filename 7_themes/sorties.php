<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Sorties solo';
    $pageDescription = 'Oser sortir seul. Restaurant, cinéma, concert, expo — conquérir l\'espace public en toute liberté.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['sorties-loisirs-pages.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="page-hero hero-sorties">
    <div class="hero-content">
      <span class="hero-tag">Sorties solo</span>
      <h1>Et si tu osais sortir seul·e ?</h1>
      <p class="hero-lead">
        Un resto, un film, un concert, une expo... Ces moments n'attendent pas 
        que quelqu'un soit disponible. Ils t'attendent, toi.
      </p>
    </div>
  </section>

  <!-- ============================================================
       IDÉES DE SORTIES
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Des idées pour commencer</h2>
        <p>Du plus facile au plus audacieux — à ton rythme.</p>
      </div>

      <div class="ideas-grid">
        
        <div class="idea-card difficulty-easy">
          <span class="difficulty-badge">Facile</span>
          <h3>☕ Café en terrasse</h3>
          <p>Un livre ou ton téléphone, un bon café, et le monde qui passe. Le classique parfait pour débuter.</p>
        </div>

        <div class="idea-card difficulty-easy">
          <span class="difficulty-badge">Facile</span>
          <h3>🎬 Cinéma en semaine</h3>
          <p>Mardi ou mercredi après-midi, les salles sont calmes. Tu choisis TON film, pas un compromis.</p>
        </div>

        <div class="idea-card difficulty-medium">
          <span class="difficulty-badge">Modéré</span>
          <h3>🖼️ Musée ou exposition</h3>
          <p>L'endroit idéal pour être seul·e. Tu avances à ton rythme, tu t'arrêtes où tu veux, tu repars quand tu veux.</p>
        </div>

        <div class="idea-card difficulty-medium">
          <span class="difficulty-badge">Modéré</span>
          <h3>🍽️ Restaurant au comptoir</h3>
          <p>Les places au bar ou au comptoir sont faites pour les solos. Tu peux même discuter avec le personnel.</p>
        </div>

        <div class="idea-card difficulty-bold">
          <span class="difficulty-badge">Audacieux</span>
          <h3>🎵 Concert ou spectacle</h3>
          <p>La musique se vit intensément seul·e. Pas de compromis sur l'artiste, pas de discussion pendant le show.</p>
        </div>

        <div class="idea-card difficulty-bold">
          <span class="difficulty-badge">Audacieux</span>
          <h3>🍷 Bar à vin / cocktail</h3>
          <p>Assis·e au bar, un verre à la main. Les barmen adorent les clients solo — ils ont le temps de discuter.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CONSEILS PRATIQUES
       ============================================================ -->
  <section class="section">
    <div class="container container-narrow">
      <div class="section-header">
        <h2>Quelques astuces pour te lancer</h2>
      </div>

      <div class="tips-list">
        <div class="tip-item">
          <span class="tip-number">1</span>
          <div class="tip-content">
            <h4>Commence petit</h4>
            <p>Un café de 20 minutes. Pas besoin de viser le restaurant gastronomique dès le premier jour.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">2</span>
          <div class="tip-content">
            <h4>Choisis le bon moment</h4>
            <p>Les heures creuses (mardi midi, mercredi après-midi) sont plus douces pour débuter.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">3</span>
          <div class="tip-content">
            <h4>Apporte un « compagnon »</h4>
            <p>Un livre, un carnet, ton téléphone — quelque chose qui t'occupe si tu en ressens le besoin.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">4</span>
          <div class="tip-content">
            <h4>Réserve si possible</h4>
            <p>« Une personne, s'il vous plaît » — c'est tout. Le personnel ne sourcillera même pas.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">5</span>
          <div class="tip-content">
            <h4>Savoure le moment</h4>
            <p>Observe, goûte, ressens. Sans conversation à maintenir, tes sens sont libres.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CE QUI TE RETIENT (à la fin)
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Ce qui te retient peut-être</h2>
        <p>Ces pensées sont normales. Tout le monde les a eues.</p>
      </div>

      <div class="fears-grid">
        <div class="fear-card">
          <div class="fear-icon">👀</div>
          <h3>« On va me regarder bizarrement »</h3>
          <p>En réalité, les gens sont bien trop occupés par leur propre vie pour te juger. Et ceux qui sortent seuls ? Ils inspirent souvent le respect.</p>
        </div>
        <div class="fear-card">
          <div class="fear-icon">😔</div>
          <h3>« Je vais avoir l'air triste »</h3>
          <p>Une personne seule qui savoure un bon repas ou un film a l'air de quelqu'un qui s'aime assez pour se faire plaisir.</p>
        </div>
        <div class="fear-card">
          <div class="fear-icon">🤷</div>
          <h3>« Je ne saurai pas quoi faire »</h3>
          <p>Tu feras exactement ce que tu veux : observer, rêvasser, lire, écouter de la musique, ou simplement être présent·e.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="section section-quote">
    <div class="container">
      <blockquote>
        « La liberté, c'est de pouvoir dire oui à une envie sans attendre que quelqu'un d'autre soit disponible. »
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section class="section section-cta">
    <div class="container">
      <h2>Prêt·e à faire le premier pas ?</h2>
      <p>Solo peut t'aider à trouver l'idée parfaite pour ta première sortie solo.</p>
      <div class="cta-buttons">
        <a href="../solo.php" class="btn btn-primary">Parler à Solo</a>
        <a href="sorties-loisirs-rencontres.php" class="btn btn-secondary">← Retour aux choix</a>
      </div>
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
