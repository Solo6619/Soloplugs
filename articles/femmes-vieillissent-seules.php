<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les femmes vieillissent plus souvent seules – Soloplugs Magazine</title>
  <meta name="description" content="Les femmes vivent plus longtemps, et donc plus longtemps seules. Derrière les statistiques se cache une réalité plus nuancée : entre fragilité réelle et force tranquille.">
  <link rel="stylesheet" href="../css/fonts.css">
<style>
    /* ============================================================
       TEMPLATE ARTICLE — Soloplugs Magazine
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
    .article-content h2 {
      font-family: var(--font-display);
      font-size: 1.8rem;
      font-weight: 400;
      color: var(--color-text-dark);
      margin: 3rem 0 1.5rem;
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
    <img src="../images/Magazine/images/mag_03.png" alt="4 femmes qui sourient en jouant aux cartes">
  </div>
</section>

<!-- HEADER -->
<header class="article-header">
  <span class="article-category">Vieillir Solo</span>
  <h1 class="article-title">Les femmes vieillissent plus souvent seules</h1>
  <p class="article-subtitle">Derrière les statistiques se cache une réalité plus nuancée : entre fragilité réelle et force tranquille.</p>
</header>

<!-- CONTENU -->
<article class="article-content">

  <p>Les femmes vivent plus longtemps que les hommes. C'est un fait connu. Ce qu'on dit moins, c'est ce que ça signifie concrètement : elles vieillissent plus souvent seules. Après un veuvage, une séparation ou simplement le passage du temps, beaucoup de femmes se retrouvent un jour dans un appartement où personne d'autre ne rentre le soir.</p>

  <p>En France, plus de six femmes sur dix de plus de 80 ans vivent seules. Au Québec et au Canada, le portrait est similaire. La vieillesse, dans nos sociétés, est un univers largement féminin — et largement solitaire.</p>

  <p>Mais cette solitude ne raconte pas qu'une seule histoire.</p>

  <div class="separator">· · ·</div>

  <h2>Ce qu'on ne peut pas taire</h2>

  <p>Il y a, bien sûr, les risques. Et il serait malhonnête de les passer sous silence.</p>

  <p>Les femmes âgées qui vivent seules sont plus exposées à la précarité financière. Elles déclarent plus souvent que les hommes un sentiment de solitude profonde. Les études sont claires : l'isolement subi fragilise. Il pèse sur le moral, sur le corps, sur la santé mentale. Quand le réseau de soutien se réduit et qu'aucun conjoint n'est là pour aider au quotidien, la perte d'autonomie peut s'accélérer. Et ce sont elles, deux fois plus que les hommes, qui finissent par entrer en institution.</p>

  <p>Ce n'est pas un détail. C'est une réalité que les politiques publiques peinent encore à regarder en face.</p>

  <div class="separator">· · ·</div>

  <h2>L'autre versant</h2>

  <p>Mais il y a l'autre côté. Celui qu'on entend moins, parce qu'il ne fait pas de bruit.</p>

  <p>Pour beaucoup de femmes, la vie seule au grand âge n'est pas seulement un constat — c'est un choix. Parfois un soulagement. Celles qui ont porté des relations difficiles, des charges familiales lourdes, des rôles de soignantes pendant des décennies, parlent souvent de leur solitude comme d'une respiration. Comme si, pour la première fois de leur vie, elles avaient enfin le droit de disposer d'elles-mêmes.</p>

  <p class="highlight">Ce n'est pas de l'indifférence. Ce n'est pas de la résignation.<br>C'est une forme de reconquête intérieure.</p>

  <p>Quand la solitude s'accompagne d'un minimum d'autonomie et de liens sociaux choisis, elle peut devenir un espace de liberté. Un temps pour se recentrer. Pour renouer avec des envies mises de côté pendant des années. Pour lire, créer, marcher, s'engager — non plus pour les autres, mais pour soi.</p>

  <div class="separator">· · ·</div>

  <h2>Reconstruire autrement</h2>

  <p>Ce qui frappe aussi, c'est la capacité de ces femmes à reconstruire autour d'elles.</p>

  <p>Là où le couple traditionnel n'est plus, d'autres formes de lien apparaissent. Des amitiés anciennes qui deviennent le socle du quotidien. Des voisines avec qui on prend le café chaque matin. Des engagements associatifs, des groupes de marche, des ateliers d'écriture, des cercles de parole.</p>

  <p>On voit émerger aussi des formes nouvelles de cohabitation choisie : des colocations entre retraitées, des habitats participatifs, des projets intergénérationnels. Des femmes qui décident de vivre ensemble non par obligation, mais par envie — de sécurité, de présence, de partage — tout en préservant leur espace intime.</p>

  <p>C'est une solidarité discrète, inventive, profondément féminine. Elle ne fait pas les manchettes, mais elle change des vies.</p>

  <div class="separator">· · ·</div>

  <h2>Ce qui reste à faire</h2>

  <p>Il reste beaucoup à faire. Adapter les logements. Renforcer les services de proximité. Soutenir financièrement les plus vulnérables. Lutter contre cet âgisme ordinaire qui rend les femmes âgées invisibles, alors même qu'elles portent une part essentielle du tissu social — par le bénévolat, la transmission, le soutien familial, l'engagement citoyen.</p>

  <p>Reconnaître leur réalité, ce n'est ni les plaindre ni les idéaliser. C'est simplement regarder ce qui se passe, sans détourner les yeux.</p>

  <p>La solitude féminine au grand âge n'est ni une fatalité ni un idéal. C'est un espace ambivalent — parfois lourd, parfois lumineux — où coexistent des fragilités bien réelles et une remarquable capacité d'adaptation.</p>

  <p class="closing">Entre les risques qu'on ne doit pas taire et la force qu'on ne doit pas ignorer, il y a des femmes. Elles vieillissent. Elles vivent seules.<br><em>Et beaucoup d'entre elles, à leur manière, réinventent ce que ça veut dire.</em></p>

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
