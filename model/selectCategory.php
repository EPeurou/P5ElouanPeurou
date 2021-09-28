<?php
require 'connect.php';


$req=$bdd->prepare("SELECT `id`,`name` FROM category");

$req->execute(array());

$varCategory=[];

while ($rowCategory = $req->fetch(PDO::FETCH_ASSOC)){

    $varCategory[] = $rowCategory;

}

