<?php
require __DIR__ . '/vendor/autoload.php';
require ('model/selectFlux.php');
require ('model/selectPostDetails.php');
require ('model/selectComment.php');
require ('model/selectCategory.php');
require ('model/selectMyPost.php');

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

function homepage(){
    global $twig;
    echo $twig->render('index.html.twig');
}

function flux(){
    global $twig,$data,$row;
    echo $twig->render('flux.html.twig', [
        'data' => $data,
        'row' => $row
    ]);
}

function contact(){
    global $twig;
    echo $twig->render('contact.html.twig');
}

function newPost(){
    global $twig,$rowCategory,$varCategory,$categoryName;
    echo $twig->render('newPost.html.twig',[
        'categoryName' => $categoryName,
        'varCategory' => $varCategory
    ]);
}

function apropos(){
    global $twig;
    echo $twig->render('about.html.twig');
}

function post(){
    global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
    $pseudoPost,$idPost,$dataComment,$rowComment;
    echo $twig->render('post.html.twig',[
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'datePost' => $datePost,
        'categoryPost' => $categoryPost,
        'pseudoPost' => $pseudoPost,
        'idPost' => $idPost,
        'dataComment' => $dataComment,
        'rowComment' => $rowComment
    ]);
}

function confirm(){
    global $twig;
    echo $twig->render('confirm.html.twig');
}

function myPost(){
    global $twig,$data,$row;
    echo $twig->render('myPost.html.twig', [
        'data' => $data,
        'row' => $row
    ]);
}

function postDelUp(){
    global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
    $pseudoPost,$idPost,$dataComment,$rowComment,$data,$row;
    echo $twig->render('postDeleteUpdate.html.twig', [
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'datePost' => $datePost,
        'categoryPost' => $categoryPost,
        'pseudoPost' => $pseudoPost,
        'idPost' => $idPost,
        'dataComment' => $dataComment,
        'rowComment' => $rowComment,
        'data' => $data,
        'row' => $row
    ]);
}

function postUpdate(){
    global $twig,$rowCategory,$varCategory,$categoryName,$idPost,$titlePost,$contentPost,$descriptionPost;
    echo $twig->render('postUpdate.html.twig',[
        'categoryName' => $categoryName,
        'varCategory' => $varCategory,
        'idPost' => $idPost,
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
    ]);
}