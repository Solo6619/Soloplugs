<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soloplugs – La voix de la solitude</title>
  <meta name="description" content="Soloplugs accompagne les personnes dans leurs différentes expériences de solitude.">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Lora:ital,wght@0,400;0,500;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
 
<link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/components.css">
</head>
<body>

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<nav class="nav" id="nav">
  <a href="index.php" class="nav-logo">Soloplugs</a>
  <button class="hamburger" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <ul class="nav-links">
   
    <li class="has-submenu">
      <a href="#" class="submenu-trigger" onclick="event.preventDefault(); this.parentElement.classList.toggle('open'); this.nextElementSibling.classList.toggle('open'); return false;">Les 7 univers <span class="submenu-arrow">›</span></a>
      <ul class="submenu">
        <li><a href="7_themes/vivre-solo.php">Vivre Solo</a></li>
        <li><a href="7_themes/ado-solo.php">Ado Solo</a></li>
        <li><a href="7_themes/parent-solo.php">Parent Solo</a></li>
        <li><a href="7_themes/vieillir-solo.php">Vieillir Solo</a></li>
        <li><a href="7_themes/voyages-solo.php">Voyages Solo</a></li>
        <li><a href="7_themes/sorties-loisirs-rencontres.php">Sorties & Loisirs</a></li>
        <li><a href="7_themes/divorces-separations-deces.php">Divorces & Séparations</a></li>
      </ul>
    </li>
    <li><a href="solo.php">Solo</a></li>
    <li><a href="apropos.php">À propos</a></li>
    <li><a href="magazine.php">Magazine</a></li>
  </ul>
</nav>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero">
  <div class="hero-content">
    <p class="hero-subtitle">Bienvenue dans l'univers</p>
    <h1 class="hero-title">La voix de la Solitude</h1>
    <p class="hero-quote">
      « Là où la rencontre ne se fait pas avec les autres, mais avec soi-même. »
    </p>
    <a href="#echelle" class="hero-cta">
      Découvrir
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M12 5v14M19 12l-7 7-7-7"/>
      </svg>
    </a>
  </div>
  
  <div class="scroll-indicator">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="2">
      <path d="M12 5v14M19 12l-7 7-7-7"/>
    </svg>
  </div>
</section>

<!-- ============================================================
     INTRODUCTION
     ============================================================ -->
<section class="intro">
  <div class="intro-content">
  <p class="intro-text">
  <em>La solitude fait partie de l'expérience humaine. Elle peut être douce ou douloureuse, choisie ou imposée. Soloplugs t'invite à la regarder en face — pour apprendre à vivre avec elle, et découvrir ce qu'elle révèle.</em>
</p>
    <div class="ligne-decorative"></div>
  </div>
</section>



<!-- ============================================================
     SECTION 7 THÈMES - HERO + 3 + 3
     ============================================================ -->
<section class="themes-section" id="themes">
  <div class="section-header">
    <h2>Les 7 univers de la solitude</h2>
    <p>Sept chemins pour accompagner ta solitude, qu'elle soit choisie ou en transformation.</p>
  </div>

  <div class="themes-container">

    <!-- HERO : VIVRE SOLO -->
    <a href="7_themes/vivre-solo.php" class="theme-hero animate-on-scroll">
      <img src="https://images.unsplash.com/photo-1505852679233-d9fd70aff56d?w=1400&q=80" alt="Vivre Solo">
      <div class="theme-overlay">
        <span class="theme-label">Vivre Solo</span>
        <h3 class="theme-title">L'art de la solitude</h3>
        <p class="theme-tagline">La solitude est une réalité. La manière de la traverser peut devenir un art.</p>
      </div>
    </a>

    <!-- PREMIÈRE RANGÉE : 3 thèmes -->
    <div class="themes-grid">

      <!-- ADO SOLO -->
      <a href="7_themes/ado-solo.php" class="theme-card theme-ado-solo animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1473830394358-91588751b241?w=600&q=80" alt="Ado Solo">
        <div class="theme-overlay">
          <span class="theme-label">Ado Solo</span>
          <h3 class="theme-title">L'adolescence en solo</h3>
          <p class="theme-tagline">Tu n'es pas bizarre. Tu cherches ton chemin.</p>
        </div>
      </a>

      <!-- PARENT SOLO -->
      <a href="7_themes/parent-solo.php" class="theme-card theme-parent-solo animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=600&q=80" alt="Parent Solo">
        <div class="theme-overlay">
          <span class="theme-label">Parent Solo</span>
          <h3 class="theme-title">Élever seul·e</h3>
          <p class="theme-tagline">Tu es plus fort·e que tu ne crois.</p>
        </div>
      </a>

      <!-- SÉPARATION / DEUIL -->
      <a href="7_themes/divorces-separations-deces.php" class="theme-card theme-separation animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1516410529446-2c777cb7366d?w=600&q=80" alt="Séparation Deuil">
        <div class="theme-overlay">
          <span class="theme-label">Traversées</span>
          <h3 class="theme-title">Séparations & Deuils</h3>
          <p class="theme-tagline">Quand la vie bascule. Accompagner la reconstruction.</p>
        </div>
      </a>

    </div>

    <!-- DEUXIÈME RANGÉE : 3 thèmes -->
    <div class="themes-grid">

      <!-- VIEILLIR SOLO -->
      <a href="7_themes/vieillir-solo.php" class="theme-card theme-vieillir-solo animate-on-scroll">
        <img src="images/sagesse_de_vieillir_01.jpg" alt="Vieillir Solo">
        <div class="theme-overlay">
          <span class="theme-label">Vieillir Solo</span>
          <h3 class="theme-title">La sagesse des années</h3>
          <p class="theme-tagline">L'expérience d'une vie. La force de continuer.</p>
        </div>
      </a>

      <!-- VOYAGES SOLO -->
      <a href="7_themes/voyages-solo.php" class="theme-card theme-voyages-solo animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=600&q=80" alt="Voyages Solo">
        <div class="theme-overlay">
          <span class="theme-label">Voyages Solo</span>
          <h3 class="theme-title">Partir seul·e</h3>
          <p class="theme-tagline">Le monde t'attend. Ose l'aventure.</p>
        </div>
      </a>

      <!-- SORTIES & LOISIRS -->
      <a href="7_themes/sorties-loisirs-rencontres.php" class="theme-card theme-sorties animate-on-scroll">
        <img src="images/sorties-loisirs-rencontres/s-l-r_01.png" alt="Sorties Loisirs">
        <div class="theme-overlay">
          <span class="theme-label">Sorties & Loisirs</span>
          <h3 class="theme-title">Oser sortir seul·e</h3>
          <p class="theme-tagline">Le café, le resto, le cinéma. Reprendre l'espace public.</p>
        </div>
      </a>

    </div>

  </div>
</section>

<!-- ============================================================
     APPEL À L'ACTION FINAL
     ============================================================ -->
<section class="cta-section">
  <div class="cta-content animate-on-scroll">
    <p class="cta-quote">
      « Que ta solitude soit choisie ou subie,<br>
      qu'elle soit légère ou lourde,<br>
      elle mérite d'être comprise. »
    </p>
    <a href="apropos.php" class="btn-primary">
      Découvrir notre philosophie
    </a>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<?php $basePath = ''; include 'components/footer.php'; ?>

<!-- ============================================================
     SCRIPTS
     ============================================================ -->
<script>
  // Navigation qui change au scroll
  const nav = document.getElementById('nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });

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

  // ============================================================
  // ÉCHELLE DE LA SOLITUDE
  // ============================================================
  const niveaux = {
    1: {
      zone: 'verte',
      nom: 'Plénitude solitaire',
      description: 'Je savoure ma solitude. Elle me nourrit, me ressource. Je n\'en changerais pas.',
      parcours: 'chosen'
    },
    2: {
      zone: 'verte',
      nom: 'Indépendance sereine',
      description: 'Je vis seul·e par choix. J\'ai des liens, mais j\'ai besoin de mon espace.',
      parcours: 'chosen'
    },
    3: {
      zone: 'verte',
      nom: 'Solitude apprivoisée',
      description: 'J\'ai appris à vivre seul·e. Ce n\'était pas mon choix initial, mais j\'y trouve ma place.',
      parcours: 'chosen'
    },
    4: {
      zone: 'verte',
      nom: 'Équilibre fragile',
      description: 'Ça va globalement, mais certains moments sont plus difficiles que d\'autres.',
      parcours: 'chosen'
    },
    5: {
      zone: 'jaune',
      nom: 'Solitude intermittente',
      description: 'Parfois ça va, parfois c\'est dur. Les week-ends, les soirs, les fêtes...',
      parcours: 'both'
    },
    6: {
      zone: 'jaune',
      nom: 'Isolement relationnel',
      description: 'Je suis entouré·e, mais je me sens seul·e. Personne ne me comprend vraiment.',
      parcours: 'both'
    },
    7: {
      zone: 'jaune',
      nom: 'Solitude subie récente',
      description: 'Un événement m\'a laissé·e seul·e (rupture, deuil, déménagement). Je ne m\'y fais pas.',
      parcours: 'suffered'
    },
    8: {
      zone: 'jaune',
      nom: 'Repli progressif',
      description: 'Je m\'isole de plus en plus. Sortir, appeler, voir du monde devient difficile.',
      parcours: 'suffered'
    },
    9: {
      zone: 'rouge',
      nom: 'Solitude chronique',
      description: 'Je me sens seul·e presque tout le temps. C\'est devenu mon état normal.',
      parcours: 'suffered'
    },
    10: {
      zone: 'rouge',
      nom: 'Invisible aux autres',
      description: 'J\'ai l\'impression que personne ne me voit, que je pourrais disparaître sans que ça change rien.',
      parcours: 'suffered'
    },
    11: {
      zone: 'rouge',
      nom: 'Désespoir silencieux',
      description: 'Ma solitude me fait souffrir profondément. Je ne sais plus comment m\'en sortir.',
      parcours: 'urgence'
    },
    12: {
      zone: 'rouge',
      nom: 'Détresse',
      description: 'Je suis en crise. J\'ai besoin d\'aide maintenant.',
      parcours: 'urgence'
    }
  };

  const points = document.querySelectorAll('.echelle-point');
  const marker = document.getElementById('marker');
  const description = document.getElementById('description');
  const cta = document.getElementById('cta');
  const btnContinuer = document.getElementById('btn-continuer');
  const urgence = document.getElementById('urgence');

  let selectedLevel = null;

  function selectLevel(level) {
    selectedLevel = level;
    const data = niveaux[level];

    // Mettre à jour les points actifs
    points.forEach(p => p.classList.remove('active'));
    document.querySelector(`[data-level="${level}"]`).classList.add('active');

    // Positionner le marqueur
    const percentage = ((level - 1) / 11) * 100;
    marker.style.left = `${percentage}%`;
    marker.style.opacity = '1';

    // Mettre à jour la description
    const zoneName = data.zone === 'verte' ? 'Solitude habitée' : 
                     data.zone === 'jaune' ? 'Solitude en tension' : 'Solitude souffrante';
    
    description.innerHTML = `
      <span class="description-level zone-${data.zone}">${zoneName}</span>
      <h3 class="description-name">${data.nom}</h3>
      <p class="description-text">"${data.description}"</p>
    `;

    // Afficher le bouton Continuer
    cta.classList.add('visible');

    // Gérer le message d'urgence
    if (level >= 11) {
      urgence.classList.add('visible');
      btnContinuer.innerHTML = `
        Voir les ressources d'aide
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      `;
    } else {
      urgence.classList.remove('visible');
      btnContinuer.innerHTML = `
        Explorer mon parcours
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      `;
    }

    // Sauvegarder dans localStorage
    localStorage.setItem('soloplugs_solitude_level', level);
  }

  function handleContinue() {
    if (!selectedLevel) return;

    const data = niveaux[selectedLevel];
    
    // Redirection selon le parcours
    switch(data.parcours) {
      case 'chosen':
        window.location.href = '7_themes/vivre-solo.php?parcours=chosen#content-chosen';
        break;
      case 'suffered':
        window.location.href = '7_themes/vivre-solo.php?parcours=suffered#content-suffered';
        break;
      case 'both':
        window.location.href = '7_themes/vivre-solo.php';
        break;
      case 'urgence':
        window.location.href = 'urgences.php';
        break;
    }
  }

  points.forEach(point => {
    point.addEventListener('click', () => {
      const level = parseInt(point.dataset.level);
      selectLevel(level);
    });
  });

  btnContinuer.addEventListener('click', handleContinue);

  // Position initiale du marqueur
  marker.style.left = '45%';
  marker.style.opacity = '0.5';

  // Menu hamburger
  function toggleMenu() {
    document.querySelector('.nav-links').classList.toggle('open');
  }
  
  // Rendre les fonctions accessibles globalement
  window.toggleMenu = toggleMenu;
</script>

<!-- Script séparé pour le sous-menu mobile -->
<script>
(function() {
  // Menu hamburger
  window.toggleMenu = function() {
    document.querySelector('.nav-links').classList.toggle('open');
  };
  
  // Sous-menu thèmes - attendre que le DOM soit prêt
  function initSubmenu() {
    var trigger = document.querySelector('.submenu-trigger');
    var submenu = document.querySelector('.submenu');
    var parent = document.querySelector('.has-submenu');
    
    if (trigger && submenu && parent) {
      trigger.onclick = function(e) {
        e.preventDefault();
        e.stopPropagation();
        parent.classList.toggle('open');
        submenu.classList.toggle('open');
        return false;
      };
    }
  }
  
  // Exécuter immédiatement et aussi après chargement
  initSubmenu();
  document.addEventListener('DOMContentLoaded', initSubmenu);
  window.addEventListener('load', initSubmenu);
})();
</script>

</body>
</html>
