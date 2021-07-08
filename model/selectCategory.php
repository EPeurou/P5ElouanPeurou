<?php
require 'connect.php';


$req=$bdd->prepare("SELECT `name` FROM category");

$req->execute(array());

// $categoryName = $req['name'];

$varCategory=[];

while ($rowCategory = $req->fetch(PDO::FETCH_ASSOC)){

    $varCategory[] = $rowCategory;

}

