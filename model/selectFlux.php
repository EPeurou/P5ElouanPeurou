<?php
require 'connect.php';


$req=$bdd->prepare('SELECT `id`,`title`,`content`,`description`,`date`,`idUser`,`idCategory`,`author`, DATE_FORMAT(`date`, "%d/%m/%Y-%H:%i:%s") AS creationDate FROM post ORDER BY id DESC');

$req->execute(array());

$data=[];

while ($row = $req->fetch(PDO::FETCH_ASSOC)){

    $req2=$bdd->prepare("SELECT `name` FROM category WHERE id = ? ");

    $req2->execute(array($row['idCategory']));

    $row2=$req2->fetch(PDO::FETCH_ASSOC);

    $categoryName = $row2['name'];

    $row['category'] = $categoryName;
    $req2 = null;

    $data[] = $row;

}
