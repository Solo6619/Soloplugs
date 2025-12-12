<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'La solitude invisible — Solo Magazine';
    $pageDescription = 'On peut être entouré et se sentir profondément seul. La solitude ne dépend pas du fait d'être seul ou entouré.';
    $basePath = '../';
    $currentPage = 'magazine';
    $additionalCSS = ['magazine.css'];
    
    include '../components/head.php';
  ?>
  
  <style>
    /* ============================================================
       STYLES ARTICLE MAGAZINE
       ============================================================ */
    
    .article-hero {
      background: linear-gradient(135deg, var(--gold-pale, #F5EDE3) 0%, var(--cream, #FBF9F6) 100%);
      padding: 4rem 2rem;
      text-align: center;
      border-bottom: 3px solid var(--gold, #D4A574);
    }

    .article-category {
      display: inline-block;
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      color: var(--gold-dark, #B8956A);
      background: white;
      padding: 0.4rem 1rem;
      border-radius: 2rem;
      margin-bottom: 1.5rem;
    }

    .article-title {
      font-family: 'Lora', serif;
      font-size: clamp(2rem, 5vw, 3.5rem);
      font-weight: 600;
      color: var(--text, #2C2C2C);
      max-width: 800px;
      margin: 0 auto 1rem;
      line-height: 1.2;
    }

    .article-subtitle {
      font-family: 'Lora', serif;
      font-size: 1.25rem;
      font-style: italic;
      color: var(--text-soft, #5A5A5A);
      max-width: 600px;
      margin: 0 auto;
    }

    .article-container {
      max-width: 720px;
      margin: 0 auto;
      padding: 3rem 2rem 4rem;
    }

    .article-intro {
      font-family: 'Lora', serif;
      font-size: 1.35rem;
      font-style: italic;
      color: var(--text, #2C2C2C);
      line-height: 1.8;
      margin-bottom: 2.5rem;
      padding-bottom: 2.5rem;
      border-bottom: 1px solid var(--gold-light, #E8D4B8);
    }

    .article-body p {
      font-size: 1.1rem;
      color: var(--text-soft, #5A5A5A);
      margin-bottom: 1.5rem;
      line-height: 1.85;
    }

    .article-body p:first-of-type::first-letter {
      font-family: 'Lora', serif;
      font-size: 4rem;
      font-weight: 600;
      float: left;
      line-height: 1;
      margin-right: 0.75rem;
      margin-top: 0.1rem;
      color: var(--gold, #D4A574);
    }

    /* Citation encadrée */
    .article-highlight {
      background: white;
      border-left: 4px solid var(--gold, #D4A574);
      padding: 2rem 2.5rem;
      margin: 2.5rem 0;
      border-radius: 0 1rem 1rem 0;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .article-highlight p {
      font-family: 'Lora', serif;
      font-size: 1.2rem;
      font-style: italic;
      color: var(--text, #2C2C2C);
      margin: 0;
      line-height: 1.7;
    }

    /* Liste des 3 réalités */
    .reality-list {
      background: white;
      border-radius: 1rem;
      padding: 2rem;
      margin: 2.5rem 0;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .reality-list h3 {
      font-family: 'Lora', serif;
      font-size: 1.1rem;
      color: var(--text, #2C2C2C);
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .reality-item {
      display: flex;
      gap: 1rem;
      align-items: flex-start;
      padding: 1rem 0;
      border-bottom: 1px solid var(--gold-pale, #F5EDE3);
    }

    .reality-item:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }

    .reality-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      flex-shrink: 0;
    }

    .reality-icon.positive { background: #E8F5E9; }
    .reality-icon.negative { background: #FFEBEE; }
    .reality-icon.paradox { background: #FFF3E0; }

    .reality-content strong {
      display: block;
      font-family: 'Lora', serif;
      font-size: 1rem;
      color: var(--text, #2C2C2C);
      margin-bottom: 0.25rem;
    }

    .reality-content span {
      font-size: 0.95rem;
      color: var(--text-soft, #5A5A5A);
    }

    /* Encadré "À retenir" */
    .takeaway-box {
      background: linear-gradient(135deg, var(--gold, #D4A574) 0%, var(--gold-dark, #B8956A) 100%);
      color: white;
      border-radius: 1rem;
      padding: 2.5rem;
      margin: 3rem 0;
      position: relative;
      overflow: hidden;
    }

    .takeaway-box::before {
      content: '"';
      font-family: 'Lora', serif;
      font-size: 8rem;
      position: absolute;
      top: -1rem;
      left: 1rem;
      opacity: 0.15;
      line-height: 1;
    }

    .takeaway-box h4 {
      font-family: 'Lora', serif;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 1.25rem;
      opacity: 0.9;
    }

    .takeaway-box ul {
      list-style: none;
      margin-bottom: 1.5rem;
      padding: 0;
    }

    .takeaway-box li {
      position: relative;
      padding-left: 1.5rem;
      margin-bottom: 0.75rem;
      font-size: 1.05rem;
      line-height: 1.6;
    }

    .takeaway-box li::before {
      content: '→';
      position: absolute;
      left: 0;
      opacity: 0.7;
    }

    .takeaway-conclusion {
      font-family: 'Lora', serif;
      font-style: italic;
      font-size: 1.1rem;
      padding-top: 1rem;
      border-top: 1px solid rgba(255, 255, 255, 0.3);
      margin-top: 1rem;
    }

    /* Footer article */
    .article-footer {
      text-align: center;
      padding: 2rem 0;
      border-top: 1px solid var(--gold-light, #E8D4B8);
      margin-top: 2rem;
    }

    .article-tags {
      display: flex;
      justify-content: center;
      gap: 0.75rem;
      flex-wrap: wrap;
      margin-bottom: 1.5rem;
    }

    .article-tag {
      font-size: 0.8rem;
      color: var(--gold-dark, #B8956A);
      background: var(--gold-pale, #F5EDE3);
      padding: 0.4rem 1rem;
      border-radius: 2rem;
      text-decoration: none;
      transition: all 0.3s;
    }

    .article-tag:hover {
      background: var(--gold, #D4A574);
      color: white;
    }

    /* CTA Soloplugs */
    .cta-soloplugs {
      background: white;
      border: 2px solid var(--gold-light, #E8D4B8);
      border-radius: 1rem;
      padding: 2.5rem;
      text-align: center;
      margin-top: 2rem;
    }

    .cta-soloplugs h3 {
      font-family: 'Lora', serif;
      font-size: 1.5rem;
      color: var(--text, #2C2C2C);
      margin-bottom: 0.75rem;
    }

    .cta-soloplugs p {
      color: var(--text-soft, #5A5A5A);
      margin-bottom: 1.5rem;
      font-size: 1rem;
    }

    .cta-button {
      display: inline-block;
      background: var(--gold, #D4A574);
      color: white;
      font-weight: 600;
      padding: 0.9rem 2rem;
      border-radius: 2rem;
      text-decoration: none;
      transition: all 0.3s;
    }

    .cta-button:hover {
      background: var(--gold-dark, #B8956A);
      transform: translateY(-2px);
    }

    /* Navigation article */
    .article-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 2rem;
      background: white;
      border-bottom: 1px solid var(--gold-light, #E8D4B8);
    }

    .article-nav a {
      color: var(--gold-dark, #B8956A);
      text-decoration: none;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: color 0.3s;
    }

    .article-nav a:hover {
      color: var(--gold, #D4A574);
    }

    .article-nav .back-link::before {
      content: '←';
    }

    .article-meta {
      font-size: 0.85rem;
      color: var(--text-light, #888);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .article-hero {
        padding: 3rem 1.5rem;
      }

      .article-container {
        padding: 2rem 1.5rem;
      }

      .article-intro {
        font-size: 1.15rem;
      }

      .article-body p {
        font-size: 1rem;
      }

      .takeaway-box {
        padding: 2rem 1.5rem;
      }

      .reality-list {
        padding: 1.5rem;
      }

      .article-nav {
        flex-direction: column;
        gap: 0.5rem;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <?php include '../components/header.php'; ?>

  <!-- Navigation article -->
  <nav class="article-nav">
    <a href="../magazine.php" class="back-link">Retour au magazine</a>
    <span class="article-meta">5 min de lecture • 6 décembre 2025</span>
  </nav>

  <!-- Article Hero -->
  <section class="article-hero">
    <span class="article-category">Vivre solo • Philosophie</span>
    <h1 class="article-title">La solitude invisible</h1>
    <p class="article-subtitle">On peut être entouré et se sentir profondément seul</p>
  </section>

  <!-- Article Content -->
  <article class="article-container">

    <p class="article-intro">
      La solitude ne dépend pas du fait d'être seul ou entouré. C'est une expérience 
      intérieure, parfois douce, parfois douloureuse.
    </p>

    <div class="article-body">
      
      <p>
        On peut vivre seul sans souffrir… et se sentir profondément seul au milieu 
        d'un couple, d'une famille ou d'un groupe. Dans un monde saturé d'écrans et 
        de connexions apparentes, cette solitude intérieure est plus fréquente qu'on 
        ne le croit. On peut afficher mille liens, sans en ressentir un seul.
      </p>

      <div class="article-highlight">
        <p>
          La distinction est simple : l'isolement est un état extérieur ; 
          la solitude est un ressenti.
        </p>
      </div>

      <p>
        On peut donc vivre trois réalités différentes, chacune avec sa propre texture, 
        sa propre vérité :
      </p>

      <div class="reality-list">
        <h3>Les trois visages de la solitude</h3>
        
        <div class="reality-item">
          <div class="reality-icon positive">☀️</div>
          <div class="reality-content">
            <strong>Être seul et bien</strong>
            <span>Lorsque le retrait est choisi et nourrissant. Une solitude qui ressource, qui crée, qui apaise.</span>
          </div>
        </div>

        <div class="reality-item">
          <div class="reality-icon negative">🌧️</div>
          <div class="reality-content">
            <strong>Être seul et souffrir</strong>
            <span>Quand l'isolement devient un manque de présence humaine. Une absence qui pèse.</span>
          </div>
        </div>

        <div class="reality-item">
          <div class="reality-icon paradox">👥</div>
          <div class="reality-content">
            <strong>Être entouré et se sentir seul</strong>
            <span>Lorsque les liens ne résonnent plus, même s'ils sont nombreux. La solitude invisible.</span>
          </div>
        </div>
      </div>

      <p>
        Cette dernière forme existe aussi dans le couple : on peut aimer quelqu'un 
        et pourtant ne plus se sentir rejoint, entendu, relié. Être à deux n'empêche 
        pas la solitude.
      </p>

      <p>
        Comprendre cela est essentiel. La solitude n'est ni une faute ni une faiblesse, 
        mais un espace intérieur qui évolue selon nos besoins, nos liens et nos moments 
        de vie. On peut apprendre à l'apprivoiser, à la traverser, à la transformer — 
        non en se perdant dans les apparences, mais en reconnaissant ce que l'on 
        ressent vraiment.
      </p>

      <div class="takeaway-box">
        <h4>À retenir</h4>
        <ul>
          <li>La solitude n'est pas visible, elle se vit.</li>
          <li>On peut être seul sans souffrir, entouré et souffrir beaucoup.</li>
          <li>Ce qui compte, ce n'est pas le nombre de relations, mais la qualité du lien — avec les autres, et avec soi-même.</li>
        </ul>
        <p class="takeaway-conclusion">
          Soloplugs existe pour cela : offrir un espace où la solitude se comprend, 
          se nomme et se vit avec un peu plus de douceur.
        </p>
      </div>

    </div>

    <!-- Footer article -->
    <footer class="article-footer">
      <div class="article-tags">
        <a href="#" class="article-tag">Solitude</a>
        <a href="#" class="article-tag">Philosophie</a>
        <a href="#" class="article-tag">Vivre seul</a>
        <a href="#" class="article-tag">Couple</a>
        <a href="#" class="article-tag">Connexion</a>
      </div>
    </footer>

    <!-- CTA -->
    <div class="cta-soloplugs">
      <h3>Envie d'explorer ta solitude ?</h3>
      <p>Découvre Soli, ton journal intime intelligent qui t'accompagne sans juger.</p>
      <a href="#" class="cta-button">Découvrir Soli</a>
    </div>

  </article>

  <?php include '../components/footer.php'; ?>
  <?php include '../components/scripts.php'; ?>

</body>
</html>
