<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=elouanr29;charset=utf8', 'root', 'root');
} catch (Exception $e){
    print_r('Erreur : ' . $e->filter_var(getMessage(), FILTER_DEFAULT));
} 

