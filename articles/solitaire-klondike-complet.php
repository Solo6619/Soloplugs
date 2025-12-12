<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    $pageTitle = 'Solitaire Klondike : Guide complet et jeu en ligne';
    $pageDescription = 'Découvrez l\'histoire, les règles et les stratégies du Solitaire Klondike. Jouez gratuitement en ligne et maîtrisez le roi des jeux de patience.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['articles.css', 'jeux-articles.css'];
    
    include '../components/head.php';
  ?>
  <style>
    /* ============================================================
       🎴 STYLES JEUX - CSS INLINE POUR GARANTIR L'APPLICATION
       ============================================================ */
    
    /* Section jeu principale */
    section.jeu-section {
      background: linear-gradient(135deg, #F5F1EB 0%, #FBF9F6 100%) !important;
      padding: 3rem 1rem !important;
      margin: 3rem 0 !important;
      border-top: 3px solid #D4A574 !important;
      border-bottom: 3px solid #D4A574 !important;
      display: block !important;
    }
    
    div.jeu-container {
      max-width: 900px !important;
      margin: 0 auto !important;
    }
    
    h2.jeu-titre {
      font-family: 'Lora', serif !important;
      font-size: 2rem !important;
      color: #2C3338 !important;
      text-align: center !important;
      margin-bottom: 1rem !important;
    }
    
    p.jeu-intro {
      text-align: center !important;
      color: #6B7280 !important;
      font-size: 1.1rem !important;
      margin-bottom: 2rem !important;
      max-width: 600px !important;
      margin-left: auto !important;
      margin-right: auto !important;
    }
    
    /* Wrapper iframe */
    div.jeu-wrapper {
      background: white !important;
      border-radius: 1rem !important;
      padding: 1rem !important;
      box-shadow: 0 8px 32px rgba(212, 165, 116, 0.15) !important;
      overflow: hidden !important;
    }
    
    div.jeu-wrapper iframe {
      display: block !important;
      border: none !important;
      border-radius: 0.5rem !important;
      width: 100% !important;
      min-height: 600px !important;
    }
    
    p.jeu-credit {
      text-align: center !important;
      font-size: 0.875rem !important;
      color: #6B7280 !important;
      margin-top: 1rem !important;
      font-style: italic !important;
    }
    
    p.jeu-credit a {
      color: #D4A574 !important;
      text-decoration: none !important;
      font-weight: 500 !important;
    }
    
    p.jeu-credit a:hover {
      color: #2C3338 !important;
      text-decoration: underline !important;
    }
    
    /* Boutons */
    div.jeu-boutons {
      display: flex !important;
      gap: 1rem !important;
      justify-content: center !important;
      margin-top: 1.5rem !important;
      flex-wrap: wrap !important;
    }
    
    a.btn-jeu {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 1rem 2rem !important;
      border-radius: 3rem !important;
      font-size: 1.125rem !important;
      font-weight: 600 !important;
      text-decoration: none !important;
      font-family: 'Inter', sans-serif !important;
      transition: all 0.3s ease !important;
      cursor: pointer !important;
    }
    
    a.btn-jeu-primaire {
      background: linear-gradient(135deg, #D4A574 0%, #C4956A 100%) !important;
      color: white !important;
      box-shadow: 0 4px 16px rgba(212, 165, 116, 0.3) !important;
    }
    
    a.btn-jeu-primaire:hover {
      transform: translateY(-3px) !important;
      box-shadow: 0 8px 24px rgba(212, 165, 116, 0.4) !important;
    }
    
    a.btn-jeu-secondaire {
      background: white !important;
      color: #D4A574 !important;
      border: 2px solid #D4A574 !important;
    }
    
    a.btn-jeu-secondaire:hover {
      background: #D4A574 !important;
      color: white !important;
      transform: translateY(-3px) !important;
      box-shadow: 0 4px 16px rgba(212, 165, 116, 0.2) !important;
    }
    
    /* Cartes jeux similaires */
    div.jeux-similaires {
      display: grid !important;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
      gap: 1.5rem !important;
      margin: 2rem 0 !important;
    }
    
    a.jeu-card {
      background: white !important;
      padding: 1.5rem !important;
      border-radius: 1rem !important;
      border: 2px solid #F5F1EB !important;
      text-decoration: none !important;
      transition: all 0.3s ease !important;
      display: block !important;
    }
    
    a.jeu-card:hover {
      border-color: #D4A574 !important;
      transform: translateY(-4px) !important;
      box-shadow: 0 8px 24px rgba(212, 165, 116, 0.15) !important;
    }
    
    a.jeu-card h4 {
      font-family: 'Lora', serif !important;
      font-size: 1.5rem !important;
      color: #2C3338 !important;
      margin-bottom: 0.5rem !important;
    }
    
    a.jeu-card p {
      color: #6B7280 !important;
      font-size: 0.95rem !important;
      line-height: 1.6 !important;
      margin: 0 !important;
    }
    
    /* Bouton retour */
    a.btn-retour {
      display: inline-block !important;
      padding: 0.875rem 2rem !important;
      background: #F5F1EB !important;
      color: #2C3338 !important;
      text-decoration: none !important;
      border-radius: 2rem !important;
      font-weight: 500 !important;
      transition: all 0.3s ease !important;
      margin-top: 2rem !important;
    }
    
    a.btn-retour:hover {
      background: #D4A574 !important;
      color: white !important;
      transform: translateX(-4px) !important;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      section.jeu-section {
        padding: 2rem 1rem !important;
        margin: 2rem 0 !important;
      }
      
      h2.jeu-titre {
        font-size: 1.5rem !important;
      }
      
      p.jeu-intro {
        font-size: 1rem !important;
      }
      
      div.jeu-wrapper {
        padding: 0.5rem !important;
      }
      
      div.jeu-wrapper iframe {
        min-height: 500px !important;
      }
      
      a.btn-jeu {
        font-size: 1rem !important;
        padding: 0.875rem 1.5rem !important;
        width: 100% !important;
        justify-content: center !important;
      }
      
      div.jeu-boutons {
        flex-direction: column !important;
      }
      
      div.jeux-similaires {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
      }
    }
    
    @media (max-width: 480px) {
      section.jeu-section {
        padding: 1.5rem 0.5rem !important;
      }
      
      div.jeu-wrapper iframe {
        min-height: 400px !important;
      }
      
      a.btn-jeu {
        font-size: 0.95rem !important;
        padding: 0.75rem 1.25rem !important;
      }
    }
  </style>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- ARTICLE PRINCIPAL -->
  <article class="article-solo">
    
    <!-- HERO SECTION -->
    <header class="article-hero">
      <div class="article-hero-content">
        <span class="article-badge">Jeux en Solo</span>
        <h1>Solitaire Klondike : Le roi des jeux de patience</h1>
        <p class="article-lead">
          Depuis plus d'un siècle, le Solitaire Klondike accompagne nos moments de solitude. 
          Un jeu de cartes qui transforme l'attente en méditation, le hasard en stratégie.
        </p>
        <div class="article-meta">
          <span>📖 12 min de lecture</span>
          <span>🎴 Niveau : Débutant à Expert</span>
          <span>📅 11 décembre 2025</span>
        </div>
      </div>
    </header>

    <!-- SECTION JEU INTÉGRÉ -->
    <section class="jeu-section">
      <div class="jeu-container">
        <h2 class="jeu-titre">🎮 Jouer maintenant</h2>
        <p class="jeu-intro">
          Envie de jouer tout de suite ? Voici le véritable Solitaire Klondike, 
          accessible directement depuis votre navigateur. Aucune installation requise.
        </p>
        
        <!-- Options de jeu -->
        <div class="jeu-options">
          
          <!-- Option 1: Jeu intégré -->
          <div class="jeu-integre">
            <div class="jeu-wrapper">
              <iframe 
                src="https://b6.games/solitaire/?lang=fr" 
                width="100%" 
                height="600"
                frameborder="0"
                allowfullscreen
                loading="lazy"
                title="Solitaire Klondike - Jouer en ligne">
              </iframe>
            </div>
            <p class="jeu-credit">
              Jeu fourni par <a href="https://b6.games" target="_blank" rel="noopener">B6 Games</a> 
              — Votre vitamine pour le cerveau
            </p>
          </div>

          <!-- Option 2: Boutons externes -->
          <div class="jeu-boutons">
            <a href="https://b6.games/solitaire/?lang=fr" 
               target="_blank" 
               rel="noopener"
               class="btn-jeu btn-jeu-primaire">
              🎴 Jouer en plein écran
            </a>
            <a href="https://b6.games/solitaire-kingdom" 
               target="_blank" 
               rel="noopener"
               class="btn-jeu btn-jeu-secondaire">
              📱 Version mobile
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTENU ARTICLE -->
    <div class="article-content">

      <!-- L'HISTOIRE -->
      <section class="article-section">
        <h2>📜 Une histoire qui remonte à la ruée vers l'or</h2>
        
        <p>
          Le Solitaire Klondike tire son nom de la région du Klondike, au Yukon canadien, 
          théâtre de la célèbre ruée vers l'or de 1896. Les chercheurs d'or, isolés dans 
          leurs cabanes durant les longs hivers, trouvaient réconfort dans ce jeu de cartes.
        </p>

        <p>
          Mais c'est en 1990 que le Klondike devient un phénomène mondial : Microsoft l'inclut 
          dans Windows 3.0. En quelques années, il devient <strong>le jeu le plus joué au monde</strong>, 
          transformant des millions d'ordinateurs en tables de cartes virtuelles.
        </p>

        <blockquote class="article-quote">
          "Le Solitaire n'est pas un jeu contre l'ordinateur. C'est un dialogue silencieux 
          avec le hasard, une méditation sur l'ordre et le chaos."
        </blockquote>

        <p>
          Aujourd'hui encore, le Klondike reste le jeu de patience par excellence — celui 
          qu'on lance machinalement, celui qui accompagne nos pauses, celui qui transforme 
          l'ennui en concentration tranquille.
        </p>
      </section>

      <!-- LES RÈGLES -->
      <section class="article-section">
        <h2>🎯 Les règles du Klondike</h2>

        <h3>Le but du jeu</h3>
        <p>
          Construire quatre piles (les "fondations") en ordre croissant, de l'As au Roi, 
          une pile par couleur (♠️ Pique, ♥️ Cœur, ♦️ Carreau, ♣️ Trèfle).
        </p>

        <h3>La mise en place</h3>
        <ul>
          <li><strong>7 colonnes</strong> de cartes face cachée (le "tableau")</li>
          <li><strong>La pioche</strong> avec les cartes restantes</li>
          <li><strong>4 emplacements vides</strong> pour les fondations</li>
        </ul>

        <div class="article-tip">
          <strong>💡 Astuce débutant :</strong> Concentrez-vous d'abord sur libérer 
          les cartes face cachée. Chaque carte révélée ouvre de nouvelles possibilités.
        </div>

        <h3>Les mouvements autorisés</h3>
        <ul>
          <li>Dans le tableau : placer une carte sur une autre de couleur opposée et de valeur immédiatement supérieure (ex: 6♥️ sur 7♠️)</li>
          <li>Vers les fondations : placer un As sur une case vide, puis construire dans l'ordre (2, 3, 4...)</li>
          <li>Déplacer des séquences complètes d'un coup</li>
          <li>Placer un Roi sur une colonne vide</li>
        </ul>
      </section>

      <!-- STRATÉGIES -->
      <section class="article-section">
        <h2>🧠 Stratégies pour gagner</h2>

        <h3>1. Libérez les colonnes rapidement</h3>
        <p>
          Une colonne vide est votre meilleur atout. Elle vous permet de déplacer des Rois 
          et de réorganiser tout le tableau. Priorisez toujours la libération des colonnes 
          les plus courtes.
        </p>

        <h3>2. Ne montez pas trop vite aux fondations</h3>
        <p>
          C'est l'erreur classique : monter chaque As dès qu'il apparaît. Parfois, il vaut 
          mieux garder certaines cartes dans le tableau pour créer des combinaisons. 
          Montez aux fondations seulement quand vous êtes sûr de ne plus avoir besoin de ces cartes.
        </p>

        <div class="article-warning">
          <strong>⚠️ Piège fréquent :</strong> Monter le 2♥️ alors que vous avez besoin 
          du 3♠️ pour libérer une colonne. Pensez toujours deux coups à l'avance.
        </div>

        <h3>3. Retournez la pioche avec méthode</h3>
        <p>
          La pioche est votre réserve de solutions. Ne la parcourez pas au hasard. 
          Mémorisez les cartes importantes et attendez le bon moment pour les utiliser.
        </p>

        <h3>4. Les Rois et les As d'abord</h3>
        <p>
          Votre priorité : révéler les Rois (pour occuper les colonnes vides) et les As 
          (pour démarrer les fondations). Chaque mouvement devrait vous rapprocher de ces objectifs.
        </p>

        <blockquote class="article-quote">
          "Le Solitaire récompense la patience, pas la vitesse. Chaque carte révélée 
          est une porte qui s'ouvre sur de nouvelles possibilités."
        </blockquote>
      </section>

      <!-- VARIANTES -->
      <section class="article-section">
        <h2>🎴 Les variantes du Klondike</h2>

        <h3>Klondike 1 carte (Turn One)</h3>
        <p>
          La version standard : vous retournez une carte à la fois de la pioche. 
          Plus facile, idéale pour débuter.
        </p>

        <h3>Klondike 3 cartes (Turn Three)</h3>
        <p>
          La version experte : vous retournez trois cartes d'un coup, mais seule la 
          dernière est jouable. Demande beaucoup plus de stratégie et de mémorisation.
        </p>

        <h3>Double Klondike</h3>
        <p>
          Avec deux jeux de 52 cartes mélangés ensemble. Un défi pour les joueurs 
          chevronnés cherchant des parties marathon.
        </p>

        <div class="article-tip">
          <strong>🎯 Pour progresser :</strong> Commencez par Turn One jusqu'à atteindre 
          50% de victoires, puis passez au Turn Three. La différence de difficulté est énorme.
        </div>
      </section>

      <!-- PHILOSOPHIE -->
      <section class="article-section">
        <h2>🌿 Le Solitaire comme pratique méditative</h2>

        <p>
          Au-delà du jeu, le Solitaire Klondike offre quelque chose de rare : 
          <strong>un moment de présence pure</strong>. Pas de chronomètre, pas d'adversaire, 
          pas de jugement. Juste vous, les cartes, et les possibilités qui se dévoilent.
        </p>

        <p>
          Dans nos vies hyperconnectées, une partie de Solitaire devient presque subversive. 
          C'est accepter de ralentir, de se concentrer sur une seule chose, de trouver 
          satisfaction dans un ordre que l'on crée soi-même.
        </p>

        <blockquote class="article-quote">
          "Jouer au Solitaire, c'est accepter que certaines parties sont gagnables, 
          d'autres non. C'est apprendre à apprécier la danse avec le hasard, 
          sans s'acharner sur ce qu'on ne peut contrôler."
        </blockquote>

        <p>
          Les chercheurs d'or du Klondike l'avaient compris : dans la solitude des longues 
          nuits d'hiver, ce jeu de cartes n'était pas une distraction, mais une ancre. 
          Un rituel qui structure le temps, qui apaise l'esprit, qui transforme l'isolement 
          en choix plutôt qu'en fatalité.
        </p>
      </section>

      <!-- STATISTIQUES -->
      <section class="article-section">
        <h2>📊 Quelques chiffres fascinants</h2>

        <ul>
          <li>🎲 <strong>1 partie sur 3</strong> est mathématiquement gagnable en Turn One</li>
          <li>📈 <strong>Seulement 1 sur 30</strong> en Turn Three (d'où la difficulté !)</li>
          <li>⏱️ Une partie moyenne dure <strong>5 à 15 minutes</strong></li>
          <li>🏆 Le record de vitesse est de <strong>moins de 2 minutes</strong></li>
          <li>🌍 Plus de <strong>500 millions de parties</strong> jouées chaque année dans le monde</li>
        </ul>

        <div class="article-tip">
          <strong>💚 L'approche Soloplugs :</strong> Oubliez les statistiques et les records. 
          Jouez pour le plaisir de jouer, pour les 10 minutes de calme, pour la satisfaction 
          de voir l'ordre émerger du chaos. Victoire ou défaite, chaque partie a sa valeur.
        </div>
      </section>

      <!-- AUTRES JEUX -->
      <section class="article-section">
        <h2>🎮 Envie de découvrir d'autres jeux solo ?</h2>

        <p>Le Klondike n'est que le début. B6.games propose 18 variantes de Solitaire :</p>

        <div class="jeux-similaires">
          <a href="https://b6.games/freecell/?lang=fr" target="_blank" class="jeu-card">
            <h4>♠️ FreeCell</h4>
            <p>Presque toutes les parties sont gagnables. Le Solitaire des stratèges.</p>
          </a>
          
          <a href="https://b6.games/spider/?lang=fr" target="_blank" class="jeu-card">
            <h4>🕷️ Spider</h4>
            <p>Huit colonnes, deux jeux de cartes. Le défi ultime.</p>
          </a>
          
          <a href="https://b6.games/pyramid/?lang=fr" target="_blank" class="jeu-card">
            <h4>🔺 Pyramid</h4>
            <p>Additionner pour déconstruire. Simple et addictif.</p>
          </a>
        </div>

        <p class="text-center">
          <a href="../magazine.php#jeux" class="btn-retour">
            ← Retour aux jeux en solo
          </a>
        </p>
      </section>

    </div>

  </article>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
