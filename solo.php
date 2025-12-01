<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Solo — La voix de la solitude';
    $pageDescription = 'Solo est la voix de la solitude. Il guide, éclaire et met des mots sur ce que chacun vit à sa manière.';
    $basePath = '';
    $currentPage = 'solo';
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
      <h1 style="font-size: 3rem; margin-bottom: 1.5rem;">Solo — La voix</h1>
      <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto 2rem;">
        Solo est la voix de la solitude. Il guide, éclaire et met des mots sur ce que chacun vit à sa manière.
      </p>
      
      <div style="background: #F5F1EB; padding: 2rem; border-radius: 1rem; max-width: 600px; margin: 0 auto;">
        <p style="font-style: italic; color: #6B7280; font-size: 1.125rem; margin: 0;">
          Cette page est en construction. Le contenu sera ajouté prochainement.
        </p>
      </div>

      <!-- Aperçu des fonctionnalités à venir -->
      <div style="margin-top: 4rem; text-align: left; max-width: 800px; margin-left: auto; margin-right: auto;">
        <h2 style="font-family: 'Lora', serif; font-size: 1.75rem; color: #D4A574; margin-bottom: 2rem; text-align: center;">
          Ce que Solo vous offrira
        </h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🧭</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Guidage personnalisé</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Orientation vers les ressources adaptées selon votre situation et vos besoins.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">📚</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Bibliothèque intelligente</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Accès à une base de connaissances complète sur la solitude et l'épanouissement.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">💬</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Accompagnement bienveillant</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Une présence chaleureuse disponible 24/7 pour échanger et vous soutenir.
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
