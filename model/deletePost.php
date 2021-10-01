<?php 
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=myPost");
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $post['iddel'];
$post['idPost'] = $id;

$req=$bdd->prepare('DELETE FROM post WHERE id = :idPost');

$req->execute(array(
    'idPost' => $id
));
