<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources Québec — Soloplugs</title>
  <meta name="description" content="Choisis ta région pour accéder aux ressources adaptées à ta situation.">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="../css/fonts.css">
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    
    body {
      background: linear-gradient(180deg, #1a1815 0%, #2d2a26 50%, #1a1815 100%);
      min-height: 100vh;
      color: #E8E4DF;
      font-family: 'Lora', Georgia, serif;
      line-height: 1.8;
      display: flex;
      flex-direction: column;
    }

    main { flex: 1; }

    /* ═══════ HERO ═══════ */
    .hero {
      width: 100%;
      height: 45vh;
      min-height: 360px;
      background: linear-gradient(180deg, rgba(26,24,21,0.05) 0%, rgba(26,24,21,0.35) 60%, rgba(26,24,21,1) 100%),
                  url('https://images.unsplash.com/photo-1519178614-68673b201f36?w=1600&q=80') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .hero-content {
      position: relative; z-index: 2;
      max-width: 700px; padding: 2rem;
      text-align: center;
      animation: fadeInUp 1.2s ease-out;
    }

    .hero-salutation {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2.2rem, 5vw, 3.2rem);
      font-weight: 400; color: #FFFFFF;
      text-shadow: 0 2px 40px rgba(0,0,0,0.5);
      margin-bottom: 1.5rem;
    }
    .hero-salutation .accent { color: #F5D6A8; }

    .hero-message {
      font-family: 'Lora', Georgia, serif;
      font-size: clamp(1.05rem, 2.5vw, 1.25rem);
      color: rgba(255,255,255,0.95);
      text-shadow: 0 2px 20px rgba(0,0,0,0.4);
      line-height: 1.8;
      max-width: 500px; margin: 0 auto;
    }

    /* ═══════ SECTION CHOIX RÉGION ═══════ */
    .section-region {
      max-width: 800px;
      margin: 0 auto;
      padding: 4rem 2rem 3rem;
      animation: fadeIn 1s ease-out 0.5s both;
    }

    .section-titre {
      text-align: center;
      margin-bottom: 2.5rem;
    }
    .section-titre h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.8rem; font-weight: 400; color: #FFFFFF;
      margin-bottom: 0.5rem;
    }
    .section-titre p {
      font-family: 'Inter', sans-serif;
      font-size: 1rem; color: #A9A29B;
    }

    .ligne-decorative {
      width: 50px; height: 3px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
      margin: 1.5rem auto 2.5rem;
      border-radius: 2px;
    }

    /* ═══════ GRILLE RÉGIONS ═══════ */
    .region-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.25rem;
      max-width: 700px;
      margin: 0 auto;
    }

    .region-card {
      background: rgba(45, 42, 38, 0.6);
      border: 2px solid rgba(212, 165, 116, 0.2);
      border-radius: 20px;
      padding: 2rem 1.25rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.4s ease;
      text-decoration: none;
      position: relative;
    }
    .region-card:hover {
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.15);
      transform: translateY(-6px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    }
    .region-card:hover .region-nom { color: #E8C9A8; }

    .region-indicateur {
      width: 10px; height: 10px;
      border-radius: 50%;
      background: #D4A574;
      margin: 0 auto 1rem;
    }

    .region-nom {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem; font-weight: 500;
      color: #E8E4DF;
      transition: color 0.3s ease;
      display: block; margin-bottom: 0.25rem;
    }

    .region-detail {
      font-family: 'Inter', sans-serif;
      font-size: 0.8rem; color: #7A726A;
      display: block;
    }

    .region-card.bientot {
      opacity: 0.45;
      cursor: default;
      pointer-events: none;
    }
    .region-card.bientot .region-indicateur {
      background: #5C554E;
    }

    .bientot-label {
      font-family: 'Inter', sans-serif;
      font-size: 0.7rem;
      color: #7A726A;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-top: 0.5rem;
      display: block;
    }

    /* ═══════ NOTE ═══════ */
    .note-region {
      max-width: 550px;
      margin: 2.5rem auto 0;
      text-align: center;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: #7A726A;
      line-height: 1.7;
    }

    /* ═══════ BOUTON RETOUR ═══════ */
    .btn-retour {
      position: fixed;
      top: 1.5rem; left: 1.5rem;
      display: flex; align-items: center; gap: 0.5rem;
      padding: 0.7rem 1.2rem;
      background: rgba(26, 24, 21, 0.9);
      border: 1px solid rgba(212, 165, 116, 0.3);
      border-radius: 30px;
      color: #E8E4DF;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
      z-index: 100;
      backdrop-filter: blur(10px);
    }
    .btn-retour:hover {
      background: rgba(212, 165, 116, 0.2);
      border-color: #D4A574; color: #D4A574;
      transform: translateX(-3px);
    }
    .btn-retour svg { width: 18px; height: 18px; stroke: currentColor; stroke-width: 2; fill: none; }

    /* ═══════ FOOTER ═══════ */
    .footer-minimal {
      padding: 2.5rem 2rem;
      text-align: center;
      border-top: 1px solid rgba(212, 165, 116, 0.15);
      margin-top: 2rem;
    }
    .footer-logo {
      display: inline-flex; align-items: baseline; gap: 0.15rem;
      margin-bottom: 0.75rem; text-decoration: none;
    }
    .footer-logo .solo {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.3rem; font-weight: 600; color: #D4A574;
    }
    .footer-logo .plugs {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem; font-weight: 400; color: #A9A29B;
    }
    .footer-tagline {
      font-family: 'Lora', Georgia, serif;
      font-size: 0.9rem; font-style: italic; color: #7A726A;
      margin-bottom: 1rem;
    }
    .footer-copy {
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem; color: #5C554E; letter-spacing: 0.5px;
    }

    /* ═══════ ANIMATIONS ═══════ */
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

    /* ═══════ RESPONSIVE ═══════ */
    @media (max-width: 768px) {
      .hero { height: 40vh; min-height: 300px; }
      .region-grid { grid-template-columns: repeat(2, 1fr); gap: 1rem; }
      .section-region { padding: 3rem 1.5rem 2rem; }
      .btn-retour { top: 1rem; left: 1rem; padding: 0.6rem 1rem; font-size: 0.85rem; }
    }
    @media (max-width: 480px) {
      .region-card { padding: 1.5rem 1rem; }
      .region-nom { font-size: 1rem; }
    }
  </style>
</head>
<body>

<?php
  $theme = isset($_GET['theme']) ? htmlspecialchars($_GET['theme']) : '';
  
  $themesMap = [
    'vivre-solo' => ['nom' => 'Vivre Solo', 'retour' => '../7_themes/vivre-solo.php'],
    'ado-solo' => ['nom' => 'Ado Solo', 'retour' => '../7_themes/ado-solo.php'],
    'parent-solo' => ['nom' => 'Parent Solo', 'retour' => '../7_themes/parent-solo.php'],
    'vieillir-solo' => ['nom' => 'Vieillir Solo', 'retour' => '../7_themes/vieillir-solo.php'],
    'voyages-solo' => ['nom' => 'Voyages Solo', 'retour' => '../7_themes/voyages-solo.php'],
    'sorties-loisirs' => ['nom' => 'Sorties & Loisirs', 'retour' => '../7_themes/sorties-loisirs-rencontres.php'],
    'separation-deuil' => ['nom' => 'Séparation & Deuil', 'retour' => '../7_themes/divorces-separations-deces.php'],
  ];
  
  $themeInfo = isset($themesMap[$theme]) ? $themesMap[$theme] : null;
  $themeParam = $theme ? '?theme=' . $theme : '';
?>

<!-- Bouton retour vers choix du pays -->
<a href="ressources.php<?php echo $themeParam; ?>" class="btn-retour">
  <svg viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  Choix du pays
</a>

<main>
  <header class="hero">
    <div class="hero-content">
      <h1 class="hero-salutation">
        Ressources <span class="accent">Québec</span><?php echo $themeInfo ? ' — ' . $themeInfo['nom'] : ''; ?>
      </h1>
      <p class="hero-message">
        Des outils, de l'écoute, de l'inspiration — selon ce dont tu as besoin.
      </p>
    </div>
  </header>

  <section class="section-region">
    <div class="section-titre">
      <h2>Dans quelle région es-tu ?</h2>
      <p>Pour te guider vers les bonnes ressources.</p>
      <div class="ligne-decorative"></div>
    </div>

    <div class="region-grid">

      <a href="ressources-qc-montreal.php<?php echo $themeParam; ?>" class="region-card">
        <div class="region-indicateur"></div>
        <span class="region-nom">Montréal</span>
        <span class="region-detail">Île de Montréal</span>
      </a>

      <a href="ressources-qc-quebec.php<?php echo $themeParam; ?>" class="region-card">
        <div class="region-indicateur"></div>
        <span class="region-nom">Québec</span>
        <span class="region-detail">Capitale-Nationale</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Laval</span>
        <span class="region-detail">Laval</span>
        <span class="bientot-label">Bientôt</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Sherbrooke</span>
        <span class="region-detail">Estrie</span>
        <span class="bientot-label">Bientôt</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Gatineau</span>
        <span class="region-detail">Outaouais</span>
        <span class="bientot-label">Bientôt</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Saguenay</span>
        <span class="region-detail">Saguenay–Lac-Saint-Jean</span>
        <span class="bientot-label">Bientôt</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Trois-Rivières</span>
        <span class="region-detail">Mauricie</span>
        <span class="bientot-label">Bientôt</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Longueuil</span>
        <span class="region-detail">Montérégie</span>
        <span class="bientot-label">Bientôt</span>
      </a>

      <a href="#" class="region-card bientot">
        <div class="region-indicateur"></div>
        <span class="region-nom">Autres régions</span>
        <span class="region-detail">Partout au Québec</span>
        <span class="bientot-label">Bientôt</span>
      </a>

    </div>

    <p class="note-region">
      Les ressources provinciales (accessibles partout au Québec) sont incluses dans chaque page régionale. Les autres régions seront ajoutées progressivement.
    </p>

  </section>
</main>

<footer class="footer-minimal">
  <a href="../index.php" class="footer-logo">
    <span class="solo">Solo</span><span class="plugs">plugs</span>
  </a>
  <p class="footer-tagline">La voix de la solitude</p>
  <p class="footer-copy">&copy; <?php echo date('Y'); ?> Soloplugs — Tous droits réservés</p>
</footer>

</body>
</html>
