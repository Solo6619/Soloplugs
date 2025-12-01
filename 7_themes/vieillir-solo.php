<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Vieillir solo — La sagesse des années';
    $pageDescription = 'Accompagnement pour les personnes qui vieillissent seules. Dignité, autonomie et liberté.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['vieillir-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-vieillir">
    <div class="hero-content">
      
      <!-- Icône SVG : Arbre de vie -->
      <div class="hero-icon">
        <svg viewBox="0 0 110 110" width="110" height="110" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Tronc -->
          <path d="M55 95V60" stroke="#A88555" stroke-width="4" stroke-linecap="round"/>
          <path d="M55 75L45 65" stroke="#A88555" stroke-width="3" stroke-linecap="round"/>
          <path d="M55 70L65 62" stroke="#A88555" stroke-width="3" stroke-linecap="round"/>
          <!-- Feuillage -->
          <circle cx="55" cy="40" r="28" fill="url(#treeGradient)" opacity="0.9"/>
          <circle cx="40" cy="45" r="18" fill="url(#treeGradient)" opacity="0.8"/>
          <circle cx="70" cy="45" r="18" fill="url(#treeGradient)" opacity="0.8"/>
          <circle cx="55" cy="25" r="15" fill="url(#treeGradient)" opacity="0.85"/>
          <!-- Soleil couchant -->
          <circle cx="90" cy="20" r="12" fill="#C9A26F" opacity="0.3"/>
          <path d="M90 8V12" stroke="#C9A26F" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
          <path d="M102 20H98" stroke="#C9A26F" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
          <path d="M90 28V32" stroke="#C9A26F" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
          <!-- Sol -->
          <path d="M25 95C35 93 45 94 55 95C65 94 75 93 85 95" stroke="#A88555" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
          <defs>
            <linearGradient id="treeGradient" x1="30" y1="20" x2="80" y2="60" gradientUnits="userSpaceOnUse">
              <stop offset="0%" stop-color="#A3B18A"/>
              <stop offset="100%" stop-color="#7D8B6A"/>
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- Ornement -->
      <div class="hero-ornament">
        <span class="hero-ornament-line"></span>
        <span class="hero-ornament-symbol">✦</span>
        <span class="hero-ornament-line"></span>
      </div>

      <!-- Titre -->
      <h1 class="hero-title">Vieillir solo</h1>
      
      <!-- Sous-titre -->
      <p class="hero-subtitle">La richesse d'une vie bien vécue</p>
      
      <!-- Description -->
      <p class="hero-description">
        Vieillir seul·e, ce n'est pas une fin, c'est une continuation. 
        Vous portez en vous des années d'expérience, de sagesse, de résilience. 
        Cette étape de vie mérite autant de dignité, de connexion et d'épanouissement 
        que toutes les autres.
      </p>

    </div>
  </section>

  <!-- ============================================================
       SECTION : LA FORCE DE L'EXPÉRIENCE
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>La valeur d'une vie riche</h2>
        <p>
          À 60, 70, 80 ans et plus, vous avez accumulé une richesse que l'argent 
          ne peut acheter : l'expérience, la perspective, la sagesse.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Valeur 1 -->
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
              <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
            </svg>
          </div>
          <h3>La mémoire vivante</h3>
          <p>
            Vous avez traversé des époques, vu le monde changer, vécu des événements 
            historiques. Votre mémoire est un trésor pour les générations futures.
          </p>
          <p class="emphasis">
            Votre histoire mérite d'être racontée, préservée, transmise.
          </p>
        </div>

        <!-- Valeur 2 -->
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5z"/>
              <path d="M2 17l10 5 10-5"/>
              <path d="M2 12l10 5 10-5"/>
            </svg>
          </div>
          <h3>La sagesse acquise</h3>
          <p>
            Des décennies de joies, de peines, de défis surmontés. Vous avez développé 
            une compréhension profonde de la vie, des relations, de ce qui compte vraiment.
          </p>
          <p class="emphasis">
            Votre sagesse est une lumière pour ceux qui cherchent leur chemin.
          </p>
        </div>

        <!-- Valeur 3 -->
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 6v6l4 2"/>
            </svg>
          </div>
          <h3>La perspective unique</h3>
          <p>
            Avec l'âge vient une capacité à voir l'essentiel, à ne pas s'inquiéter 
            des futilités. Vous savez ce qui mérite votre temps et votre énergie.
          </p>
          <p class="emphasis">
            Cette clarté est un cadeau rare dans un monde agité.
          </p>
        </div>

        <!-- Valeur 4 -->
        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
          </div>
          <h3>La résilience prouvée</h3>
          <p>
            Vous avez survécu à des épreuves, perdu des êtres chers, surmonté des obstacles. 
            Votre résilience n'est pas une théorie, c'est une réalité vécue.
          </p>
          <p class="emphasis">
            Vous êtes la preuve vivante que l'on peut traverser les tempêtes.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="section section-alt">
    <div class="container container-narrow">
      <blockquote class="quote-block animate-on-scroll">
        <p>
          Vieillir en solo n'est pas un naufrage, c'est naviguer avec l'expérience 
          d'avoir déjà affronté bien des tempêtes. Vous connaissez la mer, et la mer vous connaît.
        </p>
        <cite>— Philosophie Soloplugs</cite>
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       SECTION : LES DÉFIS RÉELS
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Les défis de vieillir seul·e</h2>
        <p>
          Reconnaissons les défis réels sans dramatiser, mais sans les minimiser non plus. 
          Ils existent, et des solutions existent aussi.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Défi 1 -->
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>L'isolement social</h3>
          <p>
            <strong>Le défi :</strong> Le cercle social rétrécit avec l'âge. 
            Ami·es qui déménagent, tombent malades, décèdent. Les enfants ont leur vie.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Centres communautaires pour aîné·es</li>
            <li>Bénévolat (partager votre expérience)</li>
            <li>Clubs et associations</li>
            <li>Université du 3e âge</li>
          </ul>
        </div>

        <!-- Défi 2 -->
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
          <h3>La santé et l'autonomie</h3>
          <p>
            <strong>Le défi :</strong> Le corps change, la santé devient plus fragile. 
            Gérer les rendez-vous médicaux, les médicaments, maintenir l'autonomie.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Suivi médical régulier et préventif</li>
            <li>Activité physique adaptée</li>
            <li>Aide à domicile si nécessaire</li>
            <li>Aménagement du logement</li>
          </ul>
        </div>

        <!-- Défi 3 -->
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
              <line x1="12" y1="18" x2="12.01" y2="18"/>
            </svg>
          </div>
          <h3>La fracture numérique</h3>
          <p>
            <strong>Le défi :</strong> Le monde devient de plus en plus numérique. 
            Services en ligne, applications, technologie parfois intimidante.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Cours d'informatique pour aîné·es</li>
            <li>Aide familiale ou bénévole</li>
            <li>Bibliothèques (aide gratuite)</li>
            <li>Appels vidéo pour garder contact</li>
          </ul>
        </div>

        <!-- Défi 4 -->
        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 8v4"/>
              <path d="M12 16h.01"/>
            </svg>
          </div>
          <h3>Le poids des souvenirs</h3>
          <p>
            <strong>Le défi :</strong> Les pertes s'accumulent — conjoint·e, ami·es, 
            parfois enfants. Vivre avec les souvenirs peut être doux ou douloureux.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Groupes de parole et de deuil</li>
            <li>Écrire ses mémoires (avec Soli)</li>
            <li>Soutien psychologique</li>
            <li>Transmettre aux plus jeunes</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : TÉMOIGNAGES
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Ils vivent pleinement</h2>
        <p>
          Des personnes qui ont choisi de vieillir avec dignité, autonomie et joie.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Témoignage 1 -->
        <div class="testimonial-card animate-on-scroll">
          <div class="testimonial-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
              <line x1="9" y1="9" x2="9.01" y2="9"/>
              <line x1="15" y1="9" x2="15.01" y2="9"/>
            </svg>
          </div>
          <h3>Jeanne, 72 ans</h3>
          <p>
            « Après le décès de mon mari, j'ai eu peur de la solitude. Puis j'ai découvert 
            l'université du 3e âge. J'apprends l'italien, je fais de l'aquarelle, 
            j'ai un nouveau cercle d'amies. À 72 ans, je vis une deuxième jeunesse ! »
          </p>
        </div>

        <!-- Témoignage 2 -->
        <div class="testimonial-card animate-on-scroll animate-delay-1">
          <div class="testimonial-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 20h9"/>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
            </svg>
          </div>
          <h3>Robert, 68 ans</h3>
          <p>
            « J'ai pris ma retraite à 65 ans et j'ai commencé à écrire mes mémoires. 
            Trois ans plus tard, j'ai un manuscrit de 300 pages. Mes petits-enfants 
            sauront d'où ils viennent. C'est mon héritage le plus précieux. »
          </p>
        </div>

        <!-- Témoignage 3 -->
        <div class="testimonial-card animate-on-scroll animate-delay-2">
          <div class="testimonial-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </div>
          <h3>Thérèse, 80 ans</h3>
          <p>
            « À 80 ans, je fais du bénévolat à la banque alimentaire deux fois par semaine. 
            Je jardine l'été. Je marche tous les jours. Mon corps n'a plus 20 ans, 
            mais mon esprit est vif. La vie continue, différemment mais pleinement. »
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : RESSOURCES
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Ressources et soutien</h2>
        <p>
          Services, organismes et ressources pour vous accompagner 
          dans cette étape de vie.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Ressource 1 -->
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <h3>Services gouvernementaux</h3>
          <ul>
            <li>Régie des rentes du Québec</li>
            <li>RAMQ (santé)</li>
            <li>Soutien à domicile (CLSC)</li>
            <li>Transport adapté</li>
            <li>Crédit d'impôt pour aîné·es</li>
          </ul>
        </div>

        <!-- Ressource 2 -->
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Organismes communautaires</h3>
          <ul>
            <li>FADOQ (clubs âge d'or)</li>
            <li>Centres communautaires pour aîné·es</li>
            <li>Popote roulante</li>
          </ul>
          <div class="resource-highlight">
            <strong>Ligne Aide Abus Aînés</strong>
            <span class="phone">1-888-489-2287</span>
          </div>
        </div>

        <!-- Ressource 3 -->
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
          <h3>Santé et bien-être</h3>
          <ul>
            <li>Pharmaciens (conseils gratuits)</li>
            <li>Cliniques gériatriques</li>
            <li>Programmes d'exercice adapté</li>
            <li>Soutien psychologique</li>
          </ul>
          <div class="resource-highlight">
            <strong>Info-Santé</strong>
            <span class="phone">811</span>
          </div>
        </div>

        <!-- Ressource 4 -->
        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
            </svg>
          </div>
          <h3>Apprentissage et loisirs</h3>
          <ul>
            <li>Université du 3e âge</li>
            <li>Bibliothèques (activités gratuites)</li>
            <li>Cours municipaux</li>
            <li>Ateliers créatifs</li>
            <li>Clubs sociaux</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA : SOLO & SOLI
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="cta-section animate-on-scroll">
        <h2>Votre voix compte</h2>
        <p>
          Solo peut vous guider vers les ressources adaptées à vos besoins. 
          Soli peut devenir le gardien de vos mémoires et de votre sagesse.
        </p>
        <div class="btn-group">
          <a href="../solo.html" class="btn btn-primary">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            Parler à Solo
          </a>
          <a href="../soli.html" class="btn btn-secondary">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 20h9"/>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
            </svg>
            Écrire mes mémoires
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
