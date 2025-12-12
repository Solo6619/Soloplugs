<?php
/**
 * Article : Solitaire Klondike - Jeu en Solo
 * SOLOPLUGS Magazine
 * Utilise : jeux-soloplugs.css
 */

// CSS additionnels à charger
$additionalCSS = ['articles.css', 'jeux-soloplugs.css'];

// Inclusion du head
include '../components/head.php';
?>

<!-- SECTION JEU SOLITAIRE -->
<section class="jeu-section">
  <div class="jeu-container">
    
    <!-- BADGE -->
    <div style="text-align: center;">
      <span class="jeu-badge">🎮 Jeux en Solo</span>
    </div>
    
    <!-- TITRE -->
    <h2 class="jeu-titre">Solitaire Klondike</h2>
    
    <!-- INTRODUCTION -->
    <p class="jeu-intro">
      Le grand classique des jeux de cartes en solitaire. 
      Un moment de calme et de concentration, parfait pour se retrouver avec soi-même.
    </p>
    
    <!-- STATS -->
    <div class="jeu-stats">
      <div class="jeu-stat">
        <span class="jeu-stat-icon">⏱️</span>
        <span>5-15 minutes</span>
      </div>
      <div class="jeu-stat">
        <span class="jeu-stat-icon">✨</span>
        <span>Gratuit</span>
      </div>
      <div class="jeu-stat">
        <span class="jeu-stat-icon">🔓</span>
        <span>Sans inscription</span>
      </div>
    </div>
    
    <!-- IFRAME JEU -->
    <div class="jeu-wrapper">
      <iframe 
        src="https://b6.games/solitaire/?lang=fr" 
        width="100%" 
        height="600"
        frameborder="0"
        allowfullscreen
        title="Solitaire Klondike">
      </iframe>
    </div>

    <!-- BOUTONS -->
    <div class="jeu-boutons">
      <a href="https://b6.games/solitaire/?lang=fr" target="_blank" class="btn-jeu btn-jeu-primaire">
        🎴 Jouer en plein écran
      </a>
      <a href="https://b6.games/solitaire-kingdom" target="_blank" class="btn-jeu btn-jeu-secondaire">
        📱 Version mobile
      </a>
    </div>
    
    <!-- ENCADRÉ "POURQUOI CE JEU ?" -->
    <div class="jeu-pourquoi">
      <h3 class="jeu-pourquoi-titre">💭 Pourquoi ce jeu ?</h3>
      <p>
        Le Solitaire n'est pas qu'un simple passe-temps. C'est un espace de méditation active 
        où chaque carte posée devient un geste conscient, chaque décision une micro-stratégie.
      </p>
      <p>
        Dans un monde qui nous pousse constamment à l'interaction sociale, prendre 10 minutes 
        pour jouer seul au Solitaire, c'est s'offrir un refuge mental. Un moment où la seule 
        personne à impressionner, c'est soi-même.
      </p>
    </div>
    
    <!-- BÉNÉFICES -->
    <div class="jeu-benefices">
      <h3 class="jeu-benefices-titre">✨ Les bénéfices de ce jeu solo</h3>
      
      <div class="jeu-benefices-liste">
        
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🧠</span>
          <h4 class="jeu-benefice-titre">Concentration</h4>
          <p class="jeu-benefice-desc">
            Développe la capacité à se concentrer sur une tâche unique pendant plusieurs minutes.
          </p>
        </div>
        
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🎯</span>
          <h4 class="jeu-benefice-titre">Stratégie</h4>
          <p class="jeu-benefice-desc">
            Entraîne la planification et la prise de décision avec ressources limitées.
          </p>
        </div>
        
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">😌</span>
          <h4 class="jeu-benefice-titre">Détente</h4>
          <p class="jeu-benefice-desc">
            Offre une pause mentale, un moment de calme loin du bruit quotidien.
          </p>
        </div>
        
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">⏸️</span>
          <h4 class="jeu-benefice-titre">Patience</h4>
          <p class="jeu-benefice-desc">
            Cultive l'acceptation : parfois on gagne, parfois on recommence.
          </p>
        </div>
        
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🔄</span>
          <h4 class="jeu-benefice-titre">Résilience</h4>
          <p class="jeu-benefice-desc">
            Apprend à recommencer sans frustration, à voir chaque partie comme nouvelle.
          </p>
        </div>
        
        <div class="jeu-benefice">
          <span class="jeu-benefice-icon">🏆</span>
          <h4 class="jeu-benefice-titre">Accomplissement</h4>
          <p class="jeu-benefice-desc">
            Procure une satisfaction simple et immédiate quand on termine une partie.
          </p>
        </div>
        
      </div>
    </div>
    
  </div>
</section>

<?php
// Inclusion du footer
include '../components/footer.php';
?>
