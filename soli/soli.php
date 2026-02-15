<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Soli — L\'Oreille Intérieure';
    $pageDescription = 'Soli, ton journal personnel intelligent et bienveillant. Un miroir de ta solitude qui révèle ce que tu portes en toi.';
    $basePath = '';
    $currentPage = 'soli';
    $additionalCSS = [];
    
    include 'components/head.php';
  ?>
  
  <style>
    /* ============================================================
       PAGE SOLI — Bientôt disponible
       ============================================================ */
    .soli-page {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 6rem 2rem 4rem;
      background: linear-gradient(180deg, #FBF9F6 0%, #F5EDD9 100%);
    }
    
    .soli-card {
      background: white;
      border-radius: 1.5rem;
      padding: 3.5rem 3rem;
      max-width: 480px;
      width: 100%;
      text-align: center;
      box-shadow: 0 8px 40px rgba(139, 115, 85, 0.1);
      border-top: 4px solid #D4A574;
    }
    
    .soli-icon {
      width: 90px;
      height: 90px;
      margin: 0 auto 2rem;
      background: rgba(212, 165, 116, 0.12);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .soli-icon svg {
      width: 45px;
      height: 45px;
      stroke: #D4A574;
      stroke-width: 1.5;
      fill: none;
    }
    
    .soli-title {
      font-family: 'Playfair Display', 'Lora', Georgia, serif;
      font-size: 2.5rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.5rem;
    }
    
    .soli-subtitle {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.15rem;
      font-style: italic;
      color: #D4A574;
      margin-bottom: 2rem;
    }
    
    .soli-description {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #5A5A5A;
      margin-bottom: 2.5rem;
    }
    
    .soli-badge {
      display: inline-block;
      padding: 0.9rem 2rem;
      background: rgba(212, 165, 116, 0.12);
      color: #B8956A;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 500;
      border-radius: 50px;
      border: 1px solid rgba(212, 165, 116, 0.25);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .soli-page {
        padding: 5rem 1.5rem 3rem;
      }
      
      .soli-card {
        padding: 2.5rem 2rem;
      }
      
      .soli-title {
        font-size: 2rem;
      }
      
      .soli-icon {
        width: 75px;
        height: 75px;
      }
      
      .soli-icon svg {
        width: 38px;
        height: 38px;
      }
    }
  </style>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       SECTION SOLI — BIENTÔT DISPONIBLE
       ============================================================ -->
  <section class="soli-page">
    <div class="soli-card">
      
      <!-- Icône Journal -->
      <div class="soli-icon">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="2" width="16" height="20" rx="2" />
          <line x1="8" y1="6" x2="16" y2="6" />
          <line x1="8" y1="10" x2="16" y2="10" />
          <line x1="8" y1="14" x2="12" y2="14" />
        </svg>
      </div>
      
      <h1 class="soli-title">Soli</h1>
      <p class="soli-subtitle">L'Oreille Intérieure</p>
      
      <p class="soli-description">
        Ton journal personnel, intelligent et bienveillant. 
        Écris pour toi, Soli t'aide à te comprendre. 
        Un miroir de ta solitude qui révèle ce que tu portes en toi.
      </p>
      
      <span class="soli-badge">Bientôt disponible</span>
      
    </div>
  </section>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
