
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Accueil';
    $pageDescription = 'Soloplugs accompagne les personnes dans leurs différentes expériences de solitude.';
    $basePath = '';
    $currentPage = 'accueil';
    $additionalCSS = ['soloplugs.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

 

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero">
    <div class="hero-content">
      <h1 class="hero-question">
       La voix de la Solitude
      </h1>
      
      <blockquote class="hero-quote">
        "Là où la rencontre ne se fait pas avec les autres, mais avec soi-même."
      </blockquote>

      
    </div>
  </section>

  <!-- ============================================================
       SECTION DUALITÉ
       ============================================================ -->
  <section class="duality-section">
    <div class="duality-intro">
      <h2>Deux visages de la solitude</h2>
      <p>
        La solitude peut être choisie ou subie, source de sagesse ou de souffrance. 
        SOLOPLUGS accueille les deux expériences avec la même attention.
      </p>
    </div>

    <div class="duality-cards">
      <!-- SOLITUDE CHOISIE -->
      <div class="duality-card chosen">
        <div class="duality-icon">☀️</div>
        <h3>Tu as choisi d'être seul·e</h3>
        <p>
          La solitude peut être un refuge, un atelier, un jardin secret.
          Un espace pour créer, contempler, devenir.
        </p>
        <p>
          Si tu es ici parce que tu célèbres ta solitude, 
          explore nos thèmes sur l'art de vivre solo.
        </p>
        <a href="#themes" class="duality-link">
          Explorer la solitude choisie →
        </a>
      </div>

      <!-- ISOLEMENT SUBI -->
      <div class="duality-card suffered">
        <div class="duality-icon">💚</div>
        <h3>La solitude te pèse</h3>
        <p>
          Rupture, deuil, déménagement, éloignement...
          Parfois la solitude s'impose et fait mal.
        </p>
        <p>
          Tu n'es pas seul·e à te sentir seul·e.
          Trouve ici du soutien et des chemins possibles.
        </p>
        <a href="ressources.php" class="duality-link">
          Trouver du soutien →
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 7 THÈMES
       ============================================================ -->
  <section class="themes-section" id="themes">
    <div class="themes-header">
      <h2>Explore les thèmes de SOLOPLUGS</h2>
      <p>
        Sept univers pour accompagner ta solitude, 
        qu'elle soit choisie ou en cours de transformation.
      </p>
    </div>

    <div class="themes-grid">
      <!-- THÈME 1: VIVRE SOLO -->
      <a href="7_themes/vivre-solo.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1513002749550-c59d786b8e6c?w=800&q=80" alt="Vivre Solo" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
      
            <span class="theme-badge">Vivre Solo</span>
          </div>
          <h3>L'art de vivre seul·e</h3>
          <p>
            Transformer ton chez-toi en sanctuaire. 
            L'art de vivre seul·e au quotidien avec style et sérénité.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>

      <!-- THÈME 2: ADO SOLO -->
      <a href="7_themes/ado-solo.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1547592166-23ac45744acd?w=800&q=80" alt="Ado Solo" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
           
            <span class="theme-badge">Ado Solo</span>
          </div>
          <h3>L'adolescence en solo</h3>
          <p>
            Quand l'adolescence se vit en solo. 
            Tu n'es pas bizarre, tu cherches ton chemin.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>

      <!-- THÈME 3: PARENT SOLO -->
      <a href="7_themes/parent-solo.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=800&q=80" alt="Parent Solo" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
           
            <span class="theme-badge">Parent Solo</span>
          </div>
          <h3>Élever seul·e</h3>
          <p>
            Élever seul·e? Tu es plus fort·e que tu ne crois. 
            Stratégies et soutien pour la monoparentalité.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>

      <!-- THÈME 4: SÉPARATIONS/DIVORCES/DECES -->
      <a href="7_themes/divorces-separations-deces.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1517842645767-c639042777db?w=800&q=80" alt="Séparations" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
           
            <span class="theme-badge">Transitions</span>
          </div>
          <h3>Traverser la rupture</h3>
          <p>
            Quand la vie t'arrache quelqu'un. 
            Traverser la rupture, apprivoiser le vide, renaître.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>

      <!-- THÈME 5: VIEILLIR SOLO -->
      <a href="7_themes/vieillir-solo.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?w=800&q=80" alt="Vieillir Solo" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
           
            <span class="theme-badge">Vieillir Solo</span>
          </div>
          <h3>La sagesse des années</h3>
          <p>
            La solitude des années tardives. 
            Dignité, autonomie et liberté après 60 ans.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>

      <!-- THÈME 6: VOYAGER SOLO -->
      <a href="7_themes/voyages-solo.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&q=80" alt="Voyager Solo" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
            
            <span class="theme-badge">Voyages Solo</span>
          </div>
          <h3>L'aventure solitaire</h3>
          <p>
            Partir seul·e, revenir transformé·e. 
            L'aventure en solo comme école de vie.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>

      <!-- THÈME 7: SORTIES/LOISIRS -->
      <a href="7_themes/sorties-loisirs-rencontres.php" class="theme-card">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800&q=80" alt="Sorties Loisirs" class="theme-image">
        <div class="theme-content">
          <div class="theme-meta">
           
            <span class="theme-badge">Sorties & Loisirs</span>
          </div>
          <h3>Sortir en solo</h3>
          <p>
            Sortir seul·e sans te sentir seul·e. 
            Apprivoiser les espaces publics avec confiance.
          </p>
          <span class="theme-link">Explorer →</span>
        </div>
      </a>
    </div>
  </section>

  <!-- ============================================================
       SECTION MODULES IA
       ============================================================ -->
  <section class="ai-section">
    <div class="ai-header">
      <h2>Tes compagnons numériques</h2>
      <p>
        Deux intelligences artificielles conçues pour accompagner 
        ta solitude avec empathie et compréhension.
      </p>
    </div>

    <div class="ai-modules">
      <!-- SOLO -->
      <div class="ai-card coming-soon">
        <h3><span>💬</span> Solo</h3>
        <p>
          Un·e ami·e qui comprend ta solitude.
          Parle-lui de ce que tu vis, pose tes questions, 
          explore tes réflexions.
        </p>
        <span class="ai-status">Bientôt disponible</span>
      </div>

      <!-- SOLI -->
      <div class="ai-card coming-soon">
        <h3><span>📔</span> Soli</h3>
        <p>
          Ton journal personnel, intelligent et bienveillant.
          Écris pour toi, Soli t'aide à te comprendre.
        </p>
        <span class="ai-status">Bientôt disponible</span>
      </div>
    </div>
  </section>

  <!-- ============================================================
       APPEL À L'ACTION FINAL
       ============================================================ -->
  <section class="cta-section">
    <div class="cta-content">
      <p class="cta-quote">
        "Que ta solitude soit choisie ou subie,
        qu'elle soit légère ou lourde,
        elle mérite d'être comprise."
      </p>
      <a href="#themes" class="btn btn-primary">Explorer SOLOPLUGS</a>
    </div>
  </section>

<?php include 'components/footer.php'; ?>
<?php include 'components/widget-solo-aide.php'; ?>  
<?php include 'components/scripts.php'; ?>

</body>
</html>
