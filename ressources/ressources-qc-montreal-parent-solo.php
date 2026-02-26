<?php
// ═══════════════════════════════════════════════════════════════════════
// SOLOPLUGS — Ressources Parent Solo — Québec / Montréal
// Design system identique à ressources-qc-montreal-ado-solo.php
// Données en tableaux PHP — boucles PHP pour le HTML
// ═══════════════════════════════════════════════════════════════════════

// ── CATÉGORIES ──────────────────────────────────────────────────────────
$categories = [
  'organismes' => [
    'nom'   => 'Organismes familles monoparentales',
    'color' => 'rose',
    'count' => 9,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M3 9.5L12 4l9 5.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
  ],
  'communautaires' => [
    'nom'   => 'Centres communautaires et familiaux',
    'color' => 'green',
    'count' => 6,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
  ],
  'gouvernement' => [
    'nom'   => 'Services gouvernementaux',
    'color' => 'blue',
    'count' => 4,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>',
  ],
  'ecoute' => [
    'nom'   => "Lignes d'écoute et soutien émotionnel",
    'color' => 'coral',
    'count' => 4,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>',
  ],
  'alimentaire' => [
    'nom'   => 'Aide financière et alimentaire',
    'color' => 'amber',
    'count' => 4,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>',
  ],
  'juridique' => [
    'nom'   => 'Soutien juridique',
    'color' => 'slate',
    'count' => 2,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>',
  ],
  'entraide' => [
    'nom'   => 'Réseaux de soutien et entraide',
    'color' => 'purple',
    'count' => 2,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>',
  ],
  'emploi' => [
    'nom'   => 'Emploi et retour aux études',
    'color' => 'teal',
    'count' => 2,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>',
  ],
];

// ── RESSOURCES ──────────────────────────────────────────────────────────
$ressources = [

  // ─── 1. ORGANISMES FAMILLES MONOPARENTALES ───
  'organismes' => [
    [
      'nom'   => 'Halte la Ressource',
      'desc'  => 'Milieu de vie communautaire dédié aux mères monoparentales : accueil, écoute, activités et soutien.',
      'details' => "Depuis plus de 50 ans, Halte la Ressource est un point de rencontre pour les mères monoparentales de Montréal. L'organisme offre un accueil bienveillant sur rendez-vous, des groupes de soutien « Parents Solos et Solidaires », des ateliers créatifs mère-enfant, des conférences, un espace de télétravail, une salle de jeux et une petite bibliothèque. Toutes les activités sont gratuites et visent à briser l'isolement et renforcer le pouvoir d'agir des mères.",
      'phone' => '514-524-0073',
      'url'   => 'haltelaressource.org',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'La Petite Maison de la Miséricorde',
      'desc'  => 'Milieu de vie, soutien psychosocial et services concrets aux femmes cheffes de familles monoparentales.',
      'details' => "La Petite Maison de la Miséricorde accueille les femmes cheffes de familles monoparentales vivant des difficultés économiques, sociales ou familiales. On y trouve de l'écoute, de l'accompagnement psychosocial, des activités de groupe, du répit et du soutien dans les démarches administratives. La mission est de briser l'isolement, favoriser l'autonomie et améliorer les conditions de vie. Les services sont gratuits ou à faible coût.",
      'phone' => '514-526-2639',
      'url'   => 'petitemaisondelamisericorde.org',
      'scope' => 'Montréal (Hochelaga-Maisonneuve)',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Mères avec pouvoir',
      'desc'  => 'Logements communautaires et accompagnement pour mères monoparentales en retour aux études ou au travail.',
      'details' => "Mères avec pouvoir propose des logements communautaires et un accompagnement soutenu pour des mères monoparentales à faible revenu, souvent en transition (retour aux études, recherche d'emploi, etc.). L'organisme offre du soutien individuel, de l'accompagnement dans les démarches administratives, de l'aide à la conciliation famille–études–travail, ainsi que des ateliers et activités pour les enfants.",
      'phone' => '514-282-1882',
      'url'   => 'meresavecpouvoir.org',
      'scope' => 'Montréal (Centre-Sud)',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Entre-Parents (Montréal-Nord)',
      'desc'  => 'Organisme de soutien aux familles monoparentales et recomposées de Montréal-Nord.',
      'details' => "Entre-Parents de Montréal-Nord inc. offre du soutien, de l'écoute et des activités pour les familles monoparentales et recomposées du quartier. L'organisme propose des ateliers, des groupes d'entraide et de l'accompagnement pour briser l'isolement et favoriser l'autonomie des parents solos.",
      'phone' => '514-329-1233',
      'url'   => '',
      'scope' => 'Montréal-Nord',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Station Familles',
      'desc'  => 'Organisme communautaire famille offrant halte-garderie, ateliers et soutien aux parents.',
      'details' => "Station Familles est un organisme communautaire qui soutient les familles, incluant les familles monoparentales. On y trouve des services de halte-garderie, des ateliers parentaux, des activités parent-enfant et de l'accompagnement individualisé.",
      'phone' => '514-762-2525',
      'url'   => '',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Pères Séparés inc. (PSi)',
      'desc'  => 'Soutien, accompagnement et information juridique pour les pères vivant une rupture conjugale.',
      'details' => "Pères Séparés accompagne les pères dans la transition liée à la rupture d'union et dans l'exercice de leur rôle parental. Les services incluent de l'aide et de la référence par téléphone ou Zoom, des groupes d'entraide hebdomadaires, des rencontres individuelles sur rendez-vous, des ateliers et des séances d'information juridique en droit de la famille.",
      'phone' => '514-254-6120',
      'url'   => 'peres-separes.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'FAFMRQ — Fédération des associations de familles monoparentales et recomposées',
      'desc'  => 'Regroupement provincial qui défend les droits des familles monoparentales et recomposées.',
      'details' => "La FAFMRQ regroupe une quarantaine d'organismes membres dans la plupart des régions du Québec. Elle défend les droits et intérêts des familles monoparentales et recomposées, lutte contre la pauvreté, promeut l'égalité femmes-hommes et soutient la conciliation famille–travail–études.",
      'phone' => '514-729-6666',
      'url'   => 'fafmrq.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Fondation Olo',
      'desc'  => 'Aide alimentaire et suivi nutritionnel pour les femmes enceintes à faible revenu et leur famille.',
      'details' => "La Fondation Olo aide les familles à mettre au monde des bébés en santé. Le suivi comprend des multivitamines prénatales, des coupons pour des aliments de base (œufs, lait, légumes surgelés) dès la 12e semaine de grossesse, ainsi qu'un accompagnement nutritionnel dans les premiers 1 000 jours de vie de l'enfant.",
      'phone' => '514-849-3656',
      'url'   => 'fondationolo.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Un Rayon de Soleil',
      'desc'  => "Service d'entraide communautaire pour les familles (hors île de Montréal — L'Ancienne-Lorette).",
      'details' => "Un Rayon de Soleil est un service d'entraide communautaire situé à L'Ancienne-Lorette. Bien que hors de l'île de Montréal, cet organisme peut être une ressource pour les familles de la grande région de Québec.",
      'phone' => '418-871-7055',
      'url'   => '',
      'scope' => 'Québec (L\'Ancienne-Lorette)',
      'scope_type' => 'regional',
    ],
  ],

  // ─── 2. CENTRES COMMUNAUTAIRES ET FAMILIAUX ───
  'communautaires' => [
    [
      'nom'   => 'FQOCF — Fédération québécoise des organismes communautaires Famille',
      'desc'  => 'Réseau de plus de 300 organismes communautaires Famille (OCF) au Québec.',
      'details' => "La FQOCF regroupe des organismes qui offrent des services aux familles : ateliers parentaux, haltes-garderies, groupes de soutien, cuisines collectives, aide aux devoirs, camps de jour et activités parent-enfant. L'outil « Trouver un OCF » sur leur site permet de repérer l'organisme le plus près de chez toi à Montréal.",
      'phone' => '',
      'url'   => 'fqocf.org/trouver-un-ocf/',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Maison de la famille de Saint-Léonard',
      'desc'  => 'Halte-garderie, ateliers parentaux, aide aux devoirs et camps d\'été pour les familles du quartier.',
      'details' => "La Maison de la famille de Saint-Léonard propose une halte-garderie pour les enfants de 9 mois à 5 ans, des ateliers de stimulation parents–enfants, un programme de préparation à la maternelle, des groupes de discussion pour parents, de l'aide aux devoirs (6–12 ans) et des camps d'été.",
      'phone' => '',
      'url'   => '211qc.ca',
      'scope' => 'Saint-Léonard',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Maison de la famille La Parentr\'Aide',
      'desc'  => 'Halte-garderie, ateliers parentaux 0–17 ans, Flash papa, camp de jour et soutien aux familles.',
      'details' => "La Parentr'Aide offre des ateliers pour parents d'enfants de tous âges : déjeuners-causeries, groupes sur la vie de famille, discipline positive, éveil musical, ateliers pour parents d'ados. On y trouve aussi une halte-garderie, des rencontres individuelles et un camp de jour estival.",
      'phone' => '',
      'url'   => '211qc.ca',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Réseau des OCF de Montréal — 211 Grand Montréal',
      'desc'  => 'Portail pour trouver les maisons de la famille et OCF de ton arrondissement.',
      'details' => "Le 211 Grand Montréal recense les organismes communautaires Famille de l'île de Montréal. Tu peux filtrer par arrondissement et par type de service : haltes-garderies, ateliers parentaux, aide aux devoirs, cuisines collectives, camps de jour, friperies, etc.",
      'phone' => '211',
      'url'   => '211qc.ca/enfance-et-famille/maisons-de-la-famille',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Carrefour Familial Hochelaga',
      'desc'  => 'Organisme communautaire famille offrant soutien, ateliers et activités dans Hochelaga-Maisonneuve.',
      'details' => "Le Carrefour Familial Hochelaga offre des services variés aux familles du quartier : halte-garderie, ateliers parentaux, groupes de soutien, activités parent-enfant et accompagnement. L'organisme accueille particulièrement les familles en situation de vulnérabilité.",
      'phone' => '',
      'url'   => '211qc.ca',
      'scope' => 'Hochelaga-Maisonneuve',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Maison des familles de Verdun',
      'desc'  => 'Services familiaux, halte-garderie et soutien aux parents dans Verdun.',
      'details' => "La Maison des familles de Verdun offre un milieu chaleureux pour les familles du quartier avec halte-garderie, ateliers, groupes de soutien et activités diverses pour parents et enfants.",
      'phone' => '',
      'url'   => '211qc.ca',
      'scope' => 'Verdun',
      'scope_type' => 'montreal',
    ],
  ],

  // ─── 3. SERVICES GOUVERNEMENTAUX ───
  'gouvernement' => [
    [
      'nom'   => 'Allocation canadienne pour enfants (ACE)',
      'desc'  => 'Prestation mensuelle fédérale non imposable pour les familles avec enfants de moins de 18 ans.',
      'details' => "L'ACE est calculée en fonction du revenu familial et du nombre d'enfants. Les parents monoparentaux, ayant souvent un seul revenu, peuvent recevoir des montants plus élevés. Les versements sont mensuels, après la production de la déclaration de revenus.",
      'phone' => '1-800-387-1193',
      'url'   => 'canada.ca',
      'scope' => 'Pancanadien',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Allocation famille du Québec',
      'desc'  => 'Aide financière provinciale pour les familles avec enfants de moins de 18 ans.',
      'details' => "Retraite Québec verse l'allocation famille, qui comprend le soutien aux enfants et certains suppléments. Les familles monoparentales peuvent bénéficier d'un supplément spécifique. L'inscription est généralement automatique si tu fais ta déclaration de revenus au Québec.",
      'phone' => '1-800-667-9625',
      'url'   => 'rrq.gouv.qc.ca',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Services de garde à contribution réduite',
      'desc'  => 'Places en garderie subventionnée à tarif réduit pour les enfants de 0 à 5 ans.',
      'details' => "Le réseau québécois des services de garde éducatifs offre des places à contribution réduite dans les CPE, garderies subventionnées et milieux familiaux. L'inscription se fait via le guichet unique La Place 0–5.",
      'phone' => '1-855-336-8568',
      'url'   => 'quebec.ca',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Aide au logement (PSL, HLM)',
      'desc'  => 'Programmes pour aider les familles à faible revenu à se loger.',
      'details' => "L'Office municipal d'habitation de Montréal (OMHM) offre des habitations à loyer modique (HLM) et un Programme de supplément au loyer (PSL) qui limite le loyer à environ 25 % du revenu du ménage. Les familles monoparentales sont considérées comme une clientèle prioritaire.",
      'phone' => '514-872-6442',
      'url'   => 'omhm.qc.ca',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
  ],

  // ─── 4. LIGNES D'ÉCOUTE ET SOUTIEN ÉMOTIONNEL ───
  'ecoute' => [
    [
      'nom'   => 'LigneParents',
      'desc'  => 'Service d\'intervention confidentiel et gratuit pour tous les parents d\'enfants de 0 à 20 ans.',
      'details' => "LigneParents offre un accompagnement dans le rôle parental, un espace pour ventiler sans jugement et un soutien lors de situations de crise. Des intervenant·e·s professionnel·le·s sont disponibles par téléphone et par clavardage, 7 jours sur 7.",
      'phone' => '1-800-361-5085',
      'url'   => 'ligneparents.com',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Première Ressource — Aide aux parents',
      'desc'  => 'Consultation professionnelle gratuite pour parents d\'enfants de 0 à 18 ans.',
      'details' => "Première Ressource offre des consultations confidentielles avec des intervenant·e·s spécialisé·e·s en parentalité. On peut les joindre par téléphone, clavardage ou courriel pour parler de développement de l'enfant, de comportements difficiles ou de conflits familiaux.",
      'phone' => '514-525-2573',
      'url'   => 'premiereressource.com',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Tel-Aide',
      'desc'  => 'Ligne d\'écoute généraliste, gratuite, confidentielle et anonyme, 24/7.',
      'details' => "Tel-Aide est une ligne d'écoute 24/7 pour toute personne vivant de la détresse, de la solitude, de l'anxiété ou traversant un moment difficile. Les bénévoles sont formés à l'écoute active et aucun sujet n'est tabou.",
      'phone' => '514-935-1101',
      'url'   => 'telaide.org',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Ligne de crise 988 / 1-866-APPELLE',
      'desc'  => 'Ligne de prévention du suicide et d\'intervention en situation de crise, 24/7.',
      'details' => "Le 988 est le numéro national de prévention du suicide, accessible par téléphone et texto, 24/7. Au Québec, le 1-866-APPELLE offre un service d'intervention de crise avec des intervenant·e·s spécialisé·e·s.",
      'phone' => '988 / 1-866-277-3553',
      'url'   => '988.ca',
      'scope' => 'Canada / Québec — 24/7',
      'scope_type' => 'regional',
    ],
  ],

  // ─── 5. AIDE FINANCIÈRE ET ALIMENTAIRE ───
  'alimentaire' => [
    [
      'nom'   => 'Moisson Montréal',
      'desc'  => 'Plus grand organisme de redistribution alimentaire au Québec.',
      'details' => "Moisson Montréal approvisionne plus de 300 organismes communautaires sur l'île de Montréal (banques alimentaires, comptoirs, soupes populaires). Les familles trouvent un organisme près de chez elles par l'entremise du site ou du 211.",
      'phone' => '514-344-4494',
      'url'   => 'moissonmontreal.org',
      'scope' => 'Île de Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Banques alimentaires du Québec (BAQ)',
      'desc'  => 'Réseau provincial de Moissons et d\'organismes d\'aide alimentaire.',
      'details' => "Les BAQ coordonnent les Moissons régionales et un grand nombre d'organismes locaux. Le site permet de trouver un service d'aide alimentaire selon ton code postal.",
      'phone' => '',
      'url'   => 'banquesalimentaires.org',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
    [
      'nom'   => '211 Grand Montréal — Aide alimentaire',
      'desc'  => 'Service d\'information pour trouver des banques alimentaires et épiceries solidaires.',
      'details' => "Le 211 oriente les familles vers les ressources d'aide alimentaire de leur quartier : banques alimentaires, comptoirs, épiceries solidaires, cuisines collectives, programmes de collations scolaires, paniers de Noël, etc. Service disponible 24/7.",
      'phone' => '211',
      'url'   => '211qc.ca/alimentation/aide-alimentaire',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Aide sociale et Programme de solidarité sociale',
      'desc'  => 'Aide financière de dernier recours pour les personnes et familles sans ressources suffisantes.',
      'details' => "Ces programmes offrent une prestation mensuelle aux personnes et familles qui n'ont pas les moyens de couvrir leurs besoins de base. Les familles monoparentales y sont admissibles selon leur situation financière. La demande se fait auprès d'un centre local d'emploi (CLE).",
      'phone' => '1-877-767-8773',
      'url'   => 'quebec.ca',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
  ],

  // ─── 6. SOUTIEN JURIDIQUE ───
  'juridique' => [
    [
      'nom'   => 'Centre de justice de proximité du Grand Montréal',
      'desc'  => 'Information juridique gratuite, incluant droit de la famille.',
      'details' => "Le CJPGM offre des rencontres d'information juridique avec des juristes, sur des sujets comme la séparation, la garde des enfants, la pension alimentaire ou le partage des biens. Le service Info-Séparation aide aussi à se préparer à la médiation familiale.",
      'phone' => '514-227-3782',
      'url'   => 'justicedeproximite.qc.ca',
      'scope' => 'Île de Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Programme de médiation familiale',
      'desc'  => 'Séances gratuites de médiation pour les couples avec enfants qui se séparent.',
      'details' => "Le Programme de médiation familiale accorde un nombre d'heures gratuites avec un médiateur accrédité pour régler la garde, la pension alimentaire, le partage du patrimoine, etc. C'est souvent la voie privilégiée pour s'entendre sans passer en cour.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Québec',
      'scope_type' => '',
    ],
  ],

  // ─── 7. RÉSEAUX DE SOUTIEN ET ENTRAIDE ───
  'entraide' => [
    [
      'nom'   => 'Groupes et activités dans les maisons de la famille',
      'desc'  => 'Groupes de soutien, cafés-rencontres et ateliers pour parents solos.',
      'details' => "Plusieurs maisons de la famille et organismes communautaires Famille de Montréal organisent des groupes de discussion, cafés-rencontres ou activités spécifiquement pour les parents solos. Contacte le 211 ou utilise l'outil « Trouver un OCF » pour repérer les activités de ton quartier.",
      'phone' => '211',
      'url'   => '211qc.ca',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Organismes spécialisés parents solos',
      'desc'  => 'Réseaux d\'entraide structurés autour de réalités de parents solos.',
      'details' => "Des organismes comme Halte la Ressource, La Petite Maison de la Miséricorde, Mères avec pouvoir ou Pères Séparés inc. offrent des groupes de soutien, des ateliers ou des activités de socialisation où il est possible de rencontrer d'autres parents solos.",
      'phone' => '',
      'url'   => '',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
  ],

  // ─── 8. EMPLOI ET RETOUR AUX ÉTUDES ───
  'emploi' => [
    [
      'nom'   => 'Services d\'aide à l\'emploi — 211',
      'desc'  => 'Accompagnement pour la recherche d\'emploi et le retour aux études.',
      'details' => "Sur l'île de Montréal, plusieurs organismes d'employabilité offrent du soutien pour la rédaction de CV, la recherche d'emploi ou l'orientation scolaire et professionnelle. Certains ont des services adaptés aux parents monoparentaux (horaire flexible).",
      'phone' => '211',
      'url'   => '211qc.ca',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Mères avec pouvoir (axe études/travail)',
      'desc'  => 'Soutien à la conciliation famille–études–travail pour mères monoparentales.',
      'details' => "En plus des logements, Mères avec pouvoir accompagne les mères dans leurs démarches de retour aux études ou sur le marché du travail : planification, soutien administratif, réflexion sur le projet professionnel.",
      'phone' => '514-282-1882',
      'url'   => 'meresavecpouvoir.org',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
  ],
];

// ── MAPPING COULEURS ────────────────────────────────────────────────────
$colorMap = [
  'rose'   => ['var' => '--accent-rose',   'light' => '--accent-rose-light'],
  'slate'  => ['var' => '--accent-slate',   'light' => '--accent-slate-light'],
  'coral'  => ['var' => '--accent-coral',   'light' => '--accent-coral-light'],
  'blue'   => ['var' => '--accent-blue',    'light' => '--accent-blue-light'],
  'purple' => ['var' => '--accent-purple',  'light' => '--accent-purple-light'],
  'green'  => ['var' => '--accent-green',   'light' => '--accent-green-light'],
  'amber'  => ['var' => '--accent-amber',   'light' => '--accent-amber-light'],
  'teal'   => ['var' => '--accent-teal',    'light' => '--accent-teal-light'],
  'olive'  => ['var' => '--accent-olive',   'light' => '--accent-olive-light'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ressources Montréal — Parent Solo | SOLOPLUGS</title>
<meta name="description" content="Ressources pour les parents solos à Montréal et au Québec. Organismes, aide financière, soutien émotionnel, juridique, emploi et plus.">
  <link rel="stylesheet" href="../css/fonts.css">
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
    radial-gradient(ellipse 80% 60% at 50% 0%, rgba(176,107,120,0.10) 0%, transparent 60%),
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
  background: rgba(176,107,120,0.15);
  border: 1px solid rgba(176,107,120,0.25);
  padding: 6px 16px; border-radius: 100px;
  font-size: 13px; font-weight: 500; color: var(--accent-rose);
  letter-spacing: 0.04em; text-transform: uppercase;
  margin-bottom: 24px;
}
.hero h1 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(32px, 5vw, 52px);
  font-weight: 400; color: var(--hero-text);
  line-height: 1.2; margin-bottom: 6px;
}
.hero h1 em { color: var(--accent-rose); font-style: italic; }
.hero .subtitle {
  font-size: 17px; color: var(--hero-muted);
  font-weight: 300; line-height: 1.6;
  max-width: 520px; margin: 16px auto 0;
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
  background: rgba(176, 107, 120, 0.3);
  border-color: rgba(176, 107, 120, 0.5);
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
.region-select:hover { border-color: var(--accent-rose); color: var(--text-primary); }

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
.theme-nav { margin-top: 32px; }
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
.theme-box-text { flex: 1; min-width: 0; }
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

/* Theme colors via data-theme */
<?php foreach ($categories as $key => $cat):
  $c = $colorMap[$cat['color']];
  $varColor = $c['var'];
  echo ".theme-box[data-theme=\"{$key}\"]::before { background: var({$varColor}); }\n";
  echo ".theme-box[data-theme=\"{$key}\"] .theme-dot { background: var({$varColor}); }\n";
endforeach; ?>

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
   RESOURCE CARDS — ACCORDÉON
   ═══════════════════════════════════════ */
.card-grid { display: flex; flex-direction: column; gap: 10px; }

.resource-card {
  background: var(--card-bg);
  border: 1px solid var(--border-subtle);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: all 0.25s ease;
  position: relative;
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
}
.resource-card:hover::before { opacity: 1; }

<?php foreach ($categories as $key => $cat):
  $c = $colorMap[$cat['color']];
  $varColor = $c['var'];
  echo ".resource-card[data-cat=\"{$key}\"]::before { background: var({$varColor}); }\n";
endforeach; ?>

.card-header {
  display: flex; align-items: flex-start; gap: 16px;
  padding: 18px 20px;
  cursor: pointer;
}

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
.card-tag.scope.regional { background: var(--accent-blue-light); color: var(--accent-blue); }
.card-tag.scope.montreal { background: var(--accent-purple-light); color: var(--accent-purple); }

.card-arrow {
  color: var(--text-muted); flex-shrink: 0; align-self: center;
  transition: transform 0.3s ease, color 0.2s;
  padding: 8px;
  border-radius: 50%;
  background: var(--warm-bg-alt);
}
.card-arrow:hover {
  background: var(--accent-amber-light);
  color: var(--accent-amber);
}
.resource-card.open .card-arrow {
  transform: rotate(90deg);
  color: var(--accent-amber);
  background: var(--accent-amber-light);
}

/* ═══════════════════════════════════════
   DETAILS — ACCORDION PANEL
   ═══════════════════════════════════════ */
.card-details {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s ease;
  background: var(--warm-bg-alt);
  border-top: 0 solid var(--border-subtle);
}
.resource-card.open .card-details {
  max-height: 300px;
  border-top-width: 1px;
}
.card-details-inner {
  padding: 0 20px 0 46px;
  opacity: 0;
  transform: translateY(-10px);
  transition: opacity 0.3s ease 0.1s, transform 0.3s ease 0.1s, padding 0.3s ease;
}
.resource-card.open .card-details-inner {
  padding: 16px 20px 18px 46px;
  opacity: 1;
  transform: translateY(0);
}
.card-details-inner p {
  font-size: 14px;
  color: var(--text-secondary);
  line-height: 1.7;
}

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
.back-to-top:hover { background: var(--accent-rose); }
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
  .theme-box.suggest { grid-column: span 2; }
  .card-header { padding: 14px 16px; gap: 12px; }
  .card-details-inner { padding-left: 38px !important; }
  .resource-card.open .card-details-inner { padding-left: 38px !important; }
  .urgent-banner { flex-direction: column; padding: 20px; }
  .universal-banner { flex-direction: column; text-align: center; padding: 20px; }
  .universal-banner .ub-phone { font-size: 32px; }
  .back-to-top { bottom: 20px; right: 20px; }
}
</style>
</head>
<body>

<!-- ═══════ HERO ═══════ -->
<section class="hero" id="top">
  <!-- Bouton retour vers le thème -->
  <a href="../7_themes/parent-solo.php" class="btn-retour" title="Retour">
    <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
  </a>
  
  <div class="hero-badge">Qu&eacute;bec</div>
  <h1>Ressources <em>Montr&eacute;al</em> &mdash; Parent Solo</h1>
  <p class="subtitle">Tu n'as pas &agrave; tout porter seul&middot;e. Ici, tu trouveras des ressources pour t'accompagner, toi et ta famille.</p>
</section>

<!-- ═══════ NAV ═══════ -->
<div class="nav-bar">
  <div class="region-select">Montr&eacute;al &#9662;</div>
</div>

<!-- ═══════ MAIN CONTENT ═══════ -->
<div class="main-wrap">

  <!-- Aide immédiate -->
  <div class="urgent-banner">
    <div class="urgent-indicator">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
    </div>
    <div class="urgent-body">
      <h3>Besoin de parler &agrave; quelqu'un ?</h3>
      <p>&Eacute;coute, soutien et conseils pour les parents &mdash; gratuit, confidentiel, sans jugement.</p>
      <div class="urgent-numbers">
        <a href="tel:18003615085" class="urgent-pill">1-800-361-5085 <span class="pill-label">LigneParents</span></a>
        <a href="tel:988" class="urgent-pill">988 <span class="pill-label">Crise</span></a>
        <a href="tel:211" class="urgent-pill">211 <span class="pill-label">Info sociale</span></a>
      </div>
    </div>
  </div>

  <!-- 211 banner -->
  <div class="universal-banner">
    <div class="ub-icon">211</div>
    <div class="ub-body">
      <h4>211 Qu&eacute;bec &mdash; Trouvez des ressources pr&egrave;s de chez vous</h4>
      <p>Service gratuit, multilingue, 24/7. Orientation vers des milliers d'organismes communautaires.</p>
    </div>
    <div class="ub-phone">2-1-1</div>
  </div>

  <!-- ═══════ THEME NAVIGATION GRID ═══════ -->
  <div class="theme-nav">
    <div class="theme-nav-title">Acc&egrave;s par th&egrave;me</div>
    <div class="theme-grid">
      <?php foreach ($categories as $key => $cat): ?>
      <a href="#<?php echo $key; ?>" class="theme-box" data-theme="<?php echo $key; ?>">
        <div class="theme-dot"></div>
        <div class="theme-box-text">
          <span><?php echo htmlspecialchars($cat['nom']); ?></span>
          <small><?php echo $cat['count']; ?> ressource<?php echo $cat['count'] > 1 ? 's' : ''; ?></small>
        </div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
      <?php endforeach; ?>
      <a href="#proposer" class="theme-box suggest">
        <div class="theme-dot"></div>
        <div class="theme-box-text">
          <span>Suggestions de ressources</span>
          <small>Proposer une ressource</small>
        </div>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
      </a>
    </div>
  </div>

  <!-- ═══════ CATEGORY SECTIONS (boucle PHP) ═══════ -->
  <?php foreach ($categories as $key => $cat):
    $c = $colorMap[$cat['color']];
    $varColor = $c['var'];
    $varLight = $c['light'];
    $iconHtml = str_replace('currentStroke', "var({$varColor})", $cat['icon']);
    $indicatorBg = "var({$varLight})";
    $dotBg = "var({$varColor})";
  ?>
  <div class="category-section" id="<?php echo $key; ?>">
    <div class="category-header">
      <div class="category-indicator" style="background: <?php echo $indicatorBg; ?>;">
        <?php echo $iconHtml; ?>
      </div>
      <h2><?php echo htmlspecialchars($cat['nom']); ?></h2>
      <span class="count"><?php echo $cat['count']; ?> ressource<?php echo $cat['count'] > 1 ? 's' : ''; ?></span>
    </div>
    <div class="card-grid">
      <?php if (isset($ressources[$key])):
        foreach ($ressources[$key] as $r): ?>
      <div class="resource-card" data-cat="<?php echo $key; ?>">
        <div class="card-header" onclick="this.parentElement.classList.toggle('open')">
          <div class="card-dot" style="background: <?php echo $dotBg; ?>;"></div>
          <div class="card-body">
            <h3><?php echo htmlspecialchars($r['nom']); ?></h3>
            <p class="card-desc"><?php echo htmlspecialchars($r['desc']); ?></p>
            <div class="card-meta">
              <?php if (!empty($r['phone'])): ?>
              <span class="card-tag phone"><?php echo htmlspecialchars($r['phone']); ?></span>
              <?php endif; ?>
              <?php if (!empty($r['url'])): ?>
              <span class="card-tag"><?php echo htmlspecialchars($r['url']); ?></span>
              <?php endif; ?>
              <?php if (!empty($r['scope'])): ?>
              <span class="card-tag scope <?php echo htmlspecialchars($r['scope_type']); ?>"><?php echo htmlspecialchars($r['scope']); ?></span>
              <?php endif; ?>
            </div>
          </div>
          <div class="card-arrow">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
          </div>
        </div>
        <?php if (!empty($r['details'])): ?>
        <div class="card-details">
          <div class="card-details-inner">
            <p><?php echo htmlspecialchars($r['details']); ?></p>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach;
      endif; ?>
    </div>
  </div>
  <?php endforeach; ?>

  <!-- ═══════ PROPOSER ═══════ -->
  <div id="proposer" style="scroll-margin-top: 24px; margin-top: 48px;">
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
