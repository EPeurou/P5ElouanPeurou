<?php
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=flux");
session_start();

$title = $_POST['title'];
$content = $_POST['content'];
$description= $_POST['description'];
$id = $_SESSION['idUser'];
$category = $_POST['category'];



$req=$bdd->prepare('INSERT INTO post (`title`, `content`, `description`, `idUser`, `idCategory`) VALUES (:et1,:et2,:et3,:et4,:et5)');
$msg = $req->execute(array(
    'et1'=> $title,
    'et2'=> $content,
    'et3'=> $description,
    'et4'=> $id,
    'et5'=> $category
));

exit;
