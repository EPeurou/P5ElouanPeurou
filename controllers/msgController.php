<?php

class msgController extends controller {

    public function confirm(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            print_r ( $this->twig->render('confirm.html.twig',[
                'session' => filter_var($_SESSION['idUser'], FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ( $this->twig->render('index.html.twig'));
        }
    }

    public function error(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            print_r ($this->twig->render('error.html.twig',[
                'session' => filter_var($_SESSION['idUser'], FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('error.html.twig',[
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        }
    }

    public function confirmComment(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            print_r ($this->twig->render('confirmComment.html.twig',[
                'session' => filter_var($_SESSION['idUser'], FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
}