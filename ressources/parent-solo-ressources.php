<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources Parent Solo – Soloplugs</title>
  <meta name="description" content="Livres, podcasts et ressources pour les parents solos qui veulent mieux comprendre la fatigue, l'épuisement et leur rapport aux écrans.">
  <link rel="stylesheet" href="../css/fonts.css">
<style>
    :root {
      --color-cream-deep: #F5EDE4;
      --color-cream: #FBF9F6;
      --color-white: #FFFFFF;
      --color-gold: #D4A574;
      --color-gold-light: #E8C9A8;
      --color-text-dark: #2C3338;
      --color-text-dark-soft: #5C554E;
      --color-text-dark-muted: #7A726A;
      --color-transition: #3D352D;
      --shadow-soft: 0 4px 20px rgba(44, 51, 56, 0.08);
      --font-display: 'Lora', Georgia, serif;
      --font-body: 'Outfit', system-ui, sans-serif;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--font-body);
      background: var(--color-cream);
      color: var(--color-text-dark);
      line-height: 1.6;
    }
    a { text-decoration: none; color: inherit; }

    /* ============================================================
       BOUTON RETOUR FIXE
       ============================================================ */
    .back-fixed {
      position: fixed;
      top: 1.5rem;
      left: 1.5rem;
      z-index: 1001;
      width: 44px;
      height: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--color-white);
      border: 1px solid var(--color-gold-light);
      border-radius: 50%;
      color: var(--color-gold);
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }
    .back-fixed:hover {
      background: var(--color-gold);
      color: var(--color-white);
      border-color: var(--color-gold);
    }
    .back-fixed svg {
      width: 20px;
      height: 20px;
    }

    /* ============================================================
       NAVIGATION
       ============================================================ */
    .nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      padding: 1.25rem 4rem;
      padding-left: 5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--color-white);
      border-bottom: 1px solid rgba(212, 165, 116, 0.25);
      box-shadow: 0 2px 15px rgba(0,0,0,0.06);
    }
    .nav-logo {
      font-family: var(--font-display);
      font-size: 1.6rem;
      font-weight: 500;
      letter-spacing: 0.05em;
      color: var(--color-text-dark);
    }
    .nav-links {
      display: flex;
      gap: 3rem;
      list-style: none;
    }
    .nav-links a {
      font-size: 0.85rem;
      font-weight: 400;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--color-text-dark-soft);
      transition: color 0.3s;
    }
    .nav-links a:hover { color: var(--color-gold); }

    /* Dropdown Thèmes */
    .nav-dropdown { position: relative; }
    .dropdown-toggle { cursor: pointer; }
    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background: var(--color-white);
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      padding: 0.75rem 0;
      min-width: 200px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: all 0.3s ease;
      list-style: none;
    }
    .nav-dropdown:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    .dropdown-menu li a {
      display: block;
      padding: 0.6rem 1.25rem;
      font-size: 0.85rem;
      text-transform: none;
      letter-spacing: 0;
    }
    .dropdown-menu li a:hover {
      background: var(--color-cream-deep);
      color: var(--color-gold);
    }

    /* ============================================================
       PAGE HEADER
       ============================================================ */
    .page-header {
      padding-top: 120px;
      padding-bottom: 3rem;
      text-align: center;
      background: var(--color-cream);
    }
    .page-header-inner {
      max-width: 700px;
      margin: 0 auto;
      padding: 0 2rem;
    }
    .page-category {
      display: inline-block;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--color-gold);
      margin-bottom: 1.5rem;
      padding: 0.5rem 1.25rem;
      border: 1px solid var(--color-gold-light);
      border-radius: 20px;
    }
    .page-title {
      font-family: var(--font-display);
      font-size: clamp(2.2rem, 5vw, 3rem);
      font-weight: 400;
      line-height: 1.2;
      color: var(--color-text-dark);
      margin-bottom: 1.5rem;
    }
    .page-intro {
      font-size: 1.1rem;
      color: var(--color-text-dark-soft);
      line-height: 1.8;
    }

    /* ============================================================
       RESSOURCES CONTENT
       ============================================================ */
    .ressources-content {
      max-width: 800px;
      margin: 0 auto;
      padding: 2rem 2rem 4rem;
    }

    .ressources-section {
      margin-bottom: 4rem;
    }

    .ressources-section-title {
      font-family: var(--font-display);
      font-size: 1.6rem;
      font-weight: 500;
      color: var(--color-text-dark);
      margin-bottom: 2rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid var(--color-gold-light);
    }

    .ressource-card {
      background: var(--color-white);
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 12px;
      padding: 1.75rem 2rem;
      margin-bottom: 1.5rem;
      transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .ressource-card:hover {
      box-shadow: var(--shadow-soft);
      border-color: var(--color-gold-light);
    }

    .ressource-type {
      font-size: 0.7rem;
      font-weight: 500;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--color-gold);
      margin-bottom: 0.5rem;
    }

    .ressource-title {
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-weight: 500;
      color: var(--color-text-dark);
      margin-bottom: 0.25rem;
      line-height: 1.3;
    }

    .ressource-author {
      font-size: 0.9rem;
      color: var(--color-gold);
      margin-bottom: 1rem;
      font-style: italic;
    }

    .ressource-description {
      font-size: 0.95rem;
      font-weight: 300;
      color: var(--color-text-dark-soft);
      line-height: 1.8;
    }

    .ressource-link {
      display: inline-block;
      margin-top: 1rem;
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--color-gold);
      transition: color 0.3s ease;
    }
    .ressource-link:hover {
      color: var(--color-text-dark);
    }

    /* ============================================================
       CLOSING
       ============================================================ */
    .ressources-closing {
      max-width: 680px;
      margin: 0 auto;
      padding: 2rem 2rem 3rem;
      text-align: center;
    }
    .ressources-closing p {
      font-family: var(--font-display);
      font-size: 1.15rem;
      font-style: italic;
      color: var(--color-text-dark-soft);
      line-height: 1.7;
      padding-top: 2rem;
      border-top: 1px solid var(--color-gold-light);
    }

    /* ============================================================
       BOUTON RETOUR BAS
       ============================================================ */
    .back-bottom {
      display: flex;
      justify-content: center;
      padding: 3rem 2rem 5rem;
      background: var(--color-cream-deep);
    }
    .back-bottom a {
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--color-gold);
      padding: 1rem 2rem;
      border: 1px solid var(--color-gold);
      border-radius: 4px;
      transition: all 0.3s;
      cursor: pointer;
    }
    .back-bottom a:hover {
      background: var(--color-gold);
      color: var(--color-white);
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .footer {
      padding: 2rem 4rem;
      background: var(--color-transition);
    }
    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .footer-logo {
      font-family: var(--font-display);
      font-size: 1.4rem;
      color: var(--color-cream);
    }
    .footer-center {
      display: flex;
      gap: 2.5rem;
      list-style: none;
    }
    .footer-center a {
      font-size: 0.85rem;
      color: rgba(245, 237, 228, 0.7);
      transition: color 0.3s;
    }
    .footer-center a:hover { color: var(--color-gold); }
    .footer-copy {
      font-size: 0.8rem;
      color: rgba(245, 237, 228, 0.5);
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
      .back-fixed {
        top: 1rem;
        left: 1rem;
        width: 40px;
        height: 40px;
      }
      .nav { 
        padding: 1rem 1.5rem;
        padding-left: 4rem;
      }
      .nav-links { display: none; }
      .page-header { padding-top: 100px; }
      .ressources-content { padding: 1.5rem 1.5rem 3rem; }
      .ressource-card { padding: 1.25rem 1.5rem; }
      .footer { padding: 1.5rem; }
      .footer-content { 
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
      }
      .footer-logo { display: none; }
      .footer-center { gap: 1.5rem; }
    }
  </style>
</head>
<body>

<!-- BOUTON RETOUR FIXE -->
<button class="back-fixed" onclick="history.back()" aria-label="Retour">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M19 12H5M12 19l-7-7 7-7"/>
  </svg>
</button>

<!-- NAVIGATION -->
<nav class="nav">
  <a href="../index.php" class="nav-logo">Soloplugs</a>
  <ul class="nav-links">
    <li><a href="../magazine.php">Magazine</a></li>
    <li class="nav-dropdown">
      <a href="#" class="dropdown-toggle">Thèmes</a>
      <ul class="dropdown-menu">
        <li><a href="../7_themes/vivre-solo.php">Vivre Solo</a></li>
        <li><a href="../7_themes/ado-solo.php">Ado Solo</a></li>
        <li><a href="../7_themes/parent-solo.php">Parent Solo</a></li>
        <li><a href="../7_themes/vieillir-solo.php">Vieillir Solo</a></li>
        <li><a href="../7_themes/voyages-solo.php">Voyages Solo</a></li>
        <li><a href="../7_themes/sorties-loisirs.php">Sorties & Loisirs</a></li>
        <li><a href="../7_themes/divorces-separations.php">Divorces & Séparations</a></li>
      </ul>
    </li>
    <li><a href="../ressources.php">Ressources</a></li>
    <li><a href="../apropos.php">À propos</a></li>
  </ul>
</nav>

<!-- HEADER -->
<header class="page-header">
  <div class="page-header-inner">
    <span class="page-category">Ressources</span>
    <h1 class="page-title">Parent Solo</h1>
    <p class="page-intro">
      Des livres, des podcasts et des ressources pour mieux comprendre la fatigue parentale, 
      l'épuisement et notre rapport aux écrans. Sans culpabilité, avec bienveillance.
    </p>
  </div>
</header>

<!-- CONTENU -->
<main class="ressources-content">

  <!-- SECTION LIVRES -->
  <section class="ressources-section">
    <h2 class="ressources-section-title">Livres</h2>

    <article class="ressource-card">
      <span class="ressource-type">Livre</span>
      <h3 class="ressource-title">Burn out parental – Comment sortir de l'épuisement ?</h3>
      <p class="ressource-author">Aline Nativel Id Hammou (Mardaga)</p>
      <p class="ressource-description">
        Psychologue clinicienne, l'autrice parle aux parents qui se sentent au bout du rouleau dans leur quotidien familial, pas seulement au travail. Elle propose une auto-évaluation pour mesurer sa vulnérabilité au burn-out et des pistes concrètes pour alléger la charge mentale, retrouver du temps pour soi et une présence plus apaisée auprès des enfants — utile quand le téléphone devient un refuge automatique.
      </p>
    </article>

    <article class="ressource-card">
      <span class="ressource-type">Livre</span>
      <h3 class="ressource-title">Le burn-out parental – L'éviter et s'en sortir</h3>
      <p class="ressource-author">Isabelle Roskam & Moïra Mikolajczak (De Boeck)</p>
      <p class="ressource-description">
        Ouvrage de référence qui explique ce qu'est le burn-out parental, comment il se construit dans la durée et pourquoi il touche surtout les parents très investis, souvent en quête de perfection. Les autrices décrivent notamment la « distanciation affective » : ce moment où, trop épuisé, on s'occupe des tâches (devoirs, bains, repas) mais on se sent émotionnellement absent — ce qui rejoint ces instants où l'on se réfugie sur son téléphone pour tenir le coup.
      </p>
    </article>

    <article class="ressource-card">
      <span class="ressource-type">Livre</span>
      <h3 class="ressource-title">Parents épuisés – Stop à la surenchère émotionnelle et éducative</h3>
      <p class="ressource-author">Valérie Duband</p>
      <p class="ressource-description">
        Coach spécialisée, l'autrice montre comment la surenchère d'attentes éducatives et émotionnelles finit par écraser les parents. Le livre invite à simplifier, à renoncer à l'image du parent parfait (souvent nourrie par les réseaux sociaux) et à remettre du réalisme et de la douceur dans le quotidien — ce qui peut aider les parents solos à lâcher le réflexe « je scroll pour oublier » et à se donner de vraies pauses hors écran.
      </p>
    </article>

  </section>

  <!-- SECTION PODCASTS -->
  <section class="ressources-section">
    <h2 class="ressources-section-title">Podcasts & Balados</h2>

    <article class="ressource-card">
      <span class="ressource-type">Podcast</span>
      <h3 class="ressource-title">Burn-out parental – La Matrescence</h3>
      <p class="ressource-author">Épisode avec Isabelle Roskam</p>
      <p class="ressource-description">
        Dans cet épisode, la chercheuse explique le burn-out parental comme un stress chronique sans assez de ressources pour compenser. Elle montre comment des parents très bienveillants, très connectés aux besoins de leurs enfants, peuvent finir par s'épuiser au point de devenir plus durs, plus irritables ou absents — un bon support pour déculpabiliser et comprendre pourquoi le téléphone devient parfois une armure.
      </p>
      <a href="https://www.youtube.com/watch?v=X8yrv9rVuSk" target="_blank" class="ressource-link">Écouter l'épisode →</a>
    </article>

    <article class="ressource-card">
      <span class="ressource-type">Sélection</span>
      <h3 class="ressource-title">Burn-out parental : cinq podcasts pour en parler</h3>
      <p class="ressource-author">Slate</p>
      <p class="ressource-description">
        Ce dossier rassemble plusieurs émissions où des parents racontent leur fatigue, la pression sociale et la difficulté de « débrancher » sans culpabiliser. Idéal pour des parents solos qui ont besoin d'entendre d'autres voix dire tout haut ce qu'ils vivent tout bas, et de comprendre qu'ils ne sont pas seuls face à l'épuisement et aux réflexes numériques qui en découlent.
      </p>
      <a href="https://www.slate.fr/story/206843/cinq-podcasts-parents-epuisement-burn-out-parental" target="_blank" class="ressource-link">Lire l'article →</a>
    </article>

    <article class="ressource-card">
      <span class="ressource-type">Balados</span>
      <h3 class="ressource-title">Balados « parents » recommandés par Naître et grandir</h3>
      <p class="ressource-author">dont « Ça va maman ? »</p>
      <p class="ressource-description">
        Naître et grandir propose une liste de 35 balados, dont certains centrés sur la charge mentale, l'anxiété parentale et la pression de bien faire. Les épisodes mettent l'accent sur la normalité de la fatigue, le droit à l'imperfection et les petits gestes pour se ménager des vraies pauses — ce qui peut aider à penser la pause autrement que comme un refuge dans le téléphone.
      </p>
      <a href="https://naitreetgrandir.com/fr/nouvelles/2022/07/08/balados-parents-a-decouvrir/" target="_blank" class="ressource-link">Voir la liste →</a>
    </article>

  </section>

  <!-- SECTION PARENTALITÉ NUMÉRIQUE -->
  <section class="ressources-section">
    <h2 class="ressources-section-title">Parentalité & Numérique</h2>

    

  <article class="ressource-card">
  <span class="ressource-type">Plateforme</span>
  <h3 class="ressource-title">Parentalité numérique : pas besoin d'être expert.e !</h3>
  <p class="ressource-author">Internet Sans Crainte / Tralalere</p>
  <p class="ressource-description">
    Pensée pour des parents qui se sentent dépassés par le numérique, cette plateforme propose des repères simples pour accompagner les usages des enfants et regarder aussi ses propres automatismes. Utile pour ouvrir une réflexion douce sur la manière dont, en tant que parent (et encore plus en solo), on peut apprivoiser son téléphone pour qu'il redevienne un outil, et non un refuge permanent.
  </p>
  <a href="https://www.faminum.com/" target="_blank" class="ressource-link">Découvrir FamiNum →</a>
</article>

  </section>

</main>

<!-- CLOSING -->
<div class="ressources-closing">
  <p>
    Ces ressources ne sont pas des prescriptions. Ce sont des portes à ouvrir si tu en ressens le besoin, 
    quand tu te sens prêt. Chaque parent trouve son chemin à son rythme.
  </p>
</div>

<!-- BOUTON RETOUR BAS -->
<div class="back-bottom">
  <a onclick="history.back()">← Retour</a>
</div>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-content">
    <span class="footer-logo">Soloplugs</span>
    <ul class="footer-center">
      <li><a href="../apropos.php">À propos</a></li>
      <li><a href="../magazine.php">Magazine</a></li>
      <li><a href="../ressources.php">Ressources</a></li>
      <li><a href="../contact.php">Contact</a></li>
    </ul>
    <span class="footer-copy">© 2025 Soloplugs</span>
  </div>
</footer>

</body>
</html>
