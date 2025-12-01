<header id="header">
  <div id="header-inner">

    <!-- Logo -->
    <div class="logo-soloplugs" onclick="window.location='<?php echo $basePath ?? ''; ?>index.php'">
      <div class="solo-container">
        <div class="solo-bg">
          <div class="solo-text">Solo</div>
        </div>
      </div>
      <div class="plugs-container">
        <div class="plugs-text">plugs</div>
      </div>
    </div>

    <!-- Navigation principale -->
    <nav id="menu-main">
      <a href="<?php echo $basePath ?? ''; ?>index.php" <?php if(($currentPage ?? '') === 'accueil') echo 'class="active-link"'; ?>>Accueil</a>
      <a href="<?php echo $basePath ?? ''; ?>solo.php" <?php if(($currentPage ?? '') === 'solo') echo 'class="active-link"'; ?>>Solo</a>
      <a href="<?php echo $basePath ?? ''; ?>soli.php" <?php if(($currentPage ?? '') === 'soli') echo 'class="active-link"'; ?>>Soli</a>
      <a href="<?php echo $basePath ?? ''; ?>magazine.php" <?php if(($currentPage ?? '') === 'magazine') echo 'class="active-link"'; ?>>Magazine</a>
      <a href="<?php echo $basePath ?? ''; ?>ressources.php" <?php if(($currentPage ?? '') === 'ressources') echo 'class="active-link"'; ?>>Ressources</a>
      <a href="<?php echo $basePath ?? ''; ?>apropos.php" <?php if(($currentPage ?? '') === 'apropos') echo 'class="active-link"'; ?>>À propos</a>
    </nav>

    <!-- Menu hamburger des thèmes (droite) -->
    <div class="themes-menu">
      <button class="themes-toggle" aria-label="Menu des thèmes" aria-expanded="false">
        <span class="themes-label">Thèmes</span>
        <span class="hamburger-icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </button>
      
      <nav class="themes-dropdown" aria-hidden="true">
        <a href="<?php echo $basePath ?? ''; ?>7_themes/vivre-solo.php">
          <span class="theme-icon">🏠</span>
          <span class="theme-name">Vivre solo</span>
        </a>
        <a href="<?php echo $basePath ?? ''; ?>7_themes/ado-solo.php">
          <span class="theme-icon">🎧</span>
          <span class="theme-name">Ado solo</span>
        </a>
        <a href="<?php echo $basePath ?? ''; ?>7_themes/parent-solo.php">
          <span class="theme-icon">💚</span>
          <span class="theme-name">Parent solo</span>
        </a>
        <a href="<?php echo $basePath ?? ''; ?>7_themes/vieillir-solo.php">
          <span class="theme-icon">🌿</span>
          <span class="theme-name">Vieillir solo</span>
        </a>
        <a href="<?php echo $basePath ?? ''; ?>7_themes/voyages-solo.php">
          <span class="theme-icon">✈️</span>
          <span class="theme-name">Voyages solo</span>
        </a>
        <a href="<?php echo $basePath ?? ''; ?>7_themes/sorties-loisirs-rencontres.php">
          <span class="theme-icon">🎭</span>
          <span class="theme-name">Sorties & loisirs</span>
        </a>
        <a href="<?php echo $basePath ?? ''; ?>7_themes/divorces-separations-deces.php">
          <span class="theme-icon">🕊️</span>
          <span class="theme-name">Séparation & deuil</span>
        </a>
      </nav>
    </div>

  </div>
</header>
