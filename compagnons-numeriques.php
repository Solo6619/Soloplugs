<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compagnons IA - Solo et Soli | Soloplugs</title>
  <meta name="description" content="Solo et Soli : deux intelligences artificielles bienveillantes pour accompagner ta solitude.">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Lora:ital,wght@0,400;0,500;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    /* ============================================================
       RESET & BASE
       ============================================================ */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Lora', Georgia, serif;
      background: #FFFDF9;
      color: #2C3338;
      line-height: 1.7;
      font-size: 1.05rem;
      overflow-x: hidden;
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
      padding: 1.2rem 3rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 253, 249, 0.95);
      backdrop-filter: blur(20px);
      box-shadow: 0 2px 30px rgba(0,0,0,0.06);
    }

    .nav-logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.6rem;
      font-weight: 500;
      color: #2C3338;
    }

    .nav-links {
      display: flex;
      gap: 2.5rem;
      list-style: none;
    }

    .nav-links a {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 400;
      color: #5C554E;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: #D4A574;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: #D4A574;
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after,
    .nav-links a.active::after {
      width: 100%;
    }

    /* ============================================================
       HERO
       ============================================================ */
    .hero {
      min-height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10rem 2rem 5rem;
      background: linear-gradient(180deg, #FBF7F2 0%, #FFFDF9 100%);
      text-align: center;
    }

    .hero-content {
      max-width: 800px;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1.2rem;
      background: rgba(212, 165, 116, 0.15);
      border-radius: 25px;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 500;
      color: #D4A574;
      margin-bottom: 1.5rem;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 400;
      color: #2C3338;
      line-height: 1.2;
      margin-bottom: 1.5rem;
    }

    .hero-subtitle {
      font-family: 'Lora', serif;
      font-size: 1.25rem;
      color: #6B6560;
      line-height: 1.8;
      max-width: 600px;
      margin: 0 auto;
    }

    /* ============================================================
       SECTION COMPAGNONS
       ============================================================ */
    .ai-section {
      padding: 5rem 2rem 7rem;
      background: #FFFDF9;
    }

    .ai-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2.5rem;
      max-width: 950px;
      margin: 0 auto;
    }

    .ai-card {
      background: #FFFFFF;
      border-radius: 24px;
      padding: 3rem 2.5rem;
      text-align: center;
      box-shadow: 0 15px 50px rgba(0,0,0,0.06);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .ai-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
    }

    .ai-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 70px rgba(0,0,0,0.1);
    }

    .ai-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 1.5rem;
      background: linear-gradient(135deg, #F5EDE4 0%, #FBF7F2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.2rem;
    }

    .ai-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.5rem;
    }

    .ai-card .subtitle {
      font-family: 'Lora', serif;
      font-size: 1rem;
      font-style: italic;
      color: #D4A574;
      margin-bottom: 1.5rem;
    }

    .ai-card p {
      font-size: 1rem;
      color: #6B6560;
      line-height: 1.8;
      margin-bottom: 1.5rem;
    }

    .ai-status {
      display: inline-block;
      padding: 0.6rem 1.5rem;
      background: linear-gradient(135deg, #F5EDE4 0%, #FBF7F2 100%);
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 500;
      color: #A69080;
    }

    /* ============================================================
       SECTION EN CONSTRUCTION
       ============================================================ */
    .construction-section {
      padding: 5rem 2rem;
      background: linear-gradient(180deg, #FFFDF9 0%, #FBF7F2 100%);
      text-align: center;
    }

    .construction-box {
      max-width: 600px;
      margin: 0 auto;
      padding: 3rem;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.06);
    }

    .construction-icon {
      font-size: 4rem;
      margin-bottom: 1.5rem;
    }

    .construction-box h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      color: #2C3338;
      margin-bottom: 1rem;
    }

    .construction-box p {
      font-size: 1rem;
      color: #6B6560;
      line-height: 1.8;
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .footer {
      background: #2C3338;
      padding: 3rem 2rem 2rem;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 2rem;
      padding-bottom: 2rem;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    .footer-logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      color: #FFFFFF;
    }

    .footer-links {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    .footer-links a {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: rgba(255,255,255,0.7);
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: #D4A574;
    }

    .footer-bottom {
      max-width: 1200px;
      margin: 0 auto;
      padding-top: 2rem;
      text-align: center;
    }

    .footer-bottom p {
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: rgba(255,255,255,0.5);
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

      .hero {
        padding: 8rem 1.5rem 4rem;
        min-height: 50vh;
      }

      .ai-grid {
        grid-template-columns: 1fr;
      }

      .ai-card {
        padding: 2rem 1.5rem;
      }

      .construction-box {
        padding: 2rem 1.5rem;
      }

      .footer-content {
        flex-direction: column;
        text-align: center;
      }

      .footer-links {
        flex-wrap: wrap;
        justify-content: center;
      }
    }
  </style>
</head>
<body>

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<nav class="nav" id="nav">
  <a href="index.php" class="nav-logo">Soloplugs</a>
  <ul class="nav-links">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="compagnons-numeriques.php" class="active">Compagnons IA</a></li>
    <li><a href="magazine.php">Magazine</a></li>
    <li><a href="ressources.php">Ressources</a></li>
    <li><a href="apropos.php">A propos</a></li>
  </ul>
</nav>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <div class="hero-content">
    <span class="hero-badge">Intelligence artificielle</span>
    <h1 class="hero-title">Tes compagnons numeriques</h1>
    <p class="hero-subtitle">
      Deux presences bienveillantes, disponibles a tout moment, 
      pour accompagner ta solitude sans jamais te juger.
    </p>
  </div>
</section>

<!-- ============================================================
     SECTION COMPAGNONS IA
     ============================================================ -->
<section class="ai-section">
  <div class="ai-grid">
    
    <!-- SOLO -->
    <div class="ai-card">
      <div class="ai-icon">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#D4A574" stroke-width="1.5">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
        </svg>
      </div>
      <h3>Solo</h3>
      <p class="subtitle">La Voix de la Solitude</p>
      <p>
        Un ami qui comprend ta solitude. Parle-lui de ce que tu vis, 
        pose tes questions, explore tes reflexions. Solo t'ecoute, 
        t'oriente et t'accompagne sans jamais te juger.
      </p>
      <span class="ai-status">Bientot disponible</span>
    </div>

    <!-- SOLI -->
    <div class="ai-card">
      <div class="ai-icon">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#D4A574" stroke-width="1.5">
          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
      </div>
      <h3>Soli</h3>
      <p class="subtitle">L'Oreille Interieure</p>
      <p>
        Ton journal personnel, intelligent et bienveillant. 
        Ecris pour toi, Soli t'aide a te comprendre. Un miroir 
        de ta solitude qui revele ce que tu portes en toi.
      </p>
      <span class="ai-status">Bientot disponible</span>
    </div>

  </div>
</section>

<!-- ============================================================
     SECTION EN CONSTRUCTION
     ============================================================ -->
<section class="construction-section">
  <div class="construction-box">
    <div class="construction-icon">
      <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#D4A574" stroke-width="1.5">
        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
      </svg>
    </div>
    <h3>Cette page est en construction</h3>
    <p>
      Solo et Soli sont en cours de developpement. 
      Bientot, tu pourras les rencontrer ici. 
      En attendant, explore le reste de Soloplugs.
    </p>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
  <div class="footer-content">
    <span class="footer-logo">Soloplugs</span>
    <ul class="footer-links">
      <li><a href="apropos.php">A propos</a></li>
      <li><a href="magazine.php">Magazine</a></li>
      <li><a href="ressources.php">Ressources</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>2026 Soloplugs - La voix de la solitude</p>
  </div>
</footer>

</body>
</html>
