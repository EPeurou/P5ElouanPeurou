<?php


class loginRegisterController extends controller {

    public function login(){
        global $twig,$id,$_SESSION;
        echo $this->twig->render('login.html.twig',[
        ]); 
    }

    public function register(){
        global $twig,$id,$_SESSION;
        echo $this->twig->render('register.html.twig',[
        ]);
    }
}