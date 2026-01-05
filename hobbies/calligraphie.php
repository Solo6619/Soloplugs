<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Nom du hobby';
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
       PAGE HOBBY : CALLIGRAPHIE
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Calligraphie</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          La calligraphie — du grec « belle écriture » — est l'art de former les lettres 
          avec élégance et expressivité. Chaque trait est pensé, chaque courbe mesurée. 
          C'est une discipline où la technique rencontre la méditation.
        </p>
        <p>
          Des moines copistes du Moyen Âge aux maîtres japonais du shodo, la calligraphie 
          traverse les cultures et les époques. Aujourd'hui, elle connaît un renouveau 
          avec les invitations de mariage, le journaling et l'art mural.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/calligraphie_002.png" alt="Calligraphie latine" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/calligraphie_003.png" alt="Calligraphie moderne" loading="lazy">
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
            title="Débuter la calligraphie"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Les bases de la calligraphie</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_2" 
            title="Techniques calligraphie"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Maîtriser la plume</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_3" 
            title="Calligraphie avancée"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Style copperplate</p>
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
            <li>Porte-plume et plumes (Nikko G)</li>
            <li>Encre de Chine ou encre calligraphie</li>
            <li>Papier lisse (Rhodia, Clairefontaine)</li>
            <li>Grille de guidage</li>
            <li>Chiffon et eau</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 25-50 $</li>
            <li>Intermédiaire : 80-150 $</li>
            <li>Avancé : 200 $ +</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Premiers traits : quelques heures</li>
            <li>Alphabet complet : 2-3 mois</li>
            <li>Fluidité : 1-2 ans</li>
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
            <div class="comment-avatar">V</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Valérie</span>
                <span class="comment-date">13 décembre 2025</span>
              </div>
              <p>La calligraphie m'oblige à ralentir. Dans un monde de notifications, c'est devenu mon moment de pleine conscience.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">D</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">David</span>
                <span class="comment-date">10 décembre 2025</span>
              </div>
              <p>J'écris mes citations préférées en calligraphie et je les affiche. Ça transforme des mots en œuvres d'art.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">L</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Léa</span>
                <span class="comment-date">6 décembre 2025</span>
              </div>
              <p>Commencez par les feutres brush pens avant la plume — moins de frustration et des résultats rapides pour se motiver.</p>
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
