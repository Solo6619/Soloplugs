<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Dessin';
    $pageDescription = '...';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['hobby-page.css', 'header-compact.css'];
    
    include $basePath . 'components/head.php';
  ?>
</head>
<body class="has-compact-header">

  <?php include $basePath . 'components/header-compact.php'; ?>
  
  <!-- Contenu -->
  
 

  <!-- ============================================================
       PAGE HOBBY : DESSIN
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Dessin</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          Le dessin est l'art de représenter visuellement des objets, des personnes ou des idées 
          à l'aide de lignes et de traits sur une surface. C'est la base de tous les arts visuels, 
          une discipline qui développe l'observation, la coordination œil-main et l'expression personnelle.
        </p>
        <p>
          Du simple croquis au dessin hyperréaliste, cette pratique millénaire reste accessible à tous. 
          Un crayon et du papier suffisent pour commencer à explorer ce langage universel qui permet 
          de capturer le monde tel qu'on le voit — ou tel qu'on l'imagine.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/dessin_001.png" alt="Dessin portrait" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/dessin_003.png" alt="Dessin paysage" loading="lazy">
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
            title="Débuter le dessin"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Les bases du dessin</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_2" 
            title="Techniques de dessin"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Maîtriser les ombres</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_3" 
            title="Dessin avancé"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Dessiner un portrait</p>
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
            <li>Crayons graphite (HB, 2B, 4B, 6B)</li>
            <li>Carnet de croquis A5 ou A4</li>
            <li>Gomme mie de pain</li>
            <li>Taille-crayon ou cutter</li>
            <li>Estompe ou coton-tige</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 15-30 $</li>
            <li>Intermédiaire : 50-100 $</li>
            <li>Avancé : 150 $ +</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Premiers croquis : immédiat</li>
            <li>Bases solides : 3-6 mois</li>
            <li>Style personnel : 2-3 ans</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- COMMENTAIRES -->
   <!-- TRUCS ET CONSEILS -->
    <section class="hobby-section">
      <h2>Trucs et conseils</h2>
      <div class="hobby-comments">
        
        <!-- Témoignages sélectionnés -->
        <div class="comments-list" id="comments-list">
          
          <div class="comment">
            <div class="comment-avatar">L</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Lucas</span>
                <span class="comment-date">14 décembre 2025</span>
              </div>
              <p>J'ai commencé à dessiner pendant le confinement. Trois ans plus tard, c'est devenu ma méditation quotidienne. 15 minutes par jour, ça change tout.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">A</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Amélie</span>
                <span class="comment-date">11 décembre 2025</span>
              </div>
              <p>Le conseil qui m'a débloquée : dessiner ce qu'on voit, pas ce qu'on pense voir. Observer vraiment avant de poser le crayon.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">T</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Thomas</span>
                <span class="comment-date">9 décembre 2025</span>
              </div>
              <p>Un carnet dans le sac, toujours. Les moments d'attente deviennent des moments créatifs.</p>
            </div>
          </div>

        </div>

        <!-- Formulaire partage expérience -->
        <div class="comment-form">
          <h3>Partager votre expérience</h3>
          
          <?php
          // Messages de confirmation
          if (isset($_GET['status'])) {
              if ($_GET['status'] === 'success') {
                  echo '<div class="form-message success">Merci pour votre témoignage ! Il sera publié après modération.</div>';
              } elseif ($_GET['status'] === 'error') {
                  $msg = isset($_GET['msg']) ? htmlspecialchars(urldecode($_GET['msg'])) : 'Une erreur est survenue.';
                  echo '<div class="form-message error">' . $msg . '</div>';
              }
          }
          ?>
          
          <form action="../send-comment.php" method="POST" id="comment-form">
            <!-- Champs cachés -->
            <input type="hidden" name="hobby" value="Dessin">
            <input type="hidden" name="page_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            
            <!-- Honeypot anti-spam (invisible) -->
            <div class="hp-field">
              <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>
            
            <div class="form-row">
              <input type="text" name="name" placeholder="Votre prénom" required>
              <input type="email" name="email" placeholder="Email (non affiché)" required>
            </div>
            <textarea name="comment" placeholder="Partagez vos trucs, conseils ou votre expérience..." rows="4" required minlength="20"></textarea>
            <button type="submit" class="btn-submit">Envoyer</button>
          </form>
          <p class="form-note">Les témoignages sont modérés avant publication.</p>
        </div>

      </div>
    </section>

  </main>

  <?php include $basePath . 'components/footer.php'; ?>
  <?php include $basePath . 'components/scripts.php'; ?>
</body>
</html>
