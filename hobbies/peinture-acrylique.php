<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Peinture acrylique';
    $pageDescription = '...';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['hobby-page.css', 'header-compact.css'];
    
    include $basePath . 'components/head.php';
  ?>
</head>
<body class="has-compact-header">

  <?php include $basePath . 'components/header-compact.php'; ?>
  
 

  <!-- ============================================================
       PAGE HOBBY : PEINTURE ACRYLIQUE
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Peinture acrylique</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          La peinture acrylique utilise des pigments en suspension dans une émulsion de polymère acrylique. 
          Inventée dans les années 1940, elle combine les avantages de l'huile et de l'aquarelle : 
          elle peut être diluée à l'eau mais devient résistante une fois sèche.
        </p>
        <p>
          Sa polyvalence en fait le médium préféré des débutants comme des professionnels. 
          Séchage rapide, couleurs vibrantes, possibilité de superposer les couches — 
          l'acrylique pardonne les erreurs et encourage l'expérimentation.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/acrylique_002.png" alt="Peinture acrylique abstraite" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/acrylique_003.png" alt="Peinture acrylique paysage" loading="lazy">
        </div>
  
      </div>
    </section>

    <!-- VIDÉOS -->
    <section class="hobby-section">
      <h2>Vidéos</h2>
      <div class="hobby-videos">
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_1" 
            title="Débuter l'acrylique"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Premiers pas en acrylique</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_2" 
            title="Techniques acrylique"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Mélanger les couleurs</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_3" 
            title="Acrylique avancé"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Textures et effets</p>
        </div>
      </div>
    </section>

    <!-- POUR COMMENCER -->
    <section class="hobby-section">
      <h2>Pour commencer</h2>
      <div class="hobby-starter">
        <div class="starter-card">
          <h3>Matériel de base</h3>
          <ul>
            <li>Set de 12 tubes acryliques</li>
            <li>Toiles ou carton entoilé</li>
            <li>Pinceaux plats et ronds</li>
            <li>Palette et couteau</li>
            <li>Pot d'eau et chiffons</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 40-70 $</li>
            <li>Intermédiaire : 100-200 $</li>
            <li>Avancé : 300 $ +</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Première toile : quelques heures</li>
            <li>Techniques de base : 2-4 mois</li>
            <li>Maîtrise : 1-2 ans</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- COMMENTAIRES -->
    <section class="hobby-section">
      <h2>Communauté</h2>
      <div class="hobby-comments">
        
        <!-- Liste des commentaires -->
        <div class="comments-list" id="comments-list">
          
          <div class="comment">
            <div class="comment-avatar">C</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Caroline</span>
                <span class="comment-date">13 décembre 2025</span>
              </div>
              <p>L'acrylique sèche vite, c'est parfait pour les impatients comme moi ! En une séance, on peut voir le résultat final.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">M</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Marc</span>
                <span class="comment-date">10 décembre 2025</span>
              </div>
              <p>Conseil : investissez dans de bons pinceaux plutôt que dans des peintures chères. Ça fait toute la différence.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">J</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Julie</span>
                <span class="comment-date">7 décembre 2025</span>
              </div>
              <p>Je peins sur des vieux vinyles et du bois récupéré. L'acrylique adhère à presque tout !</p>
            </div>
          </div>

        </div>

        <!-- Formulaire ajout commentaire -->
        <div class="comment-form">
          <h3>Partager votre expérience</h3>
          <form id="comment-form">
            <div class="form-row">
              <input type="text" name="name" placeholder="Votre prénom" required>
              <input type="email" name="email" placeholder="Email (non affiché)" required>
            </div>
            <textarea name="comment" placeholder="Votre commentaire..." rows="4" required></textarea>
            <button type="submit" class="btn-submit">Publier</button>
          </form>
          <p class="form-note">Les commentaires sont modérés avant publication.</p>
        </div>

      </div>
    </section>

  </main>

  
  <?php include $basePath . 'components/footer.php'; ?>
  <?php include $basePath . 'components/scripts.php'; ?>
</body>
</html>
