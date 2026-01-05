<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Séparation & Deuil — Traverser l\'épreuve';
    $pageDescription = 'Ressources et accompagnement pour traverser une séparation, un divorce ou un deuil.';
    $basePath = '../';
    $currentPage = 'separation-deuil';
    $additionalCSS = [];
    
    include '../components/head.php';
  ?>
  
  <style>
    /* ========================================
       SÉPARATION & DEUIL — Styles spécifiques
       Palette : tons apaisants et chaleureux
       ======================================== */
    
    :root {
      --deuil-primary: #8B7355;     /* Brun doux */
      --deuil-secondary: #A69076;   /* Brun clair */
      --deuil-accent: #D4A574;      /* Or Soloplugs */
      --deuil-bg: #FAF7F4;          /* Fond crème chaud */
    }
    
    /* Hero */
    .hero-separation-deuil {
      background: linear-gradient(135deg, var(--deuil-primary) 0%, var(--deuil-secondary) 100%);
      padding: 5rem 1.5rem 4rem;
      text-align: center;
      color: white;
    }
    
    .hero-separation-deuil h1 {
      font-family: 'Lora', Georgia, serif;
      font-size: 2.75rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }
    
    .hero-separation-deuil p {
      font-family: 'Inter', sans-serif;
      font-size: 1.15rem;
      max-width: 550px;
      margin: 0 auto;
      opacity: 0.95;
      line-height: 1.6;
    }
    
    /* Section intro */
    .sd-intro {
      padding: 4rem 1.5rem;
      background: white;
    }
    
    .sd-intro-container {
      max-width: 700px;
      margin: 0 auto;
      text-align: center;
    }
    
    .sd-intro h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.75rem;
      color: #5C554E;
      margin-bottom: 1.5rem;
    }
    
    .sd-intro p {
      font-family: 'Inter', sans-serif;
      font-size: 1.05rem;
      color: #7A726A;
      line-height: 1.7;
      margin-bottom: 1rem;
    }
    
    /* Deux chemins */
    .sd-paths {
      padding: 3rem 1.5rem;
      background: var(--deuil-bg);
    }
    
    .sd-paths-container {
      max-width: 900px;
      margin: 0 auto;
    }
    
    .sd-paths h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.5rem;
      color: #5C554E;
      text-align: center;
      margin-bottom: 2rem;
    }
    
    .path-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
    }
    
    .path-card {
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 4px 20px rgba(139, 115, 85, 0.1);
      text-align: center;
    }
    
    .path-card-icon {
      font-size: 3rem;
      margin-bottom: 1.25rem;
    }
    
    .path-card h3 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.3rem;
      color: var(--deuil-primary);
      margin-bottom: 1rem;
    }
    
    .path-card p {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: #7A726A;
      line-height: 1.6;
      margin-bottom: 1.5rem;
    }
    
    .path-card-link {
      display: inline-block;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: var(--deuil-accent);
      text-decoration: none;
      font-weight: 500;
    }
    
    .path-card-link:hover {
      text-decoration: underline;
    }
    
    /* Override composant ressources */
    .ressources-thematiques[data-theme="deuil"],
    .ressources-thematiques[data-theme="separation"] {
      background: linear-gradient(180deg, var(--deuil-bg) 0%, #F5F0EA 100%);
    }
    
    .ressources-thematiques[data-theme="deuil"] .localisation-input:focus,
    .ressources-thematiques[data-theme="separation"] .localisation-input:focus {
      border-color: var(--deuil-primary);
      box-shadow: 0 0 0 3px rgba(139, 115, 85, 0.15);
    }
    
    .ressources-thematiques[data-theme="deuil"] .ressources-encart,
    .ressources-thematiques[data-theme="separation"] .ressources-encart {
      border-left-color: var(--deuil-primary);
    }
    
    /* Séparateur entre les deux sections ressources */
    .ressources-separator {
      max-width: 800px;
      margin: 0 auto;
      padding: 2rem 1.5rem;
      text-align: center;
    }
    
    .ressources-separator hr {
      border: none;
      border-top: 1px solid #E5DED4;
      margin-bottom: 1rem;
    }
    
    .ressources-separator span {
      font-family: 'Lora', Georgia, serif;
      font-size: 0.9rem;
      color: #A9A29B;
      font-style: italic;
    }
    
    /* Responsive */
    @media (max-width: 600px) {
      .hero-separation-deuil h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="hero-separation-deuil">
    <h1>Séparation & Deuil</h1>
    <p>Quand la vie brise un lien, il faut du temps et du soutien pour se reconstruire.</p>
  </section>

  <!-- ============================================================
       INTRODUCTION
       ============================================================ -->
  <section class="sd-intro">
    <div class="sd-intro-container">
      <h2>Traverser l'épreuve</h2>
      <p>
        Une séparation, un divorce, la perte d'un être cher... Ces moments 
        bouleversent tout. La solitude qui en découle peut être profonde.
      </p>
      <p>
        Mais tu n'as pas à traverser ça seul·e. Il existe des ressources, 
        des oreilles attentives, et des mains tendues pour t'accompagner.
      </p>
    </div>
  </section>

  <!-- ============================================================
       DEUX CHEMINS
       ============================================================ -->
  <section class="sd-paths">
    <div class="sd-paths-container">
      <h2>Deux chemins, un même besoin de soutien</h2>
      
      <div class="path-cards">
        <div class="path-card">
          <div class="path-card-icon">💔</div>
          <h3>Séparation & Divorce</h3>
          <p>
            La fin d'une relation amoureuse bouleverse l'équilibre de vie. 
            Aspects émotionnels, pratiques, juridiques, familiaux... 
            Tout est à reconstruire.
          </p>
          <a href="#ressources-separation" class="path-card-link">
            → Voir les ressources séparation
          </a>
        </div>
        
        <div class="path-card">
          <div class="path-card-icon">🕊️</div>
          <h3>Deuil</h3>
          <p>
            Perdre quelqu'un qu'on aime laisse un vide immense. 
            Le deuil est un chemin personnel, mais il existe des 
            accompagnements pour ne pas le traverser seul·e.
          </p>
          <a href="#ressources-deuil" class="path-card-link">
            → Voir les ressources deuil
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION RESSOURCES DEUIL
       ============================================================ -->
  <div id="ressources-deuil">
    <?php 
      $theme = 'deuil';
      $titre = 'Accompagnement du deuil';
      $showLocalisation = true;
      include '../components/ressources-section.php'; 
    ?>
  </div>

  <!-- Séparateur -->
  <div class="ressources-separator">
    <hr>
    <span>Ressources pour la séparation et le divorce</span>
  </div>

  <!-- ============================================================
       SECTION RESSOURCES SÉPARATION
       ============================================================ -->
  <div id="ressources-separation">
    <?php 
      $theme = 'separation';
      $titre = 'Traverser une séparation';
      $showLocalisation = false; // Déjà dans la section deuil
      include '../components/ressources-section.php'; 
    ?>
  </div>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
