<?php
require 'connect.php';

if(!isset($_SESSION['idUser'])){
    session_start();
    $id = $_SESSION['idUser'];


    $req=$bdd->prepare("SELECT id,firstName,name,email,password,pseudo FROM user WHERE id = :idUser");

    $req->execute(array(
        ':idUser' => $id,
    ));

    $userContactData = $req->fetch(PDO::FETCH_ASSOC);

    $nameUser = $userContactData['name'];
    $firstNameUser = $userContactData['firstName'];
    $emailUser = $userContactData['email'];
}