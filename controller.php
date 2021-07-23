<?php
if (!isset($_SESSION['idUser'])){
    session_start();
}
require __DIR__ . '/vendor/autoload.php';
require ('model/selectFlux.php');
require ('model/selectPostDetails.php');
require ('model/selectComment.php');
require ('model/selectCategory.php');
require ('model/selectMyPost.php');
require ('model/selectUserContact.php');

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

function homepage(){
    global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser;
    echo $twig->render('index.html.twig',[
        'session' => $_SESSION['idUser'],
        'nameUser' => $nameUser,
        'firstName' => $firstNameUser,
        'email' => $emailUser
    ]);
}

function flux(){
    global $twig,$data,$row,$_SESSION;
    echo $twig->render('flux.html.twig', [
        'data' => $data,
        'row' => $row,
        'session' => $_SESSION['idUser']
    ]);
}

function contact(){
    global $twig;
    echo $twig->render('contact.html.twig');
}

function newPost(){
    global $twig,$rowCategory,$varCategory,$categoryName,$_SESSION;
    echo $twig->render('newPost.html.twig',[
        'categoryName' => $categoryName,
        'varCategory' => $varCategory,
        'session' => $_SESSION['idUser']
    ]);
}

function apropos(){
    global $twig;
    echo $twig->render('about.html.twig');
}

function post(){
    global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
    $pseudoPost,$idPost,$dataComment,$rowComment,$_SESSION;
    echo $twig->render('post.html.twig',[
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'datePost' => $datePost,
        'categoryPost' => $categoryPost,
        'pseudoPost' => $pseudoPost,
        'idPost' => $idPost,
        'dataComment' => $dataComment,
        'rowComment' => $rowComment,
        'session' => $_SESSION['idUser']
    ]);
}

function confirm(){
    global $twig,$_SESSION;
    echo $twig->render('confirm.html.twig',[
        'session' => $_SESSION['idUser']
    ]);
}

function myPost(){
    global $twig,$dataMy,$rowMy,$_SESSION;
    echo $twig->render('myPost.html.twig', [
        'data' => $dataMy,
        'row' => $rowMy,
        'session' => $_SESSION['idUser']
    ]);
}

function postDelUp(){
    global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
    $pseudoPost,$idPost,$dataComment,$rowComment,$data,$row,$_SESSION;
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
        'row' => $row,
        'session' => $_SESSION['idUser']
    ]);
}

function postUpdate(){
    global $twig,$rowCategory,$varCategory,$categoryName,$idPost,$titlePost,$contentPost,$descriptionPost,$_SESSION;
    echo $twig->render('postUpdate.html.twig',[
        'categoryName' => $categoryName,
        'varCategory' => $varCategory,
        'idPost' => $idPost,
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'session' => $_SESSION['idUser']
    ]);
}

function login(){
    global $twig,$id,$_SESSION;
    echo $twig->render('login.html.twig',[
        'id' => $id,
        'session' => $_SESSION['idUser']
    ]);
}

function register(){
    global $twig,$id,$_SESSION;
    echo $twig->render('register.html.twig',[
        'id' => $id,
        'session' => $_SESSION['idUser']
    ]);
}