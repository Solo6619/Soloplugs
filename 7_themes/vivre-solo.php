<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Vivre solo — L\'art de la solitude';
    $pageDescription = 'La solitude est une réalité. La manière de la traverser peut devenir un art. Explorez votre chemin sur Soloplugs.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['components.css', 'vivre-solo.css'];
    $themeRessources = 'ressources/ressources.php?theme=vivre-solo';
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- CSS chargés via $additionalCSS : components.css, vivre-solo.css -->
</head>
<body>

  <?php include '../components/header.php'; ?>

 
  <!-- ============================================================
       INTRODUCTION PHILOSOPHIQUE
       ============================================================ -->
  <section class="vivre-solo-intro">
    
    <!-- Oiseaux en vol — groupe principal (haut-droite) -->
    <svg class="intro-birds intro-birds-main" viewBox="0 0 280 200" aria-hidden="true">
      <g fill="none" stroke="#D4A574" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <!-- Oiseau 1 (principal) -->
        <path d="M140 100 Q120 70 80 60 Q120 80 140 100 Q160 80 200 60 Q160 70 140 100"/>
        <!-- Oiseau 2 -->
        <path d="M80 130 Q65 110 40 105 Q65 115 80 130 Q95 115 120 105 Q95 110 80 130" opacity="0.7"/>
        <!-- Oiseau 3 -->
        <path d="M200 80 Q185 60 160 55 Q185 65 200 80 Q215 65 240 55 Q215 60 200 80" opacity="0.6"/>
        <!-- Oiseau 4 (petit, loin) -->
        <path d="M250 130 Q240 120 225 118 Q240 122 250 130 Q260 122 275 118 Q260 120 250 130" opacity="0.4"/>
        <!-- Oiseau 5 -->
        <path d="M30 80 Q20 65 5 62 Q20 70 30 80 Q40 70 55 62 Q40 65 30 80" opacity="0.5"/>
      </g>
    </svg>
    
    <!-- Oiseaux en vol — groupe secondaire (bas-gauche) -->
    <svg class="intro-birds intro-birds-secondary" viewBox="0 0 150 100" aria-hidden="true">
      <g fill="none" stroke="#D4A574" stroke-width="1.5" stroke-linecap="round">
        <path d="M50 50 Q40 35 20 30 Q40 40 50 50 Q60 40 80 30 Q60 35 50 50"/>
        <path d="M100 70 Q92 60 78 58 Q92 62 100 70 Q108 62 122 58 Q108 60 100 70" opacity="0.6"/>
        <path d="M30 80 Q24 72 14 70 Q24 74 30 80 Q36 74 46 70 Q36 72 30 80" opacity="0.4"/>
      </g>
    </svg>
    
    <div class="intro-content">
      <span class="intro-badge">Vivre Solo</span>
      <h1 class="intro-title">L'art de la <span class="highlight">solitude</span></h1>
      
      <div class="intro-text">
       

        <p>La solitude est une réalité psychologique, sociale et existentielle.<br>
        Elle peut être choisie ou subie, féconde ou douloureuse, silencieuse ou envahissante.<br>
        Elle peut apaiser, mais aussi fragiliser.</p>

        <p>Cette section ne cherche ni à embellir la solitude, ni à la dramatiser.<br>
        Elle propose de la regarder en face.</p>

        <p>Car si la solitude est parfois imposée par la vie, la manière de la traverser, de l'habiter et de lui donner un sens peut, elle, devenir un <strong>art</strong>.</p>

        <p><strong>Vivre solo</strong>, c'est apprendre à se tenir avec soi-même.<br>
        À reconnaître quand la solitude fait mal — et quand elle ouvre un espace de clarté, de création ou de liberté.</p>
      </div>
      
      <div class="ligne-decorative"></div>
    </div>
  </section>

  <!-- ============================================================
       SECTION D'ORIENTATION — POINT D'ENTRÉE CRITIQUE
       ============================================================ -->
  <section class="section orientation-section">
    <div class="container">
      <div class="section-header">
        <h2>Où en es-tu avec la solitude ?</h2>
        <p>Choisis le parcours qui correspond à ton expérience</p>
      </div>

      <div class="path-selector">
        
        <!-- Parcours SOL_001 : Solitude choisie -->
        <div class="path-card path-chosen" data-path="chosen">
          <div class="path-image">
            <img src="../images/vivre-solo/vivre_solo_02.jpg" 
                 alt="Femme lisant paisiblement dans un salon lumineux" 
                 title="Photo : IA générée">
          </div>
          <div class="path-content">
           
            <h3>Solitude choisie</h3>
            
            <p class="path-description">
             "La solitude choisie est l'art de vivre bien et heureux avec soi-même"
            </p>
            <ul class="path-features">
              <li>✓ Créativité et introspection</li>
              <li>✓ Pratiques philosophiques</li>
              <li>✓ Art de vivre en solo</li>
              <li>✓ Cultiver la plénitude</li>
            </ul>
            <button class="btn btn-path btn-chosen" onclick="selectPath('chosen')">
              Explorer ce parcours
            </button>
          </div>
        </div>

        <!-- Parcours SOL_002 : Isolement subi -->
        <div class="path-card path-suffered" data-path="suffered">
          <div class="path-image">
            <img src="../images/vivre-solo/vivre_solo_01.jpg" 
                 alt="Petite figurine seule sous une lampe" 
                 title="Photo : IA générée">
          </div>
          <div class="path-content">
            
            <h3>Isolement subi</h3>
            
            <p class="path-description">
              "Personne ne devrait se sentir seul sans avoir choisi de l'être"
            </p>
            <ul class="path-features">
              <li>✓ Comprendre ce que tu vis</li>
              <li>✓ Briser l'isolement pas à pas</li>
              <li>✓ Ressources d'aide gratuites</li>
              <li>✓ Retrouver du lien social</li>
            </ul>
            <button class="btn btn-path btn-suffered" onclick="selectPath('suffered')">
              Explorer ce parcours
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CONTENU PARCOURS SOL_001 — SOLITUDE CHOISIE
       ============================================================ -->
  <section class="section path-content-section" id="content-chosen" style="display: none;">
    <div class="container">
      
      <div class="quote-block animate-on-scroll">
        <p>« La solitude est le fond ultime de la condition humaine. L'homme est l'unique être qui se sent seul et qui cherche l'autre. »</p>
        <cite>— Octavio Paz</cite>
      </div>

      <div class="section-header">
        <h2>Cultiver l'art d'être seul·e</h2>
        <p>Découvre des pratiques et réflexions pour enrichir ta solitude</p>
      </div>

      <div class="wisdom-grid">
        <div class="wisdom-card animate-on-scroll">
          <div class="wisdom-icon">📚</div>
          <h3>Lectures & Philosophie</h3>
          <p>Des penseurs de Montaigne à Bachelard ont exploré la richesse de la solitude. Découvre leurs enseignements.</p>
        </div>
        
        <div class="wisdom-card animate-on-scroll animate-delay-1">
          <div class="wisdom-icon">🎨</div>
          <h3>Créativité solitaire</h3>
          <p>L'écriture, la peinture, la musique... La solitude comme terreau fertile de l'expression personnelle.</p>
        </div>
        
        <div class="wisdom-card animate-on-scroll animate-delay-2">
          <div class="wisdom-icon">🧘</div>
          <h3>Pratiques contemplatives</h3>
          <p>Méditation, marche silencieuse, observation de la nature. Cultiver la présence à soi.</p>
        </div>
        
        <div class="wisdom-card animate-on-scroll animate-delay-3">
          <div class="wisdom-icon">🏡</div>
          <h3>Art de vivre</h3>
          <p>Aménager son espace, créer ses rituels, savourer les petits bonheurs du quotidien solo.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       CONTENU PARCOURS SOL_002 — ISOLEMENT SUBI
       ============================================================ -->
  <section class="section path-content-section" id="content-suffered" style="display: none;">
    <div class="container">
      
      <div class="support-message animate-on-scroll">
        <h3>Ce que tu ressens est valide</h3>
        <p>L'isolement non choisi peut faire très mal. Ce n'est pas une faiblesse de le reconnaître — c'est le premier pas vers un mieux-être.</p>
      </div>

      <div class="section-header">
        <h2>Comprendre et agir</h2>
        <p>Des ressources pour traverser cette période difficile</p>
      </div>

      <div class="help-grid">
        <div class="help-card animate-on-scroll">
          <div class="help-icon">💬</div>
          <h3>Lignes d'écoute</h3>
          <p>Des personnes formées pour écouter, sans jugement, 24h/24.</p>
          <a href="../ressources.php#urgence" class="help-link">Voir les numéros →</a>
        </div>
        
        <div class="help-card animate-on-scroll animate-delay-1">
          <div class="help-icon">🤝</div>
          <h3>Groupes de soutien</h3>
          <p>Rencontrer d'autres personnes qui comprennent ce que tu traverses.</p>
          <a href="../ressources.php#groupes" class="help-link">Découvrir →</a>
        </div>
        
        <div class="help-card animate-on-scroll animate-delay-2">
          <div class="help-icon">📖</div>
          <h3>Comprendre l'isolement</h3>
          <p>Articles et témoignages pour mettre des mots sur ce que tu vis.</p>
          <a href="../magazine/index.php" class="help-link">Lire →</a>
        </div>
        
        <div class="help-card animate-on-scroll animate-delay-3">
          <div class="help-icon">🌱</div>
          <h3>Premiers pas</h3>
          <p>De petites actions concrètes pour commencer à briser l'isolement.</p>
          <a href="#premiers-pas" class="help-link">Explorer →</a>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       STATISTIQUES SUR LA SOLITUDE — ACCORDÉON
       ============================================================ -->
  <section class="section stats-section">
    <div class="container">
      
      <!-- Bouton accordéon -->
      <button class="stats-accordion-trigger" id="statsAccordion" aria-expanded="false" aria-controls="statsContent">
        <div class="stats-accordion-header">
          <div class="stats-accordion-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="3" y1="12" x2="21" y2="12"/>
              <line x1="3" y1="6" x2="21" y2="6"/>
              <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
          </div>
          <div class="stats-accordion-text">
            <h2>La solitude en chiffres</h2>
            <p>Un phénomène mondial qui touche toutes les générations</p>
          </div>
          <div class="stats-accordion-arrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="6 9 12 15 18 9"/>
            </svg>
          </div>
        </div>
      </button>

      <!-- Contenu accordéon (caché par défaut) -->
      <div class="stats-accordion-content" id="statsContent" aria-hidden="true">
        <div class="stats-grid">
          
          <div class="stat-card animate-on-scroll">
            <div class="stat-flag">🌍</div>
            <div class="stat-number">1 sur 4</div>
            <div class="stat-label">personne dans le monde se sent seule ou très seule</div>
            <div class="stat-compare">Gallup World Poll, 2024</div>
          </div>

          <div class="stat-card animate-on-scroll">
            <div class="stat-flag">❤️</div>
            <div class="stat-number">+29%</div>
            <div class="stat-label">risque de maladie cardiaque lié à l'isolement</div>
            <div class="stat-compare">+32% AVC, +50% démence</div>
          </div>

          <div class="stat-card animate-on-scroll animate-delay-1">
            <div class="stat-flag">📉</div>
            <div class="stat-number">-70%</div>
            <div class="stat-label">de temps avec des amis pour les 15-24 ans</div>
            <div class="stat-compare">en 20 ans — remplacé par les écrans</div>
          </div>

          <!-- France -->
          <div class="stat-card animate-on-scroll animate-delay-2">
            <div class="stat-flag">🇫🇷</div>
            <div class="stat-number">31%</div>
            <div class="stat-label">des Français expriment un sentiment de solitude en 2024</div>
            <div class="stat-compare">contre 25% en 2018</div>
          </div>

          <div class="stat-card animate-on-scroll animate-delay-3">
            <div class="stat-flag">🇫🇷</div>
            <div class="stat-number">17%</div>
            <div class="stat-label">souffrent de solitude chronique</div>
            <div class="stat-compare">contre 13% avant la pandémie</div>
          </div>

          <!-- Canada -->
          <div class="stat-card animate-on-scroll">
            <div class="stat-flag">🇨🇦</div>
            <div class="stat-number">24%</div>
            <div class="stat-label">des personnes vivant seules souffrent de solitude</div>
            <div class="stat-compare">Statistique Canada, 2021</div>
          </div>

          <!-- Jeunes -->
          <div class="stat-card stat-highlight animate-on-scroll animate-delay-1">
            <div class="stat-flag">👥</div>
            <div class="stat-number">1 sur 3</div>
            <div class="stat-label">jeune actif (25-39 ans) se sent particulièrement seul</div>
            <div class="stat-compare">deux fois plus que les 60-69 ans</div>
          </div>

          <!-- Santé mentale -->
          <div class="stat-card stat-warning animate-on-scroll animate-delay-2">
            <div class="stat-flag">⚠️</div>
            <div class="stat-label">Au Canada, en France comme aux États‑Unis, les personnes en situation d'isolement rapportent des idées suicidaires à un niveau environ deux fois plus élevé que la moyenne nationale.</div>
          </div>

          <!-- Paradoxe -->
          <div class="stat-card animate-on-scroll animate-delay-3">
            <div class="stat-flag">📱</div>
            <div class="stat-number">Paradoxe</div>
            <div class="stat-label">Plus connectés que jamais, plus seuls que jamais</div>
            <div class="stat-compare">Le défilement passif augmente la solitude</div>
          </div>

        </div>

        <div class="stats-source">
          Sources : US Surgeon General's Advisory on Our Epidemic of Loneliness and Isolation (2023), 
          Gallup World Poll (2024), Fondation de France (2024), Statistique Canada (2021)
        </div>
      </div>

    </div>
  </section>

  <!-- Articles du magazine -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Articles sur le vivre solo</h2>
        <p>
          Découvre nos articles, témoignages et conseils pour enrichir 
          ton expérience de vie en solo.
        </p>
      </div>

      <div class="articles-grid">
        
        <!-- Article 1 -->
        <article class="article-card animate-on-scroll">
          <div class="article-image">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
              <circle cx="30" cy="25" r="15" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M15 50C15 50 20 35 30 35C40 35 45 50 45 50" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M5 55H55" stroke="#D4A574" stroke-width="2"/>
            </svg>
          </div>
          <div class="article-content">
            <h3>La beauté des petits matins</h3>
            <p>
              Ces heures calmes où le monde semble attendre. Un temps pour soi, 
              avant le bruit du jour. Comment cultiver ces moments précieux.
            </p>
            <a href="../magazine/index.php" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

        <!-- Article 2 -->
        <article class="article-card animate-on-scroll animate-delay-1">
          <div class="article-image">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path d="M15 45V15H45V45H15Z" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M20 25H40" stroke="#D4A574" stroke-width="2"/>
              <path d="M20 32H35" stroke="#D4A574" stroke-width="2"/>
              <path d="M20 39H30" stroke="#D4A574" stroke-width="2"/>
              <circle cx="42" cy="42" r="10" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M42 37V42L45 45" stroke="#D4A574" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="article-content">
            <h3>Rituels du quotidien</h3>
            <p>
              Le thé du matin, la balade du dimanche, le livre du soir. 
              Créer des rituels qui structurent et embellissent la vie solo.
            </p>
            <a href="../magazine/index.php" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

        <!-- Article 3 -->
        <article class="article-card animate-on-scroll animate-delay-2">
          <div class="article-image">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path d="M10 50L30 15L50 50H10Z" stroke="#D4A574" stroke-width="2" fill="none"/>
              <rect x="25" y="35" width="10" height="15" stroke="#D4A574" stroke-width="2" fill="none"/>
              <circle cx="30" cy="25" r="3" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M5 50H55" stroke="#D4A574" stroke-width="2"/>
            </svg>
          </div>
          <div class="article-content">
            <h3>Aménager son cocon</h3>
            <p>
              Comment créer un espace qui nous ressemble et nous nourrit. 
              Du minimalisme scandinave au nid douillet personnalisé.
            </p>
            <a href="../magazine/index.php" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="../magazine/index.php" class="btn btn-primary" style="background: var(--vs-gold); color: white; border-color: var(--vs-gold);">
          Voir tous les articles
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->

 <?php $basePath = '../'; include '../components/footer.php'; ?>

  <!-- ============================================================
       BOUTON FLOTTANT "OÙ EN ES-TU?"
       ============================================================ -->
  <button class="spectre-btn" id="spectreBtn" aria-label="Où en es-tu avec la solitude?" aria-expanded="false">
    <span class="spectre-btn-icon">🧭</span>
    <span class="spectre-btn-text">Où en es-tu?</span>
  </button>

  <!-- ============================================================
       MODAL ÉCHELLE SPECTRE 12 NIVEAUX
       ============================================================ -->
  <div class="spectre-overlay" id="spectreOverlay"></div>
  
  <div class="spectre-modal" id="spectreModal" role="dialog" aria-labelledby="spectreTitle" aria-modal="true">
    <button class="spectre-modal-close" id="spectreClose" aria-label="Fermer">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M18 6L6 18M6 6l12 12"/>
      </svg>
    </button>
    
    <div class="spectre-modal-content">
      <!-- Header -->
      <div class="spectre-header">
        <span class="spectre-badge">LE SPECTRE</span>
        <h2 id="spectreTitle">Où en es-tu avec la solitude ?</h2>
        <p>Clique sur le point qui correspond le mieux à ton ressenti actuel</p>
      </div>

      <!-- Échelle horizontale -->
      <div class="spectre-scale-wrapper">
        
        <!-- Labels des zones -->
        <div class="spectre-zones">
          <span class="zone-label zone-habitee">HABITÉE</span>
          <span class="zone-label zone-tension">EN TENSION</span>
          <span class="zone-label zone-souffrante">SOUFFRANTE</span>
        </div>

        <!-- Barre de progression -->
        <div class="spectre-track">
          <div class="spectre-marker" id="spectreMarker"></div>
        </div>

        <!-- Points cliquables -->
        <div class="spectre-points">
          <div class="spectre-point" data-level="1">
            <div class="point-dot"></div>
            <span class="point-number">1</span>
          </div>
          <div class="spectre-point" data-level="2">
            <div class="point-dot"></div>
            <span class="point-number">2</span>
          </div>
          <div class="spectre-point" data-level="3">
            <div class="point-dot"></div>
            <span class="point-number">3</span>
          </div>
          <div class="spectre-point" data-level="4">
            <div class="point-dot"></div>
            <span class="point-number">4</span>
          </div>
          <div class="spectre-point" data-level="5">
            <div class="point-dot"></div>
            <span class="point-number">5</span>
          </div>
          <div class="spectre-point" data-level="6">
            <div class="point-dot"></div>
            <span class="point-number">6</span>
          </div>
          <div class="spectre-point" data-level="7">
            <div class="point-dot"></div>
            <span class="point-number">7</span>
          </div>
          <div class="spectre-point" data-level="8">
            <div class="point-dot"></div>
            <span class="point-number">8</span>
          </div>
          <div class="spectre-point" data-level="9">
            <div class="point-dot"></div>
            <span class="point-number">9</span>
          </div>
          <div class="spectre-point" data-level="10">
            <div class="point-dot"></div>
            <span class="point-number">10</span>
          </div>
          <div class="spectre-point" data-level="11">
            <div class="point-dot"></div>
            <span class="point-number">11</span>
          </div>
          <div class="spectre-point" data-level="12">
            <div class="point-dot"></div>
            <span class="point-number">12</span>
          </div>
        </div>
      </div>

      <!-- Description dynamique -->
      <div class="spectre-description" id="spectreDescription">
        <p class="description-placeholder">Sélectionne un niveau pour voir sa description</p>
      </div>

      <!-- Message urgence (niveaux 11-12) -->
      <div class="spectre-urgence" id="spectreUrgence">
        <div class="urgence-header">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <line x1="12" y1="8" x2="12" y2="12"/>
            <line x1="12" y1="16" x2="12.01" y2="16"/>
          </svg>
          <span>Tu n'es pas seul·e</span>
        </div>
        <p>Si tu traverses un moment difficile, des personnes sont là pour t'écouter, 24h/24 :</p>
        <ul class="urgence-contacts">
          <li><strong>Canada :</strong> 1-833-456-4566</li>
          <li><strong>France :</strong> 3114</li>
          <li><strong>Belgique :</strong> 0800 32 123</li>
          <li><strong>Suisse :</strong> 143</li>
        </ul>
      </div>

      <!-- Bouton Continuer -->
      <div class="spectre-cta" id="spectreCta">
        <button class="btn-spectre-continuer" id="btnSpectreContinuer">
          Continuer
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <?php include '../components/scripts.php'; ?>

  <!-- Script de gestion des parcours -->
  <script>
    // Gestion du système de parcours
    function selectPath(pathType) {
      // Masquer tous les contenus
      document.querySelectorAll('.path-content-section').forEach(section => {
        section.style.display = 'none';
      });
      
      // Afficher le contenu du parcours sélectionné
      if (pathType === 'chosen') {
        document.getElementById('content-chosen').style.display = 'block';
      } else if (pathType === 'suffered') {
        document.getElementById('content-suffered').style.display = 'block';
      }
      
      // Scroll smooth vers le contenu
      setTimeout(() => {
        const content = document.querySelector('.path-content-section[style*="display: block"]');
        if (content) {
          content.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }, 100);
      
      // Sauvegarder le choix dans localStorage
      localStorage.setItem('soloplugs_vivre_solo_path', pathType);
    }
    
    // ============================================================
    // LOGIQUE DE L'ÉCHELLE SPECTRE 12 NIVEAUX
    // ============================================================
    (function() {
      'use strict';

      // Données des 12 niveaux
      const niveaux = {
        1: {
          zone: 'habitee',
          nom: 'Plénitude solitaire',
          description: 'Je savoure ma solitude. Elle me nourrit, me ressource. Je n\'en changerais pas.',
          parcours: 'chosen'
        },
        2: {
          zone: 'habitee',
          nom: 'Indépendance sereine',
          description: 'Je vis seul·e par choix. J\'ai des liens, mais j\'ai besoin de mon espace.',
          parcours: 'chosen'
        },
        3: {
          zone: 'habitee',
          nom: 'Solitude apprivoisée',
          description: 'J\'ai appris à vivre seul·e. Ce n\'était pas mon choix initial, mais j\'y trouve ma place.',
          parcours: 'chosen'
        },
        4: {
          zone: 'habitee',
          nom: 'Équilibre fragile',
          description: 'Ça va globalement, mais certains moments sont plus difficiles que d\'autres.',
          parcours: 'chosen'
        },
        5: {
          zone: 'tension',
          nom: 'Solitude intermittente',
          description: 'Parfois ça va, parfois c\'est dur. Les week-ends, les soirs, les fêtes...',
          parcours: 'both'
        },
        6: {
          zone: 'tension',
          nom: 'Isolement relationnel',
          description: 'Je suis entouré·e, mais je me sens seul·e. Personne ne me comprend vraiment.',
          parcours: 'both'
        },
        7: {
          zone: 'tension',
          nom: 'Solitude subie récente',
          description: 'Un événement m\'a laissé·e seul·e (rupture, deuil, déménagement). Je ne m\'y fais pas.',
          parcours: 'suffered'
        },
        8: {
          zone: 'tension',
          nom: 'Repli progressif',
          description: 'Je m\'isole de plus en plus. Sortir, appeler, voir du monde devient difficile.',
          parcours: 'suffered'
        },
        9: {
          zone: 'souffrante',
          nom: 'Solitude chronique',
          description: 'Je me sens seul·e presque tout le temps. C\'est devenu mon état normal.',
          parcours: 'suffered'
        },
        10: {
          zone: 'souffrante',
          nom: 'Invisible aux autres',
          description: 'J\'ai l\'impression que personne ne me voit, que je pourrais disparaître sans que ça change rien.',
          parcours: 'suffered'
        },
        11: {
          zone: 'souffrante',
          nom: 'Désespoir silencieux',
          description: 'Ma solitude me fait souffrir profondément. Je ne sais plus comment m\'en sortir.',
          parcours: 'urgence'
        },
        12: {
          zone: 'souffrante',
          nom: 'Détresse',
          description: 'Je suis en crise. J\'ai besoin d\'aide maintenant.',
          parcours: 'urgence'
        }
      };

      // Éléments DOM - Bouton et Modal
      const spectreBtn = document.getElementById('spectreBtn');
      const spectreModal = document.getElementById('spectreModal');
      const spectreOverlay = document.getElementById('spectreOverlay');
      const spectreClose = document.getElementById('spectreClose');

      // Éléments DOM - Échelle
      const points = document.querySelectorAll('.spectre-point');
      const marker = document.getElementById('spectreMarker');
      const description = document.getElementById('spectreDescription');
      const urgence = document.getElementById('spectreUrgence');
      const cta = document.getElementById('spectreCta');
      const btnContinuer = document.getElementById('btnSpectreContinuer');

      let selectedLevel = null;
      let isModalOpen = false;

      // ============================================================
      // MODAL OPEN/CLOSE
      // ============================================================
      function openModal() {
        isModalOpen = true;
        spectreModal.classList.add('active');
        spectreOverlay.classList.add('active');
        spectreBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
        setTimeout(() => spectreClose.focus(), 100);
      }

      function closeModal() {
        isModalOpen = false;
        spectreModal.classList.remove('active');
        spectreOverlay.classList.remove('active');
        spectreBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        spectreBtn.focus();
        
        // Reset
        resetSpectre();
      }

      function resetSpectre() {
        selectedLevel = null;
        points.forEach(p => p.classList.remove('active'));
        marker.style.left = '45%';
        marker.style.opacity = '0.5';
        description.innerHTML = '<p class="description-placeholder">Sélectionne un niveau pour voir sa description</p>';
        urgence.classList.remove('visible');
        cta.classList.remove('visible');
      }

      // ============================================================
      // SÉLECTION D'UN NIVEAU
      // ============================================================
      function selectLevel(level) {
        selectedLevel = level;
        const data = niveaux[level];

        // Mettre à jour les points actifs
        points.forEach(p => p.classList.remove('active'));
        document.querySelector(`.spectre-point[data-level="${level}"]`).classList.add('active');

        // Positionner le marqueur
        const percentage = ((level - 1) / 11) * 100;
        marker.style.left = `${percentage}%`;
        marker.style.opacity = '1';

        // Mettre à jour la description
        description.innerHTML = `
          <span class="description-level zone-${data.zone}">${getZoneName(data.zone)}</span>
          <h3 class="description-name">${data.nom}</h3>
          <p class="description-text">"${data.description}"</p>
        `;

        // Afficher le bouton Continuer
        cta.classList.add('visible');

        // Gérer le message d'urgence
        if (level >= 11) {
          urgence.classList.add('visible');
          btnContinuer.innerHTML = `
            Voir les ressources d'aide
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          `;
        } else {
          urgence.classList.remove('visible');
          btnContinuer.innerHTML = `
            Continuer
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          `;
        }

        // Sauvegarder
        localStorage.setItem('soloplugs_solitude_level', level);
      }

      function getZoneName(zone) {
        switch(zone) {
          case 'habitee': return 'Solitude habitée';
          case 'tension': return 'Solitude en tension';
          case 'souffrante': return 'Solitude souffrante';
          default: return '';
        }
      }

      // ============================================================
      // REDIRECTION
      // ============================================================
      function handleContinue() {
        if (!selectedLevel) return;

        const data = niveaux[selectedLevel];
        
        // Fermer la modal
        closeModal();

        // Redirection selon le parcours
        switch(data.parcours) {
          case 'chosen':
            selectPath('chosen');
            break;
          case 'suffered':
            selectPath('suffered');
            break;
          case 'both':
            // Scroll vers la section orientation
            document.querySelector('.orientation-section').scrollIntoView({ behavior: 'smooth' });
            break;
          case 'urgence':
            window.location.href = '../ressources.php#urgence';
            break;
        }
      }

      // ============================================================
      // ÉVÉNEMENTS
      // ============================================================
      
      // Bouton flottant
      spectreBtn.addEventListener('click', openModal);
      
      // Fermeture
      spectreClose.addEventListener('click', closeModal);
      spectreOverlay.addEventListener('click', closeModal);
      
      // Échap pour fermer
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isModalOpen) closeModal();
      });
      
      // Points de l'échelle
      points.forEach(point => {
        point.addEventListener('click', () => {
          const level = parseInt(point.dataset.level);
          selectLevel(level);
        });
      });

      // Bouton continuer
      btnContinuer.addEventListener('click', handleContinue);

      // Position initiale du marqueur
      marker.style.left = '45%';
      marker.style.opacity = '0.5';

      console.log('✓ Échelle Spectre 12 niveaux chargée — Soloplugs');
    })();

    // ============================================================
    // ACCORDÉON STATISTIQUES
    // ============================================================
    (function() {
      const trigger = document.getElementById('statsAccordion');
      const content = document.getElementById('statsContent');
      
      if (!trigger || !content) return;

      trigger.addEventListener('click', function() {
        const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
        
        // Toggle état
        trigger.setAttribute('aria-expanded', !isExpanded);
        content.setAttribute('aria-hidden', isExpanded);
        
        // Toggle classes
        trigger.classList.toggle('active');
        content.classList.toggle('open');
      });

      console.log('✓ Accordéon statistiques chargé — Soloplugs');
    })();
  </script>

</body>
</html>
