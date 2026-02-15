<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les hikikomori : quand la solitude devient refuge – Soloplugs Magazine</title>
  <meta name="description" content="Ils sont plus d'un million au Japon à vivre reclus, coupés du monde. Qui sont-ils, que fuient-ils, et quel rapport entretiennent-ils avec la solitude ?">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    /* ============================================================
       TEMPLATE ARTICLE — FORMAT IMAGE ENCADRÉE
       Soloplugs Magazine
       ============================================================ */
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
      --font-display: 'Cormorant Garamond', Georgia, serif;
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
       BOUTON RETOUR FIXE (coin haut gauche)
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
       ARTICLE HERO — IMAGE ENCADRÉE
       ============================================================ */
    .article-hero {
      padding-top: 100px;
      background: var(--color-cream);
    }
    .article-hero-image {
      width: 100%;
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 4rem;
    }
    .article-hero-image img {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 20px;
      box-shadow: var(--shadow-soft);
    }

    /* ============================================================
       ARTICLE HEADER
       ============================================================ */
    .article-header {
      max-width: 700px;
      margin: 0 auto;
      padding: 4rem 2rem 3rem;
      text-align: center;
    }
    .article-category {
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
    .article-title {
      font-family: var(--font-display);
      font-size: clamp(2.2rem, 5vw, 3.2rem);
      font-weight: 400;
      line-height: 1.2;
      color: var(--color-text-dark);
      margin-bottom: 1.5rem;
    }
    .article-subtitle {
      font-family: var(--font-display);
      font-size: 1.25rem;
      font-weight: 400;
      font-style: italic;
      color: var(--color-text-dark-muted);
      line-height: 1.6;
    }

    /* ============================================================
       ARTICLE CONTENT
       ============================================================ */
    .article-content {
      max-width: 680px;
      margin: 0 auto;
      padding: 2rem 2rem 5rem;
    }
    .article-content p {
      font-size: 1.125rem;
      font-weight: 300;
      color: var(--color-text-dark-soft);
      line-height: 1.95;
      margin-bottom: 1.75rem;
    }
    .article-content p:first-of-type {
      font-size: 1.2rem;
      color: var(--color-text-dark);
    }
    .article-content p:first-of-type::first-letter {
      font-family: var(--font-display);
      font-size: 3.75rem;
      font-weight: 400;
      float: left;
      line-height: 1;
      margin-right: 0.75rem;
      margin-top: 0.1rem;
      color: var(--color-gold);
    }
    .article-content strong {
      font-weight: 500;
      color: var(--color-text-dark);
    }
    .article-content em {
      font-style: italic;
      color: var(--color-gold);
    }

    /* Citation mise en valeur */
    .highlight {
      font-family: var(--font-display);
      font-size: 1.4rem;
      font-weight: 400;
      font-style: italic;
      color: var(--color-text-dark);
      text-align: center;
      padding: 2.5rem 1rem;
      margin: 2.5rem 0;
      border-top: 1px solid var(--color-gold-light);
      border-bottom: 1px solid var(--color-gold-light);
    }

    /* Séparateur */
    .separator {
      text-align: center;
      margin: 2.5rem 0;
      color: var(--color-gold-light);
      font-size: 1.25rem;
      letter-spacing: 0.75rem;
    }

    /* Closing */
    .closing {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-style: italic;
      color: var(--color-text-dark);
      text-align: center;
      margin-top: 3rem;
      padding-top: 2rem;
      border-top: 1px solid var(--color-gold-light);
      line-height: 1.7;
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
      .article-hero { padding-top: 80px; }
      .article-hero-image { padding: 0 1.5rem; }
      .article-hero-image img { 
        height: 280px; 
        border-radius: 12px; 
      }
      .article-header { padding: 3rem 1.5rem 2rem; }
      .article-content { padding: 1rem 1.5rem 4rem; }
      .article-content p { font-size: 1.05rem; }
      .article-content p:first-of-type::first-letter { font-size: 3rem; }
      .highlight { font-size: 1.2rem; padding: 2rem 0.5rem; }
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

<!-- HERO IMAGE -->
<section class="article-hero">
  <div class="article-hero-image">
    <img src="../images/Magazine/articles/hikikomori.png" alt="Jeune homme recroquevillé dans une chambre encombrée, rideaux tirés">
  </div>
</section>

<!-- HEADER -->
<header class="article-header">
  <span class="article-category">Article de fond</span>
  <h1 class="article-title">Les hikikomori : quand la solitude devient refuge</h1>
  <p class="article-subtitle">Ils sont plus d'un million au Japon à vivre reclus, coupés du monde. Qui sont-ils, que fuient-ils, et quel rapport entretiennent-ils avec la solitude ?</p>
</header>

<!-- CONTENU -->
<article class="article-content">

  <p>Le mot vient du japonais <em>hikikomoru</em> : se retrancher, se cloîtrer. Un hikikomori est une personne qui vit repliée sur elle-même, enfermée dans sa chambre pendant des mois, parfois des années, coupée du monde extérieur. Elle ne travaille pas, n'étudie pas, ne sort que pour le strict minimum. Le reste du temps, elle reste là, dans un espace réduit, à l'abri des regards et des attentes.</p>

  <p>Le phénomène a été identifié au Japon dans les années 1990, mais il n'a cessé de croître depuis. En 2024, le gouvernement japonais recense 1,4 million de hikikomori — certains psychiatres estiment le chiffre réel autour de deux millions. Environ 70 % sont des hommes. Et contrairement au cliché de l'adolescent reclus devant ses jeux vidéo, plus de la moitié ont entre 40 et 64 ans. Beaucoup le sont depuis plus de cinq ans. Certains depuis plus de vingt ans. La durée moyenne de réclusion atteint dix ans.</p>

  <p class="highlight">Ce ne sont pas des ermites par vocation. Ce sont des personnes qui, à un moment donné, n'ont plus trouvé leur place dans le monde tel qu'il leur était proposé.</p>

  <p>Le phénomène n'est plus uniquement japonais. On estime à 300 000 le nombre de hikikomori en Corée du Sud. Des cas sont recensés en Espagne, en Italie, aux États-Unis, en France. Ici, plusieurs dizaines de milliers de jeunes seraient concernés — invisibles dans les statistiques parce qu'ils ne cherchent ni emploi, ni formation, ni aide.</p>

  <div class="separator">· · ·</div>

  <p>Qu'est-ce qu'un hikikomori fuit exactement ? Les causes varient, mais certains motifs reviennent. Au Japon, près de 36 % des hikikomori plus âgés citent le passage à la retraite comme déclencheur — une rupture brutale dans une société où le travail structure toute l'existence. Pour d'autres, c'est un échec scolaire ou professionnel vécu comme insurmontable, un harcèlement, une pression familiale trop lourde, un deuil, parfois un traumatisme plus ancien.</p>

  <p>La crise économique de la fin des années 1990 a joué un rôle majeur. Durant cette période, les entreprises japonaises ont cessé de recruter. Or au Japon, on embauche principalement les jeunes diplômés de l'année. Ceux qui ont raté ce moment n'ont souvent jamais retrouvé leur place. Devant cet échec, certains se sont retirés — et ne sont jamais revenus.</p>

  <p class="highlight">Le hikikomori ne choisit pas la solitude comme un luxe. Il s'y réfugie parce que le monde extérieur est devenu trop douloureux, trop exigeant, trop incompréhensible.</p>

  <div class="separator">· · ·</div>

  <p>Et c'est là que la question de la solitude devient complexe. Car le hikikomori vit seul — mais il ne vit pas la solitude de la même manière que quelqu'un qui l'aurait choisie. Sa réclusion est une protection, pas un épanouissement. Il ne cherche pas le silence pour mieux s'entendre penser. Il cherche à disparaître.</p>

  <p>Pourtant, dans cet isolement, certains développent une vie intérieure intense. Ils lisent, suivent l'actualité, réfléchissent. Internet devient souvent leur seul lien avec l'extérieur — un lien à distance, anonyme, contrôlable. Contrairement à l'image répandue, les études montrent que les hikikomori passent moins de temps sur les jeux vidéo et Internet que la population générale. Beaucoup restent simplement là, dans une forme de suspension.</p>

  <p>Le problème, c'est que cette solitude-là n'est pas réparatrice. Elle fige. Elle enferme dans une boucle où la honte empêche de demander de l'aide — et où l'absence d'aide prolonge l'enfermement. En moyenne, il faut plus de quatre ans à un hikikomori pour accéder au soutien dont il aurait besoin.</p>

  <div class="separator">· · ·</div>

  <p>Au Japon, la famille reste souvent seule face au problème. Avoir un enfant hikikomori est encore perçu comme une honte. On attend, on espère que ça passe. Parfois pendant des années. Et quand les parents vieillissent, la question devient critique : que deviendra cet enfant de cinquante ans quand ils ne seront plus là ?</p>

  <p>Ce que les hikikomori nous rappellent, c'est que la solitude n'est pas toujours un choix. Et que derrière certains silences, il y a des souffrances qu'on ne voit pas — parce qu'elles ont appris à se rendre invisibles.</p>

  <p class="closing">Soloplugs parle de la solitude choisie, de celle qui répare et qui libère. Mais il nous semblait important de parler aussi de celle qui enferme — non pour juger, mais pour comprendre. Parce que la frontière entre refuge et prison est parfois plus mince qu'on ne le croit.</p>

</article>

<!-- BOUTON RETOUR BAS -->
<div class="back-bottom">
  <a onclick="history.back()">← Retour au Magazine</a>
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
