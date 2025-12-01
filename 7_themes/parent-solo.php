<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Parent solo — Tu n\'es pas seul·e';
    $pageDescription = 'Ressources et soutien pour les parents solos. Tu fais un travail extraordinaire.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['parent-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-parent">
    <div class="hero-content">
      
      <!-- Icône SVG : Parent et enfant / Cœur protecteur -->
      <div class="hero-icon">
        <svg viewBox="0 0 110 110" width="110" height="110" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Grand cercle protecteur -->
          <circle cx="55" cy="55" r="48" stroke="#6BA368" stroke-width="2" fill="url(#parentGradient)" opacity="0.15"/>
          <!-- Parent (silhouette) -->
          <circle cx="45" cy="35" r="12" fill="#6BA368"/>
          <path d="M45 48C32 48 25 58 25 70V85" stroke="#6BA368" stroke-width="4" stroke-linecap="round"/>
          <path d="M45 48C58 48 62 58 62 70" stroke="#6BA368" stroke-width="4" stroke-linecap="round"/>
          <!-- Enfant (silhouette) -->
          <circle cx="72" cy="55" r="8" fill="#8FBF8C"/>
          <path d="M72 64C64 64 60 70 60 78V90" stroke="#8FBF8C" stroke-width="3" stroke-linecap="round"/>
          <path d="M72 64C80 64 82 70 82 78" stroke="#8FBF8C" stroke-width="3" stroke-linecap="round"/>
          <!-- Main tendue entre les deux -->
          <path d="M55 70C58 68 62 67 65 68" stroke="#E8B4B8" stroke-width="2" stroke-linecap="round"/>
          <!-- Petit cœur -->
          <path d="M55 20C55 20 52 17 52 14C52 11 54 10 56 12C58 10 60 11 60 14C60 17 55 22 55 20Z" fill="#E8B4B8" opacity="0.8"/>
          <defs>
            <linearGradient id="parentGradient" x1="10" y1="10" x2="100" y2="100" gradientUnits="userSpaceOnUse">
              <stop offset="0%" stop-color="#6BA368"/>
              <stop offset="100%" stop-color="#E8B4B8"/>
            </linearGradient>
          </defs>
        </svg>
      </div>

      <!-- Badge -->
      <div class="hero-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
        </svg>
        Tu n'es pas seul·e
      </div>

      <!-- Titre -->
      <h1 class="hero-title">Parent <span class="highlight">solo</span></h1>
      
      <!-- Sous-titre -->
      <p class="hero-subtitle">Tu fais un travail extraordinaire</p>
      
      <!-- Description -->
      <p class="hero-description">
        Élever un ou plusieurs enfants seul·e, c'est un marathon quotidien. 
        Entre le travail, l'école, les repas, les devoirs et les nuits courtes... 
        tu donnes tout. Et même quand tu doutes, sache que tu fais du mieux que tu peux. 
        <strong>Et c'est suffisant.</strong>
      </p>

    </div>
  </section>

  <!-- ============================================================
       SECTION : MESSAGE DE SOUTIEN
       ============================================================ -->
  <section class="section">
    <div class="container container-narrow">
      <div class="section-header">
        <h2><span class="icon">💚</span> On te voit. On te comprend.</h2>
      </div>

      <div class="support-box animate-on-scroll">
        <p>
          Peut-être que tu t'es retrouvé·e parent solo après une séparation, un divorce, 
          un décès. Peut-être que c'était un choix. Quelle que soit ton histoire, 
          le quotidien reste le même : <strong>tout repose sur toi</strong>.
        </p>
        <p>
          Les matins pressés. Les soirs épuisés. La charge mentale constante. 
          Les décisions à prendre seul·e. Le sentiment parfois de ne pas y arriver. 
          La culpabilité quand tu prends du temps pour toi.
        </p>
        <p>
          Et pourtant, tu continues. Tu te lèves chaque matin. Tu fais tourner la maison. 
          Tu donnes de l'amour. Tu construis un foyer.
        </p>
        <p class="highlight-text">
          Ce que tu fais est héroïque. Même les jours où tu n'en peux plus.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : LES FORCES DES PARENTS SOLOS
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Ce que tu développes chaque jour</h2>
        <p>
          Être parent solo forge des qualités exceptionnelles. 
          Tu es plus fort·e que tu ne le penses.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Une résilience à toute épreuve</h3>
          <p>
            Tu as traversé des tempêtes. Tu as dû te reconstruire tout en protégeant 
            tes enfants. Cette force intérieure, c'est ton super-pouvoir.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 6v6l4 2"/>
            </svg>
          </div>
          <h3>Une organisation hors pair</h3>
          <p>
            Jongler entre le travail, l'école, les activités, les repas... 
            Tu es devenu·e maître dans l'art de la logistique familiale.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </div>
          <h3>Un amour concentré</h3>
          <p>
            Ton enfant reçoit 100% de ton attention et de ton amour. 
            Ce lien unique que vous construisez est inestimable.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Un modèle inspirant</h3>
          <p>
            Tes enfants voient quelqu'un qui affronte la vie avec courage. 
            Tu leur montres qu'on peut surmonter les épreuves.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="section">
    <div class="container container-narrow">
      <blockquote class="quote-block animate-on-scroll">
        <p>
          Être parent solo, ce n'est pas élever un enfant à moitié. 
          C'est lui donner un amour entier, avec tout ce qu'on a.
        </p>
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       SECTION : LES DÉFIS RÉELS
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Les défis du quotidien</h2>
        <p>
          Reconnaissons les difficultés réelles — et les pistes pour les traverser.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
          </div>
          <h3>L'équilibre travail-famille</h3>
          <p>
            <strong>Le défi :</strong> Sans relève à la maison, chaque imprévu 
            (enfant malade, réunion tardive) devient un casse-tête.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Identifier 2-3 personnes de confiance en renfort</li>
            <li>Communiquer avec ton employeur sur ta réalité</li>
            <li>Explorer le télétravail si possible</li>
            <li>Services de garde d'urgence</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="1" x2="12" y2="23"/>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
            </svg>
          </div>
          <h3>La pression financière</h3>
          <p>
            <strong>Le défi :</strong> Un seul revenu pour tout payer. 
            Loyer, épicerie, activités, imprévus... le budget est serré.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Vérifier les aides gouvernementales disponibles</li>
            <li>Allocation famille monoparentale</li>
            <li>Groupes d'échange et de partage</li>
            <li>Activités gratuites (bibliothèques, parcs)</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
          </div>
          <h3>L'épuisement et la solitude</h3>
          <p>
            <strong>Le défi :</strong> Pas de pause, pas de relais le soir. 
            La fatigue s'accumule, et parfois tu te sens très seul·e.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Groupes de parents solos (entraide)</li>
            <li>S'accorder des micro-pauses sans culpabilité</li>
            <li>Garde partagée avec d'autres parents</li>
            <li>Demander de l'aide — ce n'est pas un échec</li>
          </ul>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
              <line x1="12" y1="17" x2="12.01" y2="17"/>
            </svg>
          </div>
          <h3>La culpabilité permanente</h3>
          <p>
            <strong>Le défi :</strong> Pas assez présent·e, pas assez patient·e, 
            pas assez... La liste des "pas assez" peut être infinie.
          </p>
          <p><strong>Des pistes :</strong></p>
          <ul>
            <li>Rappelle-toi : parfait n'existe pas</li>
            <li>Tes enfants ont besoin d'amour, pas de perfection</li>
            <li>Parler à d'autres parents solos</li>
            <li>Soli peut t'aider à poser tes pensées</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : TÉMOIGNAGES
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Ils·elles vivent ça aussi</h2>
        <p>
          Des parents solos qui partagent leur réalité — sans filtre, avec cœur.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="testimonial-card animate-on-scroll">
          <div class="testimonial-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
              <line x1="9" y1="9" x2="9.01" y2="9"/>
              <line x1="15" y1="9" x2="15.01" y2="9"/>
            </svg>
          </div>
          <h3>Sophie, maman de Léo (6 ans)</h3>
          <p>
            « Les premiers mois après la séparation, je pleurais tous les soirs 
            après avoir couché mon fils. Aujourd'hui, deux ans plus tard, 
            on a nos rituels, notre équilibre. C'est différent, mais c'est beau. »
          </p>
        </div>

        <div class="testimonial-card animate-on-scroll animate-delay-1">
          <div class="testimonial-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </div>
          <h3>Marc, papa de Zoé (9 ans) et Tom (7 ans)</h3>
          <p>
            « Quand ma femme nous a quittés, j'ai dû tout apprendre : les tresses, 
            les lunchs, les émotions. Mes enfants m'ont appris autant que je leur apprends. 
            On est une équipe maintenant. »
          </p>
        </div>

        <div class="testimonial-card animate-on-scroll animate-delay-2">
          <div class="testimonial-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Fatou, maman de 3 enfants</h3>
          <p>
            « Le plus dur, c'est le regard des autres. Comme si j'avais échoué quelque part. 
            Mais mes enfants sont heureux, en santé, aimés. C'est tout ce qui compte. 
            Le reste, je m'en fiche maintenant. »
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : RESSOURCES
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Ressources et soutien</h2>
        <p>
          Tu n'as pas à tout porter seul·e. Ces ressources sont là pour toi.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="1" x2="12" y2="23"/>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
            </svg>
          </div>
          <h3>Aide financière</h3>
          <ul>
            <li>Allocation canadienne pour enfants</li>
            <li>Crédit d'impôt pour personne vivant seule</li>
            <li>Soutien aux familles monoparentales</li>
            <li>Aide au logement</li>
          </ul>
          <div class="resource-highlight">
            <span class="label">Retraite Québec</span>
            <span class="phone">1-800-463-5185</span>
          </div>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Groupes d'entraide</h3>
          <ul>
            <li>Fédération des associations de familles monoparentales</li>
            <li>Maisons de la famille</li>
            <li>Groupes Facebook locaux</li>
            <li>Centres communautaires</li>
          </ul>
          <div class="resource-highlight">
            <span class="label">Ligne Parents</span>
            <span class="phone">1-800-361-5085</span>
          </div>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
          <h3>Soutien psychologique</h3>
          <ul>
            <li>CLSC (services gratuits)</li>
            <li>Tel-Aide (écoute 24/7)</li>
            <li>Psychologues en clinique</li>
            <li>Groupes de parole</li>
          </ul>
          <div class="resource-highlight">
            <span class="label">Tel-Aide</span>
            <span class="phone">514-935-1101</span>
          </div>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 6v6l4 2"/>
            </svg>
          </div>
          <h3>Services pratiques</h3>
          <ul>
            <li>Halte-garderie (répit)</li>
            <li>Aide aux devoirs</li>
            <li>Camps de jour subventionnés</li>
            <li>Banques alimentaires</li>
            <li>Friperies et échanges</li>
          </ul>
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
        <h2>Tu mérites du soutien 💚</h2>
        <p>
          Solo peut t'orienter vers les ressources adaptées à ta situation. 
          Soli peut devenir ton espace pour déposer ce que tu vis, sans jugement.
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
