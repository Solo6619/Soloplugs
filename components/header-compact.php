<!-- ============================================================
     HEADER COMPACT - Pages secondaires Soloplugs
     Utiliser ce header pour : ressources.php, section-table.php, 
     section-hobbies.php, et autres pages secondaires.
     ============================================================ -->
<header id="header-compact">
  <div class="header-compact-inner">

    <!-- Logo compact -->
    <a href="<?php echo $basePath ?? ''; ?>index.php" class="logo-compact">
      <div class="solo-box">
        <span class="solo-text">Solo</span>
      </div>
      <span class="plugs-text">plugs</span>
    </a>

    <!-- Navigation principale -->
    <nav class="menu-compact">
      <a href="<?php echo $basePath ?? ''; ?>index.php" <?php if(($currentPage ?? '') === 'accueil') echo 'class="active"'; ?>>Accueil</a>
      <a href="<?php echo $basePath ?? ''; ?>solo.php" <?php if(($currentPage ?? '') === 'solo') echo 'class="active"'; ?>>Solo</a>
      <a href="<?php echo $basePath ?? ''; ?>soli.php" <?php if(($currentPage ?? '') === 'soli') echo 'class="active"'; ?>>Soli</a>
      <a href="<?php echo $basePath ?? ''; ?>magazine.php" <?php if(($currentPage ?? '') === 'magazine') echo 'class="active"'; ?>>Magazine</a>
      <a href="<?php echo $basePath ?? ''; ?>ressources.php" <?php if(($currentPage ?? '') === 'ressources') echo 'class="active"'; ?>>Ressources</a>
      <a href="<?php echo $basePath ?? ''; ?>apropos.php" <?php if(($currentPage ?? '') === 'apropos') echo 'class="active"'; ?>>À propos</a>
    </nav>

    <!-- Menu hamburger des thèmes -->
    <div class="themes-menu-compact">
      <button class="themes-toggle-compact" aria-label="Menu des thèmes" aria-expanded="false">
        <span class="themes-label-compact">Thèmes</span>
        <span class="hamburger-compact">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </button>
      
      <nav class="themes-dropdown-compact" aria-hidden="true">
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
