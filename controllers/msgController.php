<?php

class msgController extends controller {

    public function confirm(){
        $idUser = session::get('idUser');
        global $admin;
        if($idUser != null){
            print_r ( $this->twig->render('confirm.html.twig',[
                'session' => filter_var($idUser, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ( $this->twig->render('index.html.twig'));
        }
    }

    public function error(){
        $idUser = session::get('idUser');
        global $admin;
        if($idUser != null){
            print_r ($this->twig->render('error.html.twig',[
                'session' => filter_var($idUser, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('error.html.twig',[
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        }
    }

    public function confirmComment(){
        $idUser = session::get('idUser');
        global $admin;
        if($idUser != null){
            print_r ($this->twig->render('confirmComment.html.twig',[
                'session' => filter_var($idUser, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
}