<?php
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=flux");
session_start();

$id = $_SESSION['idUser'];
$token = $_POST['token'];

if ($token !== $_SESSION['token']) {
    header("location: https://elouanpeurou.tech/index.php?action=error");
    exit;
}else{
    if(isset($_POST['author'])) {
        $author = filter_var($_POST['author'],FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['title'])) {
        $title = filter_var($_POST['title'],FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['content'])) {
        $content = filter_var($_POST['content'],FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['description'])) {
        $description = filter_var($_POST['description'],FILTER_UNSAFE_RAW);
    }

    if(isset($_POST['category'])) {
        $category = filter_var($_POST['category'],FILTER_UNSAFE_RAW);
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

exit;
