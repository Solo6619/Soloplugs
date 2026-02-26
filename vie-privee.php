<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vie privée — Soloplugs</title>
    <meta name="description" content="Politique de confidentialité de Soloplugs. Ce site ne dépose aucun cookie et ne collecte aucune donnée personnelle.">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/components.css">
    <style>
        .privacy-content {
            max-width: 780px;
            margin: 0 auto;
            padding: 2rem 1.5rem 4rem;
        }
        .privacy-content h1 {
            font-family: 'Playfair Display', 'Lora', serif;
            font-size: 2.4rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        .privacy-content h1 + p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }
        .privacy-content h2 {
            font-family: 'Lora', serif;
            font-size: 1.35rem;
            font-weight: 600;
            color: var(--accent-brown);
            margin-top: 2.2rem;
            margin-bottom: 0.8rem;
        }
        .privacy-content p {
            font-family: 'Lora', serif;
            font-size: 1.05rem;
            line-height: 1.85;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }
        .privacy-content .date-update {
            margin-top: 3rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-style: italic;
        }
    </style>
</head>
<body>

<?php include 'components/header.php'; ?>

<main class="privacy-content">
    <h1>Vie privée</h1>

    <p>SOLOPLUGS est un espace de réflexion intime. Un planétarium intérieur où chacun explore son propre univers invisible. Cette philosophie guide naturellement notre approche de votre vie privée.</p>
    <h2>Aucun cookie, aucune donnée collectée</h2>

    <p>Ce site ne dépose aucun cookie sur votre appareil. Nous ne collectons, ne stockons et ne transmettons aucune donnée personnelle à des tiers. Aucun tracker, aucun système d'analyse comportementale, aucun profilage publicitaire.</p>
    <p>Lorsque vous consultez SOLOPLUGS, votre navigation reste entièrement confidentielle. Nous ne savons pas qui vous êtes, d'où vous venez, ni quelles pages vous lisez. Et c'est exactement comme nous le souhaitons.</p>
    <h2>Pourquoi cette approche ?</h2>

    <p>Parce que la solitude, qu'elle soit choisie ou subie, mérite le respect absolu de l'intimité. Votre réflexion personnelle, vos questionnements, vos moments de vulnérabilité ne regardent que vous. SOLOPLUGS est une bibliothèque où vous pouvez explorer librement, sans surveillance, sans traces.</p>
    <p>Les polices de caractères sont hébergées directement sur nos serveurs. Les quelques vidéos YouTube intégrées utilisent le mode « sans cookies » de YouTube, qui limite drastiquement la collecte de données.</p>
    <h2>Session administrateur</h2>

    <p>La seule exception concerne notre interface administrative interne, invisible pour les visiteurs, qui utilise une session PHP pour gérer le calendrier des événements. Cette session n'affecte en rien votre navigation publique.</p>
    <h2>Engagement</h2>

    <p>SOLOPLUGS s'engage à maintenir cette approche minimaliste. Si nous devions modifier notre politique de confidentialité, cette page serait mise à jour pour refléter tout changement, dans la transparence et le respect que vous méritez.</p>
    <p class="date-update">Dernière mise à jour : février 2025</p>
</main>

<?php $basePath = ''; include 'components/footer.php'; ?>
</body>
</html>
