<?php
require 'connect.php';

header("location: https://elouanpeurou.tech/index.php?action=myPost");

    $idPost = $_POST['idUp'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $category = $_POST['category'];
        
    $req=$bdd->prepare('UPDATE post SET title = :nwtitle,
    `description` = :nwdescription, `content` = :nwcontent, `idCategory` = :nwcategory, `date` = NOW() WHERE id = :nwid');
    $req->execute(array(
            'nwtitle'=>$title,
            'nwdescription'=>$description,
            'nwcontent'=>$content,
            'nwid'=>$idPost,
            'nwcategory'=>$category
    ));
        
        
exit;
?>