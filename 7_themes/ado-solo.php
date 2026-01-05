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
  
  <style>
    /* ========================================
       BLOC PROMO RESSOURCES
       ======================================== */
    .section-ressources-promo {
      padding: 3rem 0;
      background: linear-gradient(180deg, #FEF0F2 0%, #FFFBFC 100%);
    }
    
    .ressources-promo {
      background: white;
      border-radius: 20px;
      padding: 2.5rem;
      text-align: center;
      box-shadow: 0 4px 20px rgba(232, 93, 117, 0.1);
      border: 2px solid #F5E6E9;
    }
    
    .ressources-promo-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
    }
    
    .ressources-promo h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.75rem;
      color: #4A4A4A;
      margin-bottom: 0.75rem;
    }
    
    .ressources-promo > p {
      font-family: 'Inter', sans-serif;
      font-size: 1.05rem;
      color: #6B6B6B;
      line-height: 1.6;
      max-width: 500px;
      margin: 0 auto 1.5rem;
    }
    
    .ressources-promo-features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
    }
    
    .ressources-promo-features span {
      background: #FEF0F2;
      color: #D14D65;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
    }
    
    .ressources-promo .btn-ressources {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, #E85D75 0%, #D14D65 100%);
      color: white;
      padding: 1rem 2rem;
      border-radius: 30px;
      font-family: 'Inter', sans-serif;
      font-size: 1.1rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(232, 93, 117, 0.3);
    }
    
    .ressources-promo .btn-ressources:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 25px rgba(232, 93, 117, 0.4);
    }
    
    .ressources-promo .btn-ressources svg {
      transition: transform 0.3s ease;
    }
    
    .ressources-promo .btn-ressources:hover svg {
      transform: translateX(4px);
    }
    
    /* Urgence rapide sous le CTA */
    .urgence-rapide {
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 1px solid #F5E6E9;
    }
    
    .urgence-rapide p {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: #6B6B6B;
      margin-bottom: 0.75rem;
    }
    
    .urgence-rapide-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }
    
    .urgence-rapide-links a {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #FFF5F5;
      color: #D32F2F;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      border: 1px solid #FFD4D4;
      transition: all 0.2s ease;
    }
    
    .urgence-rapide-links a:hover {
      background: #FFEBEE;
      transform: translateY(-2px);
    }
    
    @media (max-width: 600px) {
      .ressources-promo {
        padding: 1.75rem;
      }
      
      .ressources-promo h2 {
        font-size: 1.5rem;
      }
      
      .ressources-promo-features {
        flex-direction: column;
        align-items: center;
      }
      
      .ressources-promo .btn-ressources {
        width: 100%;
        justify-content: center;
      }
      
      .urgence-rapide-links {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
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
       SECTION RESSOURCES - CTA VERS PAGE COMPLÈTE
       ============================================================ -->
  <section class="section section-ressources-promo">
    <div class="container-narrow">
      <div class="ressources-promo">
        <div class="ressources-promo-icon">🆘</div>
        <h2>Des ressources pour toi</h2>
        <p>
          Intimidation, anxiété, famille, LGBTQ+, deuil... 
          On a rassemblé toutes les lignes d'écoute et ressources du Québec pour les ados.
        </p>
        
        <div class="ressources-promo-features">
          <span>💬 Texto & clavardage</span>
          <span>🔒 Gratuit & confidentiel</span>
          <span>🏠 Maisons des jeunes</span>
        </div>
        
        <a href="<?php echo $basePath; ?>ressources-ado.php" class="btn-ressources">
          Voir toutes les ressources
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>
        
        <!-- Accès rapide urgence -->
        <div class="urgence-rapide">
          <p>Besoin d'aide maintenant ?</p>
          <div class="urgence-rapide-links">
            <a href="tel:988">🆘 988 (crise 24/7)</a>
            <a href="tel:18002632266">📞 Tel-jeunes</a>
            <a href="sms:5146001002">💬 Texto: 514-600-1002</a>
          </div>
        </div>
      </div>
    </div>
  </section>

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
