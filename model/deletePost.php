<?php 
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=myPost");

    $id=$_POST['iddel'];
    $post['idPost'] = $id;

    $req=$bdd->prepare('DELETE FROM post WHERE id = :idPost');

    $req->execute(array('idPost' => $id));

exit;

?>