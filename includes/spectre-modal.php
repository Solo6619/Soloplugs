<?php
/**
 * SOLOPLUGS - Spectre de Solitude (Modale)
 * 
 * Fichier: /includes/spectre-modal.php
 * 
 * UTILISATION:
 * Ajouter dans footer.php (juste avant </body>) :
 * <?php include('includes/spectre-modal.php'); ?>
 * 
 * PRÉREQUIS:
 * - CSS: /css/spectre-solitude.css (à inclure dans <head>)
 * - JS: /js/spectre-solitude.js (à inclure avant </body>)
 * - Bouton dans header.php (voir snippet ci-dessous)
 */
?>

<!-- ============================================
     MODALE SPECTRE DE SOLITUDE
     ============================================ -->
<div class="spectre-modal-overlay" id="spectreModal">
    <div class="spectre-modal">
        <button class="spectre-modal-close" id="closeSpectreModal" aria-label="Fermer">
            ✕
        </button>
        
        <h2 class="spectre-modal-title">Où en es-tu avec la solitude ?</h2>
        <p class="spectre-modal-subtitle">Clique sur le point qui correspond le mieux à ton ressenti actuel</p>
        
        <div class="spectre-container">
            <!-- Labels des zones -->
            <div class="spectre-labels">
                <span class="spectre-label habitee">Habitée</span>
                <span class="spectre-label tension">En tension</span>
                <span class="spectre-label souffrante">Souffrante</span>
            </div>
            
            <!-- Barre de gradient -->
            <div class="spectre-bar-container">
                <div class="spectre-bar"></div>
            </div>
            
            <!-- Points cliquables (12 niveaux) -->
            <div class="spectre-points">
                <?php for ($i = 1; $i <= 12; $i++): ?>
                <div class="spectre-point" data-level="<?= $i ?>" tabindex="0"></div>
                <?php endfor; ?>
            </div>
        </div>
        
        <!-- Résultat (apparaît après sélection) -->
        <div class="spectre-result" id="spectreResult">
            <span class="spectre-result-badge" id="resultBadge">Zone</span>
            <h3 class="spectre-result-title" id="resultTitle">Titre</h3>
            <p class="spectre-result-description" id="resultDescription">Description</p>
            <button class="spectre-explore-btn" id="exploreBtn">
                Explorer mon parcours
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
        
        <!-- Message pour niveaux élevés (9-12) -->
        <div class="spectre-ressources-hint" id="spectreRessourcesHint" style="display: none;">
            <p class="spectre-ressources-text">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 6px;">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 16v-4M12 8h.01"/>
                </svg>
                Tu n'es pas seul(e). Des ressources d'aide sont disponibles.
            </p>
        </div>
    </div>
</div>
<!-- FIN MODALE SPECTRE -->
