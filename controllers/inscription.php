<?php

include('../models/inscription.class.php');

$inscription_class = new Inscription;
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['date_de_naissance'];
$genre = $_POST['genre'];
$ville=$_POST['ville'];
$email=$_POST['email'];
$mot_de_passe=$_POST['mdp'];
$loisir=$_POST['loisir'];



$inscription_class->inscription($nom,$prenom,$date_de_naissance,$genre,$ville,$email,$mot_de_passe,$loisir);



?>