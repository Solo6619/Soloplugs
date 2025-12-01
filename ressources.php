<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Ressources';
    $pageDescription = 'Guides, outils pratiques et références pour naviguer votre solitude avec confiance et sérénité.';
    $basePath = '';
    $currentPage = 'ressources';
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
      <h1 style="font-size: 3rem; margin-bottom: 1.5rem;">Ressources</h1>
      <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto 2rem;">
        Guides, outils pratiques et références pour naviguer votre solitude avec confiance et sérénité.
      </p>
      
      <div style="background: #F5F1EB; padding: 2rem; border-radius: 1rem; max-width: 600px; margin: 0 auto;">
        <p style="font-style: italic; color: #6B7280; font-size: 1.125rem; margin: 0;">
          Cette page est en construction. Le contenu sera ajouté prochainement.
        </p>
      </div>

      <!-- Aperçu des ressources à venir -->
      <div style="margin-top: 4rem; text-align: left; max-width: 900px; margin-left: auto; margin-right: auto;">
        <h2 style="font-family: 'Lora', serif; font-size: 1.75rem; color: #D4A574; margin-bottom: 2rem; text-align: center;">
          Ce que vous trouverez ici
        </h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">📖</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Guides pratiques</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Des fiches thématiques sur vivre seul·e, gérer les moments difficiles, créer sa routine, etc.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🛠️</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Outils téléchargeables</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Journaux, checklists, exercices de réflexion et modèles pour structurer votre quotidien.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🆘</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Aide d'urgence</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Numéros d'écoute, ressources de crise et liens vers des professionnels qualifiés.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">📚</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Bibliothèque</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Livres, podcasts, films et articles recommandés sur la solitude et l'épanouissement personnel.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌱</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Exercices pratiques</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Méditations, rituels du quotidien, pratiques créatives pour habiter votre solitude.
            </p>
          </div>

          <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 20px rgba(212, 165, 116, 0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🔗</div>
            <h3 style="font-family: 'Lora', serif; font-size: 1.25rem; margin-bottom: 0.75rem; color: #2C3338;">Liens utiles</h3>
            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.6;">
              Organismes, associations et services pour vous accompagner selon votre situation.
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
