<?php
include('../models/connexion.class.php');
$connexion = new Connexion;

$mail = $_POST['email'];
$mdp = $_POST['mdp'];

$user = $connexion->connexion($mail, $mdp);

header('Content-Type: application/json');
if (empty($user)) {
    echo json_encode(array('message' => 'Utilisateur non existant'));
    exit;
}
echo json_encode(array('email' => $user[0]['email']));



?>