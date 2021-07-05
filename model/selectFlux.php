<?php
require 'connect.php';


$req=$bdd->prepare('SELECT `title`, `content`, `description`,`date`, `idUser`, `idCategory` FROM post');

$req->execute(array());

$data=[];

while ($row = $req->fetch(PDO::FETCH_ASSOC)){


    $req1=$bdd->prepare("SELECT `pseudo` FROM user WHERE id = ? ");

    $req1->execute(array($row['idUser']));

    $row1=$req1->fetch(PDO::FETCH_ASSOC);

    $pseudo = $row1['pseudo'];

    $row['pseudo'] = $pseudo;
    $req1 = null;


    $req2=$bdd->prepare("SELECT `name` FROM category WHERE id = ? ");

    $req2->execute(array($row['idCategory']));

    $row2=$req2->fetch(PDO::FETCH_ASSOC);

    $categoryName = $row2['name'];

    $row['category'] = $categoryName;
    $req2 = null;
    
    $data[] = $row;

}

// $title = $data['title'];
// $content = $data['content'];
// $description = $data['description'];
// $date = $data['date'];
// $idUser = $data['idUser'];
// $idCategory = $data['idCategory'];
