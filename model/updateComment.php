<?php
require 'connect.php';

header("location: http://127.0.0.1/P5_01_Projet/index.php?action=admin");

$idComment = $_POST['idComment'];
    
$req=$bdd->prepare('UPDATE comment SET validate = 1 WHERE id = :idComment');
$req->execute(array(
        ':idComment'=>$idComment
));
        
        
exit;
?>