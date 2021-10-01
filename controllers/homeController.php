<?php

class homeController extends controller {

    public function homepage(){
        global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('index.html.twig',[
                'sessionToken' => $_SESSION['token'],
                'session' => $_SESSION['idUser'],
                'nameUser' => filter_var($nameUser, FILTER_DEFAULT),
                'firstName' => filter_var($firstNameUser, FILTER_DEFAULT),
                'email' => filter_var($emailUser, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }
        
}