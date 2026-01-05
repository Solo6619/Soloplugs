<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
    // Configuration de la page
    $pageTitle = 'Ressources Ado-Solo';
    $pageDescription = 'Tu traverses quelque chose de difficile? Trouve de l\'aide ici.';
    $basePath = '';
    $currentPage = 'ressources-ado';
    $additionalCSS = ['header-compact.css'];
    
    include 'components/head.php';
    
    // Charger les ressources JSON
    $jsonPath = 'data/ressources/ressources_ado_solo_quebec.json';
    $ressourcesData = [];
    if (file_exists($jsonPath)) {
        $jsonContent = file_get_contents($jsonPath);
        $ressourcesData = json_decode($jsonContent, true);
    }
    
    // Charger les MDJ par région
    $mdjPath = 'data/ressources/maisons_jeunes_quebec_regions.json';
    $mdjData = [];
    if (file_exists($mdjPath)) {
        $mdjContent = file_get_contents($mdjPath);
        $mdjData = json_decode($mdjContent, true);
    }
  ?>
  
  <style>
    /* ========================================
       ADO-SOLO RESSOURCES - COULEURS THÈME
       ======================================== */
    :root {
      --ado-primary: #E85D75;
      --ado-primary-light: #FEF0F2;
      --ado-primary-dark: #D14D65;
      --ado-text: #4A4A4A;
      --ado-text-light: #6B6B6B;
      --ado-bg: #FFFBFC;
      --ado-card: #FFFFFF;
      --ado-border: #F5E6E9;
    }
    
    body {
      background: var(--ado-bg);
    }
    
    /* ========================================
       CONTAINER PRINCIPAL
       ======================================== */
    .ado-ressources {
      max-width: 900px;
      margin: 0 auto;
      padding: 2rem 1.5rem 4rem;
    }
    
    /* ========================================
       HEADER
       ======================================== */
    .ado-header {
      text-align: center;
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: linear-gradient(135deg, var(--ado-primary) 0%, var(--ado-primary-dark) 100%);
      border-radius: 16px;
      color: white;
    }
    
    .ado-header h1 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.75rem;
      margin-bottom: 0.5rem;
    }
    
    .ado-header p {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      opacity: 0.95;
    }
    
    /* ========================================
       URGENCE BOX
       ======================================== */
    .urgence-box {
      background: #FFF5F5;
      border: 2px solid #FFD4D4;
      border-radius: 16px;
      padding: 1.5rem;
      margin-bottom: 2rem;
    }
    
    .urgence-box h2 {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      font-weight: 600;
      color: #D32F2F;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .urgence-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1rem;
    }
    
    .urgence-item {
      background: white;
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      transition: transform 0.2s ease;
    }
    
    .urgence-item:hover {
      transform: translateY(-2px);
    }
    
    .urgence-item .nom {
      font-family: 'Inter', sans-serif;
      font-weight: 600;
      font-size: 0.85rem;
      color: var(--ado-text);
      margin-bottom: 0.5rem;
    }
    
    .urgence-item .numero {
      font-family: 'Inter', sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--ado-primary);
    }
    
    .urgence-item .numero a {
      color: inherit;
      text-decoration: none;
    }
    
    .urgence-item .dispo {
      font-size: 0.75rem;
      color: var(--ado-text-light);
      margin-top: 0.25rem;
    }
    
    /* ========================================
       NAVIGATION PAR THÈME
       ======================================== */
    .themes-nav {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
      margin-bottom: 2rem;
      justify-content: center;
    }
    
    .theme-btn {
      background: white;
      border: 2px solid var(--ado-border);
      border-radius: 25px;
      padding: 0.6rem 1.2rem;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: var(--ado-text);
      cursor: pointer;
      transition: all 0.2s ease;
    }
    
    .theme-btn:hover {
      border-color: var(--ado-primary);
      color: var(--ado-primary);
    }
    
    .theme-btn.active {
      background: var(--ado-primary);
      border-color: var(--ado-primary);
      color: white;
    }
    
    /* ========================================
       SECTION THÉMATIQUE
       ======================================== */
    .theme-section {
      display: none;
      animation: fadeIn 0.3s ease;
    }
    
    .theme-section.active {
      display: block;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .theme-section h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.5rem;
      color: var(--ado-text);
      margin-bottom: 0.5rem;
    }
    
    .theme-section > p {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: var(--ado-text-light);
      margin-bottom: 1.5rem;
    }
    
    /* ========================================
       CARTE RESSOURCE
       ======================================== */
    .ressource-card {
      background: white;
      border: 1px solid var(--ado-border);
      border-radius: 16px;
      padding: 1.25rem;
      margin-bottom: 1rem;
      transition: all 0.2s ease;
    }
    
    .ressource-card:hover {
      box-shadow: 0 4px 20px rgba(232, 93, 117, 0.1);
      border-color: var(--ado-primary-light);
    }
    
    .ressource-card h3 {
      font-family: 'Inter', sans-serif;
      font-size: 1.05rem;
      font-weight: 600;
      color: var(--ado-text);
      margin-bottom: 0.5rem;
    }
    
    .ressource-card .description {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: var(--ado-text-light);
      margin-bottom: 1rem;
      line-height: 1.5;
    }
    
    .ressource-contacts {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
    }
    
    .contact-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 0.4rem 0.8rem;
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.8rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.2s ease;
    }
    
    .contact-badge.texto {
      background: #E8F5E9;
      color: #2E7D32;
    }
    
    .contact-badge.chat {
      background: #E3F2FD;
      color: #1565C0;
    }
    
    .contact-badge.tel {
      background: #FFF3E0;
      color: #E65100;
    }
    
    .contact-badge.web {
      background: #F3E5F5;
      color: #7B1FA2;
    }
    
    .contact-badge:hover {
      transform: translateY(-2px);
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    /* Tags */
    .ressource-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.4rem;
      margin-top: 0.75rem;
    }
    
    .tag {
      background: var(--ado-primary-light);
      color: var(--ado-primary-dark);
      padding: 0.25rem 0.6rem;
      border-radius: 12px;
      font-size: 0.7rem;
      font-weight: 500;
    }
    
    .tag.gratuit {
      background: #E8F5E9;
      color: #2E7D32;
    }
    
    .tag.confidentiel {
      background: #E3F2FD;
      color: #1565C0;
    }
    
    /* ========================================
       MESSAGE DE SOUTIEN
       ======================================== */
    .message-soutien {
      background: var(--ado-primary-light);
      border-radius: 16px;
      padding: 1.5rem;
      margin-top: 1.5rem;
      text-align: center;
    }
    
    .message-soutien p {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.1rem;
      color: var(--ado-primary-dark);
      font-style: italic;
    }
    
    /* ========================================
       SECTION MAISONS DES JEUNES
       ======================================== */
    .mdj-section {
      background: white;
      border: 2px solid var(--ado-border);
      border-radius: 16px;
      padding: 1.5rem;
      margin-top: 2.5rem;
    }
    
    .mdj-section h2 {
      font-family: 'Lora', Georgia, serif;
      font-size: 1.4rem;
      color: var(--ado-text);
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .mdj-section > p {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: var(--ado-text-light);
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }
    
    /* Dropdown régions */
    .mdj-search {
      margin-bottom: 1.5rem;
    }
    
    .mdj-search label {
      display: block;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--ado-text);
      margin-bottom: 0.5rem;
    }
    
    .mdj-search select {
      width: 100%;
      max-width: 400px;
      padding: 0.75rem 1rem;
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      border: 2px solid var(--ado-border);
      border-radius: 12px;
      background: white;
      color: var(--ado-text);
      cursor: pointer;
      transition: all 0.2s ease;
    }
    
    .mdj-search select:focus {
      outline: none;
      border-color: var(--ado-primary);
    }
    
    /* Résultat MDJ */
    .mdj-result {
      display: none;
      animation: fadeIn 0.3s ease;
    }
    
    .mdj-result.active {
      display: block;
    }
    
    .mdj-result-card {
      background: var(--ado-primary-light);
      border-radius: 12px;
      padding: 1.25rem;
      margin-bottom: 1rem;
    }
    
    .mdj-result-card h3 {
      font-family: 'Inter', sans-serif;
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--ado-primary-dark);
      margin-bottom: 0.75rem;
    }
    
    .mdj-result-card .villes {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: var(--ado-text);
      margin-bottom: 1rem;
    }
    
    .mdj-result-card .exemples {
      margin-bottom: 1rem;
    }
    
    .mdj-result-card .exemples strong {
      font-size: 0.85rem;
      color: var(--ado-text-light);
    }
    
    .mdj-result-card .exemples ul {
      margin: 0.5rem 0 0;
      padding-left: 1.25rem;
    }
    
    .mdj-result-card .exemples li {
      font-size: 0.9rem;
      color: var(--ado-text);
      margin-bottom: 0.25rem;
    }
    
    .mdj-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--ado-primary);
      color: white;
      padding: 0.75rem 1.25rem;
      border-radius: 25px;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.2s ease;
    }
    
    .mdj-link:hover {
      background: var(--ado-primary-dark);
      transform: translateY(-2px);
    }
    
    /* Info MDJ */
    .mdj-info {
      background: #F8F9FA;
      border-radius: 12px;
      padding: 1.25rem;
      margin-top: 1.5rem;
    }
    
    .mdj-info h4 {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--ado-text);
      margin-bottom: 0.75rem;
    }
    
    .mdj-info ul {
      margin: 0;
      padding-left: 1.25rem;
    }
    
    .mdj-info li {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: var(--ado-text-light);
      margin-bottom: 0.4rem;
      line-height: 1.5;
    }
    
    .mdj-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-top: 1rem;
    }
    
    /* ========================================
       RESPONSIVE
       ======================================== */
    @media (max-width: 600px) {
      .ado-header h1 {
        font-size: 1.5rem;
      }
      
      .themes-nav {
        justify-content: flex-start;
        overflow-x: auto;
        flex-wrap: nowrap;
        padding-bottom: 0.5rem;
        -webkit-overflow-scrolling: touch;
      }
      
      .theme-btn {
        flex-shrink: 0;
      }
      
      .urgence-grid {
        grid-template-columns: 1fr 1fr;
      }
      
      .mdj-search select {
        max-width: 100%;
      }
    }
  </style>
</head>

<body class="has-compact-header">
  <?php include 'components/header-compact.php'; ?>

  <main class="ado-ressources">
    
    <!-- Header -->
    <div class="ado-header">
      <h1>Tu n'es pas seul·e</h1>
      <p>On est là pour t'écouter, sans te juger. Gratuit et confidentiel.</p>
    </div>
    
    <!-- Urgence -->
    <?php if (!empty($ressourcesData['ressources_urgence']['liste'])): ?>
    <div class="urgence-box">
      <h2>🆘 Besoin d'aide maintenant?</h2>
      <div class="urgence-grid">
        <?php 
        $urgences = array_slice($ressourcesData['ressources_urgence']['liste'], 0, 4);
        foreach ($urgences as $urgence): 
        ?>
        <div class="urgence-item">
          <div class="nom"><?= htmlspecialchars($urgence['nom']) ?></div>
          <div class="numero">
            <?php if (!empty($urgence['telephone'])): ?>
              <a href="tel:<?= preg_replace('/[^0-9]/', '', $urgence['telephone']) ?>">
                <?= htmlspecialchars($urgence['telephone']) ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="dispo">
            <?php 
            $dispo = $urgence['disponibilite'] ?? '24/7';
            if (is_array($dispo)) {
              echo htmlspecialchars(implode(' | ', array_values($dispo)));
            } else {
              echo htmlspecialchars($dispo);
            }
            ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
    
    <!-- Navigation par thème -->
    <div class="themes-nav">
      <?php
      $themes = [
        'harcelement_intimidation' => '😔 Intimidation',
        'reseaux_sociaux_ecrans' => '📱 Écrans',
        'famille_separation' => '👨‍👩‍👧 Famille',
        'sexualite_identite_lgbtq' => '🏳️‍🌈 LGBTQ+',
        'deuil' => '💔 Deuil',
        'sante_mentale_anxiete' => '🧠 Anxiété',
        'personne_a_qui_parler' => '💬 Parler',
        'a_lecole' => '🎒 École',
        'violence_abus' => '🛡️ Violence'
      ];
      
      $first = true;
      foreach ($themes as $key => $label):
      ?>
      <button class="theme-btn <?= $first ? 'active' : '' ?>" onclick="afficherTheme('<?= $key ?>')">
        <?= $label ?>
      </button>
      <?php 
        $first = false;
      endforeach; 
      ?>
    </div>
    
    <!-- Sections thématiques -->
    <?php
    $first = true;
    foreach ($themes as $key => $label):
      $section = $ressourcesData['sections_thematiques'][$key] ?? null;
      if (!$section) continue;
    ?>
    <div class="theme-section <?= $first ? 'active' : '' ?>" id="theme-<?= $key ?>">
      <h2><?= htmlspecialchars($section['titre']) ?></h2>
      <p><?= htmlspecialchars($section['description']) ?></p>
      
      <?php if (!empty($section['ressources'])): ?>
        <?php foreach ($section['ressources'] as $ressource): ?>
        <div class="ressource-card">
          <h3><?= htmlspecialchars($ressource['nom']) ?></h3>
          
          <?php if (!empty($ressource['description'])): ?>
          <p class="description"><?= htmlspecialchars($ressource['description']) ?></p>
          <?php endif; ?>
          
          <div class="ressource-contacts">
            <?php if (!empty($ressource['texto'])): ?>
            <a href="sms:<?= preg_replace('/[^0-9]/', '', $ressource['texto']) ?>" class="contact-badge texto">
              💬 Texto: <?= htmlspecialchars($ressource['texto']) ?>
            </a>
            <?php endif; ?>
            
            <?php if (!empty($ressource['clavardage'])): ?>
            <a href="<?= htmlspecialchars($ressource['clavardage']) ?>" target="_blank" class="contact-badge chat">
              💻 Clavardage
            </a>
            <?php endif; ?>
            
            <?php if (!empty($ressource['telephone'])): ?>
            <a href="tel:<?= preg_replace('/[^0-9]/', '', $ressource['telephone']) ?>" class="contact-badge tel">
              📞 <?= htmlspecialchars($ressource['telephone']) ?>
            </a>
            <?php endif; ?>
            
            <?php if (!empty($ressource['url'])): ?>
            <a href="<?= htmlspecialchars($ressource['url']) ?>" target="_blank" class="contact-badge web">
              🌐 Site web
            </a>
            <?php endif; ?>
          </div>
          
          <div class="ressource-tags">
            <?php if (!empty($ressource['gratuit']) && $ressource['gratuit']): ?>
            <span class="tag gratuit">Gratuit</span>
            <?php endif; ?>
            
            <?php if (!empty($ressource['confidentiel']) && $ressource['confidentiel']): ?>
            <span class="tag confidentiel">Confidentiel</span>
            <?php endif; ?>
            
            <?php if (!empty($ressource['age'])): ?>
            <span class="tag"><?= htmlspecialchars($ressource['age']) ?></span>
            <?php endif; ?>
            
            <?php if (!empty($ressource['disponibilite']) && is_string($ressource['disponibilite'])): ?>
            <span class="tag"><?= htmlspecialchars($ressource['disponibilite']) ?></span>
            <?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>
      <?php endif; ?>
      
      <?php if (!empty($section['messages_cles']) || !empty($section['message'])): ?>
      <div class="message-soutien">
        <p>
          <?php 
          if (!empty($section['message'])) {
            echo htmlspecialchars($section['message']);
          } elseif (!empty($section['messages_cles'])) {
            echo htmlspecialchars($section['messages_cles'][0]);
          }
          ?>
        </p>
      </div>
      <?php endif; ?>
    </div>
    <?php 
      $first = false;
    endforeach; 
    ?>
    
    <!-- ========================================
         SECTION MAISONS DES JEUNES
         ======================================== -->
    <?php if (!empty($mdjData['regions'])): ?>
    <div class="mdj-section">
      <h2>🏠 Maisons des jeunes</h2>
      <p>
        Un endroit safe pour toi, près de chez toi. Les MDJ sont des lieux gratuits où tu peux 
        rencontrer d'autres jeunes, participer à des activités et parler à des adultes de confiance.
      </p>
      
      <div class="mdj-search">
        <label for="mdj-region">Trouve une MDJ dans ta région :</label>
        <select id="mdj-region" onchange="afficherMDJ(this.value)">
          <option value="">-- Choisis ta région --</option>
          <?php foreach ($mdjData['regions'] as $key => $region): ?>
          <option value="<?= htmlspecialchars($key) ?>">
            <?= htmlspecialchars($region['nom_region']) ?>
          </option>
          <?php endforeach; ?>
        </select>
      </div>
      
      <!-- Résultats MDJ -->
      <div id="mdj-results">
        <?php foreach ($mdjData['regions'] as $key => $region): ?>
        <div class="mdj-result" id="mdj-<?= htmlspecialchars($key) ?>">
          <div class="mdj-result-card">
            <h3>📍 <?= htmlspecialchars($region['nom_region']) ?></h3>
            
            <?php if (!empty($region['villes_principales'])): ?>
            <div class="villes">
              <strong>Villes couvertes :</strong> 
              <?= htmlspecialchars(implode(', ', array_slice($region['villes_principales'], 0, 6))) ?>
              <?= count($region['villes_principales']) > 6 ? '...' : '' ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($region['exemples_mdj'])): ?>
            <div class="exemples">
              <strong>Exemples de MDJ :</strong>
              <ul>
                <?php foreach (array_slice($region['exemples_mdj'], 0, 3) as $mdj): ?>
                <li><?= htmlspecialchars($mdj['nom']) ?> (<?= htmlspecialchars($mdj['ville']) ?>)</li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($region['lien_recherche'])): ?>
            <a href="<?= htmlspecialchars($region['lien_recherche']) ?>" target="_blank" class="mdj-link">
              🔍 Trouver une MDJ dans <?= htmlspecialchars($region['nom_region']) ?>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M7 17L17 7M17 7H7M17 7V17"/>
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      
      <!-- Info générale MDJ -->
      <div class="mdj-info">
        <h4>C'est quoi une maison des jeunes?</h4>
        <ul>
          <li>Un lieu d'appartenance où tu peux être toi-même</li>
          <li>Des activités le fun (jeux, sports, arts, cuisine...)</li>
          <li>Des adultes de confiance qui t'écoutent sans juger</li>
          <li>De l'aide aux devoirs si t'en as besoin</li>
          <li>Un endroit safe après l'école</li>
        </ul>
        <div class="mdj-tags">
          <span class="tag gratuit">Gratuit</span>
          <span class="tag confidentiel">Confidentiel</span>
          <span class="tag">12-17 ans</span>
          <span class="tag">Sans rendez-vous</span>
        </div>
      </div>
      
      <!-- Accès rapide -->
      <div style="margin-top: 1.5rem; text-align: center;">
        <a href="https://rmjq.org/liste-des-maisons-de-jeunes/" target="_blank" class="mdj-link">
          🗺️ Voir toutes les MDJ du Québec
        </a>
      </div>
    </div>
    <?php endif; ?>

  </main>

  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>

  <script>
    // Navigation par thème
    function afficherTheme(themeId) {
      // Masquer toutes les sections
      document.querySelectorAll('.theme-section').forEach(section => {
        section.classList.remove('active');
      });
      
      // Désactiver tous les boutons
      document.querySelectorAll('.theme-btn').forEach(btn => {
        btn.classList.remove('active');
      });
      
      // Afficher la section sélectionnée
      const section = document.getElementById('theme-' + themeId);
      if (section) {
        section.classList.add('active');
      }
      
      // Activer le bouton correspondant
      event.target.classList.add('active');
      
      // Scroll vers le haut de la section (mobile)
      if (window.innerWidth < 600) {
        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
    
    // Afficher MDJ par région
    function afficherMDJ(regionKey) {
      // Masquer tous les résultats
      document.querySelectorAll('.mdj-result').forEach(result => {
        result.classList.remove('active');
      });
      
      // Afficher le résultat sélectionné
      if (regionKey) {
        const result = document.getElementById('mdj-' + regionKey);
        if (result) {
          result.classList.add('active');
          
          // Scroll vers le résultat
          result.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
      }
    }
  </script>
</body>
</html>
