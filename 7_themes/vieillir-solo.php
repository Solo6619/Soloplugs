<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Vieillir solo — La sagesse des années';
    $pageDescription = 'Accompagnement pour les personnes qui vieillissent seules. Dignité, autonomie et liberté.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['theme-base.css', 'vieillir-solo.css', 'components.css'];
    $themeRessources = 'ressources/ressources.php?theme=vieillir-solo';
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
<!-- CSS chargés via $additionalCSS : theme-base.css, vieillir-solo-enhanced.css, components.css -->
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-vieillir">
    
    <!-- Arbre de vie en arrière-plan -->
    <svg class="hero-tree" viewBox="0 0 400 500" aria-hidden="true">
      <g fill="none" stroke="#C9A26F" stroke-width="2" stroke-linecap="round">
        <!-- Tronc -->
        <path d="M200 480 Q200 380 200 320" stroke-width="12"/>
        <path d="M200 320 Q170 280 140 240" stroke-width="6"/>
        <path d="M200 320 Q230 280 260 240" stroke-width="6"/>
        
        <!-- Branches principales gauche -->
        <path d="M140 240 Q110 210 80 190" stroke-width="4"/>
        <path d="M140 240 Q120 200 100 170" stroke-width="4"/>
        <path d="M80 190 Q50 170 30 150" stroke-width="3"/>
        <path d="M80 190 Q60 160 50 130" stroke-width="3"/>
        <path d="M100 170 Q70 140 50 110" stroke-width="3"/>
        <path d="M100 170 Q80 130 70 100" stroke-width="3"/>
        
        <!-- Branches principales droite -->
        <path d="M260 240 Q290 210 320 190" stroke-width="4"/>
        <path d="M260 240 Q280 200 300 170" stroke-width="4"/>
        <path d="M320 190 Q350 170 370 150" stroke-width="3"/>
        <path d="M320 190 Q340 160 350 130" stroke-width="3"/>
        <path d="M300 170 Q330 140 350 110" stroke-width="3"/>
        <path d="M300 170 Q320 130 330 100" stroke-width="3"/>
        
        <!-- Branche centrale -->
        <path d="M200 320 Q200 260 200 200" stroke-width="5"/>
        <path d="M200 200 Q180 160 160 120" stroke-width="3"/>
        <path d="M200 200 Q220 160 240 120" stroke-width="3"/>
        <path d="M200 200 Q200 150 200 100" stroke-width="3"/>
        <path d="M200 100 Q180 70 165 40" stroke-width="2"/>
        <path d="M200 100 Q220 70 235 40" stroke-width="2"/>
        <path d="M200 100 Q200 60 200 25" stroke-width="2"/>
        
        <!-- Petites branches -->
        <path d="M30 150 Q20 130 25 110" stroke-width="2"/>
        <path d="M50 130 Q35 115 40 95" stroke-width="2"/>
        <path d="M50 110 Q40 90 45 70" stroke-width="2"/>
        <path d="M70 100 Q55 80 60 60" stroke-width="2"/>
        <path d="M370 150 Q380 130 375 110" stroke-width="2"/>
        <path d="M350 130 Q365 115 360 95" stroke-width="2"/>
        <path d="M350 110 Q360 90 355 70" stroke-width="2"/>
        <path d="M330 100 Q345 80 340 60" stroke-width="2"/>
        <path d="M160 120 Q140 90 130 60" stroke-width="2"/>
        <path d="M240 120 Q260 90 270 60" stroke-width="2"/>
        
        <!-- Racines -->
        <path d="M200 480 Q150 490 100 485" stroke-width="5" opacity="0.6"/>
        <path d="M200 480 Q250 490 300 485" stroke-width="5" opacity="0.6"/>
        <path d="M200 480 Q140 510 80 520" stroke-width="3" opacity="0.4"/>
        <path d="M200 480 Q260 510 320 520" stroke-width="3" opacity="0.4"/>
      </g>
      
      <!-- Anneaux symboliques -->
      <circle cx="200" cy="250" r="220" fill="none" stroke="#C9A26F" stroke-width="1" opacity="0.3"/>
      <circle cx="200" cy="250" r="170" fill="none" stroke="#C9A26F" stroke-width="1" opacity="0.4"/>
      <circle cx="200" cy="250" r="120" fill="none" stroke="#C9A26F" stroke-width="1" opacity="0.5"/>
    </svg>
    
    <div class="hero-content">

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
       CITATION
       ============================================================ -->
  <section class="section section-alt">
    <div class="container container-narrow">
      <blockquote class="quote-block animate-on-scroll">
        <p>
          Vieillir en solo n'est pas un naufrage, c'est naviguer avec l'expérience 
          d'avoir déjà affronté bien des tempêtes. Vous connaissez la mer, et la mer vous connaît.
        </p>
        <cite>Solo</cite>
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       SECTION : DOSSIERS — APPROFONDIR
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Dossiers </h2>
        <p>
          Des articles pour explorer les multiples facettes du vieillissement 
          en solo : témoignages, réflexions et pistes concrètes.
        </p>
      </div>

      <div class="dossiers-grid">
        
        <!-- Dossier 1 -->
        <article class="dossier-card animate-on-scroll">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/femmes-solitude-force-tranquille.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg"
                   alt="Femme âgée sereine" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>Femmes et solitude : une force tranquille</h3>
              <p>
                Les femmes vieillissent souvent seules — et beaucoup y trouvent 
                une liberté insoupçonnée. Portrait d'une résilience au féminin.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 2 -->
        <article class="dossier-card animate-on-scroll animate-delay-1">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/vieillir-seul-et-heureux.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg"
                   alt="Personne âgée heureuse" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>Vieillir seul·e et heureux·se</h3>
              <p>
                La solitude des aîné·es n'est pas synonyme de malheur. 
                Découvrez comment certain·es transforment ces années en épanouissement.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 3 -->
        <article class="dossier-card animate-on-scroll animate-delay-2">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/recreer-du-lien-apres-60-ans.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg" 
                   alt="Rencontre entre aînés" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>Recréer du lien après 60 ans</h3>
              <p>
                Retraite, veuvage, éloignement des proches — l'isolement guette. 
                Des pistes concrètes pour retisser des liens sociaux.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 4 -->
        <article class="dossier-card animate-on-scroll">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/amour-na-pas-dage.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg" 
                   alt="Couple de personnes âgées" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>L'amour n'a pas d'âge</h3>
              <p>
                Célibataire, veuf·ve ou divorcé·e — l'amour reste possible 
                à tout âge. Briser le tabou de la vie amoureuse après 60 ans.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 5 -->
        <article class="dossier-card animate-on-scroll animate-delay-1">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/vieillesse-invention-sociale.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg" 
                   alt="Réflexion philosophique" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>La vieillesse, une invention sociale ?</h3>
              <p>
                Et si l'âge n'était qu'un regard que la société pose sur nous ? 
                Une invitation à s'affranchir des étiquettes.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 6 -->
        <article class="dossier-card animate-on-scroll animate-delay-2">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/art-de-bien-vieillir.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg"
                   alt="Art de vivre" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>L'art de bien vieillir</h3>
              <p>
                Le bonheur dans la vieillesse se cultive. Clés et réflexions 
                pour aborder cette étape avec sérénité et joie.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 7 -->
        <article class="dossier-card animate-on-scroll">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/vieillir-seul-au-canada.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg"
                   alt="Réalité canadienne" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>Vieillir seul·e au Canada : état des lieux</h3>
              <p>
                De plus en plus d'aîné·es canadien·nes vivent sans soutien. 
                Regard sur cette réalité et appel à un vieillissement inclusif.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 8 -->
        <article class="dossier-card animate-on-scroll animate-delay-1">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/compagnon-quatre-pattes.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg"
                   alt="Personne âgée avec animal" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>Un compagnon à quatre pattes</h3>
              <p>
                Chat, chien, oiseau — les animaux sont de précieux alliés 
                contre la solitude. Bienfaits prouvés sur le moral et la santé.
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

        <!-- Dossier 9 -->
        <article class="dossier-card animate-on-scroll animate-delay-2">
          <a href="<?php echo $basePath; ?>articles/vieillir-solo/au-dela-des-manchettes.php" class="dossier-link">
            <div class="dossier-image">
              <img src="<?php echo $basePath; ?>images/vieillir-solo/articles/placeholder.svg" 
                   alt="Regard critique" 
                   loading="lazy">
            </div>
            <div class="dossier-content">
              <h3>Au-delà des manchettes</h3>
              <p>
                CHSLD, maltraitance, conditions difficiles — les médias 
                peignent un portrait sombre. Et si on regardait autrement ?
              </p>
              <span class="dossier-cta">Lire l'article →</span>
            </div>
          </a>
        </article>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : VIDÉOS — EXPLORER EN VIDÉO
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Explorer en vidéo</h2>
        <p>
          Une sélection de vidéos pour approfondir le sujet.
        </p>
      </div>

      <div class="videos-grid">
        
        <!-- Vidéo 1 -->
        <a href="https://www.youtube.com/watch?v=XXXXX" target="_blank" rel="noopener" class="video-card animate-on-scroll">
          <div class="video-thumbnail">
            <img src="<?php echo $basePath; ?>images/vieillir-solo/videos/placeholder-video.svg" 
                 alt="Mieux vieillir chez soi" 
                 loading="lazy">
            <span class="video-duration">4:14</span>
            <div class="video-play">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <polygon points="5 3 19 12 5 21 5 3"/>
              </svg>
            </div>
          </div>
          <div class="video-info">
            <h3>Mieux vieillir chez soi grâce aux technologies</h3>
            <span class="video-source">Université de Sherbrooke</span>
          </div>
        </a>

        <!-- Vidéo 2 -->
        <a href="https://www.youtube.com/watch?v=XXXXX" target="_blank" rel="noopener" class="video-card animate-on-scroll animate-delay-1">
          <div class="video-thumbnail">
            <img src="<?php echo $basePath; ?>images/vieillir-solo/videos/placeholder-video.svg" 
                 alt="Comment bien vieillir chez soi" 
                 loading="lazy">
            <span class="video-duration">1:31</span>
            <div class="video-play">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <polygon points="5 3 19 12 5 21 5 3"/>
              </svg>
            </div>
          </div>
          <div class="video-info">
            <h3>Comment bien vieillir chez soi</h3>
            <span class="video-source">France 3</span>
          </div>
        </a>

      </div>

      <!-- Lien vers plus de vidéos -->
      <div class="videos-more">
        <a href="https://www.bing.com/videos/search?q=vivre+vieux+et+chez+soi" target="_blank" rel="noopener" class="videos-more-link">
          Explorer plus de vidéos sur ce thème
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
            <polyline points="15 3 21 3 21 9"/>
            <line x1="10" y1="14" x2="21" y2="3"/>
          </svg>
        </a>
      </div>

    </div>
  </section>

  <!-- ============================================================
       CTA : RESSOURCES ET SOUTIEN
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="cta-section animate-on-scroll">
        <h2>Trouvez les ressources près de chez vous</h2>
        <p>
          Solo peut vous guider vers les services et organismes 
          adaptés à votre région.
        </p>
        <div class="btn-group">
          <a href="<?php echo $basePath; ?>solo.php" class="btn btn-primary">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            Parler à Solo
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->

<?php $basePath = '../'; include '../components/footer.php'; ?>
<?php include '../components/scripts.php'; ?>

</body>
</html>
