<?php
require 'connect.php';
$idPostCurrent = $_GET['id'];

$req=$bdd->prepare('SELECT `id`,`title`, `content`, `description`,`date`, `idUser`, `idCategory`,`author` FROM post WHERE id = :idPost');

$req->execute(array(
    ':idPost' => $idPostCurrent
));

$dataPost=$req->fetch();

$idPost = $dataPost['id'];
$titlePost = $dataPost['title'];
$contentPost = $dataPost['content'];
$descriptionPost = $dataPost['description'];
$datePost = $dataPost['date'];
$idUserPost = $dataPost['idUser'];
$idCategoryPost = $dataPost['idCategory'];
$authorPost = $dataPost['author'];


$req=$bdd->prepare("SELECT `name` FROM category WHERE id = :idCategory");

$req->execute(array(
    ':idCategory' => $idCategoryPost
));


$dataPost=$req->fetch();

$categoryPost = $dataPost['name'];

