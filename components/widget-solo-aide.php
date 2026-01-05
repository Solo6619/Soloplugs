<?php
/**
 * Widget S♡lo - Version 3 - Avec logo image
 * SOLOPLUGS - La Voix de la Solitude
 * 
 * Un widget d'accueil positif qui reflète la philosophie SOLOPLUGS :
 * la solitude peut être choisie, enrichissante, et n'est pas une pathologie.
 */
?>

<!-- Widget S♡lo V3 - Avec logo image -->
<style>
/* ========================================
   WIDGET S♡LO V3 - STYLES
   ======================================== */

:root {
    --solo-taupe: #5C554E;
    --solo-taupe-light: #7A726A;
    --solo-taupe-dark: #4A443E;
    --solo-creme: #F8F4EE;
    --solo-creme-dark: #EDE7DD;
    --solo-or: #D4A574;
    --solo-or-light: #E8C9A8;
    --solo-shadow: rgba(92, 85, 78, 0.15);
    --solo-shadow-strong: rgba(92, 85, 78, 0.25);
}

/* Bouton flottant - Version image */
.solo-widget-trigger {
    position: fixed;
    bottom: 24px;
    right: 24px;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--solo-taupe) 0%, var(--solo-taupe-dark) 100%);
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 20px var(--solo-shadow-strong),
                0 2px 8px var(--solo-shadow);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 9998;
    overflow: hidden;
    padding: 0;
}

.solo-widget-trigger:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 30px var(--solo-shadow-strong),
                0 4px 12px var(--solo-shadow);
}

.solo-widget-trigger:active {
    transform: translateY(-1px) scale(1.02);
}

/* Image du logo dans le bouton */
.solo-widget-trigger-logo {
    width: 75%;
    height: 75%;
    object-fit: contain;
    filter: brightness(0) invert(1);  /* Rend l'image blanche/crème */
    transition: all 0.3s ease;
}

.solo-widget-trigger:hover .solo-widget-trigger-logo {
    filter: brightness(0) invert(1) drop-shadow(0 0 8px rgba(212, 165, 116, 0.5));
}

/* Pulsation douce et accueillante */
.solo-widget-trigger::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: var(--solo-or);
    opacity: 0;
    animation: solo-pulse 4s ease-in-out infinite;
    z-index: 0;
}

.solo-widget-trigger-logo {
    position: relative;
    z-index: 1;
}

@keyframes solo-pulse {
    0%, 100% { transform: scale(1); opacity: 0; }
    50% { transform: scale(1.12); opacity: 0.2; }
}

/* Panneau principal */
.solo-widget-panel {
    position: fixed;
    bottom: 100px;
    right: 24px;
    width: 360px;
    max-width: calc(100vw - 48px);
    max-height: calc(100vh - 140px);
    background: var(--solo-creme);
    border-radius: 20px;
    box-shadow: 0 10px 50px var(--solo-shadow-strong),
                0 4px 20px var(--solo-shadow);
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px) scale(0.95);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 9999;
    overflow: hidden;
}

.solo-widget-panel.solo-active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
}

/* En-tête du panneau */
.solo-widget-header {
    background: linear-gradient(135deg, var(--solo-taupe) 0%, var(--solo-taupe-dark) 100%);
    padding: 24px;
    position: relative;
    overflow: hidden;
}

.solo-widget-header::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(212, 165, 116, 0.15) 0%, transparent 70%);
    border-radius: 50%;
}

/* Avatar avec logo image */
.solo-widget-avatar {
    width: 56px;
    height: 56px;
    background: var(--solo-creme);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    padding: 10px;
}

.solo-widget-avatar img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.solo-widget-greeting {
    margin: 0;
    color: var(--solo-creme);
    font-family: 'Lora', Georgia, serif;
    font-size: 1.3rem;
    font-weight: 500;
    position: relative;
    z-index: 1;
}

.solo-widget-subtitle {
    margin: 6px 0 0 0;
    color: var(--solo-creme-dark);
    font-family: 'Inter', -apple-system, sans-serif;
    font-size: 0.9rem;
    font-weight: 400;
    opacity: 0.9;
    position: relative;
    z-index: 1;
}

.solo-widget-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    z-index: 2;
}

.solo-widget-close:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.1);
}

.solo-widget-close svg {
    width: 16px;
    height: 16px;
    stroke: var(--solo-creme);
    stroke-width: 2;
}

/* Contenu du panneau */
.solo-widget-content {
    padding: 20px;
    overflow-y: auto;
    max-height: calc(100vh - 320px);
}

/* Message d'accueil */
.solo-widget-welcome {
    background: white;
    border-radius: 16px;
    padding: 16px;
    margin-bottom: 16px;
    border-left: 3px solid var(--solo-or);
}

.solo-widget-welcome p {
    margin: 0;
    font-family: 'Lora', Georgia, serif;
    font-size: 0.95rem;
    line-height: 1.6;
    color: var(--solo-taupe);
}

/* Options de navigation */
.solo-widget-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.solo-option-card {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 16px;
    background: white;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.25s ease;
    border: 1px solid transparent;
}

.solo-option-card:hover {
    transform: translateX(4px);
    border-color: var(--solo-or-light);
    box-shadow: 0 4px 15px var(--solo-shadow);
}

.solo-option-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 18px;
}

.solo-option-icon.themes {
    background: linear-gradient(135deg, #E8C9A8 0%, var(--solo-or) 100%);
}

.solo-option-icon.magazine {
    background: linear-gradient(135deg, #A8C5E8 0%, #6B9BD1 100%);
}

.solo-option-icon.ressources {
    background: linear-gradient(135deg, #C5E8C0 0%, #7ABD70 100%);
}

.solo-option-icon.solo-ia {
    background: linear-gradient(135deg, var(--solo-taupe-light) 0%, var(--solo-taupe) 100%);
}

.solo-option-info {
    flex: 1;
    min-width: 0;
}

.solo-option-title {
    display: block;
    font-family: 'Inter', -apple-system, sans-serif;
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--solo-taupe);
    margin-bottom: 2px;
}

.solo-option-desc {
    display: block;
    font-family: 'Inter', -apple-system, sans-serif;
    font-size: 0.8rem;
    color: var(--solo-taupe-light);
}

.solo-option-arrow {
    width: 18px;
    height: 18px;
    stroke: var(--solo-taupe-light);
    stroke-width: 2;
    flex-shrink: 0;
    transition: all 0.2s ease;
}

.solo-option-card:hover .solo-option-arrow {
    stroke: var(--solo-or);
    transform: translateX(4px);
}

.solo-option-badge {
    font-family: 'Inter', -apple-system, sans-serif;
    font-size: 0.7rem;
    font-weight: 600;
    color: white;
    background: var(--solo-or);
    padding: 3px 8px;
    border-radius: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Séparateur */
.solo-widget-separator {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--solo-creme-dark), transparent);
    margin: 16px 0;
}

/* Lien d'aide */
.solo-widget-help {
    text-align: center;
    padding: 8px 0;
}

.solo-widget-help a {
    font-family: 'Inter', -apple-system, sans-serif;
    font-size: 0.8rem;
    color: var(--solo-taupe-light);
    text-decoration: none;
    transition: color 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.solo-widget-help a:hover {
    color: var(--solo-taupe);
}

.solo-widget-help svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    stroke-width: 2;
}

/* Pied de panneau */
.solo-widget-footer {
    padding: 12px 20px;
    background: var(--solo-creme-dark);
    border-top: 1px solid rgba(92, 85, 78, 0.08);
    text-align: center;
}

.solo-widget-footer p {
    margin: 0;
    font-family: 'Lora', Georgia, serif;
    font-size: 0.75rem;
    font-style: italic;
    color: var(--solo-taupe-light);
}

/* Overlay sur mobile */
.solo-widget-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.3);
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 9997;
    display: none;
}

.solo-widget-overlay.solo-active {
    opacity: 1;
    visibility: visible;
}

/* Responsive */
@media (max-width: 480px) {
    .solo-widget-trigger {
        bottom: 16px;
        right: 16px;
        width: 56px;
        height: 56px;
    }
    
    .solo-widget-panel {
        bottom: 0;
        right: 0;
        left: 0;
        width: 100%;
        max-width: 100%;
        border-radius: 20px 20px 0 0;
        max-height: 80vh;
    }
    
    .solo-widget-panel.solo-active {
        transform: translateY(0);
    }
    
    .solo-widget-overlay {
        display: block;
    }
    
    .solo-widget-content {
        max-height: calc(80vh - 240px);
    }
}

/* Accessibilité */
.solo-widget-trigger:focus-visible,
.solo-widget-close:focus-visible,
.solo-option-card:focus-visible,
.solo-widget-help a:focus-visible {
    outline: 3px solid var(--solo-or);
    outline-offset: 2px;
}

@media (prefers-reduced-motion: reduce) {
    .solo-widget-trigger::after {
        animation: none;
    }
    
    .solo-widget-panel,
    .solo-widget-trigger,
    .solo-option-card {
        transition: none;
    }
}
</style>

<!-- Structure HTML du widget -->
<div class="solo-widget-overlay" id="soloWidgetOverlay" aria-hidden="true"></div>

<button class="solo-widget-trigger" 
        id="soloWidgetTrigger" 
        aria-label="Ouvrir Solo — Votre guide Soloplugs"
        aria-expanded="false"
        aria-controls="soloWidgetPanel">
    <img src="<?php echo $basePath ?? ''; ?>images/logo-solo-heart.png" 
         alt="Solo" 
         class="solo-widget-trigger-logo">
</button>

<div class="solo-widget-panel" 
     id="soloWidgetPanel" 
     role="dialog" 
     aria-labelledby="soloWidgetGreeting"
     aria-modal="true">
    
    <header class="solo-widget-header">
        <div class="solo-widget-avatar">
            <img src="<?php echo $basePath ?? ''; ?>images/logo-solo-heart.png" alt="Solo">
        </div>
        <h2 class="solo-widget-greeting" id="soloWidgetGreeting">Salut, c'est Solo !</h2>
        <p class="solo-widget-subtitle">Ton guide dans l'univers Soloplugs</p>
        <button class="solo-widget-close" 
                id="soloWidgetClose" 
                aria-label="Fermer">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </header>
    
    <div class="solo-widget-content">
        <div class="solo-widget-welcome">
            <p>Que tu explores la solitude par choix ou que tu cherches à mieux la vivre, je suis là pour t'accompagner. Qu'est-ce qui t'intéresse ?</p>
        </div>
        
        <div class="solo-widget-options">
            <!-- Explorer les thèmes -->
            <a href="<?php echo $basePath ?? ''; ?>index.php#themes" class="solo-option-card">
                <div class="solo-option-icon themes">
                    <span>🧭</span>
                </div>
                <div class="solo-option-info">
                    <span class="solo-option-title">Explorer les thèmes</span>
                    <span class="solo-option-desc">7 univers pour accompagner ta solitude</span>
                </div>
                <svg class="solo-option-arrow" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <!-- Magazine -->
            <a href="<?php echo $basePath ?? ''; ?>magazine.php" class="solo-option-card">
                <div class="solo-option-icon magazine">
                    <span>📖</span>
                </div>
                <div class="solo-option-info">
                    <span class="solo-option-title">Lire le Magazine</span>
                    <span class="solo-option-desc">Articles, témoignages, réflexions</span>
                </div>
                <svg class="solo-option-arrow" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <!-- Ressources -->
            <a href="<?php echo $basePath ?? ''; ?>ressources.php" class="solo-option-card">
                <div class="solo-option-icon ressources">
                    <span>🌿</span>
                </div>
                <div class="solo-option-info">
                    <span class="solo-option-title">Ressources</span>
                    <span class="solo-option-desc">Outils et lectures pour s'épanouir</span>
                </div>
                <svg class="solo-option-arrow" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <!-- Parler avec Solo (bientôt) -->
            <div class="solo-option-card" style="opacity: 0.7; cursor: default;">
                <div class="solo-option-icon solo-ia">
                    <span>💬</span>
                </div>
                <div class="solo-option-info">
                    <span class="solo-option-title">Parler avec Solo</span>
                    <span class="solo-option-desc">Ton compagnon de réflexion</span>
                </div>
                <span class="solo-option-badge">Bientôt</span>
            </div>
        </div>
        
        <!-- Séparateur -->
        <div class="solo-widget-separator"></div>
        
        <!-- Lien d'aide discret -->
        <div class="solo-widget-help">
            <a href="<?php echo $basePath ?? ''; ?>ressources.php#aide-urgence">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke-linecap="round"/>
                    <path d="M12 8v4M12 16h.01" stroke-linecap="round"/>
                </svg>
                Besoin d'aide ? Des ressources sont là pour toi
            </a>
        </div>
    </div>
    
    <footer class="solo-widget-footer">
        <p>« Bien vivre seul·e, c'est d'abord apprendre l'art de sa propre compagnie. »</p>
    </footer>
</div>

<script>
/**
 * Widget S♡lo V3 - Logique JavaScript
 */
(function() {
    'use strict';
    
    const trigger = document.getElementById('soloWidgetTrigger');
    const panel = document.getElementById('soloWidgetPanel');
    const closeBtn = document.getElementById('soloWidgetClose');
    const overlay = document.getElementById('soloWidgetOverlay');
    
    if (!trigger || !panel || !closeBtn) {
        console.warn('Widget S♡lo : Éléments manquants');
        return;
    }
    
    let isOpen = false;
    
    function openPanel() {
        isOpen = true;
        panel.classList.add('solo-active');
        overlay.classList.add('solo-active');
        trigger.setAttribute('aria-expanded', 'true');
        setTimeout(() => closeBtn.focus(), 100);
        document.body.style.overflow = 'hidden';
    }
    
    function closePanel() {
        isOpen = false;
        panel.classList.remove('solo-active');
        overlay.classList.remove('solo-active');
        trigger.setAttribute('aria-expanded', 'false');
        trigger.focus();
        document.body.style.overflow = '';
    }
    
    function togglePanel() {
        isOpen ? closePanel() : openPanel();
    }
    
    trigger.addEventListener('click', togglePanel);
    closeBtn.addEventListener('click', closePanel);
    overlay.addEventListener('click', closePanel);
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isOpen) closePanel();
    });
    
    // Piège de focus
    panel.addEventListener('keydown', function(e) {
        if (e.key !== 'Tab' || !isOpen) return;
        
        const focusable = panel.querySelectorAll(
            'button, a[href], [tabindex]:not([tabindex="-1"])'
        );
        const first = focusable[0];
        const last = focusable[focusable.length - 1];
        
        if (e.shiftKey && document.activeElement === first) {
            e.preventDefault();
            last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
            e.preventDefault();
            first.focus();
        }
    });
    
    console.log('✓ Widget S♡lo V3 chargé — Soloplugs');
})();
</script>
<!-- Fin Widget S♡lo V3 -->
