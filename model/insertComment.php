<?php
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=flux");

session_start();
$mypost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $_SESSION['idUser'];
$token = $mypost['token'];

if ($token !== $_SESSION['token']) {
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
    exit;
}else{
    if(isset($mypost['comment'])) {
        $Comment = filter_var($mypost['comment'], FILTER_UNSAFE_RAW);
    }

    if(isset($mypost['idPost'])) {
        $post = filter_var($mypost['idPost'], FILTER_UNSAFE_RAW);
    }
}

$req=$bdd->prepare('INSERT INTO comment (`content`, `idPost`, `idUser`) VALUES (:et1,:et2,:et3)');
$msg = $req->execute(array(
    'et1'=> $Comment,
    'et2'=> $post,
    'et3'=> $id
));

