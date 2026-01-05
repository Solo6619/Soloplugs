<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Créer pour soi';
    $pageDescription = 'Projets créatifs et artistiques pour cultiver sa solitude.';
    $basePath = '';
    $currentPage = 'magazine';
    $additionalCSS = ['magazine.css', 'section-page.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       PAGE SECTION : CRÉER POUR SOI
       ============================================================ -->
  <main class="section-page-container">

    <!-- HEADER DE SECTION -->
    <header class="section-page-header" style="--section-accent: #B87D9B;">
      <a href="magazine.php" class="back-link">← Retour au magazine</a>
      <div class="section-page-icon">✏️</div>
      <h1>Créer pour soi</h1>
      <p>La création n'a pas besoin de public. Un carnet, un pinceau, quelques minutes par jour suffisent pour transformer la solitude en espace de liberté.</p>
    </header>

    <!-- GRILLE DES ARTICLES DE CETTE SECTION -->
    <section class="section-articles-grid" id="section-articles">
      <!-- Articles insérés par JavaScript -->
    </section>

  </main>

  <?php include 'components/footer.php'; ?>

  <!-- ============================================================
       JAVASCRIPT SPÉCIFIQUE À LA SECTION
       ============================================================ -->
  <script>
    // ============================================================
    // ARTICLES DE LA SECTION CRÉER
    // ============================================================
    const SECTION_ARTICLES = [
      { 
        id: 401, 
        title: "Tenir un bullet journal minimaliste", 
        excerpt: "Un carnet, un stylo, 5 minutes par jour. Le bullet journal comme rituel de présence à soi.", 
        read: "7 min", 
        date: "11 oct 2025",
        image: "images/Magazine/bullet_journal.jpg",
        url: "#",
        featured: true
      }
      // Ajoute d'autres articles créatifs ici
    ];

    // ============================================================
    // FONCTION : Créer une carte d'article
    // ============================================================
    function createArticleCard(article) {
      const imageUrl = article.image || 'images/Magazine/default.jpg';
      const articleUrl = article.url || '#';
      const featuredClass = article.featured ? 'featured-article' : '';
      
      return `
        <a href="${articleUrl}" class="article-card-link ${featuredClass}">
          <article class="article-card">
            <div class="article-card-image">
              <img src="${imageUrl}" alt="${article.title}" loading="lazy">
              <div class="photo-overlay"></div>
              ${article.featured ? '<span class="featured-badge">À la une</span>' : ''}
            </div>
            <div class="article-card-content">
              <h3>${article.title}</h3>
              <p>${article.excerpt}</p>
              ${article.read ? `
                <div class="article-card-footer">
                  <span>${article.read}</span>
                  <span>${article.date || ''}</span>
                </div>
              ` : ''}
            </div>
          </article>
        </a>
      `;
    }

    // ============================================================
    // INITIALISATION
    // ============================================================
    document.addEventListener('DOMContentLoaded', function() {
      const articlesGrid = document.getElementById('section-articles');
      
      if (articlesGrid) {
        // Trier : articles featured en premier
        const sortedArticles = [...SECTION_ARTICLES].sort((a, b) => {
          if (a.featured && !b.featured) return -1;
          if (!a.featured && b.featured) return 1;
          return 0;
        });
        
        articlesGrid.innerHTML = sortedArticles.map(a => createArticleCard(a)).join('');
        console.log(`✓ Section Créer : ${SECTION_ARTICLES.length} articles affichés`);
      }
    });
  </script>

  <?php include 'components/scripts.php'; ?>

</body>
</html>
