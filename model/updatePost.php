<?php
require 'connect.php';
session_start();
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $_SESSION['idUser'];
$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=error");
    exit;
}else{
    header("location: http://127.0.0.1/P5_01_Projet/index.php?action=myPost");
    if(isset($post['idUp'])) {
        $idPost = filter_var($post['idUp'], FILTER_SANITIZE_STRING);
    }

    if(isset($post['title'])) {
        $title = filter_var($post['title'], FILTER_UNSAFE_RAW);
    }

    if(isset($post['author'])) {
        $author = filter_var($post['author'], FILTER_UNSAFE_RAW);
    }

    if(isset($post['description'])) {
        $description = filter_var($post['description'], FILTER_UNSAFE_RAW);
    }

    if(isset($post['content'])) {
        $content = filter_var($post['content'], FILTER_UNSAFE_RAW);
    }

    if(isset($post['category'])) {
        $category = filter_var($post['category'], FILTER_UNSAFE_RAW);
    }
        
    $req=$bdd->prepare('UPDATE post SET title = :nwtitle,
    `description` = :nwdescription,`content` = :nwcontent,`idCategory` = :nwcategory,`author` = :nwauthor,`date` = NOW() WHERE id = :nwid');
    $req->execute(array(
            'nwtitle' => $title,
            'nwdescription' => $description,
            'nwcontent' => $content,
            'nwid' => $idPost,
            'nwcategory' => $category,
            'nwauthor' => $author
    ));
}
