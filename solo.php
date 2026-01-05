<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Solo — La voix de la solitude';
    $pageDescription = 'Solo est la voix de la solitude. Il guide, éclaire et met des mots sur ce que chacun vit à sa manière.';
    $basePath = '';
    $currentPage = 'solo';
    $additionalCSS = ['articles.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       CONTENU PRINCIPAL
       ============================================================ -->
  <main class="article-container">

    <!-- En-tête -->
    <header class="article-header">
      <div class="article-meta">
        <span class="article-category">Intelligence artificielle</span>
        <span class="article-read">En développement</span>
      </div>
      
      <h1 class="article-title">Solo — La voix</h1>
      
      <p class="article-subtitle">
        Solo est la voix de la solitude. Il guide, éclaire et met des mots sur ce que chacun vit à sa manière.
      </p>
      
      <div class="article-image">
        <img src="images/solo_hero.jpg" alt="Solo - La voix de la solitude" loading="lazy">
      </div>
    </header>

    <!-- Contenu -->
    <article class="article-content">
      
      <div class="article-highlight">
        <p>
          <em>Cette page est en construction. Le contenu sera ajouté prochainement.</em>
        </p>
      </div>

      <h2>Ce que Solo vous offrira</h2>

      <p>
        <strong>🧭 Guidage personnalisé</strong><br>
        Orientation vers les ressources adaptées selon votre situation et vos besoins.
      </p>

      <p>
        <strong>📚 Bibliothèque intelligente</strong><br>
        Accès à une base de connaissances complète sur la solitude et l'épanouissement.
      </p>

      <p>
        <strong>💬 Accompagnement bienveillant</strong><br>
        Une présence chaleureuse disponible 24/7 pour échanger et vous soutenir.
      </p>

      <div class="article-highlight">
        <h3>La vision de Solo</h3>
        <p>
          Solo n'est pas un simple chatbot. C'est un compagnon qui comprend les nuances de la solitude — qu'elle soit choisie ou subie, passagère ou durable.
        </p>
        <p>
          <strong>Il met des mots sur ce que vous ressentez, sans jamais vous juger.</strong>
        </p>
      </div>

    </article>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
