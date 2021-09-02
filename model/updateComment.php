<?php
require 'connect.php';

header("location: https://elouanpeurou.tech/index.php?action=admin");

$idComment = $_POST['idComment'];
    
$req=$bdd->prepare('UPDATE comment SET validate = 1 WHERE id = :idComment');
$req->execute(array(
        ':idComment'=>$idComment
));
        
        
exit;
?>