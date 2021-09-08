<?php
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=home");

$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: https://elouanpeurou.tech/index.php?action=error");
    exit;
}else{
    if(isset($_POST['email'])) {
        $postEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['password'])) {
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }

    $req=$bdd->prepare("SELECT id,firstName,name,email,password,pseudo,admin FROM user WHERE email = :email AND password = :password");

    $req->execute(array(
        ':email' => $postEmail,
        ':password' => $password
    ));

    $userData = $req->fetch(PDO::FETCH_ASSOC);
    $id = $userData['id'];
    session_start();

    $_SESSION['idUser'] = $id;
    // echo $_SESSION['idUser'];

    exit;
}