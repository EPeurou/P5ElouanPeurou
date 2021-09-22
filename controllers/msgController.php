<?php
require 'controller.php';

class msgController extends controller {

    public function confirm(){
        global $twig,$_SESSION,$admin;
        echo $this->twig->render('confirm.html.twig',[
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }

    public function error(){
        global $twig,$_SESSION,$admin;
        echo $this->twig->render('error.html.twig',[
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }

    public function confirmComment(){
        global $twig,$_SESSION,$admin;
        echo $this->twig->render('confirmComment.html.twig',[
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }
}