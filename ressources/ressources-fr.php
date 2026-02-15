<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources France — Soloplugs</title>
  <meta name="description" content="Trouve les ressources adaptées à ta situation en France. Écoute, soutien, aide — sans jugement.">
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lora:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    
    body {
      background: linear-gradient(180deg, #1a1815 0%, #2d2a26 50%, #1a1815 100%);
      min-height: 100vh;
      color: #E8E4DF;
      font-family: 'Lora', Georgia, serif;
      line-height: 1.8;
    }

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

    .hero-compact h1 .accent { color: #F5D6A8; }

    .hero-compact p {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem;
      color: rgba(255, 255, 255, 0.85);
      max-width: 500px;
      margin: 0 auto;
    }

    .ressources-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 3rem 1.5rem 4rem;
    }

    .etape {
      display: none;
      animation: fadeIn 0.4s ease;
    }

    .etape.active { display: block; }

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

    /* LOCALISATION */
    .localisation-container {
      max-width: 500px;
      margin: 0 auto;
    }

    .search-wrapper {
      position: relative;
      margin-bottom: 1rem;
    }

    .search-input {
      width: 100%;
      padding: 1rem 3rem 1rem 1.25rem;
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      border: 2px solid rgba(212, 165, 116, 0.3);
      border-radius: 12px;
      background: rgba(45, 42, 38, 0.8);
      color: #E8E4DF;
      transition: all 0.25s ease;
    }

    .search-input:focus {
      outline: none;
      border-color: #D4A574;
      box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.2);
    }

    .search-input::placeholder { color: #7A726A; }

    .search-icon {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      width: 22px;
      height: 22px;
      stroke: #7A726A;
      stroke-width: 2;
      pointer-events: none;
    }

    .search-hint {
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: #7A726A;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .search-hint span { color: #D4A574; }

    .suggestions-list {
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background: #2d2a26;
      border: 2px solid rgba(212, 165, 116, 0.3);
      border-top: none;
      border-radius: 0 0 12px 12px;
      max-height: 250px;
      overflow-y: auto;
      z-index: 100;
      display: none;
    }

    .suggestions-list.active { display: block; }

    .suggestion-item {
      padding: 0.85rem 1.25rem;
      cursor: pointer;
      transition: background 0.15s ease;
      border-bottom: 1px solid rgba(212, 165, 116, 0.1);
    }

    .suggestion-item:last-child { border-bottom: none; }

    .suggestion-item:hover,
    .suggestion-item.highlighted {
      background: rgba(212, 165, 116, 0.15);
    }

    .suggestion-item-ville {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: #E8E4DF;
      display: block;
    }

    .suggestion-item-region {
      font-family: 'Inter', sans-serif;
      font-size: 0.8rem;
      color: #7A726A;
    }

    .not-found-container {
      text-align: center;
      padding: 2rem;
      background: rgba(45, 42, 38, 0.5);
      border-radius: 12px;
      margin-top: 1rem;
      display: none;
    }

    .not-found-container.active { display: block; }

    .not-found-icon { font-size: 2.5rem; margin-bottom: 0.75rem; }

    .not-found-message {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      color: #A9A29B;
      margin-bottom: 1.5rem;
    }

    .not-found-options {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.75rem;
    }

    .btn-geoloc, .btn-general {
      padding: 0.75rem 1.5rem;
      border-radius: 25px;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      cursor: pointer;
      transition: all 0.25s ease;
      border: none;
    }

    .btn-geoloc {
      background: linear-gradient(135deg, #D4A574, #C49464);
      color: #1a1815;
      font-weight: 600;
    }

    .btn-geoloc:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(212, 165, 116, 0.4);
    }

    .btn-general {
      background: rgba(45, 42, 38, 0.8);
      color: #E8E4DF;
      border: 2px solid rgba(212, 165, 116, 0.3);
    }

    .btn-general:hover {
      border-color: #D4A574;
      background: rgba(212, 165, 116, 0.15);
    }

    .ou-divider {
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: #7A726A;
      margin: 0.5rem 0;
    }

    /* RÉSULTATS */
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

    .resultats-section { margin-bottom: 2.5rem; }

    .resultats-section h3 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.25rem;
      color: #E8E4DF;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

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

    .ressource-card-icon.ecoute { background: linear-gradient(135deg, #E8C9A8 0%, #D4A574 100%); }
    .ressource-card-icon.sante { background: linear-gradient(135deg, #C5E8C0 0%, #7ABD70 100%); }
    .ressource-card-icon.urgence { background: linear-gradient(135deg, #E8B8B8 0%, #C88080 100%); }
    .ressource-card-icon.lecture { background: linear-gradient(135deg, #B8D4E8 0%, #80A8C8 100%); }
    .ressource-card-icon.communaute { background: linear-gradient(135deg, #D8C8E8 0%, #A888C8 100%); }

    .ressource-card-info { flex: 1; }

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
    }

    .ressource-card-arrow {
      width: 20px;
      height: 20px;
      stroke: #7A726A;
      stroke-width: 2;
      flex-shrink: 0;
      transition: all 0.25s ease;
    }

    .ressource-card:hover .ressource-card-arrow {
      stroke: #D4A574;
      transform: translateX(4px);
    }

    .encart-special {
      margin-top: 3rem;
      padding: 2rem;
      background: linear-gradient(135deg, rgba(212, 165, 116, 0.15) 0%, rgba(212, 165, 116, 0.05) 100%);
      border-left: 4px solid #D4A574;
      border-radius: 0 12px 12px 0;
    }

    .encart-special p {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem;
      font-style: italic;
      color: #E8E4DF;
      line-height: 1.7;
    }

    .btn-recommencer {
      margin-top: 2rem;
      padding: 0.75rem 1.5rem;
      background: transparent;
      border: 2px solid rgba(212, 165, 116, 0.3);
      border-radius: 25px;
      color: #A9A29B;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .btn-recommencer:hover {
      border-color: #D4A574;
      color: #D4A574;
      background: rgba(212, 165, 116, 0.1);
    }

    .footer-minimal {
      text-align: center;
      padding: 3rem 1.5rem;
      border-top: 1px solid rgba(212, 165, 116, 0.1);
    }

    .footer-logo {
      text-decoration: none;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.5rem;
    }

    .footer-logo .solo { color: #E8E4DF; }
    .footer-logo .plugs { color: #D4A574; }

    .footer-tagline {
      font-family: 'Lora', Georgia, serif;
      font-size: 0.9rem;
      font-style: italic;
      color: #7A726A;
      margin: 0.5rem 0 1rem;
    }

    .footer-copy {
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem;
      color: #5C554E;
    }

    @media (max-width: 768px) {
      .btn-retour-accueil {
        top: 1rem;
        left: 1rem;
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
      }
      .hero-compact { padding: 5rem 1.5rem 2rem; }
    }

    @media (max-width: 480px) {
      .hero-compact h1 { font-size: 1.8rem; }
      .ressource-card { padding: 1rem; }
      .ressource-card-icon { width: 44px; height: 44px; font-size: 18px; }
    }
  </style>
</head>
<body>

<?php
  $theme = isset($_GET['theme']) ? htmlspecialchars($_GET['theme']) : '';
  $themeParam = $theme ? '?theme=' . $theme : '';
  $themesMap = [
    'vivre-solo' => 'Vivre Solo', 'ado-solo' => 'Ado Solo', 'parent-solo' => 'Parent Solo',
    'vieillir-solo' => 'Vieillir Solo', 'voyages-solo' => 'Voyages Solo',
    'sorties-loisirs' => 'Sorties & Loisirs', 'separation-deuil' => 'Séparation & Deuil',
  ];
  $themeNom = isset($themesMap[$theme]) ? $themesMap[$theme] : '';
?>

<a href="ressources.php<?php echo $themeParam; ?>" class="btn-retour-accueil">
  <svg viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  Choix du pays
</a>

<header class="hero-compact">
  <h1>Ressources <span class="accent">France</span><?php echo $themeNom ? ' — ' . $themeNom : ''; ?></h1>
  <p>Des outils, de l'écoute, de l'inspiration — selon ce dont tu as besoin.</p>
</header>

<main class="ressources-container">

  <!-- ÉTAPE 1 : LOCALISATION -->
  <div class="etape active" id="etape1">
    <div class="etape-question">
      <h2>Où es-tu en France ?</h2>
      <p>Pour trouver les ressources près de chez toi.</p>
    </div>
    
    <div class="localisation-container">
      <div class="search-wrapper">
        <input 
          type="text" 
          class="search-input" 
          id="search-localisation"
          placeholder="Ex: 75001 ou Lyon"
          autocomplete="off"
        >
        <svg class="search-icon" viewBox="0 0 24 24" fill="none">
          <circle cx="11" cy="11" r="8" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 21l-4.35-4.35" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div class="suggestions-list" id="suggestions-list"></div>
      </div>
      <p class="search-hint">
        💡 Entre ton <span>code postal</span> ou le <span>nom de ta ville</span>
      </p>
      
      <div class="not-found-container" id="not-found">
        <div class="not-found-icon">😕</div>
        <p class="not-found-message">On n'a pas trouvé cette localisation</p>
        <div class="not-found-options">
          <button class="btn-geoloc" onclick="utiliserGeolocalisation()">
            📍 Utiliser ma position
          </button>
          <span class="ou-divider">ou</span>
          <button class="btn-general" onclick="afficherRessourcesGenerales()">
            🇫🇷 Ressources nationales France
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ÉTAPE 2 : RÉSULTATS -->
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

<footer class="footer-minimal">
  <a href="index.php" class="footer-logo">
    <span class="solo">Solo</span><span class="plugs">plugs</span>
  </a>
  <p class="footer-tagline">La voix de la solitude</p>
  <p class="footer-copy">&copy; <?php echo date('Y'); ?> Soloplugs — Tous droits réservés</p>
</footer>

<script>
// ==========================================
// ÉTAT
// ==========================================
let regionChoisie = '';
let villeChoisie = '';

// Thème actif
const themeActif = '<?php echo $theme; ?>';

// Ressources spécifiques par thème (France)
const ressourcesParTheme = {
  'vivre-solo': { titre: '🏠 Vivre Solo', items: [
    { nom: 'Croix-Rouge écoute', numero: '0 800 858 858', desc: 'Solitude, isolement — Gratuit 7j/7', lien: 'tel:0800858858', icon: 'ecoute' },
    { nom: 'Les Petits Frères des Pauvres', desc: 'Accompagnement des personnes isolées', lien: 'https://www.petitsfreresdespauvres.fr', icon: 'communaute' }
  ]},
  'ado-solo': { titre: '🧑 Ado Solo', items: [
    { nom: 'Fil Santé Jeunes', numero: '0 800 235 236', desc: 'Anonyme et gratuit — 9h-23h', lien: 'tel:0800235236', icon: 'ecoute' },
    { nom: 'Enf-Ados en difficulté', numero: '119', desc: 'Allô Enfance en danger', lien: 'tel:119', icon: 'urgence' }
  ]},
  'parent-solo': { titre: '💜 Parent Solo', items: [
    { nom: 'Allô Parents en crise', numero: '0 805 382 300', desc: 'Soutien parental gratuit', lien: 'tel:0805382300', icon: 'ecoute' },
    { nom: 'CAF — Aides monoparentales', desc: 'ASF, RSA majoré, aide au logement', lien: 'https://www.caf.fr', icon: 'communaute' }
  ]},
  'vieillir-solo': { titre: '🍃 Vieillir Solo', items: [
    { nom: 'Solitud\'Ecoute', numero: '0 800 47 47 88', desc: 'Pour les + de 50 ans — Gratuit', lien: 'tel:0800474788', icon: 'ecoute' },
    { nom: 'Les Petits Frères des Pauvres', desc: 'Accompagnement des aînés isolés', lien: 'https://www.petitsfreresdespauvres.fr', icon: 'communaute' }
  ]},
  'voyages-solo': { titre: '✈️ Voyages Solo', items: [
    { nom: 'Ariane (Ministère)', desc: 'Inscription voyageurs à l\'\u00e9tranger', lien: 'https://pastel.diplomatie.gouv.fr/fildariane', icon: 'communaute' },
    { nom: 'Centre de crise', numero: '+33 1 53 59 11 00', desc: 'Urgence Français à l\'\u00e9tranger', lien: 'tel:+33153591100', icon: 'urgence' }
  ]},
  'sorties-loisirs': { titre: '🎉 Sorties & Loisirs', items: [
    { nom: 'On Va Sortir', desc: 'Sorties et activités entre solos', lien: 'https://www.onvasortir.com', icon: 'communaute' },
    { nom: 'Meetup France', desc: 'Groupes de loisirs et rencontres', lien: 'https://www.meetup.com/fr-FR', icon: 'communaute' }
  ]},
  'separation-deuil': { titre: '🕊️ Séparation & Deuil', items: [
    { nom: 'Écoute Deuil', numero: '01 45 83 15 15', desc: 'Accompagnement du deuil', lien: 'tel:0145831515', icon: 'ecoute' },
    { nom: 'Vivre Son Deuil', desc: 'Groupes de parole et soutien', lien: 'https://www.vivresondeuil.asso.fr', icon: 'communaute' }
  ]}
};

// ==========================================
// DONNÉES FRANCE - RÉGIONS
// ==========================================

const regionsFrance = {
  "idf": {
    nom: "Île-de-France",
    codesPostaux: ["75", "77", "78", "91", "92", "93", "94", "95"],
    villes: ["Paris", "Boulogne-Billancourt", "Saint-Denis", "Argenteuil", "Montreuil", "Nanterre", "Créteil", "Versailles", "Vincennes", "Neuilly-sur-Seine", "Levallois-Perret", "Issy-les-Moulineaux"],
    ressources: {
      ecoute: [
        { nom: "Fil Santé Jeunes", numero: "0 800 235 236", desc: "Anonyme et gratuit — 9h-23h", lien: "tel:0800235236" }
      ],
      communautaire: [
        { nom: "Croix-Rouge écoute", numero: "0 800 858 858", desc: "Solitude, isolement — Gratuit", lien: "tel:0800858858" }
      ]
    }
  },
  "ara": {
    nom: "Auvergne-Rhône-Alpes",
    codesPostaux: ["01", "03", "07", "15", "26", "38", "42", "43", "63", "69", "73", "74"],
    villes: ["Lyon", "Grenoble", "Saint-Étienne", "Villeurbanne", "Clermont-Ferrand", "Annecy", "Valence", "Chambéry", "Bourg-en-Bresse", "Vénissieux"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Lyon", numero: "04 78 29 88 88", desc: "Écoute 24h/24", lien: "tel:0478298888" }
      ],
      communautaire: []
    }
  },
  "naq": {
    nom: "Nouvelle-Aquitaine",
    codesPostaux: ["16", "17", "19", "23", "24", "33", "40", "47", "64", "79", "86", "87"],
    villes: ["Bordeaux", "Limoges", "Poitiers", "La Rochelle", "Pau", "Mérignac", "Pessac", "Bayonne", "Angoulême", "Brive-la-Gaillarde"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Bordeaux", numero: "05 56 44 22 22", desc: "Écoute jour et nuit", lien: "tel:0556442222" }
      ],
      communautaire: []
    }
  },
  "occ": {
    nom: "Occitanie",
    codesPostaux: ["09", "11", "12", "30", "31", "32", "34", "46", "48", "65", "66", "81", "82"],
    villes: ["Toulouse", "Montpellier", "Nîmes", "Perpignan", "Béziers", "Carcassonne", "Albi", "Tarbes", "Narbonne", "Sète"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Toulouse", numero: "05 61 80 80 80", desc: "24h/24, 7j/7", lien: "tel:0561808080" }
      ],
      communautaire: []
    }
  },
  "paca": {
    nom: "Provence-Alpes-Côte d'Azur",
    codesPostaux: ["04", "05", "06", "13", "83", "84"],
    villes: ["Marseille", "Nice", "Toulon", "Aix-en-Provence", "Avignon", "Cannes", "Antibes", "La Seyne-sur-Mer", "Hyères", "Arles"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Marseille", numero: "04 91 76 10 10", desc: "Écoute 24h/24", lien: "tel:0491761010" }
      ],
      communautaire: []
    }
  },
  "hdf": {
    nom: "Hauts-de-France",
    codesPostaux: ["02", "59", "60", "62", "80"],
    villes: ["Lille", "Amiens", "Roubaix", "Tourcoing", "Dunkerque", "Calais", "Douai", "Valenciennes", "Lens", "Beauvais"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Nord", numero: "03 20 55 77 77", desc: "Écoute jour et nuit", lien: "tel:0320557777" }
      ],
      communautaire: []
    }
  },
  "ges": {
    nom: "Grand Est",
    codesPostaux: ["08", "10", "51", "52", "54", "55", "57", "67", "68", "88"],
    villes: ["Strasbourg", "Reims", "Metz", "Mulhouse", "Nancy", "Colmar", "Troyes", "Charleville-Mézières", "Épinal", "Thionville"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Strasbourg", numero: "03 88 22 33 33", desc: "24h/24", lien: "tel:0388223333" }
      ],
      communautaire: []
    }
  },
  "pdl": {
    nom: "Pays de la Loire",
    codesPostaux: ["44", "49", "53", "72", "85"],
    villes: ["Nantes", "Angers", "Le Mans", "Saint-Nazaire", "La Roche-sur-Yon", "Cholet", "Laval", "Saumur", "Saint-Herblain", "Rezé"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Nantes", numero: "02 40 08 03 33", desc: "Écoute", lien: "tel:0240080333" }
      ],
      communautaire: []
    }
  },
  "bre": {
    nom: "Bretagne",
    codesPostaux: ["22", "29", "35", "56"],
    villes: ["Rennes", "Brest", "Quimper", "Lorient", "Vannes", "Saint-Brieuc", "Saint-Malo", "Lanester", "Fougères", "Concarneau"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Bretagne", numero: "02 99 30 30 30", desc: "Écoute", lien: "tel:0299303030" }
      ],
      communautaire: []
    }
  },
  "nor": {
    nom: "Normandie",
    codesPostaux: ["14", "27", "50", "61", "76"],
    villes: ["Rouen", "Le Havre", "Caen", "Cherbourg", "Évreux", "Dieppe", "Alençon", "Lisieux", "Fécamp", "Honfleur"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Rouen", numero: "02 35 03 20 20", desc: "Écoute", lien: "tel:0235032020" }
      ],
      communautaire: []
    }
  },
  "bfc": {
    nom: "Bourgogne-Franche-Comté",
    codesPostaux: ["21", "25", "39", "58", "70", "71", "89", "90"],
    villes: ["Dijon", "Besançon", "Belfort", "Chalon-sur-Saône", "Auxerre", "Nevers", "Mâcon", "Montbéliard", "Sens", "Le Creusot"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Dijon", numero: "03 80 67 15 15", desc: "Écoute", lien: "tel:0380671515" }
      ],
      communautaire: []
    }
  },
  "cvl": {
    nom: "Centre-Val de Loire",
    codesPostaux: ["18", "28", "36", "37", "41", "45"],
    villes: ["Tours", "Orléans", "Bourges", "Blois", "Chartres", "Châteauroux", "Dreux", "Joué-lès-Tours", "Vierzon", "Olivet"],
    ressources: {
      ecoute: [
        { nom: "SOS Amitié Tours", numero: "02 47 54 54 54", desc: "Écoute", lien: "tel:0247545454" }
      ],
      communautaire: []
    }
  },
  "cor": {
    nom: "Corse",
    codesPostaux: ["20", "2A", "2B"],
    villes: ["Ajaccio", "Bastia", "Porto-Vecchio", "Corte", "Calvi", "Propriano", "Bonifacio", "Sartène"],
    ressources: {
      ecoute: [],
      communautaire: []
    }
  },
  "general": {
    nom: "France",
    ressources: {
      ecoute: [],
      communautaire: []
    }
  }
};

// Ressources nationales
const ressourcesNationales = {
  urgence: [
    { nom: "Numéro national de prévention du suicide", numero: "3114", desc: "24h/24, 7j/7 — Gratuit et confidentiel", lien: "tel:3114", icon: "urgence" },
    { nom: "SOS Amitié", numero: "09 72 39 40 50", desc: "Écoute 24h/24, 7j/7", lien: "tel:0972394050", icon: "urgence" }
  ],
  ecoute: [
    { nom: "Fil Santé Jeunes", numero: "0 800 235 236", desc: "Anonyme, gratuit — 9h-23h", lien: "tel:0800235236", icon: "ecoute" },
    { nom: "Croix-Rouge écoute", numero: "0 800 858 858", desc: "Solitude, isolement — Gratuit 7j/7", lien: "tel:0800858858", icon: "ecoute" },
    { nom: "Solitud'écoute", numero: "0 800 47 47 88", desc: "Pour les + de 50 ans — Gratuit", lien: "tel:0800474788", icon: "ecoute" }
  ],
  deuil: [
    { nom: "Écoute Deuil", numero: "01 45 87 87 87", desc: "Accompagnement après un deuil", lien: "tel:0145878787", icon: "ecoute" },
    { nom: "Vivre son deuil", desc: "Groupes de parole et accompagnement", lien: "https://www.vivresondeuil.asso.fr", icon: "communaute" }
  ],
  reference: [
    { nom: "Santé Info Droits", numero: "01 53 62 40 30", desc: "Questions juridiques santé", lien: "tel:0153624030", icon: "communaute" }
  ]
};

// ==========================================
// NAVIGATION
// ==========================================

function retourEtape1() {
  document.getElementById('etape2').classList.remove('active');
  document.getElementById('etape1').classList.add('active');
  document.getElementById('not-found').classList.remove('active');
  document.getElementById('search-localisation').value = '';
}

function recommencer() {
  regionChoisie = '';
  villeChoisie = '';
  document.getElementById('etape2').classList.remove('active');
  document.getElementById('etape1').classList.add('active');
  document.getElementById('search-localisation').value = '';
  document.getElementById('not-found').classList.remove('active');
}

// ==========================================
// RECHERCHE LOCALISATION
// ==========================================

const searchInput = document.getElementById('search-localisation');
const suggestionsList = document.getElementById('suggestions-list');
const notFoundContainer = document.getElementById('not-found');
let highlightedIndex = -1;

searchInput.addEventListener('input', function() {
  const query = this.value.trim().toUpperCase();
  notFoundContainer.classList.remove('active');
  
  if (query.length < 2) {
    suggestionsList.classList.remove('active');
    return;
  }
  
  const suggestions = [];
  
  // Recherche par code postal
  for (const [code, region] of Object.entries(regionsFrance)) {
    if (code === 'general') continue;
    for (const cp of region.codesPostaux) {
      if (query.startsWith(cp) || cp.startsWith(query)) {
        const exists = suggestions.find(s => s.regionCode === code);
        if (!exists) {
          suggestions.push({
            type: 'region',
            display: `${cp}xxx`,
            region: region.nom,
            regionCode: code
          });
        }
        if (suggestions.length >= 8) break;
      }
    }
    if (suggestions.length >= 8) break;
  }
  
  // Recherche par ville
  for (const [code, region] of Object.entries(regionsFrance)) {
    if (code === 'general') continue;
    for (const ville of region.villes) {
      if (ville.toUpperCase().includes(query)) {
        const exists = suggestions.find(s => s.display === ville);
        if (!exists) {
          suggestions.push({
            type: 'ville',
            display: ville,
            region: region.nom,
            regionCode: code
          });
        }
        if (suggestions.length >= 10) break;
      }
    }
    if (suggestions.length >= 10) break;
  }
  
  if (suggestions.length === 0) {
    suggestionsList.classList.remove('active');
    if (query.length >= 3) {
      notFoundContainer.classList.add('active');
    }
    return;
  }
  
  suggestionsList.innerHTML = suggestions.map((s, i) => `
    <div class="suggestion-item" data-index="${i}" onclick="selectionnerSuggestion('${s.regionCode}', '${s.display}')">
      <span class="suggestion-item-ville">${s.display}</span>
      <span class="suggestion-item-region">${s.region}</span>
    </div>
  `).join('');
  
  suggestionsList.classList.add('active');
  highlightedIndex = -1;
});

searchInput.addEventListener('keydown', function(e) {
  const items = suggestionsList.querySelectorAll('.suggestion-item');
  
  if (e.key === 'ArrowDown') {
    e.preventDefault();
    highlightedIndex = Math.min(highlightedIndex + 1, items.length - 1);
    updateHighlight(items);
  } else if (e.key === 'ArrowUp') {
    e.preventDefault();
    highlightedIndex = Math.max(highlightedIndex - 1, 0);
    updateHighlight(items);
  } else if (e.key === 'Enter' && highlightedIndex >= 0) {
    e.preventDefault();
    items[highlightedIndex].click();
  }
});

function updateHighlight(items) {
  items.forEach((item, i) => {
    item.classList.toggle('highlighted', i === highlightedIndex);
  });
}

function selectionnerSuggestion(regionCode, display) {
  regionChoisie = regionCode;
  villeChoisie = display;
  suggestionsList.classList.remove('active');
  afficherResultats();
}

document.addEventListener('click', function(e) {
  if (!e.target.closest('.search-wrapper')) {
    suggestionsList.classList.remove('active');
  }
});

// ==========================================
// GÉOLOCALISATION
// ==========================================

function utiliserGeolocalisation() {
  if (!navigator.geolocation) {
    alert("La géolocalisation n'est pas supportée par ton navigateur.");
    return;
  }
  
  navigator.geolocation.getCurrentPosition(
    function(position) {
      // Fallback vers ressources générales
      afficherRessourcesGenerales();
    },
    function(error) {
      alert("Impossible d'obtenir ta position. Tu peux entrer ta ville manuellement.");
    }
  );
}

function afficherRessourcesGenerales() {
  regionChoisie = "general";
  villeChoisie = "";
  notFoundContainer.classList.remove('active');
  afficherResultats();
}

// ==========================================
// AFFICHAGE DES RÉSULTATS
// ==========================================

function afficherResultats() {
  document.getElementById('etape1').classList.remove('active');
  document.getElementById('etape2').classList.add('active');
  
  const container = document.getElementById('resultats-contenu');
  const region = regionsFrance[regionChoisie];
  
  const titre = "Pour trouver du soutien";
  const message = "Tu n'as pas à traverser ça seul·e. Voici des oreilles attentives et des espaces pour parler.";
  const encart = "« Demander de l'aide, c'est faire preuve de courage, pas de faiblesse. »";
  
  const localisationTexte = regionChoisie === 'general' 
    ? 'Toute la France' 
    : (villeChoisie ? `${villeChoisie} — ${region.nom}` : region.nom);
  
  let html = `
    <div class="resultats-header">
      <div class="resultats-localisation">📍 ${localisationTexte}</div>
      <h2>Ressources</h2>
    </div>
  `;
  
  // RESSOURCES SPÉCIFIQUES AU THÈME
  if (themeActif && ressourcesParTheme[themeActif]) {
    const themeData = ressourcesParTheme[themeActif];
    html += `
      <div class="resultats-section">
        <h3>${themeData.titre}</h3>
        <div class="ressource-cards">
          ${themeData.items.map(r => creerCarteRessource(r)).join('')}
        </div>
      </div>
    `;
  }
  
  // URGENCE
  html += `
    <div class="resultats-section">
      <h3>🆘 Aide immédiate — 24/7</h3>
      <div class="ressource-cards">
        ${ressourcesNationales.urgence.map(r => creerCarteRessource(r)).join('')}
      </div>
    </div>
  `;
  
  // Ressources régionales
  if (regionChoisie !== 'general' && region) {
    if (region.ressources.ecoute && region.ressources.ecoute.length > 0) {
      html += `
        <div class="resultats-section">
          <h3>💬 Écoute en ${region.nom}</h3>
          <div class="ressource-cards">
            ${region.ressources.ecoute.map(r => creerCarteRessource({...r, icon: 'ecoute'})).join('')}
          </div>
        </div>
      `;
    }
  }
  
  // Écoute nationale
  html += `
    <div class="resultats-section">
      <h3>💬 Lignes d'écoute nationales</h3>
      <div class="ressource-cards">
        ${ressourcesNationales.ecoute.map(r => creerCarteRessource(r)).join('')}
      </div>
    </div>
  `;
  
  // Deuil
  html += `
    <div class="resultats-section">
      <h3>🕊️ Accompagnement deuil</h3>
      <div class="ressource-cards">
        ${ressourcesNationales.deuil.map(r => creerCarteRessource(r)).join('')}
      </div>
    </div>
  `;
  
  // Encart
  html += `<div class="encart-special"><p>${encart}</p></div>`;
  
  container.innerHTML = html;
}

function creerCarteRessource(item) {
  const isExternal = item.lien.startsWith('http') || item.lien.startsWith('tel:');
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
  const icons = { ecoute: '💬', sante: '🩺', urgence: '🆘', lecture: '📖', communaute: '🤝' };
  return icons[type] || '📌';
}

// Ancre #aide-urgence
if (window.location.hash === '#aide-urgence') {
  afficherRessourcesGenerales();
}
</script>
<?php include '../components/boite-proposer-ressource.php'; ?>
</body>
</html>
