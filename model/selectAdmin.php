<?php
require 'connect.php';

session_start();
$id = $_SESSION['idUser'];

$req=$bdd->prepare("SELECT id,admin FROM user WHERE id = :idUser");

$req->execute(array(
    ':idUser' => $id
));

$userData = $req->fetch(PDO::FETCH_ASSOC);
$admin = $userData['admin'];
// echo $_SESSION['idUser'];
