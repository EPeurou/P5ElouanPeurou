<?php 
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=admin");

$id = $_POST['idCommentDel'];

$req=$bdd->prepare('DELETE FROM comment WHERE id = :idComment');

$req->execute(array(
    ':idComment' => $id
));

exit;

?>