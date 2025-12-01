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
    <header class="magazine-header">
      <h1>Soloplugs Magazine — La voix de la solitude</h1>
      <p>Articles, témoignages et ressources pour mieux vivre avec soi-même.</p>
    </header>

    <!-- FILTRES RUBRIQUES -->
    <div class="rubriques-filter">
      <button class="rubrique-btn active" data-rubrique="all">
        <span class="icon">✨</span>
        <span>Tout voir</span>
      </button>
      <button class="rubrique-btn" data-rubrique="voix">
        <span class="icon">📢</span>
        <span>La Voix</span>
      </button>
      <button class="rubrique-btn" data-rubrique="table">
        <span class="icon">🍳</span>
        <span>Solo à table</span>
      </button>
      <button class="rubrique-btn" data-rubrique="jeux">
        <span class="icon">🎲</span>
        <span>Jeux & Solo</span>
      </button>
      <button class="rubrique-btn" data-rubrique="creer">
        <span class="icon">🎨</span>
        <span>Créer pour soi</span>
      </button>
      <button class="rubrique-btn" data-rubrique="culture">
        <span class="icon">📚</span>
        <span>Lectures & Découvertes</span>
      </button>
      <button class="rubrique-btn" data-rubrique="bd">
        <span class="icon">💭</span>
        <span>Solo en BD</span>
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
      voix: { title: "La Voix", icon: "📢", desc: "Articles de fond empathiques" },
      table: { title: "Solo à table", icon: "🍳", desc: "Recettes pour une personne" },
      jeux: { title: "Jeux & Solo", icon: "🎲", desc: "Jeux et activités en solo" },
      creer: { title: "Créer pour soi", icon: "🎨", desc: "Projets créatifs simples" },
      culture: { title: "Lectures & Découvertes", icon: "📚", desc: "Livres, films, podcasts" },
      bd: { title: "Solo en BD", icon: "💭", desc: "Strips philo-humoristiques" }
    };

    // Photos pour les articles
    const PHOTOS = {
      101: "https://images.unsplash.com/photo-1513002749550-c59d786b8e6c?w=800&q=80",
      201: "https://images.unsplash.com/photo-1547592166-23ac45744acd?w=800&q=80",
      301: "https://images.unsplash.com/photo-1606220945770-b5b6c2c55bf1?w=800&q=80",
      401: "https://images.unsplash.com/photo-1517842645767-c639042777db?w=800&q=80",
      501: "https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?w=800&q=80",
      601: "https://images.unsplash.com/photo-1584308972272-9e4e7685e80f?w=800&q=80",
      102: "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80",
      202: "https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=800&q=80"
    };

    // Articles du magazine
    const ARTICLES = [
      { 
        id: 101, 
        rubrique: "voix", 
        title: "Apprivoiser le silence du dimanche", 
        excerpt: "Le dimanche en solo peut être lourd. Comment transformer cette journée en temps choisi plutôt que subi.", 
        read: "7 min", 
        date: "15 oct 2025", 
        featured: true 
      },
      { 
        id: 201, 
        rubrique: "table", 
        title: "Risotto réconfort pour soi", 
        excerpt: "Un vrai risotto crémeux en 25 minutes. Parfait pour un soir où on a besoin de douceur.", 
        read: "4 min", 
        date: "14 oct 2025", 
        featured: true 
      },
      { 
        id: 601, 
        rubrique: "bd", 
        title: "Solo #1 : Le frigo du dimanche soir", 
        excerpt: "Première aventure de Solo face au dilemme universel.", 
        read: "1 min", 
        date: "16 oct 2025", 
        featured: true 
      },
      { 
        id: 301, 
        rubrique: "jeux", 
        title: "5 jeux de cartes à faire seul·e", 
        excerpt: "Du solitaire classique aux variantes modernes.", 
        read: "6 min", 
        date: "13 oct 2025" 
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
      
      return `
        <article class="mag-card" data-rubrique="${article.rubrique}">
          <div class="mag-card-image">
            <img src="${photoUrl}" alt="${article.title}" loading="lazy">
            <div class="photo-overlay"></div>
          </div>
          <div class="mag-card-content">
            <div class="mag-card-meta">
              ${currentFilter === 'all' ? `<span class="icon">${rubrique.icon}</span>` : ''}
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

      // Afficher titre de section si filtre actif
      if (filter !== 'all') {
        const rubrique = RUBRIQUES[filter];
        sectionTitle.innerHTML = `${rubrique.icon} ${rubrique.title}`;
        sectionDesc.textContent = rubrique.desc;
        sectionHeader.classList.remove('hidden');
      } else {
        sectionHeader.classList.add('hidden');
      }

      // Afficher articles
      articlesGrid.innerHTML = regularArticles.map(a => createArticleCard(a)).join('');
    }

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
  </script>

  <?php include 'components/scripts.php'; ?>

</body>
</html>
