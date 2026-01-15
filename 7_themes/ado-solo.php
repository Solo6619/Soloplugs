<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Ado solo — Tu n\'es pas seul·e';
    $pageDescription = 'Ressources et soutien pour les adolescents qui vivent la solitude. Lignes d\'écoute 24/7, conseils et accompagnement.';
    $basePath = '../';
    $currentPage = 'ado-solo';
    $additionalCSS = ['theme-base.css', 'ado-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
  
  <style>
    /* ========================================
       BLOC PROMO RESSOURCES
       ======================================== */
    .section-ressources-promo {
      padding: 3rem 0;
      background: linear-gradient(180deg, #FEF0F2 0%, #FFFBFC 100%);
    }
    
    .ressources-promo {
      background: white;
      border-radius: 20px;
      padding: 2.5rem;
      text-align: center;
      box-shadow: 0 4px 20px rgba(232, 93, 117, 0.1);
      border: 2px solid #F5E6E9;
    }
    
    .ressources-promo-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
    }
    
    .ressources-promo h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.75rem;
      color: #4A4A4A;
      margin-bottom: 0.75rem;
    }
    
    .ressources-promo > p {
      font-family: 'Inter', sans-serif;
      font-size: 1.05rem;
      color: #6B6B6B;
      line-height: 1.6;
      max-width: 500px;
      margin: 0 auto 1.5rem;
    }
    
    .ressources-promo-features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
    }
    
    .ressources-promo-features span {
      background: #FEF0F2;
      color: #D14D65;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
    }
    
    .ressources-promo .btn-ressources {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, #E85D75 0%, #D14D65 100%);
      color: white;
      padding: 1rem 2rem;
      border-radius: 30px;
      font-family: 'Inter', sans-serif;
      font-size: 1.1rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(232, 93, 117, 0.3);
    }
    
    .ressources-promo .btn-ressources:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 25px rgba(232, 93, 117, 0.4);
    }
    
    .ressources-promo .btn-ressources svg {
      transition: transform 0.3s ease;
    }
    
    .ressources-promo .btn-ressources:hover svg {
      transform: translateX(4px);
    }
    
    /* Urgence rapide sous le CTA */
    .urgence-rapide {
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 1px solid #F5E6E9;
    }
    
    .urgence-rapide p {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: #6B6B6B;
      margin-bottom: 0.75rem;
    }
    
    .urgence-rapide-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }
    
    .urgence-rapide-links a {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #FFF5F5;
      color: #D32F2F;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      border: 1px solid #FFD4D4;
      transition: all 0.2s ease;
    }
    
    .urgence-rapide-links a:hover {
      background: #FFEBEE;
      transform: translateY(-2px);
    }
    
    @media (max-width: 600px) {
      .ressources-promo {
        padding: 1.75rem;
      }
      
      .ressources-promo h2 {
        font-size: 1.5rem;
      }
      
      .ressources-promo-features {
        flex-direction: column;
        align-items: center;
      }
      
      .ressources-promo .btn-ressources {
        width: 100%;
        justify-content: center;
      }
      
      .urgence-rapide-links {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
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

  <?php include '../components/footer.php'; ?>

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
  </script>

</body>
</html>
