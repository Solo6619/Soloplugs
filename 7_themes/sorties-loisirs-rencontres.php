<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Sorties, loisirs & rencontres';
    $pageDescription = 'Trois chemins, une même liberté. Sorties, loisirs et rencontres pour les personnes seules.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['sorties-loisirs-rencontres-enhanced.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO - PAGE DE CHOIX
       ============================================================ -->
  <section class="choices-hero">
    <h1>Sorties, Loisirs & Rencontres</h1>
   
  </section>

  <!-- ============================================================
       SECTION CHOIX - 3 CARTES
       ============================================================ -->
  <section class="choices-section">
    <div class="choices-intro">
      <p>Trois chemins, une même liberté. Choisissez le vôtre.</p>
    </div>

    <div class="choices-grid">
      
      <!-- Carte 1 : Sorties -->
      <a href="sorties.php" class="choice-card animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=800&h=600&fit=crop&q=80" 
             alt="Restaurant avec ambiance chaleureuse">
        <div class="choice-content">
          <h2>Sorties</h2>
          <p>Oser franchir le pas. Restaurant, cinéma, concert, expo — conquérir l'espace public en toute liberté.</p>
          <span class="choice-cta">
            Explorer
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </span>
        </div>
      </a>

      <!-- Carte 2 : Loisirs -->
      <a href="loisirs.php" class="choice-card animate-on-scroll animate-delay-1">
        <img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=800&h=600&fit=crop&q=80" 
             alt="Atelier de peinture créatif">
        <div class="choice-content">
          <h2>Loisirs</h2>
          <p>Cultiver ses passions. Sport, créativité, apprentissage — s'épanouir dans le plaisir de faire pour soi.</p>
          <span class="choice-cta">
            Explorer
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </span>
        </div>
      </a>

      <!-- Carte 3 : Rencontres -->
      <a href="rencontres.php" class="choice-card animate-on-scroll animate-delay-2">
        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&h=600&fit=crop&q=80" 
             alt="Groupe de personnes discutant">
        <div class="choice-content">
          <h2>Rencontres</h2>
          <p>Aller vers l'autre. Créer des liens authentiques depuis sa solitude, non pour la fuir, mais pour l'enrichir.</p>
          <span class="choice-cta">
            Explorer
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </span>
        </div>
      </a>

    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="page-quote">
    <blockquote>
      « La solitude n'est pas l'absence de mouvement — c'est la liberté de choisir où l'on va. »
    </blockquote>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->
  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
