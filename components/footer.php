
<footer id="footer">
  <div class="footer-inner">
    <!-- Logo -->
    <div class="footer-logo" onclick="window.location='<?php echo $basePath ?? ''; ?>index.php'">
      <div class="solo-container">
        <div class="solo-bg">
          <div class="solo-text">Solo</div>
        </div>
      </div>
      <div class="plugs-container">
        <div class="plugs-text">plugs</div>
      </div>
    </div>

    <!-- Citation -->
    <p class="footer-quote">
      La voix de la solitude — Aider chacun à mieux vivre avec soi-même.
    </p>

    <!-- Liens -->
    <div class="footer-links">
      <a href="<?php echo $basePath ?? ''; ?>index.php">Accueil</a>
      <a href="<?php echo $basePath ?? ''; ?>solo.php">Solo</a>
      <a href="<?php echo $basePath ?? ''; ?>soli.php">Soli</a>
      <a href="<?php echo $basePath ?? ''; ?>magazine.php">Magazine</a>
      <a href="<?php echo $basePath ?? ''; ?>ressources.php">Ressources</a>
      <a href="<?php echo $basePath ?? ''; ?>apropos.php">À propos</a>
    </div>

    <!-- Réseaux sociaux -->
    <div class="footer-social">
      <a href="#" title="Facebook">🌐</a>
      <a href="#" title="YouTube">▶️</a>
      <a href="mailto:info@soloplugs.com" title="Courriel">✉️</a>
    </div>

    <!-- Copyright -->
    <p class="footer-copy">
      © <?php echo date('Y'); ?> Soloplugs — La voix de la solitude. Tous droits réservés.
    </p>
  </div>
</footer>

<!-- Bouton retour en haut -->
<a href="#" class="back-to-top" id="backToTop" title="Retour en haut">↑</a>

<!-- ============================================================
     WIDGET S♡LO - RESSOURCES D'AIDE
     ============================================================ -->
<?php include __DIR__ . '/widget-solo-aide.php'; ?>
