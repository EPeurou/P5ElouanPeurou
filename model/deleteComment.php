<?php 
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=admin");

$id = $_POST['idCommentDel'];

$req=$bdd->prepare('DELETE FROM comment WHERE id = :idComment');

$req->execute(array(
    ':idComment' => $id
));

exit;

?>