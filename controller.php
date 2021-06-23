<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

function homepage(){
    global $twig;
    echo $twig->render('index.html.twig');
}

function flux(){
    global $twig;
    echo $twig->render('flux.html.twig');
}

function contact(){
    global $twig;
    echo $twig->render('contact.html.twig');
}

function apropos(){
    global $twig;
    echo $twig->render('about.html.twig');
}

function post(){
    global $twig;
    echo $twig->render('post.html.twig');
}

