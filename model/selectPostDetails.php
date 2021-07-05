<?php
require 'connect.php';


$req=$bdd->query('SELECT `id`,`title`, `content`, `description`,`date`, `idUser`, `idCategory` FROM post WHERE id = "'.$_GET['id'].'"');

$dataPost=$req->fetch();

$idPost = $dataPost['id'];
$titlePost = $dataPost['title'];
$contentPost = $dataPost['content'];
$descriptionPost = $dataPost['description'];
$datePost = $dataPost['date'];
$idUserPost = $dataPost['idUser'];
$idCategoryPost = $dataPost['idCategory'];


$req=$bdd->query("SELECT `pseudo` FROM user WHERE id = '".$idUserPost."'");

$dataPost=$req->fetch();

$pseudoPost = $dataPost['pseudo'];



$req=$bdd->query("SELECT `name` FROM category WHERE id = '".$idCategoryPost."'");

$dataPost=$req->fetch();

$categoryPost = $dataPost['name'];

