<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ressources Québec — Soloplugs</title>
  <meta name="description" content="Trouve les ressources adaptées à ta situation au Québec. Écoute, soutien, aide — sans jugement.">
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
                  url('https://images.unsplash.com/photo-1508739773434-c26b3d09e071?w=1600&q=80') center top / cover no-repeat;
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
       LOCALISATION - RECHERCHE
       ======================================== */
    
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

    .search-input::placeholder {
      color: #7A726A;
    }

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

    .search-hint span {
      color: #D4A574;
    }

    /* Suggestions */
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

    .suggestions-list.active {
      display: block;
    }

    .suggestion-item {
      padding: 0.85rem 1.25rem;
      cursor: pointer;
      transition: background 0.15s ease;
      border-bottom: 1px solid rgba(212, 165, 116, 0.1);
    }

    .suggestion-item:last-child {
      border-bottom: none;
    }

    .suggestion-item:hover,
    .suggestion-item.highlighted {
      background: rgba(212, 165, 116, 0.15);
    }

    .suggestion-item-ville {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 500;
      color: #E8E4DF;
    }

    .suggestion-item-region {
      font-family: 'Inter', sans-serif;
      font-size: 0.8rem;
      color: #7A726A;
      margin-left: 8px;
    }

    /* Message non trouvé */
    .not-found-container {
      text-align: center;
      padding: 2rem;
      background: rgba(45, 42, 38, 0.6);
      border: 1px solid rgba(212, 165, 116, 0.2);
      border-radius: 16px;
      margin-top: 1rem;
      display: none;
    }

    .not-found-container.active {
      display: block;
      animation: fadeIn 0.3s ease;
    }

    .not-found-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .not-found-message {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      color: #E8E4DF;
      margin-bottom: 1.5rem;
    }

    .not-found-options {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      max-width: 300px;
      margin: 0 auto;
    }

    .btn-geoloc,
    .btn-general {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 0.9rem 1.5rem;
      border-radius: 30px;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      cursor: pointer;
      transition: all 0.25s ease;
      border: none;
    }

    .btn-geoloc {
      background: linear-gradient(135deg, #D4A574 0%, #C49464 100%);
      color: #1a1815;
      font-weight: 500;
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
  <h1>Ressources <span class="accent">Québec</span></h1>
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
       ÉTAPE 2 : LOCALISATION QUÉBEC
       ============================================================ -->
  <div class="etape" id="etape2">
    <button class="btn-retour" onclick="retourEtape1()">
      <svg viewBox="0 0 24 24" fill="none">
        <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Retour
    </button>
    
    <div class="etape-question">
      <h2>Où es-tu au Québec ?</h2>
      <p>Pour trouver les ressources près de chez toi.</p>
    </div>
    
    <div class="localisation-container">
      <div class="search-wrapper">
        <input 
          type="text" 
          class="search-input" 
          id="search-localisation"
          placeholder="Ex: H2X ou Sherbrooke"
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
      
      <!-- Message si non trouvé -->
      <div class="not-found-container" id="not-found">
        <div class="not-found-icon">😕</div>
        <p class="not-found-message">On n'a pas trouvé cette localisation</p>
        <div class="not-found-options">
          <button class="btn-geoloc" onclick="utiliserGeolocalisation()">
            📍 Utiliser ma position
          </button>
          <span class="ou-divider">ou</span>
          <button class="btn-general" onclick="afficherRessourcesGenerales()">
            🍁 Ressources générales Québec
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       ÉTAPE 3 : RÉSULTATS
       ============================================================ -->
  <div class="etape" id="etape3">
    <button class="btn-retour" onclick="retourEtape2()">
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
let regionChoisie = '';
let villeChoisie = '';

// ==========================================
// DONNÉES QUÉBEC - RÉGIONS
// ==========================================

const regionsQuebec = {
  "01": {
    nom: "Bas-Saint-Laurent",
    codesPostaux: ["G0J", "G0K", "G0L", "G5J", "G5L", "G5M", "G5N", "G5R"],
    villes: ["Rimouski", "Rivière-du-Loup", "Matane", "Amqui", "Mont-Joli", "La Pocatière", "Trois-Pistoles"],
    ressources: {
      ecoute: [{ nom: "Tel-Aide Québec", numero: "1 877 700-2433", desc: "Écoute active — Bas-Saint-Laurent", lien: "tel:18777002433" }],
      sante: [{ nom: "CISSS du Bas-Saint-Laurent", desc: "Services psychosociaux", lien: "https://www.santebsl.gouv.qc.ca" }],
      communautaire: [{ nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }]
    }
  },
  "02": {
    nom: "Saguenay–Lac-Saint-Jean",
    codesPostaux: ["G0V", "G0W", "G7A", "G7B", "G7G", "G7H", "G7J", "G7K", "G7N", "G7P", "G7S", "G7T", "G7X", "G7Y", "G7Z", "G8A", "G8B", "G8C", "G8E", "G8G", "G8H", "G8J", "G8K", "G8L", "G8M", "G8N", "G8P"],
    villes: ["Saguenay", "Chicoutimi", "Jonquière", "Alma", "Roberval", "Saint-Félicien", "Dolbeau-Mistassini", "La Baie"],
    ressources: {
      ecoute: [{ nom: "Centre prévention suicide", numero: "1 888 600-2433", desc: "Saguenay–Lac-Saint-Jean — 24/7", lien: "tel:18886002433" }],
      sante: [{ nom: "CIUSSS Saguenay–Lac-Saint-Jean", numero: "1 800 370-4980", desc: "Services de santé", lien: "https://www.santesaglac.gouv.qc.ca" }],
      communautaire: [{ nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }]
    }
  },
  "03": {
    nom: "Capitale-Nationale",
    codesPostaux: ["G0A", "G1A", "G1B", "G1C", "G1E", "G1G", "G1H", "G1J", "G1K", "G1L", "G1M", "G1N", "G1P", "G1R", "G1S", "G1T", "G1V", "G1W", "G1X", "G1Y", "G2A", "G2B", "G2C", "G2E", "G2G", "G2J", "G2K", "G2L", "G2M", "G2N", "G3A", "G3B", "G3C", "G3E", "G3G", "G3H", "G3J", "G3K", "G3L", "G3M", "G3N", "G3Z"],
    villes: ["Québec", "Lévis", "Saint-Augustin-de-Desmaures", "L'Ancienne-Lorette", "Beauport", "Charlesbourg", "Sainte-Foy", "Cap-Rouge", "Stoneham", "Lac-Beauport", "Portneuf"],
    ressources: {
      ecoute: [
        { nom: "ACSM Québec", desc: "Centre d'écoute 24h/24", lien: "https://www.acsmquebec.org" },
        { nom: "Expression", numero: "418 338-5522", desc: "Écoute active 24/7", lien: "tel:4183385522" }
      ],
      sante: [{ nom: "CIUSSS Capitale-Nationale", numero: "418 666-7000", desc: "Services de santé", lien: "https://www.ciussscn.ca" }],
      communautaire: [
        { nom: "Albatros Capitale-Nationale", desc: "Accompagnement et deuil", lien: "https://albatrosquebec.ca" },
        { nom: "Carrefour Familles Monoparentales", desc: "Soutien aux parents solos", lien: "https://carrefourfm.org" }
      ]
    }
  },
  "04": {
    nom: "Mauricie–Centre-du-Québec",
    codesPostaux: ["G0P", "G0X", "G0Y", "G0Z", "G8T", "G8V", "G8W", "G8Y", "G8Z", "G9A", "G9B", "G9C", "G9H", "G9N", "G9P", "G9R", "G9T"],
    villes: ["Trois-Rivières", "Shawinigan", "Drummondville", "Victoriaville", "Bécancour", "La Tuque", "Nicolet"],
    ressources: {
      ecoute: [{ nom: "CEPS Drummond", numero: "819 477-8855", desc: "Écoute et prévention suicide", lien: "tel:8194778855" }],
      sante: [{ nom: "CIUSSS Mauricie–Centre-du-Québec", numero: "819 693-3938", desc: "Services de santé", lien: "https://www.santemcq.ca" }],
      communautaire: [{ nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }]
    }
  },
  "05": {
    nom: "Estrie",
    codesPostaux: ["J0B", "J0E", "J1E", "J1G", "J1H", "J1J", "J1K", "J1L", "J1M", "J1N", "J1S", "J1X", "J1Z", "J2K"],
    villes: ["Sherbrooke", "Magog", "Lac-Mégantic", "Coaticook", "Windsor", "East Angus", "Granby"],
    ressources: {
      ecoute: [
        { nom: "Écoute Estrie", numero: "819 564-2323", desc: "Écoute active", lien: "tel:8195642323" },
        { nom: "Écoute Estrie (sans frais)", numero: "1 800 667-3841", desc: "Sans frais en Estrie", lien: "tel:18006673841" },
        { nom: "JEVI Centre prévention suicide", numero: "819 564-7535", desc: "24/7", lien: "tel:8195647535" }
      ],
      sante: [{ nom: "CIUSSS de l'Estrie – CHUS", numero: "819 780-2222", desc: "Services de santé", lien: "https://www.santeestrie.qc.ca" }],
      communautaire: [
        { nom: "Maison Au Diapason", numero: "450 534-2002", desc: "Accompagnement deuil", lien: "https://audiapason.org" },
        { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }
      ]
    }
  },
  "06": {
    nom: "Montréal",
    codesPostaux: ["H1A", "H1B", "H1C", "H1E", "H1G", "H1H", "H1J", "H1K", "H1L", "H1M", "H1N", "H1P", "H1R", "H1S", "H1T", "H1V", "H1W", "H1X", "H1Y", "H1Z", "H2A", "H2B", "H2C", "H2E", "H2G", "H2H", "H2J", "H2K", "H2L", "H2M", "H2N", "H2P", "H2R", "H2S", "H2T", "H2V", "H2W", "H2X", "H2Y", "H2Z", "H3A", "H3B", "H3C", "H3E", "H3G", "H3H", "H3J", "H3K", "H3L", "H3M", "H3N", "H3P", "H3R", "H3S", "H3T", "H3V", "H3W", "H3X", "H3Y", "H3Z", "H4A", "H4B", "H4C", "H4E", "H4G", "H4H", "H4J", "H4K", "H4L", "H4M", "H4N", "H4P", "H4R", "H4S", "H4T", "H4V", "H4W", "H4X", "H4Y", "H4Z", "H5A", "H5B", "H8N", "H8P", "H8R", "H8S", "H8T", "H8Y", "H8Z", "H9A", "H9B", "H9C", "H9E", "H9G", "H9H", "H9J", "H9K", "H9P", "H9R", "H9S", "H9W", "H9X"],
    villes: ["Montréal", "Verdun", "LaSalle", "Lachine", "Saint-Laurent", "Anjou", "Montréal-Nord", "Rivière-des-Prairies", "Pointe-aux-Trembles", "Rosemont", "Plateau-Mont-Royal", "Outremont", "Westmount", "Côte-des-Neiges", "NDG", "Ahuntsic", "Villeray"],
    ressources: {
      ecoute: [
        { nom: "Tel-Écoute Montréal", numero: "514 493-4484", desc: "Écoute active", lien: "tel:5144934484" },
        { nom: "Tel-Aînés", numero: "514 353-2463", desc: "Ligne pour aînés", lien: "tel:5143532463" },
        { nom: "Ligne Le deuil", numero: "1 888 533-3845", desc: "Tout le Québec — 10h-22h", lien: "tel:18885333845" },
        { nom: "Écoute Entraide", numero: "514 278-2130", desc: "Écoute et référence", lien: "tel:5142782130" }
      ],
      sante: [
        { nom: "CIUSSS Centre-Sud", numero: "514 842-7226", desc: "Centre-ville, Plateau", lien: "#" },
        { nom: "CIUSSS Nord-de-l'Île", numero: "514 336-6673", desc: "Nord de Montréal", lien: "#" },
        { nom: "CIUSSS Ouest-de-l'Île", numero: "514 630-2123", desc: "Ouest de l'île", lien: "#" }
      ],
      communautaire: [
        { nom: "Suicide Action Montréal", numero: "1 866 277-3553", desc: "Suivi de deuil après suicide", lien: "tel:18662773553" },
        { nom: "Pères séparés", numero: "514 254-6120", desc: "Soutien aux pères", lien: "tel:5142546120" },
        { nom: "Service d'Entraide Passerelle", numero: "514 277-9870", desc: "Femmes en rupture", lien: "tel:5142779870" },
        { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }
      ]
    }
  },
  "07": {
    nom: "Outaouais",
    codesPostaux: ["J0X", "J8L", "J8M", "J8N", "J8P", "J8R", "J8T", "J8V", "J8Y", "J8Z", "J9A", "J9B", "J9E", "J9H", "J9J"],
    villes: ["Gatineau", "Hull", "Aylmer", "Chelsea", "Buckingham", "Masson-Angers", "Cantley", "Val-des-Monts", "Maniwaki"],
    ressources: {
      ecoute: [
        { nom: "Tel-Aide Outaouais", numero: "819 775-3223", desc: "Gatineau", lien: "tel:8197753223" },
        { nom: "Tel-Aide Outaouais (sans frais)", numero: "1 800 567-9699", desc: "Tout le Québec", lien: "tel:18005679699" }
      ],
      sante: [{ nom: "CISSS de l'Outaouais", desc: "Services de santé", lien: "https://www.cisss-outaouais.gouv.qc.ca" }],
      communautaire: [{ nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }]
    }
  },
  "13": {
    nom: "Laval",
    codesPostaux: ["H7A", "H7B", "H7C", "H7E", "H7G", "H7H", "H7J", "H7K", "H7L", "H7M", "H7N", "H7P", "H7R", "H7S", "H7T", "H7V", "H7W", "H7X", "H7Y"],
    villes: ["Laval", "Chomedey", "Sainte-Dorothée", "Duvernay", "Pont-Viau", "Vimont", "Auteuil", "Fabreville"],
    ressources: {
      ecoute: [{ nom: "Tel-Écoute", numero: "514 493-4484", desc: "Écoute active Laval", lien: "tel:5144934484" }],
      sante: [{ nom: "CISSS de Laval", numero: "450 668-1010", desc: "Services de santé", lien: "https://www.lavalensante.com" }],
      communautaire: [
        { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" },
        { nom: "Maison Monbourquette", numero: "450 669-4333", desc: "Accompagnement deuil", lien: "tel:4506694333" }
      ]
    }
  },
  "15": {
    nom: "Laurentides",
    codesPostaux: ["J0N", "J0R", "J0T", "J0V", "J0W", "J7A", "J7B", "J7C", "J7E", "J7G", "J7H", "J7J", "J7K", "J7L", "J7M", "J7N", "J7P", "J7R", "J7T", "J7V", "J7Y", "J7Z", "J8A", "J8B", "J8C", "J8E", "J8G", "J8H"],
    villes: ["Saint-Jérôme", "Blainville", "Mirabel", "Saint-Eustache", "Sainte-Thérèse", "Boisbriand", "Rosemère", "Mont-Tremblant", "Saint-Sauveur", "Sainte-Agathe-des-Monts", "Lachute"],
    ressources: {
      ecoute: [{ nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553" }],
      sante: [{ nom: "CISSS des Laurentides", desc: "Services de santé", lien: "https://www.santelaurentides.gouv.qc.ca" }],
      communautaire: [
        { nom: "Maison Sercan", numero: "450 491-1912", desc: "Accompagnement deuil — Saint-Eustache", lien: "tel:4504911912" },
        { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }
      ]
    }
  },
  "16": {
    nom: "Montérégie",
    codesPostaux: ["J0E", "J0G", "J0H", "J0J", "J0L", "J0P", "J0S", "J2G", "J2H", "J2J", "J2K", "J2L", "J2M", "J2N", "J2P", "J2R", "J2S", "J2T", "J2W", "J2X", "J2Y", "J3A", "J3B", "J3E", "J3G", "J3H", "J3L", "J3M", "J3N", "J3P", "J3R", "J3T", "J3V", "J3X", "J3Y", "J3Z", "J4B", "J4G", "J4H", "J4J", "J4K", "J4L", "J4M", "J4N", "J4P", "J4R", "J4S", "J4T", "J4V", "J4W", "J4X", "J4Y", "J4Z", "J5A", "J5B", "J5C", "J5J", "J5K", "J5L", "J5M", "J5R", "J6A", "J6J", "J6K", "J6N", "J6R", "J6S", "J6V", "J6W", "J6X", "J6Y", "J6Z"],
    villes: ["Longueuil", "Brossard", "Saint-Jean-sur-Richelieu", "Boucherville", "Saint-Hyacinthe", "Châteauguay", "Chambly", "Saint-Bruno-de-Montarville", "Beloeil", "Sorel-Tracy", "Granby", "Varennes", "La Prairie", "Candiac", "Sainte-Julie"],
    ressources: {
      ecoute: [{ nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553" }],
      sante: [
        { nom: "CISSS Montérégie-Centre", desc: "Services de santé", lien: "https://www.santemonteregie.qc.ca/centre" },
        { nom: "CISSS Montérégie-Est", desc: "Services de santé", lien: "https://www.santemonteregie.qc.ca/est" },
        { nom: "CISSS Montérégie-Ouest", desc: "Services de santé", lien: "https://www.santemonteregie.qc.ca/ouest" }
      ],
      communautaire: [
        { nom: "Maison des petits tournesols", numero: "450 332-4862", desc: "Accompagnement deuil — Longueuil", lien: "tel:4503324862" },
        { nom: "Maison Victor-Gadbois", numero: "450 467-1710", desc: "Soutien au deuil — Rive-Sud", lien: "tel:4504671710" },
        { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca" }
      ]
    }
  }
};

// ==========================================
// RESSOURCES PROVINCIALES
// ==========================================

const ressourcesProvinciales = {
  urgence: [
    { nom: "9-8-8", numero: "9-8-8", desc: "Ligne de crise santé mentale — 24/7 partout au Canada", lien: "tel:988", icon: "urgence" },
    { nom: "Info-Social", numero: "811 (option 2)", desc: "Intervention psychosociale — 24/7", lien: "tel:811", icon: "sante" },
    { nom: "1-866-APPELLE", numero: "1 866 277-3553", desc: "Prévention du suicide — 24/7", lien: "tel:18662773553", icon: "urgence" }
  ],
  jeunes: [
    { nom: "Tel-jeunes", numero: "1 800 263-2266", desc: "12-17 ans — 24/7", lien: "tel:18002632266", icon: "ecoute" },
    { nom: "Jeunesse, J'écoute", numero: "1 800 668-6868", desc: "Jeunes — 24/7", lien: "tel:18006686868", icon: "ecoute" }
  ],
  deuil: [
    { nom: "Ligne Le deuil", numero: "1 888 533-3845", desc: "10h-22h, 365 jours", lien: "tel:18885333845", icon: "ecoute" },
    { nom: "Deuil Jeunesse", numero: "1 855 889-3666", desc: "Jeunes et familles", lien: "tel:18558893666", icon: "ecoute" },
    { nom: "Parents Orphelins", numero: "1 844 338-4522", desc: "Deuil périnatal", lien: "tel:18443384522", icon: "ecoute" }
  ],
  reference: [
    { nom: "211 Québec", numero: "211", desc: "Info-référence sociale", lien: "tel:211", icon: "communaute" }
  ]
};

// ==========================================
// NAVIGATION ENTRE ÉTAPES
// ==========================================

function choisirEtat(etat) {
  etatChoisi = etat;
  document.getElementById('etape1').classList.remove('active');
  document.getElementById('etape2').classList.add('active');
  
  // Focus sur le champ de recherche
  setTimeout(() => {
    document.getElementById('search-localisation').focus();
  }, 100);
}

function retourEtape1() {
  document.getElementById('etape2').classList.remove('active');
  document.getElementById('etape1').classList.add('active');
  document.getElementById('not-found').classList.remove('active');
  document.getElementById('search-localisation').value = '';
}

function retourEtape2() {
  document.getElementById('etape3').classList.remove('active');
  document.getElementById('etape2').classList.add('active');
}

function recommencer() {
  etatChoisi = '';
  regionChoisie = '';
  villeChoisie = '';
  document.getElementById('etape3').classList.remove('active');
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
  for (const [code, region] of Object.entries(regionsQuebec)) {
    for (const cp of region.codesPostaux) {
      if (cp.toUpperCase().startsWith(query)) {
        suggestions.push({
          type: 'codePostal',
          display: cp,
          region: region.nom,
          regionCode: code
        });
        if (suggestions.length >= 8) break;
      }
    }
    if (suggestions.length >= 8) break;
  }
  
  // Recherche par ville
  for (const [code, region] of Object.entries(regionsQuebec)) {
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
  
  // Afficher les suggestions
  suggestionsList.innerHTML = suggestions.map((s, i) => `
    <div class="suggestion-item" data-index="${i}" onclick="selectionnerSuggestion('${s.regionCode}', '${s.display}')">
      <span class="suggestion-item-ville">${s.display}</span>
      <span class="suggestion-item-region">${s.region}</span>
    </div>
  `).join('');
  
  suggestionsList.classList.add('active');
  highlightedIndex = -1;
});

// Navigation clavier
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

// Fermer suggestions si clic ailleurs
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
      const lat = position.coords.latitude;
      const lon = position.coords.longitude;
      
      // Déterminer la région approximative
      const region = determinerRegionParCoords(lat, lon);
      if (region) {
        regionChoisie = region.code;
        villeChoisie = "";
        notFoundContainer.classList.remove('active');
        afficherResultats();
      } else {
        afficherRessourcesGenerales();
      }
    },
    function(error) {
      alert("Impossible d'obtenir ta position. Tu peux entrer ta ville manuellement.");
    }
  );
}

function determinerRegionParCoords(lat, lon) {
  // Montréal
  if (lat >= 45.4 && lat <= 45.7 && lon >= -73.9 && lon <= -73.4) {
    return { code: "06", nom: "Montréal" };
  }
  // Laval
  if (lat >= 45.5 && lat <= 45.7 && lon >= -73.9 && lon <= -73.6) {
    return { code: "13", nom: "Laval" };
  }
  // Québec (Capitale-Nationale)
  if (lat >= 46.7 && lat <= 47.0 && lon >= -71.5 && lon <= -71.0) {
    return { code: "03", nom: "Capitale-Nationale" };
  }
  // Estrie
  if (lat >= 45.2 && lat <= 45.6 && lon >= -72.2 && lon <= -71.5) {
    return { code: "05", nom: "Estrie" };
  }
  // Montérégie
  if (lat >= 45.0 && lat <= 45.6 && lon >= -74.0 && lon <= -72.5) {
    return { code: "16", nom: "Montérégie" };
  }
  return null;
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
  document.getElementById('etape2').classList.remove('active');
  document.getElementById('etape3').classList.add('active');
  
  const container = document.getElementById('resultats-contenu');
  const region = regionsQuebec[regionChoisie];
  
  // Messages selon l'état
  let titre, message, encart;
  if (etatChoisi === 'bien') {
    titre = "Pour nourrir ta solitude";
    message = "Voici des ressources pour explorer, t'inspirer et t'épanouir dans ta solitude choisie.";
    encart = "« La solitude est le lieu où l'on se retrouve, pas où l'on se perd. »";
  } else if (etatChoisi === 'moyen') {
    titre = "Pour trouver du soutien";
    message = "Tu n'as pas à traverser ça seul·e. Voici des oreilles attentives et des espaces pour parler.";
    encart = "« Demander de l'aide, c'est faire preuve de courage, pas de faiblesse. »";
  } else {
    titre = "De l'aide est là pour toi";
    message = "Ce que tu vis est réel, et tu mérites d'être accompagné·e. Ces lignes sont disponibles maintenant, gratuitement et sans jugement.";
    encart = "« Tu n'as pas à aller bien pour mériter de l'aide. Tu mérites de l'aide pour aller mieux. »";
  }
  
  // Localisation
  const localisationTexte = regionChoisie === 'general' 
    ? 'Tout le Québec' 
    : (villeChoisie ? `${villeChoisie} — ${region.nom}` : region.nom);
  
  let html = `
    <div class="resultats-header">
      <div class="resultats-localisation">📍 ${localisationTexte}</div>
      <h2>${titre}</h2>
      <p>${message}</p>
    </div>
  `;
  
  // URGENCE (pour difficile et moyen)
  if (etatChoisi === 'difficile' || etatChoisi === 'moyen') {
    html += `
      <div class="resultats-section">
        <h3>🆘 Aide immédiate — 24/7</h3>
        <div class="ressource-cards">
          ${ressourcesProvinciales.urgence.map(r => creerCarteRessource(r)).join('')}
        </div>
      </div>
    `;
  }
  
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
    
    if (region.ressources.sante && region.ressources.sante.length > 0 && etatChoisi !== 'bien') {
      html += `
        <div class="resultats-section">
          <h3>🏥 Services de santé</h3>
          <div class="ressource-cards">
            ${region.ressources.sante.map(r => creerCarteRessource({...r, icon: 'sante'})).join('')}
          </div>
        </div>
      `;
    }
    
    if (region.ressources.communautaire && region.ressources.communautaire.length > 0) {
      html += `
        <div class="resultats-section">
          <h3>🤝 Ressources communautaires</h3>
          <div class="ressource-cards">
            ${region.ressources.communautaire.map(r => creerCarteRessource({...r, icon: 'communaute'})).join('')}
          </div>
        </div>
      `;
    }
  }
  
  // Ressources selon l'état
  if (etatChoisi === 'bien') {
    html += `
      <div class="resultats-section">
        <h3>📚 Lectures & podcasts</h3>
        <div class="ressource-cards">
          ${creerCarteRessource({ nom: "Magazine Soloplugs", desc: "Articles, témoignages et réflexions", lien: "magazine.php", icon: "lecture" })}
          ${creerCarteRessource({ nom: "Ici Radio-Canada — Balados", desc: "Podcasts sur le bien-être", lien: "https://ici.radio-canada.ca/ohdio/balados", icon: "lecture" })}
        </div>
      </div>
      <div class="resultats-section">
        <h3>🧭 Explorer les thèmes</h3>
        <div class="ressource-cards">
          ${creerCarteRessource({ nom: "Vivre solo", desc: "L'art de vivre seul·e au quotidien", lien: "7_themes/vivre-solo.php", icon: "communaute" })}
          ${creerCarteRessource({ nom: "Voyages solo", desc: "Partir seul·e, revenir transformé·e", lien: "7_themes/voyages-solo.php", icon: "communaute" })}
          ${creerCarteRessource({ nom: "Sorties & loisirs", desc: "Sortir seul·e sans se sentir seul·e", lien: "7_themes/sorties-loisirs-rencontres.php", icon: "communaute" })}
        </div>
      </div>
    `;
  }
  
  // Jeunes
  if (etatChoisi === 'moyen' || etatChoisi === 'difficile') {
    html += `
      <div class="resultats-section">
        <h3>👦 Pour les jeunes</h3>
        <div class="ressource-cards">
          ${ressourcesProvinciales.jeunes.map(r => creerCarteRessource(r)).join('')}
        </div>
      </div>
    `;
  }
  
  // Deuil
  if (etatChoisi === 'moyen') {
    html += `
      <div class="resultats-section">
        <h3>🕊️ Lignes d'écoute deuil</h3>
        <div class="ressource-cards">
          ${ressourcesProvinciales.deuil.map(r => creerCarteRessource(r)).join('')}
        </div>
      </div>
    `;
  }
  
  // 211 référence
  html += `
    <div class="resultats-section">
      <h3>📞 Info-référence</h3>
      <div class="ressource-cards">
        ${ressourcesProvinciales.reference.map(r => creerCarteRessource(r)).join('')}
      </div>
    </div>
  `;
  
  // Encart citation
  html += `
    <div class="encart-special">
      <p>${encart}</p>
    </div>
  `;
  
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
