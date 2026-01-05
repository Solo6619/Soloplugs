<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Lettrage';
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
       PAGE HOBBY : LETTRAGE (HAND LETTERING)
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Lettrage</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          Le lettrage (hand lettering) est l'art de dessiner des lettres plutôt que de les écrire. 
          Contrairement à la calligraphie qui suit des règles strictes, le lettrage encourage 
          la créativité : chaque lettre peut avoir son propre style, ses ombres, ses ornements.
        </p>
        <p>
          Des enseignes de cafés aux couvertures de livres, le lettrage est partout. 
          C'est l'art de transformer un mot en image, un message en œuvre visuelle. 
          Et le meilleur ? On n'a besoin que d'un crayon pour commencer.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/lettrage_001.png" alt="Lettrage décoratif" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/lettrage_002.png" alt="Lettrage citation" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/lettrage_003.png" alt="Lettrage 3D" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/lettrage_004.png" alt="Lettrage brush" loading="lazy">
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
            title="Débuter le lettrage"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Les bases du lettrage</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_2" 
            title="Techniques lettrage"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Créer des ombres</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube.com/embed/VIDEO_ID_3" 
            title="Lettrage avancé"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Compositions et layouts</p>
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
            <li>Crayons et gomme</li>
            <li>Feutres brush (Tombow, Pentel)</li>
            <li>Papier marker ou bristol</li>
            <li>Règle et compas</li>
            <li>Feutres fins pour les détails</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 20-40 $</li>
            <li>Intermédiaire : 60-120 $</li>
            <li>Avancé : 150 $ +</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Premières lettres : immédiat</li>
            <li>Styles variés : 1-2 mois</li>
            <li>Compositions complexes : 6-12 mois</li>
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
            <div class="comment-avatar">S</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Sarah</span>
                <span class="comment-date">15 décembre 2025</span>
              </div>
              <p>Le lettrage, c'est comme le dessin mais avec des mots. J'adore créer des cartes personnalisées pour mes proches.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">O</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Olivier</span>
                <span class="comment-date">12 décembre 2025</span>
              </div>
              <p>Instagram est une mine d'or pour l'inspiration lettrage. Recherchez #handlettering et laissez-vous porter.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">C</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Chloé</span>
                <span class="comment-date">9 décembre 2025</span>
              </div>
              <p>J'ai commencé pour décorer mon bullet journal. Maintenant je fais des affiches et même des commandes !</p>
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

