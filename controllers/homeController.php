<?php

class homeController extends controller {

    public function homepage(){
        $idUser = session::get('idUser');
        global $_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
        if($idUser != null ){
            print_r ($this->twig->render('index.html.twig',[
                'sessionToken' => filter_var($_SESSION['token'], FILTER_DEFAULT),
                'session' => filter_var($idUser, FILTER_DEFAULT),
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