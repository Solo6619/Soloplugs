<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[TITRE] – Soloplugs Magazine</title>
  <meta name="description" content="[DESCRIPTION]">
  <link rel="stylesheet" href="../css/fonts.css">
<style>
    /* ============================================================
       TEMPLATE ARTICLE — FORMAT PLEINE LARGEUR
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
      background: rgba(255,255,255,0.95);
      border: 1px solid var(--color-gold-light);
      border-radius: 50%;
      color: var(--color-gold);
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
      background: transparent;
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }
    .nav.scrolled {
      background: rgba(255,255,255,0.98);
      box-shadow: 0 2px 15px rgba(0,0,0,0.06);
      border-bottom: 1px solid rgba(212, 165, 116, 0.25);
    }
    .nav-logo {
      font-family: var(--font-display);
      font-size: 1.6rem;
      font-weight: 500;
      letter-spacing: 0.05em;
      color: var(--color-text-dark);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .nav.scrolled .nav-logo {
      opacity: 1;
    }
    .nav-links {
      display: flex;
      gap: 3rem;
      list-style: none;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .nav.scrolled .nav-links {
      opacity: 1;
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
       ARTICLE HERO — PLEINE LARGEUR
       ============================================================ */
    .article-hero {
      position: relative;
      height: 75vh;
      min-height: 550px;
      display: flex;
      align-items: flex-end;
      overflow: hidden;
    }
    .article-hero-image {
      position: absolute;
      inset: 0;
      z-index: 1;
    }
    .article-hero-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 60%;
    }
    .article-hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        180deg,
        rgba(251, 249, 246, 0) 0%,
        rgba(251, 249, 246, 0.2) 40%,
        rgba(251, 249, 246, 0.85) 75%,
        rgba(251, 249, 246, 1) 100%
      );
      z-index: 2;
    }
    .article-hero-content {
      position: relative;
      z-index: 3;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      padding: 0 2rem 4rem;
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
      background: rgba(212, 165, 116, 0.12);
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
      font-size: 1.2rem;
      font-weight: 400;
      font-style: italic;
      color: var(--color-text-dark-soft);
      line-height: 1.6;
    }

    /* ============================================================
       ARTICLE CONTENT
       ============================================================ */
    .article-content {
      max-width: 680px;
      margin: 0 auto;
      padding: 3rem 2rem 5rem;
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
      .article-hero {
        height: 60vh;
        min-height: 400px;
      }
      .article-hero-content { padding: 0 1.5rem 3rem; }
      .article-content { padding: 2rem 1.5rem 4rem; }
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

<!-- HERO PLEINE LARGEUR -->
<header class="article-hero">
  <div class="article-hero-image">
    <img src="../images/Magazine/images/[IMAGE].jpg" alt="[ALT]">
  </div>
  <div class="article-hero-overlay"></div>
  
  <div class="article-hero-content">
    <span class="article-category">[CATÉGORIE]</span>
    <h1 class="article-title">[TITRE]</h1>
    <p class="article-subtitle">[SOUS-TITRE]</p>
  </div>
</header>

<!-- CONTENU -->
<article class="article-content">

  <p>[Premier paragraphe avec lettrine automatique]</p>

  <p>[Paragraphe normal]</p>

  <p class="highlight">[Citation mise en valeur]</p>

  <p>[Suite du texte]</p>

  <div class="separator">· · ·</div>

  <p>[Autre section]</p>

  <p class="closing">[Phrase de clôture en italique]</p>

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

<!-- SCRIPT NAV SCROLL -->
<script>
  window.addEventListener('scroll', () => {
    const nav = document.querySelector('.nav');
    if (window.scrollY > 100) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });
</script>

</body>
</html>
