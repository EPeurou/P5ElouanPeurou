<?php

class msgController extends controller {

    public function confirm(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('confirm.html.twig',[
                'session' => $_SESSION['idUser'],
                'admin' => $admin
            ]);
        } else {
            return $this->twig->render('index.html.twig');
        }
    }

    public function error(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('error.html.twig',[
                'session' => $_SESSION['idUser'],
                'admin' => $admin
            ]);
        } else {
            return $this->twig->render('error.html.twig',[
                'admin' => $admin
            ]);
        }
    }

    public function confirmComment(){
        global $twig,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('confirmComment.html.twig',[
                'session' => $_SESSION['idUser'],
                'admin' => $admin
            ]);
        } else {
            return $this->twig->render('index.html.twig');
        }
    }
}