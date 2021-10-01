<?php

class homeController extends controller {

    public function homepage(){
        global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('index.html.twig',[
                'sessionToken' => $_SESSION['token'],
                'session' => $_SESSION['idUser'],
                'nameUser' => addslashes($nameUser),
                'firstName' => addslashes($firstNameUser),
                'email' => addslashes($emailUser),
                'admin' =>addslashes($admin)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }
        
}