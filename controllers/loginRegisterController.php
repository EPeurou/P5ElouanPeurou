<?php


class loginRegisterController extends controller {

    public function login(){
        global $twig,$id,$_SESSION;
        echo $this->twig->render('login.html.twig',[
            // 'id' => $id,
            // 'sessionToken' => $_SESSION['token'],
            // 'session' => $_SESSION['idUser']
        ]); 
    }

    public function register(){
        global $twig,$id,$_SESSION;
        echo $this->twig->render('register.html.twig',[
            // 'id' => $id,
            // 'sessionToken' => $_SESSION['token'],
            // 'session' => $_SESSION['idUser']
        ]);
    }
}