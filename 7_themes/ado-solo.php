<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Ado solo — Tu n\'es pas seul·e';
    $pageDescription = 'Ressources et soutien pour les adolescents qui vivent la solitude. Lignes d\'écoute 24/7, conseils et accompagnement.';
    $basePath = '../';
    $currentPage = 'ado-solo';
    $additionalCSS = ['theme-base.css', 'ado-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="hero-ado">
    <div class="hero-content">
      <div class="hero-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        Safe space
      </div>
      <h1 class="hero-title">Ado <span class="highlight">solo</span></h1>
      <p class="hero-subtitle">La solitude à l'adolescence peut être lourde. Tu n'as pas à la porter seul·e.</p>
    </div>
  </section>

  <!-- ============================================================
       INTRODUCTION
       ============================================================ -->
  <section class="section">
    <div class="container-narrow">
      <div class="intro-box">
        <p>
          L'adolescence, c'est une période de grands changements. Ton corps change, 
          tes relations changent, et parfois tu peux te sentir incompris·e ou isolé·e.
        </p>
        <p>
          Que ce soit à l'école, dans ta famille, ou sur les réseaux sociaux, 
          la solitude peut surgir quand on s'y attend le moins. Et c'est ok de ne pas aller bien.
        </p>
        <p class="highlight-text">
          Ce qui compte, c'est de ne pas rester seul·e avec ça.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CE QUE TU VIS PEUT-ÊTRE
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2><span class="emoji">💭</span> Tu vis peut-être...</h2>
        <p>Ces situations sont plus courantes que tu ne le crois. Tu n'es pas seul·e.</p>
      </div>
      
      <div class="cards-grid">
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">😔</div>
          <h3>L'impression de ne pas avoir ta place</h3>
          <p>À l'école, dans un groupe, en ligne... Tu as l'impression que les autres ne te comprennent pas vraiment.</p>
        </div>
        
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">📱</div>
          <h3>La comparaison sur les réseaux</h3>
          <p>Tout le monde a l'air d'avoir une vie parfaite, sauf toi. Mais les réseaux ne montrent qu'une partie de la réalité.</p>
        </div>
        
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">🏠</div>
          <h3>Des tensions à la maison</h3>
          <p>Parfois, c'est chez soi qu'on se sent le plus seul·e. C'est difficile, mais tu peux trouver de l'aide.</p>
        </div>
        
        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">❓</div>
          <h3>Des questions sur qui tu es</h3>
          <p>Ton identité, ton orientation, ton avenir... C'est normal de se questionner. Tu n'as pas à avoir toutes les réponses.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION RESSOURCES (composant centralisé)
       Affiche uniquement les ressources pour adolescents
       ============================================================ -->
  <?php 
    $theme = 'ado';
    $titre = 'Des ressources pour toi';
    $showLocalisation = true;
    include '../components/ressources-section.php'; 
  ?>

  <!-- ============================================================
       CTA FINAL
       ============================================================ -->
  <section class="section">
    <div class="container-narrow">
      <div class="cta-section">
        <h2>💬 Besoin de parler ?</h2>
        <p>Ces lignes sont là pour toi, gratuites, confidentielles et disponibles 24/7.</p>
        <div class="btn-group">
          <a href="tel:18002632266" class="btn btn-primary">
            📞 Tel-jeunes : 1 800 263-2266
          </a>
          <a href="tel:18006686868" class="btn btn-secondary">
            Jeunesse, J'écoute : 1 800 668-6868
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

  <!-- Script pour animations au scroll -->
  <script>
    // Animation au scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, observerOptions);
    
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });
  </script>

</body>
</html>
