<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ressources Capitale-Nationale — Vivre Solo | SOLOPLUGS</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Source+Sans+3:wght@300;400;500;600&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
:root {
  --warm-bg: #FBF8F4;
  --warm-bg-alt: #F5F0E8;
  --card-bg: #FFFFFF;
  --text-primary: #2D2A26;
  --text-secondary: #6B6560;
  --text-muted: #9B9590;

  --accent-amber: #D4943A;
  --accent-amber-light: #F0DFC4;
  --accent-amber-glow: rgba(212,148,58,0.12);
  --accent-green: #5A8F6E;
  --accent-green-light: #E2F0E8;
  --accent-blue: #4A7FA5;
  --accent-blue-light: #DDE9F2;
  --accent-rose: #B06B78;
  --accent-rose-light: #F2E0E3;
  --accent-purple: #7B6B9E;
  --accent-purple-light: #EBE4F4;
  --accent-teal: #4A8F8F;
  --accent-teal-light: #DDF0F0;
  --accent-coral: #C47A5A;
  --accent-coral-light: #F5E4DB;
  --accent-slate: #5E7080;
  --accent-slate-light: #E0E8EE;
  --accent-olive: #7A8B5A;
  --accent-olive-light: #E8EFD8;
  --accent-warm: #A07850;
  --accent-warm-light: #F0E4D4;

  --border-subtle: rgba(45,42,38,0.08);
  --shadow-soft: 0 2px 12px rgba(45,42,38,0.06);
  --shadow-hover: 0 6px 24px rgba(45,42,38,0.10);
  --radius-lg: 16px;
  --radius-md: 12px;
  --radius-sm: 8px;

  --hero-bg: #1C1A17;
  --hero-text: #F5F0E8;
  --hero-muted: #A09A90;
}

* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }

body {
  font-family: 'Source Sans 3', 'DM Sans', sans-serif;
  background: var(--warm-bg);
  color: var(--text-primary);
  -webkit-font-smoothing: antialiased;
}

/* ═══════════════════════════════════════
   HERO
   ═══════════════════════════════════════ */
.hero {
  background: var(--hero-bg);
  background-image:
    radial-gradient(ellipse 80% 60% at 50% 0%, rgba(212,148,58,0.08) 0%, transparent 60%),
    radial-gradient(ellipse 50% 40% at 80% 100%, rgba(90,143,110,0.06) 0%, transparent 50%);
  padding: 60px 24px 50px;
  text-align: center;
  position: relative;
}
.hero::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 80px;
  background: linear-gradient(to bottom, var(--hero-bg), var(--warm-bg));
}
.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(212,148,58,0.15);
  border: 1px solid rgba(212,148,58,0.25);
  padding: 6px 16px; border-radius: 100px;
  font-size: 13px; font-weight: 500; color: var(--accent-amber);
  letter-spacing: 0.04em; text-transform: uppercase;
  margin-bottom: 24px;
}
.hero h1 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(32px, 5vw, 52px);
  font-weight: 400; color: var(--hero-text);
  line-height: 1.2; margin-bottom: 6px;
}
.hero h1 em { color: var(--accent-amber); font-style: italic; }
.hero .subtitle {
  font-size: 17px; color: var(--hero-muted);
  font-weight: 300; line-height: 1.6;
  max-width: 500px; margin: 16px auto 0;
}
.hero .location-tag {
  display: inline-flex; align-items: center; gap: 6px;
  margin-top: 20px; font-size: 14px; color: var(--hero-muted);
}
.hero .location-tag .dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--accent-green); display: inline-block;
}

/* ═══════════════════════════════════════
   BACK BUTTON (in hero)
   ═══════════════════════════════════════ */
.btn-retour {
  position: fixed;
  top: 24px;
  left: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
  background: rgba(26, 24, 21, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  color: #F5F0E8;
  text-decoration: none;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  z-index: 10;
}
.btn-retour:hover {
  background: rgba(212, 148, 58, 0.3);
  border-color: rgba(212, 148, 58, 0.5);
  transform: translateX(-3px);
}
.btn-retour svg {
  width: 20px;
  height: 20px;
  stroke: currentColor;
  stroke-width: 2;
  fill: none;
}

/* ═══════════════════════════════════════
   NAV BAR
   ═══════════════════════════════════════ */
.nav-bar {
  max-width: 960px; margin: 0 auto;
  padding: 20px 24px 0;
  display: flex; align-items: center; justify-content: flex-end;
  position: relative; z-index: 2;
}
.region-select {
  display: inline-flex; align-items: center; gap: 6px;
  background: var(--card-bg); border: 1px solid var(--border-subtle);
  padding: 8px 14px; border-radius: var(--radius-sm);
  font-size: 13px; font-weight: 500; color: var(--text-secondary);
  cursor: pointer; transition: all 0.2s;
}
.region-select:hover { border-color: var(--accent-amber); color: var(--text-primary); }

/* ═══════════════════════════════════════
   MAIN WRAP
   ═══════════════════════════════════════ */
.main-wrap {
  max-width: 960px;
  margin: 0 auto;
  padding: 10px 24px 100px;
}

/* ═══════════════════════════════════════
   AIDE IMMÉDIATE
   ═══════════════════════════════════════ */
.urgent-banner {
  background: linear-gradient(135deg, #FFF8F0 0%, #FFF5F5 100%);
  border: 1px solid rgba(176,107,120,0.2);
  border-radius: var(--radius-lg);
  padding: 24px 28px;
  margin-top: 24px;
  display: flex; align-items: flex-start; gap: 16px;
}
.urgent-indicator {
  width: 48px; height: 48px;
  background: linear-gradient(135deg, var(--accent-rose), var(--accent-coral));
  border-radius: var(--radius-md);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.urgent-indicator svg { width: 24px; height: 24px; color: white; }
.urgent-body h3 {
  font-family: 'DM Sans', sans-serif;
  font-size: 17px; font-weight: 600; color: var(--text-primary);
  margin-bottom: 6px;
}
.urgent-body p {
  font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 12px;
}
.urgent-numbers { display: flex; flex-wrap: wrap; gap: 10px; }
.urgent-pill {
  display: inline-flex; align-items: center; gap: 6px;
  background: white; border: 1px solid rgba(176,107,120,0.15);
  padding: 6px 14px; border-radius: 100px;
  font-size: 13px; font-weight: 600; color: var(--accent-rose);
  text-decoration: none; transition: all 0.2s;
}
.urgent-pill:hover { background: var(--accent-rose); color: white; border-color: var(--accent-rose); }
.urgent-pill .pill-label { font-weight: 400; color: var(--text-secondary); }
.urgent-pill:hover .pill-label { color: rgba(255,255,255,0.8); }

/* ═══════════════════════════════════════
   THEME NAV GRID
   ═══════════════════════════════════════ */
.theme-nav {
  margin-top: 32px;
}
.theme-nav-title {
  font-family: 'DM Sans', sans-serif;
  font-size: 14px; font-weight: 600; color: var(--text-muted);
  text-transform: uppercase; letter-spacing: 0.06em;
  margin-bottom: 14px;
}
.theme-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 10px;
}
.theme-box {
  display: flex; align-items: center; gap: 12px;
  background: var(--card-bg);
  border: 1px solid var(--border-subtle);
  border-radius: var(--radius-md);
  padding: 14px 16px;
  text-decoration: none;
  color: var(--text-primary);
  transition: all 0.25s ease;
  position: relative;
  overflow: hidden;
}
.theme-box::before {
  content: '';
  position: absolute;
  top: 0; left: 0; bottom: 0; width: 3px;
  border-radius: 3px 0 0 3px;
  transition: width 0.25s ease;
}
.theme-box:hover {
  border-color: rgba(45,42,38,0.12);
  box-shadow: var(--shadow-hover);
  transform: translateY(-1px);
}
.theme-box:hover::before { width: 4px; }

.theme-dot {
  width: 10px; height: 10px;
  border-radius: 50%;
  flex-shrink: 0;
}
.theme-box-text {
  flex: 1; min-width: 0;
}
.theme-box-text span {
  display: block;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px; font-weight: 600;
  line-height: 1.3;
}
.theme-box-text small {
  font-size: 12px; color: var(--text-muted); font-weight: 400;
}
.theme-box svg {
  width: 16px; height: 16px; color: var(--text-muted);
  flex-shrink: 0; transition: transform 0.2s, color 0.2s;
}
.theme-box:hover svg { transform: translateX(2px); color: var(--text-primary); }

/* Theme colors */
.theme-box[data-theme="logement"]::before { background: var(--accent-green); }
.theme-box[data-theme="logement"] .theme-dot { background: var(--accent-green); }
.theme-box[data-theme="finances"]::before { background: var(--accent-amber); }
.theme-box[data-theme="finances"] .theme-dot { background: var(--accent-amber); }
.theme-box[data-theme="alimentation"]::before { background: var(--accent-coral); }
.theme-box[data-theme="alimentation"] .theme-dot { background: var(--accent-coral); }
.theme-box[data-theme="securite"]::before { background: var(--accent-slate); }
.theme-box[data-theme="securite"] .theme-dot { background: var(--accent-slate); }
.theme-box[data-theme="sante"]::before { background: var(--accent-rose); }
.theme-box[data-theme="sante"] .theme-dot { background: var(--accent-rose); }
.theme-box[data-theme="sociale"]::before { background: var(--accent-blue); }
.theme-box[data-theme="sociale"] .theme-dot { background: var(--accent-blue); }
.theme-box[data-theme="entraide"]::before { background: var(--accent-purple); }
.theme-box[data-theme="entraide"] .theme-dot { background: var(--accent-purple); }
.theme-box[data-theme="animaux"]::before { background: var(--accent-warm); }
.theme-box[data-theme="animaux"] .theme-dot { background: var(--accent-warm); }
.theme-box[data-theme="transport"]::before { background: var(--accent-olive); }
.theme-box[data-theme="transport"] .theme-dot { background: var(--accent-olive); }

/* Double-width suggestion box */
.theme-box.suggest {
  grid-column: span 2;
  background: linear-gradient(135deg, var(--accent-amber-glow), rgba(212,148,58,0.06));
  border-color: rgba(212,148,58,0.25);
}
.theme-box.suggest::before { background: var(--accent-amber); }
.theme-box.suggest .theme-dot { background: var(--accent-amber); }
.theme-box.suggest:hover {
  border-color: var(--accent-amber);
  background: linear-gradient(135deg, rgba(212,148,58,0.15), rgba(212,148,58,0.08));
}

/* ═══════════════════════════════════════
   CATEGORY SECTIONS
   ═══════════════════════════════════════ */
.category-section {
  margin-top: 48px;
  scroll-margin-top: 24px;
}
.category-header {
  display: flex; align-items: center; gap: 14px;
  margin-bottom: 16px;
  padding-bottom: 12px;
  border-bottom: 1px solid var(--border-subtle);
}
.category-indicator {
  width: 44px; height: 44px;
  border-radius: var(--radius-md);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.category-indicator svg { width: 22px; height: 22px; }
.category-header h2 {
  font-family: 'DM Sans', sans-serif;
  font-size: 20px; font-weight: 600;
  color: var(--text-primary);
  letter-spacing: -0.01em;
}
.category-header .count {
  font-size: 12px; font-weight: 500;
  color: var(--text-muted);
  background: var(--warm-bg-alt);
  padding: 3px 10px; border-radius: 100px;
  margin-left: auto;
  white-space: nowrap;
}

/* ═══════════════════════════════════════
   RESOURCE CARDS
   ═══════════════════════════════════════ */
.card-grid { display: flex; flex-direction: column; gap: 10px; }

.resource-card {
  background: var(--card-bg);
  border: 1px solid var(--border-subtle);
  border-radius: var(--radius-md);
  padding: 18px 20px;
  display: flex; align-items: flex-start; gap: 16px;
  transition: all 0.25s ease;
  cursor: pointer;
  position: relative; overflow: hidden;
}
.resource-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; bottom: 0;
  width: 3px; border-radius: 3px 0 0 3px;
  opacity: 0; transition: opacity 0.25s ease;
}
.resource-card:hover {
  border-color: rgba(45,42,38,0.12);
  box-shadow: var(--shadow-hover);
  transform: translateY(-1px);
}
.resource-card:hover::before { opacity: 1; }

.resource-card[data-cat="logement"]::before { background: var(--accent-green); }
.resource-card[data-cat="finances"]::before { background: var(--accent-amber); }
.resource-card[data-cat="alimentation"]::before { background: var(--accent-coral); }
.resource-card[data-cat="securite"]::before { background: var(--accent-slate); }
.resource-card[data-cat="sante"]::before { background: var(--accent-rose); }
.resource-card[data-cat="sociale"]::before { background: var(--accent-blue); }
.resource-card[data-cat="entraide"]::before { background: var(--accent-purple); }
.resource-card[data-cat="animaux"]::before { background: var(--accent-warm); }
.resource-card[data-cat="transport"]::before { background: var(--accent-olive); }

.card-dot {
  width: 10px; height: 10px;
  border-radius: 50%;
  flex-shrink: 0;
  margin-top: 5px;
}

.card-body { flex: 1; min-width: 0; }
.card-body h3 {
  font-family: 'DM Sans', sans-serif;
  font-size: 15px; font-weight: 600;
  color: var(--text-primary);
  margin-bottom: 3px; line-height: 1.3;
}
.card-body .card-desc {
  font-size: 13.5px; color: var(--text-secondary); line-height: 1.5;
}
.card-meta {
  display: flex; flex-wrap: wrap; gap: 8px; margin-top: 8px;
}
.card-tag {
  display: inline-flex; align-items: center; gap: 4px;
  font-size: 12px; font-weight: 500;
  padding: 3px 10px; border-radius: 100px;
  background: var(--warm-bg-alt); color: var(--text-secondary);
}
.card-tag.phone { background: var(--accent-amber-glow); color: var(--accent-amber); font-weight: 600; }
.card-tag.scope { background: var(--accent-green-light); color: var(--accent-green); }
.card-tag.scope.regional { background: var(--accent-purple-light); color: var(--accent-purple); }
.card-tag.scope.local { background: var(--accent-blue-light); color: var(--accent-blue); }

.card-arrow {
  color: var(--text-muted); flex-shrink: 0; align-self: center;
  transition: transform 0.2s, color 0.2s;
}
.resource-card:hover .card-arrow { transform: translateX(3px); color: var(--accent-amber); }

/* ═══════════════════════════════════════
   211 BANNER
   ═══════════════════════════════════════ */
.universal-banner {
  background: linear-gradient(135deg, #F0F7F2 0%, #E8F4EC 100%);
  border: 1px solid rgba(90,143,110,0.2);
  border-radius: var(--radius-lg);
  padding: 22px 28px;
  margin-top: 16px;
  display: flex; align-items: center; gap: 16px;
}
.universal-banner .ub-icon {
  width: 44px; height: 44px;
  background: var(--accent-green);
  border-radius: var(--radius-md);
  display: flex; align-items: center; justify-content: center;
  color: white; font-weight: 700; font-size: 18px;
  font-family: 'DM Sans', sans-serif;
  flex-shrink: 0;
}
.universal-banner .ub-body { flex: 1; }
.universal-banner h4 {
  font-family: 'DM Sans', sans-serif;
  font-size: 15px; font-weight: 600; color: var(--text-primary);
}
.universal-banner p { font-size: 13px; color: var(--text-secondary); margin-top: 2px; }
.universal-banner .ub-phone {
  font-family: 'DM Sans', sans-serif;
  font-size: 28px; font-weight: 700; color: var(--accent-green);
  letter-spacing: -0.02em;
}

/* ═══════════════════════════════════════
   BACK TO TOP
   ═══════════════════════════════════════ */
.back-to-top {
  position: fixed;
  bottom: 28px; right: 28px;
  width: 44px; height: 44px;
  background: var(--text-primary);
  color: var(--warm-bg);
  border: none; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 16px rgba(45,42,38,0.25);
  opacity: 0; pointer-events: none;
  transform: translateY(12px);
  transition: opacity 0.3s ease, transform 0.3s ease, background 0.2s;
  z-index: 100;
}
.back-to-top.visible {
  opacity: 1; pointer-events: auto; transform: translateY(0);
}
.back-to-top:hover { background: var(--accent-amber); }
.back-to-top svg { width: 20px; height: 20px; }

/* ═══════════════════════════════════════
   RESPONSIVE
   ═══════════════════════════════════════ */
@media (max-width: 640px) {
  .hero { padding: 50px 20px 40px; }
  .btn-retour {
    top: 16px;
    left: 16px;
    width: 44px;
    height: 44px;
  }
  .nav-bar { padding: 16px 16px 0; }
  .main-wrap { padding: 10px 16px 80px; }
  .theme-grid { grid-template-columns: repeat(2, 1fr); }
  .resource-card { padding: 14px 16px; gap: 12px; }
  .urgent-banner { flex-direction: column; padding: 20px; }
  .universal-banner { flex-direction: column; text-align: center; padding: 20px; }
  .universal-banner .ub-phone { font-size: 32px; }
  .back-to-top { bottom: 20px; right: 20px; }
}
</style>
</head>
<body>

<?php
  $theme = isset($_GET['theme']) ? htmlspecialchars($_GET['theme']) : '';
  
  $themesMap = [
    'vivre-solo' => 'Vivre Solo',
    'ado-solo' => 'Ado Solo',
    'parent-solo' => 'Parent Solo',
    'vieillir-solo' => 'Vieillir Solo',
    'voyages-solo' => 'Voyages Solo',
    'sorties-loisirs' => 'Sorties & Loisirs',
    'separation-deuil' => 'Séparation & Deuil',
  ];
  
  $themeNom = isset($themesMap[$theme]) ? $themesMap[$theme] : '';
  $themeParam = $theme ? '?theme=' . $theme : '';
?>

<!-- ═══════ HERO ═══════ -->
<section class="hero" id="top">
  <!-- Bouton retour vers le thème -->
  <a href="../7_themes/vivre-solo.php" class="btn-retour" title="Retour">
    <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
  </a>
  
  <div class="hero-badge">Québec</div>
  <h1>Ressources <em>Capitale-Nationale</em><?php echo $themeNom ? ' — ' . $themeNom : ''; ?></h1>
  <p class="subtitle">Des outils, de l'écoute, de l'inspiration — selon ce dont tu as besoin.</p>
</section>

<!-- ═══════ NAV ═══════ -->
<div class="nav-bar">
  <div class="region-select">Capitale-Nationale &#9662;</div>
</div>

<!-- ═══════ MAIN CONTENT ═══════ -->
<div class="main-wrap">

  <!-- Aide immédiate -->
  <div class="urgent-banner">
    <div class="urgent-indicator">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v4M12 17h.01M5.07 19h13.86a2 2 0 001.74-2.97L13.74 4.03a2 2 0 00-3.48 0L3.33 16.03A2 2 0 005.07 19z"/></svg>
    </div>
    <div class="urgent-body">
      <h3>Aide immédiate — 24/7</h3>
      <p>Tu traverses un moment difficile ? Quelqu'un est toujours là, de jour comme de nuit.</p>
      <div class="urgent-numbers">
        <a href="tel:811" class="urgent-pill">811 <span class="pill-label">Info-Social</span></a>
        <a href="tel:18666832433" class="urgent-pill">418-686-2433 <span class="pill-label">Tel-Aide Québec</span></a>
        <a href="tel:211" class="urgent-pill">211 <span class="pill-label">Orientation</span></a>
        <a href="tel:18662773553" class="urgent-pill">1-866-APPELLE <span class="pill-label">Suicide 24/7</span></a>
      </div>
    </div>
  </div>

  <!-- 211 banner -->
  <div class="universal-banner">
    <div class="ub-icon">211</div>
    <div class="ub-body">
      <h4>211 Québec — Trouvez des ressources près de chez vous</h4>
      <p>Service gratuit, multilingue, 24/7. Orientation vers des milliers d'organismes communautaires.</p>
    </div>
    <div class="ub-phone">2-1-1</div>
  </div>

  <!-- ═══════ THEME NAVIGATION GRID ═══════ -->
  <div class="theme-nav">
    <div class="theme-nav-title">Accès par thème</div>
    <div class="theme-grid">
      <a href="#logement" class="theme-box" data-theme="logement">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Logement</span><small>4 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#finances" class="theme-box" data-theme="finances">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Finances</span><small>1 ressource</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#alimentation" class="theme-box" data-theme="alimentation">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Alimentation</span><small>6 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#securite" class="theme-box" data-theme="securite">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Sécurité</span><small>3 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#sante" class="theme-box" data-theme="sante">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Santé</span><small>6 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#sociale" class="theme-box" data-theme="sociale">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Vie sociale</span><small>8 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#entraide" class="theme-box" data-theme="entraide">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Entraide</span><small>10 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#animaux" class="theme-box" data-theme="animaux">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Animaux</span><small>1 ressource</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#transport" class="theme-box" data-theme="transport">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Transport</span><small>3 ressources</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <a href="#proposer" class="theme-box suggest">
        <div class="theme-dot"></div>
        <div class="theme-box-text"><span>Suggestions de ressources</span><small>Proposer une ressource</small></div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
    </div>
  </div>

  <!-- ═══════ 1. LOGEMENT ═══════ -->
  <div class="category-section" id="logement">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-green-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-green)" stroke-width="2"><path d="M3 9.5L12 4l9 5.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>
      </div>
      <h2>Logement et habitation</h2>
      <span class="count">4 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="logement">
        <div class="card-dot" style="background: var(--accent-green);"></div>
        <div class="card-body">
          <h3>Office municipal d'habitation de Québec (OMHQ)</h3>
          <p class="card-desc">Logement social et subventionné (HLM, PSL, supplément au loyer). Gestion de plus de 4 000 logements dans l'agglomération de Québec.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-780-5200</span>
            <span class="card-tag">omhq.qc.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="logement">
        <div class="card-dot" style="background: var(--accent-green);"></div>
        <div class="card-body">
          <h3>Le BAIL — Groupement des locataires</h3>
          <p class="card-desc">Défense collective des droits des locataires. Information, ateliers, accompagnement juridique. Contrôle des loyers, qualité, discrimination, droit au maintien. Depuis 1970.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-523-0513</span>
            <span class="card-tag">lebail.qc.ca</span>
            <span class="card-tag scope local">Limoilou et environs</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="logement">
        <div class="card-dot" style="background: var(--accent-green);"></div>
        <div class="card-body">
          <h3>Clés en main — Logement subventionné avec soutien</h3>
          <p class="card-desc">Accès au logement subventionné (OBNL, coop, PSL, HLM). Accompagnement en prévention de l'instabilité résidentielle (APIR). Fiducie volontaire pour autonomie budgétaire. 18+.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-780-3582</span>
            <span class="card-tag">programme-cem.com</span>
            <span class="card-tag scope regional">Québec / Portneuf</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="logement">
        <div class="card-dot" style="background: var(--accent-green);"></div>
        <div class="card-body">
          <h3>YWCA Québec</h3>
          <p class="card-desc">Hébergement pour femmes (urgence, transitoire, long terme) : 60 chambres, 24/7. Logement OBNL de 18 unités pour femmes autonomes. Loisirs, centre communautaire, programmes jeunesse. Depuis 1875.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-683-2155</span>
            <span class="card-tag">ywcaquebec.qc.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 2. FINANCES ═══════ -->
  <div class="category-section" id="finances">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-amber-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-amber)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v12M8 9.5c0-1 1-2 4-2s4 1 4 2-1.5 2-4 2.5-4 1.5-4 2.5 1 2 4 2 4-1 4-2"/></svg>
      </div>
      <h2>Finances personnelles</h2>
      <span class="count">1 ressource</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="finances">
        <div class="card-dot" style="background: var(--accent-amber);"></div>
        <div class="card-body">
          <h3>ACEF de Québec — Association coopérative d'économie familiale</h3>
          <p class="card-desc">Éducation, information et conseil : finances personnelles, droits des consommateurs, des locataires et des prestataires d'aide sociale. Consultation budgétaire gratuite. Aussi bureau à Portneuf.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-522-1568</span>
            <span class="card-tag">acefquebec.org</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 3. ALIMENTATION ═══════ -->
  <div class="category-section" id="alimentation">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-coral-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-coral)" stroke-width="2"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
      </div>
      <h2>Alimentation</h2>
      <span class="count">6 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="alimentation">
        <div class="card-dot" style="background: var(--accent-coral);"></div>
        <div class="card-body">
          <h3>Moisson Québec</h3>
          <p class="card-desc">Banque alimentaire régionale : collecte et redistribution de denrées à plus de 250 organismes de la Capitale-Nationale. Oriente vers les organismes partenaires.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-682-5061</span>
            <span class="card-tag">moissonquebec.com</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="alimentation">
        <div class="card-dot" style="background: var(--accent-coral);"></div>
        <div class="card-body">
          <h3>Le Pignon Bleu</h3>
          <p class="card-desc">Centre communautaire offrant des repas gratuits et de la sécurité alimentaire. Programmes pour familles et personnes seules en situation de vulnérabilité.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-522-2289</span>
            <span class="card-tag">pignobleu.org</span>
            <span class="card-tag scope local">Limoilou / Basse-Ville</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="alimentation">
        <div class="card-dot" style="background: var(--accent-coral);"></div>
        <div class="card-body">
          <h3>La Baratte</h3>
          <p class="card-desc">Popote roulante (Ste-Foy/Sillery, lun-ven), repas surgelés livrés dans toute la Capitale-Nationale (min. 50 $), aide alimentaire, cuisines collectives. Repas complet dès 6,75 $. Depuis 1999.</p>
          <div class="card-meta">
            <span class="card-tag">labaratte.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="alimentation">
        <div class="card-dot" style="background: var(--accent-coral);"></div>
        <div class="card-body">
          <h3>Popote roulante Ste-Foy inc.</h3>
          <p class="card-desc">Repas chauds livrés à domicile : soupe, plat principal, dessert. Préparés par le CHUL ou l'IUCPQ (menus de diététistes). Lundi au vendredi.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-654-9017</span>
            <span class="card-tag">popoteroulantestefoy.org</span>
            <span class="card-tag scope local">Sainte-Foy</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="alimentation">
        <div class="card-dot" style="background: var(--accent-coral);"></div>
        <div class="card-body">
          <h3>Bénévolat Montcalm-Saint-Sacrement</h3>
          <p class="card-desc">Popote roulante Haute-Ville. Repas préparés par l'Hôpital Saint-Sacrement (menus de diététistes). Lun-ven 11 h à 13 h. 10 $/repas.</p>
          <div class="card-meta">
            <span class="card-tag">benevolatstsacrement.com</span>
            <span class="card-tag scope local">Montcalm / Saint-Sacrement</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="alimentation">
        <div class="card-dot" style="background: var(--accent-coral);"></div>
        <div class="card-body">
          <h3>L'ELSI — Soutien alimentaire à domicile</h3>
          <p class="card-desc">Favorise le maintien à domicile des aînés par la livraison de repas et l'accompagnement. Popote roulante.</p>
          <div class="card-meta">
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 4. SÉCURITÉ ═══════ -->
  <div class="category-section" id="securite">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-slate-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-slate)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <h2>Sécurité</h2>
      <span class="count">3 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="securite">
        <div class="card-dot" style="background: var(--accent-slate);"></div>
        <div class="card-body">
          <h3>CAVAC — Capitale-Nationale et Chaudière-Appalaches</h3>
          <p class="card-desc">Aide gratuite et confidentielle pour toute personne victime d'un acte criminel. Soutien psychosocial, accompagnement judiciaire, information sur les droits et recours. Que le crime ait été dénoncé ou non.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-649-3527</span>
            <span class="card-tag">cavac.qc.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale + Chaudière-Appalaches</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="securite">
        <div class="card-dot" style="background: var(--accent-slate);"></div>
        <div class="card-body">
          <h3>SOS Violence conjugale</h3>
          <p class="card-desc">Aide confidentielle 24/7 pour personnes victimes ou témoins de violence conjugale. Écoute, hébergement d'urgence, références vers les ressources régionales.</p>
          <div class="card-meta">
            <span class="card-tag phone">1-800-363-9010 (24/7)</span>
            <span class="card-tag">sosviolenceconjugale.ca</span>
            <span class="card-tag scope">Provincial — 24/7</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="securite">
        <div class="card-dot" style="background: var(--accent-slate);"></div>
        <div class="card-body">
          <h3>Ligne Aide Abus Aînés</h3>
          <p class="card-desc">Écoute et référence pour personnes aînées victimes d'abus (physique, financier, psychologique, négligence) ou pour leurs proches préoccupés.</p>
          <div class="card-meta">
            <span class="card-tag phone">1-888-489-2287</span>
            <span class="card-tag scope">Provincial</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 5. SANTÉ ═══════ -->
  <div class="category-section" id="sante">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-rose-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-rose)" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
      </div>
      <h2>Santé et bien-être</h2>
      <span class="count">6 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="sante">
        <div class="card-dot" style="background: var(--accent-rose);"></div>
        <div class="card-body">
          <h3>CLSC de la Capitale-Nationale — Accueil psychosocial</h3>
          <p class="card-desc">Porte d'entrée gratuite : écoute, évaluation, orientation vers psychologue, travailleur social ou services spécialisés. Isolement, dépression, crise, deuil. Plusieurs points de service.</p>
          <div class="card-meta">
            <span class="card-tag phone">811 option 2 (24/7)</span>
            <span class="card-tag">ciusss-capitalenationale.gouv.qc.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale (CIUSSS)</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sante">
        <div class="card-dot" style="background: var(--accent-rose);"></div>
        <div class="card-body">
          <h3>Tel-Aide Québec</h3>
          <p class="card-desc">Écoute téléphonique anonyme et confidentielle, de 9 h à minuit, 365 jours par année. Solitude, anxiété, détresse, idées suicidaires. Depuis 1972.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-686-2433</span>
            <span class="card-tag phone">Sans frais : 1-877-700-2433</span>
            <span class="card-tag">telaide.qc.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale + Bas-Saint-Laurent + Gaspésie</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sante">
        <div class="card-dot" style="background: var(--accent-rose);"></div>
        <div class="card-body">
          <h3>Centre de prévention du suicide de Québec (CPSQ)</h3>
          <p class="card-desc">Services professionnels en prévention du suicide : intervention 24/7, accompagnement des proches, soutien aux personnes endeuillées par suicide. Formations sentinelles.</p>
          <div class="card-meta">
            <span class="card-tag phone">1-866-APPELLE (277-3553) 24/7</span>
            <span class="card-tag">cpsquebec.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sante">
        <div class="card-dot" style="background: var(--accent-rose);"></div>
        <div class="card-body">
          <h3>ACSM Québec — Santé mentale</h3>
          <p class="card-desc">Information, référence et soutien téléphonique en santé mentale. Ateliers et groupes d'entraide pour personnes vivant avec un trouble de santé mentale ou leurs proches.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-529-1979</span>
            <span class="card-tag">acsm-quebec.org</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sante">
        <div class="card-dot" style="background: var(--accent-rose);"></div>
        <div class="card-body">
          <h3>AutonHommie — Centre de ressources pour hommes</h3>
          <p class="card-desc">Accueil, écoute, groupes de soutien pour hommes en difficulté : rupture, deuil, parentalité, impulsivité, dépression, abus sexuels. Consultations individuelles ou de groupe. Tarification à échelle variable. Depuis 1984.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-648-6480</span>
            <span class="card-tag">autonhommie.org</span>
            <span class="card-tag scope regional">Capitale-Nationale (Québec + Portneuf)</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sante">
        <div class="card-dot" style="background: var(--accent-rose);"></div>
        <div class="card-body">
          <h3>Collectif 55+</h3>
          <p class="card-desc">Organisation dédiée aux personnes de 55 ans et plus. Activités sociales, ateliers, soutien contre l'isolement.</p>
          <div class="card-meta">
            <span class="card-tag scope local">Sainte-Foy–Sillery–Cap-Rouge</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 6. VIE SOCIALE ═══════ -->
  <div class="category-section" id="sociale">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-blue-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-blue)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
      </div>
      <h2>Vie sociale et milieux de vie</h2>
      <span class="count">8 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>Centres communautaires — Ville de Québec</h3>
          <p class="card-desc">Activités sportives, culturelles et sociales accessibles dans tous les arrondissements. Programmation saisonnière variée. Tarifs réduits pour personnes à faible revenu.</p>
          <div class="card-meta">
            <span class="card-tag">ville.quebec.qc.ca</span>
            <span class="card-tag scope regional">Ville de Québec</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>4Loisirs</h3>
          <p class="card-desc">Activités de loisirs accessibles à tous, favorisant la santé et le bien-être. Sports, plein air, activités sociales à faible coût.</p>
          <div class="card-meta">
            <span class="card-tag">4loisirs.org</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>Société Saint-Vincent de Paul de Québec</h3>
          <p class="card-desc">Aide alimentaire, vestimentaire et matérielle. Présence dans tous les arrondissements. Écoute et accompagnement des personnes isolées.</p>
          <div class="card-meta">
            <span class="card-tag">Via le 211</span>
            <span class="card-tag scope regional">Ville de Québec</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>Centre des femmes de la Basse-Ville</h3>
          <p class="card-desc">Espace d'écoute, de soutien et d'action pour briser l'isolement des femmes. Activités collectives, ateliers, accompagnement. Milieu de vie féministe et solidaire.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-648-9092</span>
            <span class="card-tag scope local">Basse-Ville / Limoilou</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>Centre Femmes d'aujourd'hui</h3>
          <p class="card-desc">Milieu de vie pour femmes. Briser l'isolement, améliorer les conditions de vie. Activités, groupes, écoute.</p>
          <div class="card-meta">
            <span class="card-tag scope local">Sainte-Foy–Sillery–Cap-Rouge</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>Centre International des Femmes, Québec (CIFQ)</h3>
          <p class="card-desc">Aide aux femmes immigrantes et à leurs familles. Accompagnement, interprètes, activités pour briser l'isolement. Équipe multilingue. Depuis 1981.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-688-5530</span>
            <span class="card-tag">cifqfemmes.qc.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>Réseau Hommes Québec (R.H.Q.)</h3>
          <p class="card-desc">Cercles de partage entre hommes. Écoute, partage, croissance personnelle. Présent dans plusieurs arrondissements de Québec.</p>
          <div class="card-meta">
            <span class="card-tag scope regional">Ville de Québec</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="sociale">
        <div class="card-dot" style="background: var(--accent-blue);"></div>
        <div class="card-body">
          <h3>L'Archipel d'entraide</h3>
          <p class="card-desc">Organisme communautaire. Milieu de vie, activités sociales, entraide de quartier.</p>
          <div class="card-meta">
            <span class="card-tag scope local">La Cité-Limoilou</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 7. ENTRAIDE ═══════ -->
  <div class="category-section" id="entraide">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-purple-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-purple)" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
      </div>
      <h2>Entraide et soutien à domicile</h2>
      <span class="count">10 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Les Petits Frères — Québec (Maison Paul-Hébert)</h3>
          <p class="card-desc">Accompagnement bénévole gratuit pour personnes de 75 ans et plus vivant en situation d'isolement. Visites régulières, appels d'amitié, sorties, fêtes. Depuis plus de 20 ans dans la région.</p>
          <div class="card-meta">
            <span class="card-tag phone">1-866-627-8653</span>
            <span class="card-tag">petitsfreres.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Service amical Basse-Ville (SABV)</h3>
          <p class="card-desc">Depuis 1979. Visites amicales, 8 000 appels sécuritaires/an, transport médical (6 000 déplacements/an), popote roulante, entretien ménager (27 000 h/an), activités sociales. Dessert 2 000 personnes.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-529-9029</span>
            <span class="card-tag">serviceamical.com</span>
            <span class="card-tag scope local">Basse-Ville / Saint-Roch / Limoilou</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Contact Aînés</h3>
          <p class="card-desc">Lutte contre l'isolement social des personnes aînées. Écoute, accompagnement, orientation vers les services, activités intergénérationnelles. Ouvert de 9 h à 22 h 30.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-687-3553</span>
            <span class="card-tag scope regional">Capitale-Nationale + Charlevoix</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Centre d'action bénévole du Contrefort (CABC)</h3>
          <p class="card-desc">Visites d'amitié et appels sécuritaires pour personnes seules. Accompagnement-transport pour rendez-vous médicaux, épicerie. Dépannage ponctuel.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-622-5910</span>
            <span class="card-tag">cabducontrefort.quebec</span>
            <span class="card-tag scope local">Charlesbourg / Stoneham / Lac-Beauport</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Centre d'action bénévole Aide23</h3>
          <p class="card-desc">Services personnalisés pour personnes aînées ou vulnérables : accompagnement-transport, visites amicales, téléphone de sécurité, dépannage.</p>
          <div class="card-meta">
            <span class="card-tag">cabaide23.org</span>
            <span class="card-tag scope local">Beauport et environs</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Centre d'action bénévole de Québec (CABQ)</h3>
          <p class="card-desc">Jumelage entre bénévoles et personnes isolées. Orientation vers des occasions de bénévolat pour briser l'isolement. Intégration des personnes immigrantes par le bénévolat.</p>
          <div class="card-meta">
            <span class="card-tag phone">418-681-3501</span>
            <span class="card-tag">cabquebec.org</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Agence PAIR — Proches aidants de la Capitale-Nationale</h3>
          <p class="card-desc">Visites amicales et appels sécuritaires pour aînés. Soutien aux proches aidants.</p>
          <div class="card-meta">
            <span class="card-tag scope regional">Québec / Saint-Augustin / L'Ancienne-Lorette</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Communautés solidaires</h3>
          <p class="card-desc">Assistance aux personnes aînées et vulnérables. Réseau d'entraide mutuelle de quartier.</p>
          <div class="card-meta">
            <span class="card-tag scope local">Beauport</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>Entraide Sainte-Foy / Sillery / Faubourg</h3>
          <p class="card-desc">Réseau local d'entraide par quartier : bénévolat, accompagnement, activités sociales. Chaque organisme couvre un territoire précis.</p>
          <div class="card-meta">
            <span class="card-tag phone">Sillery : 418-641-6665</span>
            <span class="card-tag scope local">Sainte-Foy / Sillery</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="entraide">
        <div class="card-dot" style="background: var(--accent-purple);"></div>
        <div class="card-body">
          <h3>L'Appui pour les proches aidants — Info-Aidant</h3>
          <p class="card-desc">Ligne d'écoute provinciale, information et orientation pour les proches aidants. Soutien psychosocial professionnel. Répertoire de ressources en ligne.</p>
          <div class="card-meta">
            <span class="card-tag phone">1-855-852-7784</span>
            <span class="card-tag">lappui.org</span>
            <span class="card-tag scope">Provincial</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 8. ANIMAUX ═══════ -->
  <div class="category-section" id="animaux">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-warm-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-warm)" stroke-width="2"><circle cx="11" cy="4" r="2"/><circle cx="18" cy="8" r="2"/><circle cx="4" cy="8" r="2"/><path d="M12 21c-4 0-7-2-7-5 0-2 2-4 4-5s4-1 6 0 4 3 4 5c0 3-3 5-7 5z"/></svg>
      </div>
      <h2>Animaux de compagnie</h2>
      <span class="count">1 ressource</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="animaux">
        <div class="card-dot" style="background: var(--accent-warm);"></div>
        <div class="card-body">
          <h3>SPA de Québec</h3>
          <p class="card-desc">Refuge offrant adoption de chiens, chats et autres animaux. Un compagnon animal peut jouer un rôle important contre l'isolement et la solitude au quotidien.</p>
          <div class="card-meta">
            <span class="card-tag">spadequebec.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <!-- ═══════ 9. TRANSPORT ═══════ -->
  <div class="category-section" id="transport">
    <div class="category-header">
      <div class="category-indicator" style="background: var(--accent-olive-light);">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-olive)" stroke-width="2"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M6 20h12M8 16v4M16 16v4M7 12h0M17 12h0"/></svg>
      </div>
      <h2>Transport et mobilité</h2>
      <span class="count">3 ressources</span>
    </div>
    <div class="card-grid">
      <div class="resource-card" data-cat="transport">
        <div class="card-dot" style="background: var(--accent-olive);"></div>
        <div class="card-body">
          <h3>RTC — Réseau de transport de la Capitale</h3>
          <p class="card-desc">Transport en commun desservant Québec et ses environs. Métrobus, parcours express, réseau de nuit. Tarifs réduits disponibles.</p>
          <div class="card-meta">
            <span class="card-tag">rtcquebec.ca</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="transport">
        <div class="card-dot" style="background: var(--accent-olive);"></div>
        <div class="card-body">
          <h3>Transport adapté du RTC</h3>
          <p class="card-desc">Service de transport spécialisé pour personnes à mobilité réduite. Inscription sur évaluation médicale.</p>
          <div class="card-meta">
            <span class="card-tag">rtcquebec.ca/transport-adapte</span>
            <span class="card-tag scope regional">Capitale-Nationale</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
      <div class="resource-card" data-cat="transport">
        <div class="card-dot" style="background: var(--accent-olive);"></div>
        <div class="card-body">
          <h3>Communauto — Autopartage</h3>
          <p class="card-desc">Accès à une voiture sans en posséder une. Stations disponibles dans plusieurs quartiers de Québec. Formule flexible pour personnes seules.</p>
          <div class="card-meta">
            <span class="card-tag">communauto.com</span>
            <span class="card-tag scope">Provincial (présent à Québec)</span>
          </div>
        </div>
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </div>
    </div>
  </div>

  <div id="proposer" style="scroll-margin-top: 24px;">
    <?php include '../components/boite-proposer-ressource.php'; ?>
  </div>

</div>

<!-- ═══════ BACK TO TOP ═══════ -->
<button class="back-to-top" id="backToTop" title="Remonter">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<script>
// Back to top button
const btn = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  if (window.scrollY > 400) {
    btn.classList.add('visible');
  } else {
    btn.classList.remove('visible');
  }
});
btn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

</body>
</html>
