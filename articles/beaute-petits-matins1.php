<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La beauté des petits matins – Soloplugs Magazine</title>
  <meta name="description" content="Ces heures calmes où le monde semble attendre. Un temps pour soi, avant le bruit du jour.">
  <link rel="stylesheet" href="../css/fonts.css">
<style>
    /* ============================================================
       CSS VARIABLES
       ============================================================ */
    :root {
      --color-cream-deep: #F5EDE4;
      --color-cream: #FBF9F6;
      --color-cream-pure: #FFFDF9;
      --color-white: #FFFFFF;
      --color-gold: #D4A574;
      --color-gold-light: #E8C9A8;
      --color-gold-pale: #F0DCC8;
      --color-text-dark: #2C3338;
      --color-text-dark-soft: #5C554E;
      --color-text-dark-muted: #7A726A;
      --color-transition: #3D352D;
      --shadow-soft: 0 4px 20px rgba(44, 51, 56, 0.08);
      --font-display: 'Cormorant Garamond', Georgia, serif;
      --font-body: 'Outfit', system-ui, sans-serif;
      --transition-smooth: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: var(--font-body);
      background: var(--color-cream);
      color: var(--color-text-dark);
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* ============================================================
       NAVIGATION
       ============================================================ */
    .nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      padding: 1.5rem 4rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #FFFFFF;
      backdrop-filter: blur(10px);
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
      font-family: var(--font-body);
      font-size: 0.85rem;
      font-weight: 400;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--color-text-dark-soft);
      position: relative;
      padding: 0.5rem 0;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--color-gold);
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 1px;
      background: var(--color-gold);
      transition: width 0.4s var(--transition-smooth);
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    /* ============================================================
       ARTICLE HERO
       ============================================================ */
    .article-hero {
      padding-top: 120px;
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
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      font-weight: 400;
      line-height: 1.2;
      color: var(--color-text-dark);
      margin-bottom: 1.5rem;
    }

    .article-subtitle {
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-weight: 400;
      font-style: italic;
      color: var(--color-text-dark-muted);
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    .article-meta {
      display: flex;
      justify-content: center;
      gap: 2rem;
      font-size: 0.85rem;
      color: var(--color-text-dark-muted);
    }

    .article-meta span {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    /* ============================================================
       ARTICLE CONTENT
       ============================================================ */
    .article-content {
      max-width: 680px;
      margin: 0 auto;
      padding: 0 2rem 6rem;
    }

    .article-content p {
      font-size: 1.15rem;
      font-weight: 300;
      color: var(--color-text-dark-soft);
      line-height: 2;
      margin-bottom: 2rem;
    }

    .article-content p:first-of-type {
      font-size: 1.25rem;
      color: var(--color-text-dark);
    }

    .article-content p:first-of-type::first-letter {
      font-family: var(--font-display);
      font-size: 4rem;
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
    .article-content .highlight {
      font-family: var(--font-display);
      font-size: 1.5rem;
      font-weight: 400;
      font-style: italic;
      color: var(--color-text-dark);
      text-align: center;
      padding: 2.5rem 0;
      margin: 2.5rem 0;
      border-top: 1px solid var(--color-gold-light);
      border-bottom: 1px solid var(--color-gold-light);
      position: relative;
    }

    .article-content .highlight::before {
      content: '"';
      font-family: var(--font-display);
      font-size: 4rem;
      color: var(--color-gold-light);
      position: absolute;
      top: 1rem;
      left: 50%;
      transform: translateX(-50%);
      line-height: 1;
      opacity: 0.5;
    }

    /* Séparateur subtil */
    .article-content .separator {
      text-align: center;
      margin: 3rem 0;
      color: var(--color-gold);
      font-size: 1.5rem;
      letter-spacing: 1rem;
    }

    /* Dernier paragraphe en évidence */
    .article-content .closing {
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-style: italic;
      color: var(--color-text-dark);
      text-align: center;
      margin-top: 3rem;
      padding-top: 2rem;
      border-top: 1px solid var(--color-gold-light);
    }

    /* ============================================================
       ARTICLE FOOTER
       ============================================================ */
    .article-footer {
      max-width: 680px;
      margin: 0 auto;
      padding: 3rem 2rem;
      border-top: 1px solid rgba(212, 165, 116, 0.2);
    }

    .article-tags {
      display: flex;
      gap: 0.75rem;
      flex-wrap: wrap;
      margin-bottom: 2rem;
    }

    .article-tag {
      font-size: 0.8rem;
      color: var(--color-text-dark-muted);
      padding: 0.4rem 1rem;
      background: var(--color-white);
      border: 1px solid var(--color-gold-light);
      border-radius: 20px;
      transition: all 0.3s;
    }

    .article-tag:hover {
      border-color: var(--color-gold);
      color: var(--color-gold);
    }

    .article-share {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .article-share span {
      font-size: 0.85rem;
      color: var(--color-text-dark-muted);
    }

    /* ============================================================
       BACK TO MAGAZINE
       ============================================================ */
    .back-link {
      display: flex;
      justify-content: center;
      padding: 3rem 2rem 5rem;
      background: var(--color-cream-deep);
    }

    .back-link a {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--color-gold);
      padding: 1rem 2rem;
      border: 1px solid var(--color-gold);
      border-radius: 4px;
      transition: all 0.3s;
    }

    .back-link a:hover {
      background: var(--color-gold);
      color: var(--color-white);
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .footer {
      padding: 4rem;
      background: var(--color-transition);
      border-top: 1px solid rgba(212, 165, 116, 0.2);
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
      font-size: 1.5rem;
      font-weight: 400;
      letter-spacing: 0.05em;
      color: var(--color-cream);
    }

    .footer-links {
      display: flex;
      gap: 3rem;
      list-style: none;
    }

    .footer-links a {
      font-size: 0.85rem;
      color: rgba(245, 237, 228, 0.7);
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: var(--color-gold);
    }

    .footer-bottom {
      max-width: 1200px;
      margin: 3rem auto 0;
      padding-top: 2rem;
      border-top: 1px solid rgba(212, 165, 116, 0.15);
      text-align: center;
      font-size: 0.8rem;
      color: rgba(245, 237, 228, 0.5);
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
      .nav {
        padding: 1rem 1.5rem;
      }

      .nav-links {
        display: none;
      }

      .article-hero-image {
        padding: 0 1.5rem;
      }

      .article-hero-image img {
        height: 300px;
        border-radius: 12px;
      }

      .article-header {
        padding: 3rem 1.5rem 2rem;
      }

      .article-content {
        padding: 0 1.5rem 4rem;
      }

      .article-content p {
        font-size: 1.05rem;
      }

      .article-content p:first-of-type::first-letter {
        font-size: 3rem;
      }

      .article-content .highlight {
        font-size: 1.25rem;
        padding: 2rem 0;
      }

      .footer-content {
        flex-direction: column;
        gap: 2rem;
        text-align: center;
      }
    }
  </style>
</head>
<body>

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<nav class="nav">
  <a href="../index.php" class="nav-logo">Soloplugs</a>
  <ul class="nav-links">
    <li><a href="../magazine.php">Magazine</a></li>
    <li><a href="../bibliotheque.php">Bibliothèque</a></li>
    <li><a href="../ressources.php">Ressources</a></li>
    <li><a href="../apropos.php">À propos</a></li>
  </ul>
</nav>

<!-- ============================================================
     ARTICLE HERO IMAGE
     ============================================================ -->
<section class="article-hero">
  <div class="article-hero-image">
    <img src="../images/Magazine/images/Solitude_silencieuse_02.jpg" alt="La beauté des petits matins - Une femme contemple la lumière du matin">
  </div>
</section>

<!-- ============================================================
     ARTICLE HEADER
     ============================================================ -->
<header class="article-header">
  <span class="article-category">La Voix</span>
  <h1 class="article-title">La beauté des petits matins</h1>
  <p class="article-subtitle">Ces heures calmes où le monde semble attendre. Un temps pour soi, avant le bruit du jour.</p>
</header>

<!-- ============================================================
     ARTICLE CONTENT
     ============================================================ -->
<article class="article-content">

  <p>Il existe un moment discret, presque fragile, que l'on traverse souvent sans y prêter attention. Celui qui précède le début réel de la journée. Le réveil est passé, mais le monde ne s'est pas encore imposé. Les petits matins.</p>

  <p>À cette heure-là, tout semble plus lent. Les rues sont calmes. Les écrans encore silencieux. Le corps n'est pas tout à fait réveillé, l'esprit non plus. C'est un entre-deux. Un espace où rien n'est encore demandé.</p>

  <p>Pour celles et ceux qui vivent seuls, ces moments ont une saveur particulière. Ils ne sont ni à partager, ni à expliquer. Ils n'appartiennent qu'à soi. Et c'est précisément ce qui les rend précieux.</p>

  <p class="highlight">Le matin, avant que la journée commence vraiment, il n'y a pas encore d'obligations. Pas de rôles à tenir. Pas d'images à renvoyer.</p>

  <p>On peut rester assis quelques minutes de plus. Regarder la lumière changer. Tenir une tasse chaude. Écouter un silence qui n'attend rien.</p>

  <p>Ce n'est pas un instant spectaculaire. Il ne se raconte pas facilement. Mais il dit beaucoup sur notre relation à nous-mêmes.</p>

  <p>Les petits matins sont souvent les seuls moments où l'on n'est pas encore en réaction. Pas encore dans la comparaison. Pas encore pris dans le rythme des autres. On ne se demande pas ce que l'on devrait faire. On est simplement là.</p>

  <p>Et c'est peut-être pour cela que ces instants peuvent être à la fois apaisants et dérangeants.</p>

  <div class="separator">· · ·</div>

  <p>Quand tout est calme, il n'y a plus de distraction. Les pensées ont plus de place. Les sensations aussi. Une fatigue qu'on n'avait pas remarquée. Un besoin de lenteur. Une envie de changement. Ou simplement le besoin de rester encore un peu dans ce silence.</p>

  <p>Les petits matins n'apportent pas de réponses. Ils offrent autre chose : <strong>de l'espace</strong>.</p>

  <p>Un espace pour sentir comment on va vraiment, avant d'entrer dans le bruit du jour. Un espace pour se demander, sans pression, ce qui compte encore. Ce que l'on garde. Ce que l'on laisse.</p>

  <p>Pour certains, ces moments deviennent des rituels discrets. Quelques pages lues. Quelques lignes écrites. Une musique douce. Ou simplement le droit de ne rien faire, quelques minutes de plus.</p>

  <p>Ce temps pour soi n'est ni un luxe ni une fuite. C'est une manière de se recentrer, avant de se disperser à nouveau.</p>

  <p class="highlight">Dans une société qui valorise la vitesse, l'occupation constante et la disponibilité permanente, les petits matins rappellent quelque chose d'essentiel : tout n'a pas besoin d'être productif.</p>

  <p>Tout n'a pas besoin d'être partagé.</p>

  <p>Vivre seul permet parfois de mieux préserver ces instants. Le rythme est plus souple. Le matin peut rester ouvert, flou, respirable.</p>

  <p>Tous les matins ne sont pas doux. Certains sont lourds. D'autres pressés. La solitude ne rend pas chaque réveil facile. Mais quand le calme est là, quand il se présente, il mérite d'être reconnu.</p>

  <p class="closing">Parce qu'avant d'être attendu ailleurs, avant d'être sollicité, on est simplement là.<br><em>Et parfois, cela suffit.</em></p>

</article>

<!-- ============================================================
     ARTICLE FOOTER
     ============================================================ -->
<footer class="article-footer">
  <div class="article-tags">
    <span class="article-tag">Solitude choisie</span>
    <span class="article-tag">Rituels</span>
    <span class="article-tag">Bien-être</span>
    <span class="article-tag">Vivre seul</span>
  </div>
</footer>

<!-- ============================================================
     BACK TO MAGAZINE
     ============================================================ -->
<div class="back-link">
  <a href="../magazine.php">← Retour au Magazine</a>
</div>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
  <div class="footer-content">
    <span class="footer-logo">Soloplugs</span>
    <ul class="footer-links">
      <li><a href="../apropos.php">À propos</a></li>
      <li><a href="../magazine.php">Magazine</a></li>
      <li><a href="../ressources.php">Ressources</a></li>
      <li><a href="../contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>© 2025 Soloplugs — La voix de la solitude</p>
  </div>
</footer>

</body>
</html>
