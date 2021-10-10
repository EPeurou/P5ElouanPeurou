<?php
require 'connect.php';
session_start();
$idUser = session::get('idUser');

if($idUser != null){

    $id = $idUser;

    $req=$bdd->prepare('SELECT `id`,`title`,`content`,`description`,`date`,`idUser`,`idCategory`,`author`,DATE_FORMAT(`date`, "%d/%m/%Y-%H:%i:%s") AS creationDate FROM post WHERE idUser = :idUser  ORDER BY id DESC');

    $req->execute(array(
        ':idUser' => $id
    ));

    $dataMy=[];

    while ($rowMy = $req->fetch(PDO::FETCH_ASSOC)){

        $req2=$bdd->prepare("SELECT `name` FROM category WHERE id = ? ");

        $req2->execute(array($rowMy['idCategory']));

        $row2=$req2->fetch(PDO::FETCH_ASSOC);

        $categoryNameMy = $row2['name'];

        $rowMy['category'] = $categoryNameMy;
        $req2 = null;

        $dataMy[] = $rowMy;

    }
}
