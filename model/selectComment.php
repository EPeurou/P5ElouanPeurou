<?php
require 'connect.php';


$req=$bdd->query('SELECT `id`,`date`, `content`, `idPost`,`idUser` FROM comment WHERE id = 2');

$dataComment=$req->fetch();

$idComment = $dataComment['id'];
$contentComment = $dataComment['content'];
$idPostComment = $dataComment['idPost'];
$dateComment = $dataComment['date'];
$idUserComment = $dataComment['idUser'];


$req=$bdd->query("SELECT `pseudo` FROM user WHERE id = '".$idUserComment."'");

$dataComment=$req->fetch();

$pseudoComment = $dataComment['pseudo'];
