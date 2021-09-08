<?php
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=confirmComment");

session_start();
$id = $_SESSION['idUser'];
$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: https://elouanpeurou.tech/index.php?action=error");
    exit;
}else{
    if(isset($_POST['comment'])) {
        $Comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['idPost'])) {
        $post = filter_var($_POST['idPost'], FILTER_SANITIZE_STRING);
    }


    $req=$bdd->prepare('INSERT INTO comment (`content`,`idPost`,`idUser`) VALUES (:et1,:et2,:et3)');
    $msg = $req->execute(array(
        'et1'=> $Comment,
        'et2'=> $post,
        'et3'=> $id
    ));

    exit;
}
