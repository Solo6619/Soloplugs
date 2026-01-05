<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'À propos';
    $pageDescription = 'Soloplugs est la voix de la solitude. Une voix humaine, lucide et bienveillante.';
    $basePath = '';
    $currentPage = 'apropos';
    $additionalCSS = ['magazine.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       CONTENU PRINCIPAL
       ============================================================ -->
  <main class="magazine-container" style="max-width: 800px;">

    <!-- Section Hero -->
    <section class="magazine-header" style="padding: 4rem 1rem 2rem;">
      <h1 style="font-size: 2.75rem; margin-bottom: 1.5rem;">Soloplugs — La voix de la solitude</h1>
    </section>

    <!-- Contenu À propos -->
    <article style="padding: 0 1rem 4rem;">
      
      <!-- Introduction -->
      <div style="margin-bottom: 3rem;">
        <p style="font-size: 1.125rem; line-height: 1.8; color: #2C3338; margin-bottom: 1.5rem;">
          Soloplugs est la voix de la solitude. Une voix humaine, lucide et bienveillante, qui cherche à comprendre plutôt qu'à guérir, à écouter plutôt qu'à remplir le silence.
        </p>
        <p style="font-size: 1.125rem; line-height: 1.8; color: #2C3338;">
          Parce que la solitude fait partie de la vie. Elle n'est ni une faute, ni un mal en soi. Elle est tantôt refuge, tantôt vertige. Elle peut être choisie, créatrice, féconde — ou au contraire subie, douloureuse, isolante. Soloplugs existe pour faire la distinction entre ces deux réalités, et pour aider chacun à mieux vivre avec soi-même.
        </p>
      </div>

     

    </article>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
