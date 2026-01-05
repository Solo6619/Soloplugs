<?php
/**
 * SOLOPLUGS - Lectures & Découvertes
 * Section Magazine - La voix de la solitude
 * 
 * Cette page présente des recommandations de livres, films et podcasts
 * sur la thématique de la solitude choisie et de l'isolement.
 */

// Configuration de la page
$page_title = "Lectures & Découvertes | Solo Magazine";
$page_description = "Explorez notre sélection de livres, films et podcasts sur la solitude. Des œuvres qui éclairent, inspirent et accompagnent votre chemin vers une solitude choisie.";

// Données des livres
$livres = [
    // Essais
   [
        'titre' => 'Walden ou la vie dans les bois',
        'auteur' => 'Henry David Thoreau',
        'categorie' => 'essai',
        'description' => 'Le récit fondateur de la solitude choisie. Thoreau y raconte ses deux années passées seul dans les bois, explorant les « faits essentiels de la vie ».',
        'theme' => 'Solitude choisie',
        'annee' => '1854',
        'image' => 'images/Magazine/lectures/David_Thoreau_Walden.webp'
    ],
    [
        'titre' => 'Pensées pour moi-même',
        'auteur' => 'Marc Aurèle',
        'categorie' => 'essai',
        'description' => 'Les méditations intimes de l\'empereur philosophe. Un guide vers la citadelle intérieure, ce refuge de l\'âme accessible à chacun.',
        'theme' => 'Philosophie intérieure',
        'annee' => '180',
        'image' => 'images/Magazine/lectures/Marc_Aurele_pensees_pour_soi_meme.jpg'
    ],
    [
        'titre' => 'Les Essais — De la solitude',
        'auteur' => 'Michel de Montaigne',
        'categorie' => 'essai',
        'description' => 'Montaigne défend l\'« arrière-boutique » de l\'esprit, cet espace de liberté intérieure où l\'on peut se retirer du monde.',
        'theme' => 'Liberté intérieure',
        'annee' => '1580'
    ],
    [
        'titre' => 'Seul avec les autres',
        'auteur' => 'Marie de Hennezel',
        'categorie' => 'essai',
        'description' => 'Une réflexion lumineuse sur la solitude des seniors et la beauté de vieillir seul mais relié. Un appel à transformer l\'isolement en sérénité.',
        'theme' => 'Vieillir solo',
        'annee' => '2017',
        'image' => 'images/Magazine/lectures/Dictionnaire_amoureux_de_la_solitude.jpg'
    ],
    [
        'titre' => 'L\'Art de la solitude',
        'auteur' => 'Sara Maitland',
        'categorie' => 'essai',
        'description' => 'Un guide pratique et poétique pour apprivoiser la solitude. Maitland explore pourquoi nous la craignons et comment en faire une alliée.',
        'theme' => 'Apprivoiser la solitude',
        'annee' => '2014',
        'image' => 'images/Magazine/lectures/Sara_Maitland_How_to_be_alone.png'
    ],
    // Romans
    [
        'titre' => 'Robinson Crusoé',
        'auteur' => 'Daniel Defoe',
        'categorie' => 'roman',
        'description' => 'L\'archétype du survivant solitaire. Robinson transforme sa solitude forcée en construction d\'un monde, en dialogue avec lui-même et avec Dieu.',
        'theme' => 'Résilience',
        'annee' => '1719'
    ],
    [
        'titre' => 'Into the Wild',
        'auteur' => 'Jon Krakauer',
        'categorie' => 'roman',
        'description' => 'L\'histoire vraie de Christopher McCandless, parti seul en Alaska. Une méditation sur le désir de solitude absolue et ses dangers.',
        'theme' => 'Voyage solo',
        'annee' => '1996'
    ],
    [
        'titre' => 'La Vie devant soi',
        'auteur' => 'Romain Gary',
        'categorie' => 'roman',
        'description' => 'Momo, orphelin, et Madame Rosa, vieille dame isolée, tissent un lien qui transcende leur solitude respective. Un chef-d\'œuvre de tendresse.',
        'theme' => 'Liens intergénérationnels',
        'annee' => '1975'
    ],
    [
        'titre' => 'L\'Élégance du hérisson',
        'auteur' => 'Muriel Barbery',
        'categorie' => 'roman',
        'description' => 'Renée, concierge solitaire, et Paloma, adolescente en retrait du monde, découvrent que la vraie richesse naît dans les silences partagés.',
        'theme' => 'Solitude intellectuelle',
        'annee' => '2006'
    ],
    // Développement personnel
    [
        'titre' => 'Vivre seul et heureux',
        'auteur' => 'Christophe André',
        'categorie' => 'dev-perso',
        'description' => 'Le psychiatre français explore les bienfaits de la solitude et propose des exercices pour cultiver une relation apaisée avec soi-même.',
        'theme' => 'Bien-être',
        'annee' => '2019'
    ],
    [
        'titre' => 'La Force du silence',
        'auteur' => 'Robert Sarah',
        'categorie' => 'dev-perso',
        'description' => 'Une invitation à retrouver le silence intérieur dans un monde saturé de bruit. Un chemin vers la paix de l\'âme.',
        'theme' => 'Silence intérieur',
        'annee' => '2016'
    ],
    [
        'titre' => 'Solo : Comment vivre seul',
        'auteur' => 'Lane Moore',
        'categorie' => 'dev-perso',
        'description' => 'Un guide décomplexé pour ceux qui vivent seuls — par choix ou par circonstance. Entre humour et profondeur.',
        'theme' => 'Vivre solo',
        'annee' => '2018'
    ]
];

// Données des films et documentaires
$films = [
    [
        'titre' => 'Her',
        'realisateur' => 'Spike Jonze',
        'type' => 'Film',
        'annee' => '2013',
        'description' => 'Theodore, un homme solitaire, développe une relation avec une IA. Une réflexion poétique sur la solitude moderne et le besoin de connexion.',
        'tags' => ['Solitude urbaine', 'Technologie', 'Amour']
    ],
    [
        'titre' => 'Into the Wild',
        'realisateur' => 'Sean Penn',
        'type' => 'Film',
        'annee' => '2007',
        'description' => 'Christopher McCandless abandonne tout pour vivre seul en Alaska. Un hymne à la liberté qui questionne les limites de la solitude radicale.',
        'tags' => ['Voyage solo', 'Nature', 'Quête de sens']
    ],
    [
        'titre' => 'Lost in Translation',
        'realisateur' => 'Sofia Coppola',
        'type' => 'Film',
        'annee' => '2003',
        'description' => 'Deux âmes perdues se croisent à Tokyo. Un film sur la solitude partagée, la mélancolie douce et les connexions éphémères.',
        'tags' => ['Connexion', 'Mélancolie', 'Voyage']
    ],
    [
        'titre' => 'Seul au monde',
        'realisateur' => 'Robert Zemeckis',
        'type' => 'Film',
        'annee' => '2000',
        'description' => 'Chuck survit seul sur une île déserte pendant quatre ans. Une exploration puissante de la résilience humaine face à l\'isolement total.',
        'tags' => ['Survie', 'Résilience', 'Espoir']
    ],
    [
        'titre' => 'Le Voyage de Chihiro',
        'realisateur' => 'Hayao Miyazaki',
        'type' => 'Film animé',
        'annee' => '2001',
        'description' => 'Chihiro, seule dans un monde d\'esprits, doit trouver sa voie. Un conte initiatique sur le courage de grandir et de se découvrir.',
        'tags' => ['Initiation', 'Courage', 'Identité']
    ],
    [
        'titre' => 'Wild',
        'realisateur' => 'Jean-Marc Vallée',
        'type' => 'Film',
        'annee' => '2014',
        'description' => 'Cheryl Strayed parcourt seule le Pacific Crest Trail pour guérir de ses blessures. Un voyage intérieur autant que physique.',
        'tags' => ['Voyage solo', 'Guérison', 'Femme seule']
    ],
    [
        'titre' => 'Nomadland',
        'realisateur' => 'Chloé Zhao',
        'type' => 'Film',
        'annee' => '2020',
        'description' => 'Fern, veuve, vit en van à travers l\'Amérique. Portrait poignant d\'une solitude choisie, entre deuil et liberté retrouvée.',
        'tags' => ['Deuil', 'Liberté', 'Communauté']
    ],
    [
        'titre' => 'L\'Épidémie de la solitude',
        'realisateur' => 'Arte',
        'type' => 'Documentaire',
        'annee' => '2023',
        'description' => 'Une enquête sur la crise mondiale de l\'isolement social. Statistiques alarmantes et témoignages poignants sur le mal du siècle.',
        'tags' => ['Société', 'Santé publique', 'Témoignages']
    ],
    [
        'titre' => 'Seuls ensemble',
        'realisateur' => 'France 5',
        'type' => 'Documentaire',
        'annee' => '2022',
        'description' => 'Exploration de la solitude des seniors en France. Entre isolement subi et nouvelles formes de solidarité.',
        'tags' => ['Seniors', 'Isolement', 'Solidarité']
    ]
];

// Données des podcasts
$podcasts = [
    [
        'titre' => 'Les Chemins de la philosophie',
        'animateur' => 'Adèle Van Reeth',
        'plateforme' => 'France Culture',
        'description' => 'Émission philosophique explorant régulièrement les thèmes de la solitude, du silence et de l\'intériorité. Des épisodes sur Thoreau, Montaigne, les ermites...',
        'frequence' => 'Quotidien',
        'duree' => '58 min',
        'lien' => 'https://www.radiofrance.fr/franceculture/podcasts/les-chemins-de-la-philosophie'
    ],
    [
        'titre' => 'Grand bien vous fasse',
        'animateur' => 'Ali Rebeihi',
        'plateforme' => 'France Inter',
        'description' => 'Émission de société abordant les questions de bien-être et de vie quotidienne. Plusieurs épisodes consacrés à la solitude, au célibat, au vieillissement.',
        'frequence' => 'Quotidien',
        'duree' => '52 min',
        'lien' => 'https://www.radiofrance.fr/franceinter/podcasts/grand-bien-vous-fasse'
    ],
    [
        'titre' => 'Vivons heureux avant la fin du monde',
        'animateur' => 'Delphine Saltel',
        'plateforme' => 'Arte Radio',
        'description' => 'Un podcast intime sur nos façons de vivre aujourd\'hui. Épisodes touchants sur la solitude choisie, le besoin de silence, les nouvelles formes de vie commune.',
        'frequence' => 'Bimensuel',
        'duree' => '30 min',
        'lien' => 'https://www.arteradio.com/emission/vivons_heureux_avant_la_fin_du_monde'
    ],
    [
        'titre' => 'Émotions',
        'animateur' => 'Louie Media',
        'plateforme' => 'Louie Media',
        'description' => 'Décryptage des émotions humaines avec experts et témoignages. Épisodes remarquables sur la solitude, la mélancolie, le besoin de retrait.',
        'frequence' => 'Hebdomadaire',
        'duree' => '35 min',
        'lien' => 'https://louiemedia.com/emotions'
    ],
    [
        'titre' => 'À voix nue',
        'animateur' => 'France Culture',
        'plateforme' => 'France Culture',
        'description' => 'Portraits intimes de personnalités qui se racontent. Beaucoup évoquent leur rapport à la solitude, leurs moments de retrait, leurs refuges intérieurs.',
        'frequence' => 'Quotidien',
        'duree' => '28 min',
        'lien' => 'https://www.radiofrance.fr/franceculture/podcasts/a-voix-nue'
    ],
    [
        'titre' => 'Un podcast à soi',
        'animateur' => 'Charlotte Bienaimé',
        'plateforme' => 'Arte Radio',
        'description' => 'Podcast féministe explorant l\'intime et le politique. Épisodes sensibles sur la solitude des femmes, le célibat assumé, la maternité solo.',
        'frequence' => 'Mensuel',
        'duree' => '60 min',
        'lien' => 'https://www.arteradio.com/emission/un_podcast_soi'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/lectures-decouvertes.css">
    
    <style>
        /* Reset minimal */
        *, *::before, *::after { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #FBF9F6;
            color: #2C2C2C;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
     <header class="lectures-hero">
    <a href="magazine.php" class="back-link">← Retour au magazine</a>
    <h1>Lectures & <span>Découvertes</span></h1>
        <p class="hero-subtitle">
            Une sélection d'œuvres qui éclairent la solitude sous toutes ses facettes. 
            Des livres, des films et des podcasts pour nourrir votre réflexion 
            et accompagner votre chemin.
        </p>
        <div class="hero-quote">
            « Je n'ai jamais trouvé de compagnon qui me tînt aussi bonne compagnie que la solitude. »
            <br><em>— Henry David Thoreau, Walden</em>
        </div>
    </header>

    <!-- Navigation par onglets -->
    <nav class="lectures-nav">
        <div class="lectures-nav-container">
            <button class="lectures-tab active" data-tab="livres">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
                <span>Livres</span>
            </button>
            <button class="lectures-tab" data-tab="films">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                    <line x1="7" y1="2" x2="7" y2="22"></line>
                    <line x1="17" y1="2" x2="17" y2="22"></line>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <line x1="2" y1="7" x2="7" y2="7"></line>
                    <line x1="2" y1="17" x2="7" y2="17"></line>
                    <line x1="17" y1="17" x2="22" y2="17"></line>
                    <line x1="17" y1="7" x2="22" y2="7"></line>
                </svg>
                <span>Films & Documentaires</span>
            </button>
            <button class="lectures-tab" data-tab="podcasts">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                    <line x1="12" y1="19" x2="12" y2="23"></line>
                    <line x1="8" y1="23" x2="16" y2="23"></line>
                </svg>
                <span>Podcasts</span>
            </button>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="lectures-content">
        
        <!-- Section Livres -->
        <section id="livres" class="lectures-section active">
            <div class="section-intro">
                <h2>Livres sur la solitude</h2>
                <p>
                    Des essais philosophiques aux romans contemplatifs, ces ouvrages explorent 
                    les multiples visages de la solitude — choisie ou subie, fertile ou douloureuse.
                </p>
            </div>

            <!-- Filtres par catégorie -->
            <div class="category-filter">
                <button class="category-btn active" data-category="all">Tous</button>
                <button class="category-btn" data-category="essai">Essais</button>
                <button class="category-btn" data-category="roman">Romans</button>
                <button class="category-btn" data-category="dev-perso">Développement personnel</button>
            </div>

            <div class="livres-grid">
                <?php foreach ($livres as $livre): ?>
                <article class="livre-card" data-category="<?php echo $livre['categorie']; ?>">
                    <div class="livre-cover">
                        <span class="livre-category">
                            <?php 
                            $cat_labels = [
                                'essai' => 'Essai',
                                'roman' => 'Roman',
                                'dev-perso' => 'Dev. personnel'
                            ];
                            echo $cat_labels[$livre['categorie']] ?? $livre['categorie'];
                            ?>
                        </span>
                       <div class="livre-image">
                            <?php if (!empty($livre['image'])): ?>
                                <img src="<?php echo htmlspecialchars($livre['image']); ?>" alt="<?php echo htmlspecialchars($livre['titre']); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="livre-body">
                        <h3 class="livre-title"><?php echo htmlspecialchars($livre['titre']); ?></h3>
                        <p class="livre-author"><?php echo htmlspecialchars($livre['auteur']); ?></p>
                        <p class="livre-description"><?php echo htmlspecialchars($livre['description']); ?></p>
                        <div class="livre-footer">
                            <span class="livre-theme">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                    <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                </svg>
                                <?php echo htmlspecialchars($livre['theme']); ?>
                            </span>
                            <span class="livre-theme"><?php echo htmlspecialchars($livre['annee']); ?></span>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Citation flottante -->
            <div class="floating-quote">
                <blockquote>
                    On ne peut être vraiment soi qu'aussi longtemps qu'on est seul ; 
                    qui n'aime donc pas la solitude n'aime pas la liberté, 
                    car on n'est libre qu'étant seul.
                </blockquote>
                <cite>— Arthur Schopenhauer</cite>
            </div>
        </section>

        <!-- Section Films -->
        <section id="films" class="lectures-section">
            <div class="section-intro">
                <h2>Films & Documentaires</h2>
                <p>
                    Des œuvres cinématographiques qui donnent corps à la solitude. 
                    Qu'elle soit refuge ou prison, aventure ou méditation, 
                    le cinéma lui prête mille visages.
                </p>
            </div>

            <div class="films-grid">
                <?php foreach ($films as $film): ?>
                <article class="film-card">
                    <div class="film-poster">
                        <span class="film-type"><?php echo htmlspecialchars($film['type']); ?></span>
                        <span class="film-year"><?php echo htmlspecialchars($film['annee']); ?></span>
                        <div class="play-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="film-body">
                        <h3 class="film-title"><?php echo htmlspecialchars($film['titre']); ?></h3>
                        <p class="film-director">Réalisé par <?php echo htmlspecialchars($film['realisateur']); ?></p>
                        <p class="film-description"><?php echo htmlspecialchars($film['description']); ?></p>
                        <div class="film-tags">
                            <?php foreach ($film['tags'] as $tag): ?>
                            <span class="film-tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Citation flottante -->
            <div class="floating-quote">
                <blockquote>
                    La solitude me permet de me retrouver. 
                    C'est dans les moments où je suis seul que je découvre qui je suis vraiment.
                </blockquote>
                <cite>— Film "Into the Wild"</cite>
            </div>
        </section>

        <!-- Section Podcasts -->
        <section id="podcasts" class="lectures-section">
            <div class="section-intro">
                <h2>Podcasts francophones</h2>
                <p>
                    Des voix qui accompagnent vos moments de solitude. 
                    Philosophie, témoignages, réflexions sur notre rapport à nous-mêmes 
                    et aux autres.
                </p>
            </div>

            <div class="podcasts-grid">
                <?php foreach ($podcasts as $podcast): ?>
                <article class="podcast-card">
                    <div class="podcast-artwork">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                            <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                            <line x1="12" y1="19" x2="12" y2="23"></line>
                            <line x1="8" y1="23" x2="16" y2="23"></line>
                        </svg>
                    </div>
                    <div class="podcast-info">
                        <h3 class="podcast-title"><?php echo htmlspecialchars($podcast['titre']); ?></h3>
                        <p class="podcast-host">
                            <?php echo htmlspecialchars($podcast['animateur']); ?> 
                            • <?php echo htmlspecialchars($podcast['plateforme']); ?>
                        </p>
                        <p class="podcast-description"><?php echo htmlspecialchars($podcast['description']); ?></p>
                        <div class="podcast-meta">
                            <span class="podcast-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <?php echo htmlspecialchars($podcast['duree']); ?>
                            </span>
                            <span class="podcast-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <?php echo htmlspecialchars($podcast['frequence']); ?>
                            </span>
                        </div>
                        <a href="<?php echo htmlspecialchars($podcast['lien']); ?>" 
                           class="podcast-link" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            Écouter
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Citation flottante -->
            <div class="floating-quote">
                <blockquote>
                    Écouter, c'est déjà ne plus être seul. 
                    Une voix dans l'oreille, c'est une présence dans la solitude.
                </blockquote>
                <cite>— Soloplugs</cite>
            </div>
        </section>

    </main>

    <!-- JavaScript pour les interactions -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des onglets principaux
        const tabs = document.querySelectorAll('.lectures-tab');
        const sections = document.querySelectorAll('.lectures-section');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetId = this.dataset.tab;
                
                // Mise à jour des onglets
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Mise à jour des sections
                sections.forEach(section => {
                    section.classList.remove('active');
                    if (section.id === targetId) {
                        section.classList.add('active');
                    }
                });

                // Scroll vers le haut de la section
                document.querySelector('.lectures-content').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Gestion des filtres de catégories (livres)
        const categoryBtns = document.querySelectorAll('.category-btn');
        const livreCards = document.querySelectorAll('.livre-card');

        categoryBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const category = this.dataset.category;
                
                // Mise à jour des boutons
                categoryBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Filtrage des cartes
                livreCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'flex';
                        card.style.animation = 'fadeIn 0.4s ease';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Animation au scroll pour les cartes
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observer les cartes
        document.querySelectorAll('.livre-card, .film-card, .podcast-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });
    });
    </script>
</body>
</html>
