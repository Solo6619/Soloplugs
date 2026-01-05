<?php
/**
 * SOLOPLUGS - Envoi des témoignages par email
 * Les témoignages sont envoyés à soloplugs@hotmail.com pour modération
 */

// Configuration
$destinataire = 'soloplugs@hotmail.com';
$sujet_prefix = '[SOLOPLUGS Témoignage]';

// Vérifier que le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Récupérer et nettoyer les données
$prenom = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$commentaire = htmlspecialchars(trim($_POST['comment'] ?? ''));
$hobby = htmlspecialchars(trim($_POST['hobby'] ?? 'Non spécifié'));
$page_origine = htmlspecialchars(trim($_POST['page_url'] ?? ''));

// Validation simple
$erreurs = [];

if (empty($prenom)) {
    $erreurs[] = 'Le prénom est requis.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = 'Une adresse email valide est requise.';
}

if (empty($commentaire)) {
    $erreurs[] = 'Le commentaire est requis.';
}

if (strlen($commentaire) < 20) {
    $erreurs[] = 'Le commentaire doit contenir au moins 20 caractères.';
}

// Protection anti-spam simple (honeypot)
if (!empty($_POST['website'])) {
    // Champ honeypot rempli = probablement un bot
    header('Location: ' . $page_origine . '?status=success');
    exit;
}

// Si erreurs, rediriger avec message
if (!empty($erreurs)) {
    $error_msg = urlencode(implode(' ', $erreurs));
    header('Location: ' . $page_origine . '?status=error&msg=' . $error_msg);
    exit;
}

// Construire le message email
$sujet = $sujet_prefix . ' ' . $hobby . ' - ' . $prenom;

$message = "
══════════════════════════════════════════════════
   NOUVEAU TÉMOIGNAGE SOLOPLUGS
══════════════════════════════════════════════════

HOBBY : $hobby

AUTEUR : $prenom
EMAIL : $email<?php
/**
 * SOLOPLUGS - Envoi des témoignages par email
 * Les témoignages sont envoyés à soloplugs@hotmail.com pour modération
 */

// Configuration
$destinataire = 'soloplugs@hotmail.com';
$sujet_prefix = '[SOLOPLUGS Témoignage]';

// Vérifier que le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Récupérer et nettoyer les données
$prenom = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$commentaire = htmlspecialchars(trim($_POST['comment'] ?? ''));
$hobby = htmlspecialchars(trim($_POST['hobby'] ?? 'Non spécifié'));
$page_origine = htmlspecialchars(trim($_POST['page_url'] ?? ''));

// Validation simple
$erreurs = [];

if (empty($prenom)) {
    $erreurs[] = 'Le prénom est requis.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = 'Une adresse email valide est requise.';
}

if (empty($commentaire)) {
    $erreurs[] = 'Le commentaire est requis.';
}

if (strlen($commentaire) < 20) {
    $erreurs[] = 'Le commentaire doit contenir au moins 20 caractères.';
}

// Protection anti-spam simple (honeypot)
if (!empty($_POST['website'])) {
    // Champ honeypot rempli = probablement un bot
    header('Location: ' . $page_origine . '?status=success');
    exit;
}

// Si erreurs, rediriger avec message
if (!empty($erreurs)) {
    $error_msg = urlencode(implode(' ', $erreurs));
    header('Location: ' . $page_origine . '?status=error&msg=' . $error_msg);
    exit;
}

// Construire le message email
$sujet = $sujet_prefix . ' ' . $hobby . ' - ' . $prenom;

$message = "
══════════════════════════════════════════════════
   NOUVEAU TÉMOIGNAGE SOLOPLUGS
══════════════════════════════════════════════════

HOBBY : $hobby

AUTEUR : $prenom
EMAIL : $email

──────────────────────────────────────────────────
TÉMOIGNAGE :
──────────────────────────────────────────────────

$commentaire

──────────────────────────────────────────────────

Page d'origine : $page_origine
Date : " . date('d/m/Y à H:i') . "

══════════════════════════════════════════════════
Pour publier ce témoignage, copiez-le dans la 
section commentaires de la page $hobby.
══════════════════════════════════════════════════
";

// En-têtes email - Compatible HostPapa
$headers = "From: soloplugs@hotmail.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envoyer l'email
$envoi_reussi = mail($destinataire, $sujet, $message, $headers);

// Rediriger avec statut
if ($envoi_reussi) {
    header('Location: ' . $page_origine . '?status=success');
} else {
    header('Location: ' . $page_origine . '?status=error&msg=' . urlencode('Erreur lors de l\'envoi. Veuillez réessayer.'));
}
exit;
?><?php
/**
 * SOLOPLUGS - Envoi des témoignages par email
 * Les témoignages sont envoyés à soloplugs@hotmail.com pour modération
 */

// Configuration
$destinataire = 'soloplugs@hotmail.com';
$sujet_prefix = '[SOLOPLUGS Témoignage]';

// Vérifier que le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Récupérer et nettoyer les données
$prenom = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$commentaire = htmlspecialchars(trim($_POST['comment'] ?? ''));
$hobby = htmlspecialchars(trim($_POST['hobby'] ?? 'Non spécifié'));
$page_origine = htmlspecialchars(trim($_POST['page_url'] ?? ''));

// Validation simple
$erreurs = [];

if (empty($prenom)) {
    $erreurs[] = 'Le prénom est requis.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = 'Une adresse email valide est requise.';
}

if (empty($commentaire)) {
    $erreurs[] = 'Le commentaire est requis.';
}

if (strlen($commentaire) < 20) {
    $erreurs[] = 'Le commentaire doit contenir au moins 20 caractères.';
}

// Protection anti-spam simple (honeypot)
if (!empty($_POST['website'])) {
    // Champ honeypot rempli = probablement un bot
    header('Location: ' . $page_origine . '?status=success');
    exit;
}

// Si erreurs, rediriger avec message
if (!empty($erreurs)) {
    $error_msg = urlencode(implode(' ', $erreurs));
    header('Location: ' . $page_origine . '?status=error&msg=' . $error_msg);
    exit;
}

// Construire le message email
$sujet = $sujet_prefix . ' ' . $hobby . ' - ' . $prenom;

$message = "
══════════════════════════════════════════════════
   NOUVEAU TÉMOIGNAGE SOLOPLUGS
══════════════════════════════════════════════════

HOBBY : $hobby

AUTEUR : $prenom
EMAIL : $email

──────────────────────────────────────────────────
TÉMOIGNAGE :
──────────────────────────────────────────────────

$commentaire

──────────────────────────────────────────────────

Page d'origine : $page_origine
Date : " . date('d/m/Y à H:i') . "

══════════════════════════════════════════════════
Pour publier ce témoignage, copiez-le dans la 
section commentaires de la page $hobby.
══════════════════════════════════════════════════
";

// En-têtes email - Compatible HostPapa

$headers  = "From: SOLOPLUGS <info@soloplugs.com>\r\n";
$headers .= "Reply-To: soloplugs@hotmail.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envoyer l'email
$envoi_reussi = mail($destinataire, $sujet, $message, $headers);

// Rediriger avec statut
if ($envoi_reussi) {
    header('Location: ' . $page_origine . '?status=success');
} else {
    header('Location: ' . $page_origine . '?status=error&msg=' . urlencode('Erreur lors de l\'envoi. Veuillez réessayer.'));
}
exit;
?>

──────────────────────────────────────────────────
TÉMOIGNAGE :
──────────────────────────────────────────────────

$commentaire

──────────────────────────────────────────────────

Page d'origine : $page_origine
Date : " . date('d/m/Y à H:i') . "

══════════════════════════════════════════════════
Pour publier ce témoignage, copiez-le dans la 
section commentaires de la page $hobby.
══════════════════════════════════════════════════
";

// En-têtes email - Compatible HostPapa
$headers = "From: soloplugs@hotmail.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envoyer l'email
$envoi_reussi = mail($destinataire, $sujet, $message, $headers);

// Rediriger avec statut
if ($envoi_reussi) {
    header('Location: ' . $page_origine . '?status=success');
} else {
    header('Location: ' . $page_origine . '?status=error&msg=' . urlencode('Erreur lors de l\'envoi. Veuillez réessayer.'));
}
exit;
?>