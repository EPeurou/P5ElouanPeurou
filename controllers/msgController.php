<?php

class msgController extends controller {

    public function confirm(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('confirm.html.twig',[
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }

    public function error(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('error.html.twig',[
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('error.html.twig',[
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        }
    }

    public function confirmComment(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('confirmComment.html.twig',[
                'session' => $_SESSION['idUser'],
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }
}