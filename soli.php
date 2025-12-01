<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Soli — L\'oreille intérieure';
    $pageDescription = 'Soli est votre journal intime vivant. Un miroir bienveillant pour accueillir vos pensées, émotions et silences.';
    $basePath = '';
    $currentPage = 'soli';
    $additionalCSS = ['magazine.css'];
    
    include 'components/head.php';
  ?>
</head>
<body>

  <?php include 'components/header.php'; ?>

  <!-- ============================================================
       CONTENU PRINCIPAL
       ============================================================ -->
  <main class="magazine-container">

    <!-- Section Hero -->
    <section class="magazine-header" style="min-height: 60vh; display: flex; flex-direction: column; justify-content: center;">
      <h1 style="font-size: 3rem; margin-bottom: 1.5rem;">Soli — L'oreille intérieure</h1>
      <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto 2rem;">
        Soli est votre journal intime vivant. Un miroir bienveillant pour accueillir vos pensées, émotions et silences.
      </p>
      
      <div style="background: #F5F1EB; padding: 2rem; border-radius: 1rem; max-width: 600px; margin: 0 auto;">
        <p style="font-style: italic; color: #6B7280; font-size: 1.125rem; margin: 0;">
          Cette page est en construction. Le contenu sera ajouté prochainement.
        </p>
      </div>

      <!-- Aperçu des fonctionnalités à venir -->
      <div style="margin-top: 4rem; text-align: left; max-width: 800px; margin-left: auto; margin-right: auto;">
        <h2 style="font-family: 'Lora', serif; font-size: 1.75rem; color: #D4A574; margin-bottom: 2rem; text-align: center;">
          Ce que Soli vous offrira
        </h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">📓</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Journal intime intelligent</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Un espace privé et sécurisé pour déposer vos pensées, émotions et réflexions quotidiennes.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🪞</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Miroir bienveillant</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Reflet empathique de votre univers intérieur, sans jugement ni prescription.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🎨</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Expression multimédia</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Intégrez textes, photos, musiques et souvenirs pour créer votre journal unique.
            </p>
          </div>
        </div>
      </div>

    </section>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

</body>
</html>
