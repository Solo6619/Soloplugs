<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources — Soloplugs</title>
  <meta name="description" content="Trouve les ressources adaptées à ta situation et ta région. Une main tendue, sans jugement.">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="../css/fonts.css">
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background: linear-gradient(180deg, #1a1815 0%, #2d2a26 50%, #1a1815 100%);
      min-height: 100vh;
      color: #E8E4DF;
      font-family: 'Lora', Georgia, serif;
      line-height: 1.8;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    /* ========================================
       HERO - LEVER DE SOLEIL
       ======================================== */
    
    .hero {
      width: 100%;
      height: 55vh;
      min-height: 420px;
      background: linear-gradient(180deg, rgba(26, 24, 21, 0.05) 0%, rgba(26, 24, 21, 0.35) 60%, rgba(26, 24, 21, 1) 100%),
                  url('https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?w=1600&q=80') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      padding: 2rem;
      text-align: center;
      animation: fadeInUp 1.2s ease-out;
    }

    .hero-salutation {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      font-weight: 400;
      color: #FFFFFF;
      text-shadow: 0 2px 40px rgba(0,0,0,0.5);
      margin-bottom: 1.5rem;
    }

    .hero-salutation .accent {
      color: #F5D6A8;
    }

    .hero-message {
      font-family: 'Lora', Georgia, serif;
      font-size: clamp(1.1rem, 2.5vw, 1.35rem);
      color: rgba(255, 255, 255, 0.95);
      text-shadow: 0 2px 20px rgba(0,0,0,0.4);
      line-height: 1.8;
      max-width: 550px;
      margin: 0 auto;
    }

    .hero-message .highlight {
      color: #F5D6A8;
      font-weight: 500;
    }

    /* ========================================
       SECTION CHOIX DU PAYS
       ======================================== */
    
    .section-pays {
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
      font-size: 1.8rem;
      font-weight: 400;
      color: #FFFFFF;
      margin-bottom: 0.5rem;
    }

    .section-titre p {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      color: #A9A29B;
    }

    .ligne-decorative {
      width: 50px;
      height: 3px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
      margin: 1.5rem auto 2.5rem;
      border-radius: 2px;
    }

    .pays-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.25rem;
      max-width: 650px;
      margin: 0 auto;
    }

    .pays-card {
      background: rgba(45, 42, 38, 0.6);
      border: 2px solid rgba(212, 165, 116, 0.2);
      border-radius: 20px;
      padding: 2rem 1rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.4s ease;
      text-decoration: none;
    }

    .pays-card:hover {
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.15);
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .pays-card:hover .pays-nom {
      color: #E8C9A8;
    }

    .pays-drapeau {
      width: 52px;
      height: 36px;
      object-fit: contain;
      margin-bottom: 1rem;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .pays-nom {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.05rem;
      font-weight: 500;
      color: #E8E4DF;
      transition: color 0.3s ease;
      display: block;
    }

    /* ========================================
       FOOTER SOBRE
       ======================================== */
    
    .footer-minimal {
      padding: 2.5rem 2rem;
      text-align: center;
      border-top: 1px solid rgba(212, 165, 116, 0.15);
      margin-top: 2rem;
    }

    .footer-logo {
      display: inline-flex;
      align-items: baseline;
      gap: 0.15rem;
      margin-bottom: 0.75rem;
      text-decoration: none;
    }

    .footer-logo .solo {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.3rem;
      font-weight: 600;
      color: #D4A574;
    }

    .footer-logo .plugs {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem;
      font-weight: 400;
      color: #A9A29B;
    }

    .footer-tagline {
      font-family: 'Lora', Georgia, serif;
      font-size: 0.9rem;
      font-style: italic;
      color: #7A726A;
      margin-bottom: 1rem;
    }

    .footer-copy {
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem;
      color: #5C554E;
      letter-spacing: 0.5px;
    }

    /* Bouton retour */
    .btn-retour {
      position: fixed;
      top: 1.5rem;
      left: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
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
      border-color: #D4A574;
      color: #D4A574;
      transform: translateX(-3px);
    }

    .btn-retour svg {
      width: 18px;
      height: 18px;
      stroke: currentColor;
      stroke-width: 2;
      fill: none;
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ========================================
       RESPONSIVE
       ======================================== */
    
    @media (max-width: 768px) {
      .hero {
        height: 45vh;
        min-height: 350px;
      }

      .hero-content {
        padding: 1.5rem;
      }

      .pays-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
      }

      .section-pays {
        padding: 3rem 1.5rem 2rem;
      }

      .btn-retour {
        top: 1rem;
        left: 1rem;
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
      }
    }

    @media (max-width: 480px) {
      .hero-salutation {
        font-size: 2.2rem;
      }

      .hero-message {
        font-size: 1.05rem;
      }

      .pays-card {
        padding: 1.5rem 0.75rem;
      }

      .pays-drapeau {
        width: 44px;
        height: 30px;
      }

      .pays-nom {
        font-size: 0.95rem;
      }

      .footer-minimal {
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>

<?php
  // Récupérer le thème d'origine
  $theme = isset($_GET['theme']) ? htmlspecialchars($_GET['theme']) : '';
  
  // Mapping thème → nom affichable et page de retour
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
  $retourUrl = $themeInfo ? $themeInfo['retour'] : '../index.php';
  $retourLabel = $themeInfo ? $themeInfo['nom'] : 'Accueil';
  $themeParam = $theme ? '?theme=' . $theme : '';
?>

<!-- Bouton retour -->
<a href="<?php echo $retourUrl; ?>" class="btn-retour">
  <svg viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  <?php echo $retourLabel; ?>
</a>

<main>
  <!-- HERO - LEVER DE SOLEIL -->
  <header class="hero">
    <div class="hero-content">
      <h1 class="hero-salutation">
        Ressources<?php echo $themeInfo ? ' — <span class="accent">' . $themeInfo['nom'] . '</span>' : ''; ?>
      </h1>
      <p class="hero-message">
        Ici, c'est une <span class="highlight">main tendue</span> que tu trouveras.<br>
        Pas de jugement. Pas de pression.<br>
        Juste des chemins possibles, à ton rythme.
      </p>
    </div>
  </header>

  <!-- SECTION CHOIX DU PAYS -->
  <section class="section-pays">
    
    <div class="section-titre">
      <h2>Où es-tu ?</h2>
      <p>Pour te guider vers les ressources de ta région.</p>
      <div class="ligne-decorative"></div>
    </div>
    
    <div class="pays-grid">
      
      <a href="ressources-qc.php<?php echo $themeParam; ?>" class="pays-card">
        <img src="../images/drapeaux/quebec.png" alt="Québec" class="pays-drapeau">
        <span class="pays-nom">Québec</span>
      </a>
      
      <a href="ressources-fr.php<?php echo $themeParam; ?>" class="pays-card">
        <img src="../images/drapeaux/france.png" alt="France" class="pays-drapeau">
        <span class="pays-nom">France</span>
      </a>
      
      <a href="ressources-be.php<?php echo $themeParam; ?>" class="pays-card">
        <img src="../images/drapeaux/belgique.png" alt="Belgique" class="pays-drapeau">
        <span class="pays-nom">Belgique</span>
      </a>
      
      <a href="ressources-ch.php<?php echo $themeParam; ?>" class="pays-card">
        <img src="../images/drapeaux/suisse.png" alt="Suisse" class="pays-drapeau">
        <span class="pays-nom">Suisse</span>
      </a>
      
    </div>
    
  </section>
</main>

<!-- FOOTER SOBRE -->
<footer class="footer-minimal">
  <a href="index.php" class="footer-logo">
    <span class="solo">Solo</span><span class="plugs">plugs</span>
  </a>
  <p class="footer-tagline">La voix de la solitude</p>
  <p class="footer-copy">&copy; <?php echo date('Y'); ?> Soloplugs — Tous droits réservés</p>
</footer>

</body>
</html>
