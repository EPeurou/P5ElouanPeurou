<?php


class loginRegisterController extends controller {

    public function login(){
        $idUser = session::get('idUser');
        global $idUser;
        print_r ($this->twig->render('login.html.twig',[
        ])); 
    }

    public function register(){
        $idUser = session::get('idUser');
        global $idUser;
        print_r ($this->twig->render('register.html.twig',[
        ]));
    }
}