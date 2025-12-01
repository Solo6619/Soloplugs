<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Vivre solo — L\'art de vivre seul·e';
    $pageDescription = 'Découvrez l\'art de vivre seul·e avec Soloplugs. Ressources, conseils et accompagnement pour transformer votre solitude en force.';
    $basePath = '../';
    $currentPage = '';
    $additionalCSS = ['vivre-solo-enhanced.css'];
    
    include '../components/head.php';
  ?>
  <!-- Typographies spécifiques -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <?php include '../components/header.php'; ?>


  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero-vivre-solo">
    <div class="hero-content">
      
      <!-- Icône SVG personnalisée : Maison chaleureuse -->
      <div class="hero-icon">
        <svg viewBox="0 0 100 100" width="100" height="100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Maison -->
          <path d="M50 10L10 45V90H40V65C40 62 42 60 45 60H55C58 60 60 62 60 65V90H90V45L50 10Z" 
                stroke="#D4A574" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          <!-- Toit avec cheminée -->
          <path d="M75 25V15H85V35" stroke="#D4A574" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          <!-- Fenêtre -->
          <rect x="30" y="50" width="15" height="15" rx="2" stroke="#D4A574" stroke-width="2.5" fill="none"/>
          <line x1="37.5" y1="50" x2="37.5" y2="65" stroke="#D4A574" stroke-width="2"/>
          <line x1="30" y1="57.5" x2="45" y2="57.5" stroke="#D4A574" stroke-width="2"/>
          <!-- Fumée -->
          <path d="M80 10C80 10 82 5 78 3" stroke="#D4A574" stroke-width="2" stroke-linecap="round" opacity="0.6">
            <animate attributeName="d" 
                     values="M80 10C80 10 82 5 78 3;M80 10C80 10 78 5 82 3;M80 10C80 10 82 5 78 3" 
                     dur="3s" repeatCount="indefinite"/>
          </path>
          <!-- Cœur dans la maison -->
          <path d="M55 42C55 38 60 35 63 38C66 35 71 38 71 42C71 48 63 54 63 54C63 54 55 48 55 42Z" 
                fill="#D4A574" opacity="0.3"/>
        </svg>
      </div>

      <!-- Ornement -->
      <div class="hero-ornament">
        <span class="hero-ornament-line"></span>
        <span class="hero-ornament-diamond"></span>
        <span class="hero-ornament-line"></span>
      </div>

      <!-- Titre -->
      <h1 class="hero-title">Vivre solo</h1>
      
      <!-- Sous-titre -->
      <p class="hero-subtitle">L'art de vivre seul·e</p>
      
      <!-- Description -->
      <p class="hero-description">
        Vivre seul·e n'est ni une épreuve ni un échec. C'est un art à cultiver, 
        une autonomie à célébrer, une relation à soi-même à apprivoiser.
      </p>

      <!-- Citation -->
      <div class="hero-quote">
        Je n'ai jamais trouvé de compagnon qui me tînt aussi bonne compagnie que la solitude.
        <cite>— Henry David Thoreau</cite>
      </div>

    </div>
  </section>

  <!-- ============================================================
       SECTION : LES DEUX VISAGES
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Les deux visages de la solitude</h2>
        <p>
          La solitude a mille nuances. Elle peut être choisie ou subie, 
          refuge ou vertige. Comprendre cette distinction est essentiel.
        </p>
      </div>

      <div class="duality-grid">
        
        <!-- Solitude choisie -->
        <div class="duality-card animate-on-scroll">
          <div class="duality-icon">
            <!-- SVG Soleil -->
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="25" cy="25" r="10" stroke-width="2.5" fill="none"/>
              <line x1="25" y1="5" x2="25" y2="10" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="25" y1="40" x2="25" y2="45" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="5" y1="25" x2="10" y2="25" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="40" y1="25" x2="45" y2="25" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="10.86" y1="10.86" x2="14.4" y2="14.4" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="35.6" y1="35.6" x2="39.14" y2="39.14" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="10.86" y1="39.14" x2="14.4" y2="35.6" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="35.6" y1="14.4" x2="39.14" y2="10.86" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Solitude choisie</h3>
          <p>
            C'est la solitude que l'on cultive volontairement. Un temps pour soi, 
            un espace de création, de réflexion, de ressourcement.
          </p>
          <p>
            Elle est source de liberté, d'autonomie et de croissance personnelle. 
            Une pratique philosophique millénaire, des ermites aux philosophes stoïciens.
          </p>
          <p class="duality-quote">
            « On ne peut être vraiment soi qu'aussi longtemps qu'on est seul » — Schopenhauer
          </p>
        </div>

        <!-- Isolement subi -->
        <div class="duality-card card-isolation animate-on-scroll animate-delay-1">
          <div class="duality-icon">
            <!-- SVG Lune -->
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M35 25C35 14.5 26.5 6 16 6C14.5 6 13 6.2 11.6 6.5C17.4 9.5 21.5 15.6 21.5 22.7C21.5 29.8 17.4 35.9 11.6 38.9C13 39.2 14.5 39.4 16 39.4C26.5 39.4 35 31 35 20.5" 
                    stroke-width="2.5" stroke-linecap="round" fill="none"/>
              <circle cx="30" cy="12" r="1.5" fill="currentColor" opacity="0.5"/>
              <circle cx="38" cy="20" r="1" fill="currentColor" opacity="0.4"/>
              <circle cx="42" cy="30" r="1.5" fill="currentColor" opacity="0.3"/>
            </svg>
          </div>
          <h3>Isolement subi</h3>
          <p>
            C'est la solitude non désirée, celle qui s'impose à nous. 
            Une rupture des liens, un manque de connexion, une sensation d'être seul·e au milieu du monde.
          </p>
          <p>
            Elle peut être douloureuse et fragilisante. Mais elle n'est pas une fatalité. 
            Avec du soutien et des outils, on peut transformer l'isolement en chemin vers soi.
          </p>
          <p class="duality-quote">
            Soloplugs est là pour t'accompagner, quelle que soit ton expérience de la solitude.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : LES DÉFIS UNIVERSELS
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Les défis universels du vivre seul·e</h2>
        <p>
          Vivre seul·e comporte ses défis pratiques, émotionnels et sociaux. 
          Les reconnaître, c'est déjà commencer à les apprivoiser.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Défi 1 : Le silence -->
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 25C8 25 15 10 25 10C35 10 42 25 42 25C42 25 35 40 25 40C15 40 8 25 8 25Z" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="25" cy="25" r="6" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="25" cy="25" r="2" fill="currentColor"/>
              <line x1="5" y1="45" x2="45" y2="5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Le poids du silence</h3>
          <p>
            Les dimanches qui s'étirent, les soirées sans bruit, 
            l'absence de voix familières. Le silence peut peser.
          </p>
          <p><strong>Pistes :</strong></p>
          <ul>
            <li>Créer des rituels sonores (podcasts, musique)</li>
            <li>Apprivoiser le silence comme espace créatif</li>
            <li>Pratiquer l'écriture ou le journal intime</li>
          </ul>
        </div>

        <!-- Défi 2 : Le regard -->
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="18" cy="20" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="32" cy="20" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="25" cy="38" r="6" stroke="currentColor" stroke-width="2" fill="none"/>
              <line x1="18" y1="28" x2="22" y2="33" stroke="currentColor" stroke-width="2"/>
              <line x1="32" y1="28" x2="28" y2="33" stroke="currentColor" stroke-width="2"/>
            </svg>
          </div>
          <h3>Le regard des autres</h3>
          <p>
            « Et toi, tu vis seul·e ? » La question anodine qui charrie son lot 
            de jugements silencieux et de pitié maladroite.
          </p>
          <p><strong>Pistes :</strong></p>
          <ul>
            <li>Assumer son choix ou sa situation</li>
            <li>Éduquer son entourage avec douceur</li>
            <li>Trouver sa tribu de solitaires assumés</li>
          </ul>
        </div>

        <!-- Défi 3 : L'autonomie -->
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25 5L30 20H45L33 30L38 45L25 35L12 45L17 30L5 20H20L25 5Z" stroke="currentColor" stroke-width="2" fill="none" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3>L'autonomie totale</h3>
          <p>
            Tout gérer seul·e : les courses, le ménage, les décisions, 
            les réparations. Ça peut être libérateur... ou épuisant.
          </p>
          <p><strong>Pistes :</strong></p>
          <ul>
            <li>Créer des routines efficaces</li>
            <li>Accepter de demander de l'aide</li>
            <li>Célébrer ses victoires quotidiennes</li>
          </ul>
        </div>

        <!-- Défi 4 : Les creux -->
        <div class="theme-card animate-on-scroll animate-delay-3">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 35C10 25 15 30 20 25C25 20 30 28 35 22C40 16 45 20 50 15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>
              <circle cx="25" cy="25" r="20" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="4 4"/>
            </svg>
          </div>
          <h3>Les moments de creux</h3>
          <p>
            Les coups de blues, les questions existentielles à 3h du matin, 
            le sentiment de passer à côté de quelque chose.
          </p>
          <p><strong>Pistes :</strong></p>
          <ul>
            <li>Construire son réseau de soutien</li>
            <li>Tenir un journal (découvre Soli)</li>
            <li>Avoir des ressources d'urgence à portée</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CITATION
       ============================================================ -->
  <section class="section">
    <div class="container-narrow">
      <blockquote class="quote-block animate-on-scroll">
        <p>
          L'isolement n'est pas la destination naturelle de la solitude, 
          c'est un égarement sur le chemin. Vivre seul·e, c'est apprendre 
          l'art de sa propre compagnie.
        </p>
        <cite>— Philosophie Soloplugs</cite>
      </blockquote>
    </div>
  </section>

  <!-- ============================================================
       SECTION : RESSOURCES
       ============================================================ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-header">
        <h2>Ressources pour bien vivre seul·e</h2>
        <p>
          Des guides pratiques, des outils et des inspirations pour transformer 
          ton quotidien solo en expérience épanouissante.
        </p>
      </div>

      <div class="cards-grid">
        
        <!-- Ressource 1 -->
        <div class="theme-card animate-on-scroll">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 8V42H42" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M8 8H12V35H8" stroke="currentColor" stroke-width="2"/>
              <path d="M15 12H19V35H15" stroke="currentColor" stroke-width="2"/>
              <path d="M22 8H26V35H22" stroke="currentColor" stroke-width="2"/>
              <path d="M29 15H33V35H29" stroke="currentColor" stroke-width="2"/>
              <path d="M36 10H40V35H36" stroke="currentColor" stroke-width="2"/>
            </svg>
          </div>
          <h3>Guides pratiques</h3>
          <ul>
            <li>Créer une routine quotidienne ressourçante</li>
            <li>Aménager son espace pour se sentir bien</li>
            <li>Gérer les finances en solo</li>
            <li>Cuisiner pour soi avec plaisir</li>
            <li>Organiser ses tâches domestiques</li>
          </ul>
        </div>

        <!-- Ressource 2 -->
        <div class="theme-card animate-on-scroll animate-delay-1">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="25" cy="25" r="20" stroke="currentColor" stroke-width="2" fill="none"/>
              <path d="M15 30C15 30 20 35 25 35C30 35 35 30 35 30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <circle cx="18" cy="20" r="2" fill="currentColor"/>
              <circle cx="32" cy="20" r="2" fill="currentColor"/>
              <path d="M25 5V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M25 40V45" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3>Pratiques créatives</h3>
          <ul>
            <li>Tenir un journal intime (découvre Soli)</li>
            <li>Photographie contemplative</li>
            <li>Écriture de soi</li>
            <li>Créations manuelles</li>
            <li>Jardinage en solo</li>
          </ul>
        </div>

        <!-- Ressource 3 -->
        <div class="theme-card animate-on-scroll animate-delay-2">
          <div class="card-icon">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25 5C15 5 8 15 8 25C8 35 15 42 20 45L25 50L30 45C35 42 42 35 42 25C42 15 35 5 25 5Z" stroke="currentColor" stroke-width="2" fill="none"/>
              <path d="M20 20V35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M20 20C20 17 22 15 25 15C28 15 30 17 30 20C30 23 28 25 25 25H20" stroke="currentColor" stroke-width="2" fill="none"/>
              <path d="M30 25C30 25 33 25 33 28C33 31 30 33 27 33" stroke="currentColor" stroke-width="2" fill="none"/>
            </svg>
          </div>
          <h3>Développement personnel</h3>
          <ul>
            <li>Méditation et pleine conscience</li>
            <li>Lectures philosophiques sur la solitude</li>
            <li>Exercices d'introspection guidée</li>
            <li>Rituels de gratitude</li>
            <li>Slow living et minimalisme</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION : ARTICLES DU MAGAZINE
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2>Articles sur le vivre solo</h2>
        <p>
          Découvre nos articles, témoignages et conseils pour enrichir 
          ton expérience de vie en solo.
        </p>
      </div>

      <div class="articles-grid">
        
        <!-- Article 1 -->
        <article class="article-card animate-on-scroll">
          <div class="article-image">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
              <circle cx="30" cy="25" r="15" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M15 50C15 50 20 35 30 35C40 35 45 50 45 50" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M5 55H55" stroke="#D4A574" stroke-width="2"/>
            </svg>
          </div>
          <div class="article-content">
            <h3>La beauté des petits matins</h3>
            <p>
              Ces heures calmes où le monde semble attendre. Un temps pour soi, 
              avant le bruit du jour. Comment cultiver ces moments précieux.
            </p>
            <a href="../magazine.html" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

        <!-- Article 2 -->
        <article class="article-card animate-on-scroll animate-delay-1">
          <div class="article-image">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path d="M15 45V15H45V45H15Z" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M20 25H40" stroke="#D4A574" stroke-width="2"/>
              <path d="M20 32H35" stroke="#D4A574" stroke-width="2"/>
              <path d="M20 39H30" stroke="#D4A574" stroke-width="2"/>
              <circle cx="42" cy="42" r="10" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M42 37V42L45 45" stroke="#D4A574" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="article-content">
            <h3>Rituels du quotidien</h3>
            <p>
              Le thé du matin, la balade du dimanche, le livre du soir. 
              Créer des rituels qui structurent et embellissent la vie solo.
            </p>
            <a href="../magazine.html" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

        <!-- Article 3 -->
        <article class="article-card animate-on-scroll animate-delay-2">
          <div class="article-image">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path d="M10 50L30 15L50 50H10Z" stroke="#D4A574" stroke-width="2" fill="none"/>
              <rect x="25" y="35" width="10" height="15" stroke="#D4A574" stroke-width="2" fill="none"/>
              <circle cx="30" cy="25" r="3" stroke="#D4A574" stroke-width="2" fill="none"/>
              <path d="M5 50H55" stroke="#D4A574" stroke-width="2"/>
            </svg>
          </div>
          <div class="article-content">
            <h3>Aménager son cocon</h3>
            <p>
              Comment créer un espace qui nous ressemble et nous nourrit. 
              Du minimalisme scandinave au nid douillet personnalisé.
            </p>
            <a href="../magazine.html" class="article-link">
              Lire l'article
              <svg viewBox="0 0 20 20" fill="none">
                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </article>

      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="../magazine.html" class="btn btn-primary" style="background: var(--vs-gold); color: white; border-color: var(--vs-gold);">
          Voir tous les articles
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA : SOLO & SOLI
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="cta-section animate-on-scroll">
        <h2>Besoin d'accompagnement ?</h2>
        <p>
          Que tu cherches des réponses ou un espace pour te retrouver, 
          Solo et Soli sont là pour toi.
        </p>
        <div class="btn-group">
          <a href="../solo.html" class="btn btn-primary">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="2"/>
              <path d="M10 6V10L13 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Découvrir Solo
          </a>
          <a href="../soli.html" class="btn btn-secondary">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M4 4H16V16H4V4Z" stroke="currentColor" stroke-width="2"/>
              <path d="M7 8H13" stroke="currentColor" stroke-width="2"/>
              <path d="M7 12H11" stroke="currentColor" stroke-width="2"/>
            </svg>
            Essayer Soli
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
