<?php
require 'connect.php'; 
$get = filter_input_array(INPUT_GET, FILTER_DEFAULT);
if (isset($get['id'])){

    $idPost = $get['id'];

    $req=$bdd->prepare('SELECT `id`,`date`, `content`, `idPost`,`idUser`,DATE_FORMAT(`date`, "%d/%m/%Y-%H:%i:%s") AS creationDate FROM comment WHERE idPost = :idPost AND validate = 1');

    $req->execute(array(
        ':idPost' => $idPost
    ));

    $dataComment=[];

    while ($rowComment = $req->fetch(PDO::FETCH_ASSOC)){

        $req1=$bdd->prepare("SELECT `pseudo` FROM user WHERE id = ? ");

        $req1->execute(array($rowComment['idUser']));

        $row1=$req1->fetch(PDO::FETCH_ASSOC);

        $pseudo = $row1['pseudo'];

        $rowComment['pseudo'] = $pseudo;

        $dataComment[] = $rowComment;

    }
}