<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Ado solo — T\'es pas seul·e';
    $pageDescription = 'Espace dédié aux adolescents qui vivent la solitude. Tu n\'es pas bizarre, tu cherches ton chemin.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['ado-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-ado">
    <div class="hero-content">
      
      <!-- Icône SVG : Cœur avec étoiles -->
      <div class="hero-icon">
        <svg viewBox="0 0 120 120" width="120" height="120" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Cœur principal -->
          <path d="M60 100C60 100 15 65 15 40C15 25 27 15 42 15C52 15 58 22 60 28C62 22 68 15 78 15C93 15 105 25 105 40C105 65 60 100 60 100Z" 
                fill="url(#heartGradient)" 
                stroke="#9B59B6" 
                stroke-width="3"/>
          <!-- Étoiles autour -->
          <circle cx="25" cy="25" r="4" fill="#E67E22" opacity="0.8">
            <animate attributeName="opacity" values="0.8;0.3;0.8" dur="2s" repeatCount="indefinite"/>
          </circle>
          <circle cx="95" cy="30" r="3" fill="#9B59B6" opacity="0.6">
            <animate attributeName="opacity" values="0.6;0.2;0.6" dur="2.5s" repeatCount="indefinite"/>
          </circle>
          <circle cx="100" cy="70" r="4" fill="#E67E22" opacity="0.7">
            <animate attributeName="opacity" values="0.7;0.3;0.7" dur="1.8s" repeatCount="indefinite"/>
          </circle>
          <circle cx="20" cy="65" r="3" fill="#9B59B6" opacity="0.5">
            <animate attributeName="opacity" values="0.5;0.2;0.5" dur="2.2s" repeatCount="indefinite"/>
          </circle>
          <!-- Petits cœurs -->
          <path d="M30 85C30 85 25 80 25 76C25 73 28 71 31 73C34 71 37 73 37 76C37 80 30 85 30 85Z" fill="#BB8FCE" opacity="0.6"/>
          <path d="M90 20C90 20 87 17 87 15C87 13 89 12 91 13C93 12 95 13 95 15C95 17 90 20 90 20Z" fill="#E67E22" opacity="0.5"/>
          <defs>
            <linearGradient id="heartGradient" x1="15" y1="15" x2="105" y2="100" gradientUnits="userSpaceOnUse">
              <stop offset="0%" stop-color="#BB8FCE"/>
              <stop offset="100%" stop-color="#9B59B6"/>
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- Badge -->
      <div class="hero-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        Safe space
      </div>

      <!-- Titre -->
      <h1 class="hero-title">Ado <span class="highlight">solo</span></h1>
      
      <!-- Sous-titre -->
      <p class="hero-subtitle">T'es pas seul·e à te sentir seul·e</p>
      
      <!-- Description -->
      <p class="hero-description">
        Entre les changements du corps, la pression des réseaux sociaux, 
        l'école, les parents qui comprennent rien... des fois, tu te sens 
        complètement seul·e même entouré·e de monde. 
        <strong>On te voit. On te comprend.</strong>
      </p>

    </div>
  </section>

  <!-- ============================================================
       SECTION : ON TE COMPREND
       ============================================================ -->
  <section class="section">
    <div class="container container-narrow">
      <div class="section-header">
        <h2><span class="emoji">💬</span> Genre, on sait ce que tu vis</h2>
        <p>
          L'adolescence, c'est pas de la petite bière. Ton corps change, 
          tes émotions sont intenses, et t'as l'impression que personne capte vraiment.
        </p>
      </div>

      <div class="intro-box animate-on-scroll">
        <p>
          Peut-être que t'as l'impression d'être <strong>invisible</strong>. Ou au contraire, que tout le monde 
          te juge. Que tes ami·es t'ont laissé·e tomber. Que tes parents comprennent rien à ce que tu vis.
        </p>
        <p>
          Peut-être que tu scrolles pendant des heures sur Insta ou TikTok, et après tu te sens encore 
          plus vide. Que tu compares ta vie à celle des autres et que t'as l'impression de pas être à la hauteur.
        </p>
        <p>
          Peut-être que certains jours, tu te demandes si ça va s'arranger un jour.
        </p>
        <p class="highlight-text">
          Écoute : c'est tough, mais t'es pas seul·e. Des millions d'ados vivent la même affaire. 
          Pis ça va finir par passer, même si là, tout de suite, ça semble impossible. 💜
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : LES DÉFIS
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2><span class="emoji">💭</span> Les trucs qui te pèsent</h2>
        <p>
          On va pas te mentir : être ado, c'est pas toujours facile. 
          Voici ce que plein d'ados vivent... et comment gérer.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Défi 1 : Réseaux sociaux -->
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
              <line x1="12" y1="18" x2="12" y2="18"/>
            </svg>
          </div>
          <h3>Les réseaux sociaux qui tuent</h3>
          <p>
            Tout le monde a l'air heureux, populaire, parfait. 
            Toi tu te sens nul·le à côté. <strong>Spoiler :</strong> c'est des highlights, pas la vraie vie.
          </p>
          <p><strong>Ce qu'on peut faire :</strong></p>
          <ul>
            <li>Limite ton temps d'écran (pour vrai)</li>
            <li>Unfollow ce qui te fait sentir mal</li>
            <li>Follow des comptes positifs, réels</li>
            <li>Personne poste ses moments de marde</li>
          </ul>
        </div>

        <!-- Défi 2 : Pression sociale -->
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
              <line x1="9" y1="9" x2="9.01" y2="9"/>
              <line x1="15" y1="9" x2="15.01" y2="9"/>
            </svg>
          </div>
          <h3>La pression de fitter</h3>
          <p>
            Les "bonnes" fringues, le bon look, dire les bonnes affaires, 
            être dans le bon groupe... T'es épuisé·e de jouer un rôle.
          </p>
          <p><strong>Ce qu'on peut faire :</strong></p>
          <ul>
            <li>Trouve 1-2 personnes avec qui t'es vraiment toi</li>
            <li>T'as pas besoin d'être ami·e avec tout le monde</li>
            <li>Explore tes vrais intérêts (même si c'est pas "cool")</li>
            <li>Les vrais vont accepter qui t'es</li>
          </ul>
        </div>

        <!-- Défi 3 : École -->
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
              <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
              <line x1="8" y1="7" x2="16" y2="7"/>
              <line x1="8" y1="11" x2="14" y2="11"/>
            </svg>
          </div>
          <h3>L'école qui stresse</h3>
          <p>
            Notes, examens, pression de performer, orientation, bullying parfois... 
            C'est beaucoup sur tes épaules.
          </p>
          <p><strong>Ce qu'on peut faire :</strong></p>
          <ul>
            <li>Parle à un·e prof ou conseiller·ère</li>
            <li>Les notes définissent pas ta valeur</li>
            <li>Si bullying : documente, parle à un adulte</li>
            <li>Prends des pauses, respire</li>
          </ul>
        </div>

        <!-- Défi 4 : Parents -->
        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Les parents qui captent pas</h3>
          <p>
            Ils comprennent rien à ce que tu vis. Ils contrôlent trop ou au contraire 
            s'en foutent. Vous vous parlez plus vraiment.
          </p>
          <p><strong>Ce qu'on peut faire :</strong></p>
          <ul>
            <li>Essaie de leur expliquer calmement</li>
            <li>Trouve un adulte de confiance si besoin</li>
            <li>Si c'est toxique : cherche de l'aide externe</li>
            <li>Dans quelques années, tu seras autonome</li>
          </ul>
        </div>

        <!-- Défi 5 : Relations -->
        <div class="theme-card animate-on-scroll animate-delay-4">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              <line x1="1" y1="1" x2="23" y2="23" stroke-width="2"/>
            </svg>
          </div>
          <h3>Les amitiés/amours compliquées</h3>
          <p>
            Ghosting, chicanes de groupe, peine d'amour, jalousie, trahison... 
            Les relations à l'ado, c'est intense et ça fait mal.
          </p>
          <p><strong>Ce qu'on peut faire :</strong></p>
          <ul>
            <li>C'est correct de pleurer, prends ton temps</li>
            <li>Entoure-toi de gens qui te respectent</li>
            <li>Une vraie amitié devrait pas être compliquée 24/7</li>
            <li>Tu mérites mieux qu'être option #2</li>
          </ul>
        </div>

        <!-- Défi 6 : Identité -->
        <div class="theme-card animate-on-scroll animate-delay-5">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
              <line x1="2" y1="12" x2="22" y2="12"/>
            </svg>
          </div>
          <h3>Découvrir qui t'es vraiment</h3>
          <p>
            Identité de genre, orientation sexuelle, valeurs, passions... 
            T'es en train de te découvrir et c'est normal que ce soit confus.
          </p>
          <p><strong>Ce qu'on peut faire :</strong></p>
          <ul>
            <li>T'as le droit de pas avoir toutes les réponses</li>
            <li>Explore à ton rythme, sans pression</li>
            <li>Y'a des ressources LGBTQ+ pour jeunes</li>
            <li>Qui t'es maintenant ≠ qui tu seras pour toujours</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : AIDE D'URGENCE
       ============================================================ -->
  <section class="section">
    <div class="container container-narrow">
      <div class="emergency-box animate-on-scroll">
        <h2>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <line x1="12" y1="8" x2="12" y2="12"/>
            <line x1="12" y1="16" x2="12.01" y2="16"/>
          </svg>
          Si tu penses à te faire du mal
        </h2>
        <p class="strong-text">
          Écoute : si t'as des pensées suicidaires, des idées de te faire du mal, 
          ou que tu te sens vraiment pas safe... <strong>APPELLE. Maintenant. Pas demain.</strong>
        </p>
        <p>
          Ces lignes sont gratuites, anonymes, disponibles 24/7. 
          Y'a quelqu'un au bout du fil qui veut t'aider.
        </p>
        
        <ul class="emergency-numbers">
          <li>
            <span class="label">Tel-Jeunes :</span>
            <span class="number">1-800-263-2266 (24/7)</span>
          </li>
          <li>
            <span class="label">Jeunesse, J'écoute :</span>
            <span class="number">1-800-668-6868 (24/7)</span>
          </li>
          <li>
            <span class="label">Suicide Action Montréal :</span>
            <span class="number">1-866-277-3553 (24/7)</span>
          </li>
          <li>
            <span class="label">Texto en cas de crise :</span>
            <span class="number">Texte PARLER au 686868</span>
          </li>
        </ul>
        
        <p class="emergency-note">
          T'es pas un fardeau. Ta vie a de la valeur. Ça va pas toujours être aussi tough. 
          Donne-toi une chance. Appelle. 💜
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : TÉMOIGNAGES
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2><span class="emoji">💪</span> D'autres ados qui s'en sont sortis</h2>
        <p>
          Vraies histoires de jeunes qui ont traversé des moments tough. 
          Preuve que ça finit par aller mieux.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Témoignage 1 -->
        <div class="testimonial-card animate-on-scroll">
          <div class="testimonial-icon">🌈</div>
          <h3>Alex, 17 ans</h3>
          <p>
            "À 15 ans, je me sentais complètement seul avec mon coming out. 
            J'ai trouvé un groupe LGBTQ+ pour jeunes. Ça a tout changé. 
            J'ai rencontré des gens comme moi. Maintenant, je suis fier de qui je suis."
          </p>
        </div>

        <!-- Témoignage 2 -->
        <div class="testimonial-card animate-on-scroll animate-delay-1">
          <div class="testimonial-icon">🎨</div>
          <h3>Sarah, 16 ans</h3>
          <p>
            "J'étais bullied genre super intense en secondaire 3. J'ai pensé changer d'école. 
            Finalement, j'ai trouvé un cours d'art parascolaire. J'ai rencontré MON monde. 
            Maintenant, les commentaires des autres me touchent moins."
          </p>
        </div>

        <!-- Témoignage 3 -->
        <div class="testimonial-card animate-on-scroll animate-delay-2">
          <div class="testimonial-icon">💭</div>
          <h3>Thomas, 15 ans</h3>
          <p>
            "J'ai fait une crise d'anxiété en plein milieu d'un examen. J'ai fini par en parler 
            à mes parents. J'ai commencé à voir un psy. Genre, ça m'a sauvé la vie. 
            Demander de l'aide, c'est pas être faible."
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA : SOLO & SOLI
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="cta-section animate-on-scroll">
        <h2>T'es pas seul·e 💜</h2>
        <p>
          Soli peut devenir ton journal privé où tu déposes ce que tu vis. 
          Solo peut te guider vers des ressources qui peuvent t'aider.
        </p>
        <div class="btn-group">
          <a href="../soli.html" class="btn btn-primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16v16H4z"/>
              <path d="M8 8h8"/>
              <path d="M8 12h6"/>
              <path d="M8 16h4"/>
            </svg>
            Essayer Soli - Mon journal
          </a>
          <a href="../solo.html" class="btn btn-secondary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            Parler à Solo
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
