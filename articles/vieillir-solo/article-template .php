<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // ============================================================
    // CONFIGURATION DE L'ARTICLE
    // Modifier ces variables pour chaque article
    // ============================================================
    $articleTitle = 'Femmes et solitude : une force tranquille';
    $articleDescription = 'Les femmes vieillissent souvent seules — et beaucoup y trouvent une liberté insoupçonnée. Portrait d\'une résilience au féminin.';
    $articleImage = 'placeholder.jpg';
    $articleDate = '2026-02-01';
    $articleAuthor = 'SOLOPLUGS';
    
    // Configuration technique (ne pas modifier)
    $pageTitle = $articleTitle . ' — SOLOPLUGS';
    $pageDescription = $articleDescription;
    $basePath = '../../';
    $currentPage = '';
    $additionalCSS = ['theme-base.css', 'vieillir-solo-enhanced.css'];
    
    include '../../components/head.php';
  ?>
  <!-- Typographies -->
  <link rel="stylesheet" href="../../css/fonts.css">
<link rel="stylesheet" href="<?php echo $basePath; ?>css/components.css">
</head>
<body class="article-page">

  <?php include '../../components/header.php'; ?>

  <!-- ============================================================
       ARTICLE
       ============================================================ -->
  <article>
    
    <!-- Hero de l'article -->
    <header class="article-hero">
      <div class="container container-narrow">
        
        <!-- Fil d'Ariane -->
        <nav class="article-breadcrumb">
          <a href="<?php echo $basePath; ?>">Accueil</a>
          <span>›</span>
          <a href="<?php echo $basePath; ?>themes/vieillir-solo.php">Vieillir solo</a>
          <span>›</span>
          <span class="current"><?php echo $articleTitle; ?></span>
        </nav>
        
        <!-- Titre -->
        <h1 class="article-title"><?php echo $articleTitle; ?></h1>
        
        <!-- Meta -->
        <div class="article-meta">
          <time datetime="<?php echo $articleDate; ?>">
            <?php 
              setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR', 'fra');
              echo strftime('%e %B %Y', strtotime($articleDate)); 
            ?>
          </time>
          <span class="separator">•</span>
          <span class="author"><?php echo $articleAuthor; ?></span>
        </div>
        
      </div>
    </header>
    
    <!-- Image principale -->
    <figure class="article-featured-image">
      <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/<?php echo $articleImage; ?>" 
           alt="<?php echo $articleTitle; ?>">
    </figure>
    
    <!-- Contenu de l'article -->
    <div class="article-content">
      <div class="container container-narrow">
        
        <!-- ============================================================
             CONTENU À PERSONNALISER CI-DESSOUS
             ============================================================ -->
        
        <p class="article-intro">
          Les statistiques sont claires : les femmes vivent plus longtemps que les hommes, 
          et elles vieillissent souvent seules. Mais derrière ce constat, il y a une réalité 
          plus nuancée — celle de femmes qui, loin de subir cette solitude, l'apprivoisent 
          et parfois même la choisissent.
        </p>
        
        <h2>Une réalité démographique</h2>
        
        <p>
          Contenu à rédiger...
        </p>
        
        <blockquote>
          « La solitude choisie n'est pas un abandon, c'est une reconquête de soi. »
        </blockquote>
        
        <p>
          Contenu à rédiger...
        </p>
        
        <h2>Forces et vulnérabilités</h2>
        
        <p>
          Contenu à rédiger...
        </p>
        
        <h2>Témoignages</h2>
        
        <p>
          Contenu à rédiger...
        </p>
        
        <!-- ============================================================
             FIN DU CONTENU À PERSONNALISER
             ============================================================ -->
        
      </div>
    </div>
    
    <!-- Navigation article -->
    <nav class="article-nav">
      <div class="container">
        <a href="<?php echo $basePath; ?>themes/vieillir-solo.php" class="back-to-theme">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
          </svg>
          Retour à Vieillir solo
        </a>
      </div>
    </nav>
    
  </article>

  <!-- ============================================================
       FOOTER
       ============================================================ -->
  <?php $basePath = '../../'; include '../../components/footer.php'; ?>

</body>
</html>
