<!-- 
  SOLOPLUGS — Composant Ressources Thématiques
  
  Usage :
  <?php 
    $theme = 'ado';  // ado, parent, aine, deuil, separation, vivre
    $titre = 'Ressources pour toi';
    $showLocalisation = true; // Afficher le champ de recherche par localisation
    include 'components/ressources-section.php'; 
  ?>
  
  Variables disponibles :
  - $theme : Thématique pour filtrer les ressources
  - $titre : Titre de la section (optionnel)
  - $showLocalisation : Afficher la recherche par localisation (défaut: true)
  - $basePath : Chemin de base du site
-->

<?php
  // Valeurs par défaut
  $theme = $theme ?? 'vivre';
  $titre = $titre ?? 'Ressources';
  $showLocalisation = $showLocalisation ?? true;
  $basePath = $basePath ?? '';
?>

<section class="ressources-thematiques" id="ressources-section" data-theme="<?php echo $theme; ?>">
  
  <div class="ressources-intro">
    <h2><?php echo $titre; ?></h2>
    <p class="ressources-intro-text">
      <?php
        switch($theme) {
          case 'ado':
            echo "Tu n'es pas seul·e. Des lignes d'écoute et des ressources sont là pour toi, 24h/24.";
            break;
          case 'parent':
            echo "Être parent solo, c'est beaucoup. Voici des ressources pour t'accompagner.";
            break;
          case 'aine':
            echo "La solitude peut peser. Voici des ressources pour briser l'isolement et trouver du soutien.";
            break;
          case 'deuil':
            echo "Le deuil est un chemin difficile. Ces ressources sont là pour t'accompagner.";
            break;
          case 'separation':
            echo "Une séparation bouleverse tout. Voici de l'aide pour traverser cette épreuve.";
            break;
          default:
            echo "Des outils, de l'écoute, de l'inspiration — selon ce dont tu as besoin.";
        }
      ?>
    </p>
  </div>

  <?php if ($showLocalisation): ?>
  <!-- Recherche par localisation -->
  <div class="ressources-localisation">
    <div class="localisation-wrapper">
      <input 
        type="text" 
        class="localisation-input" 
        id="ressources-search-<?php echo $theme; ?>"
        placeholder="Entre ton code postal ou ta ville"
        autocomplete="off"
      >
      <svg class="localisation-icon" viewBox="0 0 24 24" fill="none">
        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
        <path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
      <div class="localisation-suggestions" id="suggestions-<?php echo $theme; ?>"></div>
    </div>
    <p class="localisation-hint">📍 Pour voir les ressources près de chez toi</p>
  </div>
  <?php endif; ?>

  <!-- Conteneur des ressources (rempli par JS) -->
  <div class="ressources-contenu" id="ressources-contenu-<?php echo $theme; ?>">
    <!-- Chargement initial avec ressources provinciales -->
  </div>

</section>

<style>
/* ========================================
   SECTION RESSOURCES THÉMATIQUES
   ======================================== */

.ressources-thematiques {
  padding: 3rem 0;
  background: linear-gradient(180deg, #FBF9F6 0%, #F5EFE6 100%);
}

.ressources-intro {
  text-align: center;
  max-width: 600px;
  margin: 0 auto 2rem;
  padding: 0 1.5rem;
}

.ressources-intro h2 {
  font-family: 'Lora', Georgia, serif;
  font-size: 2rem;
  color: #5C554E;
  margin-bottom: 0.75rem;
}

.ressources-intro-text {
  font-family: 'Inter', sans-serif;
  font-size: 1.05rem;
  color: #7A726A;
  line-height: 1.6;
}

/* Localisation */
.ressources-localisation {
  max-width: 450px;
  margin: 0 auto 2.5rem;
  padding: 0 1.5rem;
}

.localisation-wrapper {
  position: relative;
}

.localisation-input {
  width: 100%;
  padding: 1rem 3rem 1rem 1.25rem;
  font-family: 'Inter', sans-serif;
  font-size: 1rem;
  border: 2px solid #EDE7DD;
  border-radius: 12px;
  background: white;
  color: #5C554E;
  transition: all 0.25s ease;
}

.localisation-input:focus {
  outline: none;
  border-color: #D4A574;
  box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.15);
}

.localisation-input::placeholder {
  color: #A9A29B;
}

.localisation-icon {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  width: 22px;
  height: 22px;
  color: #7A726A;
  pointer-events: none;
}

.localisation-hint {
  font-family: 'Inter', sans-serif;
  font-size: 0.85rem;
  color: #7A726A;
  text-align: center;
  margin-top: 0.75rem;
}

/* Suggestions */
.localisation-suggestions {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: white;
  border: 2px solid #D4A574;
  border-top: none;
  border-radius: 0 0 12px 12px;
  max-height: 220px;
  overflow-y: auto;
  z-index: 100;
  display: none;
}

.localisation-suggestions.active {
  display: block;
}

.suggestion-item {
  padding: 0.85rem 1.25rem;
  cursor: pointer;
  transition: background 0.15s ease;
  border-bottom: 1px solid #F5F0E8;
}

.suggestion-item:last-child {
  border-bottom: none;
}

.suggestion-item:hover {
  background: #FBF9F6;
}

.suggestion-ville {
  font-family: 'Inter', sans-serif;
  font-size: 0.95rem;
  font-weight: 500;
  color: #5C554E;
}

.suggestion-region {
  font-family: 'Inter', sans-serif;
  font-size: 0.8rem;
  color: #7A726A;
  margin-left: 8px;
}

/* Contenu ressources */
.ressources-contenu {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 1.5rem;
}

.ressources-region-header {
  display: flex;
  align-items: center;
  gap: 8px;
  font-family: 'Inter', sans-serif;
  font-size: 0.9rem;
  color: #D4A574;
  margin-bottom: 1.5rem;
  justify-content: center;
}

.ressources-groupe {
  margin-bottom: 2rem;
}

.ressources-groupe h3 {
  font-family: 'Lora', Georgia, serif;
  font-size: 1.2rem;
  color: #5C554E;
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  gap: 10px;
}

.ressources-liste {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* Carte ressource */
.ressource-item {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 1.1rem 1.25rem;
  background: white;
  border-radius: 12px;
  text-decoration: none;
  border: 1px solid #EDE7DD;
  transition: all 0.25s ease;
}

.ressource-item:hover {
  border-color: #D4A574;
  transform: translateX(4px);
  box-shadow: 0 4px 15px rgba(92, 85, 78, 0.1);
}

.ressource-icon {
  width: 46px;
  height: 46px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 20px;
}

.ressource-icon.urgence { background: linear-gradient(135deg, #E8B8B8 0%, #C88080 100%); }
.ressource-icon.ecoute { background: linear-gradient(135deg, #E8C9A8 0%, #D4A574 100%); }
.ressource-icon.sante { background: linear-gradient(135deg, #C5E8C0 0%, #7ABD70 100%); }
.ressource-icon.communaute { background: linear-gradient(135deg, #D8C8E8 0%, #A888C8 100%); }
.ressource-icon.lecture { background: linear-gradient(135deg, #B8D4E8 0%, #80A8C8 100%); }
.ressource-icon.juridique { background: linear-gradient(135deg, #E8E0B8 0%, #C8B880 100%); }

.ressource-info {
  flex: 1;
  min-width: 0;
}

.ressource-nom {
  font-family: 'Inter', sans-serif;
  font-size: 0.95rem;
  font-weight: 600;
  color: #5C554E;
  display: block;
}

.ressource-numero {
  font-family: 'Inter', sans-serif;
  font-size: 1.1rem;
  font-weight: 700;
  color: #4A443E;
  display: block;
  letter-spacing: 0.3px;
}

.ressource-desc {
  font-family: 'Inter', sans-serif;
  font-size: 0.82rem;
  color: #7A726A;
  display: block;
  margin-top: 2px;
}

.ressource-arrow {
  width: 18px;
  height: 18px;
  stroke: #7A726A;
  stroke-width: 2;
  flex-shrink: 0;
  transition: all 0.2s ease;
}

.ressource-item:hover .ressource-arrow {
  transform: translateX(4px);
  stroke: #D4A574;
}

/* Encart citation */
.ressources-encart {
  background: white;
  border-radius: 12px;
  padding: 1.5rem;
  border-left: 4px solid #D4A574;
  margin-top: 2rem;
}

.ressources-encart p {
  font-family: 'Lora', Georgia, serif;
  font-size: 0.95rem;
  font-style: italic;
  color: #5C554E;
  line-height: 1.6;
  margin: 0;
}

/* Responsive */
@media (max-width: 600px) {
  .ressources-intro h2 {
    font-size: 1.75rem;
  }
  
  .ressource-item {
    padding: 1rem;
  }
  
  .ressource-icon {
    width: 40px;
    height: 40px;
    font-size: 18px;
  }
}
</style>

<script src="<?php echo $basePath; ?>js/ressources-data.js"></script>
<script>
(function() {
  const theme = '<?php echo $theme; ?>';
  const contenu = document.getElementById('ressources-contenu-' + theme);
  const searchInput = document.getElementById('ressources-search-' + theme);
  const suggestionsList = document.getElementById('suggestions-' + theme);
  
  let regionSelectionnee = null;
  
  // Afficher les ressources provinciales au chargement
  afficherRessources();
  
  // Événements de recherche
  if (searchInput) {
    searchInput.addEventListener('input', function(e) {
      const query = e.target.value.trim();
      
      if (query.length < 2) {
        suggestionsList.classList.remove('active');
        return;
      }
      
      // Chercher par code postal
      const region = trouverRegionParCodePostal(query);
      if (region) {
        suggestionsList.innerHTML = `
          <div class="suggestion-item" onclick="window.selectRegion${theme}('${region.code}', '${query.toUpperCase().substring(0,3)}')">
            <span class="suggestion-ville">${query.toUpperCase().substring(0,3)}</span>
            <span class="suggestion-region">(${region.nom})</span>
          </div>
        `;
        suggestionsList.classList.add('active');
        return;
      }
      
      // Chercher par ville
      const villes = rechercherVille(query);
      if (villes.length > 0) {
        suggestionsList.innerHTML = villes.map(v => `
          <div class="suggestion-item" onclick="window.selectRegion${theme}('${v.codeRegion}', '${v.ville}')">
            <span class="suggestion-ville">${v.ville}</span>
            <span class="suggestion-region">(${v.region})</span>
          </div>
        `).join('');
        suggestionsList.classList.add('active');
      } else {
        suggestionsList.classList.remove('active');
      }
    });
    
    // Fermer suggestions si clic ailleurs
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.localisation-wrapper')) {
        suggestionsList.classList.remove('active');
      }
    });
  }
  
  // Fonction globale pour sélectionner une région
  window['selectRegion' + theme] = function(codeRegion, label) {
    regionSelectionnee = codeRegion;
    if (searchInput) searchInput.value = label;
    suggestionsList.classList.remove('active');
    afficherRessources();
  };
  
  // Afficher les ressources
  function afficherRessources() {
    const prov = getRessourcesProvinciales(theme);
    let html = '';
    
    // Header région si sélectionnée
    if (regionSelectionnee) {
      const region = SOLOPLUGS_RESSOURCES.quebec.regions[regionSelectionnee];
      html += `<div class="ressources-region-header">📍 ${region.nom}</div>`;
    }
    
    // Urgence (toujours afficher)
    if (prov.urgence && prov.urgence.length > 0) {
      html += creerGroupe('🆘 Aide immédiate — 24/7', prov.urgence);
    }
    
    // Ressources régionales si sélectionnée
    if (regionSelectionnee) {
      const regionales = getRessourcesRegionales(regionSelectionnee, theme);
      if (regionales) {
        if (regionales.ecoute && regionales.ecoute.length > 0) {
          html += creerGroupe('💬 Écoute en ' + regionales.nom, regionales.ecoute);
        }
        if (regionales.sante && regionales.sante.length > 0) {
          html += creerGroupe('🏥 Services de santé', regionales.sante);
        }
        if (regionales.communautaire && regionales.communautaire.length > 0) {
          html += creerGroupe('🤝 Ressources locales', regionales.communautaire);
        }
      }
    }
    
    // Ressources spécifiques au thème
    switch(theme) {
      case 'ado':
        if (prov.jeunes && prov.jeunes.length > 0) {
          html += creerGroupe('👦 Pour les jeunes', prov.jeunes);
        }
        break;
      case 'parent':
        if (prov.parents && prov.parents.length > 0) {
          html += creerGroupe('👨‍👩‍👧 Parents solos', prov.parents);
        }
        break;
      case 'aine':
        if (prov.aines && prov.aines.length > 0) {
          html += creerGroupe('🌿 Pour les aînés', prov.aines);
        }
        break;
      case 'deuil':
        if (prov.deuil && prov.deuil.length > 0) {
          html += creerGroupe('🕊️ Accompagnement du deuil', prov.deuil);
        }
        break;
      case 'separation':
        if (prov.separation && prov.separation.length > 0) {
          html += creerGroupe('⚖️ Séparation et divorce', prov.separation);
        }
        break;
      default: // vivre
        if (prov.lecture && prov.lecture.length > 0) {
          html += creerGroupe('📚 Lectures & inspiration', prov.lecture);
        }
        if (prov.themes && prov.themes.length > 0) {
          html += creerGroupe('🧭 Explorer les thèmes', prov.themes);
        }
    }
    
    // Référence (211)
    if (prov.reference && prov.reference.length > 0) {
      html += creerGroupe('📞 Info-référence', prov.reference);
    }
    
    // Citation
    const citations = {
      ado: "« Tu n'es pas ce que tu ressens. Tu es tellement plus. »",
      parent: "« Être parent solo, c'est faire le travail de deux avec le cœur d'un·e seul·e. »",
      aine: "« La sagesse de l'âge mérite d'être partagée, pas isolée. »",
      deuil: "« Le deuil est l'amour qui n'a plus où aller. Laisse-le trouver son chemin. »",
      separation: "« Une fin peut être un commencement déguisé. »",
      vivre: "« La solitude est le lieu où l'on se retrouve, pas où l'on se perd. »"
    };
    
    html += `
      <div class="ressources-encart">
        <p>${citations[theme] || citations.vivre}</p>
      </div>
    `;
    
    contenu.innerHTML = html;
  }
  
  function creerGroupe(titre, ressources) {
    return `
      <div class="ressources-groupe">
        <h3>${titre}</h3>
        <div class="ressources-liste">
          ${ressources.map(creerCarteRessource).join('')}
        </div>
      </div>
    `;
  }
  
  function creerCarteRessource(r) {
    const isExternal = r.lien.startsWith('http') || r.lien.startsWith('tel:');
    const target = isExternal ? 'target="_blank" rel="noopener"' : '';
    const icons = {
      urgence: '🆘',
      ecoute: '💬',
      sante: '🩺',
      communaute: '🤝',
      lecture: '📖',
      juridique: '⚖️'
    };
    
    return `
      <a href="${r.lien}" class="ressource-item" ${target}>
        <div class="ressource-icon ${r.icon || 'communaute'}">
          ${icons[r.icon] || '📌'}
        </div>
        <div class="ressource-info">
          <span class="ressource-nom">${r.nom}</span>
          ${r.numero ? `<span class="ressource-numero">${r.numero}</span>` : ''}
          <span class="ressource-desc">${r.desc}</span>
        </div>
        <svg class="ressource-arrow" viewBox="0 0 24 24" fill="none">
          <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    `;
  }
})();
</script>
