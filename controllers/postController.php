<?php
require 'model/selectPostDetails.php';
require 'model/selectMyPost.php';
require 'model/selectComment.php';


class postController extends controller {

    public function post(){
        global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
        $pseudoPost,$idPost,$authorPost,$dataComment,$rowComment,$_SESSION,$admin,$creationDate;
        echo $this->twig->render('post.html.twig',[
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
            'sessionToken' => $_SESSION['token'],
            'session' => $_SESSION['idUser'],
            'admin' => $admin,
            'creationDate' => $creationDate
        ]);
    }

    public function newPost(){
        global $twig,$rowCategory,$varCategory,$categoryName,$_SESSION,$admin;
        echo $this->twig->render('newPost.html.twig',[
            'categoryName' => $categoryName,
            'varCategory' => $varCategory,
            'sessionToken' => $_SESSION['token'],
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }

    public function myPost(){
        global $twig,$dataMy,$rowMy,$_SESSION,$admin;
        echo $this->twig->render('myPost.html.twig', [
            'data' => $dataMy,
            'row' => $rowMy,
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }

    public function postDelUp(){
        global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
        $pseudoPost,$idPost,$dataComment,$rowComment,$data,$row,$_SESSION,$admin,$authorPost,$creationDate;
        echo $this->twig->render('postDeleteUpdate.html.twig', [
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
            'admin' => $admin,
            'creationDate' => $creationDate
        ]);
    }

    public function postUpdate(){
        global $twig,$rowCategory,$varCategory,$categoryName,$idPost,$titlePost,$contentPost,$descriptionPost,$_SESSION,$admin,$authorPost;
        echo $this->twig->render('postUpdate.html.twig',[
            'categoryName' => $categoryName,
            'varCategory' => $varCategory,
            'idPost' => $idPost,
            'title' => $titlePost,
            'sessionToken' => $_SESSION['token'],
            'contentPost' => $contentPost,
            'descriptionPost' => $descriptionPost,
            'authorPost' => $authorPost,
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }

}
