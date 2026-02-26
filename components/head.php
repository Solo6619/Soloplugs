<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle ?? 'Soloplugs'; ?> — La voix de la solitude</title>
<meta name="description" content="<?php echo $pageDescription ?? 'Soloplugs accompagne les personnes dans leurs différentes expériences de solitude.'; ?>">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?php echo $basePath ?? ''; ?>images/favicon.ico">

<!-- Typographies locales (self-hosted, zero cookies) -->
<link rel="stylesheet" href="<?php echo $basePath ?? ''; ?>css/fonts.css">

<!-- CSS Global (header, footer, variables) -->
<link rel="stylesheet" href="<?php echo $basePath ?? ''; ?>css/global.css">

<!-- CSS supplémentaires spécifiques à la page -->
<?php if (!empty($additionalCSS) && is_array($additionalCSS)): ?>
  <?php foreach ($additionalCSS as $css): ?>
<link rel="stylesheet" href="<?php echo $basePath ?? ''; ?>css/<?php echo $css; ?>">
  <?php endforeach; ?>
<?php endif; ?>
