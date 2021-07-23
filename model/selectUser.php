<?php

require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=home");

$postEmail = $_POST['email'];
$password = $_POST['password'];

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