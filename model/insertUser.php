<?php
require 'connect.php';
header("location: https://elouanpeurou.tech/index.php?action=login");


$name = $_POST['name'];
$firstName = $_POST['firstName'];
$civility = $_POST['civility'];
$email = $_POST['email'];
$password = $_POST['password'];
$pseudo = $_POST['pseudo'];


$req=$bdd->prepare('INSERT INTO user (name,firstName,civility,email,password,pseudo) VALUES (:et1,:et2,:et3,:et4,:et5,:et6)');
$msg = $req->execute(array(
    'et1'=> $name,
    'et2'=> $firstName,
    'et3'=> $civility,
    'et4'=> $email,
    'et5'=> $password,
    'et6'=> $pseudo
));

exit;
