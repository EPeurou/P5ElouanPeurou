<?php
require 'connect.php';


$req=$bdd->query('SELECT `title`, `content`, `description`,`date` FROM post');

$data=$req->fetch();

$title = $data['title'];
$content = $data['content'];
$description = $data['description'];
$date = $data['date'];
