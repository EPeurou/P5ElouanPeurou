<?php
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=login");
session_start();

$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
    exit;
}else{
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['firstName'])) {
        $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['civility'])) {
        $civility = filter_var($_POST['civility'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['password'])) {
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['pseudo'])) {
        $pseudo = filter_var($_POST['pseudo'], FILTER_SANITIZE_STRING);
    }

    $req=$bdd->prepare('INSERT INTO user (name,firstName,civility,email,password,pseudo) VALUES (:et1,:et2,:et3,:et4,:et5,:et6)');
    $msg = $req->execute(array(
        'et1'=> $name,
        'et2'=> $firstName,
        'et3'=> $civility,
        'et4'=> $email,
        'et5'=> $password,
        'et6'=> $pseudo
    ));

    exit;
}
