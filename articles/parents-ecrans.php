<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Et si le vrai problème d'écran, c'était le nôtre? – Soloplugs Magazine</title>
  <meta name="description" content="On s'inquiète du temps d'écran des enfants. Mais le vrai coupable scroll peut-être dans notre main.">
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
       BULLE "SAVAIS-TU QUE..."
       ============================================================ */
    .savais-tu {
      max-width: 680px;
      margin: 0 auto 3rem;
      padding: 2rem 2.5rem;
      background: var(--color-cream-deep);
      border-left: 3px solid var(--color-gold);
    }
    .savais-tu-titre {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 500;
      color: var(--color-gold);
      margin-bottom: 1rem;
    }
    .savais-tu p {
      font-size: 1rem;
      font-weight: 300;
      color: var(--color-text-dark-soft);
      line-height: 1.8;
      margin-bottom: 1rem;
    }
    .savais-tu p:last-of-type {
      margin-bottom: 0;
    }
    .savais-tu strong {
      font-weight: 500;
      color: var(--color-text-dark);
    }
    .savais-tu-lien {
      display: inline-block;
      margin-top: 1.25rem;
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--color-gold);
      transition: color 0.3s ease;
    }
    .savais-tu-lien:hover {
      color: var(--color-text-dark);
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
      .savais-tu { 
        margin: 0 1.5rem 3rem;
        padding: 1.5rem;
      }
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
    <img src="../images/parent-solo/parent-ecrans.jpg" alt="Parent regardant son téléphone">
  </div>
</section>

<!-- HEADER -->
<header class="article-header">
  <span class="article-category">Parent Solo</span>
  <h1 class="article-title">Et si le vrai problème d'écran, c'était le nôtre?</h1>
  <p class="article-subtitle">On s'inquiète du temps d'écran des enfants. Mais le vrai coupable scroll peut-être dans notre main.</p>
</header>

<!-- CONTENU -->
<article class="article-content">

  <p>C'est un réflexe de parent. On surveille Cocomelon, on limite la tablette, on négocie les minutes de jeu vidéo. On lit des articles alarmistes sur le cerveau des enfants et on culpabilise quand on cède. Mais selon le psychologue Clay Drinko, cette inquiétude serait un écran de fumée — pour éviter de regarder notre propre dépendance au téléphone.</p>

  <p>Environ la moitié des adultes se disent dépendants de leur appareil. Si quelqu'un que tu aimes s'est déjà plaint de ton utilisation, si tu ressens de l'agitation quand ton téléphone n'est pas à portée de main, si ton temps de défilement ne cesse d'augmenter... il y a peut-être matière à réflexion.</p>

  <p>Ce n'est pas une accusation. C'est un constat que beaucoup partagent, surtout ceux qui vivent seuls avec des enfants. Le téléphone devient alors compagnon dans les moments de fatigue, fenêtre sur le monde adulte quand la journée a été longue, répit silencieux entre deux demandes.</p>

  <div class="separator">· · ·</div>

  <p>Le psychologue John Gottman a passé des décennies à étudier ce qui fait tenir les relations. Il parle des <em>appels à la connexion</em> — ces petits moments où quelqu'un cherche notre attention. Un enfant qui dit « Regarde mes cheveux de sirène, papa! » lance un appel. Un adolescent qui marmonne une anecdote sur sa journée en lance un autre.</p>

  <p class="highlight">Ce qui prédit la santé d'une relation, ce n'est pas le nombre d'appels lancés. C'est la façon dont ils sont reçus.</p>

  <p>Si on lève les yeux, si on entre dans le jeu, si on répond avec présence — même brièvement — on nourrit la relation. Si nos yeux restent rivés sur l'écran, si on marmonne un « hmm » distrait, on envoie un autre message : ce qui est sur cet écran compte plus que toi en ce moment.</p>

  <p>Les enfants ne font pas la différence entre notre besoin de pause et notre absence émotionnelle. Ils voient simplement un parent qui n'est pas là, même s'il est physiquement présent.</p>

  <div class="separator">· · ·</div>

  <p>Être physiquement présent tout en scrollant sans fin, c'est offrir du temps de piètre qualité. Des heures passées ensemble qui n'en sont pas vraiment. Les enfants ont besoin de ces échanges véritables — ces allers-retours où l'on parle, où l'on écoute, où l'on réagit. Ces moments développent leur langage et leur intelligence émotionnelle bien plus que notre simple présence dans la pièce.</p>

  <p>La bonne nouvelle, c'est que la qualité ne demande pas des heures. Quinze minutes de présence totale, téléphone rangé dans une autre pièce, valent plus que deux heures d'attention divisée. Commencer petit. Voir comment ça va. Augmenter si on peut.</p>

  <p>Une astuce qui aide : le dire à voix haute. « Je range mon téléphone parce qu'il me distrait. Je veux te donner toute mon attention pendant trente minutes, et après je ferai la vaisselle. » Ça modélise quelque chose d'important pour l'enfant : même les adultes doivent faire des efforts pour être présents.</p>

  <p>L'autre effet sournois du téléphone, c'est ce qu'il fait à notre humeur. L'attention fragmentée — ce va-et-vient constant entre l'écran et le monde réel — épuise le cerveau. On devient plus impatient, plus cassant, plus prompt à s'énerver pour des broutilles. On pense prendre une pause en regardant notre téléphone. En réalité, on s'épuise davantage.</p>

  <p class="closing">La parentalité solo amplifie parfois ce réflexe. Le téléphone devient compagnon dans les moments de fatigue, seul lien avec le monde adulte. Mais nos enfants ne voient pas notre besoin de souffler. Ils voient un parent qui regarde ailleurs. Peut-être que la vraie pause, c'est justement de poser l'appareil — et d'être là, vraiment là, pour quelques minutes. Le reste peut attendre.</p>

</article>

<!-- BULLE SAVAIS-TU QUE -->
<aside class="savais-tu">
  <p class="savais-tu-titre">Savais-tu que...</p>
  <p>Des ressources existent pour mettre des mots sur l'épuisement et reprendre ton souffle. Le livre <strong>Burn out parental – Comment sortir de l'épuisement?</strong> d'Aline Nativel Id Hammou propose des pistes concrètes pour alléger la charge mentale. Pour réfléchir à notre rapport aux écrans en famille, la webconférence <strong>Parentalité numérique : pas besoin d'être expert.e!</strong> offre des repères simples pour poser l'appareil... et se rendre vraiment disponible.</p>
  <a href="../ressources/parent-solo-ressources.php" class="savais-tu-lien">Pour aller plus loin →</a>
</aside>

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
