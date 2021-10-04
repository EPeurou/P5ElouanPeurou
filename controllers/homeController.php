<?php

class homeController extends controller {

    public function homepage(){
        global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
        if(isset($_SESSION['idUser'])){
            print_r ($this->twig->render('index.html.twig',[
                'sessionToken' => filter_var($_SESSION['token'], FILTER_DEFAULT),
                'session' => filter_var($_SESSION['idUser'], FILTER_DEFAULT),
                'nameUser' => filter_var($nameUser, FILTER_DEFAULT),
                'firstName' => filter_var($firstNameUser, FILTER_DEFAULT),
                'email' => filter_var($emailUser, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
        
}