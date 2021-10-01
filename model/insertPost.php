<?php
require 'connect.php';
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=flux");
session_start();
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $_SESSION['idUser'];
$token = $post['token'];

if ($token !== $_SESSION['token']) {
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
    exit;
}else{
    if(isset($post['author'])) {
        $author = filter_var($post['author'],FILTER_UNSAFE_RAW);
    }

    if(isset($post['title'])) {
        $title = filter_var($post['title'],FILTER_UNSAFE_RAW);
    }

    if(isset($post['content'])) {
        $content = filter_var($post['content'],FILTER_UNSAFE_RAW);
    }

    if(isset($post['description'])) {
        $description = filter_var($post['description'],FILTER_UNSAFE_RAW);
    }

    if(isset($post['category'])) {
        $category = filter_var($post['category'],FILTER_UNSAFE_RAW);
    }
}
$req=$bdd->prepare('INSERT INTO post (`title`, `content`, `description`, `idUser`, `idCategory`,`author`) VALUES (:et1,:et2,:et3,:et4,:et5,:et6)');
$msg = $req->execute(array(
    'et1' => $title,
    'et2' => $content,
    'et3' => $description,
    'et4' => $id,
    'et5' => $category,
    'et6' => $author
));

