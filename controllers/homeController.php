<?php

require 'model/selectUserContact.php';
require 'model/selectAdmin.php';

class homeController extends controller {

    public function homepage(){
        global $twig,$_SESSION,$nameUser,$firstNameUser,$emailUser,$admin;
        echo $this->twig->render('index.html.twig',[
            'sessionToken' => $_SESSION['token'],
            'session' => $_SESSION['idUser'],
            'nameUser' => $nameUser,
            'firstName' => $firstNameUser,
            'email' => $emailUser,
            'admin' => $admin
        ]);
    }
        
}