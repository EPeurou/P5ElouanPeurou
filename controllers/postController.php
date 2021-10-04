<?php

class postController extends controller {

    public function post(){
        global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
        $pseudoPost,$idPost,$authorPost,$dataComment,$rowComment,$_SESSION,$admin,$creationDate;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('post.html.twig',[
                'title' => filter_var($titlePost, FILTER_DEFAULT),
                'contentPost' => filter_var($contentPost, FILTER_DEFAULT),
                'descriptionPost' => filter_var($descriptionPost, FILTER_DEFAULT),
                'datePost' => filter_var($datePost, FILTER_DEFAULT),
                'categoryPost' => filter_var($categoryPost, FILTER_DEFAULT),
                'authorPost' => filter_var($authorPost, FILTER_DEFAULT),
                'pseudoPost' => filter_var($pseudoPost, FILTER_DEFAULT),
                'idPost' => filter_var($idPost, FILTER_DEFAULT),
                'dataComment' => filter_var($dataComment, FILTER_DEFAULT),
                'rowComment' => filter_var($rowComment, FILTER_DEFAULT),
                'sessionToken' => filter_var($_SESSION['token'], FILTER_DEFAULT),
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT),
                'creationDate' => filter_var($creationDate, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('post.html.twig',[
                'title' => filter_var($titlePost, FILTER_DEFAULT),
                'contentPost' => filter_var($contentPost, FILTER_DEFAULT),
                'descriptionPost' => filter_var($descriptionPost, FILTER_DEFAULT),
                'datePost' => filter_var($datePost, FILTER_DEFAULT),
                'categoryPost' => filter_var($categoryPost, FILTER_DEFAULT),
                'authorPost' => filter_var($authorPost, FILTER_DEFAULT),
                'pseudoPost' => filter_var($pseudoPost, FILTER_DEFAULT),
                'idPost' => filter_var($idPost, FILTER_DEFAULT),
                'dataComment' => array_filter($dataComment),
                'rowComment' => filter_var($rowComment, FILTER_DEFAULT),
                'sessionToken' => $_SESSION['token'],
                'admin' => filter_var($admin, FILTER_DEFAULT),
                'creationDate' => filter_var($creationDate, FILTER_DEFAULT)
            ]);
        }
    }

    public function newPost(){
        global $twig,$rowCategory,$varCategory,$categoryName,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('newPost.html.twig',[
                'categoryName' => filter_var($categoryName, FILTER_DEFAULT),
                'varCategory' => array_filter($varCategory),
                'sessionToken' => $_SESSION['token'],
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }

    public function myPost(){
        global $twig,$dataMy,$rowMy,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('myPost.html.twig', [
                'data' => array_filter($dataMy),
                'row' => filter_var($rowMy, FILTER_DEFAULT),
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }

    public function postDelUp(){
        global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
        $pseudoPost,$idPost,$dataComment,$rowComment,$data,$row,$_SESSION,$admin,$authorPost,$creationDate;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('postDeleteUpdate.html.twig', [
                'title' => filter_var($titlePost, FILTER_DEFAULT),
                'contentPost' => filter_var($contentPost, FILTER_DEFAULT),
                'descriptionPost' => filter_var($descriptionPost, FILTER_DEFAULT),
                'idPost' => filter_var($idPost, FILTER_DEFAULT),
                'datePost' => filter_var($datePost, FILTER_DEFAULT),
                'categoryPost' => filter_var($categoryPost, FILTER_DEFAULT),
                'authorPost' => filter_var($authorPost, FILTER_DEFAULT),
                'pseudoPost' => filter_var($pseudoPost, FILTER_DEFAULT),
                'dataComment' => array_filter($dataComment),
                'rowComment' => filter_var($rowComment, FILTER_DEFAULT),
                'data' => array_filter($data),
                'row' => filter_var($row, FILTER_DEFAULT),
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT),
                'creationDate' => filter_var($creationDate, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }

    public function postUpdate(){
        global $twig,$rowCategory,$varCategory,$categoryName,$idPost,$titlePost,$contentPost,$descriptionPost,$_SESSION,$admin,$authorPost;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('postUpdate.html.twig',[
                'categoryName' => filter_var($categoryName, FILTER_DEFAULT),
                'varCategory' => array_filter($varCategory),
                'idPost' => filter_var($idPost, FILTER_DEFAULT),
                'title' => filter_var($titlePost, FILTER_DEFAULT),
                'sessionToken' => $_SESSION['token'],
                'contentPost' => filter_var($contentPost, FILTER_DEFAULT),
                'descriptionPost' => filter_var($descriptionPost, FILTER_DEFAULT),
                'authorPost' => filter_var($authorPost, FILTER_DEFAULT),
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT),
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }

}
