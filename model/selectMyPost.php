<?php
require 'connect.php';
session_start();
$id = $_SESSION['idUser'];


$req=$bdd->prepare('SELECT `id`,`title`,`content`,`description`,`date`,`idUser`,`idCategory`,`author` FROM post WHERE idUser = :idUser  ORDER BY id DESC');

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
