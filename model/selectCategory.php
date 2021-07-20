<?php
require 'connect.php';


$req=$bdd->prepare("SELECT `id`,`name` FROM category");

$req->execute(array());

// $categoryName = $req['name'];

$varCategory=[];

while ($rowCategory = $req->fetch(PDO::FETCH_ASSOC)){

    // $rowCategory['name'] = $categoryName;

    $varCategory[] = $rowCategory;

}

