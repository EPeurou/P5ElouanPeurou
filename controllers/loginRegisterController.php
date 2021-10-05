<?php


class loginRegisterController extends controller {

    public function login(){
        global $id;
        print_r ($this->twig->render('login.html.twig',[
        ])); 
    }

    public function register(){
        global $id;
        print_r ($this->twig->render('register.html.twig',[
        ]));
    }
}