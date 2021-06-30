<?php
include 'connect.php';


$req=$bdd->query('SELECT `title`, `content`, `description`,`date` FROM post');

$title = ['title'];
$content = ['content'];
$description = ['description'];
$date = ['date'];