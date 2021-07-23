<?php
require 'connect.php';
session_start();
$id = $_SESSION['idUser'];


$req=$bdd->prepare('SELECT `id`, `title`, `content`, `description`,`date`, `idUser`, `idCategory` FROM post WHERE idUser = :idUser  ORDER BY id DESC');

$req->execute(array(
    ':idUser' => $id
));

$dataMy=[];

while ($rowMy = $req->fetch(PDO::FETCH_ASSOC)){


    $req1=$bdd->prepare("SELECT `pseudo` FROM user WHERE id = ? ");

    $req1->execute(array($rowMy['idUser']));

    $row1=$req1->fetch(PDO::FETCH_ASSOC);

    $pseudoMy = $row1['pseudo'];

    $rowMy['pseudo'] = $pseudoMy;
    $req1 = null;


    $req2=$bdd->prepare("SELECT `name` FROM category WHERE id = ? ");

    $req2->execute(array($rowMy['idCategory']));

    $row2=$req2->fetch(PDO::FETCH_ASSOC);

    $categoryNameMy = $row2['name'];

    $rowMy['category'] = $categoryNameMy;
    $req2 = null;

    $dataMy[] = $rowMy;

}
