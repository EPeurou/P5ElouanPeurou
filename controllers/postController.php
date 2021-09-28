<?php

class postController extends controller {

    public function post(){
        global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
        $pseudoPost,$idPost,$authorPost,$dataComment,$rowComment,$_SESSION,$admin,$creationDate;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('post.html.twig',[
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
        } else {
            return $this->twig->render('post.html.twig',[
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
                'admin' => $admin,
                'creationDate' => $creationDate
            ]);
        }
    }

    public function newPost(){
        global $twig,$rowCategory,$varCategory,$categoryName,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('newPost.html.twig',[
                'categoryName' => $categoryName,
                'varCategory' => $varCategory,
                'sessionToken' => $_SESSION['token'],
                'session' => $_SESSION['idUser'],
                'admin' => $admin
            ]);
        } else {
            return $this->twig->render('index.html.twig');
        }
    }

    public function myPost(){
        global $twig,$dataMy,$rowMy,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('myPost.html.twig', [
                'data' => $dataMy,
                'row' => $rowMy,
                'session' => $_SESSION['idUser'],
                'admin' => $admin
            ]);
        } else {
            return $this->twig->render('index.html.twig');
        }
    }

    public function postDelUp(){
        global $twig,$titlePost,$contentPost,$descriptionPost,$datePost,$categoryPost,
        $pseudoPost,$idPost,$dataComment,$rowComment,$data,$row,$_SESSION,$admin,$authorPost,$creationDate;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('postDeleteUpdate.html.twig', [
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
        } else {
            return $this->twig->render('index.html.twig');
        }
    }

    public function postUpdate(){
        global $twig,$rowCategory,$varCategory,$categoryName,$idPost,$titlePost,$contentPost,$descriptionPost,$_SESSION,$admin,$authorPost;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('postUpdate.html.twig',[
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
        } else {
            return $this->twig->render('index.html.twig');
        }
    }

}
