<?php
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=post&id=".$_POST['idPost']);

$Comment = $_POST['comment'];
$post = $_POST['idPost'];
$idUser = $_POST['id'];



$req=$bdd->prepare('INSERT INTO comment (`content`,`idPost`,`idUser`) VALUES (:et1,:et2,:et3)');
$msg = $req->execute(array(
    'et1'=> $Comment,
    'et2'=> $post,
    'et3'=> $idUser
));

exit;
