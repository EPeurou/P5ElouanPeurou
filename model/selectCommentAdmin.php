<?php
require 'connect.php'; 

$req=$bdd->prepare('SELECT `id`,`date`, `content`, `idPost`,`idUser`,DATE_FORMAT(`date`, "%d/%m/%Y-%H:%i:%s") AS creationDate FROM comment WHERE validate = 0');

$req->execute(array());

$dataCommentAdmin=[];

while ($rowCommentAdmin = $req->fetch(PDO::FETCH_ASSOC)){

    $req1=$bdd->prepare("SELECT `pseudo` FROM user WHERE id = ? ");

    $req1->execute(array($rowCommentAdmin['idUser']));

    $row1=$req1->fetch(PDO::FETCH_ASSOC);

    $pseudo = $row1['pseudo'];

    $rowCommentAdmin['pseudo'] = $pseudo;

    $dataCommentAdmin[] = $rowCommentAdmin;

}