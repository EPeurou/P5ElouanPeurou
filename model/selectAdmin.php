<?php
require 'connect.php';

if(isset($_SESSION['idUser'])){

    $id = $_SESSION['idUser'];

    $req=$bdd->prepare("SELECT id,admin FROM user WHERE id = :idUser");

    $req->execute(array(
        ':idUser' => $id
    ));

    $userData = $req->fetch(PDO::FETCH_ASSOC);
    $admin = $userData['admin'];
}
