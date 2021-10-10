<?php
require 'connect.php';
$idUser = session::get('idUser');

if($idUser != null){

    $id = $idUser;

    $req=$bdd->prepare("SELECT id,admin FROM user WHERE id = :idUser");

    $req->execute(array(
        ':idUser' => $id
    ));

    $userData = $req->fetch(PDO::FETCH_ASSOC);
    $admin = $userData['admin'];
}
