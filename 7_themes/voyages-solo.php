<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Voyager solo — Le monde t\'attend';
    $pageDescription = 'Accompagnement pour voyager seul·e. Liberté, découverte et confiance à ton rythme.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['theme-base.css','voyages-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-voyages">
    <div class="hero-content">
      
    

      <!-- Titre -->
      <h1 class="hero-title">Voyager <span class="highlight">solo</span></h1>
      
      <!-- Sous-titre -->
      <p class="hero-subtitle">Le monde t'attend. À ton rythme.</p>
      
      <!-- Description -->
      <p class="hero-description">
        Partir seul·e, c'est choisir la liberté totale. Découvrir à son propre rythme, 
        s'ouvrir à l'imprévu, se retrouver soi-même. Le voyage solo peut être l'une 
        des expériences les plus enrichissantes de ta vie.
      </p>

    </div>
  </section>

  <!-- ============================================================
       SECTION : FORCES ET FRAGILITÉS
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Les deux visages du voyage solo</h2>
        <p>
          Voyager seul·e, c'est une liberté immense — et parfois une fragilité. 
          Les deux coexistent, et c'est normal.
        </p>
      </div>

      <div class="two-columns">
        
        <div class="column-card positive animate-on-scroll">
          <h3>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 2L2 7l10 5 10-5-10-5z"/>
              <path d="M2 17l10 5 10-5"/>
              <path d="M2 12l10 5 10-5"/>
            </svg>
            Ce que ça apporte
          </h3>
          <ul>
            <li><strong>Liberté totale</strong> — Tu décides de tout : où aller, combien de temps rester, quand partir</li>
            <li><strong>Autonomie grandissante</strong> — Chaque voyage te rend plus débrouillard·e</li>
            <li><strong>Rythme personnel</strong> — Pas de compromis, tu vis à ta façon</li>
            <li><strong>Rencontres nouvelles</strong> — Seul·e, tu es plus accessible et curieux·se</li>
            <li><strong>Connexion à soi</strong> — Un temps vraiment personnel, loin du quotidien</li>
            <li><strong>Confiance qui grandit</strong> — Chaque défi surmonté te renforce</li>
          </ul>
        </div>

        <div class="column-card fragile animate-on-scroll animate-delay-1">
          <h3>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
            Ce qui peut peser
          </h3>
          <ul>
            <li><strong>La solitude du soir</strong> — Quand le soleil se couche et qu'on est seul·e</li>
            <li><strong>La peur de l'inconnu</strong> — Se retrouver dans un lieu qu'on ne connaît pas</li>
            <li><strong>La fatigue des déplacements</strong> — Tout gérer seul·e peut épuiser</li>
            <li><strong>Les imprévus</strong> — Un problème sans personne à côté pour aider</li>
            <li><strong>Les moments de doute</strong> — "Est-ce que j'aurais dû venir ?"</li>
            <li><strong>L'éloignement</strong> — Loin de ses repères, de ses proches</li>
          </ul>
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
          Voyager seul·e, ce n'est pas fuir les autres. C'est aller à la rencontre 
          de soi-même, à son propre rythme, dans un monde qui s'ouvre à nous.
        </p>
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       SECTION : CONSEILS PRATIQUES
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Conseils pour bien voyager solo</h2>
        <p>
          Des repères simples pour profiter pleinement de ton voyage.
        </p>
      </div>

      <div class="tips-grid">
        
        <div class="tip-card animate-on-scroll">
          <div class="tip-number">1</div>
          <h4>Commence doucement</h4>
          <p>
            Ton premier voyage solo n'a pas besoin d'être au bout du monde. 
            Une escapade proche, 2-3 jours, c'est parfait pour commencer.
          </p>
        </div>

        <div class="tip-card animate-on-scroll animate-delay-1">
          <div class="tip-number">2</div>
          <h4>Garde un fil avec tes proches</h4>
          <p>
            Partage ton itinéraire, donne des nouvelles régulières. 
            Ça rassure — toi et eux.
          </p>
        </div>

        <div class="tip-card animate-on-scroll animate-delay-2">
          <div class="tip-number">3</div>
          <h4>Écoute tes limites</h4>
          <p>
            Fatigué·e ? Prends une journée calme. Besoin de parler ? 
            Appelle quelqu'un. Ton voyage, tes règles.
          </p>
        </div>

        <div class="tip-card animate-on-scroll animate-delay-3">
          <div class="tip-number">4</div>
          <h4>Prépare les imprévus</h4>
          <p>
            Copies de documents, numéros d'urgence, assurance voyage. 
            Pas pour t'inquiéter, pour te libérer l'esprit.
          </p>
        </div>

        <div class="tip-card animate-on-scroll">
          <div class="tip-number">5</div>
          <h4>Apprivoise la solitude du soir</h4>
          <p>
            Un bon livre, un carnet, une série, un appel vidéo. 
            Le soir peut devenir un moment précieux, pas un vide.
          </p>
        </div>

        <div class="tip-card animate-on-scroll animate-delay-1">
          <div class="tip-number">6</div>
          <h4>Ose parler aux gens</h4>
          <p>
            Un "bonjour" au café, une question à un local. 
            Seul·e, tu es plus approchable — profites-en.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : THÈMES DU VOYAGE SOLO
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Ce que Solo peut t'aider à explorer</h2>
        <p>
          Selon où tu en es dans ton voyage ou ta réflexion.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
            </svg>
          </div>
          <h3>Préparer ton voyage</h3>
          <p>
            Comment choisir ta destination, quoi emporter, comment t'organiser 
            pour partir l'esprit tranquille.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 6v6l4 2"/>
            </svg>
          </div>
          <h3>Premier voyage solo</h3>
          <p>
            Tu n'as jamais voyagé seul·e ? Normal d'hésiter. 
            On peut en parler, pas à pas.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <h3>Gérer la solitude du soir</h3>
          <p>
            Ce moment où la journée se termine et où le silence peut peser. 
            Des idées pour transformer ce moment.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
              <line x1="12" y1="17" x2="12.01" y2="17"/>
            </svg>
          </div>
          <h3>Gérer les imprévus</h3>
          <p>
            Vol annulé, perte de papiers, problème de santé... 
            Comment garder son calme et trouver des solutions.
          </p>
        </div>

        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </div>
          <h3>Voyager pour se retrouver</h3>
          <p>
            Après une rupture, un deuil, une période difficile. 
            Le voyage comme chemin vers soi.
          </p>
        </div>

        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <h3>Le retour à la maison</h3>
          <p>
            Parfois plus difficile qu'on ne le pense. Comment intégrer 
            l'expérience et retrouver son quotidien.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : RESSOURCES
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Ressources utiles</h2>
        <p>
          Des repères pour préparer et sécuriser ton voyage.
        </p>
      </div>

      <div class="cards-grid">
        
        <div class="resource-card animate-on-scroll">
          <h3>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
            Sécurité
          </h3>
          <ul>
            <li>Inscription au registre des Canadiens à l'étranger</li>
            <li>Conseils aux voyageurs (gouvernement)</li>
            <li>Numéros d'urgence par pays</li>
            <li>Applications de sécurité voyage</li>
          </ul>
          <div class="resource-highlight">
            <span class="label">Affaires mondiales Canada</span>
            <span class="info">travel.gc.ca</span>
          </div>
        </div>

        <div class="resource-card animate-on-scroll animate-delay-1">
          <h3>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
            Santé
          </h3>
          <ul>
            <li>Assurance voyage complète</li>
            <li>Vaccins requis par destination</li>
            <li>Trousse de premiers soins</li>
            <li>Cliniques du voyageur</li>
          </ul>
          <div class="resource-highlight">
            <span class="label">Info-Santé</span>
            <span class="info">811</span>
          </div>
        </div>

        <div class="resource-card animate-on-scroll animate-delay-2">
          <h3>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
            Communautés
          </h3>
          <ul>
            <li>Forums de voyageurs solos</li>
            <li>Groupes Facebook par destination</li>
            <li>Auberges de jeunesse (rencontres)</li>
            <li>Applications de rencontre voyageurs</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA : SOLO & SOLI
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="cta-section animate-on-scroll">
        <h2>Prêt·e à partir ? ✈️</h2>
        <p>
          Solo peut t'aider à préparer ton voyage, répondre à tes questions, 
          et être là si tu as besoin pendant ton aventure.
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
            Mon carnet de voyage avec Soli
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
