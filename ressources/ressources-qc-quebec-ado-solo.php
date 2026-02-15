<?php
// ═══════════════════════════════════════════════════════════════════════
// SOLOPLUGS — Ressources Ado Solo — Québec / Capitale-Nationale
// Design system identique à ressources-qc-montreal-ado-solo.php
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
    'count' => 7,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>',
  ],
  'ecole' => [
    'nom'   => 'École et persévérance scolaire',
    'color' => 'blue',
    'count' => 8,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2zM22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>',
  ],
  'identite' => [
    'nom'   => 'Identité, diversité et sexualité',
    'color' => 'purple',
    'count' => 7,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
  ],
  'famille' => [
    'nom'   => 'Famille, conflits et violence',
    'color' => 'rose',
    'count' => 7,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M3 9.5L12 4l9 5.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
  ],
  'hebergement' => [
    'nom'   => 'Hébergement, fugue et itinérance',
    'color' => 'warm',
    'count' => 4,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M3 9.5L12 4l9 5.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
  ],
  'deuil' => [
    'nom'   => 'Deuil et perte',
    'color' => 'deuil',
    'count' => 2,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/><path d="M12 8v4M12 16h.01"/></svg>',
  ],
  'sociale' => [
    'nom'   => 'Vie sociale, entraide et mentorat',
    'color' => 'green',
    'count' => 6,
    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentStroke" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
  ],
  'droits' => [
    'nom'   => 'Droits des jeunes',
    'color' => 'teal',
    'count' => 5,
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
      'desc'  => "Ateliers gratuits en classe sur la santé mentale et la prévention de la détresse. Secondaire 1 à 5.",
      'phone' => '',
      'url'   => 'fondationjeunesentete.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'CHU Sainte-Justine — Guide Info-famille',
      'desc'  => "Ressources fiables pour parents d'ados vivant de l'intimidation.",
      'phone' => '',
      'url'   => 'chusj.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Plan d'action concerté 2025-2030 — Gouv. du Québec",
      'desc'  => "15 M$ sur 5 ans, 28 mesures contre l'intimidation et la cyberintimidation. Inclut le milieu scolaire.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 3. SANTÉ MENTALE — JEUNES ───
  'sante-mentale' => [
    [
      'nom'   => 'CIUSSS Capitale-Nationale — Services jeunesse',
      'desc'  => "Accueil psychosocial jeunesse, évaluation, suivi en santé mentale pour les moins de 18 ans. Référence via 811 ou CLSC.",
      'phone' => '811 (option 2)',
      'url'   => '',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Aire ouverte — CIUSSS Capitale-Nationale',
      'desc'  => "Services de santé mentale, santé sexuelle, soutien psychosocial et social pour les 12-25 ans. Sans rendez-vous, confidentiel, gratuit.",
      'phone' => '',
      'url'   => 'aireouverte.ca',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Centre de crise de Québec',
      'desc'  => "Intervention 24/7 pour personnes de 14 ans et plus vivant une crise situationnelle ou de santé mentale. Intervention téléphonique, équipe mobile, hébergement temporaire (18+).",
      'phone' => '418-688-4240 (24/7)',
      'url'   => '',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Le Pavois — Groupe Acousmates',
      'desc'  => "Services d'intégration scolaire et socioprofessionnelle en santé mentale. Groupe « Les Acousmates » pour jeunes 12-17 ans entendeurs de voix (aux 2 semaines, Patro Laval). Trois points de service.",
      'phone' => '418-627-9779',
      'url'   => 'lepavois.org',
      'scope' => 'Capitale-Nationale (3 points de service)',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Phobies-Zéro',
      'desc'  => "Soutien pour les jeunes vivant anxiété, phobies, trouble panique ou TOC. Ligne d'écoute et groupes.",
      'phone' => '1-866-922-0002',
      'url'   => 'phobies-zero.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Relief',
      'desc'  => "Ateliers d'autogestion en santé mentale pour les proches et les personnes touchées.",
      'phone' => '1-866-738-4873',
      'url'   => 'relief.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'ANEB — Anorexie et Boulimie Québec',
      'desc'  => "Soutien pour les jeunes vivant des troubles alimentaires. Ligne d'écoute confidentielle.",
      'phone' => '1-800-630-0907',
      'url'   => 'anebquebec.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 4. ÉCOLE ET PERSÉVÉRANCE SCOLAIRE ───
  'ecole' => [
    [
      'nom'   => 'Centre Solidarité Jeunesse',
      'desc'  => "Depuis 1986. Accompagne les jeunes de 10 à 21 ans dans leurs transitions scolaires. Programmes : Antre-Classe (milieu de vie en école), Passerelle (ados en décrochage), Parachute (transition primaire → secondaire).",
      'phone' => '',
      'url'   => 'csjeunesse.org',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => "Au Trait d'union Québec",
      'desc'  => "Développer les compétences personnelles, sociales et académiques des jeunes de 12 à 30 ans. Soutien scolaire, aide alimentaire et matérielle, activités sportives/culturelles. Prix annuel de persévérance.",
      'phone' => '418-661-4111',
      'url'   => 'autraitdunion.org',
      'scope' => 'Beauport (Québec)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'Carrefour jeunesse-emploi Capitale-Nationale (CJECN)',
      'desc'  => "Accompagnement pour les 16-35 ans : intégration au marché du travail, retour aux études, persévérance scolaire, orientation professionnelle.",
      'phone' => '418-524-2345',
      'url'   => 'cjecn.qc.ca',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Vallée Jeunesse',
      'desc'  => "Programmes pour aider les jeunes de 12 à 20 ans dans leur scolarisation ou insertion professionnelle. Soutien scolaire, formations, plateau de travail (16-20 ans), répits en nature.",
      'phone' => '418-844-3562',
      'url'   => '',
      'scope' => 'Valcartier (Haute-Saint-Charles)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'Motivaction Jeunesse',
      'desc'  => "Prévention du décrochage scolaire par le sport, le plein air, les arts et la culture. Jeunes issus de la diversité culturelle et jeunes en difficulté, dans plusieurs écoles de Québec.",
      'phone' => '',
      'url'   => '',
      'scope' => 'Ville de Québec (milieux scolaires)',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Alloprof',
      'desc'  => "Aide gratuite aux devoirs par téléphone et clavardage. Exercices interactifs, vidéos explicatives, fiches de révision.",
      'phone' => '1-888-776-4455',
      'url'   => 'alloprof.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "Services psychosociaux de ton école",
      'desc'  => "Toutes les écoles secondaires ont un psychologue, un psychoéducateur ou un travailleur social. Demande au secrétariat.",
      'phone' => '',
      'url'   => '',
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

  // ─── 5. IDENTITÉ, DIVERSITÉ ET SEXUALITÉ ───
  'identite' => [
    [
      'nom'   => 'GRIS-Québec',
      'desc'  => "Démystification de l'homosexualité et de la bisexualité par des témoignages en milieu scolaire. Soutien pour les jeunes LGBTQ+ 12-25 ans. Ateliers de sensibilisation.",
      'phone' => '418-523-5572',
      'url'   => 'grisquebec.org',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Interligne',
      'desc'  => "Écoute et soutien 24/7 pour les personnes de la diversité sexuelle et de genre, et leurs proches.",
      'phone' => '1-888-505-1010',
      'url'   => 'interligne.co',
      'scope' => 'Provincial — 24/7',
      'scope_type' => '',
    ],
    [
      'nom'   => 'AlterHéros',
      'desc'  => "Plateforme d'information sur la diversité sexuelle et de genre pour les jeunes. Questions anonymes.",
      'phone' => '',
      'url'   => 'alterheros.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => "L'Astérisk (Coalition jeunesse)",
      'desc'  => "Coalition de jeunes LGBTQ+ 14-25 ans. Espaces sécuritaires, événements, plaidoyer.",
      'phone' => '',
      'url'   => 'coalitionjeunesse.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Aide aux Trans du Québec (ATQ)',
      'desc'  => "Soutien aux personnes trans et non-binaires. Ligne d'écoute, groupes, accompagnement.",
      'phone' => '1-855-909-9038',
      'url'   => 'atq1980.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Enfants transgenres Canada',
      'desc'  => "Ressources et soutien pour les familles d'enfants et d'ados trans ou en questionnement de genre.",
      'phone' => '',
      'url'   => 'enfantstransgenres.ca',
      'scope' => 'Pancanadien',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'On SEXplique ça',
      'desc'  => "Éducation sexuelle positive : consentement, identité, relations, contraception, ITSS.",
      'phone' => '',
      'url'   => 'onsexpliqueça.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 6. FAMILLE, CONFLITS ET VIOLENCE ───
  'famille' => [
    [
      'nom'   => 'DPJ — Direction de la protection de la jeunesse (Capitale-Nationale)',
      'desc'  => "Signalement si un jeune est victime d'abus, de négligence ou si sa sécurité est compromise. Confidentiel. 24/7.",
      'phone' => '418-661-6951',
      'url'   => '',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Mères et monde',
      'desc'  => "Soutien aux jeunes mères (16-30 ans) : logement, halte-garderie, accompagnement social, entraide. Aide à briser l'isolement des jeunes mamans.",
      'phone' => '418-522-5139',
      'url'   => 'meresetmonde.qc.ca',
      'scope' => 'Limoilou (Québec)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'Tel-Jeunes — Conflits familiaux et violence',
      'desc'  => "Écoute confidentielle pour ados vivant des conflits avec leurs parents, de la violence ou des tensions familiales.",
      'phone' => '1-800-263-2266',
      'url'   => 'teljeunes.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'SOS Violence conjugale',
      'desc'  => "Aide 24/7 si tu vis ou es témoin de violence dans ta famille.",
      'phone' => '1-800-363-9010',
      'url'   => 'sosviolenceconjugale.ca',
      'scope' => 'Provincial — 24/7',
      'scope_type' => '',
    ],
    [
      'nom'   => "CALACS — Centres d'aide contre les agressions sexuelles",
      'desc'  => "Aide pour les jeunes victimes d'agression sexuelle. Écoute, accompagnement, suivi.",
      'phone' => '1-888-933-9007',
      'url'   => 'rqcalacs.qc.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Médiation familiale Québec',
      'desc'  => "Séances gratuites de médiation pour parents en séparation. Aide l'ado à garder des liens sains.",
      'phone' => '',
      'url'   => 'quebec.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'FAFMRQ — Familles monoparentales et recomposées',
      'desc'  => "Soutien aux familles monoparentales et recomposées. Brise l'isolement, entraide entre parents.",
      'phone' => '',
      'url'   => 'fafmrq.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 7. HÉBERGEMENT, FUGUE ET ITINÉRANCE ───
  'hebergement' => [
    [
      'nom'   => 'Gîte Jeunesse',
      'desc'  => "Hébergement d'urgence et de transition pour jeunes en difficulté. Accueil, soutien, référence. Deux points de service dans la région de Québec.",
      'phone' => '418-666-3225 (Beauport) | 418-652-9990 (Ste-Foy)',
      'url'   => '',
      'scope' => 'Beauport et Ste-Foy (Québec)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'SQUAT Basse-Ville',
      'desc'  => "Hébergement temporaire et volontaire pour jeunes de 12 à 17 ans en fugue ou en situation d'itinérance. 10 chambres, ouvert 24/7. Travail de rue (12-25 ans). Logements sociaux 18-25 ans. Dépannage alimentaire, programme Envol (transition 17 ans). Depuis 1999.",
      'phone' => '418-521-4483',
      'url'   => 'squatbv.com',
      'scope' => 'Basse-Ville / Saint-Roch (Québec)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'Maison Richelieu Hébergement Jeunesse',
      'desc'  => "Hébergement pour filles de 12 à 17 ans (60 jours max). Accompagnement, rencontres familiales, suivi post-hébergement, ateliers.",
      'phone' => '418-659-1077',
      'url'   => '',
      'scope' => 'Sainte-Foy (Québec)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'La Dauphine',
      'desc'  => "Depuis 1992. Accueil, hébergement d'urgence (12 lits, 24/7, 365 jours/an) et milieu de vie pour jeunes de la rue 12-35 ans. Aide alimentaire, hygiène, vêtements, soins de santé (clinique SPOT), soutien juridique. École La Dauphine (secondaire). Programme JAD (réinsertion emploi). Pet-friendly.",
      'phone' => '418-694-9616',
      'url'   => 'ladauphine.org',
      'scope' => 'Vieux-Québec (31, rue d\'Auteuil)',
      'scope_type' => 'local',
    ],
  ],

  // ─── 8. DEUIL ET PERTE ───
  'deuil' => [
    [
      'nom'   => 'Deuil-Jeunesse',
      'desc'  => "Accompagnement gratuit pour les jeunes de 3 à 25 ans vivant un deuil ou une perte significative.",
      'phone' => '1-855-889-3666',
      'url'   => 'dfrjeunesse.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Maison Monbourquette',
      'desc'  => "Groupes de soutien pour enfants et ados vivant un deuil, une séparation parentale ou une maladie grave.",
      'phone' => '1-888-533-3845',
      'url'   => 'maisonmonbourquette.com',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 9. VIE SOCIALE, ENTRAIDE ET MENTORAT ───
  'sociale' => [
    [
      'nom'   => 'Maisons des jeunes Capitale-Nationale (MDJCN)',
      'desc'  => "Environ 40 maisons de jeunes dans la région. Lieux de rencontre animés où les 12-17 ans trouvent écoute, activités et adultes significatifs.",
      'phone' => '418-635-1026',
      'url'   => '',
      'scope' => 'Capitale-Nationale (~40 MDJ)',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Entraide Jeunesse Québec (EJQ)',
      'desc'  => "Depuis 1988. Soutien et activités de prévention pour jeunes de 12 à 25 ans. Groupes d'entraide : vivre avec soi et les autres, gestion des émotions et comportements impulsifs-violents. Relations égalitaires et pacifiques.",
      'phone' => '418-649-9705',
      'url'   => 'entraidejeunesse.qc.ca',
      'scope' => 'Limoilou (Québec)',
      'scope_type' => 'local',
    ],
    [
      'nom'   => 'Grands Frères Grandes Sœurs de Québec',
      'desc'  => "Mentorat par jumelage : un adulte bénévole accompagne un jeune dans son développement. Activités, sorties, relation de confiance.",
      'phone' => '418-624-3304',
      'url'   => '',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'RMJQ — Regroupement des maisons des jeunes du Québec',
      'desc'  => "Répertoire de toutes les maisons des jeunes au Québec. Trouve celle de ton quartier.",
      'phone' => '',
      'url'   => 'rmjq.org',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
    [
      'nom'   => 'Ville de Québec — Programmes ados',
      'desc'  => "Activités de loisirs, sports, arts et camps offerts par la Ville pour les 12-17 ans. Tarifs réduits disponibles.",
      'phone' => '311',
      'url'   => 'ville.quebec.qc.ca',
      'scope' => 'Ville de Québec',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => '211 — Jeunesse et loisirs',
      'desc'  => "Trouvez des activités, camps, aide alimentaire et ressources jeunesse près de chez vous.",
      'phone' => '211',
      'url'   => '211quebecregions.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
    ],
  ],

  // ─── 10. DROITS DES JEUNES ───
  'droits' => [
    [
      'nom'   => 'Centre communautaire juridique de Québec — Volet jeunesse',
      'desc'  => "Information juridique gratuite pour les jeunes. Droits des mineurs, loi sur la protection de la jeunesse, aide juridique.",
      'phone' => '418-643-1235',
      'url'   => '',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
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
      'nom'   => 'Le Grand Chemin — Québec',
      'desc'  => "Services gratuits de thérapie avec hébergement et réinsertion sociale pour jeunes de 12 à 17 ans aux prises avec des dépendances : toxicomanie, alcool, jeu, cyberdépendance. Soutien aux proches.",
      'phone' => '418-523-1128 | Sans frais : 1-877-381-7075',
      'url'   => 'legrandchemin.qc.ca',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Centre de réadaptation en dépendance de Québec (CRDQ)',
      'desc'  => "Aide aux personnes aux prises avec des problèmes de dépendance (alcool, drogues, jeux). Volet jeunesse disponible.",
      'phone' => '418-663-5008',
      'url'   => '',
      'scope' => 'Capitale-Nationale',
      'scope_type' => 'regional',
    ],
    [
      'nom'   => 'Drogue : aide et référence (DAR)',
      'desc'  => "Écoute, information et références pour ados. Alcool, drogues, médicaments. Clavardage et prévention des surdoses.",
      'phone' => '1-800-265-2626',
      'url'   => 'aidedrogue.ca',
      'scope' => 'Provincial',
      'scope_type' => '',
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
  'warm'   => ['var' => '--accent-warm',    'light' => '--accent-warm-light'],
  'deuil'  => ['var' => '#7A6B8B',          'light' => '#EDE8F2'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ressources Québec — Ado Solo — Capitale-Nationale | SOLOPLUGS</title>
<meta name="description" content="69 ressources pour les adolescents de 12 à 17 ans dans la Capitale-Nationale et au Québec. Lignes d'écoute, santé mentale, intimidation, identité, hébergement, droits, dépendances.">
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
  font-size: clamp(28px, 5vw, 42px);
  font-weight: 700;
  color: var(--hero-text);
  line-height: 1.2;
  margin-bottom: 16px;
}
.hero h1 em {
  font-style: italic;
  color: var(--accent-amber);
}
.hero .subtitle {
  font-size: 17px;
  color: var(--hero-muted);
  max-width: 540px;
  margin: 0 auto 20px;
  line-height: 1.6;
}
.location-tag {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(90,143,110,0.12);
  border: 1px solid rgba(90,143,110,0.2);
  padding: 6px 14px; border-radius: 100px;
  font-size: 13px; font-weight: 500; color: var(--accent-green);
}
.location-tag .dot {
  width: 7px; height: 7px;
  background: var(--accent-green);
  border-radius: 50%;
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
  display: flex; justify-content: space-between; align-items: center;
  padding: 20px 24px 0;
  max-width: 900px; margin: 0 auto;
}
.back-link {
  display: inline-flex; align-items: center; gap: 6px;
  font-size: 14px; font-weight: 500;
  color: var(--text-secondary);
  text-decoration: none;
  transition: color 0.2s;
}
.back-link:hover { color: var(--accent-amber); }
.back-link svg { width: 18px; height: 18px; }
.region-select {
  font-size: 14px; font-weight: 600;
  color: var(--accent-amber);
  background: var(--accent-amber-glow);
  padding: 6px 14px; border-radius: var(--radius-sm);
}

/* ═══════════════════════════════════════
   MAIN WRAPPER
   ═══════════════════════════════════════ */
.main-wrap {
  max-width: 900px;
  margin: 0 auto;
  padding: 10px 24px 80px;
}

/* ═══════════════════════════════════════
   URGENT BANNER
   ═══════════════════════════════════════ */
.urgent-banner {
  background: linear-gradient(135deg, #2D1F1F, #1C1A17);
  border-radius: var(--radius-lg);
  padding: 28px 32px;
  display: flex; align-items: flex-start; gap: 20px;
  margin: 24px 0 16px;
  border: 1px solid rgba(176,107,120,0.25);
}
.urgent-indicator {
  width: 48px; height: 48px;
  background: var(--accent-rose);
  border-radius: var(--radius-md);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.urgent-indicator svg { width: 24px; height: 24px; color: white; }
.urgent-body h3 {
  font-family: 'DM Sans', sans-serif;
  font-size: 18px; font-weight: 700; color: white;
  margin-bottom: 4px;
}
.urgent-body p {
  font-size: 14px; color: var(--hero-muted); margin-bottom: 14px; line-height: 1.5;
}
.urgent-numbers {
  display: flex; flex-wrap: wrap; gap: 10px;
}
.urgent-pill {
  display: inline-flex; flex-direction: column; align-items: center;
  background: rgba(176,107,120,0.15);
  border: 1px solid rgba(176,107,120,0.3);
  padding: 8px 16px; border-radius: var(--radius-sm);
  font-family: 'DM Sans', sans-serif;
  font-size: 16px; font-weight: 700; color: #E8B4BE;
  text-decoration: none;
  transition: background 0.2s;
}
.urgent-pill:hover { background: rgba(176,107,120,0.25); }
.pill-label {
  font-size: 11px; font-weight: 400; color: var(--hero-muted); margin-top: 2px;
}

/* ═══════════════════════════════════════
   THEME NAVIGATION GRID
   ═══════════════════════════════════════ */
.theme-nav {
  margin: 32px 0;
}
.theme-nav-title {
  font-family: 'DM Sans', sans-serif;
  font-size: 13px; font-weight: 600;
  text-transform: uppercase; letter-spacing: 0.06em;
  color: var(--text-muted);
  margin-bottom: 14px;
}
.theme-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}
.theme-box {
  display: flex; align-items: center; gap: 10px;
  background: var(--card-bg);
  border: 1px solid var(--border-subtle);
  border-radius: var(--radius-md);
  padding: 12px 14px;
  text-decoration: none;
  transition: box-shadow 0.2s, border-color 0.2s;
}
.theme-box:hover {
  box-shadow: var(--shadow-hover);
  border-color: var(--accent-amber);
}
.theme-dot {
  width: 8px; height: 8px;
  background: var(--accent-amber);
  border-radius: 50%;
  flex-shrink: 0;
}
.theme-box-text {
  flex: 1; min-width: 0;
}
.theme-box-text span {
  display: block;
  font-size: 13px; font-weight: 600;
  color: var(--text-primary);
  line-height: 1.3;
}
.theme-box-text small {
  font-size: 11px; color: var(--text-muted);
}
.theme-box svg {
  width: 16px; height: 16px;
  color: var(--text-muted);
  flex-shrink: 0;
}
.theme-box.suggest {
  border-style: dashed;
  background: var(--warm-bg);
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
  margin-bottom: 20px;
  padding-bottom: 14px;
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
  font-family: 'Playfair Display', serif;
  font-size: 22px; font-weight: 600;
  color: var(--text-primary);
  flex: 1;
}
.category-header .count {
  font-size: 13px; font-weight: 500;
  color: var(--text-muted);
  background: var(--warm-bg-alt);
  padding: 4px 12px; border-radius: 100px;
}

/* ═══════════════════════════════════════
   RESOURCE CARDS
   ═══════════════════════════════════════ */
.card-grid {
  display: flex; flex-direction: column; gap: 10px;
}
.resource-card {
  background: var(--card-bg);
  border: 1px solid var(--border-subtle);
  border-radius: var(--radius-md);
  padding: 18px 20px;
  display: flex; align-items: flex-start; gap: 14px;
  transition: box-shadow 0.2s, border-color 0.2s;
}
.resource-card:hover {
  box-shadow: var(--shadow-hover);
  border-color: rgba(45,42,38,0.15);
}
.card-dot {
  width: 10px; height: 10px;
  border-radius: 50%;
  margin-top: 6px;
  flex-shrink: 0;
}
.card-body { flex: 1; min-width: 0; }
.card-body h3 {
  font-family: 'DM Sans', sans-serif;
  font-size: 16px; font-weight: 600;
  color: var(--text-primary);
  margin-bottom: 4px;
}
.card-desc {
  font-size: 14px; line-height: 1.55;
  color: var(--text-secondary);
  margin-bottom: 10px;
}
.card-meta {
  display: flex; flex-wrap: wrap; gap: 8px;
}
.card-tag {
  display: inline-block;
  font-size: 12px; font-weight: 500;
  padding: 3px 10px; border-radius: 100px;
  background: var(--warm-bg-alt);
  color: var(--text-secondary);
}
.card-tag.phone {
  background: var(--accent-amber-glow);
  color: var(--accent-amber);
  font-weight: 600;
}
.card-tag.scope {
  background: var(--accent-green-light);
  color: var(--accent-green);
  font-weight: 600;
}
.card-tag.scope.regional {
  background: var(--accent-purple-light);
  color: var(--accent-purple);
}
.card-tag.scope.local {
  background: var(--accent-blue-light);
  color: var(--accent-blue);
}
.card-arrow {
  color: var(--text-muted);
  flex-shrink: 0;
  margin-top: 4px;
}

/* ═══════════════════════════════════════
   211 UNIVERSAL BANNER
   ═══════════════════════════════════════ */
.universal-banner {
  background: var(--card-bg);
  border: 1px solid var(--accent-green-light);
  border-radius: var(--radius-lg);
  padding: 20px 24px;
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
  <h1>Ressources <em>Capitale-Nationale</em> &mdash; Ado Solo</h1>
  <p class="subtitle">T'es pas seul&middot;e dans ce que tu vis. Ici, y'a des gens qui comprennent &mdash; et des ressources faites pour toi.</p>
</section>

<!-- ═══════ NAV ═══════ -->
<div class="nav-bar">
  <a href="ressources-qc.php?theme=ado-solo" class="back-link">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
    Changer de r&eacute;gion
  </a>
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
      <h3>Aide imm&eacute;diate &mdash; 24/7</h3>
      <p>Peu importe ce que tu traverses, quelqu'un peut t'&eacute;couter. Maintenant, l&agrave;, tout de suite.</p>
      <div class="urgent-numbers">
        <a href="tel:18002632266" class="urgent-pill">1-800-263-2266 <span class="pill-label">Tel-Jeunes</span></a>
        <a href="tel:988" class="urgent-pill">988 <span class="pill-label">Crise</span></a>
        <a href="tel:18006686868" class="urgent-pill">1-800-668-6868 <span class="pill-label">Jeunesse, J'&eacute;coute</span></a>
        <a href="tel:4186884240" class="urgent-pill">418-688-4240 <span class="pill-label">Centre de crise Qu&eacute;bec</span></a>
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
