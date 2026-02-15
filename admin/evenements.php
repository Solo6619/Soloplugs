<?php
/**
 * SOLOPLUGS — Page Admin — Événements soumis
 * 
 * Page protégée pour voir et gérer les événements soumis.
 * À placer dans un dossier /admin/ de ton site.
 * 
 * URL: https://tonsite.com/admin/evenements.php
 */

// ═══════════════════════════════════════════════════════════
// CONFIGURATION — MODIFIE CES VALEURS
// ═══════════════════════════════════════════════════════════
$mot_de_passe = 'solo130358';  // ← CHANGE CE MOT DE PASSE
$fichier_evenements = '../evenements-soumis.json';
// ═══════════════════════════════════════════════════════════

session_start();

// Gestion de la connexion
$erreur = '';
$connecte = isset($_SESSION['admin_connecte']) && $_SESSION['admin_connecte'] === true;

if (isset($_POST['mot_de_passe'])) {
    if ($_POST['mot_de_passe'] === $mot_de_passe) {
        $_SESSION['admin_connecte'] = true;
        $connecte = true;
    } else {
        $erreur = 'Mot de passe incorrect';
    }
}

if (isset($_GET['deconnexion'])) {
    session_destroy();
    header('Location: evenements.php');
    exit;
}

// Charger les événements
$evenements = [];
if (file_exists($fichier_evenements)) {
    $contenu = file_get_contents($fichier_evenements);
    $evenements = json_decode($contenu, true) ?? [];
}

// Inverser pour avoir les plus récents en premier
$evenements = array_reverse($evenements);

// Statistiques
$total = count($evenements);
$en_attente = count(array_filter($evenements, fn($e) => ($e['statut'] ?? 'en_attente') === 'en_attente'));
$approuves = count(array_filter($evenements, fn($e) => ($e['statut'] ?? '') === 'approuve'));

// Mapping des types et pays
$pays_noms = [
    'quebec' => '🇨🇦 Québec',
    'france' => '🇫🇷 France',
    'belgique' => '🇧🇪 Belgique',
    'suisse' => '🇨🇭 Suisse',
    'autre' => '🌍 Autre'
];

$type_noms = [
    'sortie-culturelle' => '🎭 Culturelle',
    'sortie-resto' => '☕ Resto/Café',
    'sport-plein-air' => '🚴 Sport/Plein air',
    'atelier' => '🎨 Atelier',
    'cafe-rencontre' => '💬 Café-rencontre',
    'voyage' => '✈️ Voyage',
    'autre' => '📌 Autre'
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin — Événements | Soloplugs</title>
  <meta name="robots" content="noindex, nofollow">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, sans-serif;
      background: #f5f5f7;
      color: #1d1d1f;
      line-height: 1.6;
      min-height: 100vh;
    }

    /* Login */
    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .login-box {
      background: white;
      padding: 3rem;
      border-radius: 20px;
      box-shadow: 0 4px 30px rgba(0,0,0,0.08);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-logo {
      font-size: 2rem;
      font-weight: 700;
      color: #D4A574;
      margin-bottom: 0.5rem;
    }

    .login-subtitle {
      color: #86868b;
      margin-bottom: 2rem;
    }

    .login-box input {
      width: 100%;
      padding: 1rem;
      border: 2px solid #e5e5e5;
      border-radius: 12px;
      font-size: 1rem;
      margin-bottom: 1rem;
      transition: border-color 0.2s;
    }

    .login-box input:focus {
      outline: none;
      border-color: #D4A574;
    }

    .login-box button {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(135deg, #D4A574, #C4956A);
      border: none;
      border-radius: 12px;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .login-box button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(212,165,116,0.4);
    }

    .login-error {
      background: #fee;
      color: #c00;
      padding: 0.75rem;
      border-radius: 8px;
      margin-bottom: 1rem;
      font-size: 0.9rem;
    }

    /* Header admin */
    .admin-header {
      background: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .admin-logo {
      font-size: 1.3rem;
      font-weight: 700;
      color: #D4A574;
    }

    .admin-logo span {
      color: #86868b;
      font-weight: 400;
    }

    .btn-deconnexion {
      padding: 0.5rem 1rem;
      background: #f5f5f7;
      border: 1px solid #e5e5e5;
      border-radius: 8px;
      color: #86868b;
      text-decoration: none;
      font-size: 0.85rem;
      transition: all 0.2s;
    }

    .btn-deconnexion:hover {
      background: #fee;
      border-color: #fcc;
      color: #c00;
    }

    /* Stats */
    .stats-bar {
      display: flex;
      gap: 1rem;
      padding: 1.5rem 2rem;
      background: white;
      margin: 1.5rem 2rem;
      border-radius: 16px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    }

    .stat-item {
      flex: 1;
      text-align: center;
      padding: 1rem;
      border-radius: 12px;
      background: #f9f9fb;
    }

    .stat-item.attente { background: #fff8e6; }
    .stat-item.approuve { background: #e6f7ed; }

    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      color: #1d1d1f;
    }

    .stat-item.attente .stat-number { color: #f5a623; }
    .stat-item.approuve .stat-number { color: #34c759; }

    .stat-label {
      font-size: 0.85rem;
      color: #86868b;
      margin-top: 0.25rem;
    }

    /* Liste événements */
    .events-container {
      padding: 0 2rem 3rem;
    }

    .events-title {
      font-size: 1.1rem;
      color: #86868b;
      margin-bottom: 1rem;
      padding-left: 0.5rem;
    }

    .event-card {
      background: white;
      border-radius: 16px;
      padding: 1.5rem;
      margin-bottom: 1rem;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
      border-left: 4px solid #D4A574;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .event-card:hover {
      transform: translateX(4px);
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    .event-card.attente { border-left-color: #f5a623; }
    .event-card.approuve { border-left-color: #34c759; }

    .event-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 1rem;
    }

    .event-titre {
      font-size: 1.2rem;
      font-weight: 600;
      color: #1d1d1f;
    }

    .event-badges {
      display: flex;
      gap: 0.5rem;
    }

    .badge {
      padding: 0.3rem 0.7rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 500;
    }

    .badge-type {
      background: #f0f0f5;
      color: #666;
    }

    .badge-pays {
      background: #e8f4ff;
      color: #0066cc;
    }

    .badge-statut {
      background: #fff8e6;
      color: #f5a623;
    }

    .badge-statut.approuve {
      background: #e6f7ed;
      color: #34c759;
    }

    .event-meta {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-bottom: 1rem;
      padding: 1rem;
      background: #f9f9fb;
      border-radius: 10px;
    }

    .meta-item {
      display: flex;
      flex-direction: column;
    }

    .meta-label {
      font-size: 0.75rem;
      color: #86868b;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 0.25rem;
    }

    .meta-value {
      font-size: 0.95rem;
      color: #1d1d1f;
    }

    .event-description {
      padding: 1rem;
      background: #fafafa;
      border-radius: 10px;
      margin-bottom: 1rem;
      font-size: 0.95rem;
      color: #444;
      line-height: 1.7;
      white-space: pre-wrap;
    }

    .event-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 1rem;
      border-top: 1px solid #f0f0f0;
    }

    .event-date-soumission {
      font-size: 0.8rem;
      color: #86868b;
    }

    .event-contact a {
      color: #D4A574;
      text-decoration: none;
      font-weight: 500;
    }

    .event-contact a:hover {
      text-decoration: underline;
    }

    /* Abonnement badge */
    .badge-abonne {
      background: #f0e6ff;
      color: #8833ff;
    }

    /* Empty state */
    .empty-state {
      text-align: center;
      padding: 4rem 2rem;
      color: #86868b;
    }

    .empty-state-icon {
      font-size: 4rem;
      margin-bottom: 1rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .stats-bar {
        flex-direction: column;
        margin: 1rem;
        padding: 1rem;
      }

      .events-container {
        padding: 0 1rem 2rem;
      }

      .event-meta {
        grid-template-columns: 1fr;
      }

      .admin-header {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>

<?php if (!$connecte): ?>
  <!-- ============================================================
       PAGE DE CONNEXION
       ============================================================ -->
  <div class="login-container">
    <div class="login-box">
      <div class="login-logo">Soloplugs</div>
      <p class="login-subtitle">Administration des événements</p>
      
      <?php if ($erreur): ?>
        <div class="login-error"><?= $erreur ?></div>
      <?php endif; ?>
      
      <form method="POST">
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" autofocus required>
        <button type="submit">Connexion</button>
      </form>
    </div>
  </div>

<?php else: ?>
  <!-- ============================================================
       PAGE ADMIN
       ============================================================ -->
  
  <!-- Header -->
  <header class="admin-header">
    <div class="admin-logo">Soloplugs <span>/ Admin</span></div>
    <a href="?deconnexion=1" class="btn-deconnexion">Déconnexion</a>
  </header>

  <!-- Stats -->
  <div class="stats-bar">
    <div class="stat-item">
      <div class="stat-number"><?= $total ?></div>
      <div class="stat-label">Total soumis</div>
    </div>
    <div class="stat-item attente">
      <div class="stat-number"><?= $en_attente ?></div>
      <div class="stat-label">En attente</div>
    </div>
    <div class="stat-item approuve">
      <div class="stat-number"><?= $approuves ?></div>
      <div class="stat-label">Approuvés</div>
    </div>
  </div>

  <!-- Liste des événements -->
  <div class="events-container">
    <h2 class="events-title">📅 Événements soumis (<?= $total ?>)</h2>

    <?php if (empty($evenements)): ?>
      <div class="empty-state">
        <div class="empty-state-icon">📭</div>
        <p>Aucun événement soumis pour le moment.</p>
      </div>
    <?php else: ?>
      
      <?php foreach ($evenements as $evt): ?>
        <?php 
          $statut = $evt['statut'] ?? 'en_attente';
          $pays_label = $pays_noms[$evt['pays']] ?? $evt['pays'];
          $type_label = $type_noms[$evt['type']] ?? $evt['type'];
        ?>
        <div class="event-card <?= $statut ?>">
          
          <div class="event-header">
            <h3 class="event-titre"><?= htmlspecialchars($evt['titre']) ?></h3>
            <div class="event-badges">
              <span class="badge badge-pays"><?= $pays_label ?></span>
              <span class="badge badge-type"><?= $type_label ?></span>
              <span class="badge badge-statut <?= $statut ?>">
                <?= $statut === 'approuve' ? '✓ Approuvé' : '⏳ En attente' ?>
              </span>
              <?php if (!empty($evt['abonnement']) && $evt['abonnement']): ?>
                <span class="badge badge-abonne">📬 Veut s'abonner</span>
              <?php endif; ?>
            </div>
          </div>

          <div class="event-meta">
            <div class="meta-item">
              <span class="meta-label">📍 Région</span>
              <span class="meta-value"><?= htmlspecialchars($evt['region']) ?></span>
            </div>
            <div class="meta-item">
              <span class="meta-label">📆 Date</span>
              <span class="meta-value"><?= htmlspecialchars($evt['date_evenement']) ?> <?= $evt['heure'] ? '@ ' . $evt['heure'] : '' ?></span>
            </div>
            <div class="meta-item">
              <span class="meta-label">📌 Lieu</span>
              <span class="meta-value"><?= htmlspecialchars($evt['lieu'] ?? 'Non spécifié') ?></span>
            </div>
            <div class="meta-item">
              <span class="meta-label">👤 Organisateur</span>
              <span class="meta-value"><?= htmlspecialchars($evt['organisateur']) ?></span>
            </div>
          </div>

          <div class="event-description"><?= htmlspecialchars($evt['description']) ?></div>

          <div class="event-footer">
            <span class="event-date-soumission">
              Soumis le <?= date('j M Y à H:i', strtotime($evt['date_soumission'])) ?>
            </span>
            <span class="event-contact">
              Contact: <a href="mailto:<?= htmlspecialchars($evt['contact']) ?>"><?= htmlspecialchars($evt['contact']) ?></a>
              <?php if (!empty($evt['lien'])): ?>
                — <a href="<?= htmlspecialchars($evt['lien']) ?>" target="_blank">Lien inscription ↗</a>
              <?php endif; ?>
            </span>
          </div>

        </div>
      <?php endforeach; ?>
      
    <?php endif; ?>
  </div>

<?php endif; ?>

</body>
</html>
