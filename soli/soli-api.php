<?php
/**
 * SOLI API - Le cerveau du miroir intime
 * 
 * Ce fichier gère la communication avec OpenAI
 * Il reçoit les messages de l'utilisateur et retourne les réponses de Soli
 */

// Empêcher l'accès direct
if (!defined('SOLI_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Accès interdit');
}

// Charger la configuration
require_once __DIR__ . '/../config/soli-config.php';

/**
 * La Charte de Soli - Son identité profonde
 */
function getSoliSystemPrompt($userName = '', $userGenre = 'neutre') {
    
    $prompt = <<<PROMPT
Tu es Soli. Un ami qui écoute. Pas un thérapeute.

## RÈGLE ABSOLUE

Tu écoutes. Tu poses UNE question courte. C'est tout.

Tes réponses font 1 à 2 phrases MAXIMUM. Jamais plus.

## COMMENT TU RÉPONDS

- "Qu'est-ce qui te préoccupe ?"
- "Qu'est-ce qui te fait dire ça ?"
- "Et comment tu te sens quand ça arrive ?"
- "C'est lourd à porter. Tu veux m'en dire plus ?"
- "Ça fait longtemps que c'est comme ça ?"

## CE QUE TU NE FAIS JAMAIS

- Analyser
- Donner des conseils
- Faire des listes
- Expliquer ce que la personne ressent
- Dire "Je comprends"
- Faire de longs paragraphes
- Poser plusieurs questions à la fois

## TON STYLE

- Tu tutoies toujours
- Phrases courtes
- Une seule question par réponse
- Tu laisses l'autre parler
- Tu ne remplis pas le silence avec des mots

Tu es un ami dans le noir qui écoute. Pas un expert qui explique.

PROMPT;

    if ($userName) {
        $prompt .= "\n\nTu parles avec {$userName}.";
    }

    return $prompt;
}


/**
 * Envoie un message à Soli et obtient sa réponse
 */
function parlerASoli($message, $historique = [], $userName = '', $userGenre = 'neutre') {
    
    $apiKey = OPENAI_API_KEY;
    $model = OPENAI_MODEL;
    
    // Vérifier que la clé est configurée
    if (strpos($apiKey, 'XXXX') !== false) {
        return [
            'success' => false,
            'error' => 'Clé API non configurée. Modifie config/soli-config.php'
        ];
    }
    
    // Construire les messages
    $messages = [
        [
            'role' => 'system',
            'content' => getSoliSystemPrompt($userName, $userGenre)
        ]
    ];
    
    // Ajouter l'historique de conversation
    foreach ($historique as $msg) {
        $messages[] = $msg;
    }
    
    // Ajouter le nouveau message
    $messages[] = [
        'role' => 'user',
        'content' => $message
    ];
    
    // Préparer la requête
    $data = [
        'model' => $model,
        'messages' => $messages,
        'temperature' => OPENAI_TEMPERATURE,
        'max_tokens' => OPENAI_MAX_TOKENS
    ];
    
    // Appel à l'API OpenAI
    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ],
        CURLOPT_POSTFIELDS => json_encode($data),
        // Pour WAMP local - désactive la vérification SSL
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    // Gérer les erreurs
    if ($curlError) {
        return [
            'success' => false,
            'error' => 'Erreur de connexion: ' . $curlError
        ];
    }
    
    $result = json_decode($response, true);
    
    if ($httpCode !== 200) {
        $errorMsg = $result['error']['message'] ?? 'Erreur inconnue';
        return [
            'success' => false,
            'error' => 'Erreur API: ' . $errorMsg
        ];
    }
    
    // Extraire la réponse
    $reponse = $result['choices'][0]['message']['content'] ?? '';
    
    return [
        'success' => true,
        'response' => $reponse
    ];
}
