/**
 * SOLOPLUGS - Spectre de Solitude
 * JavaScript pour la modale d'évaluation
 * À placer dans /js/spectre-solitude.js
 */

// Données des 12 niveaux du spectre
const spectreData = {
    1: {
        zone: 'habitee',
        zoneName: 'Solitude habitée',
        title: 'Plénitude sereine',
        description: '"Ma solitude est un jardin intérieur. Je m\'y ressource, j\'y crée, j\'y grandis."'
    },
    2: {
        zone: 'habitee',
        zoneName: 'Solitude habitée',
        title: 'Équilibre paisible',
        description: '"Je suis bien avec moi-même. Les moments seul(e) me nourrissent."'
    },
    3: {
        zone: 'habitee',
        zoneName: 'Solitude habitée',
        title: 'Autonomie épanouie',
        description: '"Je choisis mes moments de solitude. Ils font partie de mon équilibre."'
    },
    4: {
        zone: 'habitee',
        zoneName: 'Solitude habitée',
        title: 'Confort tranquille',
        description: '"Je me sens généralement bien seul(e), même si parfois la compagnie me manque."'
    },
    5: {
        zone: 'tension',
        zoneName: 'Solitude en tension',
        title: 'Oscillation légère',
        description: '"Certains jours ça va, d\'autres moins. Je cherche encore mon équilibre."'
    },
    6: {
        zone: 'tension',
        zoneName: 'Solitude en tension',
        title: 'Questionnement intérieur',
        description: '"Je me demande parfois si cette solitude est vraiment ce que je veux."'
    },
    7: {
        zone: 'tension',
        zoneName: 'Solitude en tension',
        title: 'Inconfort croissant',
        description: '"La solitude commence à peser. J\'aimerais plus de connexion."'
    },
    8: {
        zone: 'tension',
        zoneName: 'Solitude en tension',
        title: 'Repli progressif',
        description: '"Je m\'isole de plus en plus. Sortir, appeler, voir du monde devient difficile."'
    },
    9: {
        zone: 'souffrante',
        zoneName: 'Solitude souffrante',
        title: 'Isolement ressenti',
        description: '"Je me sens seul(e) même quand je suis entouré(e). Un vide s\'installe."'
    },
    10: {
        zone: 'souffrante',
        zoneName: 'Solitude souffrante',
        title: 'Détresse silencieuse',
        description: '"La solitude me pèse énormément. J\'ai du mal à en parler."'
    },
    11: {
        zone: 'souffrante',
        zoneName: 'Solitude souffrante',
        title: 'Souffrance profonde',
        description: '"Je me sens complètement isolé(e). Chaque jour est une épreuve."'
    },
    12: {
        zone: 'souffrante',
        zoneName: 'Solitude souffrante',
        title: 'Urgence intérieure',
        description: '"J\'ai besoin d\'aide. Cette solitude m\'engloutit."'
    }
};

// Initialisation au chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
    initSpectreModal();
});

function initSpectreModal() {
    // Éléments DOM
    const modal = document.getElementById('spectreModal');
    const openBtn = document.getElementById('openSpectreModal');
    const closeBtn = document.getElementById('closeSpectreModal');
    const points = document.querySelectorAll('.spectre-point');
    const result = document.getElementById('spectreResult');
    const resultBadge = document.getElementById('resultBadge');
    const resultTitle = document.getElementById('resultTitle');
    const resultDescription = document.getElementById('resultDescription');
    const exploreBtn = document.getElementById('exploreBtn');
    const miniCursor = document.querySelector('.spectre-mini-cursor');

    // Vérifier que tous les éléments existent
    if (!modal || !openBtn) {
        console.warn('Spectre Modal: Éléments non trouvés');
        return;
    }

    // Ouvrir la modale
    openBtn.addEventListener('click', function() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    // Fermer la modale
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }
    
    // Fermer en cliquant sur l'overlay
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Fermer avec Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    // Sélection d'un point
    points.forEach(function(point) {
        point.addEventListener('click', function() {
            selectPoint(point);
        });
        point.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                selectPoint(point);
            }
        });
    });

    function selectPoint(point) {
        const level = parseInt(point.dataset.level);
        const data = spectreData[level];
        
        // Retirer la sélection précédente
        points.forEach(function(p) {
            p.classList.remove('selected');
        });
        
        // Ajouter la sélection
        point.classList.add('selected');
        
        // Mettre à jour le résultat
        if (resultBadge && resultTitle && resultDescription) {
            resultBadge.textContent = data.zoneName;
            resultBadge.className = 'spectre-result-badge ' + data.zone;
            resultTitle.textContent = data.title;
            resultDescription.textContent = data.description;
            
            // Afficher le résultat
            result.classList.add('visible');
        }
        
        // Mettre à jour le mini curseur dans le header
        if (miniCursor) {
            const percentage = ((level - 1) / 11) * 100;
            miniCursor.style.marginLeft = percentage + '%';
        }
        
        // Stocker dans localStorage
        try {
            localStorage.setItem('soloplugs_spectre_level', level);
        } catch (e) {
            console.warn('localStorage non disponible');
        }
        
        // Afficher message d'aide pour niveaux élevés (9-12)
        const ressourcesHint = document.getElementById('spectreRessourcesHint');
        if (ressourcesHint) {
            if (level >= 9) {
                ressourcesHint.style.display = 'block';
            } else {
                ressourcesHint.style.display = 'none';
            }
        }
    }

    // Bouton Explorer
    if (exploreBtn) {
        exploreBtn.addEventListener('click', function() {
            const selectedPoint = document.querySelector('.spectre-point.selected');
            const level = selectedPoint ? parseInt(selectedPoint.dataset.level) : 5;
            
            // Déterminer la page de destination selon le niveau
            let destination = '/7_themes/vivre-solo.php'; // Par défaut
            
            if (level >= 9) {
                // Niveaux 9-12 : Solitude souffrante → Ressources d'aide
                destination = '/ressources.php';
            } else if (level >= 5) {
                // Niveaux 5-8 : En tension → Explorer les thèmes
                destination = '/7_themes/';
            } else {
                // Niveaux 1-4 : Solitude habitée → Activités solo
                destination = '/7_themes/activites-solo.php';
            }
            
            // Ajouter le niveau comme paramètre
            destination += (destination.includes('?') ? '&' : '?') + 'niveau=' + level;
            
            // Rediriger
            window.location.href = destination;
        });
    }

    // Restaurer la sélection précédente au chargement
    try {
        const savedLevel = localStorage.getItem('soloplugs_spectre_level');
        if (savedLevel && miniCursor) {
            const percentage = ((parseInt(savedLevel) - 1) / 11) * 100;
            miniCursor.style.marginLeft = percentage + '%';
        }
    } catch (e) {
        // localStorage non disponible
    }
}
