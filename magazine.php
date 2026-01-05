<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Magazine';
    $pageDescription = 'Articles, témoignages et ressources pour mieux vivre avec soi-même.';
    $basePath = '';
    $currentPage = 'magazine';
    $additionalCSS = ['magazine.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       CONTENU PRINCIPAL MAGAZINE
       ============================================================ -->
  <main class="magazine-container">

    <!-- HEADER MAGAZINE -->
    <header class="magazine-header" style="text-align: center;">
      <h1 style="text-align: center;">Soloplugs Magazine – La voix de la solitude</h1>
      <p style="text-align: center;">Articles, témoignages et ressources pour mieux vivre avec soi-même.</p>
    </header>

    <!-- ============================================================
         SECTION LA VOIX - Affichage horizontal (EXCEPTION)
         Tous les articles Voix visibles directement
         ============================================================ -->
    <section class="voix-section" id="voix-section">
      <h2 class="voix-title">La Voix</h2>
      <p class="voix-subtitle">Articles de fond empathiques sur la solitude</p>
      <div class="voix-carousel" id="voix-carousel">
        <!-- Articles Voix insérés par JavaScript -->
      </div>
    </section>

    <!-- ============================================================
         SECTION BD SPÉCIALE
         ============================================================ -->
    <section class="bd-section" id="bd-section">
      <div class="bd-container">
        <h2 class="bd-title">SOLO BD</h2>
        <div class="bd-panels">
          <img src="images/Magazine/Solo_bd_0101.png" alt="Panel 1" class="bd-panel">
          <img src="images/Magazine/Solo_bd_0102.png" alt="Panel 2" class="bd-panel">
          <img src="images/Magazine/Solo_bd_0103.png" alt="Panel 3" class="bd-panel">
          <img src="images/Magazine/Solo_bd_0104.png" alt="Panel 4" class="bd-panel">
        </div>
      </div>
    </section>

    <!-- ============================================================
         GRILLE DES SECTIONS - Une seule entrée par section
         Chaque carte mène vers une page dédiée
         ============================================================ -->
    <section class="sections-grid-container">
      <h2 class="sections-title">Explorer nos rubriques</h2>
      <div class="sections-grid" id="sections-grid">
        <!-- Cartes de sections insérées par JavaScript -->
      </div>
    </section>

  </main>

  <?php include 'components/footer.php'; ?>

  <!-- ============================================================
       JAVASCRIPT SPÉCIFIQUE AU MAGAZINE
       ============================================================ -->
  <script>
    // ============================================================
    // CONFIGURATION DES SECTIONS
    // ============================================================
    const SECTIONS_CONFIG = {
      table: { 
        title: "Solo à table", 
        desc: "Recettes gourmandes pour une personne",
        icon: "🍽️",
        image: "images/Magazine/recettes/riz_saute_solo.jpg",
        url: "section-table.php",
        color: "#E8DDD4"
      },
      jeux: { 
        title: "Jeux en Solo", 
        desc: "Solitaire, Sudoku, échecs et plus encore",
        icon: "🎮",
        image: "images/Magazine/Jeux_solo/Jeux_en_solo_001.png",
        url: "articles/jeux-solo.php",
        color: "#D4E8DD"
      },
      hobbies: { 
        title: "Hobbies & Créativités", 
        desc: "Dessin, musique, artisanat et plus encore",
        icon: "🎨",
        image: "images/Magazine/Hobbies_001.png",
        url: "section-hobbies.php",
        color: "#E8D4DD"
      },
      culture: { 
        title: "Lectures & Découvertes", 
        desc: "Livres, films, podcasts",
        icon: "📚",
        image: "images/Magazine/Lectures_decouvertes_001.png",
        url: "lectures-decouvertes.php",
        color: "#D4DDE8"
      }
    };

    // ============================================================
    // PHOTOS POUR LES ARTICLES
    // ============================================================
    const PHOTOS = {
      // LA VOIX
      103: "images/Magazine/Solitude_invisible_01.png",
      101: "images/Magazine/mag1.jpg",
      102: "images/Magazine/Solitude_silencieuse_02.jpg"
    };

    // ============================================================
    // ARTICLES DE LA SECTION "LA VOIX" UNIQUEMENT
    // (Les autres articles sont sur leurs pages dédiées)
    // ============================================================
    const ARTICLES_VOIX = [
      { 
        id: 103, 
        title: "La solitude invisible", 
        excerpt: "On peut être entouré et se sentir profondément seul. La solitude ne dépend pas du fait d'être seul ou entouré.", 
        read: "5 min", 
        date: "6 déc 2025", 
        url: "articles/solitude-invisible.php"
      },
      { 
        id: 101, 
        title: "Apprivoiser le silence du dimanche", 
        excerpt: "Le dimanche en solo peut être lourd. Comment transformer cette journée en temps choisi plutôt que subi.", 
        read: "7 min", 
        date: "15 oct 2025", 
        url: "articles/apprivoiser-le-silence.php"
      },
      { 
        id: 102, 
        title: "La beauté des petits matins", 
        excerpt: "Ces heures calmes où le monde semble attendre. Un temps pour soi, avant le bruit du jour.", 
        read: "5 min", 
        date: "10 oct 2025",
        url: "#"
      }
    ];

    // ============================================================
    // FONCTION : Créer une carte d'article Voix
    // ============================================================
    function createVoixCard(article) {
      const photoUrl = PHOTOS[article.id] || 'images/Magazine/default.jpg';
      const articleUrl = article.url || '#';
      
      return `
        <a href="${articleUrl}" class="voix-card-link">
          <article class="voix-card">
            <div class="voix-card-image">
              <img src="${photoUrl}" alt="${article.title}" loading="lazy">
              <div class="photo-overlay"></div>
            </div>
            <div class="voix-card-content">
              <h3>${article.title}</h3>
              <p>${article.excerpt}</p>
              <div class="voix-card-footer">
                <span>${article.read}</span>
                <span>${article.date}</span>
              </div>
            </div>
          </article>
        </a>
      `;
    }

    // ============================================================
    // FONCTION : Créer une carte de section
    // ============================================================
    function createSectionCard(key, config) {
      return `
        <a href="${config.url}" class="section-card-link">
          <article class="section-card" style="--section-color: ${config.color}">
            <div class="section-card-image">
              <img src="${config.image}" alt="${config.title}" loading="lazy">
              <div class="section-overlay">
                <span class="section-icon">${config.icon}</span>
              </div>
            </div>
            <div class="section-card-content">
              <h3>${config.title}</h3>
              <p>${config.desc}</p>
              <span class="section-cta">Découvrir →</span>
            </div>
          </article>
        </a>
      `;
    }

    // ============================================================
    // INITIALISATION AU CHARGEMENT
    // ============================================================
    document.addEventListener('DOMContentLoaded', function() {
      console.log('Magazine Soloplugs - Initialisation');
      
      // 1. Afficher les articles de La Voix (carousel horizontal)
      const voixCarousel = document.getElementById('voix-carousel');
      if (voixCarousel) {
        voixCarousel.innerHTML = ARTICLES_VOIX.map(a => createVoixCard(a)).join('');
        console.log(`✓ Section Voix : ${ARTICLES_VOIX.length} articles affichés`);
      }

      // 2. Afficher les cartes de sections
      const sectionsGrid = document.getElementById('sections-grid');
      if (sectionsGrid) {
        let sectionsHTML = '';
        for (const [key, config] of Object.entries(SECTIONS_CONFIG)) {
          sectionsHTML += createSectionCard(key, config);
        }
        sectionsGrid.innerHTML = sectionsHTML;
        console.log(`✓ Grille sections : ${Object.keys(SECTIONS_CONFIG).length} sections affichées`);
      }

      console.log('✓ Magazine initialisé avec succès');
    });
  </script>

  <?php include 'components/scripts.php'; ?>

</body>
</html>
