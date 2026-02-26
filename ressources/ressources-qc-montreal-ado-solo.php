<?php
// ═══════════════════════════════════════════════════════════════════════
// SOLOPLUGS — Ressources Ado Solo — Québec / Montréal
// Design system identique à ressources-qc-montreal.php (Vivre Solo)
// Données en tableaux PHP — boucles PHP pour le HTML
// ═══════════════════════════════════════════════════════════════════════

// ── CATÉGORIES ──────────────────────────────────────────────────────────
$categories = [
  'ecoute' => [
    'nom'   => "Lignes d'écoute et urgence",
    'color' => 'rose',
    'count' => 7,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>',
  ],
  'intimidation' => [
    'nom'   => 'Intimidation et cyberintimidation',
    'color' => 'slate',
    'count' => 10,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
  ],
  'sante-mentale' => [
    'nom'   => 'Santé mentale — Jeunes',
    'color' => 'coral',
    'count' => 5,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>',
  ],
  'ecole' => [
    'nom'   => 'École et persévérance scolaire',
    'color' => 'blue',
    'count' => 6,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2zM22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>',
  ],
  'identite' => [
    'nom'   => 'Identité, diversité et sexualité',
    'color' => 'purple',
    'count' => 9,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
  ],
  'famille' => [
    'nom'   => 'Famille, conflits et violence',
    'color' => 'rose',
    'count' => 8,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M3 9.5L12 4l9 5.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
  ],
  'deuil' => [
    'nom'   => 'Deuil et perte',
    'color' => 'deuil',
    'count' => 2,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/><path d="M12 8v4M12 16h.01"/></svg>',
  ],
  'sociale' => [
    'nom'   => 'Vie sociale — Maisons de jeunes',
    'color' => 'green',
    'count' => 6,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
  ],
  'entraide' => [
    'nom'   => 'Entraide et mentorat',
    'color' => 'amber',
    'count' => 2,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>',
  ],
  'droits' => [
    'nom'   => 'Droits des jeunes',
    'color' => 'teal',
    'count' => 4,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>',
  ],
  'dependances' => [
    'nom'   => 'Dépendances et écrans',
    'color' => 'olive',
    'count' => 6,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
  ],
];

// ── RESSOURCES ──────────────────────────────────────────────────────────
$ressources = [

  // ─── 1. LIGNES D'ÉCOUTE ET URGENCE ───
  'ecoute' => [
    [
      'nom'   => 'Tel-Jeunes',
      'desc'  => 'Service professionnel, confidentiel et gratuit pour les 12-17 ans. Téléphone, texto, clavardage et courriel.',
      'phone' => '1-800-263-2266',
      'url'   => 'teljeunes.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Jeunesse, J'écoute / Kids Help Phone",
      'desc'  => "Ligne d'écoute bilingue 24/7 pour jeunes partout au Canada. Détresse, isolement, intimidation, idées suicidaires.",
      'phone' => '1-800-668-6868',
      'url'   => 'jeunessejecoute.ca',
      'scope' => 'Pancanadien',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => '988 — Ligne de crise en santé mentale',
      'desc'  => 'Ligne nationale de prévention du suicide et de crise en santé mentale. 24/7.',
      'phone' => '988',
      'url'   => '',
      'scope' => 'Pancanadien — 24/7',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => '1-866-APPELLE — Prévention du suicide',
      'desc'  => 'Centre de prévention du suicide — dirige vers la ressource de ta région.',
      'phone' => '1-866-277-3553',
      'url'   => '',
      'scope' => 'Provincial — 24/7',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Info-Social 811',
      'desc'  => "Intervenant psychosocial 24/7. Un ado peut appeler sans parent pour être orienté vers les services jeunesse.",
      'phone' => '811 (option 2)',
      'url'   => '',
      'scope' => 'Provincial — 24/7',
      'scope_type' => '',
    ],
    [
      'nom'   => 'LigneParents',
      'desc'  => "Soutien professionnel pour parents, grands-parents et proches d'adolescents vivant isolement ou détresse.",
      'phone' => '1-800-361-5085',
      'url'   => 'ligneparents.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Centres d'écoute ACETDQ",
      'desc'  => "23 centres d'écoute téléphonique partout au Québec pour souffrance émotionnelle.",
      'phone' => '',
      'url'   => 'acetdq.org',
      'scope' => 'Provincial (23 centres)',
      'scope_type' => '',
    ],
  ],

  // ─── 2. INTIMIDATION ET CYBERINTIMIDATION ───
  'intimidation' => [
    [
      'nom'   => 'Application +Fort',
      'desc'  => "App validée scientifiquement (UdeM) pour aider les victimes d'intimidation 12-16 ans. Journal de bord, stratégies personnalisées.",
      'phone' => '',
      'url'   => 'iOS et Android — gratuit',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Trousse TJ — Tel-Jeunes pour les écoles',
      'desc'  => "Capsules, articles, outils interactifs sur l'intimidation et la cyberintimidation. Ateliers pédagogiques.",
      'phone' => '',
      'url'   => 'troussetj.teljeunes.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Jeunesse, J'écoute — Guide sur l'intimidation",
      'desc'  => "Guide complet : intimidation, cyberintimidation, école, relations, sécurité, abus, faire face.",
      'phone' => '',
      'url'   => 'jeunessejecoute.ca',
      'scope' => 'Pancanadien',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => "CAVAC — Centres d'aide aux victimes",
      'desc'  => "Accompagnement pour jeunes victimes d'intimidation criminelle. Écoute, accompagnement, information juridique.",
      'phone' => '1-866-532-2822',
      'url'   => 'cavac.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Sport'Aide",
      'desc'  => "Aide pour l'intimidation et la violence en contexte sportif. Ligne d'écoute spécialisée.",
      'phone' => '1-833-211-2433',
      'url'   => 'sportaide.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'AidezmoiSVP.ca',
      'desc'  => "Aide pour bloquer la propagation d'une photo intime, sexto ou vidéo sur Internet.",
      'phone' => '',
      'url'   => 'aidezmoisvp.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Cyberaide.ca',
      'desc'  => "Signalement de l'exploitation sexuelle d'enfants en ligne.",
      'phone' => '1-866-658-9022',
      'url'   => 'cyberaide.ca',
      'scope' => 'Pancanadien',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Fondation Jeunes en Tête',
      'desc'  => "Ateliers en milieu scolaire sur la santé mentale, l'anxiété, l'estime de soi et la prévention de la détresse.",
      'phone' => '',
      'url'   => 'fondationjeunesentete.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'CHU Sainte-Justine — Guide Info-famille',
      'desc'  => "Répertoire annoté d'organismes et sites web incluant l'intimidation. Source validée par un hôpital pédiatrique.",
      'phone' => '',
      'url'   => 'enseignement.chusj.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Plan d'action concerté 2025-2030 — Gouv. du Québec",
      'desc'  => "Cadre national finançant et coordonnant des projets de prévention dans les écoles et communautés.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 3. SANTÉ MENTALE — JEUNES ───
  'sante-mentale' => [
    [
      'nom'   => 'Accueil psychosocial CLSC — Santé mentale jeunesse',
      'desc'  => "Porte d'entrée pour les 6-17 ans : évaluation, orientation vers psychologue, psychoéducateur, pédopsychiatrie.",
      'phone' => '514-940-3300',
      'url'   => 'ciusssnordmtl.ca',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'CIUSSS Centre-Ouest — Santé mentale jeunesse',
      'desc'  => "Évaluation, psychothérapie, interventions de groupe (anxiété, dépression, relation parents-ados) pour les 0-17 ans.",
      'phone' => '',
      'url'   => 'ciussscentreouest.ca',
      'scope' => 'Montréal (Centre-Ouest)',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Phobies-Zéro',
      'desc'  => "Groupes d'entraide et ligne d'écoute pour troubles anxieux, TOC, phobies.",
      'phone' => '1-866-922-0002',
      'url'   => 'phobies-zero.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Relief',
      'desc'  => "Aide pour vivre avec l'anxiété, la dépression ou la bipolarité. Ateliers, outils, accompagnement.",
      'phone' => '',
      'url'   => 'monrelief.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'ANEB — Anorexie et Boulimie Québec',
      'desc'  => "Soutien spécialisé pour troubles alimentaires. Écoute, groupes de soutien, références.",
      'phone' => '1-800-630-0907',
      'url'   => 'anebquebec.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 4. ÉCOLE ET PERSÉVÉRANCE SCOLAIRE ───
  'ecole' => [
    [
      'nom'   => 'Alloprof',
      'desc'  => "Aide gratuite aux devoirs pour tous les élèves du Québec. Site web, clavardage, vidéos, fiches, téléphone.",
      'phone' => '1-888-776-4455',
      'url'   => 'alloprof.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Centres de services scolaires (CSS) de Montréal',
      'desc'  => "Soutien aux élèves en difficulté : orthopédagogie, psychoéducation, aide au décrochage.",
      'phone' => '',
      'url'   => 'cssdm.gouv.qc.ca',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Carrefours jeunesse-emploi (CJE)',
      'desc'  => "Persévérance scolaire, exploration professionnelle, retour à l'école pour 16-17 ans.",
      'phone' => '',
      'url'   => 'cjereseau.org',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Fusion Jeunesse',
      'desc'  => "Projets concrets dans les écoles (robotique, entrepreneuriat, arts, jeux vidéo) pour renforcer la motivation.",
      'phone' => '',
      'url'   => 'fusionjeunesse.org',
      'scope' => 'Montréal et régions',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Services psychosociaux de ton école',
      'desc'  => "Psychoéducateur, travailleur social, psychologue scolaire — demande à la direction ou au secrétariat.",
      'phone' => '',
      'url'   => '',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Protecteur régional de l'élève",
      'desc'  => "Pour porter plainte si tes droits ne sont pas respectés à l'école.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 5. IDENTITÉ, DIVERSITÉ ET SEXUALITÉ ───
  'identite' => [
    [
      'nom'   => 'Projet 10 (Project 10)',
      'desc'  => "Organisme pour jeunes 2SLGBTQIA+ de 14 à 25 ans : groupes de soutien, accompagnement, défense des droits.",
      'phone' => '514-989-4585',
      'url'   => 'p10.qc.ca',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Interligne',
      'desc'  => "Écoute, information, référence et soutien 24/7 pour personnes LGBTQ+ et proches. Clinique juridique LGBTQ+.",
      'phone' => '1-888-505-1010',
      'url'   => 'interligne.co',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'AlterHéros',
      'desc'  => "Questions-réponses en ligne avec sexologues, psychologues et travailleurs sociaux sur l'identité et la sexualité.",
      'phone' => '',
      'url'   => 'alterheros.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "L'Astérisk (Coalition jeunesse)",
      'desc'  => "Espace sécuritaire pour jeunes LGBTQ+ — abrite Projet 10, Jeunesse Lambda et AlterHéros.",
      'phone' => '',
      'url'   => 'coalitionjeunesse.org',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Aide aux Trans du Québec (ATQ)',
      'desc'  => "Soutien et information pour personnes trans et en questionnement.",
      'phone' => '',
      'url'   => 'aideauxtrans.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Jeunes Identités Créatives',
      'desc'  => "Soutien pour jeunes trans, non-binaires et en questionnement.",
      'phone' => '',
      'url'   => 'jfrq.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "GRIS — Groupe de recherche et d'intervention sociale",
      'desc'  => "Ateliers de démystification de la diversité sexuelle et de genre en milieu scolaire.",
      'phone' => '',
      'url'   => '',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Enfants transgenres Canada',
      'desc'  => "Ressources et soutien pour familles d'enfants et adolescents trans.",
      'phone' => '',
      'url'   => 'enfantstransgenres.ca',
      'scope' => 'Pancanadien',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'On SEXplique ça',
      'desc'  => "Vidéos et ateliers d'éducation sexuelle par des sexologues professionnels.",
      'phone' => '',
      'url'   => 'onsexpliqueca.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 6. FAMILLE, CONFLITS ET VIOLENCE ───
  'famille' => [
    [
      'nom'   => 'DPJ — Direction de la protection de la jeunesse (Montréal)',
      'desc'  => "Signalement de maltraitance, négligence, violence ou conflit grave. Évaluation et intervention.",
      'phone' => '514-896-3100',
      'url'   => '',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Tel-Jeunes — Conflits familiaux et violence',
      'desc'  => "Accompagnement sur les conflits à la maison, violence, crise. Orientation vers DPJ, hébergement.",
      'phone' => '1-800-263-2266',
      'url'   => '',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'SOS Violence conjugale',
      'desc'  => "Aide si tu vis ou es témoin de violence dans ta famille ou ta relation.",
      'phone' => '1-800-363-9010',
      'url'   => '',
      'scope' => 'Provincial — 24/7',
      'scope_type' => '',
    ],
    [
      'nom'   => "CALACS — Centres d'aide contre les agressions sexuelles",
      'desc'  => "Aide pour victimes d'agression sexuelle, tous âges incluant adolescents.",
      'phone' => '',
      'url'   => 'calacs.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Dans la rue',
      'desc'  => "Aide aux jeunes sans-abri ou en situation précaire (12-25 ans) : hébergement d'urgence, repas, soins, réinsertion.",
      'phone' => '514-526-5222',
      'url'   => 'danslarue.org',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Bureau de consultation jeunesse (BCJ)',
      'desc'  => "Accompagnement des jeunes 14-25 ans vers plus d'autonomie : travail de milieu, projets collectifs.",
      'phone' => '',
      'url'   => 'rocajq.org',
      'scope' => 'Montréal, Laval, Longueuil',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Médiation familiale Québec',
      'desc'  => "Service gratuit pour aider les parents à s'entendre lors d'une séparation et considérer les besoins des enfants.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'FAFMRQ — Familles monoparentales et recomposées',
      'desc'  => "Information et soutien pour familles monoparentales.",
      'phone' => '',
      'url'   => 'fafmrq.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 7. DEUIL ET PERTE ───
  'deuil' => [
    [
      'nom'   => 'Deuil-Jeunesse',
      'desc'  => "Soutien spécialisé pour jeunes vivant un deuil, une maladie grave d'un proche, un abandon ou l'adoption.",
      'phone' => '1-855-889-3666',
      'url'   => 'dfrq.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Maison Monbourquette',
      'desc'  => "Accompagnement au deuil pour enfants, adolescents et adultes. Groupes de soutien.",
      'phone' => '',
      'url'   => 'maisonmonbourquette.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 8. VIE SOCIALE — MAISONS DE JEUNES ───
  'sociale' => [
    [
      'nom'   => 'RMJQ — Regroupement des maisons des jeunes du Québec',
      'desc'  => "249 maisons de jeunes dans 330+ milieux de vie. Lieux gratuits, sans rendez-vous, animés par des adultes significatifs.",
      'phone' => '514-876-1865',
      'url'   => 'rmjq.org',
      'scope' => 'Provincial (249 MDJ)',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Maisons de jeunes — Montréal',
      'desc'  => "Plusieurs MDJ par arrondissement (Ahuntsic, Anjou, CDN-NDG, Mercier-HoMa, Montréal-Nord, Plateau, Rosemont, etc.).",
      'phone' => '',
      'url'   => 'rmjq.org (filtre Montréal)',
      'scope' => 'Montréal (16+ arrondissements)',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'MDJCN — Maisons de jeunes Capitale-Nationale',
      'desc'  => "Regroupement régional de 34 MDJ de Portneuf à Charlevoix.",
      'phone' => '418-635-1026',
      'url'   => 'mdjcn.ca',
      'scope' => 'Québec / Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Ville de Montréal — Programmes ados',
      'desc'  => "Camps de jour 12-14 ans, sports, arts, ateliers, Espace Jeunesse, activités de rue gratuites.",
      'phone' => '',
      'url'   => 'montreal.ca',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Go Jeunesse',
      'desc'  => "Camps et activités estivales pour jeunes dans des milieux défavorisés. Sports, culture, projets collectifs.",
      'phone' => '',
      'url'   => 'gojeunesse.org',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => '211 — Jeunesse et loisirs',
      'desc'  => "Répertoire pour trouver MDJ, centres communautaires, clubs sportifs, organismes de loisirs par quartier.",
      'phone' => '211',
      'url'   => '211qc.ca',
      'scope' => 'Grand Montréal / Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 9. ENTRAIDE ET MENTORAT ───
  'entraide' => [
    [
      'nom'   => 'Grands Frères Grandes Sœurs du Grand Montréal',
      'desc'  => "Mentorat : jumelage ados avec mentors bénévoles. Programmes ciblés (LGBTQ2+, Autochtone, communautés noires).",
      'phone' => '514-842-9715',
      'url'   => 'gfgsmtl.qc.ca',
      'scope' => 'Montréal, Laval, Rive-Sud',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'Projet Réussite Jeunesse — Centraide',
      'desc'  => "Soutien à des organismes offrant camps, stages d'été, activités de groupe pour prévenir l'isolement.",
      'phone' => '',
      'url'   => 'centraide-mtl.org',
      'scope' => 'Grand Montréal',
      'scope_type' => 'montreal',
    ],
  ],

  // ─── 10. DROITS DES JEUNES ───
  'droits' => [
    [
      'nom'   => 'Éducaloi — Section Jeunesse',
      'desc'  => "Fiches claires sur les droits des jeunes : consentement aux soins, confidentialité, droits à l'école, intimidation, DPJ.",
      'phone' => '1-844-343-7529',
      'url'   => 'educaloi.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'CDPDJ — Commission des droits de la personne et de la jeunesse',
      'desc'  => "Protège les droits des jeunes. Plaintes en cas de discrimination, exploitation, atteinte aux droits d'un mineur.",
      'phone' => '1-800-361-6477',
      'url'   => 'cdpdj.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Centres de justice de proximité (CJP)',
      'desc'  => "Information juridique gratuite : droits scolaires, DPJ, médiation, recours.",
      'phone' => '',
      'url'   => 'justicedeproximite.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Protecteur régional de l'élève",
      'desc'  => "Recours si tes droits ne sont pas respectés à l'école. Plainte formelle possible.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 11. DÉPENDANCES ET ÉCRANS ───
  'dependances' => [
    [
      'nom'   => 'Drogue : aide et référence (DAR)',
      'desc'  => "Écoute, information et références pour ados. Alcool, drogues, médicaments. Clavardage et prévention des surdoses.",
      'phone' => '1-800-265-2626',
      'url'   => 'aidedrogue.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Centre Dollard-Cormier / CRDM-IU',
      'desc'  => "Centre spécialisé en dépendance avec volet jeunesse : évaluation, réadaptation, réinsertion.",
      'phone' => '514-385-1232',
      'url'   => '',
      'scope' => 'Montréal',
      'scope_type' => 'montreal',
    ],
    [
      'nom'   => 'PAUSE — Utilisation équilibrée des écrans',
      'desc'  => "Plateforme gouvernementale avec outils pour une utilisation saine des écrans.",
      'phone' => '',
      'url'   => 'pausetonecran.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Le Grand Chemin',
      'desc'  => "Traitement gratuit de la cyberdépendance et des dépendances pour adolescents.",
      'phone' => '',
      'url'   => 'legrandchemin.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Jeu : aide et référence',
      'desc'  => "Aide pour problèmes de jeu de hasard, d'argent et jeux vidéo excessifs.",
      'phone' => '1-800-461-0140',
      'url'   => '',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Tel-Jeunes — Consommation et dépendances',
      'desc'  => "Écoute et information sur la consommation, jeux vidéo, paris. Orientation vers ressources locales.",
      'phone' => '1-800-263-2266',
      'url'   => '',
      'scope' => 'Provincial',
      'scope_type' => '',
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
  'deuil'  => ['var' => '#7A6B8B',          'light' => '#EDE8F2'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ressources Montréal — Ado Solo | SOLOPLUGS</title>
<meta name="description" content="70+ ressources pour les adolescents de 12 à 17 ans à Montréal et au Québec. Lignes d'écoute, santé mentale, intimidation, identité, droits, dépendances.">
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
  $varLight = $c['light'];
  // For deuil, use direct hex values
  if ($cat['color'] === 'deuil') {
    echo ".theme-box[data-theme=\"{$key}\"]::before { background: {$varColor}; }\n";
    echo ".theme-box[data-theme=\"{$key}\"] .theme-dot { background: {$varColor}; }\n";
  } else {
    echo ".theme-box[data-theme=\"{$key}\"]::before { background: var({$varColor}); }\n";
    echo ".theme-box[data-theme=\"{$key}\"] .theme-dot { background: var({$varColor}); }\n";
  }
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

<?php foreach ($categories as $key => $cat):
  $c = $colorMap[$cat['color']];
  $varColor = $c['var'];
  if ($cat['color'] === 'deuil') {
    echo ".resource-card[data-cat=\"{$key}\"]::before { background: {$varColor}; }\n";
  } else {
    echo ".resource-card[data-cat=\"{$key}\"]::before { background: var({$varColor}); }\n";
  }
endforeach; ?>

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

<!-- ═══════ HERO ═══════ -->
<section class="hero" id="top">
  <!-- Bouton retour -->
  <a href="../7_themes/ado-solo.php" class="btn-retour" title="Retour">
    <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
  </a>
  
  <div class="hero-badge">Qu&eacute;bec</div>
  <h1>Ressources <em>Montr&eacute;al</em> &mdash; Ado Solo</h1>
  <p class="subtitle">T'es pas seul&middot;e dans ce que tu vis. Ici, y'a des gens qui comprennent &mdash; et des ressources faites pour toi.</p>
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
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v4M12 17h.01M5.07 19h13.86a2 2 0 001.74-2.97L13.74 4.03a2 2 0 00-3.48 0L3.33 16.03A2 2 0 005.07 19z"/></svg>
    </div>
    <div class="urgent-body">
      <h3>Aide imm&eacute;diate &mdash; 24/7</h3>
      <p>Peu importe ce que tu traverses, quelqu'un peut t'&eacute;couter. Maintenant, l&agrave;, tout de suite.</p>
      <div class="urgent-numbers">
        <a href="tel:18002632266" class="urgent-pill">1-800-263-2266 <span class="pill-label">Tel-Jeunes</span></a>
        <a href="tel:988" class="urgent-pill">988 <span class="pill-label">Crise</span></a>
        <a href="tel:18006686868" class="urgent-pill">1-800-668-6868 <span class="pill-label">Jeunesse, J'&eacute;coute</span></a>
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
    $isDeuil = ($cat['color'] === 'deuil');
    $iconHtml = str_replace('currentStroke', ($isDeuil ? $varColor : "var({$varColor})"), $cat['icon']);
    $indicatorBg = $isDeuil ? $varLight : "var({$varLight})";
    $dotBg = $isDeuil ? $varColor : "var({$varColor})";
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
        <svg class="card-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
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
