<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magazine – Soloplugs</title>
  <meta name="description" content="Articles, témoignages et ressources pour mieux vivre avec soi-même.">
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
       HERO MAGAZINE
       ============================================================ */
    .magazine-hero {
      padding-top: 80px;
      min-height: 70vh;
      display: flex;
      align-items: center;
      background: linear-gradient(180deg, #F5EDE4 0%, #FFFDF9 100%);
      position: relative;
      overflow: hidden;
    }

    .magazine-hero::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 80%;
      height: 200%;
      background: radial-gradient(ellipse, rgba(212, 165, 116, 0.1) 0%, transparent 70%);
      pointer-events: none;
    }

    .hero-container {
      max-width: 1300px;
      margin: 0 auto;
      padding: 4rem 2rem;
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 4rem;
      align-items: center;
    }

    .hero-text {
      animation: fadeInUp 1s ease-out;
    }

    .hero-badge {
      display: inline-block;
      padding: 0.5rem 1.2rem;
      background: rgba(212, 165, 116, 0.15);
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.8rem;
      font-weight: 500;
      color: #D4A574;
      margin-bottom: 1.5rem;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .hero-text h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      font-weight: 400;
      color: #2C3338;
      line-height: 1.2;
      margin-bottom: 1.5rem;
    }

    .hero-text p {
      font-size: 1.15rem;
      color: #5C554E;
      line-height: 1.8;
      margin-bottom: 2rem;
    }

    .hero-featured {
      position: relative;
      animation: fadeIn 1.2s ease-out 0.3s both;
    }

    .featured-card {
      position: relative;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 30px 80px rgba(0,0,0,0.15);
      transition: transform 0.4s ease;
    }

    .featured-card:hover {
      transform: translateY(-8px);
    }

    .featured-card img {
      width: 100%;
      height: 450px;
      object-fit: cover;
    }

    .featured-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 3rem 2rem 2rem;
      background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.8) 100%);
    }

    .featured-tag {
      display: inline-block;
      padding: 0.4rem 1rem;
      background: #D4A574;
      border-radius: 15px;
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem;
      font-weight: 500;
      color: #FFFFFF;
      margin-bottom: 1rem;
    }

    .featured-overlay h2 {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 500;
      color: #FFFFFF;
      margin-bottom: 0.5rem;
    }

    .featured-overlay p {
      font-size: 0.95rem;
      color: rgba(255,255,255,0.8);
      margin-bottom: 1rem;
    }

    .featured-meta {
      display: flex;
      gap: 1.5rem;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: rgba(255,255,255,0.6);
    }

    /* ============================================================
       SECTION LA VOIX
       ============================================================ */
    .voix-section {
      padding: 6rem 2rem;
      background: #FFFDF9;
    }

    .section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 4rem;
    }

    .section-header h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 4vw, 2.8rem);
      font-weight: 400;
      color: #2C3338;
      margin-bottom: 1rem;
    }

    .section-header p {
      font-size: 1.1rem;
      color: #7A726A;
      font-style: italic;
    }

    .ligne-decorative {
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
      margin: 1.5rem auto 0;
      border-radius: 2px;
    }

    .voix-carousel {
      display: flex;
      gap: 2rem;
      max-width: 1300px;
      margin: 0 auto;
      overflow-x: auto;
      padding: 1rem 0.5rem 2rem;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
    }

    .voix-carousel::-webkit-scrollbar {
      height: 6px;
    }

    .voix-carousel::-webkit-scrollbar-track {
      background: #F5EDE4;
      border-radius: 3px;
    }

    .voix-carousel::-webkit-scrollbar-thumb {
      background: #D4A574;
      border-radius: 3px;
    }

    .voix-card-link {
      flex: 0 0 380px;
      scroll-snap-align: start;
    }

    .voix-card {
      background: #FFFFFF;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 40px rgba(0,0,0,0.06);
      transition: all 0.4s ease;
      height: 100%;
    }

    .voix-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.12);
    }

    .voix-card-image {
      position: relative;
      height: 220px;
      overflow: hidden;
    }

    .voix-card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .voix-card:hover .voix-card-image img {
      transform: scale(1.08);
    }

    .voix-card-content {
      padding: 1.8rem;
    }

    .voix-card-content h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.8rem;
      line-height: 1.4;
    }

    .voix-card-content p {
      font-size: 0.95rem;
      color: #6B6560;
      line-height: 1.7;
      margin-bottom: 1rem;
    }

    .voix-card-footer {
      display: flex;
      justify-content: space-between;
      font-family: 'Inter', sans-serif;
      font-size: 0.8rem;
      color: #A69080;
    }

    /* ============================================================
       SECTION BD
       ============================================================ */
    .bd-section {
      padding: 5rem 2rem;
      background: linear-gradient(180deg, #FFFDF9 0%, #F5EDE4 100%);
    }

    .bd-container {
      max-width: 1100px;
      margin: 0 auto;
      text-align: center;
    }

    .bd-header {
      margin-bottom: 3rem;
    }

    .bd-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.5rem;
    }

    .bd-subtitle {
      font-size: 1rem;
      color: #7A726A;
      font-style: italic;
    }

    .bd-nav {
      margin-top: 2rem;
      display: flex;
      justify-content: center;
      gap: 1rem;
    }

    .bd-nav-btn {
      display: inline-block;
      padding: 0.8rem 2rem;
      background: #FFFFFF;
      border: 2px solid #E8DDD4;
      border-radius: 30px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      color: #5C554E;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .bd-nav-btn:hover:not(.disabled) {
      background: #D4A574;
      border-color: #D4A574;
      color: #FFFFFF;
    }

    .bd-nav-btn.disabled {
      opacity: 0.4;
      cursor: not-allowed;
    }

    .bd-episode {
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: #A69080;
      margin-bottom: 1.5rem;
    }

    .bd-slider-container {
      overflow: hidden;
      border-radius: 20px;
      box-shadow: 0 15px 50px rgba(0,0,0,0.08);
      background: #FFFFFF;
    }

    .bd-slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .bd-slide {
      min-width: 100%;
      padding: 1.5rem;
    }

    .bd-strip {
      width: 100%;
      height: auto;
      border-radius: 12px;
    }
    /* ============================================================
       SECTION RUBRIQUES
       ============================================================ */
    .rubriques-section {
      padding: 6rem 2rem 7rem;
      background: #F5EDE4;
    }

    .rubriques-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .rubrique-card {
      background: #FFFFFF;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 10px 40px rgba(0,0,0,0.06);
      transition: all 0.4s ease;
      position: relative;
    }

    .rubrique-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 70px rgba(0,0,0,0.12);
    }

    .rubrique-image {
      position: relative;
      height: 200px;
      overflow: hidden;
    }

    .rubrique-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .rubrique-card:hover .rubrique-image img {
      transform: scale(1.08);
    }

    .rubrique-icon {
      position: absolute;
      top: 1rem;
      right: 1rem;
      width: 50px;
      height: 50px;
      background: rgba(255,255,255,0.95);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .rubrique-content {
      padding: 1.8rem;
    }

    .rubrique-content h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.6rem;
    }

    .rubrique-content p {
      font-size: 0.95rem;
      color: #6B6560;
      margin-bottom: 1rem;
    }

    .rubrique-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      color: #D4A574;
      transition: gap 0.3s ease;
    }

    .rubrique-card:hover .rubrique-link {
      gap: 0.8rem;
    }

    /* ============================================================
       NEWSLETTER
       ============================================================ */
    .newsletter-section {
      padding: 6rem 2rem;
      background: linear-gradient(180deg, #F5EDE4 0%, #EDE5DB 100%);
      text-align: center;
    }

    .newsletter-container {
      max-width: 600px;
      margin: 0 auto;
    }

    .newsletter-container h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 400;
      color: #2C3338;
      margin-bottom: 1rem;
    }

    .newsletter-container p {
      font-size: 1.05rem;
      color: #5C554E;
      margin-bottom: 2rem;
    }

    .newsletter-form {
      display: flex;
      gap: 1rem;
      max-width: 500px;
      margin: 0 auto;
    }

    .newsletter-form input {
      flex: 1;
      padding: 1rem 1.5rem;
      border: 2px solid #E8DDD4;
      border-radius: 30px;
      font-family: 'Lora', serif;
      font-size: 1rem;
      background: #FFFFFF;
      transition: border-color 0.3s ease;
    }

    .newsletter-form input:focus {
      outline: none;
      border-color: #D4A574;
    }

    .newsletter-form button {
      padding: 1rem 2rem;
      background: #2C3338;
      border: none;
      border-radius: 30px;
      color: #FFFFFF;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .newsletter-form button:hover {
      background: #D4A574;
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .footer {
      padding: 4rem 2rem 2rem;
      background: #2C3338;
      color: rgba(255,255,255,0.7);
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 2rem;
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
      color: rgba(255,255,255,0.6);
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: #D4A574;
    }

    .footer-bottom {
      max-width: 1200px;
      margin: 3rem auto 0;
      padding-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      text-align: center;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: rgba(255,255,255,0.4);
    }

    /* ============================================================
       ANIMATIONS
       ============================================================ */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-on-scroll {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }

    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 968px) {
      .hero-container {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .hero-featured {
        max-width: 500px;
        margin: 0 auto;
      }
    }

    @media (max-width: 768px) {
      .nav {
        padding: 1rem 1.5rem;
      }

      .nav-links {
        display: none;
      }

      .voix-card-link {
        flex: 0 0 320px;
      }

      .newsletter-form {
        flex-direction: column;
      }

      .footer-content {
        flex-direction: column;
        text-align: center;
      }
    }

    @media (max-width: 480px) {
      .featured-card img {
        height: 350px;
      }
    }
  </style>
</head>
<body>

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<nav class="nav">
  <a href="index.php" class="nav-logo">Soloplugs</a>
  <ul class="nav-links">
    <li><a href="index.php#themes">Les 7 thèmes</a></li>
    <li><a href="index.php#compagnons">Compagnons IA</a></li>
    <li><a href="apropos.php">À propos</a></li>
    <li><a href="magazine.php" class="active">Magazine</a></li>
  </ul>
</nav>

<!-- ============================================================
     HERO MAGAZINE
     ============================================================ -->
<section class="magazine-hero">
  <div class="hero-container">
    <div class="hero-text">
      <span class="hero-badge">Magazine</span>
      <h1>La voix de la solitude</h1>
      <p>Articles, réflexions et découvertes pour mieux vivre avec soi-même. Un espace où la solitude devient source d'inspiration.</p>
    </div>
    
    <div class="hero-featured">
      <a href="articles/solitude-invisible.php" class="featured-card">
        <img src="images/Magazine/images/Solitude_invisible_01.png" alt="Article vedette">
        <div class="featured-overlay">
          <span class="featured-tag">À la une</span>
          <h2>La solitude invisible</h2>
          <p>On peut être entouré et se sentir profondément seul...</p>
          <div class="featured-meta">
            <span>5 min de lecture</span>
            <span>6 déc 2025</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION LA VOIX
     ============================================================ -->
<section class="voix-section">
  <div class="section-header">
    <h2>La Voix</h2>
    <p>Articles de fond empathiques sur la solitude</p>
    <div class="ligne-decorative"></div>
  </div>

  <div class="voix-carousel" id="voix-carousel">
    <!-- Article 1 -->
    <a href="articles/solitude-invisible.php" class="voix-card-link">
      <article class="voix-card">
        <div class="voix-card-image">
          <img src="images/Magazine/images/Solitude_invisible_01.png" alt="La solitude invisible">
        </div>
        <div class="voix-card-content">
          <h3>La solitude invisible</h3>
          <p>On peut être entouré et se sentir profondément seul. La solitude ne dépend pas du fait d'être seul ou entouré.</p>
          <div class="voix-card-footer">
            <span>5 min</span>
            <span>6 déc 2025</span>
          </div>
        </div>
      </article>
    </a>

    <!-- Article 2 -->
    <a href="articles/apprivoiser-le-silence.php" class="voix-card-link">
      <article class="voix-card">
        <div class="voix-card-image">
          <img src="images/Magazine/images/mag1.jpg" alt="Apprivoiser le silence">
        </div>
        <div class="voix-card-content">
          <h3>Apprivoiser le silence du dimanche</h3>
          <p>Le dimanche en solo peut être lourd. Comment transformer cette journée en temps choisi plutôt que subi.</p>
          <div class="voix-card-footer">
            <span>7 min</span>
            <span>15 oct 2025</span>
          </div>
        </div>
      </article>
    </a>

    <!-- Article 3 -->
    <a href="#" class="voix-card-link">
      <article class="voix-card">
        <div class="voix-card-image">
          <img src="images/Magazine/images/Solitude_silencieuse_02.jpg" alt="Les petits matins">
        </div>
        <div class="voix-card-content">
          <h3>La beauté des petits matins</h3>
          <p>Ces heures calmes où le monde semble attendre. Un temps pour soi, avant le bruit du jour.</p>
          <div class="voix-card-footer">
            <span>5 min</span>
            <span>10 oct 2025</span>
          </div>
        </div>
      </article>
    </a>
  </div>
</section>

<section class="bd-section" id="bd-section">
  <div class="bd-container">
    <div class="bd-header">
      <h2 class="bd-title">Solo BD</h2>
      <p class="bd-subtitle">La solitude en images</p>
    </div>
    
    <div class="bd-episode" id="bd-episode">Épisode 1 / 1</div>
    
    <div class="bd-slider-container">
      <div class="bd-slider" id="bd-slider">
        <!-- Les séries seront injectées ici par JavaScript -->
      </div>
    </div>
    
    <div class="bd-nav">
      <button class="bd-nav-btn" id="bd-prev" onclick="slideBD(-1)">← Précédent</button>
      <button class="bd-nav-btn" id="bd-next" onclick="slideBD(1)">Suivant →</button>
    </div>
  </div>
</section>

<script>
// ===========================================
// CONFIGURATION DES SÉRIES BD 
// ===========================================
const bdSeries = [
  { id: 'bd01', titre: 'Être seul' },
  { id: 'bd02', titre: 'Série suivante' },
   { id: 'bd03', titre: 'Série suivante' },
  // Ajoute tes nouvelles séries ici :
  // { id: 'bd03', titre: 'Titre' },
];

let currentBD = 0;

function initBD() {
  const slider = document.getElementById('bd-slider');
  slider.innerHTML = '';
  
  bdSeries.forEach((serie) => {
    const slide = document.createElement('div');
    slide.className = 'bd-slide';
    
    const img = document.createElement('img');
    img.src = `../images/Magazine/solo-bd/${serie.id}.png`;
    img.alt = serie.titre;
    img.className = 'bd-strip';
    slide.appendChild(img);
    
    slider.appendChild(slide);
  });
  
  updateBD();
}

function slideBD(direction) {
  const newIndex = currentBD + direction;
  if (newIndex >= 0 && newIndex < bdSeries.length) {
    currentBD = newIndex;
    updateBD();
  }
}

function updateBD() {
  const slider = document.getElementById('bd-slider');
  slider.style.transform = `translateX(-${currentBD * 100}%)`;
  
  document.getElementById('bd-episode').textContent = 
    `Épisode ${currentBD + 1} / ${bdSeries.length}`;
  
  document.getElementById('bd-prev').classList.toggle('disabled', currentBD === 0);
  document.getElementById('bd-next').classList.toggle('disabled', currentBD === bdSeries.length - 1);
}

document.addEventListener('DOMContentLoaded', initBD);
</script>

<!-- ============================================================
     SECTION RUBRIQUES
     ============================================================ -->
<section class="rubriques-section">
  <div class="section-header">
    <h2>Nos rubriques</h2>
    <p>Explorer, créer, savourer la vie en solo</p>
    <div class="ligne-decorative"></div>
  </div>

  <div class="rubriques-grid">
    <!-- Solo à table -->
    <a href="section-table.php" class="rubrique-card animate-on-scroll">
      <div class="rubrique-image">
        <img src="images/Magazine/images/recettes/riz_saute_solo.jpg" alt="Solo à table">
        <span class="rubrique-icon">🍽️</span>
      </div>
      <div class="rubrique-content">
        <h3>Solo à table</h3>
        <p>Recettes gourmandes pour une personne</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

    <!-- Jeux en Solo -->
    <a href="articles/jeux-solo.php" class="rubrique-card animate-on-scroll">
      <div class="rubrique-image">
        <img src="images/Magazine/images/Jeux_en_solo_001.png" alt="Jeux en Solo">
        <span class="rubrique-icon">🎮</span>
      </div>
      <div class="rubrique-content">
        <h3>Jeux en Solo</h3>
        <p>Solitaire, Sudoku, échecs et plus encore</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

    <!-- Hobbies & Créativité -->
    <a href="section-hobbies.php" class="rubrique-card animate-on-scroll">
      <div class="rubrique-image">
        <img src="images/Magazine/images/Hobbies_001.png" alt="Hobbies">
        <span class="rubrique-icon">🎨</span>
      </div>
      <div class="rubrique-content">
        <h3>Hobbies & Créativité</h3>
        <p>Dessin, musique, artisanat et plus encore</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

    <!-- Lectures & Découvertes -->
    <a href="lectures-decouvertes.php" class="rubrique-card animate-on-scroll">
      <div class="rubrique-image">
        <img src="images/Magazine/images/Lectures_decouvertes_001.png" alt="Lectures">
        <span class="rubrique-icon">📚</span>
      </div>
      <div class="rubrique-content">
        <h3>Lectures & Découvertes</h3>
        <p>Livres, films, podcasts</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>
  </div>
</section>

<!-- ============================================================
     NEWSLETTER
     ============================================================ -->
<section class="newsletter-section">
  <div class="newsletter-container animate-on-scroll">
    <h2>Reçois la solitude positive</h2>
    <p>Une fois par semaine, des réflexions, des découvertes et de l'inspiration directement dans ta boîte mail.</p>
    <form class="newsletter-form">
      <input type="email" placeholder="Ton adresse email" required>
      <button type="submit">S'inscrire</button>
    </form>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
  <div class="footer-content">
    <span class="footer-logo">Soloplugs</span>
    <ul class="footer-links">
      <li><a href="apropos.php">À propos</a></li>
      <li><a href="magazine.php">Magazine</a></li>
      <li><a href="ressources.php">Ressources</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>© 2026 Soloplugs — La voix de la solitude</p>
  </div>
</footer>

<!-- ============================================================
     SCRIPTS
     ============================================================ -->
<script>
  // Animation au scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
  });
</script>

</body>
</html>
