<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Sorties, loisirs & rencontres';
    $pageDescription = 'Trois chemins, une même liberté. Sorties, loisirs et rencontres pour les personnes seules.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['sorties-loisirs-rencontres.css', 'proposer-evenement.css', 'components.css'];
    $themeRessources = 'ressources/ressources.php?theme=sorties-loisirs';
    
    include '../components/head.php';
  ?>
  <!-- CSS inline extrait vers proposer-evenement.css le 2025-02-01 -->
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO - PAGE DE CHOIX
       ============================================================ -->
  <section class="choices-hero">
    <h1>Sorties, Loisirs & Rencontres</h1>
  </section>

  <!-- ============================================================
       SECTION CHOIX - 3 CARTES
       ============================================================ -->
  <section class="choices-section">
    <div class="choices-intro">
      <p>Trois chemins, une même liberté. Choisissez le vôtre.</p>
    </div>

    <div class="choices-grid">
      
      <!-- Carte 1 : Sorties -->
  <a href="sorties.php" class="choice-card animate-on-scroll">
  <img src="../images/sorties01.png" 
       alt="Sorties - Oser franchir le pas">
</a>

      <!-- Carte 2 : Loisirs -->
     <a href="loisirs.php" class="choice-card animate-on-scroll animate-delay-1">
  <img src="../images/loisirs01.png" 
       alt="Loisirs - Cultiver ses passions">
</a>

     <!-- Carte 3 : Rencontres -->
<a href="rencontres.php" class="choice-card animate-on-scroll animate-delay-2">
 <img src="../images/rencontres01.png"
       alt="Rencontres - Aller vers l'autre">
</a>

    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="page-quote">
    <blockquote>
      « La solitude n'est pas l'absence de mouvement — c'est la liberté de choisir où l'on va. »
    </blockquote>
  </section>

  <!-- ============================================================
       BULLE "PROPOSER UN ÉVÉNEMENT"
       ============================================================ -->
  <section style="padding: 0 1.5rem 3rem;">
    <div class="proposer-evenement" id="proposer-evenement">
      
      <!-- Header cliquable -->
      <div class="proposer-header" onclick="toggleProposer()">
        <div class="proposer-header-content">
          <span class="proposer-icon">📅</span>
          <p class="proposer-titre">Tu organises une activité pour personnes seules ?</p>
        </div>
        <div class="proposer-toggle">
          <svg viewBox="0 0 24 24">
            <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>

      <!-- Contenu expansible -->
      <div class="proposer-contenu">
        <div class="proposer-inner">
          
          <!-- Formulaire -->
          <div id="proposer-formulaire">
            <p class="proposer-intro">
              Fais connaître ton événement à la communauté Soloplugs ! Randonnée, café-rencontre, atelier créatif, sortie culturelle... Partage-le avec d'autres solos de ta région.
            </p>

            <form class="proposer-form" id="form-evenement" onsubmit="envoyerEvenement(event)">
              
              <div class="form-row">
                <div class="form-group">
                  <label for="evt-pays">Pays *</label>
                  <select id="evt-pays" name="pays" required>
                    <option value="">Sélectionner...</option>
                    <option value="quebec">Québec (Canada)</option>
                    <option value="france">France</option>
                    <option value="belgique">Belgique</option>
                    <option value="suisse">Suisse</option>
                    <option value="autre">Autre pays francophone</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="evt-region">Région / Ville *</label>
                  <input type="text" id="evt-region" name="region" placeholder="Ex: Montréal, Lyon, Genève..." required>
                </div>
              </div>

              <div class="form-group full-width">
                <label for="evt-titre">Titre de l'événement *</label>
                <input type="text" id="evt-titre" name="titre" placeholder="Ex: Randonnée solo au Mont-Royal" required>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="evt-date">Date *</label>
                  <input type="date" id="evt-date" name="date" required>
                </div>
                
                <div class="form-group">
                  <label for="evt-heure">Heure</label>
                  <input type="time" id="evt-heure" name="heure">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="evt-type">Type d'activité *</label>
                  <select id="evt-type" name="type" required>
                    <option value="">Sélectionner...</option>
                    <option value="sortie-culturelle">Sortie culturelle (musée, expo, concert)</option>
                    <option value="sortie-resto">Sortie resto / café</option>
                    <option value="sport-plein-air">Sport / plein air</option>
                    <option value="atelier">Atelier créatif / apprentissage</option>
                    <option value="cafe-rencontre">Café-rencontre / discussion</option>
                    <option value="voyage">Voyage / escapade</option>
                    <option value="autre">Autre</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="evt-lieu">Lieu / Point de rendez-vous</label>
                  <input type="text" id="evt-lieu" name="lieu" placeholder="Ex: Parc La Fontaine, entrée principale">
                </div>
              </div>

              <div class="form-group full-width">
                <label for="evt-description">Description de l'événement *</label>
                <textarea id="evt-description" name="description" placeholder="Décris ton événement : ce qu'on y fera, pour qui c'est, ce qu'il faut apporter..." required></textarea>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="evt-organisateur">Ton nom / pseudo *</label>
                  <input type="text" id="evt-organisateur" name="organisateur" placeholder="Comment on t'appelle ?" required>
                </div>
                
                <div class="form-group">
                  <label for="evt-contact">Contact (email ou tél) *</label>
                  <input type="text" id="evt-contact" name="contact" placeholder="Pour que les intéressés te joignent" required>
                </div>
              </div>

              <div class="form-group full-width">
                <label for="evt-lien">Lien d'inscription (optionnel)</label>
                <input type="url" id="evt-lien" name="lien" placeholder="https://... (Eventbrite, Facebook, etc.)">
              </div>

              <!-- Option abonnement -->
              <div class="form-checkbox">
                <input type="checkbox" id="evt-abonnement" name="abonnement" value="oui">
                <label for="evt-abonnement">
                  <strong>M'abonner aux événements Soloplugs</strong><br>
                  Recevoir par courriel les nouvelles activités dans ma région
                </label>
              </div>

              <button type="submit" class="btn-proposer" id="btn-envoyer-evt">
                <svg viewBox="0 0 24 24">
                  <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Soumettre l'événement
              </button>
            </form>

            <div class="proposer-note">
              <span class="proposer-note-icon">✨</span>
              <p>Chaque événement est vérifié par notre équipe avant d'être publié et partagé avec la communauté. C'est gratuit !</p>
            </div>
          </div>

          <!-- Message de confirmation -->
          <div class="proposer-confirmation" id="proposer-confirmation">
            <div class="proposer-confirmation-icon">🎉</div>
            <h3>Merci pour ta contribution !</h3>
            <p>Ton événement a bien été soumis.<br>Nous le vérifierons et le partagerons avec la communauté Soloplugs.</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
       ============================================================ -->
  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

  <!-- ============================================================
       SCRIPT BULLE ÉVÉNEMENT
       ============================================================ -->
  <script>
    // Toggle ouverture/fermeture
    function toggleProposer() {
      const container = document.getElementById('proposer-evenement');
      container.classList.toggle('expanded');
    }

    // Envoi du formulaire
    function envoyerEvenement(event) {
      event.preventDefault();
      
      const btn = document.getElementById('btn-envoyer-evt');
      const form = document.getElementById('form-evenement');
      
      // Désactiver le bouton pendant l'envoi
      btn.disabled = true;
      btn.innerHTML = `
        <svg viewBox="0 0 24 24" class="spin-icon">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="30 70"/>
        </svg>
        Envoi en cours...
      `;
      
      // Collecter les données
      const formData = new FormData(form);
      const data = {};
      formData.forEach((value, key) => {
        data[key] = value;
      });
      
      // Simuler un délai d'envoi (remplacer par ton endpoint réel)
      setTimeout(() => {
        
        // Option: Envoi via PHP
        // fetch('../envoyer-evenement.php', {
        //   method: 'POST',
        //   headers: { 'Content-Type': 'application/json' },
        //   body: JSON.stringify(data)
        // });
        
        // Afficher la confirmation
        document.getElementById('proposer-formulaire').style.display = 'none';
        document.getElementById('proposer-confirmation').classList.add('visible');
        
        // Console log pour debug
        console.log('Événement soumis:', data);
        
      }, 1500);
    }

    // CSS pour l'animation spin
    const spinStyle = document.createElement('style');
    spinStyle.textContent = `
      .spin-icon {
        animation: spin 1s linear infinite;
      }
      @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
      }
    `;
    document.head.appendChild(spinStyle);
  </script>

</body>
</html>
