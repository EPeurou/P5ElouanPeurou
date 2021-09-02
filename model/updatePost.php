<?php
require 'connect.php';

header("location: https://elouanpeurou.tech/index.php?action=myPost");

if(isset($_POST['idUp'])) {
    $idPost = filter_var($_POST['idUp'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['title'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['author'])) {
    $author = filter_var($_POST['author'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['description'])) {
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['content'])) {
    $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['category'])) {
    $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
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
?>