<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact – Soloplugs</title>
  <meta name="description" content="Une question, une suggestion, un témoignage? Écris-nous. Soloplugs est à ton écoute.">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
  
<link rel="stylesheet" href="css/contact.css">
</head>
<body>

<!-- BOUTON RETOUR FIXE -->
<button class="back-fixed" onclick="history.back()" aria-label="Retour">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M19 12H5M12 19l-7-7 7-7"/>
  </svg>
</button>

<!-- NAVIGATION -->
<nav class="nav">
  <a href="index.php" class="nav-logo">Soloplugs</a>
  <ul class="nav-links">
    <li><a href="magazine.php">Magazine</a></li>
    <li class="nav-dropdown">
      <a href="#" class="dropdown-toggle">Thèmes</a>
      <ul class="dropdown-menu">
        <li><a href="7_themes/vivre-solo.php">Vivre Solo</a></li>
        <li><a href="7_themes/ado-solo.php">Ado Solo</a></li>
        <li><a href="7_themes/parent-solo.php">Parent Solo</a></li>
        <li><a href="7_themes/vieillir-solo.php">Vieillir Solo</a></li>
        <li><a href="7_themes/voyages-solo.php">Voyages Solo</a></li>
        <li><a href="7_themes/sorties-loisirs.php">Sorties & Loisirs</a></li>
        <li><a href="7_themes/divorces-separations.php">Divorces & Séparations</a></li>
      </ul>
    </li>
    <li><a href="ressources.php">Ressources</a></li>
    <li><a href="apropos.php">À propos</a></li>
  </ul>
</nav>

<!-- HEADER -->
<header class="page-header">
  <div class="page-header-inner">
    <span class="page-category">Contact</span>
    <h1 class="page-title">Écris-nous</h1>
    <p class="page-intro">
      Une question, une suggestion, un témoignage à partager? 
      On est là pour t'écouter.
    </p>
  </div>
</header>

<!-- CONTENU -->
<main class="contact-content">

  <?php
  // Afficher les messages de statut
  if (isset($_GET['status'])) {
    if ($_GET['status'] === 'success') {
      echo '<div class="form-message success">Merci pour ton message! On te répond dès que possible.</div>';
    } elseif ($_GET['status'] === 'error') {
      $msg = isset($_GET['msg']) ? htmlspecialchars(urldecode($_GET['msg'])) : 'Une erreur est survenue. Réessaie.';
      echo '<div class="form-message error">' . $msg . '</div>';
    }
  }
  ?>

  <form class="contact-form" action="send-contact.php" method="POST">
    
    <!-- Champ caché pour la page d'origine -->
    <input type="hidden" name="page_url" value="contact.php">
    
    <!-- Honeypot anti-spam (caché) -->
    <div class="form-honey">
      <label for="website">Ne pas remplir</label>
      <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
    </div>

    <div class="form-group">
      <label for="name" class="form-label">Prénom</label>
      <input type="text" name="name" id="name" class="form-input" placeholder="Ton prénom" required>
    </div>

    <div class="form-group">
      <label for="email" class="form-label">Courriel</label>
      <input type="email" name="email" id="email" class="form-input" placeholder="ton@courriel.com" required>
    </div>

    <div class="form-group">
      <label for="subject" class="form-label">Sujet</label>
      <select name="subject" id="subject" class="form-select" required>
        <option value="">Choisis un sujet...</option>
        <option value="Question générale">Question générale</option>
        <option value="Suggestion">Suggestion pour le site</option>
        <option value="Témoignage">Je veux partager mon témoignage</option>
        <option value="Partenariat">Proposition de partenariat</option>
        <option value="Problème technique">Problème technique</option>
        <option value="Autre">Autre</option>
      </select>
    </div>

    <div class="form-group">
      <label for="message" class="form-label">Message</label>
      <textarea name="message" id="message" class="form-textarea" placeholder="Écris ton message ici..." required></textarea>
    </div>

    <button type="submit" class="form-submit">Envoyer le message</button>

  </form>

  <div class="contact-info">
    <p>Tu peux aussi nous écrire directement à</p>
    <p><a href="mailto:soloplugs@hotmail.com">soloplugs@hotmail.com</a></p>
  </div>

</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-content">
    <span class="footer-logo">Soloplugs</span>
    <ul class="footer-center">
      <li><a href="apropos.php">À propos</a></li>
      <li><a href="magazine.php">Magazine</a></li>
      <li><a href="ressources.php">Ressources</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <span class="footer-copy">© 2025 Soloplugs</span>
  </div>
</footer>

</body>
</html>
