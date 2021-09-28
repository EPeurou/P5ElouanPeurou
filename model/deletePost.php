<?php 
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=myPost");

$id=$_POST['iddel'];
$post['idPost'] = $id;

$req=$bdd->prepare('DELETE FROM post WHERE id = :idPost');

$req->execute(array(
    'idPost' => $id
));

exit;

?>