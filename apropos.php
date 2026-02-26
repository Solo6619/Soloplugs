<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A propos - Soloplugs</title>
  <link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/apropos.css">
</head>
<body>

<!-- Etoiles decoratives en arriere-plan -->
<div class="stars" id="stars"></div>

<a href="index.php" class="btn-retour">
  <svg viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  Accueil
</a>

<!-- En-tete avec citation vedette -->
<header class="hero">
  <blockquote class="citation-vedette">
    <p>Ici, on fait de la place au silence pour que tu puisses enfin t'entendre.</p>
  </blockquote>
</header>

<!-- Contenu principal -->
<article class="manifeste">

  <div class="titre-section">
    <h1>Soloplugs</h1>
    <h2>La voix de la solitude</h2>
    <div class="ligne-decorative"></div>
  </div>
<section class="section">
  
  <p class="phrase-ouverture"><strong>Chacun de nous est unique</strong> </p>
  

  <p>La solitude n'est pas toujours une solution, ni un problème en soi. Elle peut être inconfortable, parfois douloureuse. Mais elle peut aussi devenir un espace où l'on ralentit, où l'on écoute davantage ce qui se passe à l'intérieur, sans être constamment sollicité ou comparé.</p>

  <div class="bloc-soloplugs">
    <p class="titre-bloc"><strong>Soloplugs est cet espace.</strong> Pas un endroit où l'on te dit qui être, mais un endroit où l'on t'accompagne pendant que tu le découvres.</p>
    
    <p>Un lieu pour réfléchir à la solitude sans la juger, sans l'idéaliser, sans la dramatiser. Pour comprendre ce qu'elle dit de nous, selon les moments de la vie. Pour distinguer la solitude choisie de l'isolement subi. Pour apprendre à se tenir avec soi-même, sans se couper du monde.</p>

    <p class="phrase-solo"><strong>Solo, c'est toi.</strong> Cette partie de toi qui sait, quelque part, que tu n'as pas à ressembler à tout le monde. Que tu as ta propre voix, ton propre rythme, ta propre place.</p>

    <p class="phrase-contraste">La société valorise ceux qui s'adaptent. Soloplugs accompagne ceux qui cherchent à se retrouver.</p>
  </div>

</section>


  <div class="signature">
    <div class="signature-ligne"></div>
    <p>Bienvenue.</p>
    <p class="finale">Ici, on fait de la place au silence — pour que tu puisses enfin t'entendre.</p>
  </div>

</article>

<!-- Script pour generer les etoiles -->
<script>
  const starsContainer = document.getElementById('stars');
  const numberOfStars = 150;
  
  for (let i = 0; i < numberOfStars; i++) {
    const star = document.createElement('div');
    star.className = 'star';
    star.style.left = Math.random() * 100 + '%';
    star.style.top = Math.random() * 100 + '%';
    star.style.animationDelay = Math.random() * 4 + 's';
    const size = Math.random() * 2 + 1;
    star.style.width = size + 'px';
    star.style.height = size + 'px';
    starsContainer.appendChild(star);
  }
</script>

</body>
</html>
