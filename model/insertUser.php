<?php
require 'connect.php';

header("location: http://127.0.0.1/P5_01_Projet/index.php?action=login");
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($post['name'])) {
    $name = filter_var($post['name'], FILTER_SANITIZE_STRING);
}

if(isset($post['firstName'])) {
    $firstName = filter_var($post['firstName'], FILTER_SANITIZE_STRING);
}

if(isset($post['civility'])) {
    $civility = filter_var($post['civility'], FILTER_SANITIZE_STRING);
}

if(isset($post['email'])) {
    $email = filter_var($post['email'], FILTER_VALIDATE_EMAIL);
}

if(isset($post['password'])) {
    $hash = password_hash($post['password'], PASSWORD_DEFAULT);
}

if(isset($post['pseudo'])) {
    $pseudo = filter_var($post['pseudo'], FILTER_SANITIZE_STRING);
}

$req=$bdd->prepare('INSERT INTO user (name,firstName,civility,email,password,pseudo) VALUES (:et1,:et2,:et3,:et4,:et5,:et6)');
$msg = $req->execute(array(
    'et1'=> $name,
    'et2'=> $firstName,
    'et3'=> $civility,
    'et4'=> $email,
    'et5'=> $hash,
    'et6'=> $pseudo
));

