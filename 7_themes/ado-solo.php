<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Ado solo — Tu n\'es pas seul·e';
    $pageDescription = 'Ressources et soutien pour les adolescents qui vivent la solitude. Lignes d\'écoute 24/7, conseils et accompagnement.';
    $basePath = '../';
    $currentPage = 'ado-solo';
    $additionalCSS = ['components.css', 'theme-base.css', 'ado-solo.css'];
    $themeRessources = 'ressources/ressources.php?theme=ado-solo';
    
    include '../components/head.php';
  ?>
  <!-- CSS chargés via $additionalCSS : components.css, theme-base.css, ado-solo-enhanced.css -->
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
       ARTICLE : SOLITUDE ET HARCÈLEMENT
       ============================================================ -->
  <section class="section section-temoignage">
    <div class="container-narrow">
      
      <!-- Titre -->
      <header class="temoignage-header animate-on-scroll">
        <span class="temoignage-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Témoignage
        </span>
        <h2 class="temoignage-title">« J'ai l'impression d'être seul avec ce que je vis »</h2>
      </header>

      <!-- Témoignage au JE -->
      <article class="temoignage-content animate-on-scroll">
        <div class="temoignage-texte">
          <p>« Il y a d'abord eu ce moment où tout a basculé sans que je sache vraiment pourquoi.</p>
          <p>Avant, j'allais à l'école comme tout le monde. Puis un jour, ça a commencé par une blague sur moi, un surnom, un commentaire sur mon corps, mes vêtements, ma façon de parler.</p>
          <p>Au début j'ai souri, j'ai fait comme si ça ne me touchait pas. Je me suis dit : « Si je montre que ça ne me fait rien, ça va passer. »</p>
          <p>Mais ça n'a pas passé. C'est resté. Et c'est revenu le lendemain.</p>
          <p>Petit à petit, ça a commencé à s'installer.</p>
          <p>Des regards ont changé, des chuchotements ont commencé quand j'entrais dans la classe. Des messages privés ont commencé. Des stories me visaient sans dire mon nom. Mais tout le monde savait que c'était moi.</p>
          <p>J'ai commencé à réfléchir à chaque mouvement : où je m'assoyais, à qui je parlais, ce que je postais, comment je m'habillais. Comme si le simple fait d'exister devenait une erreur.</p>
          <p>Alors, la solitude est arrivée.</p>
          <p>Pas seulement parce que les autres m'évitaient, mais parce que je commençais moi-même à m'éviter. Je n'osais plus dire ce que je pensais, je me retenais de rire, je faisais semblant d'être d'accord juste pour « avoir la paix ».</p>
          <p>Je pouvais être entouré en classe et me sentir comme si j'étais derrière une vitre : je voyais les autres vivre, mais je n'en faisais plus vraiment partie. »</p>
        </div>

        <!-- Transition -->
        <div class="temoignage-transition">
          <p>Tu n'es pas ce que les autres disent de toi.</p>
          <p>Tu es plus grand que ce qu'ils essaient de réduire.</p>
          <p>Et même si aujourd'hui tu marches courbé sous le poids de ce que tu subis, chaque fois que tu parles, que tu cherches un appui, que tu poses une limite, tu fais déjà quelque chose de courageux : <strong>tu refuses que ton histoire s'arrête là.</strong></p>
        </div>

        <!-- Bouton déroulant -->
        <button class="temoignage-toggle" id="temoignageToggle" aria-expanded="false">
          <span class="toggle-text">Comprendre et s'en sortir</span>
          <svg class="toggle-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M19 9l-7 7-7-7"/>
          </svg>
        </button>

        <!-- Contenu déroulant -->
        <div class="temoignage-suite" id="temoignageSuite">
         <?php include '../articles/ado-solo/harcelement-suite.php'; ?>
        </div>

      </article>
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
       ARTICLE : LA SOLITUDE QUI CONSTRUIT
       ============================================================ -->
  <section class="section section-article-featured">
    <div class="container-narrow">
      <article class="article-featured animate-on-scroll">
        
        <!-- En-tête de l'article -->
        <header class="article-header">
          <span class="article-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            Article
          </span>
          <h2 class="article-title">La solitude qui construit</h2>
          <p class="article-intro">Et si ta solitude n'était pas un problème à résoudre ?</p>
        </header>

        <!-- Contenu de l'article (version courte visible) -->
        <div class="article-content">
          <div class="article-excerpt">
            <p>
              Il y a un moment que beaucoup d'ados comme toi vivent, même s'ils n'en parlent pas. 
              Un moment où tu as envie d'être seul. Pas parce que tu n'aimes plus les autres. 
              Pas parce que tu vas mal. Juste parce que tu en as besoin.
            </p>
            <p>
              Et souvent, à ce moment-là, une question arrive : <em>est-ce que c'est normal ?</em>
            </p>
            <p>
              On t'a tellement répété que rester seul, c'était triste. Que ça voulait dire être rejeté, 
              exclu, à part. Alors forcément, quand tu ressens ce besoin-là, tu peux douter. 
              Te demander s'il y a quelque chose qui cloche chez toi.
            </p>
            <p class="article-answer"><strong>Mais non. Pas forcément.</strong></p>
          </div>

          <!-- Contenu complet (caché par défaut) -->
          <div class="article-full" id="articleFull">
            <p>
              Grandir, ça fait ça. À un moment, le bruit devient trop fort. Les attentes aussi. 
              Les regards. Les comparaisons. Les avis. Et ton corps, ta tête, ton cœur demandent un peu d'air.
            </p>
            
            <blockquote class="article-quote">
              Être seul, parfois, c'est juste respirer.
            </blockquote>

            <p>
              Au début, ce n'est pas toujours confortable. Le silence peut faire bizarre. 
              Tes pensées prennent plus de place. Tu peux t'ennuyer. Te sentir un peu vide. 
              Ou juste ne pas trop savoir quoi faire de toi.
            </p>
            <p>
              Mais il arrive aussi autre chose. Parfois, après un moment seul, tu te sens un peu plus calme. 
              Un peu plus clair. Comme si quelque chose s'était remis en place à l'intérieur.
            </p>
            <p>
              Pas à chaque fois. Pas de façon magique. Mais assez pour que tu sentes que ces moments-là 
              ne sont pas inutiles.
            </p>

            <blockquote class="article-quote accent">
              Être seul, ce n'est pas disparaître. C'est te retrouver.
            </blockquote>

            <h3>La différence qui compte</h3>
            <p>
              Il y a une différence importante entre être seul et être isolé. Quand tu choisis d'être seul, 
              même si ce n'est pas parfait, tu sais que les autres existent toujours. Tu peux revenir vers eux. 
              Tu n'es pas coupé du monde. Tu fais juste une pause.
            </p>
            <p>
              L'isolement, lui, fait mal. Tu n'as pas l'impression d'avoir le choix. Tu te sens rejeté, 
              invisible, à côté. Et ça, ce n'est pas la même chose. Si tu ressens ça, en parler peut vraiment aider.
            </p>
            <p>
              Mais si ta solitude te fait du bien… Si elle t'aide à te calmer, à penser, à sentir ce que 
              tu ressens vraiment… Alors elle mérite d'être respectée.
            </p>

            <h3>Quand personne ne regarde</h3>
            <p>
              Quand personne ne te regarde, tu peux enfin arrêter de jouer un rôle. Tu peux aimer ce que 
              tu aimes sans te justifier. Être fatigué sans devoir faire semblant. Rire de trucs stupides. 
              Ne rien faire du tout.
            </p>
            <p>
              Et dans ces moments-là, tu apprends quelque chose d'important : <strong>qui tu es quand 
              personne n'attend rien de toi.</strong>
            </p>
            <p>
              Ce n'est pas spectaculaire. Ce n'est pas toujours agréable. Mais c'est réel.
            </p>

            <div class="article-conclusion">
              <p>
                <strong>Soloplugs Ado-solo</strong> est là pour te dire une chose simple : ta solitude n'est pas un défaut. 
                Ce n'est pas un vide à remplir à toute vitesse.
              </p>
              <p>
                C'est un espace. Et parfois, c'est exactement là que tu construis quelque chose de solide.
              </p>
            </div>
          </div>
        </div>

        <!-- Bouton Lire la suite -->
        <button class="article-toggle" id="articleToggle" aria-expanded="false">
          <span class="toggle-text">Lire la suite</span>
          <svg class="toggle-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M19 9l-7 7-7-7"/>
          </svg>
        </button>

      </article>
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

<!-- ============================================================
       Footer
       ============================================================ -->

<?php $basePath = '../'; include '../components/footer.php'; ?>

  <!-- ============================================================
       BOUTON FLOTTANT "COMMENT TU TE SENS?"
       ============================================================ -->
  <button class="feeling-btn" id="feelingBtn" aria-label="Comment tu te sens?" aria-expanded="false">
    <span class="feeling-btn-icon">💭</span>
    <span class="feeling-btn-text">Comment tu te sens?</span>
  </button>

  <!-- ============================================================
       MODAL ÉCHELLE DE SOLITUDE
       ============================================================ -->
  <div class="feeling-overlay" id="feelingOverlay"></div>
  
  <div class="feeling-modal" id="feelingModal" role="dialog" aria-labelledby="feelingTitle" aria-modal="true">
    <button class="feeling-modal-close" id="feelingClose" aria-label="Fermer">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M18 6L6 18M6 6l12 12"/>
      </svg>
    </button>
    
    <div class="feeling-modal-content">
      <!-- Header -->
      <div class="echelle-header">
        <h2 id="feelingTitle">Comment je vis ma<br>solitude en ce moment</h2>
        <p>Choisis le visage qui te ressemble le plus en ce moment.</p>
      </div>

      <!-- Échelle verticale -->
      <div class="echelle-scale">
        
        <div class="echelle-item" data-level="1">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">😊</span>
          </div>
          <span class="echelle-text">Je me sens bien avec moi.</span>
        </div>

        <div class="echelle-item" data-level="2">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">🙂</span>
          </div>
          <span class="echelle-text">J'aime être seul parfois</span>
        </div>

        <div class="echelle-item" data-level="3">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">😐</span>
          </div>
          <span class="echelle-text">J'aime bien être seul mais parfois je me sens un peu à part</span>
        </div>

        <div class="echelle-item" data-level="4">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">😕</span>
          </div>
          <span class="echelle-text">Je me sens souvent seul</span>
        </div>

        <div class="echelle-item" data-level="5">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">😢</span>
          </div>
          <span class="echelle-text">J'ai l'impression d'être invisible</span>
        </div>

        <div class="echelle-item" data-level="6">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">😭</span>
          </div>
          <span class="echelle-text">Je n'ai personne à qui parler</span>
        </div>

        <div class="echelle-item" data-level="7">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">😰</span>
          </div>
          <span class="echelle-text">Je me sens vraiment seul</span>
        </div>

        <div class="echelle-item" data-level="8">
          <div class="echelle-emoji-wrap">
            <span class="echelle-emoji">💔</span>
          </div>
          <span class="echelle-text">Je déteste être seul</span>
        </div>

      </div>

      <!-- Message dynamique -->
      <div class="echelle-message" id="echelleMessage">
        <p class="message-text" id="messageText"></p>
        <p class="message-question">Est-ce qu'on peut en parler?</p>
        <div class="response-buttons">
          <button class="btn-response" data-response="oui">Oui</button>
          <button class="btn-response" data-response="non">Non</button>
          <button class="btn-response" data-response="pas-vraiment">Pas vraiment</button>
          <button class="btn-response" data-response="pas-maintenant">Pas maintenant</button>
        </div>
      </div>

      <!-- Message urgence -->
      <div class="echelle-urgence" id="echelleUrgence">
        <div class="urgence-header">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
            <line x1="12" y1="9" x2="12" y2="13"/>
            <line x1="12" y1="17" x2="12.01" y2="17"/>
          </svg>
          <span>Tu n'es pas seul·e</span>
        </div>
        <p class="urgence-text">Si tu traverses un moment vraiment difficile, il y a des gens qui peuvent t'écouter, 24h/24 :</p>
        <ul class="urgence-contacts">
          <li><strong>Tel-Jeunes :</strong> 1-800-263-2266</li>
          <li><strong>Fil Santé Jeunes :</strong> 0 800 235 236</li>
          <li><strong>Texto :</strong> 514-600-1002</li>
        </ul>
      </div>

      <!-- Bouton Continuer -->
      <div class="echelle-cta" id="echelleCta">
        <button class="btn-continuer" id="btnContinuer">
          <span id="btnText">Continuer</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

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

    // ============================================================
    // LOGIQUE DE L'ÉCHELLE DE SOLITUDE
    // ============================================================
    (function() {
      'use strict';

      // Messages personnalisés par zone
      const messages = {
        verte: "C'est beau de savoir apprécier ta propre compagnie. La solitude choisie, c'est une force. Continue à cultiver ces moments avec toi-même.",
        jaune: "C'est normal de se sentir un peu entre deux. La solitude, ça se vit différemment selon les jours. Tu veux qu'on explore ça ensemble?",
        orange: "Ce que tu ressens est réel, et ça compte. Se sentir invisible ou sans personne à qui parler, c'est douloureux. Tu n'as pas à traverser ça seul·e.",
        rouge: "Ce que tu vis est difficile, et c'est courageux d'être ici. Ta solitude te pèse, et c'est normal de vouloir que ça change. On est là."
      };

      // Données des 8 niveaux
      const niveaux = {
        1: { zone: 'verte', parcours: 'chosen' },
        2: { zone: 'verte', parcours: 'chosen' },
        3: { zone: 'jaune', parcours: 'both' },
        4: { zone: 'jaune', parcours: 'both' },
        5: { zone: 'orange', parcours: 'suffered' },
        6: { zone: 'orange', parcours: 'suffered' },
        7: { zone: 'rouge', parcours: 'urgence' },
        8: { zone: 'rouge', parcours: 'urgence' }
      };

      // Éléments DOM - Bouton et Modal
      const feelingBtn = document.getElementById('feelingBtn');
      const feelingModal = document.getElementById('feelingModal');
      const feelingOverlay = document.getElementById('feelingOverlay');
      const feelingClose = document.getElementById('feelingClose');

      // Éléments DOM - Échelle
      const items = document.querySelectorAll('.echelle-item');
      const messageBox = document.getElementById('echelleMessage');
      const messageText = document.getElementById('messageText');
      const urgence = document.getElementById('echelleUrgence');
      const cta = document.getElementById('echelleCta');
      const btnText = document.getElementById('btnText');
      const btnContinuer = document.getElementById('btnContinuer');
      const responseButtons = document.querySelectorAll('.btn-response');

      let selectedLevel = null;
      let selectedResponse = null;
      let isModalOpen = false;

      // ============================================================
      // MODAL OPEN/CLOSE
      // ============================================================
      function openModal() {
        isModalOpen = true;
        feelingModal.classList.add('active');
        feelingOverlay.classList.add('active');
        feelingBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
        setTimeout(() => feelingClose.focus(), 100);
      }

      function closeModal() {
        isModalOpen = false;
        feelingModal.classList.remove('active');
        feelingOverlay.classList.remove('active');
        feelingBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        feelingBtn.focus();
        
        // Reset de l'échelle
        resetEchelle();
      }

      function resetEchelle() {
        selectedLevel = null;
        selectedResponse = null;
        items.forEach(item => item.classList.remove('selected'));
        responseButtons.forEach(btn => btn.classList.remove('selected'));
        messageBox.className = 'echelle-message';
        urgence.classList.remove('visible');
        cta.classList.remove('visible');
        
        // Réafficher les éléments cachés par "Pas maintenant"
        const questionEl = messageBox.querySelector('.message-question');
        const buttonsEl = messageBox.querySelector('.response-buttons');
        if (questionEl) questionEl.style.display = '';
        if (buttonsEl) buttonsEl.style.display = '';
      }

      // ============================================================
      // SÉLECTION D'UN NIVEAU
      // ============================================================
      function selectLevel(level) {
        selectedLevel = level;
        selectedResponse = null;
        const data = niveaux[level];

        // Reset des boutons de réponse
        responseButtons.forEach(btn => btn.classList.remove('selected'));

        // Mettre à jour la sélection visuelle
        items.forEach(item => item.classList.remove('selected'));
        document.querySelector(`[data-level="${level}"]`).classList.add('selected');

        // Mettre à jour le message selon la zone
        messageText.textContent = messages[data.zone];
        
        // Réafficher les éléments (au cas où "Pas maintenant" les avait cachés)
        const questionEl = messageBox.querySelector('.message-question');
        const buttonsEl = messageBox.querySelector('.response-buttons');
        if (questionEl) questionEl.style.display = '';
        if (buttonsEl) buttonsEl.style.display = '';
        
        // Appliquer la classe de couleur
        messageBox.className = 'echelle-message visible zone-' + data.zone;

        // Gérer le message d'urgence
        if (level >= 7) {
          urgence.classList.add('visible');
        } else {
          urgence.classList.remove('visible');
        }

        // Cacher le bouton Continuer jusqu'à ce qu'une réponse soit choisie
        cta.classList.remove('visible');
      }

      // ============================================================
      // SÉLECTION D'UNE RÉPONSE
      // ============================================================
      function selectResponse(response) {
        selectedResponse = response;

        // Mettre à jour la sélection visuelle
        responseButtons.forEach(btn => btn.classList.remove('selected'));
        document.querySelector(`[data-response="${response}"]`).classList.add('selected');

        // Adapter le texte du bouton selon la réponse et le niveau
        const zone = niveaux[selectedLevel].zone;
        
        if (response === 'oui') {
          if (zone === 'rouge') {
            btnText.textContent = 'Voir les ressources d\'aide';
          } else if (zone === 'orange') {
            btnText.textContent = 'Trouver du soutien';
          } else if (zone === 'jaune') {
            btnText.textContent = 'Explorer ensemble';
          } else {
            btnText.textContent = 'Découvrir mon espace';
          }
        } else if (response === 'non') {
          btnText.textContent = 'Juste explorer';
        } else if (response === 'pas-vraiment') {
          btnText.textContent = 'Voir quand même';
        } else if (response === 'pas-maintenant') {
          btnText.textContent = 'Revenir plus tard';
        }

        // Afficher le bouton
        cta.classList.add('visible');
      }

      // ============================================================
      // REDIRECTION / ACTION
      // ============================================================
      function handleContinue() {
        if (!selectedLevel || !selectedResponse) return;

        const data = niveaux[selectedLevel];
        
        // Si "Pas maintenant", afficher message d'au revoir
        if (selectedResponse === 'pas-maintenant') {
          messageText.textContent = "Pas de souci. Cet espace sera toujours là quand tu en auras besoin. Prends soin de toi. 💛";
          messageBox.querySelector('.message-question').style.display = 'none';
          messageBox.querySelector('.response-buttons').style.display = 'none';
          cta.classList.remove('visible');
          return;
        }

        // Construire l'URL avec les paramètres
        let url = 'ado-solo.php?';
        
        // Parcours selon le niveau
        switch(data.parcours) {
          case 'chosen':
            url += 'parcours=epanoui';
            break;
          case 'both':
            url += 'parcours=exploration';
            break;
          case 'suffered':
            url += 'parcours=soutien';
            break;
          case 'urgence':
            url += 'parcours=aide';
            break;
        }

        // Ajouter la réponse et le niveau comme paramètres
        url += '&dialogue=' + selectedResponse;
        url += '&niveau=' + selectedLevel;

        // Sauvegarder dans localStorage
        localStorage.setItem('soloplugs_ado_solitude_level', selectedLevel);
        localStorage.setItem('soloplugs_ado_response', selectedResponse);

        // Fermer la modal et rediriger (ou scroll vers section appropriée)
        closeModal();
        
        // Pour l'instant, on peut afficher un message ou rediriger
        // window.location.href = url;
        console.log('Redirection vers:', url);
      }

      // ============================================================
      // ÉVÉNEMENTS
      // ============================================================
      
      // Bouton flottant
      feelingBtn.addEventListener('click', openModal);
      
      // Fermeture
      feelingClose.addEventListener('click', closeModal);
      feelingOverlay.addEventListener('click', closeModal);
      
      // Échap pour fermer
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isModalOpen) closeModal();
      });
      
      // Items de l'échelle
      items.forEach(item => {
        item.addEventListener('click', () => {
          const level = parseInt(item.dataset.level);
          selectLevel(level);
        });
      });

      // Boutons de réponse
      responseButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          const response = btn.dataset.response;
          selectResponse(response);
        });
      });

      // Bouton continuer
      btnContinuer.addEventListener('click', handleContinue);

      console.log('✓ Échelle de solitude ado chargée — Soloplugs');
    })();

    // ============================================================
    // TOGGLE ARTICLE "LA SOLITUDE QUI CONSTRUIT"
    // ============================================================
    (function() {
      const toggleBtn = document.getElementById('articleToggle');
      const articleFull = document.getElementById('articleFull');
      
      if (toggleBtn && articleFull) {
        toggleBtn.addEventListener('click', function() {
          const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
          
          if (isExpanded) {
            // Fermer
            articleFull.classList.remove('expanded');
            toggleBtn.classList.remove('expanded');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('.toggle-text').textContent = 'Lire la suite';
          } else {
            // Ouvrir
            articleFull.classList.add('expanded');
            toggleBtn.classList.add('expanded');
            toggleBtn.setAttribute('aria-expanded', 'true');
            toggleBtn.querySelector('.toggle-text').textContent = 'Réduire';
          }
        });
      }
    })();

    // ============================================================
// TOGGLE ARTICLE TÉMOIGNAGE (Solitude et harcèlement)
// À ajouter dans la section <script> de ado-solo.php
// ============================================================
(function() {
  const toggleBtn = document.getElementById('temoignageToggle');
  const temoignageSuite = document.getElementById('temoignageSuite');
  
  if (toggleBtn && temoignageSuite) {
    toggleBtn.addEventListener('click', function() {
      const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
      
      if (isExpanded) {
        // Fermer
        temoignageSuite.classList.remove('expanded');
        toggleBtn.classList.remove('expanded');
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('.toggle-text').textContent = 'Comprendre et s\'en sortir';
        
        // Scroll vers le haut de l'article
        document.querySelector('.section-temoignage').scrollIntoView({ 
          behavior: 'smooth', 
          block: 'start' 
        });
      } else {
        // Ouvrir
        temoignageSuite.classList.add('expanded');
        toggleBtn.classList.add('expanded');
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('.toggle-text').textContent = 'Réduire';
      }
    });
  }
  
  console.log('✓ Article Témoignage (harcèlement) chargé — Soloplugs');
})();
  </script>

</body>
</html>
