<?php
require 'connect.php';

session_start();
$_SESSION['idUser'] = $id;


$req=$bdd->prepare("SELECT id,firstName,name,email,password,pseudo FROM user WHERE id = :idUser");

$req->execute(array(
    ':idUser' => $id,
));

$userContactData = $req->fetch(PDO::FETCH_ASSOC);

$nameUser = $userContactData['name'];
$firstNameUser = $userContactData['firstName'];
$emailUser = $userContactData['email'];
