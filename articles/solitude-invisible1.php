<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'La solitude invisible';
    $pageDescription = 'On peut être entouré et se sentir profondément seul. La solitude ne dépend pas du fait d\'être seul ou entouré.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['articles.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       ARTICLE PRINCIPAL
       ============================================================ -->
  <main class="article-container">
    
    <!-- Navigation retour -->
    <nav class="article-breadcrumb">
      <a href="../magazine.php" class="back-link">
        ← Retour au Magazine
      </a>
    </nav>

    <!-- En-tête de l'article -->
    <header class="article-header">
<h1 class="article-title">La solitude invisible</h1>
      
      <p class="article-subtitle">
        On peut être entouré et se sentir profondément seul
      </p>
      
      <div class="article-image">
        <img src="../images/Magazine/articles/solitude_invisible_01.png" alt="La solitude invisible" loading="lazy">
      </div>
    </header>

    <!-- Contenu de l'article -->
    <article class="article-content">
      
      <p class="article-intro">
        La solitude ne dépend pas du fait d'être seul ou entouré. C'est une expérience 
        intérieure, parfois douce, parfois douloureuse.
      </p>

      <p>
        On peut vivre seul sans souffrir… et se sentir profondément seul au milieu 
        d'un couple, d'une famille ou d'un groupe. Dans un monde saturé d'écrans et 
        de connexions apparentes, cette solitude intérieure est plus fréquente qu'on 
        ne le croit. On peut afficher mille liens, sans en ressentir un seul.
      </p>

      <div class="article-highlight">
        <p>
          La distinction est simple : l'isolement est un état extérieur ; 
          la solitude est un ressenti.
        </p>
      </div>

      <p>
        On peut donc vivre trois réalités différentes, chacune avec sa propre texture, 
        sa propre vérité :
      </p>

      <h2>Les trois visages de la solitude</h2>

      <p>
        <strong>☀️ Être seul et bien</strong><br>
        Lorsque le retrait est choisi et nourrissant. Une solitude qui ressource, qui crée, qui apaise.
      </p>

      <p>
        <strong>🌧️ Être seul et souffrir</strong><br>
        Quand l'isolement devient un manque de présence humaine. Une absence qui pèse.
      </p>

      <p>
        <strong>👥 Être entouré et se sentir seul</strong><br>
        Lorsque les liens ne résonnent plus, même s'ils sont nombreux. La solitude invisible.
      </p>

      <p>
        Cette dernière forme existe aussi dans le couple : on peut aimer quelqu'un 
        et pourtant ne plus se sentir rejoint, entendu, relié. Être à deux n'empêche 
        pas la solitude.
      </p>

      <p>
        Comprendre cela est essentiel. La solitude n'est ni une faute ni une faiblesse, 
        mais un espace intérieur qui évolue selon nos besoins, nos liens et nos moments 
        de vie. On peut apprendre à l'apprivoiser, à la traverser, à la transformer — 
        non en se perdant dans les apparences, mais en reconnaissant ce que l'on 
        ressent vraiment.
      </p>

      <div class="article-highlight">
        <h3>À retenir</h3>
        <p>La solitude n'est pas visible, elle se vit.</p>
        <p>On peut être seul sans souffrir, entouré et souffrir beaucoup.</p>
        <p>Ce qui compte, ce n'est pas le nombre de relations, mais la qualité du lien — avec les autres, et avec soi-même.</p>
        <p><strong>Soloplugs existe pour cela : offrir un espace où la solitude se comprend, se nomme et se vit avec un peu plus de douceur.</strong></p>
      </div>

    </article>

    <!-- Navigation articles similaires -->
    <section class="related-articles">
      <h3>Articles similaires</h3>
      <div class="related-grid">
        
        <a href="apprivoiser-le-silence.php" class="related-card">
          <div class="related-image">
            <img src="../images/Magazine/images/Solitude_silencieuse_02.jpg" alt="Apprivoiser le silence du dimanche" loading="lazy">
          </div>
          <div class="related-content">
            <h4>Apprivoiser le silence du dimanche</h4>
            <p>Le dimanche en solo peut être lourd. Comment transformer cette journée.</p>
            <span class="related-meta">7 min • La Voix</span>
          </div>
        </a>

        <a href="beaute-petits-matins.php" class="related-card">
          <div class="related-image">
            <img src="../images/Magazine/petits_matins.jpg" alt="La beauté des petits matins" loading="lazy">
          </div>
          <div class="related-content">
            <h4>La beauté des petits matins</h4>
            <p>Ces heures calmes où le monde semble attendre.</p>
            <span class="related-meta">5 min • La Voix</span>
          </div>
        </a>

         
      </div>
    </section>

  </main>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
