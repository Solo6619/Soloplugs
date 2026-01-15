<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources France — Soloplugs</title>
  <meta name="description" content="Trouve les ressources adaptées à ta situation en France. Écoute, soutien, aide — sans jugement.">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lora:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  
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
    }

    /* ========================================
       BOUTON RETOUR FIXE
       ======================================== */
    
    .btn-retour-accueil {
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

    .btn-retour-accueil:hover {
      background: rgba(212, 165, 116, 0.2);
      border-color: #D4A574;
      color: #D4A574;
      transform: translateX(-3px);
    }

    .btn-retour-accueil svg {
      width: 18px;
      height: 18px;
      stroke: currentColor;
      stroke-width: 2;
      fill: none;
    }

    /* ========================================
       HERO COMPACT
       ======================================== */
    
    .hero-compact {
      width: 100%;
      padding: 6rem 2rem 3rem;
      background: linear-gradient(180deg, rgba(26, 24, 21, 0.3) 0%, rgba(26, 24, 21, 1) 100%),
                  url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1600&q=80') center top / cover no-repeat;
      text-align: center;
    }

    .hero-compact h1 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2rem, 4vw, 2.8rem);
      font-weight: 400;
      color: #FFFFFF;
      text-shadow: 0 2px 30px rgba(0,0,0,0.5);
      margin-bottom: 0.75rem;
    }

    .hero-compact h1 .accent {
      color: #F5D6A8;
    }

    .hero-compact p {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem;
      color: rgba(255, 255, 255, 0.85);
      max-width: 500px;
      margin: 0 auto;
    }

    /* ========================================
       CONTENEUR PRINCIPAL
       ======================================== */
    
    .ressources-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 3rem 1.5rem 4rem;
    }

    /* ========================================
       ÉTAPES
       ======================================== */
    
    .etape {
      display: none;
      animation: fadeIn 0.4s ease;
    }

    .etape.active {
      display: block;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .etape-question {
      text-align: center;
      margin-bottom: 2rem;
    }

    .etape-question h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.75rem;
      color: #FFFFFF;
      margin-bottom: 0.5rem;
    }

    .etape-question p {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      color: #A9A29B;
    }

    /* Bouton retour interne */
    .btn-retour {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: #A9A29B;
      background: rgba(45, 42, 38, 0.6);
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 20px;
      cursor: pointer;
      padding: 0.5rem 1rem;
      margin-bottom: 2rem;
      transition: all 0.2s ease;
    }

    .btn-retour:hover {
      color: #E8E4DF;
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.15);
    }

    .btn-retour svg {
      width: 18px;
      height: 18px;
      stroke: currentColor;
      stroke-width: 2;
      fill: none;
    }

    /* ========================================
       CARTES DE CHOIX
       ======================================== */
    
    .choix-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.25rem;
      margin-bottom: 2rem;
    }

    .choix-card {
      background: rgba(45, 42, 38, 0.6);
      border: 2px solid rgba(212, 165, 116, 0.2);
      border-radius: 16px;
      padding: 1.75rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .choix-card:hover {
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.15);
      transform: translateY(-4px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .choix-card.selected {
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.2);
    }

    .choix-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      display: block;
    }

    .choix-titre {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.2rem;
      font-weight: 600;
      color: #E8E4DF;
      margin-bottom: 0.5rem;
      display: block;
    }

    .choix-desc {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: #A9A29B;
      line-height: 1.5;
    }

    /* ========================================
       RÉSULTATS
       ======================================== */
    
    .resultats-header {
      text-align: center;
      margin-bottom: 2.5rem;
      padding: 2rem;
      background: rgba(212, 165, 116, 0.1);
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 16px;
    }

    .resultats-header h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.5rem;
      color: #FFFFFF;
      margin-bottom: 0.75rem;
    }

    .resultats-localisation {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: #D4A574;
      margin-bottom: 0.75rem;
    }

    .resultats-header p {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      color: #A9A29B;
      line-height: 1.6;
    }

    .resultats-section {
      margin-bottom: 2.5rem;
    }

    .resultats-section h3 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.25rem;
      color: #E8E4DF;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Cartes ressources */
    .ressource-cards {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .ressource-card {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 1.25rem;
      background: rgba(45, 42, 38, 0.6);
      border-radius: 12px;
      text-decoration: none;
      border: 1px solid rgba(212, 165, 116, 0.15);
      transition: all 0.25s ease;
    }

    .ressource-card:hover {
      border-color: #D4A574;
      transform: translateX(4px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .ressource-card-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 22px;
    }

    .ressource-card-icon.ecoute {
      background: linear-gradient(135deg, #E8C9A8 0%, #D4A574 100%);
    }

    .ressource-card-icon.sante {
      background: linear-gradient(135deg, #C5E8C0 0%, #7ABD70 100%);
    }

    .ressource-card-icon.urgence {
      background: linear-gradient(135deg, #E8B8B8 0%, #C88080 100%);
    }

    .ressource-card-icon.lecture {
      background: linear-gradient(135deg, #B8D4E8 0%, #80A8C8 100%);
    }

    .ressource-card-icon.communaute {
      background: linear-gradient(135deg, #D8C8E8 0%, #A888C8 100%);
    }

    .ressource-card-info {
      flex: 1;
    }

    .ressource-card-nom {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      font-weight: 600;
      color: #E8E4DF;
      display: block;
      margin-bottom: 2px;
    }

    .ressource-card-numero {
      font-family: 'Inter', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: #F5D6A8;
      display: block;
      letter-spacing: 0.5px;
    }

    .ressource-card-desc {
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: #A9A29B;
      display: block;
      margin-top: 4px;
    }

    .ressource-card-arrow {
      width: 20px;
      height: 20px;
      stroke: #7A726A;
      stroke-width: 2;
      flex-shrink: 0;
      transition: all 0.2s ease;
    }

    .ressource-card:hover .ressource-card-arrow {
      transform: translateX(4px);
      stroke: #D4A574;
    }

    /* Encart spécial */
    .encart-special {
      background: rgba(212, 165, 116, 0.1);
      border-radius: 12px;
      padding: 1.5rem;
      border-left: 4px solid #D4A574;
      margin-top: 2rem;
    }

    .encart-special p {
      font-family: 'Lora', Georgia, serif;
      font-size: 0.95rem;
      font-style: italic;
      color: #E8E4DF;
      line-height: 1.6;
      margin: 0;
    }

    /* Bouton recommencer */
    .btn-recommencer {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: #E8E4DF;
      background: rgba(45, 42, 38, 0.6);
      border: 2px solid rgba(212, 165, 116, 0.3);
      border-radius: 30px;
      padding: 0.75rem 1.5rem;
      cursor: pointer;
      transition: all 0.25s ease;
      margin-top: 2rem;
    }

    .btn-recommencer:hover {
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.15);
    }

    /* ========================================
       FOOTER
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

    /* ========================================
       RESPONSIVE
       ======================================== */
    
    @media (max-width: 768px) {
      .btn-retour-accueil {
        top: 1rem;
        left: 1rem;
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
      }

      .hero-compact {
        padding: 5rem 1.5rem 2rem;
      }

      .choix-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 480px) {
      .hero-compact h1 {
        font-size: 1.8rem;
      }

      .choix-card {
        padding: 1.5rem;
      }

      .ressource-card {
        padding: 1rem;
      }

      .ressource-card-icon {
        width: 44px;
        height: 44px;
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

<!-- Bouton retour vers ressources.php -->
<a href="ressources.php" class="btn-retour-accueil">
  <svg viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  Retour
</a>

<!-- Hero compact -->
<header class="hero-compact">
  <h1>Ressources <span class="accent">France</span></h1>
  <p>Des outils, de l'écoute, de l'inspiration — selon ce dont tu as besoin.</p>
</header>

<main class="ressources-container">

  <!-- ============================================================
       ÉTAPE 1 : COMMENT ÇA VA ?
       ============================================================ -->
  <div class="etape active" id="etape1">
    <div class="etape-question">
      <h2>Comment ça va en ce moment ?</h2>
      <p>Choisis ce qui correspond le mieux à ton état actuel.</p>
    </div>
    
    <div class="choix-grid">
      <div class="choix-card" onclick="choisirEtat('bien')">
        <span class="choix-icon">🌿</span>
        <span class="choix-titre">Je vais bien</span>
        <span class="choix-desc">Je cherche à m'épanouir, explorer, m'inspirer.</span>
      </div>
      
      <div class="choix-card" onclick="choisirEtat('moyen')">
        <span class="choix-icon">🌤️</span>
        <span class="choix-titre">Ça pourrait aller mieux</span>
        <span class="choix-desc">J'aurais besoin d'écoute ou de soutien.</span>
      </div>
      
      <div class="choix-card" onclick="choisirEtat('difficile')">
        <span class="choix-icon">🌧️</span>
        <span class="choix-titre">C'est difficile</span>
        <span class="choix-desc">J'ai besoin d'aide maintenant.</span>
      </div>
    </div>
  </div>

  <!-- ============================================================
       ÉTAPE 2 : RÉSULTATS
       ============================================================ -->
  <div class="etape" id="etape2">
    <button class="btn-retour" onclick="retourEtape1()">
      <svg viewBox="0 0 24 24" fill="none">
        <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Retour
    </button>
    
    <div id="resultats-contenu"></div>
    
    <div style="text-align: center;">
      <button class="btn-recommencer" onclick="recommencer()">
        🔄 Recommencer
      </button>
    </div>
  </div>

</main>

<!-- Footer -->
<footer class="footer-minimal">
  <a href="index.php" class="footer-logo">
    <span class="solo">Solo</span><span class="plugs">plugs</span>
  </a>
  <p class="footer-tagline">La voix de la solitude</p>
  <p class="footer-copy">&copy; <?php echo date('Y'); ?> Soloplugs — Tous droits réservés</p>
</footer>

<script>
// ==========================================
// ÉTAT DE L'APPLICATION
// ==========================================
let etatChoisi = '';

// ==========================================
// RESSOURCES FRANCE
// ==========================================

const ressourcesFrance = {
  bien: {
    titre: "Pour nourrir ta solitude",
    message: "Voici des ressources pour explorer, t'inspirer et t'épanouir dans ta solitude choisie.",
    sections: [
      {
        titre: "📚 Lectures & podcasts",
        items: [
          { nom: "Magazine Soloplugs", desc: "Articles, témoignages et réflexions", lien: "magazine.php", icon: "lecture" },
          { nom: "France Culture — Podcasts", desc: "Émissions sur la vie intérieure", lien: "https://www.franceculture.fr/podcasts", icon: "lecture" },
          { nom: "Les Chemins de la philosophie", desc: "Réflexions sur l'existence", lien: "https://www.radiofrance.fr/franceculture/podcasts/les-chemins-de-la-philosophie", icon: "lecture" }
        ]
      },
      {
        titre: "🧭 Explorer les thèmes",
        items: [
          { nom: "Vivre solo", desc: "L'art de vivre seul·e au quotidien", lien: "7_themes/vivre-solo.php", icon: "communaute" },
          { nom: "Voyages solo", desc: "Partir seul·e, revenir transformé·e", lien: "7_themes/voyages-solo.php", icon: "communaute" },
          { nom: "Sorties & loisirs", desc: "Sortir seul·e sans se sentir seul·e", lien: "7_themes/sorties-loisirs-rencontres.php", icon: "communaute" }
        ]
      },
      {
        titre: "🌿 Ressources communautaires",
        items: [
          { nom: "France Bénévolat", desc: "Trouver une activité sociale enrichissante", lien: "https://www.francebenevolat.org", icon: "communaute" },
          { nom: "Meetup France", desc: "Rencontrer des gens avec les mêmes intérêts", lien: "https://www.meetup.com/fr-FR/", icon: "communaute" }
        ]
      }
    ],
    encart: "« La solitude est le lieu où l'on se retrouve, pas où l'on se perd. »"
  },
  moyen: {
    titre: "Pour trouver du soutien",
    message: "Tu n'as pas à traverser ça seul·e. Voici des oreilles attentives et des espaces pour parler.",
    sections: [
      {
        titre: "💬 Lignes d'écoute",
        items: [
          { nom: "SOS Amitié", numero: "09 72 39 40 50", desc: "Écoute 24h/24 — Anonyme et gratuit", lien: "tel:0972394050", icon: "ecoute" },
          { nom: "Croix-Rouge Écoute", numero: "0 800 858 858", desc: "Gratuit — Lun-ven 9h-19h", lien: "tel:0800858858", icon: "ecoute" },
          { nom: "SOS Crise", numero: "0 800 19 00 00", desc: "Professionnels de santé — 7j/7", lien: "tel:0800190000", icon: "ecoute" }
        ]
      },
      {
        titre: "👦 Pour les jeunes",
        items: [
          { nom: "Fil Santé Jeunes", numero: "0 800 235 236", desc: "12-25 ans — Gratuit 7j/7 9h-23h", lien: "tel:0800235236", icon: "ecoute" },
          { nom: "Nightline France", desc: "Étudiants — 21h à 2h30", lien: "https://www.nightline.fr", icon: "ecoute" }
        ]
      },
      {
        titre: "👴 Pour les aînés",
        items: [
          { nom: "Solitud'écoute", numero: "0 800 47 47 88", desc: "Petits Frères des Pauvres — Gratuit", lien: "tel:0800474788", icon: "ecoute" },
          { nom: "Au bout du fil", numero: "0 800 47 47 88", desc: "Appels amicaux pour les plus de 50 ans", lien: "https://www.auboutdufil.org", icon: "ecoute" }
        ]
      },
      {
        titre: "🌿 Ressources communautaires",
        items: [
          { nom: "Les Petits Frères des Pauvres", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreresdespauvres.fr", icon: "communaute" },
          { nom: "Psycom", desc: "Information sur la santé mentale", lien: "https://www.psycom.org", icon: "communaute" }
        ]
      }
    ],
    encart: "« Demander de l'aide, c'est faire preuve de courage, pas de faiblesse. »"
  },
  difficile: {
    titre: "De l'aide est là pour toi",
    message: "Ce que tu vis est réel, et tu mérites d'être accompagné·e. Ces lignes sont disponibles maintenant, gratuitement et sans jugement.",
    sections: [
      {
        titre: "🆘 Aide immédiate — 24/7",
        items: [
          { nom: "Numéro national prévention suicide", numero: "3114", desc: "24h/24 — Gratuit et confidentiel", lien: "tel:3114", icon: "urgence" },
          { nom: "Suicide Écoute", numero: "01 45 39 40 00", desc: "24h/24 — Gratuit", lien: "tel:0145394000", icon: "urgence" },
          { nom: "SOS Amitié", numero: "09 72 39 40 50", desc: "Écoute 24h/24 — Anonyme", lien: "tel:0972394050", icon: "urgence" }
        ]
      },
      {
        titre: "🩺 Urgences médicales",
        items: [
          { nom: "SAMU", numero: "15", desc: "Urgence médicale", lien: "tel:15", icon: "sante" },
          { nom: "Numéro européen", numero: "112", desc: "Urgences — Toute l'Europe", lien: "tel:112", icon: "sante" },
          { nom: "Urgences SMS", numero: "114", desc: "Pour personnes sourdes/malentendantes", lien: "sms:114", icon: "sante" }
        ]
      },
      {
        titre: "👦 Pour les jeunes",
        items: [
          { nom: "Fil Santé Jeunes", numero: "0 800 235 236", desc: "12-25 ans — Gratuit 7j/7 9h-23h", lien: "tel:0800235236", icon: "ecoute" },
          { nom: "Le Refuge", numero: "06 31 59 69 50", desc: "Jeunes LGBTI+ en détresse — 7j/7", lien: "tel:0631596950", icon: "ecoute" },
          { nom: "e-Enfance", numero: "3018", desc: "Harcèlement en ligne — Gratuit", lien: "tel:3018", icon: "ecoute" }
        ]
      },
      {
        titre: "💬 Écoute spécialisée",
        items: [
          { nom: "Viols Femmes Informations", numero: "0 800 05 95 95", desc: "Écoute spécialisée — Gratuit", lien: "tel:0800059595", icon: "ecoute" },
          { nom: "SOS Homophobie", numero: "01 48 06 42 41", desc: "Écoute LGBTI+", lien: "tel:0148064241", icon: "ecoute" },
          { nom: "Violences Femmes Info", numero: "3919", desc: "Victimes de violences — Gratuit", lien: "tel:3919", icon: "ecoute" }
        ]
      }
    ],
    encart: "« Tu n'as pas à aller bien pour mériter de l'aide. Tu mérites de l'aide pour aller mieux. »"
  }
};

// ==========================================
// NAVIGATION
// ==========================================

function choisirEtat(etat) {
  etatChoisi = etat;
  document.getElementById('etape1').classList.remove('active');
  document.getElementById('etape2').classList.add('active');
  afficherResultats();
}

function retourEtape1() {
  document.getElementById('etape2').classList.remove('active');
  document.getElementById('etape1').classList.add('active');
}

function recommencer() {
  etatChoisi = '';
  document.getElementById('etape2').classList.remove('active');
  document.getElementById('etape1').classList.add('active');
}

// ==========================================
// AFFICHAGE DES RÉSULTATS
// ==========================================

function afficherResultats() {
  const data = ressourcesFrance[etatChoisi];
  const container = document.getElementById('resultats-contenu');
  
  let html = `
    <div class="resultats-header">
      
      <h2>${data.titre}</h2>
      <p>${data.message}</p>
    </div>
  `;
  
  // Sections de ressources
  data.sections.forEach(section => {
    html += `
      <div class="resultats-section">
        <h3>${section.titre}</h3>
        <div class="ressource-cards">
    `;
    
    section.items.forEach(item => {
      html += creerCarteRessource(item);
    });
    
    html += `
        </div>
      </div>
    `;
  });
  
  // Encart citation
  html += `
    <div class="encart-special">
      <p>${data.encart}</p>
    </div>
  `;
  
  container.innerHTML = html;
}

function creerCarteRessource(item) {
  const isExternal = item.lien.startsWith('http') || item.lien.startsWith('tel:') || item.lien.startsWith('sms:');
  const target = isExternal ? 'target="_blank" rel="noopener"' : '';
  
  return `
    <a href="${item.lien}" class="ressource-card" ${target}>
      <div class="ressource-card-icon ${item.icon || 'communaute'}">
        ${getIconEmoji(item.icon)}
      </div>
      <div class="ressource-card-info">
        <span class="ressource-card-nom">${item.nom}</span>
        ${item.numero ? `<span class="ressource-card-numero">${item.numero}</span>` : ''}
        <span class="ressource-card-desc">${item.desc}</span>
      </div>
      <svg class="ressource-card-arrow" viewBox="0 0 24 24" fill="none">
        <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  `;
}

function getIconEmoji(type) {
  const icons = {
    ecoute: '💬',
    sante: '🩺',
    urgence: '🆘',
    lecture: '📖',
    communaute: '🤝'
  };
  return icons[type] || '📌';
}

// Ancre #aide-urgence
if (window.location.hash === '#aide-urgence') {
  choisirEtat('difficile');
}
</script>

</body>
</html>
