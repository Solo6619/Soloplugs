
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Peinture à l/*huile';
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
       PAGE HOBBY : PEINTURE À L'HUILE
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Peinture à l'huile</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          La peinture à l'huile est une technique artistique utilisant des pigments broyés 
          mélangés à une huile siccative, généralement l'huile de lin. Cette technique, 
          perfectionnée à la Renaissance, offre une richesse de couleurs et une profondeur 
          inégalées.
        </p>
        <p>
          Son séchage lent permet de travailler longuement sur une même toile, de fondre 
          les couleurs et de créer des glacis subtils. De Rembrandt à Van Gogh, les plus 
          grands maîtres ont choisi ce médium pour sa noblesse et sa durabilité.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/peinture_huile_001.png" alt="Peinture huile paysage" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/peinture_huile_004.png" alt="Peinture huile portrait" loading="lazy">
        </div>
        
      </div>
    </section>

    <!-- VIDÉOS -->
    <section class="hobby-section">
      <h2>Vidéos</h2>
      <div class="hobby-videos">
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_1" 
            title="Débuter la peinture à l'huile"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Introduction à l'huile</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_2" 
            title="Techniques huile"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">La technique du glacis</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_3" 
            title="Peinture huile avancée"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Peindre alla prima</p>
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
            <li>Set de 10 couleurs à l'huile</li>
            <li>Toiles préparées</li>
            <li>Pinceaux en soie de porc</li>
            <li>Huile de lin et térébenthine</li>
            <li>Palette en bois et couteaux</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 80-120 $</li>
            <li>Intermédiaire : 200-350 $</li>
            <li>Avancé : 500 $ +</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Premières couches : 1-2 semaines</li>
            <li>Techniques de base : 6-12 mois</li>
            <li>Maîtrise : 3-5 ans</li>
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
            <div class="comment-avatar">F</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">François</span>
                <span class="comment-date">12 décembre 2025</span>
              </div>
              <p>L'huile demande de la patience, mais quelle satisfaction quand on voit les couleurs garder leur éclat des années après.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">I</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Isabelle</span>
                <span class="comment-date">9 décembre 2025</span>
              </div>
              <p>J'ai commencé par l'acrylique, puis je suis passée à l'huile. Le rapport au temps est complètement différent — plus méditatif.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">R</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Robert</span>
                <span class="comment-date">5 décembre 2025</span>
              </div>
              <p>Pensez à bien aérer votre espace de travail. Les huiles sans odeur existent maintenant, c'est plus agréable.</p>
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
