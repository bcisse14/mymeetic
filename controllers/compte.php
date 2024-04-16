<?php

include('../models/compte.class.php');

$email = $_POST['email'];

$class = new Compte;

$account = $class->compte($email);
$account = $account[0];

header('Content-Type : application/json');

echo json_encode($account);