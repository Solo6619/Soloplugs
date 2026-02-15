<?php
/**
 * SOLOPLUGS - Envoi des suggestions (ressources + evenements)
 * Compatible HostPapa - utilise info@soloplugs.com
 */

header('Content-Type: application/json; charset=utf-8');

// IMPORTANT: Utiliser une adresse qui existe dans cPanel
$destinataire = 'info@soloplugs.com';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Methode non autorisee']);
    exit;
}

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Donnees invalides']);
    exit;
}

$type = isset($data['type_formulaire']) ? $data['type_formulaire'] : 'ressource';

if ($type === 'evenement') {
    $sujet = '[SOLOPLUGS Evenement] ' . (isset($data['titre']) ? $data['titre'] : 'Nouvel evenement');
    
    $message = "
==================================================
   NOUVEL EVENEMENT PROPOSE
==================================================

TITRE : " . (isset($data['titre']) ? $data['titre'] : '') . "
TYPE : " . (isset($data['type']) ? $data['type'] : '') . "
DATE : " . (isset($data['date']) ? $data['date'] : '') . " a " . (isset($data['heure']) ? $data['heure'] : 'Non precise') . "

--------------------------------------------------
LOCALISATION :
--------------------------------------------------
Pays : " . (isset($data['pays']) ? $data['pays'] : '') . "
Region/Ville : " . (isset($data['region']) ? $data['region'] : '') . "
Lieu : " . (isset($data['lieu']) ? $data['lieu'] : 'Non precise') . "

--------------------------------------------------
DESCRIPTION :
--------------------------------------------------

" . (isset($data['description']) ? $data['description'] : '') . "

--------------------------------------------------
ORGANISATEUR :
--------------------------------------------------
Nom : " . (isset($data['organisateur']) ? $data['organisateur'] : '') . "
Contact : " . (isset($data['contact']) ? $data['contact'] : '') . "
Lien inscription : " . (isset($data['lien']) ? $data['lien'] : 'Aucun') . "
Abonnement newsletter : " . (isset($data['abonnement']) ? 'Oui' : 'Non') . "

--------------------------------------------------
Date de soumission : " . date('d/m/Y H:i') . "
==================================================
";

} else {
    $sujet = '[SOLOPLUGS Ressource] ' . (isset($data['nom']) ? $data['nom'] : 'Nouvelle ressource');
    
    $message = "
==================================================
   NOUVELLE RESSOURCE SUGGEREE
==================================================

NOM : " . (isset($data['nom']) ? $data['nom'] : '') . "
TYPE : " . (isset($data['type']) ? $data['type'] : '') . "
PUBLIC VISE : " . (isset($data['public']) ? $data['public'] : 'Tous publics') . "

--------------------------------------------------
LOCALISATION :
--------------------------------------------------
Pays : " . (isset($data['pays']) ? $data['pays'] : '') . "
Region/Ville : " . (isset($data['region']) ? $data['region'] : '') . "

--------------------------------------------------
DESCRIPTION :
--------------------------------------------------

" . (isset($data['description']) ? $data['description'] : '') . "

--------------------------------------------------
COORDONNEES DE LA RESSOURCE :
--------------------------------------------------
Telephone : " . (isset($data['telephone']) ? $data['telephone'] : 'Non fourni') . "
Site web : " . (isset($data['site']) ? $data['site'] : 'Non fourni') . "

--------------------------------------------------
SOUMIS PAR :
--------------------------------------------------
Nom : " . (isset($data['ton_nom']) ? $data['ton_nom'] : 'Anonyme') . "
Courriel : " . (isset($data['ton_courriel']) ? $data['ton_courriel'] : 'Non fourni') . "

--------------------------------------------------
Date de soumission : " . date('d/m/Y H:i') . "
==================================================
";
}

// En-tetes compatibles HostPapa - From doit etre une adresse existante sur le serveur
$headers  = "From: info@soloplugs.com\r\n";
$headers .= "Reply-To: info@soloplugs.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$envoi_reussi = @mail($destinataire, $sujet, $message, $headers);

if ($envoi_reussi) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Erreur envoi email']);
}
exit;
?>
