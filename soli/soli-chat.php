<?php
/**
 * SOLI CHAT - Endpoint pour la page web
 * 
 * Reçoit les messages en AJAX et retourne les réponses de Soli
 */

// Activer l'accès à l'API
define('SOLI_ACCESS', true);

// Headers pour AJAX
header('Content-Type: application/json; charset=utf-8');

// Charger l'API Soli
require_once __DIR__ . '/soli-api.php';

// Vérifier que c'est une requête POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Méthode non autorisée']);
    exit;
}

// Récupérer les données
$input = json_decode(file_get_contents('php://input'), true);

$message = trim($input['message'] ?? '');
$historique = $input['historique'] ?? [];
$userName = trim($input['userName'] ?? '');
$userGenre = trim($input['userGenre'] ?? 'neutre');

// Valider le message
if (empty($message)) {
    echo json_encode(['success' => false, 'error' => 'Message vide']);
    exit;
}

// Nettoyer le message (sécurité basique)
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Appeler Soli
$resultat = parlerASoli($message, $historique, $userName, $userGenre);

// Retourner la réponse
echo json_encode($resultat, JSON_UNESCAPED_UNICODE);
