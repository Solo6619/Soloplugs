<?php
/**
 * SOLOPLUGS - Envoi des messages de contact
 * Les messages sont envoyés à soloplugs@hotmail.com
 */

// Configuration
$destinataire = 'soloplugs@hotmail.com';
$sujet_prefix = '[SOLOPLUGS Contact]';

// Vérifier que le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Récupérer et nettoyer les données
$prenom = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$sujet_choisi = htmlspecialchars(trim($_POST['subject'] ?? 'Non spécifié'));
$message_contenu = htmlspecialchars(trim($_POST['message'] ?? ''));
$page_origine = htmlspecialchars(trim($_POST['page_url'] ?? 'contact.php'));

// Validation
$erreurs = [];

if (empty($prenom)) {
    $erreurs[] = 'Le prénom est requis.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = 'Une adresse email valide est requise.';
}

if (empty($sujet_choisi) || $sujet_choisi === '') {
    $erreurs[] = 'Veuillez choisir un sujet.';
}

if (empty($message_contenu)) {
    $erreurs[] = 'Le message est requis.';
}

if (strlen($message_contenu) < 10) {
    $erreurs[] = 'Le message doit contenir au moins 10 caractères.';
}

// Protection anti-spam (honeypot)
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

// Construire le sujet de l'email
$sujet = $sujet_prefix . ' ' . $sujet_choisi . ' - ' . $prenom;

// Construire le message email
$message = "
══════════════════════════════════════════════════
   NOUVEAU MESSAGE - SOLOPLUGS
══════════════════════════════════════════════════

SUJET : $sujet_choisi

DE : $prenom
EMAIL : $email

──────────────────────────────────────────────────
MESSAGE :
──────────────────────────────────────────────────

$message_contenu

──────────────────────────────────────────────────

Date : " . date('d/m/Y à H:i') . "
IP : " . $_SERVER['REMOTE_ADDR'] . "

══════════════════════════════════════════════════
Pour répondre, utilisez directement l'adresse :
$email
══════════════════════════════════════════════════
";

// En-têtes email - Compatible HostPapa
$headers  = "From: SOLOPLUGS <info@soloplugs.com>\r\n";
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
