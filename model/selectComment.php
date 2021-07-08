<?php
require 'connect.php';


$req=$bdd->prepare('SELECT `id`,`date`, `content`, `idPost`,`idUser` FROM comment WHERE idPost = "'.$_GET['id'].'"');

$req->execute(array());

$dataComment=[];

while ($rowComment = $req->fetch(PDO::FETCH_ASSOC)){

    $req1=$bdd->prepare("SELECT `pseudo` FROM user WHERE id = ? ");

    $req1->execute(array($rowComment['idUser']));

    $row1=$req1->fetch(PDO::FETCH_ASSOC);

    $pseudo = $row1['pseudo'];

    $rowComment['pseudo'] = $pseudo;

    $dataComment[] = $rowComment;

}
// $req=$bdd->query("SELECT `pseudo` FROM user WHERE id = '".$idUserComment."'");

// $dataComment=$req->fetch();
// $pseudoComment = $dataComment['pseudo'];
// $idComment = $dataComment['id'];
// $contentComment = $dataComment['content'];
// $idPostComment = $dataComment['idPost'];
// $dateComment = $dataComment['date'];
// $idUserComment = $dataComment['idUser'];