<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Sorties, loisirs & rencontres';
    $pageDescription = 'À ton rythme, sans te forcer, sans te changer. Sorties, loisirs et rencontres pour les personnes seules.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['sorties-loisirs-rencontres-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-sorties">
    <div class="hero-content">
      
      <!-- Icône SVG : Personnes + connexion -->
      <div class="hero-icon">
        <svg viewBox="0 0 110 110" width="110" height="110" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Trois personnes -->
          <circle cx="30" cy="40" r="12" fill="#F48FB1"/>
          <path d="M30 54C18 54 12 62 12 72V85" stroke="#E91E63" stroke-width="3" stroke-linecap="round"/>
          <path d="M30 54C42 54 46 62 46 72" stroke="#E91E63" stroke-width="3" stroke-linecap="round"/>
          
          <circle cx="55" cy="35" r="14" fill="#E91E63"/>
          <path d="M55 51C40 51 33 61 33 73V90" stroke="#C2185B" stroke-width="3.5" stroke-linecap="round"/>
          <path d="M55 51C70 51 77 61 77 73V90" stroke="#C2185B" stroke-width="3.5" stroke-linecap="round"/>
          
          <circle cx="80" cy="40" r="12" fill="#FF7043"/>
          <path d="M80 54C68 54 64 62 64 72" stroke="#FF7043" stroke-width="3" stroke-linecap="round"/>
          <path d="M80 54C92 54 98 62 98 72V85" stroke="#FF7043" stroke-width="3" stroke-linecap="round"/>
          
          <!-- Lignes de connexion -->
          <path d="M38 45C45 42 48 40 55 38" stroke="#FCE4EC" stroke-width="2" stroke-linecap="round" stroke-dasharray="4 3"/>
          <path d="M72 45C65 42 62 40 55 38" stroke="#FCE4EC" stroke-width="2" stroke-linecap="round" stroke-dasharray="4 3"/>
          
          <!-- Petits cœurs -->
          <path d="M55 18C55 18 52 15 52 12C52 9 54 8 56 10C58 8 60 9 60 12C60 15 55 20 55 18Z" fill="#E91E63" opacity="0.6"/>
          <circle cx="20" cy="25" r="3" fill="#FF7043" opacity="0.4"/>
          <circle cx="90" cy="25" r="3" fill="#F48FB1" opacity="0.4"/>
        </svg>
      </div>

      <!-- Titre -->
      <h1 class="hero-title">Sorties, loisirs & <span class="highlight">rencontres</span></h1>
      
      <!-- Sous-titre -->
      <p class="hero-subtitle">À ton rythme, sans te forcer, sans te changer</p>
      
      <!-- Description -->
      <p class="hero-description">
        Envie de sortir un peu ? De trouver une activité ? De rencontrer quelqu'un ? 
        Quel que soit ton besoin, tu as le droit d'aller vers les autres — à ta façon.
      </p>

      <!-- Les 3 portes d'entrée -->
      <div class="three-doors">
        
        <div class="door-card animate-on-scroll">
          <div class="door-card-content">
            <div class="door-icon">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 6v6l4 2"/>
              </svg>
            </div>
            <h3>Sorties</h3>
            <p>Être dehors, changer d'air, voir de la vie</p>
          </div>
        </div>

        <div class="door-card animate-on-scroll animate-delay-1">
          <div class="door-card-content">
            <div class="door-icon">
              <svg viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                <path d="M2 17l10 5 10-5"/>
                <path d="M2 12l10 5 10-5"/>
              </svg>
            </div>
            <h3>Loisirs</h3>
            <p>Trouver une activité, nourrir son esprit</p>
          </div>
        </div>

        <div class="door-card animate-on-scroll animate-delay-2">
          <div class="door-card-content">
            <div class="door-icon">
              <svg viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
              </svg>
            </div>
            <h3>Rencontres</h3>
            <p>Créer un lien humain — amitié, présence, amour</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================
       SECTION : MESSAGE CLÉ
       ============================================================ -->
  <section class="section">
    <div class="container container-narrow">
      <div class="key-message animate-on-scroll">
        <p>
          Peut-être que tu ressens le besoin de sortir de chez toi, de voir du monde, 
          de briser une routine qui pèse. Peut-être que tu cherches une activité pour 
          t'occuper l'esprit, rencontrer des gens qui partagent tes intérêts.
        </p>
        <p>
          Peut-être que tu espères créer un lien — une amitié, une présence, 
          ou quelque chose de plus intime. Et peut-être que tu ne sais pas encore.
        </p>
        <p>
          Tout ça est normal. Et surtout : <strong>tu as le droit de vouloir aller vers les autres</strong>.
        </p>
        <p class="highlight-text">
          Pas besoin de te forcer. Pas besoin de te changer. Juste avancer à ton rythme.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : L'ÂGE CHANGE TOUT
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>L'âge change les besoins</h2>
        <p>
          Ce qu'on cherche à 20 ans n'est pas ce qu'on cherche à 40 ou à 60. 
          Soloplugs s'adapte à ta réalité.
        </p>
      </div>

      <div class="age-cards">
        
        <div class="age-card animate-on-scroll">
          <div class="age-range">16–25 ans</div>
          <h3>Découverte et exploration</h3>
          <p>
            C'est l'âge où on explore, où les émotions sont intenses, où on apprend 
            ses limites et celles des autres. On cherche à se découvrir à travers 
            les rencontres — avec respect, à son rythme.
          </p>
        </div>

        <div class="age-card animate-on-scroll animate-delay-1">
          <div class="age-range">25–45 ans</div>
          <h3>Intentions et authenticité</h3>
          <p>
            On sait mieux ce qu'on veut — et ce qu'on ne veut plus. On cherche 
            des liens authentiques, une stabilité, des personnes avec qui partager 
            vraiment. Moins de jeux, plus de clarté.
          </p>
        </div>

        <div class="age-card animate-on-scroll animate-delay-2">
          <div class="age-range">50 ans et +</div>
          <h3>Douceur et simplicité</h3>
          <p>
            Recommencer après une perte, un divorce, des années seul·e. 
            On appréhende parfois, on doute. Mais le besoin de présence reste. 
            On cherche la douceur, la simplicité, le respect mutuel.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : CE QUE TU PEUX RESSENTIR
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Ce que tu vis peut-être</h2>
        <p>
          Ces ressentis sont normaux. Tu n'es pas seul·e à les avoir.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>La peur du rejet</h3>
          <p>
            Et si on me trouvait ennuyant·e ? Et si je ne plaisais pas ? 
            Cette peur est universelle — tout le monde la ressent.
          </p>
          <p><strong>Ce qu'on peut se rappeler :</strong> Le rejet fait partie du jeu. 
          Ce n'est pas un jugement sur ta valeur.</p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M8 15h8"/>
              <path d="M9 9h.01"/>
              <path d="M15 9h.01"/>
            </svg>
          </div>
          <h3>Le manque de confiance</h3>
          <p>
            Tu te trouves pas assez intéressant·e, pas assez beau/belle, 
            pas assez... quelque chose. C'est la voix du doute, pas la réalité.
          </p>
          <p><strong>Ce qu'on peut se rappeler :</strong> Tu as de la valeur, même si 
          tu ne la vois pas toujours.</p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
              <line x1="12" y1="18" x2="12.01" y2="18"/>
            </svg>
          </div>
          <h3>La fatigue des applications</h3>
          <p>
            Swiper, matcher, discuter, ghoster... Les apps de rencontre 
            peuvent épuiser et donner l'impression que c'est superficiel.
          </p>
          <p><strong>Ce qu'on peut essayer :</strong> Les rencontres "dans la vraie vie" — 
          activités, groupes, bénévolat.</p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
              <line x1="12" y1="17" x2="12.01" y2="17"/>
            </svg>
          </div>
          <h3>Ne pas savoir ce qu'on veut</h3>
          <p>
            Amitié ? Amour ? Juste une présence ? C'est correct de ne pas savoir. 
            Tu n'as pas besoin d'avoir toutes les réponses avant de commencer.
          </p>
          <p><strong>Ce qu'on peut faire :</strong> Explorer, sans pression de résultat.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="section section-alt">
    <div class="container container-narrow">
      <blockquote class="quote-block animate-on-scroll">
        <p>
          Séduire, ce n'est pas jouer un rôle. C'est faire un pas vers l'autre 
          avec douceur — en restant soi-même.
        </p>
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       SECTION : OÙ RENCONTRER
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Où aller pour rencontrer</h2>
        <p>
          Des espaces accueillants où tu peux te sentir à l'aise, seul·e ou pas.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
              <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
              <line x1="6" y1="1" x2="6" y2="4"/>
              <line x1="10" y1="1" x2="10" y2="4"/>
              <line x1="14" y1="1" x2="14" y2="4"/>
            </svg>
          </div>
          <h3>Cafés accueillants</h3>
          <ul>
            <li>Ambiance détendue, beaucoup de solos</li>
            <li>Facile d'engager une conversation</li>
            <li>Astuce : les cafés avec grandes tables communes</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="5" r="3"/>
              <line x1="12" y1="22" x2="12" y2="8"/>
              <path d="M5 12H2a10 10 0 0 0 20 0h-3"/>
            </svg>
          </div>
          <h3>Activités sportives douces</h3>
          <ul>
            <li>Yoga, marche, tai chi, aquaforme</li>
            <li>Tu viens pour l'activité, les liens se créent naturellement</li>
            <li>Moins de pression que dans un "bar"</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 19l7-7 3 3-7 7-3-3z"/>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/>
              <path d="M2 2l7.586 7.586"/>
              <circle cx="11" cy="11" r="2"/>
            </svg>
          </div>
          <h3>Ateliers créatifs</h3>
          <ul>
            <li>Peinture, poterie, photo, écriture</li>
            <li>Intérêt commun = conversation facile</li>
            <li>Ambiance bienveillante généralement</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </div>
          <h3>Bénévolat</h3>
          <ul>
            <li>Rencontrer des gens avec des valeurs similaires</li>
            <li>Contexte naturel, pas de pression</li>
            <li>Se sentir utile en plus de socialiser</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Groupes Meetup</h3>
          <ul>
            <li>Groupes par intérêts : rando, lecture, jeux...</li>
            <li>Tout le monde vient seul·e — c'est le principe</li>
            <li>Événements réguliers, liens qui se créent</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
          </div>
          <h3>Événements culturels</h3>
          <ul>
            <li>Vernissages, conférences, salons</li>
            <li>Sujet commun = brise-glace naturel</li>
            <li>Arriver tôt ou rester après pour discuter</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : LA SÉDUCTION REVISITÉE
       ============================================================ -->
  <section class="section section-alt">
    <div class="container container-narrow">
      <div class="section-header">
        <h2>La séduction, c'est quoi vraiment ?</h2>
        <p>
          Ce n'est pas un jeu, ni un rôle, ni une performance.
        </p>
      </div>

      <div class="key-message animate-on-scroll">
        <p>
          <strong>Séduire, c'est simplement :</strong>
        </p>
        <p>
          → Mettre en valeur ton vrai soi — pas un personnage<br>
          → Créer une première impression chaleureuse<br>
          → Écouter réellement l'autre personne<br>
          → Faire un pas vers l'autre, sans insister
        </p>
        <p>
          Tu n'as pas besoin de "techniques". Tu as besoin d'être présent·e, 
          authentique, et respectueux·se — de toi et de l'autre.
        </p>
        <p class="highlight-text">
          Plaire, c'est être soi. Pas se déguiser.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA : SOLO & SOLI
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="cta-section animate-on-scroll">
        <h2>Prêt·e à faire un pas ?</h2>
        <p>
          Solo peut t'aider à clarifier ce que tu cherches et te proposer 
          des pistes adaptées. Sans pression. À ton rythme.
        </p>
        <div class="btn-group">
          <a href="../solo.html" class="btn btn-primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
            Parler à Solo
          </a>
          <a href="../soli.html" class="btn btn-secondary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 20h9"/>
              <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
            </svg>
            Mon journal avec Soli
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
