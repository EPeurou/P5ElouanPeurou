<?php
require 'connect.php';
session_start();

$id = $_SESSION['idUser'];
$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: https://elouanpeurou.tech/index.php?action=error");
    exit;
}else{
    header("location: https://elouanpeurou.tech/index.php?action=myPost");
    if(isset($_POST['idUp'])) {
        $idPost = filter_var($_POST['idUp'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['title'])) {
        $title = filter_var($_POST['title'], FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['author'])) {
        $author = filter_var($_POST['author'], FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['description'])) {
        $description = filter_var($_POST['description'], FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['content'])) {
        $content = filter_var($_POST['content'], FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['category'])) {
        $category = filter_var($_POST['category'], FILTER_UNSAFE_RAW);
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
            
            
    exit;
}
?>