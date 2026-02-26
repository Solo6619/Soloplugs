<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Aquarelle';
    $pageDescription = 'Découvrez l\'aquarelle, une technique de peinture lumineuse et méditative parfaite pour la solitude créative.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['hobby-page.css', 'header-compact.css'];
    
    include $basePath . 'components/head.php';
  ?>
</head>
<body class="has-compact-header">

  <?php include $basePath . 'components/header-compact.php'; ?>

  <!-- ============================================================
       PAGE HOBBY : AQUARELLE
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Aquarelle</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          L'aquarelle est une technique de peinture utilisant des pigments finement broyés, 
          liés avec de la gomme arabique et dilués à l'eau. Elle se caractérise par sa 
          transparence et sa luminosité — la lumière traverse les couches de couleur et 
          se reflète sur le papier blanc.
        </p>
        <p>
          Née en Chine et perfectionnée en Europe à partir du XVIIIe siècle, elle a été 
          le médium de prédilection de Turner, Delacroix et Cézanne. Aujourd'hui, elle 
          connaît un renouveau avec l'urban sketching et le journaling illustré.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/aquarelle_001.png" alt="Aquarelle paysage" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/aquarelle_002.png" alt="Aquarelle fleurs" loading="lazy">
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
            title="Débuter l'aquarelle"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Les bases de l'aquarelle</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_2" 
            title="Techniques aquarelle"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Techniques humide sur humide</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_3" 
            title="Aquarelle avancée"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Peindre un paysage</p>
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
            <li>Palette de 12 couleurs (Cotman ou Van Gogh)</li>
            <li>Papier aquarelle 300g grain fin</li>
            <li>Pinceaux ronds n°6 et n°10</li>
            <li>Deux pots d'eau</li>
            <li>Chiffon ou essuie-tout</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 30-50 $</li>
            <li>Intermédiaire : 80-150 $</li>
            <li>Avancé : 200 $ +</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Premières techniques : quelques heures</li>
            <li>Bases solides : 2-3 mois</li>
            <li>Style personnel : 1-2 ans</li>
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
            <div class="comment-avatar">M</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Marie</span>
                <span class="comment-date">12 décembre 2025</span>
              </div>
              <p>J'ai commencé il y a 6 mois avec un petit kit. Maintenant c'est mon rituel du dimanche matin avec un café. Pas besoin de grand-chose pour se faire plaisir.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">P</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Pierre</span>
                <span class="comment-date">10 décembre 2025</span>
              </div>
              <p>Le plus dur c'est d'accepter que l'eau fasse son travail. Lâcher le contrôle, c'est tout l'art de l'aquarelle.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">S</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Sophie</span>
                <span class="comment-date">8 décembre 2025</span>
              </div>
              <p>Je recommande les carnets Moleskine aquarelle pour commencer à peindre dehors. Format parfait pour le sac.</p>
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
