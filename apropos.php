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

      <!-- La Bibliothèque vivante -->
      <div style="background: #F5F1EB; padding: 2.5rem; border-radius: 1rem; margin-bottom: 2rem;">
        <h2 style="font-family: 'Lora', serif; font-size: 1.75rem; color: #D4A574; margin-bottom: 1.5rem;">
          La Bibliothèque vivante — Le silence qui guide
        </h2>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #2C3338; margin-bottom: 1.5rem;">
          C'est le cœur tranquille de Soloplugs. Un espace de ressources, de lectures et de repères pour explorer la solitude sous toutes ses formes : psychologique, sociale, culturelle, spirituelle.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #2C3338; margin-bottom: 1.5rem;">
          Ici, Solo accompagne. Il explique sans juger, éclaire sans bruit, oriente sans diriger.
        </p>
        <blockquote style="border-left: 4px solid #D4A574; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6B7280; font-size: 1.125rem; font-family: 'Lora', serif;">
          « Dans la bibliothèque, Soloplugs parle en silence. C'est la solitude qui enseigne, et Solo qui traduit. »
        </blockquote>
      </div>

      <!-- Le Magazine -->
      <div style="background: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08); margin-bottom: 2rem;">
        <h2 style="font-family: 'Lora', serif; font-size: 1.75rem; color: #D4A574; margin-bottom: 1.5rem;">
          Le Magazine — La parole vivante
        </h2>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #2C3338; margin-bottom: 1.5rem;">
          Soloplugs Magazine — La voix de la solitude est la part mouvante du projet. On y parle, on y échange, on y raconte. Articles, entrevues, pensées, témoignages, photos, vidéos, statistiques… Tout ce qui peut donner visage et voix à cette expérience universelle qu'est la solitude.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #2C3338; margin-bottom: 1rem;">
          Le magazine explore ses deux visages :
        </p>
        <ul style="list-style: none; padding-left: 0; margin-bottom: 1.5rem;">
          <li style="padding: 0.5rem 0; font-size: 1.05rem; color: #2C3338;">
            <span style="color: #D4A574; font-weight: 600;">→</span> la solitude choisie, libre, inspirante ;
          </li>
          <li style="padding: 0.5rem 0; font-size: 1.05rem; color: #2C3338;">
            <span style="color: #D4A574; font-weight: 600;">→</span> et l'isolement subi, souvent silencieux, qu'il faut reconnaître pour mieux le surmonter.
          </li>
        </ul>
        <blockquote style="border-left: 4px solid #D4A574; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6B7280; font-size: 1.125rem; font-family: 'Lora', serif;">
          « Dans le magazine, Soloplugs parle à voix haute, pour rappeler que personne n'est seul à être seul. »
        </blockquote>
      </div>

      <!-- Deux voix, un même souffle -->
      <div style="background: linear-gradient(135deg, #F5F1EB 0%, #FBF9F6 100%); padding: 2.5rem; border-radius: 1rem; margin-bottom: 2rem;">
        <h2 style="font-family: 'Lora', serif; font-size: 1.75rem; color: #2C3338; margin-bottom: 1.5rem;">
          Deux voix, un même souffle
        </h2>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #2C3338; margin-bottom: 1.5rem;">
          Ces deux espaces — la Bibliothèque et le Magazine — forment un tout. L'un invite au silence, l'autre à la parole. L'un nourrit la réflexion, l'autre le partage.
        </p>
        <blockquote style="border-left: 4px solid #D4A574; padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #6B7280; font-size: 1.125rem; font-family: 'Lora', serif;">
          « Aider chacun à trouver son propre équilibre entre le besoin d'être seul et celui de rester relié. »
        </blockquote>
        <p style="font-size: 1.125rem; line-height: 1.8; color: #2C3338; margin-top: 2rem; font-family: 'Lora', serif; font-style: italic; text-align: center;">
          C'est là que réside l'âme de Soloplugs — la voix de la solitude.
        </p>
      </div>

    </article>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
