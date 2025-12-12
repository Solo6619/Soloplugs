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
      <h1 style="text-align: center;">Soloplugs Magazine — La voix de la solitude</h1>
      <p style="text-align: center;">Articles, témoignages et ressources pour mieux vivre avec soi-même.</p>
    </header>

    <!-- FILTRES RUBRIQUES -->
    <div class="rubriques-filter">
      <button class="rubrique-btn active" data-rubrique="all">
        <span>Tout voir</span>
      </button>
      <button class="rubrique-btn" data-rubrique="voix">
        <span>La Voix</span>
      </button>
      <button class="rubrique-btn" data-rubrique="table">
        <span>Solo à table</span>
      </button>
      <button class="rubrique-btn" data-rubrique="jeux">
        <span>Jeux en Solo</span>
      </button>
      <button class="rubrique-btn" data-rubrique="creer">
        <span>Créer pour soi</span>
      </button>
      <button class="rubrique-btn" data-rubrique="culture">
        <span>Lectures & Découvertes</span>
      </button>
    </div>

    <!-- SECTION À LA UNE -->
    <section class="featured-section" id="featured-section">
      <h2>À la une</h2>
      <div class="featured-grid" id="featured-grid">
        <!-- Articles à la une seront insérés ici par JavaScript -->
      </div>
    </section>

    <!-- SECTION TITRE DYNAMIQUE -->
    <div class="section-header hidden" id="section-header">
      <h2 id="section-title"></h2>
      <p id="section-desc"></p>
    </div>

    <!-- SECTION BD SPÉCIALE -->
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

    <!-- GRILLE D'ARTICLES -->
    <section class="magazine-grid" id="articles-grid">
      <!-- Articles seront insérés ici par JavaScript -->
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <!-- ============================================================
       JAVASCRIPT SPÉCIFIQUE AU MAGAZINE
       ============================================================ -->
  <script>
    // Configuration des rubriques
    const RUBRIQUES = {
      voix: { title: "La Voix", desc: "Articles de fond empathiques" },
      table: { title: "Solo à table", desc: "Recettes pour une personne" },
      jeux: { title: "Jeux & Solo", desc: "Jeux et activités en solo" },
      creer: { title: "Créer pour soi", desc: "Projets créatifs simples" },
      culture: { title: "Lectures & Découvertes", desc: "Livres, films, podcasts" }
    };

    // Photos pour les articles - Images locales
    const PHOTOS = {
      // LA VOIX
      103: "images/Magazine/Solitude_invisible_01.png",
      101: "images/Magazine/Solitude_silencieuse_01.png",
      102: "images/Magazine/Solitude_silencieuse_02.jpg",
      
      // SOLO À TABLE
      203: "images/Magazine/riz_saute_solo.jpg",
      204: "images/Magazine/salade_lentilles_solo.jpg",
      202: "images/Magazine/pates_herbes.jpg",  // À ajouter
      201: "images/Magazine/riz_saute_solo.jpg",
      
      // JEUX & SOLO
      301: "images/Magazine/Jeux_solo/pyramid_jeu.jpg",  // À ajouter dans dossier Jeux_solo
      302: "images/Magazine/Jeux_solo/pyramid_jeu.jpg",
      303: "images/Magazine/Jeux_solo/pyramid_jeu.jpg",
      
      // CRÉER POUR SOI
      401: "images/Magazine/bullet_journal.jpg",  // À ajouter
      
      // LECTURES & DÉCOUVERTES
      501: "images/Magazine/cinema_solo.jpg"  // À ajouter
    };

    // Articles du magazine
    const ARTICLES = [
      { 
        id: 103, 
        rubrique: "voix", 
        title: "La solitude invisible", 
        excerpt: "On peut être entouré et se sentir profondément seul. La solitude ne dépend pas du fait d'être seul ou entouré.", 
        read: "5 min", 
        date: "6 déc 2025", 
        featured: true,
        url: "articles/solitude-invisible.php"
      },
      { 
        id: 101, 
        rubrique: "voix", 
        title: "Apprivoiser le silence du dimanche", 
        excerpt: "Le dimanche en solo peut être lourd. Comment transformer cette journée en temps choisi plutôt que subi.", 
        read: "7 min", 
        date: "15 oct 2025", 
        featured: true,
        url: "articles/apprivoiser-le-silence.php"
      },
      { 
        id: 203, 
        rubrique: "table", 
        title: "Cuisiner pour soi n'est pas un compromis", 
        excerpt: "Redécouvrir le plaisir de cuisiner pour une personne", 
        read: "8 min", 
        date: "10 déc 2025", 
        featured: true,
        url: "articles/cuisiner-pour-soi.php"
      },
      
      { 
  id: 303, 
  rubrique: "jeux", 
  title: "Solitaire Klondike : Guide complet + Jeu en ligne", 
  excerpt: "Découvrez l'histoire, les règles, les stratégies et jouez directement depuis l'article. Le roi des jeux de patience.", 
  read: "12 min", 
  date: "11 déc 2025",
  featured: true,  // Mettre à la une
  url: "articles/solitaire-klondike-complet.php"
},
     
      { 
        id: 301, 
        rubrique: "jeux", 
        title: "5 jeux de cartes à faire seul·e", 
        excerpt: "Du solitaire classique aux variantes modernes.", 
        read: "6 min", 
        date: "13 oct 2025",
        url: "articles/jeux-cartes-guide.php"
      },
      { 
        id: 204, 
        rubrique: "table", 
        title: "Salade tiède lentilles-chèvre-noix", 
        excerpt: "Une recette complète et savoureuse pour une personne", 
        read: "6 min", 
        date: "9 déc 2025",
        url: "articles/salade-lentilles-solo.php"
      },
      { 
        id: 401, 
        rubrique: "creer", 
        title: "Tenir un bullet journal minimaliste", 
        excerpt: "Un carnet, un stylo, 5 minutes par jour.", 
        read: "7 min", 
        date: "11 oct 2025"
      },
      { 
        id: 501, 
        rubrique: "culture", 
        title: "5 films qui parlent vraiment de solitude", 
        excerpt: "Lost in Translation, Her, Paterson...", 
        read: "8 min", 
        date: "14 oct 2025"
      },
      { 
        id: 102, 
        rubrique: "voix", 
        title: "La beauté des petits matins", 
        excerpt: "Ces heures calmes où le monde semble attendre. Un temps pour soi, avant le bruit du jour.", 
        read: "5 min", 
        date: "10 oct 2025"
      },
      { 
        id: 202, 
        rubrique: "table", 
        title: "Pâtes aux herbes fraîches", 
        excerpt: "Simple, rapide, délicieux. Quand cuisiner pour soi devient un acte de tendresse.", 
        read: "3 min", 
        date: "9 oct 2025"
      }
    ];

    // État de l'application
    let currentFilter = 'all';

    // Fonction pour créer une carte d'article
    function createArticleCard(article) {
      const rubrique = RUBRIQUES[article.rubrique];
      const photoUrl = PHOTOS[article.id] || 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80';
      const articleUrl = article.url || '#';
      
      return `
        <a href="${articleUrl}" class="mag-card-link">
          <article class="mag-card" data-rubrique="${article.rubrique}">
            <div class="mag-card-image">
              <img src="${photoUrl}" alt="${article.title}" loading="lazy">
              <div class="photo-overlay"></div>
            </div>
            <div class="mag-card-content">
              <div class="mag-card-meta">
                <span class="mag-card-badge">${article.rubrique}</span>
              </div>
              <h3>${article.title}</h3>
              <p>${article.excerpt}</p>
              <div class="mag-card-footer">
                <span>${article.read}</span>
                <span>${article.date}</span>
              </div>
            </div>
          </article>
        </a>
      `;
    }

    // Fonction pour afficher les articles
    function displayArticles(filter = 'all') {
      currentFilter = filter;
      const featuredGrid = document.getElementById('featured-grid');
      const articlesGrid = document.getElementById('articles-grid');
      const featuredSection = document.getElementById('featured-section');
      const sectionHeader = document.getElementById('section-header');
      const sectionTitle = document.getElementById('section-title');
      const sectionDesc = document.getElementById('section-desc');
      const bdSection = document.getElementById('bd-section');  // ← AJOUT ICI

      // Vérification que les éléments existent
      if (!featuredGrid || !articlesGrid || !featuredSection) {
        console.error('Éléments DOM manquants');
        return;
      }

      const filteredArticles = filter === 'all' 
        ? ARTICLES 
        : ARTICLES.filter(a => a.rubrique === filter);

      const featuredArticles = filteredArticles.filter(a => a.featured);
      const regularArticles = filteredArticles.filter(a => !a.featured || filter !== 'all');

      // Afficher section "À la une"
      if (filter === 'all' && featuredArticles.length > 0) {
        featuredSection.classList.remove('hidden');
        featuredGrid.innerHTML = featuredArticles.map(a => createArticleCard(a)).join('');
      } else {
        featuredSection.classList.add('hidden');
      }

      // ✨ NOUVEAU CODE : Afficher/cacher SOLO BD selon le filtre
      if (bdSection) {
        if (filter === 'all') {
          bdSection.style.display = 'block';  // Afficher sur "Tout voir"
        } else {
          bdSection.style.display = 'none';   // Cacher sur les rubriques
        }
      }

      // Afficher titre de section si filtre actif
      if (filter !== 'all' && sectionHeader) {
        const rubrique = RUBRIQUES[filter];
        if (rubrique && sectionTitle && sectionDesc) {
          sectionTitle.innerHTML = rubrique.title;
          sectionDesc.textContent = rubrique.desc;
          sectionHeader.classList.remove('hidden');
        }
      } else if (sectionHeader) {
        sectionHeader.classList.add('hidden');
      }

      // Afficher articles
      articlesGrid.innerHTML = regularArticles.map(a => createArticleCard(a)).join('');
      
      console.log(`Articles affichés: ${filteredArticles.length} (dont ${featuredArticles.length} à la une)`);
    }

    // Gestion des filtres
    document.addEventListener('DOMContentLoaded', function() {
      console.log('DOM chargé, initialisation du magazine');
      
      // Gestion des filtres
      document.querySelectorAll('.rubrique-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          document.querySelectorAll('.rubrique-btn').forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          const filter = btn.dataset.rubrique;
          displayArticles(filter);
        });
      });

      // Affichage initial
      displayArticles('all');
    });
  </script>

  <?php include 'components/scripts.php'; ?>

</body>
</html>
