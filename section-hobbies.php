<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Hobbies & Créativités';
    $pageDescription = 'Découvre des dizaines d\'activités créatives à explorer en solo.';
    $basePath = '';
    $currentPage = 'magazine';
    $additionalCSS = ['magazine.css', 'section-hobbies.css', 'header-compact.css'];  // ← TOUS les CSS sur UNE ligne
    
    include 'components/head.php';
  ?>
</head>
<body class="has-compact-header">   <!-- ← UN SEUL body avec la classe -->

  <?php include 'components/header-compact.php'; ?>

  <!-- ============================================================
       PAGE SECTION : HOBBIES & CRÉATIVITÉS
       La bibliothèque des possibles
       ============================================================ -->
  <main class="hobbies-container">

    <!-- HEADER DE SECTION -->
    <header class="hobbies-header">
      <a href="magazine.php" class="back-link">← Retour au magazine</a>
      <div class="hobbies-icon">🎨</div>
      <h1>Hobbies & Créativités</h1>
      <p class="hobbies-intro">Créer, c'est habiter sa solitude. Voici une bibliothèque d'activités à explorer à ton rythme. Chacune est une porte vers un monde à découvrir.</p>
    </header>

    <!-- ============================================================
         CATÉGORIE : ARTS VISUELS
         ============================================================ -->
    <section class="hobby-category" id="arts-visuels">
      <div class="category-header">
        <span class="category-icon">🖼️</span>
        <div>
          <h2>Arts visuels</h2>
          <p>Donner forme à ce qu'on voit, à ce qu'on ressent</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Dessin & Peinture -->
        <a href="hobbies/dessin.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gallery/dessin_002.png" alt="Dessin" loading="lazy">
          </div>
          <span class="hobby-name">Dessin</span>
        </a>
        
        <a href="hobbies/aquarelle.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gallery/aquarelle_001.png" alt="Aquarelle" loading="lazy">
          </div>
          <span class="hobby-name">Aquarelle</span>
        </a>
        
        <a href="hobbies/peinture-acrylique.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gallery/acrylique_001.png" alt="Peinture acrylique" loading="lazy">
          </div>
          <span class="hobby-name">Peinture acrylique</span>
        </a>
        
        <a href="hobbies/peinture-huile.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gallery/peinture_huile_002.png" alt="Peinture à l'huile" loading="lazy">
          </div>
          <span class="hobby-name">Peinture à l'huile</span>
        </a>
        
        <a href="hobbies/illustration-numerique.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gallery/illustration_numerique_001.png" alt="Illustration numérique" loading="lazy">
          </div>
          <span class="hobby-name">Illustration numérique</span>
        </a>
        
        <a href="hobbies/calligraphie.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gallery/calligraphie_001.png" alt="Calligraphie" loading="lazy">
          </div>
          <span class="hobby-name">Calligraphie</span>
        </a>
        
        <a href="hobbies/lettrage.php" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/lettrage.jpg" alt="Lettrage (Hand lettering)" loading="lazy">
          </div>
          <span class="hobby-name">Lettrage</span>
        </a>
        
        <!-- Photographie -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/photo-rue.jpg" alt="Photo de rue" loading="lazy">
          </div>
          <span class="hobby-name">Photo de rue</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/photo-nature.jpg" alt="Photo nature" loading="lazy">
          </div>
          <span class="hobby-name">Photo nature</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/photo-portrait.jpg" alt="Portrait photo" loading="lazy">
          </div>
          <span class="hobby-name">Portrait</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/photo-macro.jpg" alt="Macro photographie" loading="lazy">
          </div>
          <span class="hobby-name">Macro</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/photo-argentique.jpg" alt="Photo argentique" loading="lazy">
          </div>
          <span class="hobby-name">Photo argentique</span>
        </a>
        
        <!-- Arts graphiques -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/gravure.jpg" alt="Gravure" loading="lazy">
          </div>
          <span class="hobby-name">Gravure</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/linogravure.jpg" alt="Linogravure" loading="lazy">
          </div>
          <span class="hobby-name">Linogravure</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/collage.jpg" alt="Collage artistique" loading="lazy">
          </div>
          <span class="hobby-name">Collage</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/serigraphie.jpg" alt="Sérigraphie" loading="lazy">
          </div>
          <span class="hobby-name">Sérigraphie</span>
        </a>
        
        <!-- Sculpture & volume -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/sculpture-argile.jpg" alt="Sculpture argile" loading="lazy">
          </div>
          <span class="hobby-name">Sculpture argile</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/origami.jpg" alt="Origami" loading="lazy">
          </div>
          <span class="hobby-name">Origami</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/maquettes.jpg" alt="Maquettes" loading="lazy">
          </div>
          <span class="hobby-name">Maquettes</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : MUSIQUE & SON
         ============================================================ -->
    <section class="hobby-category" id="musique">
      <div class="category-header">
        <span class="category-icon">🎵</span>
        <div>
          <h2>Musique & Son</h2>
          <p>Le langage universel de l'âme</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Instruments à cordes -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/guitare-acoustique.jpg" alt="Guitare acoustique" loading="lazy">
          </div>
          <span class="hobby-name">Guitare acoustique</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/guitare-electrique.jpg" alt="Guitare électrique" loading="lazy">
          </div>
          <span class="hobby-name">Guitare électrique</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/basse.jpg" alt="Basse" loading="lazy">
          </div>
          <span class="hobby-name">Basse</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/ukulele.jpg" alt="Ukulélé" loading="lazy">
          </div>
          <span class="hobby-name">Ukulélé</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/violon.jpg" alt="Violon" loading="lazy">
          </div>
          <span class="hobby-name">Violon</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/banjo.jpg" alt="Banjo" loading="lazy">
          </div>
          <span class="hobby-name">Banjo</span>
        </a>
        
        <!-- Autres instruments -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/piano.jpg" alt="Piano" loading="lazy">
          </div>
          <span class="hobby-name">Piano</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/clavier.jpg" alt="Clavier / Synthé" loading="lazy">
          </div>
          <span class="hobby-name">Clavier / Synthé</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/batterie.jpg" alt="Batterie" loading="lazy">
          </div>
          <span class="hobby-name">Batterie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/percussions.jpg" alt="Percussions" loading="lazy">
          </div>
          <span class="hobby-name">Percussions</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/harmonica.jpg" alt="Harmonica" loading="lazy">
          </div>
          <span class="hobby-name">Harmonica</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/flute.jpg" alt="Flûte" loading="lazy">
          </div>
          <span class="hobby-name">Flûte</span>
        </a>
        
        <!-- Voix & production -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/chant.jpg" alt="Chant" loading="lazy">
          </div>
          <span class="hobby-name">Chant</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/beatmaking.jpg" alt="Production musicale / MAO" loading="lazy">
          </div>
          <span class="hobby-name">Production musicale</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/podcast.jpg" alt="Podcast" loading="lazy">
          </div>
          <span class="hobby-name">Podcast</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : ARTS TEXTILES
         ============================================================ -->
    <section class="hobby-category" id="textiles">
      <div class="category-header">
        <span class="category-icon">🧵</span>
        <div>
          <h2>Arts textiles</h2>
          <p>Le fil qui relie la patience à la beauté</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Fil & aiguilles -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/tricot.jpg" alt="Tricot" loading="lazy">
          </div>
          <span class="hobby-name">Tricot</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/crochet.jpg" alt="Crochet" loading="lazy">
          </div>
          <span class="hobby-name">Crochet</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/broderie.jpg" alt="Broderie" loading="lazy">
          </div>
          <span class="hobby-name">Broderie</span>
        </a>
        
        <!-- Tissu & couture -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/couture.jpg" alt="Couture" loading="lazy">
          </div>
          <span class="hobby-name">Couture</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/patchwork.jpg" alt="Patchwork / Quilting" loading="lazy">
          </div>
          <span class="hobby-name">Patchwork</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/customisation.jpg" alt="Customisation vêtements" loading="lazy">
          </div>
          <span class="hobby-name">Customisation</span>
        </a>
        
        <!-- Fibres & cordes -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/macrame.jpg" alt="Macramé" loading="lazy">
          </div>
          <span class="hobby-name">Macramé</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/tissage.jpg" alt="Tissage" loading="lazy">
          </div>
          <span class="hobby-name">Tissage</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/teinture.jpg" alt="Teinture (tie-dye, shibori)" loading="lazy">
          </div>
          <span class="hobby-name">Teinture</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : ARTISANAT & FABRICATION
         ============================================================ -->
    <section class="hobby-category" id="artisanat">
      <div class="category-header">
        <span class="category-icon">🛠️</span>
        <div>
          <h2>Artisanat & Fabrication</h2>
          <p>Créer de ses mains, donner vie à la matière</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Travail du bois -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/menuiserie.jpg" alt="Menuiserie" loading="lazy">
          </div>
          <span class="hobby-name">Menuiserie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/ebenisterie.jpg" alt="Ébénisterie" loading="lazy">
          </div>
          <span class="hobby-name">Ébénisterie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/sculpture-bois.jpg" alt="Sculpture sur bois" loading="lazy">
          </div>
          <span class="hobby-name">Sculpture sur bois</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/pyrogravure.jpg" alt="Pyrogravure" loading="lazy">
          </div>
          <span class="hobby-name">Pyrogravure</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/tournage-bois.jpg" alt="Tournage sur bois" loading="lazy">
          </div>
          <span class="hobby-name">Tournage sur bois</span>
        </a>
        
        <!-- Poterie & céramique -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/poterie.jpg" alt="Poterie" loading="lazy">
          </div>
          <span class="hobby-name">Poterie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/ceramique.jpg" alt="Céramique" loading="lazy">
          </div>
          <span class="hobby-name">Céramique</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/emaillage.jpg" alt="Émaillage" loading="lazy">
          </div>
          <span class="hobby-name">Émaillage</span>
        </a>
        
        <!-- Autres matériaux -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/maroquinerie.jpg" alt="Maroquinerie" loading="lazy">
          </div>
          <span class="hobby-name">Maroquinerie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/bijoux.jpg" alt="Création de bijoux" loading="lazy">
          </div>
          <span class="hobby-name">Bijoux</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/vitrail.jpg" alt="Vitrail" loading="lazy">
          </div>
          <span class="hobby-name">Vitrail</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/ferronnerie.jpg" alt="Ferronnerie" loading="lazy">
          </div>
          <span class="hobby-name">Ferronnerie</span>
        </a>
        
        <!-- Papier & reliure -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/reliure.jpg" alt="Reliure" loading="lazy">
          </div>
          <span class="hobby-name">Reliure</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/papeterie.jpg" alt="Papeterie créative" loading="lazy">
          </div>
          <span class="hobby-name">Papeterie créative</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/scrapbooking.jpg" alt="Scrapbooking" loading="lazy">
          </div>
          <span class="hobby-name">Scrapbooking</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : ÉCRITURE CRÉATIVE
         ============================================================ -->
    <section class="hobby-category" id="ecriture">
      <div class="category-header">
        <span class="category-icon">✍️</span>
        <div>
          <h2>Écriture créative</h2>
          <p>Les mots comme terrain de jeu infini</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/nouvelles.jpg" alt="Nouvelles" loading="lazy">
          </div>
          <span class="hobby-name">Nouvelles</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/roman.jpg" alt="Roman" loading="lazy">
          </div>
          <span class="hobby-name">Roman</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/poesie.jpg" alt="Poésie" loading="lazy">
          </div>
          <span class="hobby-name">Poésie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/bd-creation.jpg" alt="Bande dessinée" loading="lazy">
          </div>
          <span class="hobby-name">Bande dessinée</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/scenarisation.jpg" alt="Scénarisation" loading="lazy">
          </div>
          <span class="hobby-name">Scénarisation</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/blogging.jpg" alt="Blogging" loading="lazy">
          </div>
          <span class="hobby-name">Blogging</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/ecriture-chansons.jpg" alt="Écriture de chansons" loading="lazy">
          </div>
          <span class="hobby-name">Écriture de chansons</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : CRÉATION NUMÉRIQUE
         ============================================================ -->
    <section class="hobby-category" id="numerique">
      <div class="category-header">
        <span class="category-icon">💻</span>
        <div>
          <h2>Création numérique</h2>
          <p>La technologie au service de l'imagination</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Image & vidéo -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/design-graphique.jpg" alt="Design graphique" loading="lazy">
          </div>
          <span class="hobby-name">Design graphique</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/montage-video.jpg" alt="Montage vidéo" loading="lazy">
          </div>
          <span class="hobby-name">Montage vidéo</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/animation-2d.jpg" alt="Animation 2D" loading="lazy">
          </div>
          <span class="hobby-name">Animation 2D</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/stop-motion.jpg" alt="Stop-motion" loading="lazy">
          </div>
          <span class="hobby-name">Stop-motion</span>
        </a>
        
        <!-- Tech créative -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/creation-jeux.jpg" alt="Création de jeux vidéo" loading="lazy">
          </div>
          <span class="hobby-name">Création de jeux</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/modelisation-3d.jpg" alt="Modélisation 3D" loading="lazy">
          </div>
          <span class="hobby-name">Modélisation 3D</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/impression-3d.jpg" alt="Impression 3D" loading="lazy">
          </div>
          <span class="hobby-name">Impression 3D</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/art-generatif.jpg" alt="Art génératif" loading="lazy">
          </div>
          <span class="hobby-name">Art génératif</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : CRÉATION MAISON
         ============================================================ -->
    <section class="hobby-category" id="maison">
      <div class="category-header">
        <span class="category-icon">🏠</span>
        <div>
          <h2>Création maison</h2>
          <p>Fabriquer soi-même, avec soin</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Fabrication artisanale -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/bougies.jpg" alt="Bougies artisanales" loading="lazy">
          </div>
          <span class="hobby-name">Bougies</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/savons.jpg" alt="Savonnerie" loading="lazy">
          </div>
          <span class="hobby-name">Savonnerie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/cosmetiques.jpg" alt="Cosmétiques maison" loading="lazy">
          </div>
          <span class="hobby-name">Cosmétiques</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/parfums.jpg" alt="Parfums / Encens" loading="lazy">
          </div>
          <span class="hobby-name">Parfums / Encens</span>
        </a>
        
        <!-- Restauration & récup -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/restauration-meubles.jpg" alt="Restauration de meubles" loading="lazy">
          </div>
          <span class="hobby-name">Restauration meubles</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/upcycling.jpg" alt="Upcycling" loading="lazy">
          </div>
          <span class="hobby-name">Upcycling</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/restauration-vintage.jpg" alt="Restauration objets vintage" loading="lazy">
          </div>
          <span class="hobby-name">Objets vintage</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : JARDINAGE CRÉATIF
         ============================================================ -->
    <section class="hobby-category" id="jardinage">
      <div class="category-header">
        <span class="category-icon">🌱</span>
        <div>
          <h2>Jardinage créatif</h2>
          <p>Cultiver la patience, récolter la beauté</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/bonsai.jpg" alt="Bonsaï" loading="lazy">
          </div>
          <span class="hobby-name">Bonsaï</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/terrarium.jpg" alt="Terrariums" loading="lazy">
          </div>
          <span class="hobby-name">Terrariums</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/kokedama.jpg" alt="Kokedama" loading="lazy">
          </div>
          <span class="hobby-name">Kokedama</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/ikebana.jpg" alt="Ikebana / Art floral" loading="lazy">
          </div>
          <span class="hobby-name">Ikebana</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/jardinage-balcon.jpg" alt="Jardinage balcon" loading="lazy">
          </div>
          <span class="hobby-name">Jardinage balcon</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/herboristerie.jpg" alt="Herboristerie" loading="lazy">
          </div>
          <span class="hobby-name">Herboristerie</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : CUISINE CRÉATIVE
         ============================================================ -->
    <section class="hobby-category" id="cuisine">
      <div class="category-header">
        <span class="category-icon">🍰</span>
        <div>
          <h2>Cuisine créative</h2>
          <p>L'art de transformer les ingrédients en moments de joie</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <!-- Sucré -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/patisserie.jpg" alt="Pâtisserie" loading="lazy">
          </div>
          <span class="hobby-name">Pâtisserie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/decoration-gateaux.jpg" alt="Décoration de gâteaux" loading="lazy">
          </div>
          <span class="hobby-name">Décoration gâteaux</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/chocolaterie.jpg" alt="Chocolaterie" loading="lazy">
          </div>
          <span class="hobby-name">Chocolaterie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/confiserie.jpg" alt="Confiserie" loading="lazy">
          </div>
          <span class="hobby-name">Confiserie</span>
        </a>
        
        <!-- Fermentation & boissons -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/fermentation.jpg" alt="Fermentation" loading="lazy">
          </div>
          <span class="hobby-name">Fermentation</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/brassage-biere.jpg" alt="Brassage de bière" loading="lazy">
          </div>
          <span class="hobby-name">Brassage bière</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/torrefaction.jpg" alt="Torréfaction café" loading="lazy">
          </div>
          <span class="hobby-name">Torréfaction café</span>
        </a>
        
        <!-- Conservation -->
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/conserves.jpg" alt="Conserves et marinades" loading="lazy">
          </div>
          <span class="hobby-name">Conserves</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/charcuterie.jpg" alt="Charcuterie maison" loading="lazy">
          </div>
          <span class="hobby-name">Charcuterie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/fromagerie.jpg" alt="Fromagerie" loading="lazy">
          </div>
          <span class="hobby-name">Fromagerie</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         CATÉGORIE : COLLECTIONS & PASSIONS
         ============================================================ -->
    <section class="hobby-category" id="collections">
      <div class="category-header">
        <span class="category-icon">🎭</span>
        <div>
          <h2>Collections & Passions</h2>
          <p>Rassembler, préserver, chérir</p>
        </div>
      </div>
      
      <div class="hobbies-grid">
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/vinyles.jpg" alt="Collection vinyles" loading="lazy">
          </div>
          <span class="hobby-name">Vinyles</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/philatelie.jpg" alt="Philatélie" loading="lazy">
          </div>
          <span class="hobby-name">Philatélie</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/cartes-collection.jpg" alt="Cartes à collectionner" loading="lazy">
          </div>
          <span class="hobby-name">Cartes collection</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/numismatique.jpg" alt="Numismatique" loading="lazy">
          </div>
          <span class="hobby-name">Numismatique</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/objets-vintage.jpg" alt="Objets vintage" loading="lazy">
          </div>
          <span class="hobby-name">Objets vintage</span>
        </a>
        
        <a href="#" class="hobby-card">
          <div class="hobby-image">
            <img src="images/hobbies/modelisme.jpg" alt="Modélisme ferroviaire" loading="lazy">
          </div>
          <span class="hobby-name">Modélisme ferroviaire</span>
        </a>
      </div>
    </section>

    <!-- ============================================================
         FOOTER DE PAGE
         ============================================================ -->
    <section class="hobbies-footer">
      <p>Cette liste n'est qu'un début. Chaque passion peut devenir un univers à explorer.</p>
      <p><em>« La solitude devient riche quand on lui donne quelque chose à créer. »</em></p>
    </section>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
