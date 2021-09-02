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
require ('model/selectAdmin.php');
require ('model/selectCommentAdmin.php');

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

function homepage(){
    global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
    echo $twig->render('index.html.twig',[
        'session' => $_SESSION['idUser'],
        'nameUser' => $nameUser,
        'firstName' => $firstNameUser,
        'email' => $emailUser,
        'admin' => $admin
    ]);
}

function flux(){
    global $twig,$data,$row,$_SESSION,$admin;
    echo $twig->render('flux.html.twig', [
        'data' => $data,
        'row' => $row,
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}

function contact(){
    global $twig;
    echo $twig->render('contact.html.twig');
}

function newPost(){
    global $twig,$rowCategory,$varCategory,$categoryName,$_SESSION,$admin;
    echo $twig->render('newPost.html.twig',[
        'categoryName' => $categoryName,
        'varCategory' => $varCategory,
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}

function apropos(){
    global $twig;
    echo $twig->render('about.html.twig');
}

function post(){
    global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
    $pseudoPost,$idPost,$authorPost,$dataComment,$rowComment,$_SESSION,$admin;
    echo $twig->render('post.html.twig',[
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'datePost' => $datePost,
        'categoryPost' => $categoryPost,
        'authorPost' => $authorPost,
        'pseudoPost' => $pseudoPost,
        'idPost' => $idPost,
        'dataComment' => $dataComment,
        'rowComment' => $rowComment,
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}

function confirm(){
    global $twig,$_SESSION,$admin;
    echo $twig->render('confirm.html.twig',[
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}

function myPost(){
    global $twig,$dataMy,$rowMy,$_SESSION,$admin;
    echo $twig->render('myPost.html.twig', [
        'data' => $dataMy,
        'row' => $rowMy,
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}

function postDelUp(){
    global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
    $pseudoPost,$idPost,$dataComment,$rowComment,$data,$row,$_SESSION,$admin,$authorPost;
    echo $twig->render('postDeleteUpdate.html.twig', [
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'datePost' => $datePost,
        'categoryPost' => $categoryPost,
        'pseudoPost' => $pseudoPost,
        'idPost' => $idPost,
        'authorPost' => $authorPost,
        'dataComment' => $dataComment,
        'rowComment' => $rowComment,
        'data' => $data,
        'row' => $row,
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}

function postUpdate(){
    global $twig,$rowCategory,$varCategory,$categoryName,$idPost,$titlePost,$contentPost,$descriptionPost,$_SESSION,$admin,$authorPost;
    echo $twig->render('postUpdate.html.twig',[
        'categoryName' => $categoryName,
        'varCategory' => $varCategory,
        'idPost' => $idPost,
        'title' => $titlePost,
        'contentPost' => $contentPost,
        'descriptionPost' => $descriptionPost,
        'authorPost' => $authorPost,
        'session' => $_SESSION['idUser'],
        'admin' => $admin
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

function admin(){
    global $twig,$_SESSION,$admin,$dataCommentAdmin,$rowCommentAdmin;
    echo $twig->render('admin.html.twig',[
        'session' => $_SESSION['idUser'],
        'dataComment' => $dataCommentAdmin,
        'rowComment' => $rowCommentAdmin,
        'admin' => $admin
    ]);
}

function confirmComment(){
    global $twig,$_SESSION,$admin;
    echo $twig->render('confirmComment.html.twig',[
        'session' => $_SESSION['idUser'],
        'admin' => $admin
    ]);
}