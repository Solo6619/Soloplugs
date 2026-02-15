<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources Belgique — Soloplugs</title>
  <meta name="description" content="Trouve les ressources adaptées à ta situation en Belgique francophone. Écoute, soutien, aide — sans jugement.">
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

    .btn-retour-accueil svg { width: 18px; height: 18px; stroke: currentColor; stroke-width: 2; fill: none; }

    .hero-compact {
      width: 100%;
      padding: 6rem 2rem 3rem;
      background: linear-gradient(180deg, rgba(26, 24, 21, 0.3) 0%, rgba(26, 24, 21, 1) 100%),
                  url('https://images.unsplash.com/photo-1559113513-d5e09c78b9dd?w=1600&q=80') center top / cover no-repeat;
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

    .ressources-container { max-width: 800px; margin: 0 auto; padding: 3rem 1.5rem 4rem; }

    .etape { display: none; animation: fadeIn 0.4s ease; }
    .etape.active { display: block; }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .etape-question { text-align: center; margin-bottom: 2rem; }

    .etape-question h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.75rem;
      color: #FFFFFF;
      margin-bottom: 0.5rem;
    }

    .etape-question p { font-family: 'Inter', sans-serif; font-size: 1rem; color: #A9A29B; }

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

    .btn-retour:hover { color: #E8E4DF; border-color: #D4A574; background: rgba(212, 165, 116, 0.15); }
    .btn-retour svg { width: 18px; height: 18px; stroke: currentColor; stroke-width: 2; fill: none; }

    .localisation-container { max-width: 500px; margin: 0 auto; }
    .search-wrapper { position: relative; margin-bottom: 1rem; }

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

    .search-input:focus { outline: none; border-color: #D4A574; box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.2); }
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

    .search-hint { font-family: 'Inter', sans-serif; font-size: 0.85rem; color: #7A726A; text-align: center; margin-bottom: 1.5rem; }
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
    .suggestion-item:hover, .suggestion-item.highlighted { background: rgba(212, 165, 116, 0.15); }

    .suggestion-item-ville { font-family: 'Inter', sans-serif; font-size: 0.95rem; color: #E8E4DF; display: block; }
    .suggestion-item-region { font-family: 'Inter', sans-serif; font-size: 0.8rem; color: #7A726A; }

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
    .not-found-message { font-family: 'Inter', sans-serif; font-size: 1rem; color: #A9A29B; margin-bottom: 1.5rem; }
    .not-found-options { display: flex; flex-direction: column; align-items: center; gap: 0.75rem; }

    .btn-geoloc, .btn-general {
      padding: 0.75rem 1.5rem;
      border-radius: 25px;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      cursor: pointer;
      transition: all 0.25s ease;
      border: none;
    }

    .btn-geoloc { background: linear-gradient(135deg, #D4A574, #C49464); color: #1a1815; font-weight: 600; }
    .btn-geoloc:hover { transform: translateY(-2px); box-shadow: 0 4px 15px rgba(212, 165, 116, 0.4); }

    .btn-general { background: rgba(45, 42, 38, 0.8); color: #E8E4DF; border: 2px solid rgba(212, 165, 116, 0.3); }
    .btn-general:hover { border-color: #D4A574; background: rgba(212, 165, 116, 0.15); }

    .ou-divider { font-family: 'Inter', sans-serif; font-size: 0.85rem; color: #7A726A; margin: 0.5rem 0; }

    .resultats-header {
      text-align: center;
      margin-bottom: 2.5rem;
      padding: 2rem;
      background: rgba(212, 165, 116, 0.1);
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 16px;
    }

    .resultats-header h2 { font-family: 'Playfair Display', Georgia, serif; font-size: 1.5rem; color: #FFFFFF; margin-bottom: 0.75rem; }
    .resultats-localisation { display: inline-flex; align-items: center; gap: 6px; font-family: 'Inter', sans-serif; font-size: 0.9rem; color: #D4A574; margin-bottom: 0.75rem; }
    .resultats-header p { font-family: 'Inter', sans-serif; font-size: 1rem; color: #A9A29B; line-height: 1.6; }

    .resultats-section { margin-bottom: 2.5rem; }
    .resultats-section h3 { font-family: 'Lora', Georgia, serif; font-size: 1.25rem; color: #E8E4DF; margin-bottom: 1rem; display: flex; align-items: center; gap: 10px; }

    .ressource-cards { display: flex; flex-direction: column; gap: 12px; }

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

    .ressource-card:hover { border-color: #D4A574; transform: translateX(4px); box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); }

    .ressource-card-icon { width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 22px; }
    .ressource-card-icon.ecoute { background: linear-gradient(135deg, #E8C9A8 0%, #D4A574 100%); }
    .ressource-card-icon.sante { background: linear-gradient(135deg, #C5E8C0 0%, #7ABD70 100%); }
    .ressource-card-icon.urgence { background: linear-gradient(135deg, #E8B8B8 0%, #C88080 100%); }
    .ressource-card-icon.lecture { background: linear-gradient(135deg, #B8D4E8 0%, #80A8C8 100%); }
    .ressource-card-icon.communaute { background: linear-gradient(135deg, #D8C8E8 0%, #A888C8 100%); }

    .ressource-card-info { flex: 1; }
    .ressource-card-nom { font-family: 'Inter', sans-serif; font-size: 1rem; font-weight: 600; color: #E8E4DF; display: block; margin-bottom: 2px; }
    .ressource-card-numero { font-family: 'Inter', sans-serif; font-size: 1.15rem; font-weight: 700; color: #F5D6A8; display: block; letter-spacing: 0.5px; }
    .ressource-card-desc { font-family: 'Inter', sans-serif; font-size: 0.85rem; color: #A9A29B; }

    .ressource-card-arrow { width: 20px; height: 20px; stroke: #7A726A; stroke-width: 2; flex-shrink: 0; transition: all 0.25s ease; }
    .ressource-card:hover .ressource-card-arrow { stroke: #D4A574; transform: translateX(4px); }

    .encart-special {
      margin-top: 3rem;
      padding: 2rem;
      background: linear-gradient(135deg, rgba(212, 165, 116, 0.15) 0%, rgba(212, 165, 116, 0.05) 100%);
      border-left: 4px solid #D4A574;
      border-radius: 0 12px 12px 0;
    }

    .encart-special p { font-family: 'Lora', Georgia, serif; font-size: 1.1rem; font-style: italic; color: #E8E4DF; line-height: 1.7; }

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

    .btn-recommencer:hover { border-color: #D4A574; color: #D4A574; background: rgba(212, 165, 116, 0.1); }

    .footer-minimal { text-align: center; padding: 3rem 1.5rem; border-top: 1px solid rgba(212, 165, 116, 0.1); }
    .footer-logo { text-decoration: none; font-family: 'Playfair Display', Georgia, serif; font-size: 1.5rem; }
    .footer-logo .solo { color: #E8E4DF; }
    .footer-logo .plugs { color: #D4A574; }
    .footer-tagline { font-family: 'Lora', Georgia, serif; font-size: 0.9rem; font-style: italic; color: #7A726A; margin: 0.5rem 0 1rem; }
    .footer-copy { font-family: 'Inter', sans-serif; font-size: 0.75rem; color: #5C554E; }

    @media (max-width: 768px) {
      .btn-retour-accueil { top: 1rem; left: 1rem; padding: 0.6rem 1rem; font-size: 0.85rem; }
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
  <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
  Choix du pays
</a>

<header class="hero-compact">
  <h1>Ressources <span class="accent">Belgique</span><?php echo $themeNom ? ' — ' . $themeNom : ''; ?></h1>
  <p>Des outils, de l'écoute, de l'inspiration — selon ce dont tu as besoin.</p>
</header>

<main class="ressources-container">

  <div class="etape active" id="etape1">
    <div class="etape-question">
      <h2>Où es-tu en Belgique ?</h2>
      <p>Pour trouver les ressources près de chez toi.</p>
    </div>
    
    <div class="localisation-container">
      <div class="search-wrapper">
        <input type="text" class="search-input" id="search-localisation" placeholder="Ex: 1000 ou Liège" autocomplete="off">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none">
          <circle cx="11" cy="11" r="8" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 21l-4.35-4.35" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div class="suggestions-list" id="suggestions-list"></div>
      </div>
      <p class="search-hint">💡 Entre ton <span>code postal</span> ou le <span>nom de ta ville</span></p>
      
      <div class="not-found-container" id="not-found">
        <div class="not-found-icon">😕</div>
        <p class="not-found-message">On n'a pas trouvé cette localisation</p>
        <div class="not-found-options">
          <button class="btn-geoloc" onclick="utiliserGeolocalisation()">📍 Utiliser ma position</button>
          <span class="ou-divider">ou</span>
          <button class="btn-general" onclick="afficherRessourcesGenerales()">🇧🇪 Ressources nationales Belgique</button>
        </div>
      </div>
    </div>
  </div>

  <div class="etape" id="etape2">
    <button class="btn-retour" onclick="retourEtape1()">
      <svg viewBox="0 0 24 24" fill="none"><path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
      Retour
    </button>
    <div id="resultats-contenu"></div>
    <div style="text-align: center;">
      <button class="btn-recommencer" onclick="recommencer()">🔄 Recommencer</button>
    </div>
  </div>

</main>

<?php include '../components/boite-proposer-ressource.php'; ?>
<footer class="footer-minimal">
  <a href="index.php" class="footer-logo"><span class="solo">Solo</span><span class="plugs">plugs</span></a>
  <p class="footer-tagline">La voix de la solitude</p>
  <p class="footer-copy">&copy; <?php echo date('Y'); ?> Soloplugs — Tous droits réservés</p>
</footer>

<script>
let regionChoisie = '';
let villeChoisie = '';

const themeActif = '<?php echo $theme; ?>';

const ressourcesParTheme = {
  'vivre-solo': { titre: 'Vivre Solo', items: [
    { nom: 'Télé-Accueil', numero: '107', desc: 'Écoute solitude et isolement — 24/7 gratuit', lien: 'tel:107', icon: 'ecoute' },
    { nom: 'Croix-Rouge de Belgique', desc: 'Activités et lien social', lien: 'https://www.croix-rouge.be', icon: 'communaute' }
  ]},
  'ado-solo': { titre: 'Ado Solo', items: [
    { nom: 'Écoute-Enfants', numero: '103', desc: 'Gratuit — Moins de 18 ans', lien: 'tel:103', icon: 'ecoute' },
    { nom: 'AMO (Aide en Milieu Ouvert)', desc: 'Services gratuits pour jeunes', lien: 'https://www.aidealajeunesse.cfwb.be', icon: 'communaute' }
  ]},
  'parent-solo': { titre: 'Parent Solo', items: [
    { nom: 'Ligue des Familles', desc: 'Soutien aux familles monoparentales', lien: 'https://www.liguedesfamilles.be', icon: 'communaute' },
    { nom: 'ONE — Aide aux parents', desc: 'Consultations gratuites petite enfance', lien: 'https://www.one.be', icon: 'sante' }
  ]},
  'vieillir-solo': { titre: 'Vieillir Solo', items: [
    { nom: 'Infor-Homes', numero: '02 219 56 88', desc: 'Info maisons de repos', lien: 'tel:022195688', icon: 'communaute' },
    { nom: 'Espace Seniors', desc: 'Activités et rencontres pour aînés', lien: 'https://www.espace-seniors.be', icon: 'communaute' }
  ]},
  'voyages-solo': { titre: 'Voyages Solo', items: [
    { nom: 'SPF Affaires étrangères', desc: 'Conseils aux voyageurs belges', lien: 'https://diplomatie.belgium.be/fr', icon: 'communaute' },
    { nom: 'Urgence consulaire', numero: '+32 2 501 81 11', desc: 'Belges à l\'\u00e9tranger', lien: 'tel:+3225018111', icon: 'urgence' }
  ]},
  'sorties-loisirs': { titre: 'Sorties & Loisirs', items: [
    { nom: 'Meetup Belgique', desc: 'Groupes de sorties et loisirs', lien: 'https://www.meetup.com/fr-FR', icon: 'communaute' },
    { nom: 'Centres culturels', desc: 'Ateliers, spectacles, activités', lien: 'https://www.centresculturels.cfwb.be', icon: 'communaute' }
  ]},
  'separation-deuil': { titre: 'Séparation & Deuil', items: [
    { nom: 'Centre de Prévention du Suicide', numero: '0800 32 123', desc: '24/7, gratuit', lien: 'tel:080032123', icon: 'urgence' },
    { nom: 'Maisons médicales — Groupes deuil', desc: 'Soutien au deuil en communauté', lien: 'https://www.maisonmedicale.org', icon: 'communaute' }
  ]}
};

const regionsBelgique = {
  "bxl": {
    nom: "Bruxelles-Capitale",
    codesPostaux: ["1000", "1005", "1006", "1007", "1008", "1009", "1010", "1011", "1012", "1020", "1030", "1040", "1041", "1043", "1044", "1045", "1046", "1047", "1048", "1049", "1050", "1060", "1070", "1080", "1081", "1082", "1083", "1090", "1100", "1101", "1105", "1110", "1120", "1130", "1140", "1150", "1160", "1170", "1180", "1190", "1200", "1210"],
    villes: ["Bruxelles", "Ixelles", "Saint-Gilles", "Schaerbeek", "Anderlecht", "Molenbeek", "Forest", "Uccle", "Etterbeek", "Woluwe-Saint-Lambert", "Woluwe-Saint-Pierre", "Watermael-Boitsfort", "Auderghem", "Jette", "Ganshoren", "Berchem-Sainte-Agathe", "Koekelberg", "Evere"],
    ressources: {
      ecoute: [
        { nom: "Centre de Prévention du Suicide", numero: "0800 32 123", desc: "24h/24, gratuit", lien: "tel:080032123" }
      ],
      communautaire: []
    }
  },
  "liege": {
    nom: "Province de Liège",
    codesPostaux: ["40", "41", "42", "43", "44", "45", "46", "47", "48", "49"],
    villes: ["Liège", "Seraing", "Verviers", "Herstal", "Ans", "Saint-Nicolas", "Grâce-Hollogne", "Flémalle", "Visé", "Eupen", "Spa", "Malmedy"],
    ressources: {
      ecoute: [
        { nom: "Télé-Accueil Liège", numero: "107", desc: "24h/24, gratuit", lien: "tel:107" }
      ],
      communautaire: []
    }
  },
  "hainaut": {
    nom: "Province du Hainaut",
    codesPostaux: ["60", "61", "62", "63", "64", "65", "70", "71", "72", "73", "74", "75", "76", "77", "78", "79"],
    villes: ["Charleroi", "Mons", "La Louvière", "Tournai", "Mouscron", "Châtelet", "Binche", "Soignies", "Manage", "Courcelles", "Ath", "Quaregnon"],
    ressources: {
      ecoute: [
        { nom: "Télé-Accueil Hainaut", numero: "107", desc: "24h/24, gratuit", lien: "tel:107" }
      ],
      communautaire: []
    }
  },
  "namur": {
    nom: "Province de Namur",
    codesPostaux: ["50", "51", "52", "53", "54", "55", "56", "57", "58", "59"],
    villes: ["Namur", "Sambreville", "Andenne", "Gembloux", "Dinant", "Rochefort", "Ciney", "Couvin", "Profondeville", "Fosses-la-Ville"],
    ressources: {
      ecoute: [
        { nom: "Télé-Accueil Namur", numero: "107", desc: "24h/24, gratuit", lien: "tel:107" }
      ],
      communautaire: []
    }
  },
  "brabant": {
    nom: "Brabant wallon",
    codesPostaux: ["13", "14"],
    villes: ["Wavre", "Ottignies-Louvain-la-Neuve", "Nivelles", "Braine-l'Alleud", "Tubize", "Waterloo", "Rixensart", "Jodoigne", "Braine-le-Comte"],
    ressources: {
      ecoute: [
        { nom: "Télé-Accueil Brabant", numero: "107", desc: "24h/24, gratuit", lien: "tel:107" }
      ],
      communautaire: []
    }
  },
  "luxembourg": {
    nom: "Province du Luxembourg",
    codesPostaux: ["66", "67", "68", "69"],
    villes: ["Arlon", "Marche-en-Famenne", "Bastogne", "Virton", "Aubange", "Durbuy", "Libramont", "Bouillon", "La Roche-en-Ardenne"],
    ressources: {
      ecoute: [
        { nom: "Télé-Accueil Luxembourg", numero: "107", desc: "24h/24, gratuit", lien: "tel:107" }
      ],
      communautaire: []
    }
  },
  "general": {
    nom: "Belgique francophone",
    ressources: { ecoute: [], communautaire: [] }
  }
};

const ressourcesNationales = {
  urgence: [
    { nom: "Centre de Prévention du Suicide", numero: "0800 32 123", desc: "24h/24, gratuit et anonyme", lien: "tel:080032123", icon: "urgence" },
    { nom: "Télé-Accueil", numero: "107", desc: "24h/24, gratuit — Écoute, solitude, détresse", lien: "tel:107", icon: "urgence" }
  ],
  ecoute: [
    { nom: "Écoute-Enfants", numero: "103", desc: "Gratuit — Pour les moins de 18 ans", lien: "tel:103", icon: "ecoute" },
    { nom: "SOS Viol", numero: "0800 98 100", desc: "Gratuit — Victimes de violences sexuelles", lien: "tel:0800981100", icon: "ecoute" },
    { nom: "Infor-Drogues", numero: "02 227 52 52", desc: "Questions sur les drogues", lien: "tel:022275252", icon: "ecoute" }
  ],
  deuil: [
    { nom: "Groupe de soutien au deuil", desc: "Via les Maisons médicales", lien: "https://www.maisonmedicale.org", icon: "communaute" }
  ],
  aines: [
    { nom: "Infor-Homes", numero: "02 219 56 88", desc: "Info maisons de repos", lien: "tel:022195688", icon: "communaute" },
    { nom: "Espace Seniors", desc: "Activités et rencontres pour aînés", lien: "https://www.espace-seniors.be", icon: "communaute" }
  ]
};

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
  
  for (const [code, region] of Object.entries(regionsBelgique)) {
    if (code === 'general') continue;
    for (const cp of region.codesPostaux) {
      if (query.startsWith(cp) || cp.startsWith(query)) {
        const exists = suggestions.find(s => s.regionCode === code);
        if (!exists) {
          suggestions.push({ type: 'region', display: `${cp}xx`, region: region.nom, regionCode: code });
        }
        if (suggestions.length >= 8) break;
      }
    }
    if (suggestions.length >= 8) break;
  }
  
  for (const [code, region] of Object.entries(regionsBelgique)) {
    if (code === 'general') continue;
    for (const ville of region.villes) {
      if (ville.toUpperCase().includes(query)) {
        const exists = suggestions.find(s => s.display === ville);
        if (!exists) {
          suggestions.push({ type: 'ville', display: ville, region: region.nom, regionCode: code });
        }
        if (suggestions.length >= 10) break;
      }
    }
    if (suggestions.length >= 10) break;
  }
  
  if (suggestions.length === 0) {
    suggestionsList.classList.remove('active');
    if (query.length >= 3) notFoundContainer.classList.add('active');
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
  if (e.key === 'ArrowDown') { e.preventDefault(); highlightedIndex = Math.min(highlightedIndex + 1, items.length - 1); updateHighlight(items); }
  else if (e.key === 'ArrowUp') { e.preventDefault(); highlightedIndex = Math.max(highlightedIndex - 1, 0); updateHighlight(items); }
  else if (e.key === 'Enter' && highlightedIndex >= 0) { e.preventDefault(); items[highlightedIndex].click(); }
});

function updateHighlight(items) { items.forEach((item, i) => { item.classList.toggle('highlighted', i === highlightedIndex); }); }

function selectionnerSuggestion(regionCode, display) {
  regionChoisie = regionCode;
  villeChoisie = display;
  suggestionsList.classList.remove('active');
  afficherResultats();
}

document.addEventListener('click', function(e) { if (!e.target.closest('.search-wrapper')) suggestionsList.classList.remove('active'); });

function utiliserGeolocalisation() {
  if (!navigator.geolocation) { alert("La géolocalisation n'est pas supportée."); return; }
  navigator.geolocation.getCurrentPosition(function(position) { afficherRessourcesGenerales(); }, function(error) { alert("Impossible d'obtenir ta position."); });
}

function afficherRessourcesGenerales() {
  regionChoisie = "general";
  villeChoisie = "";
  notFoundContainer.classList.remove('active');
  afficherResultats();
}

function afficherResultats() {
  document.getElementById('etape1').classList.remove('active');
  document.getElementById('etape2').classList.add('active');
  
  const container = document.getElementById('resultats-contenu');
  const region = regionsBelgique[regionChoisie];
  
  const localisationTexte = regionChoisie === 'general' ? 'Toute la Belgique francophone' : (villeChoisie ? `${villeChoisie} — ${region.nom}` : region.nom);
  
  let html = `
    <div class="resultats-header">
      <div class="resultats-localisation">📍 ${localisationTexte}</div>
      <h2>Ressources</h2>
    </div>
  `;
  
  // RESSOURCES SPÉCIFIQUES AU THÈME
  if (themeActif && ressourcesParTheme[themeActif]) {
    const themeData = ressourcesParTheme[themeActif];
    html += `<div class="resultats-section"><h3>${themeData.titre}</h3><div class="ressource-cards">${themeData.items.map(r => creerCarteRessource(r)).join('')}</div></div>`;
  }
  
  html += `<div class="resultats-section"><h3>🆘 Aide immédiate — 24/7</h3><div class="ressource-cards">${ressourcesNationales.urgence.map(r => creerCarteRessource(r)).join('')}</div></div>`;
  
  if (regionChoisie !== 'general' && region && region.ressources.ecoute.length > 0) {
    html += `<div class="resultats-section"><h3>💬 Écoute en ${region.nom}</h3><div class="ressource-cards">${region.ressources.ecoute.map(r => creerCarteRessource({...r, icon: 'ecoute'})).join('')}</div></div>`;
  }
  
  html += `<div class="resultats-section"><h3>💬 Lignes d'écoute</h3><div class="ressource-cards">${ressourcesNationales.ecoute.map(r => creerCarteRessource(r)).join('')}</div></div>`;
  html += `<div class="resultats-section"><h3>🕊️ Accompagnement deuil</h3><div class="ressource-cards">${ressourcesNationales.deuil.map(r => creerCarteRessource(r)).join('')}</div></div>`;
  html += `<div class="resultats-section"><h3>👴 Aînés</h3><div class="ressource-cards">${ressourcesNationales.aines.map(r => creerCarteRessource(r)).join('')}</div></div>`;
  
  html += `<div class="encart-special"><p>« Demander de l'aide, c'est faire preuve de courage, pas de faiblesse. »</p></div>`;
  
  container.innerHTML = html;
}

function creerCarteRessource(item) {
  const isExternal = item.lien.startsWith('http') || item.lien.startsWith('tel:');
  const target = isExternal ? 'target="_blank" rel="noopener"' : '';
  return `
    <a href="${item.lien}" class="ressource-card" ${target}>
      <div class="ressource-card-icon ${item.icon || 'communaute'}">${getIconEmoji(item.icon)}</div>
      <div class="ressource-card-info">
        <span class="ressource-card-nom">${item.nom}</span>
        ${item.numero ? `<span class="ressource-card-numero">${item.numero}</span>` : ''}
        <span class="ressource-card-desc">${item.desc}</span>
      </div>
      <svg class="ressource-card-arrow" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
  `;
}

function getIconEmoji(type) {
  const icons = { ecoute: '💬', sante: '🩺', urgence: '🆘', lecture: '📖', communaute: '🤝' };
  return icons[type] || '📌';
}

if (window.location.hash === '#aide-urgence') afficherRessourcesGenerales();
</script>
<?php include '../components/boite-proposer-ressource.php'; ?>
</body>
</html>
