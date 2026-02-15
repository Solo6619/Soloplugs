<style>
/* Reset pour la nav */
.nav, .nav * {
  box-sizing: border-box;
}

.nav a {
  text-decoration: none !important;
}

/* ============================================================
   NAVIGATION SOBRE
   ============================================================ */
.nav {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  z-index: 1000 !important;
  padding: 1.2rem 3rem !important;
  display: flex !important;
  justify-content: space-between !important;
  align-items: center !important;
  background: rgba(255, 253, 249, 0.98) !important;
  backdrop-filter: blur(20px) !important;
  box-shadow: 0 2px 20px rgba(0,0,0,0.06) !important;
  transition: all 0.4s ease !important;
}

.nav-logo {
  font-family: 'Playfair Display', serif;
  font-size: 1.6rem;
  font-weight: 500;
  color: #2C3338;
  cursor: pointer;
  text-decoration: none !important;
  border: none !important;
}

.nav-logo::after {
  display: none !important;
}

.nav-links {
  display: flex;
  gap: 2.5rem;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-links li {
  list-style: none;
}

.nav-links a {
  font-family: 'Inter', sans-serif;
  font-size: 0.9rem;
  font-weight: 400;
  color: #5C554E;
  transition: all 0.3s ease;
  position: relative;
  text-decoration: none !important;
}

.nav-links a:hover {
  color: #D4A574;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 0;
  height: 2px;
  background: #D4A574;
  transition: width 0.3s ease;
}

.nav-links a:hover::after {
  width: 100%;
}

/* Sous-menu desktop */
.has-submenu {
  position: relative;
}

.submenu-arrow {
  font-size: 0.8rem;
  margin-left: 0.3rem;
}

.submenu {
  display: none;
  position: absolute;
  top: 100%;
  left: -1rem;
  background: rgba(255, 253, 249, 0.98);
  min-width: 220px;
  padding: 0.5rem 0;
  border-radius: 8px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  list-style: none;
  padding-top: 1rem;
}

.submenu::before {
  content: '';
  position: absolute;
  top: -10px;
  left: 0;
  right: 0;
  height: 15px;
  background: transparent;
}

.has-submenu:hover .submenu {
  display: block;
}

.submenu li a {
  display: block;
  padding: 0.5rem 1.25rem;
  color: #2C3338 !important;
  font-size: 0.85rem;
  white-space: nowrap;
}

.submenu li a:hover {
  background: rgba(212, 165, 116, 0.15);
  color: #D4A574 !important;
}

.submenu li a::after {
  display: none;
}

/* Hamburger */
.hamburger {
  display: none !important;
  flex-direction: column !important;
  gap: 5px !important;
  background: none !important;
  border: none !important;
  cursor: pointer !important;
  padding: 0.5rem !important;
  z-index: 1001 !important;
  position: relative !important;
}

.hamburger span {
  display: block !important;
  width: 24px !important;
  height: 2px !important;
  background: #2C3338 !important;
  transition: all 0.3s ease !important;
}

/* ============================================================
   RESPONSIVE MOBILE
   ============================================================ */
@media (max-width: 768px) {
  .nav {
    padding: 1rem 1.5rem;
  }

  .hamburger {
    display: flex !important;
  }

  .nav-links {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: rgba(255, 253, 249, 0.98);
    flex-direction: column;
    padding: 1.5rem 2rem;
    gap: 1rem;
    border-bottom: 1px solid rgba(212, 165, 116, 0.25);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    display: none;
  }

  .nav-links.open {
    display: flex;
  }

  .nav-links a {
    color: #2C3338 !important;
    font-size: 1rem;
    padding: 0.5rem 0;
  }

  /* Sous-menu mobile */
  .has-submenu {
    position: relative;
  }

  .submenu-arrow {
    display: inline-block;
    margin-left: 0.5rem;
    transition: transform 0.3s ease;
  }

  .has-submenu.open .submenu-arrow {
    transform: rotate(90deg);
  }

  .submenu {
    display: none !important;
    list-style: none;
    padding: 0.75rem 0 0.75rem 1.5rem;
    margin-top: 0.5rem;
    border-left: 2px solid #D4A574;
    position: static;
    background: transparent;
    box-shadow: none;
    min-width: auto;
    border-radius: 0;
  }

  .submenu::before {
    display: none;
  }

  .has-submenu:hover .submenu {
    display: none !important;
  }

  .has-submenu .submenu.open,
  .submenu.open {
    display: block !important;
  }

  .submenu li {
    padding: 0.4rem 0;
  }

  .submenu li a {
    display: block;
    padding: 0.75rem 0;
    color: #5C554E !important;
    font-size: 0.95rem !important;
  }

  .submenu li a:active {
    color: #D4A574 !important;
  }
}
</style>

<nav class="nav">
  <a href="<?php echo $basePath ?? ''; ?>index.php" class="nav-logo">Soloplugs</a>
  
  <button class="hamburger" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </button>
  
  <ul class="nav-links">
    <li><a href="<?php echo $basePath ?? ''; ?>.../ressources.php">Ressources</a></li>
    <li class="has-submenu">
      <a href="#" class="submenu-trigger" onclick="event.preventDefault(); this.parentElement.classList.toggle('open'); this.nextElementSibling.classList.toggle('open'); return false;">Les 7 thèmes <span class="submenu-arrow">›</span></a>
      <ul class="submenu">
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/vivre-solo.php">Vivre Solo</a></li>
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/ado-solo.php">Ado Solo</a></li>
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/parent-solo.php">Parent Solo</a></li>
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/vieillir-solo.php">Vieillir Solo</a></li>
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/voyages-solo.php">Voyages Solo</a></li>
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/sorties-loisirs-rencontres.php">Sorties & Loisirs</a></li>
        <li><a href="<?php echo $basePath ?? ''; ?>7_themes/divorces-separations-deces.php">Séparation & Deuil</a></li>
      </ul>
    </li>
    
    <li><a href="<?php echo $basePath ?? ''; ?>apropos.php">À propos</a></li>
    <li><a href="<?php echo $basePath ?? ''; ?>magazine.php">Magazine</a></li>
  </ul>
</nav>

<script>
function toggleMenu() {
  document.querySelector('.nav-links').classList.toggle('open');
}
</script>
