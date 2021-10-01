<?php 
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=admin");
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $post['idCommentDel'];

$req=$bdd->prepare('DELETE FROM comment WHERE id = :idComment');

$req->execute(array(
    ':idComment' => $id
));
