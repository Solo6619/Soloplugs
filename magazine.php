<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magazine – Soloplugs</title>
  <meta name="description" content="Un magazine pour celles et ceux qui vivent seuls — et qui veulent comprendre, apprécier et apprivoiser cette réalité.">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
  
 
  <link rel="stylesheet" href="css/magazine.css">
  
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
      <a href="#" class="submenu-trigger" onclick="event.preventDefault(); this.parentElement.classList.toggle('open'); this.nextElementSibling.classList.toggle('open'); return false;">Les 7 thèmes <span class="submenu-arrow">›</span></a>
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
    
    <li><a href="apropos.php">À propos</a></li>
    <li><a href="magazine.php" class="active">Magazine</a></li>
  </ul>
</nav>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <div class="hero-background">
    <img src="images/Magazine/images/Solitude_invisible_01.png" alt="Magazine Soloplugs">
  </div>
  <div class="hero-overlay"></div>
  
  <div class="hero-content">
    <div class="hero-label">
      <span class="hero-label-line"></span>
      <span class="hero-label-text">Magazine</span>
    </div>
    
    <h1 class="hero-title">
      <span class="line"><span>La voix</span></span>
      <span class="line"><span>de la</span></span>
      <span class="line"><span><em>solitude</em></span></span>
    </h1>
    
    <p class="hero-subtitle">
      Un magazine pour celles et ceux qui vivent seuls ou se sentent seuls - et qui veulent comprendre, 
      apprécier et apprivoiser cette réalité.
    </p>
  </div>
  
  <div class="scroll-indicator">
    <span>Défiler</span>
    <div class="scroll-line"></div>
  </div>
</section>

<!-- ============================================================
     SECTION : ARTICLE FONDATEUR
     ============================================================ -->
<section class="article-fondateur">
  <div class="fondateur-container">
    <div class="fondateur-badge">
      <span>Lire en premier</span>
    </div>
    
    <h2 class="fondateur-title">Solitude et isolement : deux réalités que l'on confond trop souvent</h2>
    
    <p class="fondateur-subtitle">Pourquoi vivre seul n'est pas toujours souffrir — et pourquoi l'isolement fait si mal.</p>
    
    <button class="fondateur-toggle" id="fondateur-toggle" onclick="toggleFondateur()">
      <span class="toggle-text">Lire l'article</span>
      <span class="toggle-icon">↓</span>
    </button>
    
<div class="fondateur-expandable" id="fondateur-expandable">
      <div class="fondateur-content">
        <p>En français, on utilise un seul mot pour parler de choses très différentes. On dit <em>solitude</em> pour évoquer le calme comme le manque, la paix comme la douleur, le choix comme la contrainte.</p>
        
        <p>À force, on finit par croire quelque chose de simple, mais faux : être seul voudrait forcément dire aller mal. Pourtant, de plus en plus de personnes vivent seules sans en souffrir, et beaucoup d'autres souffrent profondément sans être seules.</p>
        
        <p>La solitude, ce n’est pas l’absence des autres, c’est la rencontre avec soi-même. Parfois on la choisit, on l'accepte. Elle peut être douce, réparatrice, féconde. Mais elle peut aussi être inconfortable, voire douloureuse.</p>
        
        <p>L'isolement, lui, est autre chose. Ce n'est pas un état intérieur, mais une rupture de lien. On peut se sentir isolé en couple, en famille, au travail, même entouré. Ce n'est pas une question de quantité de relations, mais de ce qu'on y vit vraiment. Et cette souffrance-là ne disparaît pas simplement en « voyant du monde ».</p>
        
        <p>En anglais, on distingue clairement <em>solitude</em> et <em>loneliness</em>. En français, tout se mélange sous un seul mot. Soloplugs part de là : prendre le temps de nommer ce qu'on vit, pour mieux le comprendre.</p>
        
        <p>On peut aimer vivre seul à un moment de sa vie, et traverser une période d'isolement à un autre. Rien n'est figé. Comprendre la différence, ce n'est pas se ranger d'un côté ou de l'autre, c'est simplement se donner le droit de reconnaître ce que l'on vit.</p>
      </div>
      
      <div class="fondateur-signature">
        <p>Soloplugs existe pour rappeler que la solitude n'est pas un problème à corriger, mais que l'isolement mérite d'être reconnu et accompagné.</p>
        <span>C'est sur cette distinction que repose toute la démarche du magazine.</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION : LA VOIX (Articles avec images)
     ============================================================ -->
<section class="voix-section">
  <div class="voix-header">
    <h2>La Voix</h2>
    
    <div class="ligne-deco"></div>
  </div>

  <div class="voix-grid">
    <!-- Article 1 -->
    <a href="articles/solitude-invisible.php" class="voix-card" data-animate>
      <div class="voix-card-image">
        <img src="images/Magazine/images/Solitude_invisible_01.png" alt="La solitude invisible">
      </div>
      <div class="voix-card-content">
        <h3>La solitude invisible</h3>
        <p>On peut être entouré et se sentir profondément seul. La solitude ne dépend pas du fait d'être seul ou entouré.</p>
        <div class="voix-card-footer">
          <span>5 min</span>
          <span>6 déc 2025</span>
        </div>
      </div>
    </a>

    <!-- Article 2 -->
    <a href="articles/apprivoiser-le-silence.php" class="voix-card" data-animate>
      <div class="voix-card-image">
        <img src="images/Magazine/images/mag_01.png" alt="Apprivoiser le silence">
      </div>
      <div class="voix-card-content">
        <h3>Apprivoiser le silence du dimanche</h3>
        <p>Le dimanche en solo peut être lourd. Comment transformer cette journée en temps choisi plutôt que subi.</p>
        <div class="voix-card-footer">
          <span>7 min</span>
          <span>15 oct 2025</span>
        </div>
      </div>
    </a>

    <!-- Article 3 -->
    <a href="articles/beaute-petits-matins.php" class="voix-card" data-animate>
      <div class="voix-card-image">
        <img src="images/Magazine/images/beaute_des_petits_matins.png" alt="Les petits matins">
      </div>
      <div class="voix-card-content">
        <h3>La beauté des petits matins</h3>
        <p>Ces heures calmes où le monde semble attendre. Un temps pour soi, avant le bruit du jour.</p>
        <div class="voix-card-footer">
          
        </div>
      </div>
    </a>
  </div>
</section>

<!-- ============================================================
     SECTION : LES 5 UNIVERS DU MAGAZINE
     À coller dans magazine.php APRÈS la section "voix-section"
     et AVANT la section "articles-fondamentaux"
     ============================================================ -->
<section class="univers-section">
  <div class="univers-header">
    <p class="overline">Explorer le magazine</p>
    <h2>Cinq univers, <em>une même solitude</em></h2>
    <p>Chaque univers explore une facette de la vie solo. Trouvez celui qui vous parle aujourd'hui.</p>
    <div class="ligne-deco"></div>
  </div>

  <!-- Row 1 : 3 cartes -->
  <div class="univers-grid">

    <!-- 1. Bien-être & Quotidien -->
    <a href="articles/univers-bienetre.php" class="univers-card univers-card-image" data-animate>
      <img src="images/Magazine/univers/univers_01.png" alt="Bien-être & Quotidien">
    </a>

    <!-- 2. Relations & Connexions -->
    <a href="articles/univers-relations.php" class="univers-card univers-card-image" data-animate>
      <img src="images/Magazine/univers/univers_02.png" alt="Relations & Connexions">
    </a>

    <!-- 3. Créativité & Épanouissement -->
    <a href="articles/univers-creativite.php" class="univers-card univers-card-image" data-animate>
      <img src="images/Magazine/univers/univers_03.png" alt="Créativité & Épanouissement">
    </a>

  </div>

  <!-- Row 2 : 2 cartes centrées -->
  <div class="univers-grid-bottom">

    <!-- 4. Autonomie & Liberté -->
    <a href="articles/univers-autonomie.php" class="univers-card univers-card-image" data-animate>
      <img src="images/Magazine/univers/univers_04.png" alt="Autonomie & Liberté">
    </a>

    <!-- 5. Philosophie & Long-terme -->
    <a href="articles/univers-philosophie.php" class="univers-card univers-card-image" data-animate>
      <img src="images/Magazine/univers/univers_05.png" alt="Philosophie & Long-terme">
    </a>

  </div>
</section>
     <!-- ============================================================
     SECTION : À LIRE QUAND ON VIT SEUL
      ======================================================= -->
<section class="articles-fondamentaux">
  <div class="section-intro">
    <h2 class="section-intro-title">À lire quand on vit seul</h2>
    <p class="section-intro-text">
      Des articles de fond pour explorer, comprendre et habiter sa solitude. 
      Pas de conseils rapides. Pas de solutions miracles. Juste des mots qui prennent le temps.
    </p>
  </div>

  <div class="articles-list">
    
 <!-- Article 1 -->
<a href="articles/solitude-dans-le-couple.php" class="article-item" data-animate>
  <div class="article-item-image">
    <img src="images/Magazine/articles/solitude-couple.png" alt="La solitude dans le couple">
  </div>
  
  <h3 class="article-item-title">La solitude dans le couple</h3>
  <p class="article-item-excerpt">
    On associe souvent la solitude au fait d'être seul. Pourtant, certaines des solitudes 
    les plus profondes se vivent à deux. Cette solitude-là est souvent difficile à nommer, 
    parce qu'elle semble illégitime.
  </p>
  
  <span class="article-item-link">Lire l'article →</span>
</a>

    <!-- Article 2 -->
    <a href="articles/liberte-invisible.php" class="article-item" data-animate>
      <div class="article-item-image">
        <img src="images/Magazine/articles/liberte-invisible-hero.jpg" alt="La liberté invisible">
      </div>
     
      <h3 class="article-item-title">La liberté invisible : vivre seul au quotidien</h3>
      <p class="article-item-excerpt">
        Horaires, silence, désordre, liberté : ce que vivre seul permet vraiment. 
        Personne pour commenter l'heure du dîner. Personne pour négocier la température du chauffage. 
        Ce qui ressemble parfois à de l'isolement est souvent une forme rare de souveraineté sur son propre temps.
      </p>
      
      <span class="article-item-link">Lire l'article →</span>
    </a>

    <!-- Article 3 -->
    <a href="articles/etre-seul-sans-etre-isole.php" class="article-item" data-animate>
      <div class="article-item-image">
        <img src="images/Magazine/articles/etre-seul-sans-etre-isole.jpg" alt="Être seul sans être isolé">
      </div>
      
      <h3 class="article-item-title">Être seul sans être isolé : comprendre la différence pour mieux la vivre</h3>
      <p class="article-item-excerpt">
        Un article de référence, clair, nuancé, concret. La solitude est un état. 
        L'isolement est une privation. Confondre les deux, c'est se condamner à mal vivre l'un ou l'autre. 
        Cet article pose les définitions, explore les zones grises, et propose des repères pour naviguer entre les deux.
      </p>
      
      <span class="article-item-link">Lire l'article →</span>
    </a>
  
    <!-- Article 4 : Hikikomori -->
    <a href="articles/hikikomori.php" class="article-item" data-animate>
      <div class="article-item-image">
        <img src="images/Magazine/articles/hikikomori.png" alt="Les hikikomori">
      </div>
      
      <h3 class="article-item-title">Les hikikomori : quand la solitude devient refuge</h3>
      <p class="article-item-excerpt">
        Ils sont plus d'un million au Japon à vivre reclus, coupés du monde. 
        Qui sont-ils, que fuient-ils, et quel rapport entretiennent-ils avec la solitude ? 
        Une plongée dans ce phénomène qui interroge la frontière entre refuge et prison.
      </p>
      
      <span class="article-item-link">Lire l'article →</span>
    </a>
    
    <!-- Article 5 -->
    <a href="articles/recuperation-mentale.php" class="article-item" data-animate>
      <div class="article-item-image">
        <img src="images/Magazine/images/Solitude_silence_use_01.png" alt="Récupération mentale">
      </div>
     
      <h3 class="article-item-title">Quand la solitude devient un espace de récupération mentale</h3>
      <p class="article-item-excerpt">
        Ce que la science et l'expérience disent vraiment. Les études en neurosciences montrent 
        que le cerveau a besoin de périodes sans stimulation sociale pour consolider la mémoire, 
        traiter les émotions, et restaurer l'attention. Vivre seul, c'est avoir accès à ce temps de récupération chaque jour.
      </p>
     
      <span class="article-item-link">Lire l'article →</span>
    </a>

    
   <!-- Article 6 -->
<a href="articles/femmes-vieillissent-seules.php" class="article-item" data-animate>
  <div class="article-item-image">
    <img src="images/Magazine/articles/mag_03.png" alt="Les femmes vieillissent seules">
  </div>
  
  <h3 class="article-item-title">Les femmes vieillissent plus souvent seules</h3>
  <p class="article-item-excerpt">
    Elles vivent plus longtemps, et donc plus longtemps seules. Derrière les statistiques 
    se cache une réalité nuancée : entre fragilité réelle et force tranquille, le portrait 
    d'une résilience féminine au grand âge.
  </p>
  
  <span class="article-item-link">Lire l'article →</span>
</a>

    <!-- Article 7 : Vivre seul avec un animal -->
    <a href="articles/vivre-seul-animal.php" class="article-item" data-animate>
      <div class="article-item-image">
        <img src="images/Magazine/articles/vivre-seul-animal.png" alt="Vivre seul avec un animal">
      </div>
      
      <h3 class="article-item-title">Vivre seul avec un animal : plus qu'une compagnie</h3>
      <p class="article-item-excerpt">
        Ce que la présence d'un chat, d'un chien ou d'un autre compagnon change vraiment au quotidien. 
        Une présence qui remplit le silence, structure les journées et ouvre parfois la porte vers les autres.
      </p>
      
      <span class="article-item-link">Lire l'article →</span>
    </a>

  </div>
</section>

<!-- ============================================================
     SECTION : SOLO BD
     ============================================================ -->
<section class="solo-bd-section">
  <div class="solo-bd-container">
    <span class="solo-bd-label">Solo BD</span>
    <h2 class="solo-bd-title">Une pensée en images</h2>
    
    <img src="images/Magazine/solo-bd/bd01.png" alt="Solo BD - Être seul" class="solo-bd-image" data-animate>
    
    <p class="solo-bd-quote">
      « Être seul, c'est aussi savourer la paix et le plaisir de sa propre compagnie. »
    </p>
    
    <div class="solo-bd-nav">
      <button class="solo-bd-nav-btn" onclick="prevBD()">← Précédent</button>
      <button class="solo-bd-nav-btn" onclick="nextBD()">Suivant →</button>
    </div>
  </div>
</section>



<!-- ============================================================
     SECTION : RUBRIQUES
     ============================================================ -->
<section class="rubriques-section">
  <div class="rubriques-header">
    <h2>Nos rubriques</h2>
    <p>Explorer, créer, savourer la vie en solo</p>
    <div class="ligne-deco"></div>
  </div>

  <div class="rubriques-grid">
    
    <!-- Solo à table -->
    <a href="section-table.php" class="rubrique-card" data-animate>
      <div class="rubrique-image">
        <img src="images/Magazine/recettes/riz_saute_solo.jpg" alt="Solo à table">
        <span class="rubrique-icon">🍽️</span>
      </div>
      <div class="rubrique-content">
        <h3>Solo à table</h3>
        <p>Recettes gourmandes pour une personne. Cuisiner seul, c'est aussi se faire plaisir.</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

    <!-- Jeux en Solo -->
    <a href="articles/jeux-solo.php" class="rubrique-card" data-animate>
      <div class="rubrique-image">
        <img src="images/Magazine/images/Jeux_en_solo_001.png" alt="Jeux en Solo">
        <span class="rubrique-icon">🎮</span>
      </div>
      <div class="rubrique-content">
        <h3>Jeux en Solo</h3>
        <p>Solitaire, Sudoku, échecs, jeux vidéo... pour le plaisir de jouer avec soi-même.</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

    <!-- Hobbies & Créativité -->
    <a href="section-hobbies.php" class="rubrique-card" data-animate>
      <div class="rubrique-image">
        <img src="images/Magazine/images/Hobbies_001.png" alt="Hobbies">
        <span class="rubrique-icon">🎨</span>
      </div>
      <div class="rubrique-content">
        <h3>Hobbies & Créativité</h3>
        <p>Dessin, musique, artisanat, écriture... des passions à cultiver en solo.</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

    <!-- Lectures & Découvertes -->
    <a href="lectures-decouvertes.php" class="rubrique-card" data-animate>
      <div class="rubrique-image">
        <img src="images/Magazine/images/Lectures_decouvertes_001.png" alt="Lectures">
        <span class="rubrique-icon">📚</span>
      </div>
      <div class="rubrique-content">
        <h3>Lectures & Découvertes</h3>
        <p>Livres, films, podcasts, séries... des recommandations pour les moments solo.</p>
        <span class="rubrique-link">Découvrir →</span>
      </div>
    </a>

  </div>
</section>

<!-- ============================================================
     NEWSLETTER
     ============================================================ -->
<section class="newsletter-section">
  <div class="newsletter-container">
    <h2 class="newsletter-title">Recois la solitude positive</h2>
    <p class="newsletter-subtitle">
      Des réflexions, des découvertes et de l'inspiration directement dans ta boîte mail.
    </p>
    
    <form class="newsletter-form">
      <input type="email" placeholder="Ton adresse email" required>
      <button type="submit">S'inscrire</button>
    </form>
  </div>
</section>

<!-- ============================================================
     BOUTON SCROLL-TO-TOP
     ============================================================ -->
<button class="scroll-to-top" id="scrollToTopBtn" onclick="scrollToTop()">↑</button>

<!-- ============================================================
     SCRIPTS
     ============================================================ -->
<script>
  // Scroll-to-top functionality
  const scrollToTopBtn = document.getElementById('scrollToTopBtn');
  
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      scrollToTopBtn.classList.add('show');
    } else {
      scrollToTopBtn.classList.remove('show');
    }
  });
  
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  
  // Toggle article fondateur
  function toggleFondateur() {
    const toggle = document.getElementById('fondateur-toggle');
    const expandable = document.getElementById('fondateur-expandable');
    const toggleText = toggle.querySelector('.toggle-text');
    
    toggle.classList.toggle('active');
    expandable.classList.toggle('open');
    
    if (expandable.classList.contains('open')) {
      toggleText.textContent = 'Réduire';
    } else {
      toggleText.textContent = 'Lire l\'article';
    }
  }

  // Intersection Observer for scroll animations
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

  document.querySelectorAll('[data-animate]').forEach(el => {
    observer.observe(el);
  });

  // Parallax effect on hero
  window.addEventListener('scroll', () => {
    const hero = document.querySelector('.hero-background img');
    const scrolled = window.pageYOffset;
    if (hero && scrolled < window.innerHeight) {
      hero.style.transform = `scale(${1.1 - scrolled * 0.0001}) translateY(${scrolled * 0.3}px)`;
    }
  });

  // Solo BD navigation
  let currentBD = 1;
  const bdTotal = 3;
  
  function nextBD() {
    if (currentBD < bdTotal) {
      currentBD++;
      updateBD();
    }
  }
  
  function prevBD() {
    if (currentBD > 1) {
      currentBD--;
      updateBD();
    }
  }
  
  function updateBD() {
    const img = document.querySelector('.solo-bd-image');
    img.src = `images/Magazine/solo-bd/bd0${currentBD}.png`;
  }
  
  // Nav background on scroll
  window.addEventListener('scroll', () => {
    const nav = document.querySelector('.nav');
    if (window.scrollY > 100) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });
  // Menu hamburger
  function toggleMenu() {
    document.querySelector('.nav-links').classList.toggle('open');
  }
  
  window.toggleMenu = toggleMenu;
</script>

</body>
</html>
