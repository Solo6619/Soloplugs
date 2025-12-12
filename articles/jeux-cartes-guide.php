<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Guide des jeux de cartes solo';
    $pageDescription = '5 jeux de cartes détaillés pour vos moments de solitude choisie.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['../magazine.css'];
    
    include '../components/head.php';
  ?>
  <style>
    :root {
      --accent: #D4A574;
      --text-primary: #2C3338;
      --text-secondary: #6B7280;
      --bg-primary: #FBF9F6;
      --bg-secondary: #F5F1EB;
      --spacing-sm: 1rem;
      --spacing-md: 2rem;
      --spacing-lg: 3rem;
      --spacing-xl: 4rem;
      --transition-smooth: 0.4s ease;
    }

    body {
      background: var(--bg-primary);
      color: var(--text-primary);
      font-family: 'Inter', sans-serif;
      line-height: 1.8;
    }

    .games-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: var(--spacing-lg) var(--spacing-sm);
    }

    /* En-tête */
    .games-header {
      text-align: center;
      margin-bottom: var(--spacing-xl);
      padding: var(--spacing-xl) 0;
      border-bottom: 1px solid rgba(212, 165, 116, 0.2);
    }

    .games-header h1 {
      font-family: 'Lora', serif;
      font-size: 2.5rem;
      color: var(--text-primary);
      margin-bottom: var(--spacing-sm);
    }

    .games-header p {
      font-size: 1.1rem;
      color: var(--text-secondary);
      max-width: 600px;
      margin: 0 auto;
    }

    /* Navigation onglets */
    .games-nav {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: var(--spacing-xl);
      flex-wrap: wrap;
    }

    .game-tab {
      padding: 1rem 2rem;
      background: white;
      border: 2px solid var(--bg-secondary);
      border-radius: 50px;
      cursor: pointer;
      transition: all var(--transition-smooth);
      font-weight: 600;
      color: var(--text-primary);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      min-width: 180px;
      justify-content: center;
    }

    .game-tab:hover {
      border-color: var(--accent);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(212, 165, 116, 0.2);
    }

    .game-tab.active {
      background: var(--accent);
      color: white;
      border-color: var(--accent);
    }

    .game-emoji {
      font-size: 1.2rem;
    }

    /* Contenu des jeux */
    .game-content {
      display: none;
      animation: fadeIn 0.5s ease-in-out;
    }

    .game-content.active {
      display: block;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .game-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--spacing-xl);
      margin-bottom: var(--spacing-xl);
    }

    .game-image-section {
      background: white;
      border-radius: 20px;
      padding: var(--spacing-lg);
      box-shadow: 0 8px 32px rgba(212, 165, 116, 0.1);
      text-align: center;
    }

    .game-image {
      width: 100%;
      height: 300px;
      background: var(--bg-secondary);
      border-radius: 15px;
      margin-bottom: var(--spacing-md);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--text-secondary);
      font-style: italic;
      background-size: cover;
      background-position: center;
    }

    .game-title {
      font-family: 'Lora', serif;
      font-size: 1.8rem;
      color: var(--accent);
      margin-bottom: var(--spacing-sm);
    }

    .game-meta {
      display: flex;
      gap: 0.5rem;
      justify-content: center;
      margin-bottom: var(--spacing-md);
      flex-wrap: wrap;
    }

    .meta-badge {
      background: rgba(212, 165, 116, 0.1);
      color: var(--accent);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      text-transform: uppercase;
    }

    .difficulty {
      background: rgba(44, 51, 56, 0.1) !important;
      color: var(--text-primary) !important;
    }

    .game-info {
      background: white;
      border-radius: 20px;
      padding: var(--spacing-lg);
      box-shadow: 0 8px 32px rgba(212, 165, 116, 0.1);
    }

    .section-title {
      font-family: 'Lora', serif;
      font-size: 1.3rem;
      color: var(--text-primary);
      margin: var(--spacing-lg) 0 var(--spacing-md) 0;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .section-title::before {
      content: '';
      width: 4px;
      height: 20px;
      background: var(--accent);
      border-radius: 2px;
    }

    .rules-list {
      list-style: none;
      padding: 0;
    }

    .rules-list li {
      margin-bottom: var(--spacing-md);
      padding-left: 2rem;
      position: relative;
    }

    .rules-list li::before {
      content: attr(data-step);
      position: absolute;
      left: 0;
      top: 0;
      background: var(--accent);
      color: white;
      width: 1.5rem;
      height: 1.5rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      font-weight: bold;
    }

    .tips-box {
      background: linear-gradient(135deg, rgba(212, 165, 116, 0.08), rgba(212, 165, 116, 0.03));
      border-left: 4px solid var(--accent);
      border-radius: 10px;
      padding: var(--spacing-md);
      margin-top: var(--spacing-lg);
    }

    .tips-box h4 {
      color: var(--accent);
      margin-bottom: var(--spacing-sm);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .highlight {
      background: rgba(212, 165, 116, 0.2);
      padding: 0.2rem 0.4rem;
      border-radius: 4px;
      font-weight: 600;
    }

    /* Navigation bas de page */
    .games-navigation {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: var(--spacing-xl);
      padding: var(--spacing-lg);
      background: white;
      border-radius: 15px;
    }

    .nav-btn {
      padding: 0.8rem 1.5rem;
      background: var(--accent);
      color: white;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-weight: 600;
      transition: all var(--transition-smooth);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .nav-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(212, 165, 116, 0.3);
    }

    .nav-btn:disabled {
      background: var(--bg-secondary);
      color: var(--text-secondary);
      cursor: not-allowed;
      transform: none;
    }

    .back-link {
      color: var(--text-secondary);
      text-decoration: none;
      font-weight: 500;
      transition: color var(--transition-smooth);
    }

    .back-link:hover {
      color: var(--accent);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .game-layout {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
      }

      .games-nav {
        gap: 0.5rem;
      }

      .game-tab {
        padding: 0.8rem 1.5rem;
        min-width: 150px;
      }

      .games-header h1 {
        font-size: 2rem;
      }

      .games-navigation {
        flex-direction: column;
        gap: var(--spacing-md);
      }
    }
  </style>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <main class="games-container">
    
    <!-- En-tête -->
    <header class="games-header">
      <h1>Guide des jeux de cartes solo</h1>
      <p>5 jeux détaillés pour redécouvrir le plaisir des cartes en solitude choisie</p>
    </header>

    <!-- Navigation onglets -->
    <nav class="games-nav">
      <button class="game-tab active" onclick="showGame('klondike')" data-game="klondike">
        <span class="game-emoji">🎴</span>
        Solitaire Klondike
      </button>
      <button class="game-tab" onclick="showGame('freecell')" data-game="freecell">
        <span class="game-emoji">🎯</span>
        FreeCell
      </button>
      <button class="game-tab" onclick="showGame('spider')" data-game="spider">
        <span class="game-emoji">🕷️</span>
        Spider
      </button>
      <button class="game-tab" onclick="showGame('pyramid')" data-game="pyramid">
        <span class="game-emoji">🔺</span>
        Pyramide
      </button>
      <button class="game-tab" onclick="showGame('accordion')" data-game="accordion">
        <span class="game-emoji">🪗</span>
        Accordéon
      </button>
    </nav>

    <!-- Contenu Klondike -->
    <div id="klondike" class="game-content active">
      <div class="game-layout">
        <div class="game-image-section">
          <div class="game-image" style="background-image: url('../images/Magazine/Jeux_solo/pyramid_jeu.jpg');">
            Image Solitaire Klondike
          </div>
          <h2 class="game-title">Solitaire Klondike</h2>
          <div class="game-meta">
            <span class="meta-badge difficulty">Facile</span>
            <span class="meta-badge">15-30 min</span>
            <span class="meta-badge">Moment cocooning</span>
          </div>
          <p><strong>Le principe :</strong> Construire 4 piles par couleur de l'As au Roi, en utilisant 7 colonnes de cartes partiellement cachées.</p>
        </div>

        <div class="game-info">
          <h3 class="section-title">🎯 But du jeu</h3>
          <p>Déplacer toutes les cartes vers 4 piles de fondation, une par couleur, de l'As au Roi.</p>

          <h3 class="section-title">⚙️ Mise en place</h3>
          <ul class="rules-list">
            <li data-step="1">Distribuez 7 colonnes : 1 carte face visible dans la 1ère colonne, 2 dans la 2ème (1 cachée + 1 visible), 3 dans la 3ème (2 cachées + 1 visible), etc.</li>
            <li data-step="2">Le reste forme la pioche (face cachée)</li>
            <li data-step="3">Laissez 4 espaces libres pour les piles de fondation</li>
          </ul>

          <h3 class="section-title">📋 Règles</h3>
          <ul class="rules-list">
            <li data-step="1"><strong>Dans les colonnes :</strong> Placez une carte sur une autre si elle est d'une <span class="highlight">couleur opposée</span> et d'une <span class="highlight">valeur immédiatement inférieure</span></li>
            <li data-step="2"><strong>Révéler les cartes :</strong> Retournez la carte cachée quand vous déplacez la carte visible au-dessus</li>
            <li data-step="3"><strong>La pioche :</strong> Retournez 3 cartes à la fois, utilisez seulement celle du dessus</li>
            <li data-step="4"><strong>Les fondations :</strong> Commencez par les As, construisez par couleur jusqu'au Roi</li>
            <li data-step="5"><strong>Espaces vides :</strong> Seul un Roi peut être placé sur une colonne vide</li>
          </ul>

          <div class="tips-box">
            <h4>💡 Conseils pratiques</h4>
            <ul>
              <li>Privilégiez les mouvements qui révèlent de nouvelles cartes</li>
              <li>Ne montez aux fondations que si ça ne bloque pas d'autres possibilités</li>
              <li>Videz les colonnes courtes en priorité pour libérer des Rois</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenu FreeCell -->
    <div id="freecell" class="game-content">
      <div class="game-layout">
        <div class="game-image-section">
          <div class="game-image" style="background-image: url('../images/Magazine/Jeux_solo/pyramid_jeu.jpg');">
            Image FreeCell
          </div>
          <h2 class="game-title">FreeCell</h2>
          <div class="game-meta">
            <span class="meta-badge difficulty">Moyen</span>
            <span class="meta-badge">20-45 min</span>
            <span class="meta-badge">Concentration</span>
          </div>
          <p><strong>Le principe :</strong> Toutes les cartes sont visibles dès le début. 4 cases libres permettent de stocker temporairement des cartes.</p>
        </div>

        <div class="game-info">
          <h3 class="section-title">🎯 But du jeu</h3>
          <p>Monter les 4 couleurs de l'As au Roi dans les fondations.</p>

          <h3 class="section-title">⚙️ Mise en place</h3>
          <ul class="rules-list">
            <li data-step="1">Distribuez toutes les cartes face visible en 8 colonnes (4 colonnes de 7 cartes, 4 colonnes de 6 cartes)</li>
            <li data-step="2">4 cases libres en haut à gauche pour stocker temporairement</li>
            <li data-step="3">4 emplacements de fondation en haut à droite</li>
          </ul>

          <h3 class="section-title">📋 Règles</h3>
          <ul class="rules-list">
            <li data-step="1"><strong>Mouvement :</strong> Une seule carte à la fois, seulement celle du bas de chaque colonne</li>
            <li data-step="2"><strong>Placement :</strong> Couleur opposée et valeur immédiatement inférieure</li>
            <li data-step="3"><strong>Cases libres :</strong> Une seule carte par case, utilisez-les stratégiquement</li>
            <li data-step="4"><strong>Fondations :</strong> Par couleur, de l'As au Roi (irréversible)</li>
            <li data-step="5"><strong>Colonnes vides :</strong> Toute carte peut être placée</li>
          </ul>

          <div class="tips-box">
            <h4>💡 Conseils pratiques</h4>
            <ul>
              <li>Planifiez 2-3 coups à l'avance</li>
              <li>Cases libres = stratégie, pas stockage permanent</li>
              <li>Libérez les As et les 2 en priorité</li>
              <li>Évitez d'enterrer les cartes importantes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenu Spider -->
    <div id="spider" class="game-content">
      <div class="game-layout">
        <div class="game-image-section">
          <div class="game-image" style="background-image: url('../images/Magazine/Jeux_solo/pyramid_jeu.jpg');">
            Image Spider
          </div>
          <h2 class="game-title">Spider (1 couleur)</h2>
          <div class="game-meta">
            <span class="meta-badge difficulty">Moyen-Difficile</span>
            <span class="meta-badge">30-60 min</span>
            <span class="meta-badge">Défi personnel</span>
          </div>
          <p><strong>Le principe :</strong> Former 8 séquences complètes du Roi à l'As dans la même couleur avec 2 jeux de cartes.</p>
        </div>

        <div class="game-info">
          <h3 class="section-title">🎯 But du jeu</h3>
          <p>Former 8 séquences complètes du Roi à l'As dans la même couleur.</p>

          <h3 class="section-title">⚙️ Mise en place</h3>
          <ul class="rules-list">
            <li data-step="1">2 jeux de 52 cartes (104 cartes au total)</li>
            <li data-step="2">Distribuez 10 colonnes : 6 cartes dans les 4 premières, 5 dans les 6 autres</li>
            <li data-step="3">Seule la carte du bas de chaque colonne est visible</li>
            <li data-step="4">Le reste forme la pioche</li>
          </ul>

          <h3 class="section-title">📋 Règles</h3>
          <ul class="rules-list">
            <li data-step="1"><strong>Mouvement :</strong> Une carte ou séquence dans le bon ordre et même couleur</li>
            <li data-step="2"><strong>Placement :</strong> Par ordre décroissant, peu importe la couleur</li>
            <li data-step="3"><strong>Révéler :</strong> Retournez la carte cachée quand celle du dessus part</li>
            <li data-step="4"><strong>Séquences complètes :</strong> Roi→As même couleur disparaît automatiquement</li>
            <li data-step="5"><strong>Nouvelle donne :</strong> 1 carte sur chaque colonne quand bloqué</li>
          </ul>

          <div class="tips-box">
            <h4>💡 Conseils pratiques</h4>
            <ul>
              <li>Concentrez-vous sur une couleur à la fois</li>
              <li>Libérez les colonnes vides pour plus de manœuvrabilité</li>
              <li>Évitez de mélanger les couleurs</li>
              <li>Nouvelle donne en dernier recours</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenu Pyramide -->
    <div id="pyramid" class="game-content">
      <div class="game-layout">
        <div class="game-image-section">
          <div class="game-image" style="background-image: url('../images/Magazine/Jeux_solo/pyramid_jeu.jpg');">
            Image Pyramide
          </div>
          <h2 class="game-title">Pyramide</h2>
          <div class="game-meta">
            <span class="meta-badge difficulty">Facile</span>
            <span class="meta-badge">10-20 min</span>
            <span class="meta-badge">Détente rapide</span>
          </div>
          <p><strong>Le principe :</strong> Éliminer toutes les cartes de la pyramide en formant des paires qui totalisent 13.</p>
        </div>

        <div class="game-info">
          <h3 class="section-title">🎯 But du jeu</h3>
          <p>Éliminer toutes les cartes de la pyramide en formant des paires qui totalisent 13.</p>

          <h3 class="section-title">⚙️ Mise en place</h3>
          <ul class="rules-list">
            <li data-step="1">Disposez 28 cartes en pyramide : 7 cartes à la base, 6 au-dessus, etc., jusqu'à 1 au sommet</li>
            <li data-step="2">Le reste forme la pioche face cachée</li>
            <li data-step="3">Une carte défausse à côté</li>
          </ul>

          <h3 class="section-title">📋 Règles</h3>
          <ul class="rules-list">
            <li data-step="1"><strong>Valeurs :</strong> As=1, cartes numériques=valeur, Valet=11, Dame=12, <span class="highlight">Roi=13</span></li>
            <li data-step="2"><strong>Paires :</strong> As+Dame (1+12), 2+Valet (2+11), 3+10, 4+9, 5+8, 6+7</li>
            <li data-step="3"><strong>Le Roi :</strong> S'élimine seul (vaut 13)</li>
            <li data-step="4"><strong>Disponibilité :</strong> Seulement les cartes entièrement dégagées</li>
            <li data-step="5"><strong>Pioche :</strong> Cartes une par une, associer avec pyramide</li>
          </ul>

          <div class="tips-box">
            <h4>💡 Conseils pratiques</h4>
            <ul>
              <li>Observez la pyramide avant de commencer</li>
              <li>Dégagez les cartes qui en cachent le plus</li>
              <li>Mémorisez les cartes de la défausse</li>
              <li>Parfois mieux vaut garder une paire pour plus tard</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenu Accordéon -->
    <div id="accordion" class="game-content">
      <div class="game-layout">
        <div class="game-image-section">
          <div class="game-image" style="background-image: url('../images/Magazine/Jeux_solo/pyramid_jeu.jpg');">
            Image Accordéon
          </div>
          <h2 class="game-title">Accordéon</h2>
          <div class="game-meta">
            <span class="meta-badge difficulty">Moyen</span>
            <span class="meta-badge">15-25 min</span>
            <span class="meta-badge">Exploration</span>
          </div>
          <p><strong>Le principe :</strong> Disposer les cartes en ligne, les "plier" en empilant celles de même couleur ou valeur séparées de 1 ou 3 positions.</p>
        </div>

        <div class="game-info">
          <h3 class="section-title">🎯 But du jeu</h3>
          <p>Regrouper toutes les cartes en une seule pile.</p>

          <h3 class="section-title">⚙️ Mise en place</h3>
          <ul class="rules-list">
            <li data-step="1">Disposez les 52 cartes face visible en une longue ligne</li>
            <li data-step="2">Pas de pioche, toutes les cartes sont visibles</li>
          </ul>

          <h3 class="section-title">📋 Règles</h3>
          <ul class="rules-list">
            <li data-step="1"><strong>Conditions :</strong> Même couleur (cœur/carreau OU pique/trèfle) OU même valeur</li>
            <li data-step="2"><strong>Distance :</strong> Séparées de <span class="highlight">1 ou 3 positions exactement</span></li>
            <li data-step="3"><strong>Position 1 :</strong> La carte juste à côté</li>
            <li data-step="4"><strong>Position 3 :</strong> En sautant 2 cartes</li>
            <li data-step="5"><strong>Effet :</strong> Les cartes se "plient" et créent de nouvelles possibilités</li>
          </ul>

          <div class="tips-box">
            <h4>💡 Conseils pratiques</h4>
            <ul>
              <li>Regardez toujours les deux options (position 1 et 3)</li>
              <li>Mouvements vers la gauche = plus d'opportunités</li>
              <li>Patience : la solution apparaît parfois après plusieurs coups</li>
              <li>N'hésitez pas à recommencer</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation bas -->
    <footer class="games-navigation">
      <a href="../magazine.php" class="back-link">← Retour au Magazine</a>
      <div>
        <button class="nav-btn" onclick="previousGame()" id="prevBtn">← Précédent</button>
        <button class="nav-btn" onclick="nextGame()" id="nextBtn">Suivant →</button>
      </div>
    </footer>

  </main>

  <?php include '../components/footer.php'; ?>

  <script>
    const games = ['klondike', 'freecell', 'spider', 'pyramid', 'accordion'];
    let currentGameIndex = 0;

    function showGame(gameId) {
      // Masquer tous les contenus
      document.querySelectorAll('.game-content').forEach(content => {
        content.classList.remove('active');
      });
      
      // Désactiver tous les onglets
      document.querySelectorAll('.game-tab').forEach(tab => {
        tab.classList.remove('active');
      });

      // Activer le contenu et l'onglet sélectionnés
      document.getElementById(gameId).classList.add('active');
      document.querySelector(`[data-game="${gameId}"]`).classList.add('active');

      // Mettre à jour l'index actuel
      currentGameIndex = games.indexOf(gameId);
      updateNavigationButtons();
    }

    function nextGame() {
      if (currentGameIndex < games.length - 1) {
        currentGameIndex++;
        showGame(games[currentGameIndex]);
      }
    }

    function previousGame() {
      if (currentGameIndex > 0) {
        currentGameIndex--;
        showGame(games[currentGameIndex]);
      }
    }

    function updateNavigationButtons() {
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      
      prevBtn.disabled = currentGameIndex === 0;
      nextBtn.disabled = currentGameIndex === games.length - 1;
    }

    // Navigation clavier
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') previousGame();
      if (e.key === 'ArrowRight') nextGame();
    });

    // Initialiser
    updateNavigationButtons();
  </script>

  <?php include '../components/scripts.php'; ?>

</body>
</html>