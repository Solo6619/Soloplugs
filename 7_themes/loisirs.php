<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Loisirs solo';
    $pageDescription = 'Cultiver ses passions. Sport, créativité, apprentissage — s\'épanouir dans le plaisir de faire pour soi.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['sorties-loisirs-pages.css'];
    
    include '../components/head.php';
  ?>
</head>
<body class="theme-loisirs">

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <!-- ============================================================
     HERO
     ============================================================ -->
<section class="page-hero hero-sorties">
  <div class="hero-content">
    
    <!-- 👇 AJOUTE CETTE LIGNE ICI (avant hero-tag) -->
    <a href="sorties-loisirs-rencontres.php" class="back-to-choices">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M19 12H5M12 19l-7-7 7-7"/>
      </svg>
      Retour aux choix
    </a>
    
    <span class="hero-tag">Loisirs</span>
    <h1>Et si tu osais sortir seul·e ?</h1>
    <p class="hero-lead">
      Un resto, un film, un concert, une expo... Ces moments n'attendent pas 
      que quelqu'un soit disponible. Ils t'attendent, toi.
    </p>
  </div>
</section>

  <!-- ============================================================
       CATÉGORIES DE LOISIRS
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Explore ce qui te parle</h2>
        <p>Il y a forcément quelque chose pour toi.</p>
      </div>

      <div class="category-grid">
        
        <div class="category-card">
          <div class="category-icon">🎨</div>
          <h3>Créativité</h3>
          <ul>
            <li>Dessin, peinture, aquarelle</li>
            <li>Écriture, journaling</li>
            <li>Photographie</li>
            <li>Poterie, bricolage</li>
            <li>Musique, chant</li>
          </ul>
        </div>

        <div class="category-card">
          <div class="category-icon">🏃</div>
          <h3>Mouvement</h3>
          <ul>
            <li>Marche, randonnée</li>
            <li>Yoga, pilates</li>
            <li>Natation</li>
            <li>Vélo</li>
            <li>Danse (même seul·e chez toi)</li>
          </ul>
        </div>

        <div class="category-card">
          <div class="category-icon">🧠</div>
          <h3>Apprentissage</h3>
          <ul>
            <li>Langues étrangères</li>
            <li>Cours en ligne (tout sujet)</li>
            <li>Lecture</li>
            <li>Podcasts, documentaires</li>
            <li>Cuisine, pâtisserie</li>
          </ul>
        </div>

        <div class="category-card">
          <div class="category-icon">🌿</div>
          <h3>Bien-être</h3>
          <ul>
            <li>Méditation</li>
            <li>Jardinage</li>
            <li>Bains de forêt</li>
            <li>Aromathérapie</li>
            <li>Soins personnels</li>
          </ul>
        </div>

        <div class="category-card">
          <div class="category-icon">🎮</div>
          <h3>Divertissement</h3>
          <ul>
            <li>Jeux vidéo solo</li>
            <li>Puzzles, casse-têtes</li>
            <li>Mots croisés, sudoku</li>
            <li>Modélisme</li>
            <li>Collections</li>
          </ul>
        </div>

        <div class="category-card">
          <div class="category-icon">🌍</div>
          <h3>Exploration</h3>
          <ul>
            <li>Visites urbaines</li>
            <li>Géocaching</li>
            <li>Astronomie</li>
            <li>Ornithologie</li>
            <li>Photographie de rue</li>
          </ul>
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
        <h2>Comment s'y mettre vraiment</h2>
      </div>

      <div class="tips-list">
        <div class="tip-item">
          <span class="tip-number">1</span>
          <div class="tip-content">
            <h4>Choisis UNE seule chose</h4>
            <p>Pas trois. Une seule. Tu pourras en ajouter d'autres plus tard.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">2</span>
          <div class="tip-content">
            <h4>Bloque un créneau fixe</h4>
            <p>« Mardi soir, c'est mon moment ». Sans rendez-vous fixe, ça n'arrive jamais.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">3</span>
          <div class="tip-content">
            <h4>Commence ridiculement petit</h4>
            <p>5 minutes de dessin. 10 minutes de marche. L'habitude compte plus que la durée.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">4</span>
          <div class="tip-content">
            <h4>Prépare ton matériel à l'avance</h4>
            <p>Si tout est prêt, la friction pour commencer disparaît.</p>
          </div>
        </div>
        <div class="tip-item">
          <span class="tip-number">5</span>
          <div class="tip-content">
            <h4>Autorise-toi à être nul·le</h4>
            <p>Le but n'est pas la performance. C'est le plaisir, la présence, le moment pour toi.</p>
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
        <p>Ces doutes sont normaux — et surmontables.</p>
      </div>

      <div class="fears-grid">
        <div class="fear-card">
          <div class="fear-icon">🙈</div>
          <h3>« Je ne suis pas doué·e »</h3>
          <p>Personne ne l'est au début. Le plaisir d'un loisir, c'est le chemin, pas la destination. Sois débutant·e avec fierté.</p>
        </div>
        <div class="fear-card">
          <div class="fear-icon">⏰</div>
          <h3>« Je n'ai pas le temps »</h3>
          <p>30 minutes par semaine suffisent pour commencer. Le temps qu'on passe sur son téléphone, on peut le transformer.</p>
        </div>
        <div class="fear-card">
          <div class="fear-icon">💸</div>
          <h3>« Ça coûte cher »</h3>
          <p>Beaucoup de loisirs sont gratuits ou peu coûteux : marche, dessin, lecture, méditation, écriture, yoga en ligne...</p>
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
        « Un loisir n'est pas du temps perdu. C'est du temps investi en toi-même. »
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section class="section section-cta">
    <div class="container">
      <h2>Envie d'explorer tes options ?</h2>
      <p>Solo peut t'aider à trouver le loisir qui te correspond vraiment.</p>
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
