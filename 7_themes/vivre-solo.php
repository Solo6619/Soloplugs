<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Vivre solo — Trouve ton chemin dans la solitude';
    $pageDescription = 'Que tu choisisses la solitude ou que tu la subisses, trouve ton parcours personnalisé sur Soloplugs.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['vivre-solo.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO SIMPLIFIÉ
       ============================================================ -->
  <section class="hero-vivre-solo">
    <div class="hero-content">
      <div class="hero-ornament">
        <div class="hero-ornament-line"></div>
        <div class="hero-ornament-diamond"></div>
        <div class="hero-ornament-line"></div>
      </div>
      <h1 class="hero-title">Vivre <span class="highlight">solo</span></h1>
      <p class="hero-subtitle">La solitude a mille visages</p>
      <p class="hero-description">
        Elle peut être refuge ou vertige, liberté ou poids. 
        L'important, c'est de trouver son chemin.
      </p>
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
            <div class="path-icon">🌟</div>
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
                 title="Photo : Pixabay">
          </div>
          <div class="path-content">
            <div class="path-icon">💭</div>
            <h3>Isolement subi</h3>
          
            <p class="path-description">
              "La solitude subie est une solitude qui fait souffrir parce qu'elle n'a pas été choisie — mais qui peut, avec du soutien et du sens, évoluer vers une solitude mieux habitée"
            </p>
            <ul class="path-features">
              <li>✓ Accompagnement bienveillant</li>
              <li>✓ Ressources d'aide concrètes</li>
              <li>✓ Stratégies de reconnexion</li>
              <li>✓ Soutien et compassion</li>
            </ul>
            <button class="btn btn-path btn-suffered" onclick="selectPath('suffered')">
              Explorer ce parcours
            </button>
          </div>
        </div>

      </div>

      <!-- Note d'orientation -->
      <div class="orientation-note animate-on-scroll">
        <p>
          💡 <strong>Tu peux naviguer entre les deux parcours à tout moment.</strong> 
          La solitude n'est pas figée — elle évolue selon les moments de vie.
        </p>
      </div>

    </div>
  </section>

  <!-- ============================================================
       CONTENU DYNAMIQUE PAR PARCOURS
       ============================================================ -->
  
  <!-- PARCOURS SOLITUDE CHOISIE (SOL_001) -->
  <div id="content-chosen" class="path-content-section" style="display: none;">
    
    <!-- Citation inspirante -->
    <section class="section section-alt">
      <div class="container-narrow">
        <div class="quote-block animate-on-scroll">
          <p>« On ne peut être vraiment soi qu'aussi longtemps qu'on est seul. 
             Celui qui n'aime pas la solitude n'aime pas la liberté, 
             car on n'est libre qu'étant seul. »</p>
          <cite>— Arthur Schopenhauer</cite>
        </div>
      </div>
    </section>

    <!-- Philosophie de la solitude choisie -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>L'art de cultiver sa solitude</h2>
          <p>
            La solitude choisie est une pratique millénaire. 
            Un temps pour soi, un espace de création, de réflexion, de ressourcement.
          </p>
        </div>

        <div class="wisdom-grid">
          
          <div class="wisdom-card animate-on-scroll">
            <div class="wisdom-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="20" stroke="currentColor" stroke-width="2"/>
                <path d="M25 15V25L30 30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <h3>Liberté intérieure</h3>
            <p>
              La solitude choisie est d'abord une liberté. 
              Liberté de penser, d'être, de créer sans le regard de l'autre. 
              C'est un espace préservé où tu peux explorer qui tu es vraiment.
            </p>
          </div>

          <div class="wisdom-card animate-on-scroll animate-delay-1">
            <div class="wisdom-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 40C10 40 15 25 25 25C35 25 40 40 40 40" stroke="currentColor" stroke-width="2"/>
                <circle cx="25" cy="18" r="8" stroke="currentColor" stroke-width="2"/>
              </svg>
            </div>
            <h3>Connaissance de soi</h3>
            <p>
              Dans le silence de la solitude, tu peux t'entendre penser. 
              C'est là que se révèlent tes véritables désirs, tes valeurs profondes, 
              ce qui fait vibrer ton être.
            </p>
          </div>

          <div class="wisdom-card animate-on-scroll animate-delay-2">
            <div class="wisdom-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 35L25 15L35 35H15Z" stroke="currentColor" stroke-width="2"/>
                <circle cx="25" cy="25" r="3" fill="currentColor"/>
              </svg>
            </div>
            <h3>Créativité épanouie</h3>
            <p>
              La solitude est le terreau de la création. 
              Les artistes, philosophes et penseurs l'ont toujours su : 
              c'est dans le retrait que naissent les œuvres.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- Pratiques concrètes -->
    <section class="section section-alt">
      <div class="container">
        <div class="section-header">
          <h2>Pratiques pour enrichir ta solitude</h2>
          <p>Des outils concrets pour transformer ton temps seul·e en source de plénitude</p>
        </div>

        <div class="theme-grid">
          
          <div class="theme-card animate-on-scroll">
            <div class="card-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="10" y="15" width="30" height="25" stroke="currentColor" stroke-width="2" rx="2"/>
                <path d="M15 22H35M15 28H30M15 34H25" stroke="currentColor" stroke-width="2"/>
              </svg>
            </div>
            <h3>Journal intime & Soli</h3>
            <ul>
              <li>Découvre Soli, ton miroir intérieur</li>
              <li>Écriture automatique matinale</li>
              <li>Gratitude quotidienne</li>
              <li>Dialogues avec soi-même</li>
            </ul>
          </div>

          <div class="theme-card animate-on-scroll animate-delay-1">
            <div class="card-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="15" stroke="currentColor" stroke-width="2"/>
                <path d="M25 10V25L32 32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <h3>Rituels contemplatifs</h3>
            <ul>
              <li>Méditation et pleine conscience</li>
              <li>Marches solitaires en nature</li>
              <li>Thé ou café cérémoniel</li>
              <li>Observation du lever/coucher de soleil</li>
            </ul>
          </div>

          <div class="theme-card animate-on-scroll animate-delay-2">
            <div class="card-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 30L25 10L35 30H15Z" stroke="currentColor" stroke-width="2"/>
                <circle cx="25" cy="20" r="2" fill="currentColor"/>
              </svg>
            </div>
            <h3>Créativité libre</h3>
            <ul>
              <li>Photographie contemplative</li>
              <li>Dessin, peinture, sculpture</li>
              <li>Écriture créative</li>
              <li>Musique, chant, danse</li>
            </ul>
          </div>

          <div class="theme-card animate-on-scroll animate-delay-3">
            <div class="card-icon">
              <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="12" width="26" height="26" stroke="currentColor" stroke-width="2" rx="2"/>
                <path d="M12 20H38M20 12V38" stroke="currentColor" stroke-width="2"/>
              </svg>
            </div>
            <h3>Slow living</h3>
            <ul>
              <li>Jardinage et plantes d'intérieur</li>
              <li>Cuisine consciente et savoureuse</li>
              <li>Lectures philosophiques</li>
              <li>Minimalisme intentionnel</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- CTA Soli -->
    <section class="section">
      <div class="container">
        <div class="cta-section cta-chosen animate-on-scroll">
          <h2>Dialogue avec ton univers intérieur</h2>
          <p>
            Soli est ton journal intime intelligent — un miroir de ta vie intérieure 
            qui t'aide à explorer tes pensées, tes rêves, tes aspirations.
          </p>
          <a href="../soli.html" class="btn btn-primary">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M4 4H16V16H4V4Z" stroke="currentColor" stroke-width="2"/>
              <path d="M7 8H13M7 12H11" stroke="currentColor" stroke-width="2"/>
            </svg>
            Découvrir Soli
          </a>
        </div>
      </div>
    </section>

  </div>

  <!-- PARCOURS ISOLEMENT SUBI (SOL_002) -->
  <div id="content-suffered" class="path-content-section" style="display: none;">
    
    <!-- Message de soutien -->
    <section class="section section-alt">
      <div class="container-narrow">
        <div class="support-message animate-on-scroll">
          <div class="support-icon">💙</div>
          <h2>Tu n'es pas seul·e dans cette épreuve</h2>
          <p>
            Se sentir seul·e est difficile et douloureux. Cette souffrance est réelle, 
            et elle mérite d'être reconnue avec compassion. Soloplugs est là pour t'accompagner, 
            sans jugement, à ton rythme.
          </p>
        </div>
      </div>
    </section>

    <!-- Comprendre l'isolement -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>Comprendre ton expérience</h2>
          <p>
            L'isolement peut avoir de multiples visages. 
            Le reconnaître est le premier pas vers le mieux-être.
          </p>
        </div>

        <div class="understanding-grid">
          
          <div class="understanding-card animate-on-scroll">
            <h3>🌊 Isolement circonstanciel</h3>
            <p>
              Déménagement, rupture, perte d'un être cher, changement de vie... 
              Des événements qui bouleversent nos liens et nous laissent isolé·e.
            </p>
            <p class="card-note">
              C'est temporaire, même si ça ne le semble pas maintenant.
            </p>
          </div>

          <div class="understanding-card animate-on-scroll animate-delay-1">
            <h3>🔇 Isolement social</h3>
            <p>
              Peu ou pas de contacts sociaux réguliers. Un réseau relationnel 
              qui s'est effrité avec le temps, par la distance ou les circonstances.
            </p>
            <p class="card-note">
              Des ponts peuvent être reconstruits, pas à pas.
            </p>
          </div>

          <div class="understanding-card animate-on-scroll animate-delay-2">
            <h3>💭 Isolement émotionnel</h3>
            <p>
              Se sentir seul·e même entouré·e. L'impression que personne ne te comprend, 
              qu'aucun lien n'est vraiment profond ou authentique.
            </p>
            <p class="card-note">
              La qualité des liens compte plus que la quantité.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- Ressources d'aide -->
    <section class="section section-alt">
      <div class="container">
        <div class="section-header">
          <h2>Ressources et soutien</h2>
          <p>Des outils concrets pour alléger ta solitude et retrouver du lien</p>
        </div>

        <div class="help-grid">
          
          <div class="help-card animate-on-scroll">
            <div class="help-icon">🆘</div>
            <h3>Aide immédiate</h3>
            <p>Si tu es en détresse ou as des pensées suicidaires :</p>
            <ul class="help-contacts">
              <li><strong>Canada :</strong> 1-833-456-4566 (24/7)</li>
              <li><strong>France :</strong> 3114 (24/7)</li>
              <li><strong>Belgique :</strong> 0800 32 123 (24/7)</li>
              <li><strong>Suisse :</strong> 143 (24/7)</li>
            </ul>
            <a href="../urgences.html" class="help-link">→ Toutes les ressources d'urgence</a>
          </div>

          <div class="help-card animate-on-scroll animate-delay-1">
            <div class="help-icon">🤝</div>
            <h3>Accompagnement</h3>
            <p>Trouve du soutien adapté à ta situation :</p>
            <ul>
              <li>Groupes de soutien en ligne et locaux</li>
              <li>Associations d'écoute et d'entraide</li>
              <li>Professionnels de la santé mentale</li>
              <li>Communautés bienveillantes</li>
            </ul>
            <a href="../ressources.html" class="help-link">→ Annuaire des ressources</a>
          </div>

          <div class="help-card animate-on-scroll animate-delay-2">
            <div class="help-icon">🌱</div>
            <h3>Petits pas quotidiens</h3>
            <p>Des actions simples pour créer du lien :</p>
            <ul>
              <li>Saluer un voisin, un commerçant</li>
              <li>Rejoindre un groupe d'activité</li>
              <li>Bénévolat dans ta communauté</li>
              <li>Cours, ateliers, clubs de lecture</li>
            </ul>
            <a href="../activites.html" class="help-link">→ Idées d'activités</a>
          </div>

        </div>

        <!-- Stratégies de reconnexion -->
        <div class="strategies-section">
          <h3>Stratégies de reconnexion progressive</h3>
          
          <div class="strategy-steps">
            
            <div class="step-card animate-on-scroll">
              <div class="step-number">1</div>
              <h4>Commence petit</h4>
              <p>
                Pas besoin de grands changements. Un sourire, un bonjour, 
                un message à quelqu'un que tu n'as pas vu depuis longtemps.
              </p>
            </div>

            <div class="step-card animate-on-scroll animate-delay-1">
              <div class="step-number">2</div>
              <h4>Sois régulier·ère</h4>
              <p>
                La constance crée le lien. Un café hebdomadaire, une activité mensuelle, 
                un rendez-vous régulier — même modeste.
              </p>
            </div>

            <div class="step-card animate-on-scroll animate-delay-2">
              <div class="step-number">3</div>
              <h4>Cherche l'authenticité</h4>
              <p>
                Privilégie la qualité à la quantité. Un vrai lien vaut mieux 
                que dix connexions superficielles.
              </p>
            </div>

            <div class="step-card animate-on-scroll animate-delay-3">
              <div class="step-number">4</div>
              <h4>Sois patient·e avec toi</h4>
              <p>
                Reconstruire des liens prend du temps. Les rechutes sont normales. 
                Célèbre chaque petit progrès.
              </p>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- CTA Solo -->
    <section class="section">
      <div class="container">
        <div class="cta-section cta-suffered animate-on-scroll">
          <h2>Parle avec Solo, ton compagnon bienveillant</h2>
          <p>
            Solo est là pour t'écouter sans jugement, répondre à tes questions, 
            et t'accompagner dans ta réflexion. Disponible 24/7, en toute confidentialité.
          </p>
          <div class="btn-group">
            <a href="../solo.html" class="btn btn-primary">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="2"/>
                <path d="M10 6V10L13 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
              Parler avec Solo
            </a>
            <a href="../urgences.html" class="btn btn-secondary">
              Ressources d'urgence
            </a>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- ============================================================
       SECTIONS COMMUNES (pour tous les parcours)
       ============================================================ -->
  
  <!-- Statistiques mondiales -->
  <section class="section stats-section">
    <div class="container">
      <div class="section-header">
        <h2>L'épidémie silencieuse en chiffres</h2>
        <p>
          La solitude est devenue un enjeu majeur de santé publique à l'échelle mondiale. 
          Ces chiffres révèlent l'ampleur d'un phénomène trop longtemps ignoré.
        </p>
      </div>

      <div class="stats-grid">

        <!-- USA -->
        <div class="stat-card stat-highlight animate-on-scroll">
          <div class="stat-flag">🇺🇸</div>
          <div class="stat-number">1 sur 2</div>
          <div class="stat-label">adulte américain souffrait de solitude avant même la pandémie</div>
          <div class="stat-compare">US Surgeon General, 2023</div>
        </div>

        <div class="stat-card animate-on-scroll animate-delay-1">
          <div class="stat-flag">🇺🇸</div>
          <div class="stat-number">52M</div>
          <div class="stat-label">d'Américains vivent une solitude quotidienne</div>
          <div class="stat-compare">Gallup, septembre 2024</div>
        </div>

        <div class="stat-card animate-on-scroll animate-delay-2">
          <div class="stat-flag">🇺🇸</div>
          <div class="stat-number">30%</div>
          <div class="stat-label">des 18-34 ans se sentent seuls plusieurs fois par semaine</div>
          <div class="stat-compare">American Psychiatric Association, 2024</div>
        </div>

        <div class="stat-card stat-warning animate-on-scroll animate-delay-3">
          <div class="stat-flag">🚬</div>
          <div class="stat-number">15</div>
          <div class="stat-label">cigarettes/jour — équivalent santé du manque de connexion</div>
          <div class="stat-compare">US Surgeon General Advisory</div>
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
            <a href="../magazine.html" class="article-link">
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
            <a href="../magazine.html" class="article-link">
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
            <a href="../magazine.html" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="../magazine.html" class="btn btn-primary" style="background: var(--vs-gold); color: white; border-color: var(--vs-gold);">
          Voir tous les articles
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->

  <?php include '../components/footer.php'; ?>
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
    
    // Restaurer le parcours au chargement si déjà choisi
    document.addEventListener('DOMContentLoaded', () => {
      const savedPath = localStorage.getItem('soloplugs_vivre_solo_path');
      if (savedPath) {
        // Note: On ne restaure PAS automatiquement pour forcer l'utilisateur 
        // à faire un choix conscient à chaque visite
        // Mais on pourrait décommenter cette ligne si souhaité:
        // selectPath(savedPath);
      }
    });
  </script>

</body>
</html>
