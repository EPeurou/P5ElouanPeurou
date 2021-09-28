<?php

class homeController extends controller {

    public function homepage(){
        global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
        if(isset($_SESSION['idUser'])){
            print_r ($this->twig->render('index.html.twig',[
                'sessionToken' => $_SESSION['token'],
                'session' => $_SESSION['idUser'],
                'nameUser' => $nameUser,
                'firstName' => $firstNameUser,
                'email' => $emailUser,
                'admin' => $admin
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
        
}