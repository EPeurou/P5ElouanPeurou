<?php
require 'connect.php';

$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: https://elouanpeurou.tech/index.php?action=error");
    exit;
}else{
    header("location: https://elouanpeurou.tech/index.php?action=home");
    if(isset($_POST['email'])) {
        $postEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['password'])) {
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }

    $req=$bdd->prepare("SELECT password FROM user WHERE email = :email");

    $req->execute(array(
        ':email' => $postEmail
    ));
    $userDecrypte = $req->fetch(PDO::FETCH_ASSOC);
    $hash = $userDecrypte['password'];

    $verify = password_verify($password, $hash);

    if($verify){
        $req1=$bdd->prepare("SELECT id,firstName,name,email,password,pseudo,admin FROM user WHERE email = :email AND password = :password");

        $req1->execute(array(
            ':email' => $postEmail,
            ':password' => $hash
        ));

        $userData = $req1->fetch(PDO::FETCH_ASSOC);
        $id = $userData['id'];
        session_start();

        $_SESSION['idUser'] = $id;
        // echo $_SESSION['idUser'];
    }

    exit;
}