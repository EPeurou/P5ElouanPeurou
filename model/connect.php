<?php
try {
    $bdd = new PDO('mysql:host=elouanr29.mysql.db;dbname=elouanr29;charset=utf8', 'elouanr', 'Kerlecraden1');
} catch (Exception $e){
    echo 'Erreur'.$e->getMessage();
    die('Erreur : ' . $e->getMessage());
} 

