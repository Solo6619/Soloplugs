<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À propos – Soloplugs</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lora:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background: linear-gradient(180deg, #0f0f23 0%, #1a1a2e 50%, #0f0f23 100%);
      min-height: 100vh;
      color: #E8E4DF;
      font-family: 'Lora', Georgia, serif;
      line-height: 1.9;
      font-size: 1.1rem;
    }

    /* Image d'ambiance en en-tête - ciel étoilé */
    .hero {
      width: 100%;
      height: 50vh;
      min-height: 400px;
      background: linear-gradient(180deg, rgba(10, 10, 30, 0.2) 0%, rgba(15, 15, 35, 0) 100%),
                  url('https://images.unsplash.com/photo-1519681393784-d120267933ba?w=1600&q=80') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 150px;
      background: linear-gradient(180deg, transparent 0%, #0f0f23 100%);
    }

    /* Citation vedette */
    .citation-vedette {
      position: relative;
      z-index: 2;
      max-width: 850px;
      padding: 2rem 3rem;
      text-align: center;
      animation: fadeInUp 1.2s ease-out;
    }

    .citation-vedette p {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(1.5rem, 3.5vw, 2.2rem);
      font-style: italic;
      color: #FFFFFF;
      text-shadow: 0 2px 30px rgba(0,0,0,0.5);
      line-height: 1.5;
    }

    .citation-vedette .auteur {
      margin-top: 1rem;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-style: normal;
      color: rgba(255,255,255,0.7);
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    /* Contenu principal */
    .manifeste {
      max-width: 750px;
      margin: 0 auto;
      padding: 4rem 2rem 6rem;
      animation: fadeIn 1s ease-out 0.3s both;
      position: relative;
      z-index: 2;
    }

    .titre-section {
      text-align: center;
      margin-bottom: 3rem;
    }

    h1 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.5rem;
      font-weight: 400;
      color: #FFFFFF;
      margin-bottom: 0.5rem;
      line-height: 1.3;
    }

    h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem;
      font-weight: 400;
      color: #D4A574;
      font-style: italic;
    }

    /* Ligne décorative */
    .ligne-decorative {
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
      margin: 2rem auto 3rem;
      border-radius: 2px;
    }

    .section {
      margin-bottom: 2.5rem;
    }

    p {
      margin-bottom: 1.8rem;
      color: #C9C5C0;
      animation: fadeIn 1s ease-out both;
    }

    .section p:nth-child(1) { animation-delay: 0.4s; }
    .section p:nth-child(2) { animation-delay: 0.6s; }
    .section p:nth-child(3) { animation-delay: 0.8s; }
    .section p:nth-child(4) { animation-delay: 1s; }
    .section p:nth-child(5) { animation-delay: 1.2s; }
    .section p:nth-child(6) { animation-delay: 1.4s; }
    .section p:nth-child(7) { animation-delay: 1.6s; }
    .section p:nth-child(8) { animation-delay: 1.8s; }
    .section p:nth-child(9) { animation-delay: 2s; }
    .section p:nth-child(10) { animation-delay: 2.2s; }

    /* Première phrase en grand */
    .phrase-ouverture {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.8rem;
      color: #FFFFFF;
      text-align: center;
      margin-bottom: 2.5rem;
    }

    /* Citation intégrée */
    .citation-inline {
      font-size: 1.3rem;
      color: #FFFFFF;
      font-style: italic;
      margin: 2.5rem 0;
      padding: 1.5rem 2rem;
      background: linear-gradient(135deg, rgba(212, 165, 116, 0.15) 0%, rgba(232, 201, 168, 0.05) 100%);
      border-left: 4px solid #D4A574;
      border-radius: 0 8px 8px 0;
    }

    .signature {
      margin-top: 4rem;
      text-align: center;
      animation: fadeIn 1s ease-out 2.4s both;
    }

    .signature-ligne {
      width: 40px;
      height: 2px;
      background: #D4A574;
      margin: 0 auto 1rem;
    }

    .signature p {
      font-family: 'Playfair Display', Georgia, serif;
      font-style: italic;
      font-size: 1.3rem;
      color: #D4A574;
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
      background: rgba(15, 15, 35, 0.9);
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

    /* Étoiles décoratives */
    .stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
    }

    .star {
      position: absolute;
      background: #FFFFFF;
      border-radius: 50%;
      animation: twinkle 4s infinite ease-in-out;
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

    @keyframes twinkle {
      0%, 100% { opacity: 0.2; transform: scale(1); }
      50% { opacity: 0.8; transform: scale(1.2); }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero {
        height: 40vh;
        min-height: 320px;
      }

      .citation-vedette {
        padding: 1.5rem;
      }

      .citation-vedette p {
        font-size: 1.3rem;
      }

      .manifeste {
        padding: 2rem 1.5rem 4rem;
      }

      h1 {
        font-size: 2rem;
      }

      .phrase-ouverture {
        font-size: 1.5rem;
      }

      .btn-retour {
        top: 1rem;
        left: 1rem;
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
      }
    }
  </style>
</head>
<body>

<!-- Étoiles décoratives en arrière-plan -->
<div class="stars" id="stars"></div>

<a href="index.php" class="btn-retour">
  <svg viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  Accueil
</a>

<!-- En-tête avec citation vedette -->
<header class="hero">
  <blockquote class="citation-vedette">
    <p>« La solitude, c'est l'obscurité nécessaire pour enfin voir sa propre lumière. »</p>
    <span class="auteur">— Solo</span>
  </blockquote>
</header>

<!-- Contenu principal -->
<article class="manifeste">

  <div class="titre-section">
    <h1>Soloplugs</h1>
    <h2>Ton planétarium intérieur</h2>
    <div class="ligne-decorative"></div>
  </div>

  <section class="section">
    <p class="phrase-ouverture">Nous naissons étoiles.</p>
    
    <p>Chacun de nous arrive au monde avec sa propre lumière, unique, jamais vue avant dans l'histoire de l'univers. Mais très vite, on nous apprend à regarder ailleurs. On nous dit de briller comme les autres, de suivre les constellations tracées par d'autres, de nous aligner. Et peu à peu, on oublie notre propre lumière. On oublie même qu'on en avait une.</p>
    
    <p>La société est devenue une pollution lumineuse. Tellement de bruit, tellement d'éclat artificiel, tellement de lumières qui ne sont pas les nôtres, qu'on ne voit plus le ciel. On ne se voit plus. Dans la lumière du quotidien, celle des écrans, des vitrines, des obligations, on finit par ne plus se reconnaître. On avance aveuglés, incapables de distinguer notre propre lueur dans le chaos.</p>
    
    <p>Alors on cherche à l'extérieur ce qui ne peut se trouver qu'à l'intérieur. On court vers les lumières des autres, vendues pour nous éclairer. Mais plus on court, plus on s'éloigne de soi.</p>

    <div class="citation-inline">
      La solitude, c'est l'obscurité nécessaire. Ce n'est pas le vide. Ce n'est pas l'abandon.
    </div>
    
    <p>C'est le moment où l'on éteint enfin les lumières parasites, où l'on accepte le silence. Et là, seulement là, dans cette obscurité choisie, on commence à voir. D'abord une lueur timide. Puis une autre. Et parmi elles, la nôtre.</p>
    
    <p>SOLOPLUGS est ce planétarium intérieur. Pas un lieu où l'on te montre quelles étoiles suivre, mais un lieu où l'on t'aide à chercher la tienne.</p>
    
    <p>Solo, c'est toi. C'est cette partie de toi qui sait, quelque part très profondément, que tu n'es pas une étoile comme les autres. Que tu as ta propre lumière, ta propre orbite, ta propre place dans cette immensité.</p>
    
    <p>La société veut des étoiles alignées. SOLOPLUGS célèbre les étoiles libres. Celles qui osent briller à leur propre rythme. Celles qui osent s'éloigner du bruit pour enfin s'entendre.</p>
    
    <p>Bienvenue dans ton planétarium intérieur. Ici, on éteint les lumières, pour que tu puisses commencer à chercher la tienne.</p>
  </section>

  <div class="signature">
    <div class="signature-ligne"></div>
    <p>Solo</p>
  </div>

</article>

<!-- Script pour générer les étoiles -->
<script>
  const starsContainer = document.getElementById('stars');
  const numberOfStars = 150;
  
  for (let i = 0; i < numberOfStars; i++) {
    const star = document.createElement('div');
    star.className = 'star';
    star.style.left = Math.random() * 100 + '%';
    star.style.top = Math.random() * 100 + '%';
    star.style.animationDelay = Math.random() * 4 + 's';
    const size = Math.random() * 2 + 1;
    star.style.width = size + 'px';
    star.style.height = size + 'px';
    starsContainer.appendChild(star);
  }
</script>

</body>
</html>
