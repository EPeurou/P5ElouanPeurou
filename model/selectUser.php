<?php
require 'connect.php';
require '../controllers/session.php';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$token = $post['token'];
$id = "";
// session::put($token);

if ($token != $_SESSION['token'] && $_SESSION['token'] != null) {
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
}else{
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=home");
    if(isset($post['email'])) {
        $postEmail = filter_var($post['email'], FILTER_VALIDATE_EMAIL);
    }

    if(isset($post['password'])) {
        $password = filter_var($post['password'], FILTER_SANITIZE_STRING);
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
        
    }
}
if(!isset($userData)){
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
} else {
    session_start();
    // $_SESSION['idUser'] = $id;
    session::put('idUser', $id);
    // error_log("[".$_SESSION['idUser']."]");
}