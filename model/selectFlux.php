<?php
require 'connect.php';


$req=$bdd->query('SELECT `title`, `content`, `description`,`date`, `idUser`, `idCategory` FROM post');

$data=$req->fetch();

$title = $data['title'];
$content = $data['content'];
$description = $data['description'];
$date = $data['date'];
$idUser = $data['idUser'];
$idCategory = $data['idCategory'];


$req=$bdd->query("SELECT `pseudo` FROM user WHERE id = '".$idUser."'");

$data=$req->fetch();

$pseudo = $data['pseudo'];



$req=$bdd->query("SELECT `name` FROM category WHERE id = '".$idCategory."'");

$data=$req->fetch();

$categoryName = $data['name'];