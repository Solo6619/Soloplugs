<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Illustration numérrique';
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
       PAGE HOBBY : ILLUSTRATION NUMÉRIQUE
       ============================================================ -->
  <main class="hobby-page-container">

    <!-- HEADER DE PAGE -->
    <header class="hobby-page-header">
      <a href="../section-hobbies.php" class="back-button" title="Retour aux Hobbies & Créativités">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
      </a>
      <h1>Illustration numérique</h1>
    </header>

    <!-- DÉFINITION -->
    <section class="hobby-section">
      <h2>Qu'est-ce que c'est ?</h2>
      <div class="hobby-definition">
        <p>
          L'illustration numérique est l'art de créer des images à l'aide d'outils informatiques — 
          tablette graphique, stylet et logiciels spécialisés. Elle permet de simuler tous les 
          médiums traditionnels tout en offrant des possibilités infinies : calques, annulation, 
          transformation.
        </p>
        <p>
          Des concept artists de Hollywood aux illustrateurs indépendants sur les réseaux sociaux, 
          le numérique a démocratisé la création visuelle. Pas de séchage, pas de gâchis de 
          matériel — juste vous et votre imagination, pixel par pixel.
        </p>
      </div>
    </section>

    <!-- GALERIE -->
    <section class="hobby-section">
      <h2>Galerie</h2>
      <div class="hobby-gallery">
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/illustration_numerique_002.png" alt="Illustration numérique personnage" loading="lazy">
        </div>
        <div class="gallery-item">
          <img src="../images/hobbies/gallery/illustration_numerique_003.png" alt="Illustration numérique paysage" loading="lazy">
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
            title="Débuter l'illustration numérique"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Choisir sa tablette</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_2" 
            title="Techniques numériques"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Maîtriser les calques</p>
        </div>
        <div class="video-item">
          <iframe 
            src="https://www.youtube-nocookie.com/embed/VIDEO_ID_3" 
            title="Illustration avancée"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
          <p class="video-title">Colorisation pro</p>
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
            <li>Tablette graphique (Wacom, XP-Pen, Huion)</li>
            <li>Logiciel : Procreate, Clip Studio, Krita</li>
            <li>Ordinateur ou iPad</li>
            <li>Stylet de rechange</li>
            <li>Gant anti-friction (optionnel)</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Budget estimé</h3>
          <ul>
            <li>Débutant : 60-150 $ (tablette entrée)</li>
            <li>Intermédiaire : 300-600 $</li>
            <li>Avancé : 1000 $ + (écran-tablette)</li>
          </ul>
        </div>
        <div class="starter-card">
          <h3>Temps d'apprentissage</h3>
          <ul>
            <li>Prise en main : 1-2 semaines</li>
            <li>Bases du logiciel : 1-3 mois</li>
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
            <div class="comment-avatar">K</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Kevin</span>
                <span class="comment-date">14 décembre 2025</span>
              </div>
              <p>Procreate sur iPad a changé ma vie. Je dessine dans le métro, au café, partout. Plus besoin de transporter du matériel.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">E</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Emma</span>
                <span class="comment-date">11 décembre 2025</span>
              </div>
              <p>Ne sous-estimez pas les tablettes d'entrée de gamme ! Ma XP-Pen à 50$ m'a permis de découvrir ma passion avant d'investir plus.</p>
            </div>
          </div>

          <div class="comment">
            <div class="comment-avatar">N</div>
            <div class="comment-content">
              <div class="comment-header">
                <span class="comment-author">Nicolas</span>
                <span class="comment-date">8 décembre 2025</span>
              </div>
              <p>Ctrl+Z est mon meilleur ami. Le numérique enlève la peur de se tromper — on expérimente librement.</p>
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

  < <?php include $basePath . 'components/footer.php'; ?>
  <?php include $basePath . 'components/scripts.php'; ?>
</body>
</html>
