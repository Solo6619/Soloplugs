<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Séparation, divorce, décès';
    $pageDescription = 'Accompagnement doux pour traverser une rupture, une séparation ou un deuil. Sans rien presser. À ton rythme.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['divorces-separations-deces-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques à ce thème -->
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,500;1,400&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-deuil">
    <div class="hero-content">
      
      <!-- Icône SVG : Main ouverte accueillante avec cœur -->
      <div class="hero-icon">
        <svg viewBox="0 0 100 100" width="100" height="100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Cercle doux en arrière-plan -->
          <circle cx="50" cy="50" r="45" fill="#EEF4F8" opacity="0.5"/>
          
          <!-- Main ouverte stylisée -->
          <path d="M35 65C35 65 30 55 30 45C30 38 34 35 38 35C42 35 45 38 45 42V55" 
                stroke="#7BA5C1" stroke-width="2.5" stroke-linecap="round" fill="none"/>
          <path d="M45 55V35C45 31 48 28 52 28C56 28 59 31 59 35V55" 
                stroke="#7BA5C1" stroke-width="2.5" stroke-linecap="round" fill="none"/>
          <path d="M59 55V38C59 34 62 31 66 31C70 31 73 34 73 38V55" 
                stroke="#7BA5C1" stroke-width="2.5" stroke-linecap="round" fill="none"/>
          <path d="M45 55C45 55 40 70 50 75C60 70 55 55 55 55" 
                stroke="#7BA5C1" stroke-width="2.5" stroke-linecap="round" fill="none"/>
          
          <!-- Petit cœur -->
          <path d="M50 45C50 42 52 40 55 40C58 40 60 42 60 45C60 50 50 55 50 55C50 55 40 50 40 45C40 42 42 40 45 40C48 40 50 42 50 45Z" 
                fill="#B8A9C9" opacity="0.6"/>
          
          <!-- Lumière douce -->
          <circle cx="50" cy="25" r="8" fill="#D4CAE0" opacity="0.3"/>
        </svg>
      </div>

      <h1 class="hero-title">Séparation, divorce, décès</h1>
      
      <p class="hero-description">
        Tu traverses quelque chose de difficile. Une rupture, une perte, 
        un vide qui s'est installé. Je n'vais pas te dire que ça va passer. 
        Mais je suis là. Sans rien presser.
      </p>
    </div>
  </section>

  <!-- ============================================================
       MESSAGE D'ACCUEIL
       ============================================================ -->
  <section class="welcome-section">
    <div class="welcome-content">
      <div class="welcome-box">
        <p>
          Peut-être que c'est récent. Peut-être que ça fait des mois, 
          et que certains jours sont encore difficiles.
        </p>
        <p>
          <span class="emphasis">Je ne cherche pas à expliquer.</span> 
          Et je n'ai pas de réponses toutes faites. Pas de "ça ira mieux demain".
        </p>
        <p>
          Juste t'accompagner. C'est tout.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CE QUE TU RESSENS PEUT-ÊTRE
       ============================================================ -->
  <section class="feelings-section">
    <div class="section-content">
      <h2>Ce que tu ressens peut-être</h2>
      <p class="section-intro">
        Chaque chemin est unique. Mais certains ressentis reviennent souvent.
        Les reconnaître, c'est déjà un pas.
      </p>
      
      <div class="feelings-grid">
        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#7BA5C1" stroke-width="2" fill="#EEF4F8"/>
              <path d="M20 12V20M20 28V28.01" stroke="#5A8AAD" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Un vide soudain</h3>
          <p>Comme si une partie de ta vie avait disparu d'un coup.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#B8A9C9" stroke-width="2" fill="#F5F2F8"/>
              <path d="M12 20H28M20 12V28" stroke="#9A8BB3" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
            </svg>
          </div>
          <h3>Un silence difficile</h3>
          <p>Les soirs, les matins. Ces moments où tout semble trop calme.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#7BA5C1" stroke-width="2" fill="#EEF4F8"/>
              <path d="M14 26C14 26 17 22 20 22C23 22 26 26 26 26" stroke="#5A8AAD" stroke-width="2" stroke-linecap="round"/>
              <circle cx="15" cy="16" r="2" fill="#5A8AAD"/>
              <circle cx="25" cy="16" r="2" fill="#5A8AAD"/>
            </svg>
          </div>
          <h3>Une fatigue profonde</h3>
          <p>Pas seulement physique. Une fatigue de tout l'être.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#B8A9C9" stroke-width="2" fill="#F5F2F8"/>
              <path d="M15 15L25 25M25 15L15 25" stroke="#9A8BB3" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Des émotions instables</h3>
          <p>Colère, tristesse, soulagement parfois. Tout mélangé.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#7BA5C1" stroke-width="2" fill="#EEF4F8"/>
              <path d="M12 20C12 20 16 16 20 16C24 16 28 20 28 20C28 20 24 24 20 24C16 24 12 20 12 20Z" stroke="#5A8AAD" stroke-width="2"/>
              <circle cx="20" cy="20" r="3" fill="#5A8AAD"/>
            </svg>
          </div>
          <h3>Tout semble fragile</h3>
          <p>Les certitudes d'avant ont vacillé. Le sol n'est plus stable.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#B8A9C9" stroke-width="2" fill="#F5F2F8"/>
              <path d="M15 12V28L20 24L25 28V12H15Z" stroke="#9A8BB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3>Une maison trop grande</h3>
          <p>Les espaces vides. Les objets qui rappellent.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#7BA5C1" stroke-width="2" fill="#EEF4F8"/>
              <circle cx="15" cy="18" r="4" stroke="#5A8AAD" stroke-width="2"/>
              <circle cx="25" cy="18" r="4" stroke="#5A8AAD" stroke-width="2"/>
              <path d="M15 28C18 25 22 25 25 28" stroke="#5A8AAD" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Besoin d'être seul·e, puis de parler</h3>
          <p>Les deux en même temps, parfois. C'est normal.</p>
        </div>

        <div class="feeling-card">
          <div class="feeling-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="20" r="18" stroke="#B8A9C9" stroke-width="2" fill="#F5F2F8"/>
              <path d="M20 10V20L26 26" stroke="#9A8BB3" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Des journées floues</h3>
          <p>Le temps passe différemment. Les repères ont bougé.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="quote-section">
    <blockquote class="main-quote">
      <p>"Apprendre à vivre sans l'autre, ce n'est pas un apprentissage logique. C'est un chemin."</p>
    </blockquote>
  </section>

  <!-- ============================================================
       CE QUE ÇA IMPLIQUE
       ============================================================ -->
  <section class="implications-section">
    <div class="section-content">
      <h2>Ce que ça implique, parfois</h2>
      
      <div class="implications-grid">
        <div class="implication-card">
          <div class="implication-icon">
            <svg viewBox="0 0 50 50" width="50" height="50" fill="none">
              <rect x="10" y="15" width="30" height="25" rx="3" stroke="#7BA5C1" stroke-width="2"/>
              <path d="M10 22H40" stroke="#7BA5C1" stroke-width="2"/>
              <path d="M18 15V10M32 15V10" stroke="#7BA5C1" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Réapprendre à habiter son espace</h3>
          <p>Quand la maison était partagée, et qu'elle ne l'est plus.</p>
        </div>

        <div class="implication-card">
          <div class="implication-icon">
            <svg viewBox="0 0 50 50" width="50" height="50" fill="none">
              <circle cx="25" cy="25" r="18" stroke="#B8A9C9" stroke-width="2"/>
              <path d="M25 12V25L32 32" stroke="#B8A9C9" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Apprivoiser les soirées et les week-ends</h3>
          <p>Ces moments où le temps s'étire différemment.</p>
        </div>

        <div class="implication-card">
          <div class="implication-icon">
            <svg viewBox="0 0 50 50" width="50" height="50" fill="none">
              <path d="M15 35L20 25L25 30L30 20L35 25" stroke="#7BA5C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="25" cy="15" r="8" stroke="#7BA5C1" stroke-width="2"/>
            </svg>
          </div>
          <h3>Retrouver sa propre voix</h3>
          <p>Après avoir été "nous", redevenir "je".</p>
        </div>

        <div class="implication-card">
          <div class="implication-icon">
            <svg viewBox="0 0 50 50" width="50" height="50" fill="none">
              <path d="M15 25C15 25 20 15 25 15C30 15 35 25 35 25C35 25 30 35 25 35C20 35 15 25 15 25Z" stroke="#B8A9C9" stroke-width="2"/>
              <circle cx="25" cy="25" r="5" stroke="#B8A9C9" stroke-width="2"/>
            </svg>
          </div>
          <h3>Accepter les journées floues</h3>
          <p>Certains jours, on avance. D'autres, on survit. Les deux comptent.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       DEUX SOLITUDES
       ============================================================ -->
  <section class="duality-section">
    <div class="section-content">
      <h2>Deux solitudes possibles</h2>
      <p class="section-intro">
        On ne force rien. On ne pousse pas vers l'une ou l'autre.
        Chacune a son temps.
      </p>
      
      <div class="duality-cards">
        <div class="duality-card suffered">
          <div class="duality-icon">💔</div>
          <h3>La solitude douloureuse</h3>
          <p>
            Le silence qui pèse. L'absence qui fait mal. 
            Les nuits difficiles. Le chagrin qui revient par vagues.
          </p>
          <p class="duality-note">
            Elle est là. On ne la nie pas. On la traverse.
          </p>
        </div>

        <div class="duality-card chosen">
          <div class="duality-icon">🌱</div>
          <h3>La solitude reconstruite</h3>
          <p>
            Un espace intérieur qui se reforme. Une autonomie qui revient.
            Des gestes qui reprennent leur place.
          </p>
          <p class="duality-note">
            Elle viendra peut-être. À son rythme. Pas avant.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       RESSOURCES D'AIDE
       ============================================================ -->
  <section class="resources-section">
    <div class="section-content">
      <h2>Si tu as besoin de parler</h2>
      <p class="section-intro">
        Tu n'as pas à traverser ça seul·e. Voici des ressources disponibles.
      </p>
      
      <div class="resources-grid">
        <div class="resource-card">
          <div class="resource-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <rect x="8" y="12" width="24" height="18" rx="3" stroke="#7BA5C1" stroke-width="2"/>
              <path d="M8 18L20 26L32 18" stroke="#7BA5C1" stroke-width="2"/>
            </svg>
          </div>
          <h3>Lignes d'écoute</h3>
          <p><strong>Tel-Aide :</strong> 514-935-1101</p>
          <p><strong>Québec :</strong> 1-866-APPELLE (277-3553)</p>
          <p><strong>Canada :</strong> 988</p>
          <p class="resource-note">Disponibles 24/7, gratuit et confidentiel.</p>
        </div>

        <div class="resource-card">
          <div class="resource-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <circle cx="20" cy="15" r="6" stroke="#B8A9C9" stroke-width="2"/>
              <circle cx="10" cy="28" r="5" stroke="#B8A9C9" stroke-width="2"/>
              <circle cx="30" cy="28" r="5" stroke="#B8A9C9" stroke-width="2"/>
              <path d="M20 21V23M15 28H25" stroke="#B8A9C9" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Groupes de soutien</h3>
          <p>Groupes de deuil, groupes pour personnes séparées, cercles de parole.</p>
          <p class="resource-note">Parfois, être avec d'autres qui comprennent aide.</p>
        </div>

        <div class="resource-card">
          <div class="resource-icon">
            <svg viewBox="0 0 40 40" width="40" height="40" fill="none">
              <path d="M20 8C20 8 8 16 8 24C8 30 13 34 20 34C27 34 32 30 32 24C32 16 20 8 20 8Z" stroke="#7BA5C1" stroke-width="2"/>
              <path d="M20 18V24M20 28V28.01" stroke="#7BA5C1" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Aide professionnelle</h3>
          <p>Psychologues, travailleurs sociaux, conseillers en deuil.</p>
          <p><strong>Info-Social :</strong> 811</p>
          <p class="resource-note">CLSC et ressources communautaires près de chez toi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       MESSAGE DE CLÔTURE
       ============================================================ -->
  <section class="closing-section">
    <div class="closing-content">
      <p class="closing-message">
        On ne te demande pas d'aller mieux. On ne te demande pas d'être fort·e.
      </p>
      <p class="closing-emphasis">
        On te demande juste de te laisser le temps.
      </p>
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
