<?php
require 'connect.php';

$idUser = session::get('idUser');

if($idUser != null){

    $id = $idUser;

    $req=$bdd->prepare("SELECT id,firstName,name,email,password,pseudo FROM user WHERE id = :idUser");

    $req->execute(array(
        ':idUser' => $id,
    ));

    $userContactData = $req->fetch(PDO::FETCH_ASSOC);

    $nameUser = $userContactData['name'];
    $firstNameUser = $userContactData['firstName'];
    $emailUser = $userContactData['email'];
}